<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Donasi Kuy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Connect CSS  --}}
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-neutral-50 text-neutral-700 ">
    <div>

        {{-- Image --}}
        <div class="w-full">
            <img class="h-44 w-full object-cover" src="{{ asset('storage/' . $fund->image_url) }}" alt="">
        </div>

        <div class=" bg-gray-200">

            {{-- Main Information --}}
            <div class="py-3 px-3 bg-neutral-50 border-b-2 border-gray-300">

                {{-- Title --}}
                <div>
                    <span class="font-bold text-xl text-neutral-700">
                        {{ $fund->title }}
                    </span>
                </div>

                {{-- Informasi total donasi, progress, dan additional informations --}}
                <div class="flex flex-col gap-1 mt-3">
                    <span
                        class="font-bold text-xl text-cyan-500">Rp{{ number_format($fund->collected_amount, 0, ',', '.') }}</span>

                    <span class="text-sm ">Terkumpul dari
                        <span
                            class="text-sm font-bold">Rp{{ number_format($fund->goal_amount, 0, ',', '.') }}</span></span>

                    {{-- Kalkulasi mencari persenan uang terkumpul dan uang yang diharapkan. untuk lebar progress bar --}}
                    @php
                        $progressPercentage = ($fund->collected_amount / $fund->goal_amount) * 100;
                    @endphp

                    <div class="w-full bg-gray-200 rounded-full h-3 mt-1">
                        <div class="bg-sky-500 h-3 rounded-full" style="width: {{ min($progressPercentage, 100) }}%;">
                        </div>
                    </div>
                </div>

                {{-- Additional Informations [Contributors,  Recent News, Fund Cashout History] --}}
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

                {{-- Informasi pembuat fund --}}
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

                {{-- Fund Description --}}
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

                {{-- Contributors --}}
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




        {{-- Start Donation Button --}}
        <div class="fixed bottom-0 left-0 w-full">
            <div class="bg-neutral-200 flex justify-center items-center p-3">
                @if (Auth::check())
                    <button id="openFormModal" class="w-full py-2 rounded-md text-neutral-50 font-bold bg-pink-600">
                        Donasi Sekarang
                    </button>
                @else
                    <a href="{{ url('auth/login') }}" class="w-full">
                        <button class="w-full py-2 rounded-md text-neutral-50 font-bold bg-pink-600">
                            Donasi Sekarang
                        </button>
                    </a>
                @endif
            </div>
        </div>

        <!-- Donation Modal ) -->
        <div id="donate-form"
            class="fixed inset-0 text-neutral-700 bg-black bg-opacity-50 justify-center flex items-end">
            <div class="bg-neutral-50 px-3 pt-5 rounded-t-lg w-full max-w-md h-[80%] transform translate-y-full transition-transform duration-300"
                id="modal-content">
                <h2 class="text-lg text-center font-bold ">Pilih Nominal Donasi</h2>

                <form id="donationForm" action="{{ route('fund.contribute', $fund->id) }}" method="POST">
                    @csrf

                    <div>
                        <div class="flex flex-col gap-3 mt-4">

                            {{-- 5.000 --}}
                            <div
                                class="shadow-md hover:bg-neutral-200 transition-colors border-y border-x-2 flex items-center gap-3 rounded-md">
                                <button type="button" class="shortcutButton flex w-full p-4" data-amount="5000">
                                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <defs>
                                            <radialGradient id="radial-gradient" cx="36" cy="18" r="6"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ff568d" />
                                                <stop offset=".454" stop-color="#ff9678" />
                                                <stop offset=".817" stop-color="#ffc26a" />
                                                <stop offset="1" stop-color="#ffd364" />
                                            </radialGradient>
                                            <radialGradient id="radial-gradient-2" cx="12"
                                                xlink:href="#radial-gradient" />
                                            <style>
                                                .cls-4 {
                                                    fill: #f6fafd
                                                }

                                                .cls-7 {
                                                    fill: #273941
                                                }
                                            </style>
                                        </defs>
                                        <g id="_10-shy" data-name="10-shy">
                                            <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                            <path
                                                d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                                style="fill:#ffe369" />
                                            <path
                                                d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                                style="fill:#ffb32b" />
                                            <ellipse class="cls-4" cx="36.5" cy="7.5" rx=".825"
                                                ry="1.148" transform="rotate(-45.02 36.5 7.5)" />
                                            <ellipse class="cls-4" cx="30.246" cy="4" rx=".413"
                                                ry=".574" transform="rotate(-45.02 30.246 4)" />
                                            <ellipse class="cls-4" cx="33.5" cy="5.5" rx="1.65"
                                                ry="2.297" transform="rotate(-45.02 33.5 5.5)" />
                                            <circle cx="36" cy="18" r="6"
                                                style="fill:url(#radial-gradient)" />
                                            <circle cx="12" cy="18" r="6"
                                                style="fill:url(#radial-gradient-2)" />
                                            <path class="cls-7"
                                                d="M24 28c-4.411 0-8-3.14-8-7h2c0 2.757 2.691 5 6 5s6-2.243 6-5h2c0 3.86-3.589 7-8 7zM38 13h-2a3 3 0 0 0-6 0h-2a5 5 0 0 1 10 0zM20 13h-2a3 3 0 0 0-6 0h-2a5 5 0 0 1 10 0z" />
                                        </g>
                                    </svg>
                                    <span class="font-bold text-lg ml-3">Rp5.000</span>
                                </button>
                            </div>

                            {{-- 15.000 --}}
                            <div
                                class="shadow-md hover:bg-neutral-200 transition-colors border-y border-x-2 flex items-center gap-3 rounded-md">
                                <button type="button" class="shortcutButton flex w-full p-4" data-amount="15000">
                                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <defs>
                                            <radialGradient id="radial-gradient" cx="-6.714" cy="24.714" r="6"
                                                gradientTransform="translate(16.833 -4.833) scale(1.167)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ff568d" />
                                                <stop offset=".454" stop-color="#ff9678" />
                                                <stop offset=".817" stop-color="#ffc26a" />
                                                <stop offset="1" stop-color="#ffd364" />
                                            </radialGradient>
                                            <radialGradient id="radial-gradient-2" cx="19" cy="24.714"
                                                xlink:href="#radial-gradient" />
                                            <style>
                                                .cls-6 {
                                                    fill: #3bc5f6
                                                }

                                                .cls-7 {
                                                    fill: #00a3e1
                                                }

                                                .cls-8 {
                                                    fill: #273941
                                                }
                                            </style>
                                        </defs>
                                        <g id="_16-cute" data-name="16-cute">
                                            <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                            <path
                                                d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                                style="fill:#ffe369" />
                                            <path
                                                d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                                style="fill:#ffb32b" />
                                            <circle cx="9" cy="24" r="7"
                                                style="fill:url(#radial-gradient)" />
                                            <circle cx="39" cy="24" r="7"
                                                style="fill:url(#radial-gradient-2)" />
                                            <path class="cls-6"
                                                d="M2.657 9 5 6.657 3.828 5.485a1.657 1.657 0 0 0-2.343 0 1.657 1.657 0 0 0 0 2.343zM6.657 5 9 2.657 7.828 1.485a1.657 1.657 0 0 0-2.343 0 1.657 1.657 0 0 0 0 2.343z" />
                                            <path class="cls-7"
                                                d="M2.485 6.485a1.657 1.657 0 0 1 2.343 0l-1-1a1.657 1.657 0 0 0-2.343 2.343l1 1a1.657 1.657 0 0 1 0-2.343zM6.485 2.485a1.657 1.657 0 0 1 2.343 0l-1-1a1.657 1.657 0 0 0-2.343 2.343l1 1a1.657 1.657 0 0 1 0-2.343z" />
                                            <path class="cls-8"
                                                d="M32 25.12C31.96 31.71 28.97 38 24 38s-7.96-6.29-8-12.88a8.232 8.232 0 0 0 4 .88 5.824 5.824 0 0 0 4-2 5.824 5.824 0 0 0 4 2 8.232 8.232 0 0 0 4-.88z" />
                                            <path
                                                d="M24 38c3.444 0 5.934-3.022 7.154-7.069A13.582 13.582 0 0 0 24 29a13.582 13.582 0 0 0-7.154 1.931C18.066 34.978 20.556 38 24 38z"
                                                style="fill:#ae2d4c" />
                                            <path
                                                d="M24 36c-2.954 0-5.2-2.226-6.554-5.412-.2.11-.407.222-.6.343C18.066 34.978 20.556 38 24 38s5.934-3.022 7.154-7.069c-.193-.121-.4-.233-.6-.343C29.2 33.774 26.954 36 24 36z"
                                                style="fill:#8a293d" />
                                            <path class="cls-8"
                                                d="M40.553 19.9C38.764 19 36.717 19 33 19a1 1 0 0 1-1-1c0-2.265 3.568-5 8-5v2a7.807 7.807 0 0 0-5.419 2c3.058.018 4.963.151 6.866 1.1zM7.447 19.9l-.894-1.79c1.9-.951 3.808-1.084 6.866-1.1A7.807 7.807 0 0 0 8 15v-2c4.432 0 8 2.735 8 5a1 1 0 0 1-1 1c-3.717 0-5.764 0-7.553.9zM28 27a6.127 6.127 0 0 1-4-1.642A6.127 6.127 0 0 1 20 27c-4.836 0-7-2.511-7-5h2c0 1.794 2.01 3 5 3a4.791 4.791 0 0 0 3.293-1.707 1 1 0 0 1 1.414 0A4.791 4.791 0 0 0 28 25c2.99 0 5-1.206 5-3h2c0 2.489-2.164 5-7 5z" />
                                            <path class="cls-6"
                                                d="M45.343 9 43 6.657l1.172-1.172a1.657 1.657 0 0 1 2.343 0 1.657 1.657 0 0 1 0 2.343zM41.343 5 39 2.657l1.172-1.172a1.657 1.657 0 0 1 2.343 0 1.657 1.657 0 0 1 0 2.343z" />
                                            <path class="cls-7"
                                                d="M46.515 5.485a1.657 1.657 0 0 0-2.343 0l-1 1a1.657 1.657 0 1 1 2.343 2.343l1-1a1.657 1.657 0 0 0 0-2.343zM42.515 1.485a1.657 1.657 0 0 0-2.343 0l-1 1a1.657 1.657 0 0 1 2.343 2.343l1-1a1.657 1.657 0 0 0 0-2.343z" />
                                        </g>
                                    </svg>
                                    <span class="font-bold text-lg ml-3">Rp15.000</span>
                                </button>
                            </div>

                            {{-- 25.000 --}}
                            <div
                                class="shadow-md hover:bg-neutral-200 transition-colors border-y border-x-2 flex items-center gap-3 rounded-md">
                                <button type="button" class="shortcutButton flex w-full p-4" data-amount="25000">
                                    <div>
                                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                            <defs>
                                                <radialGradient id="radial-gradient" cx="25.285" cy="28.999"
                                                    r="6"
                                                    gradientTransform="rotate(-.156 -1753.99 -1994.888) scale(1.167)"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#ff568d" />
                                                    <stop offset=".454" stop-color="#ff9678" />
                                                    <stop offset=".817" stop-color="#ffc26a" />
                                                    <stop offset="1" stop-color="#ffd364" />
                                                </radialGradient>
                                                <radialGradient id="radial-gradient-2" cx="3.285" cy="28.999"
                                                    r="6"
                                                    gradientTransform="rotate(-.156 -1755.462 -3341.71) scale(1.167)"
                                                    xlink:href="#radial-gradient" />
                                                <style>
                                                    .cls-3 {
                                                        fill: #ffb32b
                                                    }

                                                    .cls-4 {
                                                        fill: #f6fafd
                                                    }

                                                    .cls-7 {
                                                        fill: #273941
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_15-kiss_love" data-name="15-kiss love">
                                                <circle cx="24" cy="23" r="23" style="fill:#ffce52" />
                                                <path
                                                    d="M23.946 3C36.1 2.967 45.969 11.447 46 21.94h.975a23 23 0 0 0-45.949.124H2C1.969 11.566 11.8 3.033 23.946 3z"
                                                    style="fill:#ffe369" />
                                                <path class="cls-3"
                                                    d="M46 21.94c.026 10.494-9.8 19.027-21.951 19.06S2.026 32.553 2 22.06h-.974a22.14 22.14 0 0 0-.023 1 23 23 0 0 0 46-.124c0-.336-.013-.668-.028-1z" />
                                                <ellipse class="cls-4" cx="36.458" cy="7.466" rx=".825"
                                                    ry="1.148" transform="rotate(-45.175 36.458 7.466)" />
                                                <ellipse class="cls-4" cx="30.192" cy="2.983" rx=".413"
                                                    ry=".574" transform="rotate(-45.175 30.191 2.984)" />
                                                <ellipse class="cls-4" cx="33.452" cy="5.474" rx="1.65"
                                                    ry="2.297" transform="rotate(-45.175 33.453 5.474)" />
                                                <circle cx="35.016" cy="28.97" r="7"
                                                    style="fill:url(#radial-gradient)" />
                                                <circle cx="13.016" cy="29.03" r="7"
                                                    style="fill:url(#radial-gradient-2)" />
                                                <path class="cls-7"
                                                    d="M24.043 39a3 3 0 0 1-3.008-2.992l2-.005a1 1 0 1 0 1-1 1 1 0 1 1-.006-2 1 1 0 1 0-1-1l-2 .005a3 3 0 1 1 5.24 1.986A3 3 0 0 1 24.043 39z" />
                                                <ellipse class="cls-7" cx="14.989" cy="19.024" rx="3"
                                                    ry="4" transform="translate(-.052 .041)" />
                                                <ellipse cx="14.989" cy="19.024" rx="2" ry="3"
                                                    transform="rotate(-.156 15.032 19.12)" style="fill:#141e21" />
                                                <circle class="cls-4" cx="15.986" cy="18.022" r="1" />
                                                <path class="cls-7"
                                                    d="M39.995 20.957h-2a3 3 0 1 0-6 .016l-2 .006a5 5 0 1 1 10-.027z" />
                                                <path
                                                    d="M34.245 37.639c-.44-.433-3.029-7.438 1.022-11.47a3.65 3.65 0 0 1 5.34-.089c1.32 1.3 1.3 3.062.389 4.839 1.79-.911 3.57-.94 4.89.359a3.564 3.564 0 0 1-.061 5.287c-4.051 4.035-10.7 1.94-11.58 1.074z"
                                                    style="fill:#cf4054" />
                                                <path
                                                    d="M45.886 31.278c-1.32-1.3-3.1-1.27-4.89-.359.91-1.777.931-3.54-.389-4.839a3.65 3.65 0 0 0-5.34.089c-4.051 4.032-1.462 11.037-1.022 11.47.88.866 7.529 2.958 11.58-1.074a3.564 3.564 0 0 0 .061-5.287zm-1.718 3.97c-2.894 2.88-7.644 1.386-8.272.767-.314-.309-2.164-5.313.73-8.193a2.607 2.607 0 0 1 3.814-.063 2.778 2.778 0 0 1 .278 3.456 2.853 2.853 0 0 1 3.493.257 2.546 2.546 0 0 1-.043 3.776z"
                                                    style="fill:#ae2d4c" />
                                                <ellipse class="cls-4" cx="44.03" cy="33.946" rx=".825"
                                                    ry="1.148" transform="rotate(-45.175 44.03 33.946)" />
                                                <ellipse class="cls-4" cx="44.772" cy="32.444" rx=".413"
                                                    ry=".574" transform="rotate(-45.175 44.772 32.444)" />
                                                <path class="cls-3"
                                                    d="M35.4 38.244a3.69 3.69 0 0 1-1.153-.6 10.933 10.933 0 0 1-1.172-4.374 13.758 13.758 0 0 0 .834 5.69 2.586 2.586 0 0 0 .343.684 8.7 8.7 0 0 0 4.181 1.256 23.191 23.191 0 0 0 2.172-2 12.22 12.22 0 0 1-5.205-.656z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="font-bold text-lg ml-3">Rp25.000</span>
                                </button>
                            </div>

                            {{-- 30.000 --}}
                            <div
                                class="shadow-md hover:bg-neutral-200 transition-colors border-y border-x-2 flex items-center gap-3 rounded-md">
                                <button type="button" class="shortcutButton flex w-full p-4" data-amount="30000">
                                    <div>
                                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                            <defs>
                                                <style>
                                                    .cls-4 {
                                                        fill: #f6fafd
                                                    }

                                                    .cls-6 {
                                                        fill: #ae2d4c
                                                    }

                                                    .cls-7 {
                                                        fill: #cf4054
                                                    }

                                                    .cls-10 {
                                                        fill: #fbb40a
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_13-love" data-name="13-love">
                                                <circle cx="24" cy="24" r="23" style="fill:#ffce52" />
                                                <path
                                                    d="M24 4c12.15 0 22 8.507 22 19h.975a23 23 0 0 0-45.95 0H2C2 12.507 11.85 4 24 4z"
                                                    style="fill:#ffe369" />
                                                <path
                                                    d="M46 23c0 10.493-9.85 19-22 19S2 33.493 2 23h-.975c-.014.332-.025.665-.025 1a23 23 0 0 0 46 0c0-.335-.011-.668-.025-1z"
                                                    style="fill:#ffb32b" />
                                                <ellipse class="cls-4" cx="37" cy="9" rx=".825"
                                                    ry="1.148" transform="rotate(-45.02 37 9)" />
                                                <ellipse class="cls-4" cx="30.746" cy="4.5" rx=".413"
                                                    ry=".574" transform="rotate(-45.02 30.745 4.5)" />
                                                <ellipse class="cls-4" cx="34" cy="7" rx="1.65"
                                                    ry="2.297" transform="rotate(-45.02 34 7)" />
                                                <path
                                                    d="M34 39c0-2.76-4.47-5-10-5s-10 2.24-10 5l-.1.13A10.727 10.727 0 0 1 9 30.15 2.025 2.025 0 0 1 10.87 28c1.88 1.08 6.39 1 13.13 1s11.25.08 13.12-1A2.026 2.026 0 0 1 39 30.15a10.727 10.727 0 0 1-4.9 8.98z"
                                                    style="fill:#273941" />
                                                <path class="cls-6"
                                                    d="m34 39 .1.13A17.882 17.882 0 0 1 24 42a17.882 17.882 0 0 1-10.1-2.87L14 39c0-2.76 4.47-5 10-5s10 2.24 10 5z" />
                                                <path class="cls-7"
                                                    d="M16.5 9a4.465 4.465 0 0 1 4.5 4.8C21 21 13.5 25 12 25c-.72 0-8.38-3.7-8.97-10.39Q3 14.205 3 13.8a4.451 4.451 0 0 1 3.58-4.7A4.053 4.053 0 0 1 7.5 9c2.25 0 3.75 1.6 4.5 4 .75-2.4 2.25-4 4.5-4zM45 13.8q0 .4-.03.81C44.44 21.3 37.44 25 36 25c-.75 0-9-4-9-11.2A4.465 4.465 0 0 1 31.5 9c2.25 0 3.75 1.6 4.5 4 .75-2.4 2.25-4 4.5-4a4.053 4.053 0 0 1 .92.1A4.451 4.451 0 0 1 45 13.8z" />
                                                <path
                                                    d="M10.87 30c1.88 1.08 6.39 1 13.13 1s11.25.08 13.12-1a1.926 1.926 0 0 1 1.793 1.536A11.043 11.043 0 0 0 39 30.15 2.026 2.026 0 0 0 37.12 28c-1.87 1.08-6.38 1-13.12 1s-11.25.08-13.13-1A2.025 2.025 0 0 0 9 30.15a11.015 11.015 0 0 0 .087 1.385A1.92 1.92 0 0 1 10.87 30z"
                                                    style="fill:#141e21" />
                                                <path
                                                    d="M33.531 37.486A18.171 18.171 0 0 1 24 40a18.171 18.171 0 0 1-9.531-2.514A2.809 2.809 0 0 0 14 39l-.1.13A17.882 17.882 0 0 0 24 42a17.882 17.882 0 0 0 10.1-2.87L34 39a2.809 2.809 0 0 0-.469-1.514z"
                                                    style="fill:#8a293d" />
                                                <path class="cls-10"
                                                    d="M36 25c-.71 0-8.131-3.59-8.921-10.081A6 6 0 0 0 27 15.8C27 23 35.25 27 36 27c1.44 0 8.44-3.7 8.97-10.39q.03-.41.03-.81a6.079 6.079 0 0 0-.07-.907C44.225 21.4 37.419 25 36 25zM12 25c-.71 0-8.131-3.59-8.921-10.081A6 6 0 0 0 3 15.8C3 23 11.25 27 12 27c1.44 0 8.44-3.7 8.97-10.39q.03-.41.03-.81a6.079 6.079 0 0 0-.07-.907C20.225 21.4 13.419 25 12 25z" />
                                                <path class="cls-6"
                                                    d="M40.5 9c-2.25 0-3.75 1.6-4.5 4 .583-1.8 1.75-3 3.5-3a3.408 3.408 0 0 1 3.5 3.6c0 5.4-5.833 8.4-7 8.4-.56 0-6.518-2.775-6.977-7.793A8.167 8.167 0 0 1 29 13.6a3.366 3.366 0 0 1 2.784-3.525A3.243 3.243 0 0 1 32.5 10c1.75 0 2.917 1.2 3.5 3-.75-2.4-2.25-4-4.5-4a4.053 4.053 0 0 0-.92.1A4.451 4.451 0 0 0 27 13.8q0 .4.03.81C27.62 21.3 35.28 25 36 25c1.5 0 9-4 9-11.2A4.465 4.465 0 0 0 40.5 9zM16.5 9c-2.25 0-3.75 1.6-4.5 4 .583-1.8 1.75-3 3.5-3a3.408 3.408 0 0 1 3.5 3.6c0 5.4-5.833 8.4-7 8.4-.56 0-6.518-2.775-6.977-7.793A8.25 8.25 0 0 1 5 13.6a3.366 3.366 0 0 1 2.784-3.525A3.243 3.243 0 0 1 8.5 10c1.75 0 2.917 1.2 3.5 3-.75-2.4-2.25-4-4.5-4a4.053 4.053 0 0 0-.92.1A4.451 4.451 0 0 0 3 13.8q0 .4.03.81C3.62 21.3 11.28 25 12 25c1.5 0 9-4 9-11.2A4.465 4.465 0 0 0 16.5 9z" />
                                                <ellipse class="cls-4" cx="42" cy="13" rx=".825"
                                                    ry="1.148" transform="rotate(-45.02 41.999 13)" />
                                                <ellipse class="cls-4" cx="40.746" cy="11.5" rx=".413"
                                                    ry=".574" transform="rotate(-45.02 40.746 11.5)" />
                                                <ellipse class="cls-4" cx="18" cy="13" rx=".825"
                                                    ry="1.148" transform="rotate(-45.02 18 13)" />
                                                <ellipse class="cls-4" cx="16.746" cy="11.5" rx=".413"
                                                    ry=".574" transform="rotate(-45.02 16.745 11.5)" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="font-bold text-lg ml-3">Rp30.000</span>
                                </button>
                            </div>


                        </div>
                        <div class="border py-2 px-3 mt-5 border-gray-300 rounded-md">

                            <h5 class="font-semibold ">Nominal Donasi Lainnya</h5>
                            <div class="flex items-center bg-neutral-200 bg-opacity-50 rounded-md mt-4">
                                <h2 class="ml-4 text-2xl font-bold">Rp</h2>
                                <input type="text" id="numberInput" name="amount"
                                    class="py-2 w-full text-right text-3xl font-bold bg-transparent outline-none rounded-md placeholder:text-neutral-600 pe-3"
                                    placeholder="0">
                            </div>

                            <div>
                                <span class="text-sm {{ $errors->has('amount') ? 'text-red-500' : '' }}">Min. donasi
                                    sebesar Rp1.000</span>
                            </div>

                        </div>
                    </div>




                    <div>
                        <button type="submit"
                            class="w-full bg-pink-400 py-2 rounded-md mt-3 text-lg text-neutral-50 font-bold tracking-wide">Donasi</button>
                    </div>
                </form>




                {{-- Close Modal button --}}
                <button id="closeFormModal" class="absolute top-2 right-4 mt-3 ">
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

    @vite('resources/js/app.js')

</body>
