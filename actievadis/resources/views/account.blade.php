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

<div id="welkomDiv"
     class="w-[350px] sm:w-[500px] md:w-[700px] lg:w-[800px] h-auto mt-4 mb-[80px] mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white break-words">Hallo
            {{Auth::user()->name}},</h1>
        <p>Hier vind je alle relevante informatie</p>
    </div>
</div>

<div id="gegevensDiv"
     class="w-[350px] sm:w-[500px] md:w-[700px] lg:w-[800px] h-auto mt-4 mb-[80px] mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <h1 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white break-words">Persoonlijke
            gegevens,</h1>
        <p class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white break-words">Gebruikersnaam:</p>
        <p>{{Auth::user()->name}}</p>
        <p class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white break-words">Email:</p>
        <p>{{Auth::user()->email}}</p>
    </div>
</div>

<div id="aangemeldeActivitiesDiv"
     class="w-[350px] sm:w-[500px] md:w-[700px] lg:w-[800px] h-auto mt-4 mb-[80px] mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">

    </div>
</div>

<div id="footer"></div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@vite('resources/js/app.js')
</body>
</html>
