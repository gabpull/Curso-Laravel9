<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} Blog Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>

<body>

    @include('layouts.navbar')

    {{ $slot }}


    @include('layouts.footer')




</body>

</html>
