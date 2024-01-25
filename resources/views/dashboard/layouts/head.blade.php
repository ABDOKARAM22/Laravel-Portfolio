<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">


<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <!--- Style css -->
    @yield('css')
<link href="{{ URL::asset('assets/dashboard/assets/css/style.css') }}" rel="stylesheet">


<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])



<!--- Style css -->
    <link href="{{ URL::asset('assets/dashboard/assets/css/ltr.css') }}" rel="stylesheet">


