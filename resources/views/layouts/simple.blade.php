<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7de6ab665e.js" crossorigin="anonymous"></script>
    <!-- tailwindcss font  -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white leading-normal font-cabin text-zinc-800 select-none">
    <div>
        <main>
            @yield('content')
        </main>
    </div>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>