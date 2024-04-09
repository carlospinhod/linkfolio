<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkFolio - Elevate Your Online Presence</title>
    <meta name="description" content="Streamline your social media presence with a personalized landing page that houses all your important links.">
    <meta name="keywords" content="LinkFolio, landing page, social media, links, online presence">
    <meta name="robots" content="index, follow">

    <!-- Open Graph meta tags for Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="LinkFolio - Elevate Your Online Presence">
    <meta property="og:description" content="Streamline your social media presence with a personalized landing page that houses all your important links.">
    <meta property="og:image" content="https://carlospinho.pt/linkfolio-image.jpg">
    <meta property="og:url" content="https://carlospinho.pt/">

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="https://carlospinho.pt/linkfolio-image.jpg">
    <meta name="twitter:title" content="LinkFolio - Elevate Your Online Presence">
    <meta name="twitter:description" content="Streamline your social media presence with a personalized landing page that houses all your important links.">
    <meta name="twitter:image" content="https://carlospinho.pt/linkfolio-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://carlospinho.pt/favicon.png">
    @vite(['resources/sass/landing-page.scss', 'resources/js/app.js'])
</head>
<body>

@include('landing-page.components.header')
<div class="container">
    <div id="main" class="row">
        @yield('content')
    </div>
</div>

@include('landing-page.components.footer')
</body>
</html>
