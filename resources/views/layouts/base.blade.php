<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="@yield('add')">
    <link rel="stylesheet" href="@yield('liste')">


    <title>@yield('title')</title>
</head>
<body>
    <header>
        <section class="container">
            <nav>
                <ul class="flex container">
                    <li><a href="/">home</a></li>
                    <li><a href="/ajout">ajout</a></li>
                    <li><a href="/statue">liste</a></li>
                </ul>
            </nav>
            <h1>Une statue peu en cacher une autre</h1>
        </section>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <section>
            <p>statue©2020</p>
        </section>
    </footer>
    
</body>
</html>