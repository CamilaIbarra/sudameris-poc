<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7de6ab665e.js" crossorigin="anonymous"></script>
    <!-- tailwindcss font  -->
    <!-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> -->
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white leading-normal font-cabin text-zinc-800 select-none">
    <div>
        @include('layouts.partials.nav')

        @yield('content')

        @include('layouts.partials.footer')
    </div>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>