<div class="wrapper flex justify-center items-center  bg-sky-400 h-16">
    <div class="container flex justify-between items-center gap-3 px-2">

        {{-- Left Side Content -> Searchbar --}}
        <div class="w-full">
            <form action="" method="GET">
                <div class="relative">
                    <div class="absolute inset-y-0 right-3">
                        <svg class="w-5" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-neutral-500"
                                d="M10.77 18.3C9.2807 18.3 7.82485 17.8584 6.58655 17.031C5.34825 16.2036 4.38311 15.0275 3.81318 13.6516C3.24325 12.2757 3.09413 10.7616 3.38468 9.30096C3.67523 7.84029 4.39239 6.49857 5.44548 5.44548C6.49857 4.39239 7.84029 3.67523 9.30096 3.38468C10.7616 3.09413 12.2757 3.24325 13.6516 3.81318C15.0275 4.38311 16.2036 5.34825 17.031 6.58655C17.8584 7.82485 18.3 9.2807 18.3 10.77C18.3 11.7588 18.1052 12.738 17.7268 13.6516C17.3484 14.5652 16.7937 15.3953 16.0945 16.0945C15.3953 16.7937 14.5652 17.3484 13.6516 17.7268C12.738 18.1052 11.7588 18.3 10.77 18.3ZM10.77 4.74999C9.58331 4.74999 8.42327 5.10189 7.43657 5.76118C6.44988 6.42046 5.68084 7.35754 5.22672 8.45389C4.77259 9.55025 4.65377 10.7566 4.88528 11.9205C5.11679 13.0844 5.68824 14.1535 6.52735 14.9926C7.36647 15.8317 8.43556 16.4032 9.59945 16.6347C10.7633 16.8662 11.9697 16.7474 13.0661 16.2933C14.1624 15.8391 15.0995 15.0701 15.7588 14.0834C16.4181 13.0967 16.77 11.9367 16.77 10.75C16.77 9.15869 16.1379 7.63257 15.0126 6.50735C13.8874 5.38213 12.3613 4.74999 10.77 4.74999Z"
                                fill="#000000" />
                            <path class="fill-neutral-500"
                                d="M20 20.75C19.9015 20.7504 19.8038 20.7312 19.7128 20.6934C19.6218 20.6557 19.5392 20.6001 19.47 20.53L15.34 16.4C15.2075 16.2578 15.1354 16.0697 15.1388 15.8754C15.1422 15.6811 15.221 15.4958 15.3584 15.3583C15.4958 15.2209 15.6812 15.1422 15.8755 15.1388C16.0698 15.1354 16.2578 15.2075 16.4 15.34L20.53 19.47C20.6704 19.6106 20.7493 19.8012 20.7493 20C20.7493 20.1987 20.6704 20.3893 20.53 20.53C20.4608 20.6001 20.3782 20.6557 20.2872 20.6934C20.1962 20.7312 20.0985 20.7504 20 20.75Z"
                                fill="#000000" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari panti asuhan..." class="rounded-2xl w-full h-7 ps-4">
                </div>
            </form>
        </div>

        {{-- Right Side Content -> Menu --}}
        <div class="flex gap-2">

            {{-- Mail Button --}}
            <div class="w-6 h-6">
                <button>
                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="style=fill">
                            <g id="email">
                                <path class="fill-white" id="Subtract" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7 2.75C5.38503 2.75 3.92465 3.15363 2.86466 4.1379C1.79462 5.13152 1.25 6.60705 1.25 8.5V15.5C1.25 17.393 1.79462 18.8685 2.86466 19.8621C3.92465 20.8464 5.38503 21.25 7 21.25H17C18.615 21.25 20.0754 20.8464 21.1353 19.8621C22.2054 18.8685 22.75 17.393 22.75 15.5V8.5C22.75 6.60705 22.2054 5.13152 21.1353 4.1379C20.0754 3.15363 18.615 2.75 17 2.75H7ZM19.2285 8.3623C19.5562 8.10904 19.6166 7.63802 19.3633 7.31026C19.1101 6.98249 18.6391 6.9221 18.3113 7.17537L12.7642 11.4616C12.3141 11.8095 11.6858 11.8095 11.2356 11.4616L5.6886 7.17537C5.36083 6.9221 4.88982 6.98249 4.63655 7.31026C4.38328 7.63802 4.44367 8.10904 4.77144 8.3623L10.3185 12.6486C11.3089 13.4138 12.691 13.4138 13.6814 12.6486L19.2285 8.3623Z"
                                    fill="#000000" />
                            </g>
                        </g>
                    </svg>
                </button>
            </div>

            {{-- Profile Button --}}
            <div class="w-6 h-5">
                <button>
                    <svg width="100%" height="100%" viewBox="-5 0 32 32" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            sketch:type="MSPage">
                            <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                transform="translate(-367.000000, -309.000000)" fill="#000000">
                                <path class="fill-white"
                                    d="M378,329 C382.971,329 387,324.522 387,319 C387,313.478 382.971,309 378,309 C373.029,309 369,313.478 369,319 C369,324.522 373.029,329 378,329 L378,329 Z M386.703,326.319 C384.691,329.161 381.546,331 378,331 C374.454,331 371.309,329.161 369.297,326.319 C367.904,327.411 367,329.091 367,331 L367,335 C367,338.313 369.687,341 373,341 L383,341 C386.313,341 389,338.313 389,335 L389,331 C389,329.091 388.096,327.411 386.703,326.319 L386.703,326.319 Z"
                                    id="user" sketch:type="MSShapeGroup">
                                </path>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>





        </div>

    </div>
</div>
