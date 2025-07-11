<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    <header>
       <x-navbar/> 
    </header>
    <main>
        {{ $slot }}
    </main>
    <x-footer/>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
</html>