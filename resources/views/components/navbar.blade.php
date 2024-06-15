@yield('navbar')
<nav
    class="flex justify-center items-center w-full bg-white border-b border-gray-200 dark:bg-gray-800 py-4 dark:border-gray-700">
    <div class="w-full px-6">
        <div class="flex items-center justify-between">
            <a href="https://pens.ac.id" class="flex gap-x-3 justify-center items-center">
                <svg class="h-10 w-10 rounded-lg dark:fill-white fill-blue-600" width="60" height="60" viewBox="0 0 60 60"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_115_44)">
                        <path
                            d="M6.4541 -0.0157548C6.53663 -0.0160305 6.61916 -0.0163061 6.70419 -0.0165901C6.98141 -0.0173718 7.25863 -0.0173205 7.53586 -0.0172724C7.73637 -0.0176591 7.93687 -0.0180957 8.13737 -0.018578C8.68894 -0.0197516 9.2405 -0.0201877 9.79206 -0.0204987C10.3867 -0.0209563 10.9814 -0.0220787 11.5761 -0.0231017C13.0125 -0.0254173 14.4489 -0.0265975 15.8854 -0.0276401C16.5619 -0.0281539 17.2385 -0.0287828 17.9151 -0.0293967C20.1643 -0.0313902 22.4135 -0.0330888 24.6627 -0.0339375C25.2464 -0.0341613 25.83 -0.0343864 26.4137 -0.0346156C26.6313 -0.0347006 26.6313 -0.0347006 26.8533 -0.0347873C29.2029 -0.0357599 31.5525 -0.0387289 33.9021 -0.0425352C36.3148 -0.0464116 38.7274 -0.0485215 41.14 -0.0488958C42.4945 -0.0491495 43.849 -0.0501734 45.2034 -0.0531686C46.357 -0.0557138 47.5106 -0.0566551 48.6642 -0.0555163C49.2525 -0.0549841 49.8408 -0.0552036 50.4291 -0.0574805C50.9684 -0.0595496 51.5077 -0.0594274 52.047 -0.0576097C52.2414 -0.0573317 52.4358 -0.0578356 52.6302 -0.0592303C54.7782 -0.0736774 56.598 0.471129 58.1524 1.9972C59.3049 3.18995 60.0133 4.79992 60.0156 6.45416C60.0159 6.53669 60.0162 6.61922 60.0165 6.70425C60.0173 6.98148 60.0172 7.2587 60.0172 7.53592C60.0175 7.73643 60.018 7.93693 60.0185 8.13744C60.0196 8.689 60.0201 9.24056 60.0204 9.79212C60.0208 10.3868 60.022 10.9815 60.023 11.5761C60.0253 13.0126 60.0265 14.449 60.0275 15.8855C60.028 16.562 60.0287 17.2386 60.0293 17.9151C60.0313 20.1643 60.033 22.4136 60.0338 24.6628C60.0341 25.2464 60.0343 25.8301 60.0345 26.4137C60.0346 26.5588 60.0346 26.7039 60.0347 26.8533C60.0357 29.2029 60.0386 31.5526 60.0424 33.9022C60.0463 36.3148 60.0484 38.7275 60.0488 41.1401C60.049 42.4946 60.0501 43.849 60.0531 45.2035C60.0556 46.3571 60.0565 47.5107 60.0554 48.6643C60.0549 49.2526 60.0551 49.8409 60.0574 50.4292C60.0594 50.9685 60.0593 51.5078 60.0575 52.047C60.0572 52.2415 60.0577 52.4359 60.0591 52.6303C60.0742 54.8655 59.4395 56.6754 57.8654 58.2815C56.6896 59.4062 55.1707 60.0134 53.5457 60.0157C53.4632 60.016 53.3807 60.0163 53.2956 60.0165C53.0184 60.0173 52.7412 60.0173 52.464 60.0172C52.2635 60.0176 52.063 60.018 51.8625 60.0185C51.3109 60.0197 50.7593 60.0201 50.2078 60.0204C49.6131 60.0209 49.0184 60.022 48.4238 60.023C46.9873 60.0254 45.5509 60.0265 44.1144 60.0276C43.4379 60.0281 42.7613 60.0287 42.0848 60.0293C39.8355 60.0313 37.5863 60.033 35.3371 60.0339C34.7534 60.0341 34.1698 60.0343 33.5861 60.0346C33.4411 60.0346 33.296 60.0347 33.1466 60.0347C30.7969 60.0357 28.4473 60.0387 26.0977 60.0425C23.6851 60.0464 21.2724 60.0485 18.8598 60.0488C17.5053 60.0491 16.1508 60.0501 14.7964 60.0531C13.6428 60.0557 12.4892 60.0566 11.3356 60.0555C10.7473 60.0549 10.159 60.0552 9.57068 60.0574C9.03139 60.0595 8.49213 60.0594 7.95284 60.0576C7.75844 60.0573 7.56403 60.0578 7.36964 60.0592C5.13438 60.0742 3.32454 59.4395 1.71836 57.8654C0.593724 56.6897 -0.0134995 55.1708 -0.0158158 53.5458C-0.0160915 53.4633 -0.0163673 53.3807 -0.0166513 53.2957C-0.017433 53.0185 -0.0173816 52.7413 -0.0173335 52.464C-0.0177202 52.2635 -0.018157 52.063 -0.0186393 51.8625C-0.0198128 51.311 -0.0202488 50.7594 -0.0205598 50.2078C-0.0210174 49.6132 -0.0221398 49.0185 -0.0231628 48.4238C-0.0254784 46.9874 -0.0266584 45.5509 -0.0277011 44.1145C-0.0282149 43.4379 -0.0288437 42.7614 -0.0294575 42.0848C-0.0314511 39.8356 -0.0331497 37.5864 -0.0339985 35.3372C-0.0342223 34.7535 -0.0344475 34.1699 -0.0346767 33.5862C-0.0347334 33.4411 -0.0347899 33.2961 -0.0348483 33.1466C-0.0358209 30.797 -0.0387901 28.4474 -0.0425963 26.0978C-0.0464728 23.6851 -0.0485824 21.2725 -0.0489568 18.8598C-0.0492104 17.5054 -0.0502347 16.1509 -0.05323 14.7964C-0.0557751 13.6428 -0.0567162 12.4893 -0.0555773 11.3357C-0.0550452 10.7474 -0.0552647 10.1591 -0.0575416 9.57074C-0.0596107 9.03145 -0.0594885 8.4922 -0.0576708 7.9529C-0.0573928 7.7585 -0.0578967 7.56409 -0.0592913 7.3697C-0.0737385 5.2217 0.471068 3.40192 1.99714 1.84751C3.18988 0.695026 4.79986 -0.0133968 6.4541 -0.0157548ZM9.94025 10.0767C8.24926 11.8274 7.56413 13.9275 7.57476 16.3115C7.61513 18.4973 8.44681 20.4114 9.98694 21.9552C12.8887 24.7223 15.6557 24.4922 19.6874 24.4922C19.6874 28.1273 19.6874 31.7625 19.6874 35.5078C18.2179 35.5078 16.7484 35.5078 15.2343 35.5078C12.7169 36.0113 10.7007 36.8842 9.141 38.9872C7.73338 41.1153 7.38495 43.2599 7.66379 45.7722C8.12018 47.9327 9.58627 49.9149 11.4056 51.1171C13.436 52.3567 15.6081 52.7372 17.9296 52.2656C20.1215 51.7296 21.9568 50.3903 23.203 48.5156C24.7694 45.8061 24.4921 43.611 24.4921 40.3125C28.1273 40.3125 31.7624 40.3125 35.5077 40.3125C35.5077 41.7433 35.5077 43.1742 35.5077 44.6484C35.991 47.2258 36.839 49.2657 38.9872 50.8589C41.0398 52.2166 43.274 52.7524 45.7045 52.3146C48.0297 51.825 49.9291 50.4069 51.2141 48.4456C52.4074 46.3874 52.7632 44.0471 52.2069 41.7187C51.4901 39.4683 50.0156 37.5828 47.9144 36.4583C45.4265 35.1875 43.235 35.5078 40.3124 35.5078C40.3124 31.8726 40.3124 28.2375 40.3124 24.4922C41.7433 24.4922 43.1741 24.4922 44.6484 24.4922C47.2257 24.0089 49.2656 23.1609 50.8588 21.0127C52.2664 18.8846 52.6149 16.7401 52.336 14.2277C51.8796 12.0673 50.4136 10.0851 48.5943 8.88288C46.5899 7.65894 44.3715 7.23191 42.0702 7.73435C39.8762 8.28287 38.0475 9.60291 36.7968 11.4843C35.2245 14.2042 35.5077 16.3592 35.5077 19.6875C31.8726 19.6875 28.2374 19.6875 24.4921 19.6875C24.4921 18.2566 24.4921 16.8258 24.4921 15.3515C24.0088 12.7742 23.1608 10.7342 21.0126 9.14106C17.4552 6.78798 13.0314 7.03926 9.94025 10.0767Z" />
                        <path
                            d="M24.4922 24.4922C28.1273 24.4922 31.7625 24.4922 35.5078 24.4922C35.5078 28.1273 35.5078 31.7625 35.5078 35.5078C31.8727 35.5078 28.2375 35.5078 24.4922 35.5078C24.4922 31.8727 24.4922 28.2375 24.4922 24.4922Z" />
                        <path
                            d="M46.2322 12.9721C46.9906 13.5924 47.508 14.3801 47.6952 15.3515C47.789 16.4974 47.6103 17.4888 46.8749 18.3984C46.1144 19.1971 45.3651 19.6873 44.237 19.7274C44.0541 19.7273 43.8712 19.7254 43.6884 19.7218C43.591 19.7213 43.4937 19.7208 43.3934 19.7203C43.0866 19.7184 42.7798 19.7139 42.473 19.7094C42.2633 19.7077 42.0536 19.7061 41.8438 19.7046C41.3333 19.7008 40.8229 19.6947 40.3124 19.6875C40.3007 19.0559 40.2923 18.4244 40.2866 17.7928C40.2843 17.5783 40.2811 17.3638 40.277 17.1494C40.2713 16.8395 40.2687 16.5298 40.2666 16.2199C40.2642 16.1254 40.2618 16.0309 40.2593 15.9335C40.2589 14.8935 40.6754 14.0864 41.3762 13.3346C42.7467 12.0589 44.6797 11.9258 46.2322 12.9721Z" />
                        <path
                            d="M16.1856 40.2896C16.3363 40.2901 16.3363 40.2901 16.49 40.2906C16.8088 40.2919 17.1276 40.2948 17.4463 40.2978C17.6633 40.299 17.8803 40.3001 18.0973 40.301C18.6274 40.3036 19.1575 40.3077 19.6875 40.3125C19.6963 40.9274 19.7026 41.5422 19.7069 42.1571C19.7086 42.3659 19.711 42.5747 19.7141 42.7835C19.7184 43.0852 19.7203 43.3868 19.7219 43.6885C19.7237 43.7805 19.7255 43.8724 19.7274 43.9672C19.7277 45.112 19.3648 45.905 18.5798 46.7299C17.7354 47.472 16.807 47.743 15.7036 47.7269C14.5999 47.6278 13.7215 47.1288 13.0079 46.289C12.3603 45.2573 12.1094 44.2275 12.3807 43.0215C12.7293 41.952 13.4144 41.0853 14.4141 40.5469C15.0186 40.2975 15.5436 40.2815 16.1856 40.2896Z" />
                        <path
                            d="M17.9297 12.7735C18.7864 13.3631 19.4108 14.1106 19.6875 15.1172C19.7181 15.4738 19.7149 15.828 19.7104 16.1856C19.7101 16.2861 19.7098 16.3865 19.7094 16.49C19.7081 16.8088 19.7052 17.1275 19.7022 17.4463C19.701 17.6633 19.6999 17.8803 19.699 18.0972C19.6964 18.6274 19.6924 19.1574 19.6875 19.6875C19.0727 19.6963 18.4578 19.7026 17.8429 19.7068C17.6341 19.7086 17.4253 19.711 17.2166 19.714C16.9149 19.7184 16.6132 19.7203 16.3115 19.7219C16.2196 19.7237 16.1276 19.7255 16.0329 19.7274C14.888 19.7277 14.095 19.3648 13.2701 18.5797C12.5281 17.7353 12.257 16.807 12.2731 15.7036C12.3722 14.5998 12.8712 13.7215 13.711 13.0078C15.0637 12.1588 16.4861 12.0286 17.9297 12.7735Z" />
                        <path
                            d="M40.3125 40.3125C40.9252 40.3008 41.5379 40.2924 42.1507 40.2867C42.3587 40.2844 42.5667 40.2812 42.7746 40.2771C44.2958 40.248 45.5073 40.2776 46.6694 41.3763C47.4483 42.2298 47.7594 43.1556 47.731 44.3088C47.6154 45.4081 47.1285 46.2788 46.289 46.9922C45.2573 47.6397 44.2275 47.8906 43.0215 47.6193C41.952 47.2708 41.0853 46.5856 40.5469 45.5859C40.2975 44.9814 40.2815 44.4564 40.2896 43.8144C40.2899 43.7139 40.2903 43.6135 40.2906 43.51C40.2919 43.1912 40.2948 42.8725 40.2978 42.5537C40.299 42.3367 40.3001 42.1197 40.301 41.9028C40.3036 41.3727 40.3077 40.8426 40.3125 40.3125Z" />
                    </g>
                </svg>

                <span
                    class="self-center text-xl font-semibold sm:text-2xl text-blue-600 dark:text-white">Monitoring</span>
            </a>

            {{-- dark | light mode --}}
            <div class="flex items-center gap-5">
                {{-- toggle --}}
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 border-gray-100 dark:border-gray-700 border-2 shadow-sm shadow-blue-600 dark:shadow-white">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                {{-- account --}}
                <div class="flex items-center gap-3">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>

                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Admin
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    firstadmin@mail.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class="text-black dark:text-white-color">Admin</p>
                </div>

            </div>
        </div>
    </div>
</nav>
