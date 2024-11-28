<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Donasi Kuy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-neutral-50 text-neutral-800">
        <div class="wrapper flex justify-center items-center  bg-sky-400 h-16">
            <div class="container flex justify-between items-center gap-3 px-7">
                <span class="text-neutral-50 font-semibold text-lg">Akun</span>
            </div>
        </div>

        <div class="px-3 py-5">
            {{-- Profile --}}
            <div class="flex items-center gap-3 px-3 border-b-2 pb-5">
                <div class="relative w-16 h-16 min-w-16  rounded-full bg-neutral-700">
                    {{-- <img src="" alt=""> --}}
                </div>

                <div class="flex items-center justify-between w-full">
                    <div>
                        <h3 class="text-xl font-semibold">{{ $user->name }}</h3>
                        <h4>{{ $user->email }}</h4>
                    </div>
                    <div>
                        <button id="openEditModal">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L17.5625 10.3304M14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9"
                                    stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M22.75 12C22.75 11.5858 22.4142 11.25 22 11.25C21.5858 11.25 21.25 11.5858 21.25 12H22.75ZM12 2.75C12.4142 2.75 12.75 2.41421 12.75 2C12.75 1.58579 12.4142 1.25 12 1.25V2.75ZM7.37554 20.013C7.017 19.8056 6.5582 19.9281 6.3508 20.2866C6.14339 20.6452 6.26591 21.104 6.62446 21.3114L7.37554 20.013ZM2.68862 17.3755C2.89602 17.7341 3.35482 17.8566 3.71337 17.6492C4.07191 17.4418 4.19443 16.983 3.98703 16.6245L2.68862 17.3755ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75C2.75 6.89137 6.89137 2.75 12 2.75V1.25ZM6.62446 21.3114C8.2064 22.2265 10.0432 22.75 12 22.75V21.25C10.3139 21.25 8.73533 20.7996 7.37554 20.013L6.62446 21.3114ZM1.25 12C1.25 13.9568 1.77351 15.7936 2.68862 17.3755L3.98703 16.6245C3.20043 15.2647 2.75 13.6861 2.75 12H1.25Z"
                                    fill="#1C274C" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="color: red;">{{ $error }}</p>
                @endforeach
            @endif

            {{-- Menu Saldo etc. --}}
            <div class="pb-5 border-b-2 ">

                <div class="flex rounded-md  border-4 py-2 text-sm mx-3 md:mx-24 bg-neutral-100/80  mt-5">
                    <div class="flex justify-center items-center gap-1 ml-2 w-1/2 border-r border-neutral-400">
                        <svg class="w-10 h-10" width="100%" height="100%" viewBox="0 0 1024 1024" class="icon"
                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z"
                                fill="#464BD8" />
                            <path
                                d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z"
                                fill="#514DDF" />
                            <path
                                d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z"
                                fill="#151B28" />
                            <path
                                d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z"
                                fill="#FFFFFF" />
                            <path
                                d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z"
                                fill="#151B28" />
                            <path
                                d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z"
                                fill="#FFFFFF" />
                            <path
                                d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z"
                                fill="#151B28" />
                            <path
                                d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z"
                                fill="#FFFFFF" />
                            <path
                                d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z"
                                fill="#151B28" />
                            <path
                                d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z"
                                fill="#FFFFFF" />
                            <path
                                d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z"
                                fill="#151B28" />
                            <path
                                d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z"
                                fill="#FFFFFF" />
                            <path
                                d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z"
                                fill="#151B28" />
                            <path
                                d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z"
                                fill="#FFFFFF" />
                            <path
                                d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z"
                                fill="#151B28" />
                            <path
                                d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z"
                                fill="#2AEFC8" />
                            <path
                                d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z"
                                fill="" />
                        </svg>


                        <div class="flex flex-col">
                            <span
                                class="font-semibold text-base">{{ number_format($user->balance, 0, ',', '.') }}</span>
                            <span class="text-neutral-600 ">Kantong Donasimu</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-1 ml-2 w-1/2">
                        <svg class=" w-10 h-10" width="100%" height="100%" viewBox="0 0 1024 1024" class="icon"
                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M696.2 411.6C498.7 368.3 660.6 94.4 390 117.1s-527.2 645.8-46.8 791.7 727.9-414.9 353-497.2z"
                                fill="#464BD8" />
                            <path d="M391.4 235.6l-98.6 501.9V235.6zM407 235.6L303.8 761l-11-2.2v-21.3l98.6-501.9z"
                                fill="#2E2E42" />
                            <path d="M421.1 235.6l1.4 0.3L318.8 764l-15-3L407 235.6z" fill="#2D2D41" />
                            <path
                                d="M318.831263 764.004291l103.752737-528.002821 15.012903 2.95004L333.844166 766.954332z"
                                fill="#2D2D40" />
                            <path
                                d="M333.78964 766.951693l103.752737-528.002821L452.55528 241.898912 348.802543 769.901734z"
                                fill="#2C2C3F" />
                            <path
                                d="M348.846315 769.916588l103.752736-528.002821L467.611954 244.863807 363.859218 772.866629z"
                                fill="#2B2B3E" />
                            <path
                                d="M363.805673 772.863183l103.752736-528.002821 15.012903 2.95004L378.818576 775.813224z"
                                fill="#2A2A3D" />
                            <path
                                d="M378.862174 775.829867l103.752736-528.002822 15.012903 2.950041L393.875077 778.779907z"
                                fill="#2A2A3C" />
                            <path
                                d="M393.820725 778.77548l103.752736-528.002821 15.012903 2.95004L408.833628 781.725521z"
                                fill="#29293B" />
                            <path
                                d="M408.780083 781.722075l103.752736-528.002822 15.012903 2.950041L423.792986 784.672116z"
                                fill="#28283A" />
                            <path
                                d="M423.855057 784.589654l103.752737-528.002822 15.012903 2.950041L438.86796 787.539694z"
                                fill="#282839" />
                            <path
                                d="M438.814416 787.536248l103.752736-528.002821 15.012903 2.95004L453.827319 790.486289z"
                                fill="#272738" />
                            <path
                                d="M453.871897 790.502125l103.752737-528.002822 15.012903 2.950041L468.8848 793.452165z"
                                fill="#262637" />
                            <path
                                d="M468.828486 793.449353l103.752736-528.002822 15.012903 2.950041L483.841389 796.399393z"
                                fill="#252536" />
                            <path
                                d="M483.885968 796.415229l103.752736-528.002822 15.012903 2.950041L498.898871 799.365269z"
                                fill="#252534" />
                            <path
                                d="M498.844519 799.360842l103.752736-528.002821 15.012903 2.95004L513.857422 802.310883z"
                                fill="#242433" />
                            <path
                                d="M513.902 802.326719l103.752737-528.002822 15.012903 2.950041L528.914903 805.276759z"
                                fill="#232332" />
                            <path
                                d="M528.860377 805.274121l103.752737-528.002822 15.012903 2.950041L543.87328 808.224161z"
                                fill="#222231" />
                            <path
                                d="M543.917052 808.239016l103.752736-528.002822 15.012903 2.950041L558.929955 811.189056z"
                                fill="#222230" />
                            <path
                                d="M558.875429 811.186418l103.752736-528.002822 15.012903 2.950041L573.888332 814.136458z"
                                fill="#21212F" />
                            <path
                                d="M573.932911 814.152294l103.752736-528.002822 15.012903 2.950041L588.945814 817.102334z"
                                fill="#20202E" />
                            <path
                                d="M588.891462 817.097907l103.752736-528.002821 15.012903 2.95004L603.904365 820.047948z"
                                fill="#20202D" />
                            <path
                                d="M603.947962 820.064591l103.752736-528.002822 15.012903 2.950041L618.960865 823.014631z"
                                fill="#1F1F2C" />
                            <path
                                d="M618.90732 823.011186l103.752737-528.002822L737.67296 297.958405 633.920223 825.961226z"
                                fill="#1E1E2B" />
                            <path
                                d="M633.964802 825.977062l103.752736-528.002822L752.730441 300.924281 648.977705 828.927102z"
                                fill="#1D1D2A" />
                            <path d="M752.7 300.8l15 2.9-103.2 525.4h-14.1l-1.5-0.3z" fill="#1D1D29" />
                            <path d="M767.7 303.7l11 2.2v21.3l-98.6 501.9h-15.6zM680.1 829.1l98.6-501.9v501.9z"
                                fill="#1C1C28" />
                            <path
                                d="M646 807.5c-1.6 0-3.2-0.2-4.8-0.5l-307-60.3c-6.4-1.3-12-4.9-15.6-10.4-3.6-5.4-5-12-3.7-18.4l86.6-441c2.3-11.5 12.3-19.8 24-19.8 1.6 0 3.2 0.2 4.8 0.5l307 60.3c13.3 2.6 21.9 15.5 19.3 28.7l-86.6 441c-2.3 11.6-12.4 19.9-24 19.9z"
                                fill="#FFFFFF" />
                            <path
                                d="M646 807.5c-1.6 0-3.2-0.2-4.8-0.5l-307-60.3c-6.4-1.3-12-4.9-15.6-10.4-3.6-5.4-5-12-3.7-18.4l86.6-441c2.3-11.5 12.3-19.8 24-19.8 1.6 0 3.2 0.2 4.8 0.5l307 60.3c13.3 2.6 21.9 15.5 19.3 28.7l-86.6 441c-2.3 11.6-12.4 19.9-24 19.9z"
                                fill="#FFFFFF" />
                            <path
                                d="M640.2 793.7c-1.4 0-2.8-0.1-4.2-0.4l-269.8-53c-5.6-1.1-10.5-4.3-13.7-9.1-3.2-4.8-4.4-10.5-3.2-16.2l76.1-387.5c2-10.1 10.8-17.4 21.1-17.4 1.4 0 2.8 0.1 4.2 0.4l269.8 53c11.6 2.3 19.3 13.6 17 25.3l-76.1 387.5c-2.1 10.1-10.9 17.4-21.2 17.4z"
                                fill="#2AEFC8" />
                            <path
                                d="M674.4 274.5c1.4-2.7 2.6-5.6 3.2-8.8 3.6-17.8-8.1-35.1-25.9-38.6l-90.4-17.8c-17.8-3.5-35.1 8.1-38.6 25.9-0.6 3.1-0.6 6.1-0.4 9.1-24.4-3-45.2 4.5-48.4 21.2l234.2 47.6c3.2-16-11.6-31.6-33.7-38.6z"
                                fill="#514DDF" />
                            <path
                                d="M708.1 322.1c-0.6 0-1.2-0.1-1.8-0.2l-234.1-47.6c-4.8-1-7.9-5.7-7-10.5 3.6-18.6 22.6-30 48.6-29.1 0.1-0.4 0.1-0.8 0.2-1.3 4.4-22.6 26.5-37.4 49.1-33l90.4 17.8c11 2.2 20.5 8.5 26.7 17.8 6.2 9.3 8.4 20.4 6.2 31.3-0.1 0.6-0.3 1.2-0.4 1.9 21.9 9.9 34.4 27.8 30.9 45.6-0.5 2.3-1.8 4.4-3.8 5.7-1.5 1.1-3.3 1.6-5 1.6z m-220.4-62.8L697.9 302c-3.7-7.7-13.3-14.9-26.2-19-2.5-0.8-4.5-2.7-5.6-5.1-1-2.4-0.9-5.2 0.3-7.5 1.2-2.4 2-4.4 2.4-6.3 1.3-6.3 0-12.6-3.6-17.9-3.6-5.3-9-9-15.3-10.2l-90.4-17.8c-13-2.5-25.5 5.9-28.1 18.9-0.4 1.9-0.4 4-0.2 6.6 0.2 2.7-0.8 5.3-2.7 7.2-1.9 1.9-4.6 2.7-7.3 2.4-14.5-1.9-26.8 0.5-33.5 6z"
                                fill="#29293A" />
                            <path
                                d="M602 269.5c-8.3-1.6-13.6-9.6-12-17.9 1.6-8.3 9.6-13.6 17.9-12 8.3 1.6 13.6 9.6 12 17.9-1.7 8.3-9.7 13.6-17.9 12z"
                                fill="#FFFFFF" />
                            <path
                                d="M550.515 420.205l150.843 31.03-2.62 12.734-150.843-31.03zM428.579 445.695l262.8 54.062-2.62 12.734-262.8-54.063zM418.577 494.19l262.8 54.063-2.62 12.734-262.8-54.063zM408.596 542.589l262.8 54.062-2.62 12.734-262.8-54.063zM398.595 591.085l262.8 54.062-2.62 12.734-262.8-54.063zM388.009 642.725l188.651 38.81-2.62 12.733-188.65-38.81z"
                                fill="#514DDF" />
                        </svg>

                        <div class="flex flex-col">
                            <span
                                class="font-semibold text-base">{{ number_format($totalDonation, 0, ',', '.') }}</span>

                            <span class="text-neutral-600">Total Sedekah</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Option Features --}}
            <div class="px-1">

                <div class="flex gap-3 py-5 border-b-2">
                    <div>
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="3" stroke="#1C274C" stroke-width="1.5" />
                            <path
                                d="M3.66122 10.6392C4.13377 10.9361 4.43782 11.4419 4.43782 11.9999C4.43781 12.558 4.13376 13.0638 3.66122 13.3607C3.33966 13.5627 3.13248 13.7242 2.98508 13.9163C2.66217 14.3372 2.51966 14.869 2.5889 15.3949C2.64082 15.7893 2.87379 16.1928 3.33973 16.9999C3.80568 17.8069 4.03865 18.2104 4.35426 18.4526C4.77508 18.7755 5.30694 18.918 5.83284 18.8488C6.07287 18.8172 6.31628 18.7185 6.65196 18.5411C7.14544 18.2803 7.73558 18.2699 8.21895 18.549C8.70227 18.8281 8.98827 19.3443 9.00912 19.902C9.02332 20.2815 9.05958 20.5417 9.15224 20.7654C9.35523 21.2554 9.74458 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8478 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.9021C15.0117 19.3443 15.2977 18.8281 15.7811 18.549C16.2644 18.27 16.8545 18.2804 17.3479 18.5412C17.6837 18.7186 17.9271 18.8173 18.1671 18.8489C18.693 18.9182 19.2249 18.7756 19.6457 18.4527C19.9613 18.2106 20.1943 17.807 20.6603 17C20.8677 16.6407 21.029 16.3614 21.1486 16.1272M20.3387 13.3608C19.8662 13.0639 19.5622 12.5581 19.5621 12.0001C19.5621 11.442 19.8662 10.9361 20.3387 10.6392C20.6603 10.4372 20.8674 10.2757 21.0148 10.0836C21.3377 9.66278 21.4802 9.13092 21.411 8.60502C21.3591 8.2106 21.1261 7.80708 20.6601 7.00005C20.1942 6.19301 19.9612 5.7895 19.6456 5.54732C19.2248 5.22441 18.6929 5.0819 18.167 5.15113C17.927 5.18274 17.6836 5.2814 17.3479 5.45883C16.8544 5.71964 16.2643 5.73004 15.781 5.45096C15.2977 5.1719 15.0117 4.6557 14.9909 4.09803C14.9767 3.71852 14.9404 3.45835 14.8478 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74458 2.35523 9.35523 2.74458 9.15224 3.23463C9.05958 3.45833 9.02332 3.71848 9.00912 4.09794C8.98826 4.65566 8.70225 5.17191 8.21891 5.45096C7.73557 5.73002 7.14548 5.71959 6.65205 5.4588C6.31633 5.28136 6.0729 5.18269 5.83285 5.15108C5.30695 5.08185 4.77509 5.22436 4.35427 5.54727C4.03866 5.78945 3.80569 6.19297 3.33974 7C3.13231 7.35929 2.97105 7.63859 2.85138 7.87273"
                                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <span class="font-semibold">Pengaturan</span>
                </div>

                <div class="flex gap-3 py-5 border-b-2">
                    <div>
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 12C19.7614 12 22 9.76142 22 7C22 4.23858 19.7614 2 17 2C14.2386 2 12 4.23858 12 7C12 7.79984 12.1878 8.55582 12.5217 9.22624C12.6105 9.4044 12.64 9.60803 12.5886 9.80031L12.2908 10.9133C12.1615 11.3965 12.6035 11.8385 13.0867 11.7092L14.1997 11.4114C14.392 11.36 14.5956 11.3895 14.7738 11.4783C15.4442 11.8122 16.2002 12 17 12Z"
                                stroke="#1C274C" stroke-width="1.5" />
                            <path
                                d="M14.1008 16.0272L14.6446 16.5437V16.5437L14.1008 16.0272ZM14.5562 15.5477L14.0124 15.0312V15.0312L14.5562 15.5477ZM16.9729 15.2123L16.5987 15.8623H16.5987L16.9729 15.2123ZM18.8834 16.312L18.5092 16.962L18.8834 16.312ZM19.4217 19.7584L19.9655 20.275L19.9655 20.2749L19.4217 19.7584ZM18.0012 21.254L17.4574 20.7375L18.0012 21.254ZM16.6763 21.9631L16.75 22.7095L16.6763 21.9631ZM6.8154 17.4752L7.3592 16.9587L6.8154 17.4752ZM2.75185 7.92574C2.72965 7.51212 2.37635 7.19481 1.96273 7.21701C1.54911 7.23921 1.23181 7.59252 1.25401 8.00613L2.75185 7.92574ZM8.19075 9.80507L8.73454 10.3216L8.19075 9.80507ZM8.47756 9.50311L9.02135 10.0196L8.47756 9.50311ZM8.63428 6.6931L9.24668 6.26012L8.63428 6.6931ZM7.3733 4.90961L6.7609 5.3426V5.3426L7.3733 4.90961ZM3.7177 4.09213C3.43244 4.39246 3.44465 4.86717 3.74498 5.15244C4.04531 5.4377 4.52002 5.42549 4.80529 5.12516L3.7177 4.09213ZM10.0632 14.0559L10.607 13.5394L10.0632 14.0559ZM9.6641 20.8123C10.0148 21.0327 10.4778 20.9271 10.6982 20.5764C10.9186 20.2257 10.8129 19.7627 10.4622 19.5423L9.6641 20.8123ZM14.113 21.0584C13.7076 20.9735 13.3101 21.2334 13.2252 21.6388C13.1403 22.0442 13.4001 22.4417 13.8056 22.5266L14.113 21.0584ZM14.6446 16.5437L15.1 16.0642L14.0124 15.0312L13.557 15.5107L14.6446 16.5437ZM16.5987 15.8623L18.5092 16.962L19.2575 15.662L17.347 14.5623L16.5987 15.8623ZM18.8779 19.2419L17.4574 20.7375L18.545 21.7705L19.9655 20.275L18.8779 19.2419ZM7.3592 16.9587C3.48307 12.8778 2.83289 9.43556 2.75185 7.92574L1.25401 8.00613C1.35326 9.85536 2.13844 13.6403 6.27161 17.9917L7.3592 16.9587ZM8.73454 10.3216L9.02135 10.0196L7.93377 8.9866L7.64695 9.28856L8.73454 10.3216ZM9.24668 6.26012L7.98569 4.47663L6.7609 5.3426L8.02189 7.12608L9.24668 6.26012ZM8.19075 9.80507C7.64695 9.28856 7.64626 9.28929 7.64556 9.29002C7.64533 9.29028 7.64463 9.29102 7.64415 9.29152C7.6432 9.29254 7.64223 9.29357 7.64125 9.29463C7.63928 9.29675 7.63724 9.29896 7.63515 9.30127C7.63095 9.30588 7.6265 9.31087 7.62182 9.31625C7.61247 9.32701 7.60219 9.33931 7.5912 9.3532C7.56922 9.38098 7.54435 9.41511 7.51826 9.45588C7.46595 9.53764 7.40921 9.64531 7.36117 9.78033C7.26346 10.0549 7.21022 10.4185 7.27675 10.8726C7.40746 11.7647 7.99202 12.9644 9.51937 14.5724L10.607 13.5394C9.1793 12.0363 8.82765 11.1106 8.7609 10.6551C8.72871 10.4354 8.76142 10.3196 8.77436 10.2832C8.78163 10.2628 8.78639 10.2571 8.78174 10.2644C8.77948 10.2679 8.77498 10.2745 8.76742 10.2841C8.76363 10.2888 8.75908 10.2944 8.75364 10.3006C8.75092 10.3038 8.74798 10.3071 8.7448 10.3106C8.74321 10.3123 8.74156 10.3141 8.73985 10.3159C8.739 10.3169 8.73813 10.3178 8.73724 10.3187C8.7368 10.3192 8.73612 10.3199 8.7359 10.3202C8.73522 10.3209 8.73454 10.3216 8.19075 9.80507ZM9.51937 14.5724C11.0422 16.1757 12.1924 16.806 13.0699 16.9485C13.5201 17.0216 13.8846 16.9632 14.1606 16.8544C14.2955 16.8012 14.4023 16.7387 14.4824 16.6819C14.5223 16.6535 14.5556 16.6266 14.5825 16.6031C14.5959 16.5913 14.6078 16.5803 14.6181 16.5703C14.6233 16.5654 14.628 16.5606 14.6324 16.5562C14.6346 16.554 14.6368 16.5518 14.6388 16.5497C14.6398 16.5487 14.6408 16.5477 14.6417 16.5467C14.6422 16.5462 14.6429 16.5454 14.6432 16.5452C14.6439 16.5444 14.6446 16.5437 14.1008 16.0272C13.557 15.5107 13.5577 15.51 13.5583 15.5093C13.5586 15.509 13.5592 15.5083 13.5597 15.5078C13.5606 15.5069 13.5615 15.506 13.5623 15.5051C13.5641 15.5033 13.5658 15.5015 13.5675 15.4998C13.5708 15.4965 13.574 15.4933 13.577 15.4904C13.5831 15.4846 13.5885 15.4796 13.5933 15.4754C13.6029 15.467 13.61 15.4616 13.6146 15.4584C13.6239 15.4517 13.623 15.454 13.6102 15.459C13.5909 15.4666 13.5001 15.4987 13.3103 15.4679C12.9078 15.4025 12.0391 15.0472 10.607 13.5394L9.51937 14.5724ZM7.98569 4.47663C6.9721 3.04305 4.94388 2.80119 3.7177 4.09213L4.80529 5.12516C5.32812 4.57471 6.24855 4.61795 6.7609 5.3426L7.98569 4.47663ZM17.4574 20.7375C17.1783 21.0313 16.8864 21.1887 16.6026 21.2167L16.75 22.7095C17.497 22.6357 18.1016 22.2373 18.545 21.7705L17.4574 20.7375ZM9.02135 10.0196C9.98893 9.00095 10.0574 7.40678 9.24668 6.26012L8.02189 7.12608C8.44404 7.72315 8.3793 8.51753 7.93377 8.9866L9.02135 10.0196ZM18.5092 16.962C19.3301 17.4345 19.4907 18.5968 18.8779 19.2419L19.9655 20.2749C21.2705 18.901 20.8904 16.6019 19.2575 15.662L18.5092 16.962ZM15.1 16.0642C15.4854 15.6584 16.086 15.5672 16.5987 15.8623L17.347 14.5623C16.2485 13.93 14.8862 14.1113 14.0124 15.0312L15.1 16.0642ZM10.4622 19.5423C9.47846 18.9241 8.43149 18.0876 7.3592 16.9587L6.27161 17.9917C7.42564 19.2067 8.56897 20.1241 9.6641 20.8123L10.4622 19.5423ZM16.6026 21.2167C16.0561 21.2707 15.1912 21.2842 14.113 21.0584L13.8056 22.5266C15.0541 22.788 16.0742 22.7762 16.75 22.7095L16.6026 21.2167Z"
                                fill="#1C274C" />
                        </svg>
                    </div>
                    <span class="font-semibold">Bantuan</span>
                </div>

                <div class="flex gap-3 py-5 border-b-2">
                    <div>
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7838 21.9999C7.0986 21.2478 5.70665 20.0758 4.79175 18.5068" stroke="#1C274C"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path d="M14.8252 2.18595C16.5021 1.70882 18.2333 2.16305 19.4417 3.39724" stroke="#1C274C"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M4.0106 8.36655L3.63846 7.71539L4.0106 8.36655ZM6.50218 8.86743L7.15007 8.48962L6.50218 8.86743ZM3.2028 10.7531L2.55491 11.1309H2.55491L3.2028 10.7531ZM7.69685 3.37253L8.34474 2.99472V2.99472L7.69685 3.37253ZM8.53873 4.81624L7.89085 5.19405L8.53873 4.81624ZM10.4165 9.52517C10.6252 9.88299 11.0844 10.0039 11.4422 9.79524C11.8 9.58659 11.9209 9.12736 11.7123 8.76955L10.4165 9.52517ZM7.53806 12.1327C7.74672 12.4905 8.20594 12.6114 8.56376 12.4027C8.92158 12.1941 9.0425 11.7349 8.83384 11.377L7.53806 12.1327ZM4.39747 5.25817L3.74958 5.63598L4.39747 5.25817ZM11.8381 2.9306L12.486 2.55279V2.55279L11.8381 2.9306ZM14.3638 7.26172L15.0117 6.88391L14.3638 7.26172ZM16.0475 10.1491L16.4197 10.8003C16.5934 10.701 16.7202 10.5365 16.772 10.3433C16.8238 10.15 16.7962 9.94413 16.6954 9.77132L16.0475 10.1491ZM17.0153 5.75389C17.2239 6.11171 17.6831 6.23263 18.041 6.02397C18.3988 5.81531 18.5197 5.35609 18.311 4.99827L17.0153 5.75389ZM20.1888 9.7072L20.8367 9.32939V9.32939L20.1888 9.7072ZM6.99128 17.2497L7.63917 16.8719L6.99128 17.2497ZM16.9576 19.2533L16.5854 18.6021L16.9576 19.2533ZM13.784 15.3C13.9927 15.6578 14.4519 15.7787 14.8097 15.5701C15.1676 15.3614 15.2885 14.9022 15.0798 14.5444L13.784 15.3ZM20.347 8.48962C20.1383 8.1318 19.6791 8.01089 19.3213 8.21954C18.9635 8.4282 18.8426 8.88742 19.0512 9.24524L20.347 8.48962ZM8.98692 20.1803C9.35042 20.3789 9.80609 20.2452 10.0047 19.8817C10.2033 19.5182 10.0697 19.0626 9.70616 18.864L8.98692 20.1803ZM13.8888 19.5453C13.4792 19.6067 13.1969 19.9886 13.2583 20.3982C13.3197 20.8079 13.7015 21.0902 14.1112 21.0288L13.8888 19.5453ZM4.38275 9.0177C5.01642 8.65555 5.64023 8.87817 5.85429 9.24524L7.15007 8.48962C6.4342 7.26202 4.82698 7.03613 3.63846 7.71539L4.38275 9.0177ZM3.63846 7.71539C2.44761 8.39597 1.83532 9.8969 2.55491 11.1309L3.85068 10.3753C3.64035 10.0146 3.75139 9.37853 4.38275 9.0177L3.63846 7.71539ZM7.04896 3.75034L7.89085 5.19405L9.18662 4.43843L8.34474 2.99472L7.04896 3.75034ZM7.89085 5.19405L10.4165 9.52517L11.7123 8.76955L9.18662 4.43843L7.89085 5.19405ZM8.83384 11.377L7.15007 8.48962L5.85429 9.24524L7.53806 12.1327L8.83384 11.377ZM7.15007 8.48962L5.04535 4.88036L3.74958 5.63598L5.85429 9.24524L7.15007 8.48962ZM5.57742 3.5228C6.21109 3.16065 6.8349 3.38327 7.04896 3.75034L8.34474 2.99472C7.62887 1.76712 6.02165 1.54123 4.83313 2.22048L5.57742 3.5228ZM4.83313 2.22048C3.64228 2.90107 3.02999 4.40199 3.74958 5.63598L5.04535 4.88036C4.83502 4.51967 4.94606 3.88363 5.57742 3.5228L4.83313 2.22048ZM11.1902 3.30841L13.7159 7.63953L15.0117 6.88391L12.486 2.55279L11.1902 3.30841ZM13.7159 7.63953L15.3997 10.5269L16.6954 9.77132L15.0117 6.88391L13.7159 7.63953ZM9.71869 3.08087C10.3524 2.71872 10.9762 2.94134 11.1902 3.30841L12.486 2.55279C11.7701 1.32519 10.1629 1.0993 8.9744 1.77855L9.71869 3.08087ZM8.9744 1.77855C7.78355 2.45914 7.17126 3.96006 7.89085 5.19405L9.18662 4.43843C8.97629 4.07774 9.08733 3.4417 9.71869 3.08087L8.9744 1.77855ZM15.5437 5.52635C16.1774 5.1642 16.8012 5.38682 17.0153 5.75389L18.311 4.99827C17.5952 3.77068 15.988 3.54478 14.7994 4.22404L15.5437 5.52635ZM14.7994 4.22404C13.6086 4.90462 12.9963 6.40555 13.7159 7.63953L15.0117 6.88391C14.8013 6.52322 14.9124 5.88718 15.5437 5.52635L14.7994 4.22404ZM2.55491 11.1309L6.34339 17.6276L7.63917 16.8719L3.85068 10.3753L2.55491 11.1309ZM19.5409 10.085C21.1461 12.8377 19.9501 16.6792 16.5854 18.6021L17.3297 19.9045C21.2539 17.6618 22.9512 12.9554 20.8367 9.32939L19.5409 10.085ZM15.0798 14.5444C14.4045 13.3863 14.8772 11.6818 16.4197 10.8003L15.6754 9.49797C13.5735 10.6993 12.5995 13.2687 13.784 15.3L15.0798 14.5444ZM19.0512 9.24524L19.5409 10.085L20.8367 9.32939L20.347 8.48962L19.0512 9.24524ZM9.70616 18.864C8.85353 18.3981 8.13826 17.7278 7.63917 16.8719L6.34339 17.6276C6.98843 18.7337 7.90969 19.5917 8.98692 20.1803L9.70616 18.864ZM16.5854 18.6021C15.7158 19.0991 14.7983 19.409 13.8888 19.5453L14.1112 21.0288C15.2038 20.865 16.2984 20.4939 17.3297 19.9045L16.5854 18.6021Z"
                                fill="#1C274C" />
                        </svg>
                    </div>
                    <span class="font-semibold">Tentang DonasiKuy</span>
                </div>

                <div class="flex gap-3 py-5 border-b-2">
                    <div>
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 12H9M16 12H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M16 8H15M12 8H8" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M8 16H13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M3 14V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C20.4816 3.82476 20.7706 4.69989 20.8985 6M21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3.51839 20.1752 3.22937 19.3001 3.10149 18"
                                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <span class="font-semibold">Syarat & Ketentuan</span>
                </div>
            </div>

            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full bg-pink-400 py-2 mt-5 rounded-lg text-lg text-neutral-50 font-semibold">Keluar
                    </button>
                </form>
            </div>

            <!-- Donation Modal ) -->
            <div id="edit-form"
                class="fixed inset-0 text-neutral-700 bg-black bg-opacity-50 justify-center flex items-end">
                <div class="bg-neutral-50 px-3 pt-5 rounded-t-lg w-full max-w-md h-[60%] transform translate-y-full  transition-transform duration-300"
                    id="modal-content">
                    <h2 class="text-lg text-center font-bold ">Edit Profile</h2>

                    <div>
                        <form action="{{ route('user.edit') }}" method="POST">
                            @csrf
                            <div class="flex flex-col gap-5 mt-3">
                                <div class="flex flex-col">
                                    <label class="text-lg font-semibold" for="name">Nama</label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        class="border-b-2 border-gray-300 text-xl py-1 outline-none ps-0.5">
                                </div>

                                <div class="flex flex-col">
                                    <label class="text-lg font-semibold" for="email">Email</label>
                                    <input type="email" name="email" value="{{ $user->email }}"
                                        class="border-b-2 border-gray-300 text-xl py-1 outline-none ps-0.5">
                                </div>

                                <div class="flex flex-col">
                                    <label class="text-lg font-semibold" for="password">Password</label>
                                    <input type="password" name="password" placeholder="*****"
                                        class="border-b-2 border-gray-300 text-xl py-1 outline-none ps-0.5">
                                </div>
                            </div>

                            <div class="mt-5">
                                <button type="submit"
                                    class="w-full bg-pink-400 py-2 rounded-md mt-3 text-lg text-neutral-50 font-bold tracking-wide">Submit</button>
                            </div>
                        </form>
                    </div>




                    {{-- Close Modal button --}}
                    <button id="closeEditModal" class="absolute top-2 right-4 mt-3 ">
                        <svg class="w-5 h-5" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z"
                                fill="#0F0F0F" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/editProfileModal.js')

</body>

</html>
