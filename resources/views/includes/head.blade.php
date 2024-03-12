<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('seo_title')</title>
<meta name="description" content="@yield('seo_description')">

<!-- Example of Open Graph meta tags for Facebook -->
<meta property="og:title" content="@yield('seo_title')">
<meta property="og:description" content="@yield('seo_description')">
<meta property="og:image" content="@yield('image')">
<meta property="og:url" content="@yield('url')">

<!-- Example of Twitter Card meta tags -->
<meta name="twitter:title" content="@yield('seo_title')">
<meta name="twitter:description" content="@yield('seo_description')">
<meta name="twitter:image" content="@yield('image')">
<meta name="twitter:card" content="@yield('image')">

<!-- Other Meta Tags -->
<meta name="robots" content="index, follow">
<meta name="keywords" content="@yield('keywords')">
<!-- Favicon -->

<link rel="icon" type="image/png" href="@yield('favicon')">
@livewireStyles
@vite(['resources/sass/app.scss'])
