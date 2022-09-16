<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actievadis</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    @vite('resources/css/app.css')
</head>
<body class="dark:bg-gray-700 dark:text-gray-400">

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@vite('resources/js/app.js')
<div id="header"></div>
<div class="w-[500px] h-[380px] mt-8 mx-auto pt-[20px] text-center border-[1px] border-gray-400 rounded-xl">
    <p class="text-xl text-white">Registreer hier</p>
    <form method="post" action="/registreer" class="flex flex-col pt-6 items-center">
        @csrf
        <input type="text" name="name"
               class="mb-6 h-[40px] w-[400px] bg-gray-800 border-[1px] light:bg-gray-700 light:text-gray-400"
               placeholder="Gebruikersnaam"
               value="{{ old('name') }}">
        @error('name')
        <p class="text-white text-xs">*{{ $message }}*</p>
        @enderror
        <input type="email" name="email"
               class="mb-6 h-[40px] w-[400px] bg-gray-800 border-[1px] light:bg-gray-700 light:text-gray-400"
               placeholder="Email adres"
               value="{{ old('email') }}">
        @error('email')
        <p class="text-white text-xs">*{{ $message }}*</p>
        @enderror
        <input type="password" name="password"
               class="h-[40px] w-[400px] bg-gray-800 border-[1px] light:bg-gray-700 light:text-gray-400"
               placeholder="Wachtwoord">
        @error('password')
        <p class="text-white text-xs">*{{ $message }}*</p>
        @enderror
        <button class="mt-4 border-[1px] rounded-xl bg-white text-black
        light:bg-gray-700 light:text-gray-400 h-[40px] px-2">Registreer
        </button>
    </form>

    <p class="mt-2">Heb je al een account? log <a href="/login" class="text-blue-700 underline">hier</a> dan in</p>
</div>

<div id="footer"></div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@vite('resources/js/app.js')
</body>
</html>
