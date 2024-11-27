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

<body>
    @include('layout.NavigationBar')

    <div class=" max-h-screen h-screen flex flex-col justify-center items-center px-7 py-5">

        <h1 class="font-bold text-xl text-neutral-700">Masuk untuk mulai tolong-menolong sesama</h1>

        @if ($errors->any())
            <div style="color: red;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

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

                <button type="submit"
                    class="w-full bg-sky-400 mt-5 py-2 rounded-lg text-neutral-50 font-bold text-lg">Masuk</button>
            </form>
        </div>
    </div>

    @vite('resources/js/app.js')

</body>

</html>