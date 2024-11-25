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

<body class="antialiased bg-neutral-50 text-neutral-700 ">
    <div class="">
        {{-- Image --}}
        <div class="w-full">
            <img class="h-44 w-full object-cover" src="{{ asset('storage/' . $fund->image_url) }}" alt="">

        </div>

        <div class=" bg-gray-200">
            {{-- Main Information --}}
            <div class="py-3 px-3 bg-neutral-50 border-b-2 border-gray-300">
                <div>
                    <span class="font-bold text-xl text-neutral-700">
                        {{ $fund->title }}
                    </span>
                </div>




                <div class="flex flex-col gap-1 mt-3">

                    <span
                        class="font-bold text-xl text-cyan-500">Rp{{ number_format($fund->collected_amount, 0, ',', '.') }}</span>

                    <span class="text-sm ">Terkumpul dari
                        <span
                            class="text-sm font-bold">Rp{{ number_format($fund->goal_amount, 0, ',', '.') }}</span></span>

                    @php
                        $progressPercentage = ($fund->collected_amount / $fund->goal_amount) * 100;
                    @endphp

                    <div class="w-full bg-gray-200 rounded-full h-3 mt-1">
                        <div class="bg-sky-500 h-3 rounded-full" style="width: {{ min($progressPercentage, 100) }}%;">

                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-3 mt-5 ">

                    <div class="p-2.5 border-r border-gray-300">
                        <div class="flex items-center justify-center gap-3 ">
                            <div>
                                <svg class="w-5" width="100%" height="100%" viewBox="0 0 24 24" id="Layer_1"
                                    data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #020202;
                                                stroke-miterlimit: 10;
                                                stroke-width: 1.91px;
                                            }
                                        </style>
                                    </defs>
                                    <path class="cls-1 "
                                        d="M14.6,9.14A3.35,3.35,0,0,0,12,10.29,3.35,3.35,0,0,0,9.4,9.14a2.89,2.89,0,0,0-3.13,2.57c0,3.87,5.73,6,5.73,6s5.73-2.15,5.73-6A2.89,2.89,0,0,0,14.6,9.14Z" />
                                    <polygon class="cls-1 "
                                        points="22.5 22.5 1.5 22.5 1.5 10.09 12 1.5 22.5 10.09 22.5 22.5" />
                                    <polyline class="cls-1 " points="22.5 10.09 12 18.68 1.5 10.09" />
                                </svg>
                            </div>
                            <span class="font-bold">{{ $totalContributors }}</span>
                        </div>
                        <span class="flex justify-center items-center font-medium mt-2 text-sm">Donasi</span>
                    </div>

                    <div class="p-2.5 ">
                        <div class="flex items-center justify-center gap-3 ">
                            <div>
                                <svg class="w-6 h-6" width="100%" height="100%" version="1.1" id="Icons"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 32 32" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: none;
                                            stroke: #000000;
                                            stroke-width: 2;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-miterlimit: 10;
                                        }
                                    </style>
                                    <path class="st0" d="M22,6v18c0,1.6,1.3,3,3,3h0c1.6,0,3-1.3,3-3v-9l-6,0" />
                                    <path class="st0"
                                        d="M22,6v18c0,1.3,0.8,2.4,2,2.8V27H8H7c-1.7,0-3-1.4-3-3V6H22z" />
                                    <line class="st0" x1="8" y1="11" x2="14" y2="11" />
                                    <line class="st0" x1="8" y1="15" x2="10" y2="15" />
                                </svg>
                            </div>
                            <span class="font-bold">{{ $recentNews }}</span>
                        </div>
                        <span class="flex justify-center items-center font-medium mt-2 text-sm">Kabar Terbaru</span>
                    </div>

                    <div class="p-2.5 border-l border-gray-300">
                        <div class="flex items-center justify-center gap-3 ">
                            <div>
                                <svg class="w-7 h-7" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.5 6L5.25 5.25H18L18.75 6V7.5H19.5L20.25 8.25V11.25V12V15.75V18.75L19.5 19.5H5.25L4.5 18.75V8.25V6ZM18.75 15.75H15.75C14.5074 15.75 13.5 14.7426 13.5 13.5C13.5 12.2574 14.5074 11.25 15.75 11.25H18.75V9H18H6V18H18.75V15.75ZM17.25 6.75V7.5H6V6.75H17.25ZM15 13.5C15 13.0858 15.3358 12.75 15.75 12.75H18.75V14.25H15.75C15.3358 14.25 15 13.9142 15 13.5Z"
                                        fill="#080341" />
                                </svg>
                            </div>
                            <span class="font-bold">8 Kali</span>
                        </div>
                        <span class="flex justify-center items-center font-medium mt-2 text-sm">Pencairan
                            Dana</span>
                    </div>
                </div>
            </div>

            {{-- More Detailed Information --}}

            <div class="mt-4 px-3 py-3 bg-neutral-50 ">
                <div class="border-b pb-6">
                    <h4 class="text-lg font-bold text-neutral-700">Informasi Penggalangan Dana</h4>

                    <div class="border rounded-md p-3 mt-3">
                        <span class="font-medium">Penggalang dana</span>
                        <div class="flex justify-start gap-2 items-center my-3">
                            <div class="relative w-10 h-10  rounded-full bg-neutral-700">
                                {{-- <img src="" alt=""> --}}
                            </div>
                            <div class="font-bold text-neutral-800 flex justify-center items-center gap-0.5">
                                <span>{{ $fund->user->name }}</span>
                                <svg class="w-5 h-5" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-cyan-400" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.5924 3.20027C9.34888 3.4078 9.22711 3.51158 9.09706 3.59874C8.79896 3.79854 8.46417 3.93721 8.1121 4.00672C7.95851 4.03705 7.79903 4.04977 7.48008 4.07522C6.6787 4.13918 6.278 4.17115 5.94371 4.28923C5.17051 4.56233 4.56233 5.17051 4.28923 5.94371C4.17115 6.278 4.13918 6.6787 4.07522 7.48008C4.04977 7.79903 4.03705 7.95851 4.00672 8.1121C3.93721 8.46417 3.79854 8.79896 3.59874 9.09706C3.51158 9.22711 3.40781 9.34887 3.20027 9.5924C2.67883 10.2043 2.4181 10.5102 2.26522 10.8301C1.91159 11.57 1.91159 12.43 2.26522 13.1699C2.41811 13.4898 2.67883 13.7957 3.20027 14.4076C3.40778 14.6511 3.51158 14.7729 3.59874 14.9029C3.79854 15.201 3.93721 15.5358 4.00672 15.8879C4.03705 16.0415 4.04977 16.201 4.07522 16.5199C4.13918 17.3213 4.17115 17.722 4.28923 18.0563C4.56233 18.8295 5.17051 19.4377 5.94371 19.7108C6.278 19.8288 6.6787 19.8608 7.48008 19.9248C7.79903 19.9502 7.95851 19.963 8.1121 19.9933C8.46417 20.0628 8.79896 20.2015 9.09706 20.4013C9.22711 20.4884 9.34887 20.5922 9.5924 20.7997C10.2043 21.3212 10.5102 21.5819 10.8301 21.7348C11.57 22.0884 12.43 22.0884 13.1699 21.7348C13.4898 21.5819 13.7957 21.3212 14.4076 20.7997C14.6511 20.5922 14.7729 20.4884 14.9029 20.4013C15.201 20.2015 15.5358 20.0628 15.8879 19.9933C16.0415 19.963 16.201 19.9502 16.5199 19.9248C17.3213 19.8608 17.722 19.8288 18.0563 19.7108C18.8295 19.4377 19.4377 18.8295 19.7108 18.0563C19.8288 17.722 19.8608 17.3213 19.9248 16.5199C19.9502 16.201 19.963 16.0415 19.9933 15.8879C20.0628 15.5358 20.2015 15.201 20.4013 14.9029C20.4884 14.7729 20.5922 14.6511 20.7997 14.4076C21.3212 13.7957 21.5819 13.4898 21.7348 13.1699C22.0884 12.43 22.0884 11.57 21.7348 10.8301C21.5819 10.5102 21.3212 10.2043 20.7997 9.5924C20.5922 9.34887 20.4884 9.22711 20.4013 9.09706C20.2015 8.79896 20.0628 8.46417 19.9933 8.1121C19.963 7.95851 19.9502 7.79903 19.9248 7.48008C19.8608 6.6787 19.8288 6.278 19.7108 5.94371C19.4377 5.17051 18.8295 4.56233 18.0563 4.28923C17.722 4.17115 17.3213 4.13918 16.5199 4.07522C16.201 4.04977 16.0415 4.03705 15.8879 4.00672C15.5358 3.93721 15.201 3.79854 14.9029 3.59874C14.7729 3.51158 14.6511 3.40781 14.4076 3.20027C13.7957 2.67883 13.4898 2.41811 13.1699 2.26522C12.43 1.91159 11.57 1.91159 10.8301 2.26522C10.5102 2.4181 10.2043 2.67883 9.5924 3.20027ZM16.3735 9.86314C16.6913 9.5453 16.6913 9.03 16.3735 8.71216C16.0557 8.39433 15.5403 8.39433 15.2225 8.71216L10.3723 13.5624L8.77746 11.9676C8.45963 11.6498 7.94432 11.6498 7.62649 11.9676C7.30866 12.2854 7.30866 12.8007 7.62649 13.1186L9.79678 15.2889C10.1146 15.6067 10.6299 15.6067 10.9478 15.2889L16.3735 9.86314Z"
                                        fill="#1C274C" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="my-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <h5 class="text-lg font-bold text-neutral-600">Cerita Penggalangan Dana</h5>
                            <span>{{ \Carbon\Carbon::parse($fund->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                        <div>
                            <svg class="fill-neutral-600 w-5 h-4" height="100%" width="100%" version="1.1"
                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                                xml:space="preserve">
                                <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
 c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
 C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
 C255,161.018,253.42,157.202,250.606,154.389z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="font-medium">
                            {{ $fund->description }}
                        </p>
                    </div>
                </div>

                <div class="my-3 border-y py-3">
                    <div class="flex justify-between items-center ">
                        <div class="flex gap-3 justify-between items-center">
                            <h5 class="text-lg font-bold text-neutral-600">Donasi</h5>
                            <span
                                class="bg-cyan-200/50 rounded-full px-2.5 text-lg font-bold text-sky-600">{{ $totalContributors }}</span>
                        </div>

                        <div>
                            <svg class="fill-neutral-600 w-5 h-4" height="100%" width="100%" version="1.1"
                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                                xml:space="preserve">
                                <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
 c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
 C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
 C255,161.018,253.42,157.202,250.606,154.389z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 py-2 flex flex-col gap-2">


                        @foreach ($fund->contributions as $contribution)
                            <div>
                                <div
                                    class="flex justify-start items-center gap-5 bg-neutral-200/70 py-3 px-5 rounded-lg">
                                    <div class="relative w-10 h-10 rounded-full bg-neutral-700">
                                        {{-- <img src="" alt=""> --}}
                                    </div>
                                    <div class="flex flex-col">
                                        <span
                                            class="font-medium">{{ $contribution->user->name ?? 'Orang Baik' }}</span>
                                        <span>Berdonasi sebesar <span
                                                class="font-bold text-neutral-700">Rp{{ number_format($contribution->amount, 0, ',', '.') }}</span>
                                        </span>
                                        <span
                                            class="text-xs">{{ \Carbon\Carbon::parse($contribution->contribution_date)->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 left-0 w-full">
            <div class="bg-neutral-200 flex justify-center items-center p-3">
                <button class="w-full py-2 rounded-md text-neutral-50 font-bold bg-pink-600">Donasi Sekarang</button>
            </div>
        </div>
    </div>
</body>
