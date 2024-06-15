<?php

namespace App\Http\Controllers;

use App\Services\FuzzificationTempServices as ServicesFuzzificationTempServices;
use App\Services\FuzzificationHumServices as ServicesFuzzificationHumServices;
use FuzzificationServices;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class FirebaseController extends Controller
{
    public function getData($dataType)
    {
        $client = new Client();
        $url = env('FIREBASE_API_URL', '') . '/.json';

        try {
            $response = $client->get($url);
            $newData = json_decode($response->getBody(), true);

            if ($dataType === 'tugas-akhir' && isset($newData['TugasAkhir']['SetData'])) {
                $newDataSet = $newData['TugasAkhir']['SetData'];
            } elseif ($dataType === 'rumah-jamur' && isset($newData['RumahJamur']['SetData'])) {
                $newDataSet = $newData['RumahJamur']['SetData'];
            } else {
                return response()->json(['error' => 'Data not found'], 500);
            }

            $extractedData = [
                'avgh' => $newDataSet['avgh'],
                'avgt' => $newDataSet['avgt'],
                'fuzzyOutput' => $this->fuzzyLogic($newDataSet['avgt'], $newDataSet['avgh'])
            ];

            $fileName = $dataType . '.json';
            $storedData = Storage::exists($fileName) ? json_decode(Storage::get($fileName), true) : [];

            $maxId = count($storedData) > 0 ? max(array_keys($storedData)) : 0;
            $newId = $maxId + 1;
            $storedData[$newId] = $extractedData;

            Storage::put($fileName, json_encode($storedData));

            return response()->json($storedData);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data from Firebase'], 500);
        }
    }

    public function showDashboard($dataType)
    {
        session(['dashboardType' => $dataType]);

        $client = new Client();
        $url = env('FIREBASE_API_URL', '') . '/.json';

        try {
            $response = $client->get($url);
            $data = json_decode($response->getBody(), true);

            if ($dataType === 'tugas-akhir' && isset($data['TugasAkhir']['SetData'])) {
                $tugasAkhirData = $data['TugasAkhir']['SetData'];
                $latestData = $this->getLatestData('tugas-akhir');
                return view('dashboard.dashboard', compact('tugasAkhirData', 'latestData'));
            } elseif ($dataType === 'rumah-jamur' && isset($data['RumahJamur']['SetData'])) {
                $rumahJamurData = $data['RumahJamur']['SetData'];
                $latestData = $this->getLatestData('rumah-jamur');
                $this->fuzzyLogic(29, 82, new ServicesFuzzificationTempServices(), new ServicesFuzzificationHumServices());
                return view('dashboard.dashboard', compact('rumahJamurData', 'latestData'));
            } else {
                return response()->json(['error' => 'Data not found'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data from Firebase'], 500);
        }
    }

    public function showHistory($dataType)
    {
        try {
            $fileName = $dataType . '.json';
            $filePath = storage_path('app/' . $fileName);

            if (!file_exists($filePath)) {
                return response()->json(['error' => 'File not found'], 500);
            }

            $jsonString = file_get_contents($filePath);
            $data = json_decode($jsonString, true);

            $avgtData = [];
            $avghData = [];

            foreach ($data as $key => $value) {
                if (isset($value['avgh']) && isset($value['avgt'])) {
                    $avgtData[$key] = $value['avgt'];
                    $avghData[$key] = $value['avgh'];
                }
            }

            return view('history.history', compact('avgtData', 'avghData'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data from JSON file'], 500);
        }
    }

    private function getLatestData($dataType)
    {
        $fileName = $dataType . '.json';
        $storedData = Storage::exists($fileName) ? json_decode(Storage::get($fileName), true) : [];

        // Get the latest 3 entries
        $latestData = array_slice($storedData, -3, 3, true);

        return $latestData;
    }

    // Fuzzy Methods

    private function fuzzyLogic($temperature, $humidity)
    {
        // TEMPERATURE
        $fuzzificationTempServices = new ServicesFuzzificationTempServices();
        
        // Define membership functions for temperature
        $muLowTemp = $fuzzificationTempServices->muLowTemp($temperature);
        $muMediumTemp = $fuzzificationTempServices->muMediumTemp($temperature);
        $muHighTemp = $fuzzificationTempServices->muHighTemp($temperature);

        // Get Highest Membership Value
        $fuzzyTempResult = max($muHighTemp, $muMediumTemp, $muLowTemp);

        dd($muLowTemp, $muMediumTemp, $muHighTemp, $fuzzyTempResult);

        // Rules for Temperature
        $tempRules = [
            'Low' => $muLowTemp,
            'Normal' => $muMediumTemp ,
            'High'=> $muHighTemp,
        ];

        $jawabanTemp = array_keys($tempRules, $fuzzyTempResult);
        dd(end($jawabanTemp));
        dd((array_keys($tempRules, $fuzzyTempResult)));

        $fuzzyTempOutput = $tempRules[$fuzzyTempResult];
        dd($fuzzyTempOutput);
        
        // HUMIDITY
        $fuzzificationHumServices = new ServicesFuzzificationHumServices();
        
        // Define membership functions for humidity
        $muLowHum = $fuzzificationHumServices->muLowHum($humidity);
        $muMediumHum = $fuzzificationHumServices->muMediumHum($humidity);
        $muHighHum = $fuzzificationHumServices->muHighHum($humidity);

        // Get Highest Membership Value
        $fuzzyHumResult = max($muHighHum, $muMediumHum, $muLowHum);

        dd($muLowHum, $muMediumHum, $muHighHum, $fuzzyHumResult);

        // Rules for Humidity
        $humRules = [
            'Low' => $muLowHum,
            'Normal' => $muMediumHum ,
            'High'=> $muHighHum,
        ];

        $jawaban = array_keys($humRules, $fuzzyHumResult);
        dd(end($jawaban));
        dd((array_keys($humRules, $fuzzyHumResult)));

        $fuzzyHumOutput = $humRules[$fuzzyHumResult];
        dd($fuzzyHumOutput);

        // // Define membership functions for temperature
        // $tempLow = max(0, min(1, (26 - $temperature) / 6));
        // $tempNormal = max(0, min(1, ($temperature - 26) / 4, (30 - $temperature) / 4));
        // $tempHigh = max(0, min(1, ($temperature - 30) / 10));

        // // Define membership functions for humidity
        // $humLow = max(0, min(1, (75 - $humidity) / 15));
        // $humNormal = max(0, min(1, ($humidity - 75) / 15, (90 - $humidity) / 15));
        // $humHigh = max(0, min(1, ($humidity - 90) / 10));

        // // Fuzzy Rules based on the provided table
        // $rules = [
        //     'low_temp_low_hum' => min($tempLow, $humLow),
        //     'low_temp_normal_hum' => min($tempLow, $humNormal),
        //     'low_temp_high_hum' => min($tempLow, $humHigh),
        //     'normal_temp_low_hum' => min($tempNormal, $humLow),
        //     'normal_temp_normal_hum' => min($tempNormal, $humNormal),
        //     'normal_temp_high_hum' => min($tempNormal, $humHigh),
        //     'high_temp_low_hum' => min($tempHigh, $humLow),
        //     'high_temp_normal_hum' => min($tempHigh, $humNormal),
        //     'high_temp_high_hum' => min($tempHigh, $humHigh),
        // ];

        // // Output mapping
        // $outputs = [
        //     'low_temp_low_hum' => 'Low',
        //     'low_temp_normal_hum' => 'Low',
        //     'low_temp_high_hum' => 'Low',
        //     'normal_temp_low_hum' => 'Low',
        //     'normal_temp_normal_hum' => 'Normal',
        //     'normal_temp_high_hum' => 'High',
        //     'high_temp_low_hum' => 'High',
        //     'high_temp_normal_hum' => 'High',
        //     'high_temp_high_hum' => 'High',
        // ];

        // // Defuzzification - Using maximum membership principle
        // $maxRule = array_keys($rules, max($rules));
        // $fuzzyOutput = $outputs[$maxRule[0]];

        // return $fuzzyOutput;
    }
}
