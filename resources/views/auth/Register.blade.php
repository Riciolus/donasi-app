<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DonasiKuy! - Daftar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- Connect CSS  --}}
    @vite('resources/css/app.css')
</head>

<body class="font-inter bg-neutral-50 text-neutral-950 overflow-hidden">
    <nav class="wrapper flex justify-center items-center bg-sky-400 h-16 ">
        <a href="{{ url()->previous() }}" class="ml-5">
            <svg class="fill-neutral-50 w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
                <path id="XMLID_92_"
                    d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001
                l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996
                C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z" />
            </svg>
        </a>
        <div class="container flex justify-between items-center gap-3 px-5">
            <span class="text-neutral-50 font-semibold text-lg">Daftar</span>
        </div>
    </nav>

    <div class=" max-h-screen h-screen flex flex-col justify-center items-center px-7 py-5 md:mx-[35vw]">

        <h1 class="font-bold text-xl text-neutral-700">Perjalanan kebaikanmu dimulai di sini</h1>



        <div class="w-full ">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-5 mt-5 text-neutral-700">

                    <div class="flex flex-col">
                        <label for="name">Nama</label>
                        <input type="text" name="name" required
                            class="border-b-2 border-gray-300 outline-none ps-0.5">
                    </div>

                    <div class="flex flex-col">
                        <label for="email">Email</label>
                        <input type="email" name="email" required
                            class="border-b-2 border-gray-300 outline-none ps-0.5">
                    </div>

                    <div class="flex flex-col">
                        <label>Password</label>
                        <input type="password" name="password" required
                            class="border-b-2 border-gray-300 outline-none ps-0.5">
                    </div>

                </div>

                @if ($errors->any())
                    <div style="color: red;">
                        @foreach ($errors->all() as $error)
                            <p class="mt-1">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <button type="submit"
                    class="w-full bg-sky-400 mt-5 py-2 rounded-lg text-neutral-50 font-bold text-lg">Daftar</button>
            </form>



            <div class="mt-3">
                <span class="text-center flex justify-center items-center">Sudah punya akun? <a href="/auth/login"
                        class="text-sky-600 font-semibold ml-1">Masuk</a></span>
            </div>
        </div>
    </div>

</body>

</html>
