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

<div
    class="w-[800px] h-auto mt-4 mb-[80px] mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    @if(!empty($activity->imageUrl))
        <img class="rounded-t-lg h-[270px] w-full object-cover" src="{{ $activity->imageUrl }}" alt="">
    @else

    @endif
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white break-words">{{ $activity->name }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-words">Beschrijving: {{ $activity->description }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Locatie: {{ $activity->location }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Datum: {{ $activity->datum }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">StartTijd: {{ $activity->startTime }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">EindTijd: {{ $activity->endTime }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kosten: €{{ $activity->cost }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Eten: {{ $activity->food }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Maximaal aantal
            mensen: {{ $activity->maxPeople }}</p>
        <form action="#" method="post" class="w-full flex justify-end">
            <button
                class="py-3 px-4 text-sm font-medium text-center text-white bg-[#f6ae20]
                rounded-lg focus:ring-4 focus:outline-none">
                Ik doe mee!
            </button>
        </form>
    </div>
</div>

<div id="footer"></div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@vite('resources/js/app.js')
</body>
</html>
