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
<p class="text-center text-xl text-white">
    @if( isset($message))
    {{$message}}
    @endif
</p>
<div class="w-[500px] h-[280px] mt-8 mx-auto pt-[20px] text-center border-[1px] border-gray-400 rounded-xl">
    <p class="text-xl text-white">Log in</p>
    <form method="post" action="/login" class="flex flex-col pt-6 items-center">
        @csrf

        <input type="email" name="email" required
               class="mb-6 h-[40px] w-[400px] bg-gray-800 border-[1px] light:bg-gray-700 light:text-gray-400"
               placeholder="Email adres">

        <input type="password" name="password" required
               class="h-[40px] w-[400px] bg-gray-800 border-[1px] light:bg-gray-700 light:text-gray-400"
               placeholder="Wachtwoord">

        <button class="mt-4 border-[1px] rounded-xl bg-white text-black
        light:bg-gray-700 light:text-gray-400 h-[40px] px-2">Log in
        </button>
    </form>

    <p class="mt-2">Heb je nog geen account? Maak <a href="/registreer" class="text-orange-400 underline">hier</a> dan
        een
        account aan</p>
</div>

<div id="footer"></div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@vite('resources/js/app.js')
</body>
</html>
