<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=inter:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
                line-height: 1.6;
                margin: 0;
            }
            .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background-color: #f7fafc;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 2rem;
                font-weight: 600;
                margin-bottom: 1rem;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 1rem;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <div class="content">
                <div class="title">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
