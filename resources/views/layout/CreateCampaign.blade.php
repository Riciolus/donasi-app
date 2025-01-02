<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DonasiKuy! - Campaign</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- Connect CSS  --}}
    @vite('resources/css/app.css')
</head>

<body class="antialiased font-inter bg-neutral-50 text-neutral-700 ">
    <nav class="wrapper flex justify-center items-center bg-sky-400 h-16 ">
        <a href="/" class="ml-5">
            <svg class="fill-neutral-50 w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
                <path id="XMLID_92_"
                    d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001
                            l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996
                            C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z" />
            </svg>
        </a>
        <div class="container flex justify-between items-center gap-3 px-5">
            <span class="text-neutral-50 font-semibold text-lg">Masuk</span>
        </div>
    </nav>

    <div class="p-5 md:mx-64">
        <div>
            <h3 class="font-bold text-lg">Buat penggalangan dana untuk mulai mengumpulkan orang-orang baik</h3>
        </div>

        <div class="mt-5 px-2 ">
            <form action="{{ route('fund.store') }}" method="POST" enctype="multipart/form-data"
                class="flex flex-col gap-3">
                @csrf
                <div class="flex flex-col">
                    <label for="image">Foto Sampul*</label>

                    <div class="flex items-center justify-center w-full mt-2">
                        <label for="image"
                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-400 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100  ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to
                                        upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>
                            </div>
                            <input id="image" name="image" type="file" class="hidden" required />
                        </label>
                    </div>

                </div>

                <div class="flex flex-col">
                    <label for="title">Judul*</label>
                    <input type="text" name="title" required
                        class="border-b-2 border-gray-300 outline-none ps-0.5 text-lg">
                </div>

                <div class="flex flex-col border-b-2 border-gray-300 ">
                    <label for="goal_amount">Target Donasi*</label>
                    <div class="flex justify-start items-center gap-1 text-lg">
                        <span>Rp</span>
                        <input type="text" name="goal_amount" required class=" outline-none ps-0.5 ">

                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="category">Kategori*</label>
                    <select name="category" class="text-lg outline-none border-2 border-gray-300 p-1 rounded-md">
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Panti Asuhan">Panti Asuhan</option>
                        <option value="Anak & Bayi Sakit">Anak & Bayi Sakit</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Bencana Alam">Bencana Alam</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" required class="border-2 rounded-lg p-1 h-32 border-gray-300 outline-none mt-2  text-lg">
                    </textarea>
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="color: red;">{{ $error }}</p>
                    @endforeach
                @endif

                <div class="mt-5 md:flex md:justify-center md:items-center">
                    <button type="submit"
                        class="w-full bg-pink-400 md:w-1/2 py-2 hover:bg-pink-600 transition-colors rounded-md mt-3 text-lg text-neutral-50 font-bold tracking-wide">Buat
                        Penggalangan Dana</button>
                </div>
            </form>
        </div>
    </div>

</body>
