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
<script>
    window.user = '<?php if (Auth::user() == null) {
        echo $name = 'Log in ->';
    } else {
        echo $name = Auth::user()->name;
    } ?>'
</script>
@vite('resources/js/app.js')
<div id="header"></div>
<x-flash/>
<div class="flex justify-center h-screen" id="activity"></div>
<div id="footer"></div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@vite('resources/js/app.js')
</body>
</html>
