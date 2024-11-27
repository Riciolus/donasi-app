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

<body class="bg-neutral-50 text-neutral-950">
    <div class="wrapper flex justify-center items-center  bg-sky-400 h-16">
        <div class="container flex justify-between items-center gap-3 px-7">
            <span class="text-neutral-50 font-semibold text-lg">Masuk</span>
        </div>
    </div>

    <div class=" max-h-screen h-screen flex flex-col justify-center items-center px-7 py-5">

        <h1 class="font-bold text-xl text-neutral-700">Masuk untuk mulai tolong-menolong sesama</h1>

        <div class="w-full ">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-5 mt-5 text-neutral-700">

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
                    class="w-full bg-sky-400 mt-5 py-2 rounded-lg text-neutral-50 font-bold text-lg">Masuk</button>
            </form>
            <div class="mt-3">
                <span class="text-center flex justify-center items-center">Belum punya akun? <a href="/auth/register"
                        class="text-sky-600 font-semibold ml-1">Daftar</a></span>
            </div>
        </div>
    </div>

</body>

</html>
