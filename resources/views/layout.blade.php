<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

        <title>@yield('title','Laravel from Scratch')</title>

    </head>
    <body>        
        <div class="container is-fluid">
            <nav class="level">
                <div class="level-item"><a class="button is-fullwidth" href="/">Home</a></li></div>
                <div class="level-item"><a class="button is-fullwidth" href="/projects">Projects</a></li></div>
                <div class="level-item"><a class="button is-fullwidth" href="/about">About Us</a></li></div>
                <div class="level-item"><a class="button is-fullwidth" href="/contact">Contact</a></li></div>
            
            </nav>
            @yield('content')
        </div>
    </body>
</html>
