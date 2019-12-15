<!doctype html>
<html lang='en'>
<head>
    
    <title>@yield('title')</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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