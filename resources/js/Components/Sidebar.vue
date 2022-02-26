<template>
    <div id="sidebar" class="transition-all duration-300 shadow-lg" :class="toggleSidebar ? 'md:w-[250px] relative' : 'md:w-[70px] relative' ">
        <div class="flex flex-col bg-sidebar  transition-all duration-300  md:h-screen md:fixed top-0 right-0 overflow-hidden p-4"  :class="toggleSidebar ? 'h-full  md:w-[250px] md:h-full duration-300  ' : 'h-[50px] md:w-[70px] md:h-full duration-300   ' ">
            <div class="flex flex-row text-white w-full justify-between mb-4 ">
                <button @click="toggleSidebar = !toggleSidebar" class="outline-none border-none">
                    <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2.5H21.5M2 9H21.5M2 15.5H21.5" stroke="#353F53" stroke-width="3.65625" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="whitespace-nowrap transition-all duration-300 " :class="{'opacity-0' : !toggleSidebar }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.509" height="32.252" viewBox="0 0 31.509 32.252">
                        <g id="Group_11" data-name="Group 11" transform="translate(-275.249 -410.25)">
                            <g id="tree-1.1s-200px" transform="translate(276 411)">
                            <g id="Group_7" data-name="Group 7" transform="translate(0 6.497)">
                                <path id="Path_38" data-name="Path 38" d="M25.536,53.291c-4.937.2-9.131-3.388-9.344-8l-.417-9.008a3.21,3.21,0,0,1,3.193-3.247,3.254,3.254,0,0,1,3.478,2.98l.417,9.008a2.235,2.235,0,0,0,2.387,2.043,3.254,3.254,0,0,1,3.478,2.98A3.206,3.206,0,0,1,25.536,53.291Z" transform="translate(-15.773 -33.034)" fill="#abbd81" stroke="#333435" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                            <g id="Group_8" data-name="Group 8" transform="translate(15.112 10.213)">
                                <path id="Path_39" data-name="Path 39" d="M55.442,54.71l-1.386-.222a3.066,3.066,0,0,1-2.663-3.51,3.244,3.244,0,0,1,3.759-2.486l1.386.222a2.229,2.229,0,0,0,2.582-1.707l.648-3.542a3.244,3.244,0,0,1,3.759-2.486,3.066,3.066,0,0,1,2.663,3.51l-.648,3.542C64.731,52.472,60.2,55.466,55.442,54.71Z" transform="translate(-51.346 -40.934)" fill="#abbd81" stroke="#333435" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                            <g id="Group_10" data-name="Group 10" transform="translate(5.559 0)">
                                <g id="Group_9" data-name="Group 9" transform="translate(3.451)">
                                <path id="Path_40" data-name="Path 40" d="M47.406,35.747H38.072L36.74,9.91c0-6.553,11.993-6.553,11.993,0Z" transform="translate(-36.74 -4.995)" fill="#abbd81" stroke="#333435" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                </g>
                                <path id="Path_41" data-name="Path 41" d="M29.12,91.467q9.294-5.849,18.587,0Z" transform="translate(-29.12 -60.715)" fill="#333435" stroke="#333435" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                <line id="Line_2" data-name="Line 2" x2="0.177" y2="7.704" transform="translate(7.292 4.776)" fill="none" stroke="#333435" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                            </g>
                            <g id="tie-1.1s-200px" transform="translate(287.821 426.56)">
                            <path id="Path_26" data-name="Path 26" d="M51.087,23.912,51,23.575l-1,.353v.367Z" transform="translate(-46.796 -21.197)" fill="#fff"/>
                            <path id="Path_27" data-name="Path 27" d="M52.018,7a.608.608,0,0,0-.062,0h-.971L50,7.347v.367Z" transform="translate(-46.766 -6.781)" fill="#fff"/>
                            <path id="Path_28" data-name="Path 28" d="M51.518,39.149l-.087-.337-1.431.5v.367Z" transform="translate(-46.783 -34.474)" fill="#fff"/>
                            <path id="Path_29" data-name="Path 29" d="M52.379,69.622l-.087-.337L50,70.093v.367Z" transform="translate(-46.71 -60.994)" fill="#fff"/>
                            <path id="Path_30" data-name="Path 30" d="M51.948,54.386l-.087-.337L50,54.705v.367Z" transform="translate(-46.768 -47.74)" fill="#fff"/>
                            <path id="Path_31" data-name="Path 31" d="M53.048,14.634l-.219-.98-.212-.949-.219-.98-.212-.949-.219-.98-.212-.949-.219-.98-.145-.651.358-.471.857-1.129a.275.275,0,0,0,.034-.3A.757.757,0,0,0,51.957,5H50v.655l.985-.4h.971a.526.526,0,0,1,.062,0L50,6.079V7.76l1-.408.087.389L50,8.185V9.866l1.431-.583.087.389L50,10.29v1.681l1.862-.758.087.389L50,12.4v1.681l2.292-.934.087.389L50,14.5v1.9l3.072-1.658Z" transform="translate(-46.71 -5)" fill="#440f13"/>
                            <path id="Path_32" data-name="Path 32" d="M43.782,27.619l1.3-.46v-.367l-1.2.423Z" transform="translate(-41.935 -23.998)" fill="#e0e0e0"/>
                            <path id="Path_33" data-name="Path 33" d="M42.552,11.02l1.368-.482V10.17l-1.614.569Z" transform="translate(-40.778 -9.603)" fill="#e0e0e0"/>
                            <path id="Path_34" data-name="Path 34" d="M41.319,44.424l1.821-.642v-.367l-1.717.605Z" transform="translate(-40.005 -38.475)" fill="#e0e0e0"/>
                            <path id="Path_35" data-name="Path 35" d="M40.468,77.606l1.646-.58v-.367L40.02,77.4Z" transform="translate(-38.989 -67.27)" fill="#e0e0e0"/>
                            <path id="Path_36" data-name="Path 36" d="M38.856,61.228l2.338-.824v-.367l-2.234.788Z" transform="translate(-38.122 -52.937)" fill="#e0e0e0"/>
                            <path id="Path_37" data-name="Path 37" d="M36.783,15.171l-.448-.242,2.094-.853V12.4l-2.338.953.1-.467,2.234-.91V10.29l-1.821.742.1-.467,1.717-.7V8.185l-1.3.531.1-.467,1.2-.489V6.079l-1.368.557-.246-.324,1.614-.658V5H36.472c-.372,0-.654.166-.706.365a.279.279,0,0,0,.056.247l.463.61.6.791.151.2-.2.89-.254,1.139-.262,1.177-.254,1.139L35.8,12.734l-.254,1.139-.193.867.3.16,1.093.59,1.129.609.553.3V14.5Z" transform="translate(-35.356 -5)" fill="#c33737"/>
                            </g>
                        </g>
                    </svg>

                </div>
            </div>
            <div class="mb-4 relative bg-child rounded-md flex flex-row justify-between items-center h-[43px] pr-1 ">
                <button class="outline-none border-none w-[30px] h-[31px]">
                    <svg class="" width="30" height="31" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.82495" cy="7.82492" r="6.74142" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                        <path d="M12.5137 12.8638L15.1568 15.4999" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <input type="text" class="outline-none text-white border-none bg-transparent rounded-md w-full h-[31px] focus:outline-0" :class="{'hidden justify-center' : !toggleSidebar}" placeholder="جستوجو...">
            </div>
            
            <ul class="flex flex-col space-y-5">
                <LinkPage name="داشبورد" routeName="dashboard" :toggleSidebar="toggleSidebar" >
                    <svg width="30" height="31" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.15" cx="12.8062" cy="13.2944" r="9.19385" fill="#E81C4D"></circle>
                        <path d="M0.785 3.66683C0.785 4.40379 0.825512 4.94242 0.914603 5.34329C1.00171 5.73525 1.12449 5.94578 1.2561 6.0774C1.38771 6.20901 1.59824 6.33178 1.9902 6.41889C2.39108 6.50798 2.92971 6.5485 3.66667 6.5485C4.40363 6.5485 4.94226 6.50798 5.34313 6.41889C5.73509 6.33178 5.94562 6.20901 6.07723 6.0774C6.20885 5.94578 6.33162 5.73525 6.41873 5.34329C6.50782 4.94242 6.54833 4.40379 6.54833 3.66683C6.54833 2.92987 6.50782 2.39124 6.41873 1.99037C6.33162 1.59841 6.20885 1.38788 6.07723 1.25626C5.94562 1.12465 5.73509 1.00188 5.34313 0.914766C4.94226 0.825675 4.40363 0.785163 3.66667 0.785163C2.92971 0.785163 2.39108 0.825675 1.9902 0.914766C1.59824 1.00188 1.38771 1.12465 1.2561 1.25626C1.12449 1.38788 1.00171 1.59841 0.914603 1.99037C0.825512 2.39124 0.785 2.92987 0.785 3.66683Z" stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M0.785 12.3333C0.785 13.0703 0.825512 13.6089 0.914603 14.0098C1.00171 14.4018 1.12449 14.6123 1.2561 14.7439C1.38771 14.8755 1.59824 14.9983 1.9902 15.0854C2.39108 15.1745 2.92971 15.215 3.66667 15.215C4.40363 15.215 4.94226 15.1745 5.34313 15.0854C5.73509 14.9983 5.94562 14.8755 6.07723 14.7439C6.20885 14.6123 6.33162 14.4018 6.41873 14.0098C6.50782 13.6089 6.54833 13.0703 6.54833 12.3333C6.54833 11.5964 6.50782 11.0577 6.41873 10.6569C6.33162 10.2649 6.20885 10.0544 6.07723 9.92277C5.94562 9.79115 5.73509 9.66838 5.34313 9.58127C4.94226 9.49218 4.40363 9.45167 3.66667 9.45167C2.92971 9.45167 2.39108 9.49218 1.9902 9.58127C1.59824 9.66838 1.38771 9.79115 1.2561 9.92277C1.12449 10.0544 1.00171 10.2649 0.914603 10.6569C0.825512 11.0577 0.785 11.5964 0.785 12.3333Z" stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9.45163 12.3333C9.45163 13.0703 9.49214 13.6089 9.58123 14.0098C9.66834 14.4018 9.79111 14.6123 9.92273 14.7439C10.0543 14.8755 10.2649 14.9983 10.6568 15.0854C11.0577 15.1745 11.5963 15.215 12.3333 15.215C13.0702 15.215 13.6089 15.1745 14.0098 15.0854C14.4017 14.9983 14.6122 14.8755 14.7439 14.7439C14.8755 14.6123 14.9982 14.4018 15.0854 14.0098C15.1744 13.6089 15.215 13.0703 15.215 12.3333C15.215 11.5964 15.1744 11.0577 15.0854 10.6569C14.9982 10.2649 14.8755 10.0544 14.7439 9.92277C14.6122 9.79115 14.4017 9.66838 14.0098 9.58127C13.6089 9.49218 13.0702 9.45167 12.3333 9.45167C11.5963 9.45167 11.0577 9.49218 10.6568 9.58127C10.2649 9.66838 10.0543 9.79115 9.92273 9.92277C9.79111 10.0544 9.66834 10.2649 9.58123 10.6569C9.49214 11.0577 9.45163 11.5964 9.45163 12.3333Z" stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12.3333 1.3335V3.66683M12.3333 6.00016V3.66683M12.3333 3.66683H14.6667H10" stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </LinkPage>
                
                <LinkPage name="مقاله ها" routeName="articles.index" :toggleSidebar="toggleSidebar" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
                        <g id="text-1.1s-200px_1_" data-name="text-1.1s-200px(1)" transform="translate(-10.005 -10.005)">
                            <path id="Path_20" data-name="Path 20" d="M15.5,0A15.5,15.5,0,1,1,0,15.5,15.5,15.5,0,0,1,15.5,0Z" transform="translate(10.005 10.005)" fill="#f7cb15"/>
                            <path id="Path_13" data-name="Path 13" d="M29,30.034V45.4H40.164V30.034Z" transform="translate(-11.687 -12.323)" fill="none" stroke="#fffbfb" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            <g id="Group_5" data-name="Group 5" transform="translate(19.794 20.143)">
                            <path id="Path_14" data-name="Path 14" d="M35.446,36.353h6.2" transform="translate(-35.446 -36.353)" fill="none" stroke="#fffbfb" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            <path id="Path_15" data-name="Path 15" d="M35.446,43.023h6.2" transform="translate(-35.446 -40.456)" fill="none" stroke="#fffbfb" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            <path id="Path_16" data-name="Path 16" d="M35.446,49.693h6.2" transform="translate(-35.446 -44.559)" fill="none" stroke="#fffbfb" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            <path id="Path_17" data-name="Path 17" d="M35.446,56.363h6.2" transform="translate(-35.446 -48.661)" fill="none" stroke="#fffbfb" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                            <path id="Path_18" data-name="Path 18" d="M35.446,63.21h1.065" transform="translate(-15.652 -32.73)" fill="none" stroke="#fffbfb" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            <path id="Path_19" data-name="Path 19" d="M53.539,32.026a.7.7,0,0,0-.984,0l-1.116,1.116-7.184,7.185-.193.193-.08.285-.855,3.053a.186.186,0,0,0,.229.229l3.053-.855.285-.08.193-.193,7.185-7.185,1.116-1.116a.7.7,0,0,0,0-.984l-1.648-1.647Z" transform="translate(-20.373 -13.423)" fill="#feffff" stroke="#fffbfb" stroke-miterlimit="10" stroke-width="1.5"/>
                        </g>
                    </svg>
                </LinkPage>

                <LinkPage name="رزومه ها" routeName="cvs.index" :toggleSidebar="toggleSidebar" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.202" height="38.315" viewBox="0 0 31.202 38.315">
                        <g id="medal-1.1s-200px" transform="translate(-21.6 -6.198)">
                            <path id="Path_21" data-name="Path 21" d="M50.55,72.19l-7.2-6.7a.6.6,0,0,0-.824,0l-7.141,6.7a.587.587,0,0,1-.989-.439V47.8H51.539V71.751a.587.587,0,0,1-.989.439Z" transform="translate(-5.769 -27.832)" fill="#c33737"/>
                            <g id="Group_6" data-name="Group 6" transform="translate(21.6 6.198)">
                            <path id="Path_22" data-name="Path 22" d="M51.1,11.1,35.5,37.325a15.989,15.989,0,0,0,7.965,2.128,15.35,15.35,0,0,0,15.6-15.107A15.07,15.07,0,0,0,51.1,11.1Z" transform="translate(-27.864 -8.938)" fill="#f47e60"/>
                            <path id="Path_23" data-name="Path 23" d="M37.2,7.5A15.341,15.341,0,0,0,21.6,22.589a14.956,14.956,0,0,0,7.636,12.964l15.6-26.14A15.9,15.9,0,0,0,37.2,7.5Z" transform="translate(-21.6 -7.5)" fill="#f8b26a"/>
                            <path id="Path_24" data-name="Path 24" d="M50.6,20l-10,18.918a8.988,8.988,0,0,0,5.164,1.562c5.493,0,10-4.865,10-10.931A11.135,11.135,0,0,0,50.6,20Z" transform="translate(-30.163 -14.498)" fill="#ffdc6c"/>
                            <path id="Path_25" data-name="Path 25" d="M41.8,17.7c-5.493,0-10,4.865-10,10.931A11.164,11.164,0,0,0,36.634,38l10-18.918A9.539,9.539,0,0,0,41.8,17.7Z" transform="translate(-26.197 -13.189)" fill="#f5e6c8"/>
                            </g>
                        </g>
                    </svg>
                </LinkPage>

                <LinkPage name="تنظیمات" routeName="settings.create" :toggleSidebar="toggleSidebar" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 21 21">
                        <g id="gear-1.1s-200px" transform="translate(-10.361 -10)">
                            <path id="Path_12" data-name="Path 12" d="M30.053,20.434l-.174-.047a1.8,1.8,0,0,1-1.268-1.37l0-.022a1.838,1.838,0,0,1,.561-1.8l.136-.118a1.8,1.8,0,0,0,.326-2.342,10.815,10.815,0,0,0-1.02-1.3,1.716,1.716,0,0,0-2.306-.193l-.141.107a1.75,1.75,0,0,1-1.843.157l-.02-.01a1.814,1.814,0,0,1-1.025-1.566l-.006-.182a1.761,1.761,0,0,0-1.584-1.719,10.306,10.306,0,0,0-1.641,0,1.76,1.76,0,0,0-1.584,1.719l-.006.182A1.814,1.814,0,0,1,17.425,13.5l-.02.01a1.749,1.749,0,0,1-1.843-.157l-.141-.107a1.715,1.715,0,0,0-2.306.193,10.794,10.794,0,0,0-1.02,1.3,1.8,1.8,0,0,0,.326,2.342l.136.118a1.839,1.839,0,0,1,.561,1.8l0,.022a1.8,1.8,0,0,1-1.268,1.37l-.174.047a1.778,1.778,0,0,0-1.29,1.966,10.963,10.963,0,0,0,.344,1.563,1.76,1.76,0,0,0,2.015,1.256l.179-.035a1.76,1.76,0,0,1,1.724.671l.014.017a1.844,1.844,0,0,1,.26,1.868l-.072.168a1.794,1.794,0,0,0,.7,2.25,10.446,10.446,0,0,0,1.473.725,1.727,1.727,0,0,0,2.164-.846l.084-.163a1.771,1.771,0,0,1,1.591-.955h.022a1.771,1.771,0,0,1,1.591.955l.084.163a1.727,1.727,0,0,0,2.164.846,10.447,10.447,0,0,0,1.473-.725,1.794,1.794,0,0,0,.7-2.25l-.072-.168a1.844,1.844,0,0,1,.26-1.868l.014-.017a1.759,1.759,0,0,1,1.724-.671l.179.035A1.76,1.76,0,0,0,31,23.963a10.927,10.927,0,0,0,.344-1.563,1.777,1.777,0,0,0-1.289-1.966Zm-9.192,4.43a4.055,4.055,0,1,1,3.973-4.054A4.014,4.014,0,0,1,20.861,24.864Z" fill="#109ad7"/>
                        </g>
                    </svg>
                </LinkPage>

                <LinkPage name="پروفایل" routeName="profile.show" :toggleSidebar="toggleSidebar" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
                        <g id="user-1.1s-200px" transform="translate(-8 -8)">
                            <path id="Path_22" data-name="Path 22" d="M23.5,8A15.5,15.5,0,1,0,39,23.5,15.517,15.517,0,0,0,23.5,8Zm8.823,25.421S30.188,29.5,28.278,28.4a7.469,7.469,0,1,0-9.555,0c-1.91,1.1-4.046,5.019-4.046,5.017a13.286,13.286,0,1,1,17.646,0Z" fill="#004068"/>
                        </g>
                    </svg>
                </LinkPage>

            </ul>
            <div class=" md:absolute md:bottom-0 md:right-0 w-full bg-child py-2 text-white px-4">
                <div class="profile w-full flex flex-row justify-between items-center ">
                    <Link href="/logout" method="post" class="outline-none border-none">
                        <svg class="ml-4" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7949 6.70662V5.91163C12.7949 4.17764 11.3889 2.7717 9.65495 2.7717H5.50104C3.76791 2.7717 2.36197 4.17764 2.36197 5.91163V15.3953C2.36197 17.1293 3.76791 18.5352 5.50104 18.5352H9.66347C11.3923 18.5352 12.7949 17.1336 12.7949 15.4047V14.6012" stroke="#616E82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M18.5835 10.6534H8.32356" stroke="#616E82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16.0883 8.16948L18.5833 10.6533L16.0883 13.138" stroke="#616E82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </Link >
                    <div class="transition-all duration-300" :class="{'opacity-0' : !toggleSidebar}">
                        <img src="" alt="">
                        <div>
                            <div class="text-sm font-bold whitespace-nowrap">میلاد فتاح</div>
                            <div class="text-xs whitespace-nowrap">مدیر</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue' 
import LinkPage from '@/Components/LinkPage.vue'
import {Link} from '@inertiajs/inertia-vue3'

const toggleSidebar = ref(false) ;

</script>

