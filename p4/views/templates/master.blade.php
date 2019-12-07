<!doctype html>
<html lang='en'>
<head>
    
    <title>@yield('title')</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/style.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
    <a href='/'><img id='logo' src='/images/hiLo-logo.jpeg' alt='Hi Lo Game Logo'></a>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>