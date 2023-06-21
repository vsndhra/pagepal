<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark border-bottom fixed-top border-bottom-dark" data-bs-theme="dark" style="padding: 10px;">
            <ul class="list-group list-group-horizontal-sm">
                <li class="navbar-brand">
                    <strong>Page Pal</strong>
                </li>
            </ul>
            <div class="menu-group">
                <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item" style="border: none;">
                        <a href="#">Home </a>
                    </li>
                    <li class="list-group-item" style="border: none;">
                        <a href="#">Search </a>
                    </li>
                    <li class="list-group-item" style="border: none;">
                        <a href="#">Logout </a>
                    </li>
                </ul>  
            </div>
        </nav>
    </header>
    <div class="container-fluid" style="margin-top: 50px;">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>