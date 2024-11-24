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

<body class="antialiased">
    <div class="absolute">
        {{-- Image --}}
        <div class="w-full">
            <img class="h-44 w-full object-cover" src="{{ asset('assets/images/image.png') }}" alt="">

        </div>

        <div class="m-3">
            {{-- Main Information --}}
            <div class="mt-2">
                <div>
                    <span class="font-bold text-xl text-neutral-800">
                        SEDEKAH JUMAT: Bantu Bangun Masjid di Desa Pelosok
                    </span>
                </div>

                <div class="flex flex-col mt-3">
                    <span class="font-bold text-xl text-cyan-600">Rp144.515.762</span>
                    <span class="text-sm ">Terkumpul dari <span class="text-sm font-bold">Rp500.000.000</span></span>
                </div>
            </div>

            {{-- More Detailed Information --}}

            <div class="mt-10 ">
                <div class="border-b pb-6">
                    <h4 class="text-lg font-bold text-neutral-700">Informasi Penggalangan Dana</h4>

                    <div class="border rounded-md p-3 mt-3">
                        <span class="font-medium">Penggalang dana</span>
                        <div class="flex justify-start gap-2 items-center my-3">
                            <div class="relative w-10 h-10  rounded-full bg-neutral-700">
                                {{-- <img src="" alt=""> --}}
                            </div>
                            <span class="font-bold text-neutral-800 ">Masjid
                                Nusantara</span>
                        </div>

                    </div>
                </div>

                <div class="mt-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <h5 class="text-lg font-bold text-neutral-600">Cerita Penggalangan Dana</h5>
                            <span>02 Oktober 2024</span>
                        </div>
                        <div>
                            <svg class="fill-neutral-600 w-5 h-4" height="100%" width="100%" version="1.1"
                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
                                <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
 c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
 C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
 C255,161.018,253.42,157.202,250.606,154.389z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>
                            Shalat adalah ibadah yang sangat penting dalam Islam, menjadi sarana bagi seorang hamba
                            untuk mendekatkan diri kepada Allah. Namun, sayangnya, banyak masjid dan mushola di pelosok
                            yang kondisinya sangat memprihatinkan. Bangunan yang seadanya, dinding yang retak, atap yang
                            bocor, hingga perlengkapan shalat yang tidak layak seperti sajadah lusuh, robek, dan berbau,
                            sangat mengganggu kenyamanan beribadah.
                        </p>
                    </div>
                </div>

                <div class="mt-3 border-y py-3">
                    <div class="flex justify-between items-center ">
                        <div class="flex gap-3 items-center">
                            <h5 class="text-lg font-bold text-neutral-600">Donasi</h5>
                            <span
                                class="bg-cyan-200/50 rounded-full px-2.5 text-lg font-bold text-sky-600">13.681</span>
                        </div>

                        <div>
                            <svg class="fill-neutral-600 w-5 h-4" height="100%" width="100%" version="1.1"
                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
                                <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
 c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
 C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
 C255,161.018,253.42,157.202,250.606,154.389z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 py-2 flex flex-col gap-2">
                        <div>
                            <div class="flex justify-start items-center gap-5 bg-neutral-200/70 py-3 px-5 rounded-lg">
                                <div class="relative w-10 h-10 rounded-full bg-neutral-700">
                                    {{-- <img src="" alt=""> --}}
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-medium">Orang Baik</span>
                                    <span>Berdonasi sebesar <span class="font-bold text-neutral-700">Rp25.000</span>
                                    </span>
                                    <span class="text-xs">18 menit lalu</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-start items-center gap-5 bg-neutral-200/70 py-3 px-5 rounded-lg">
                                <div class="relative w-10 h-10 rounded-full bg-neutral-700">
                                    {{-- <img src="" alt=""> --}}
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-medium">Orang Baik</span>
                                    <span>Berdonasi sebesar <span class="font-bold text-neutral-700">Rp25.000</span>
                                    </span>
                                    <span class="text-xs">18 menit lalu</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-start items-center gap-5 bg-neutral-200/70 py-3 px-5 rounded-lg">
                                <div class="relative w-10 h-10 rounded-full bg-neutral-700">
                                    {{-- <img src="" alt=""> --}}
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-medium">Orang Baik</span>
                                    <span>Berdonasi sebesar <span class="font-bold text-neutral-700">Rp25.000</span>
                                    </span>
                                    <span class="text-xs">18 menit lalu</span>
                                </div>
                            </div>
                        </div>
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
