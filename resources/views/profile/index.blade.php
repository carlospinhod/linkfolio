<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="bg-dark text-light">
<div class="container">
    <header class="row">
        @include('includes.header')
    </header>
    <div id="main" class="row">
        @yield('content')
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
@livewireScripts
@vite(['resources/js/app.js'])

</body>
</html>
