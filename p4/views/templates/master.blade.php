<!doctype html>
<html lang='en'>
<head>
    
    <title>@yield('title')</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <script   src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <link href='/css/style.css' rel='stylesheet'>

    @yield('head')

</head>
<body>
    <div class="container-sm border rounded-lg" style="width:80%;background-color:lightgrey;">
        <div class="row" style="background-color:lightgrey;">
            <div class="col-sm-4" ></div>
            <div class="col-sm-4" style="width:70%;background-color:lightgrey;">
                <header><center>
                    <a href='/'><img id='logo' class="rounded img-fluid" src='/images/hiLo-logo.jpeg' alt='High Low Game Logo'></a>
                    <h1><small>Guessing Game</small></h1>
                </center></header>
            </div>
            <div class="col-sm-4" style="background-color:lightgrey;"> </div>

        </div>
        
        <main>
            @yield('content')
        </main>

        @yield('body')
        
    </div>
</body>
</html>