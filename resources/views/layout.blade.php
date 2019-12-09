<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')</title>
</head>
<body>
    <div class="links">
        <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com">GitHub</a>
        <a href="/">Laravel</a>
        <a href="/main">Main</a>
        <a href="/contact">Contact</a>
        <a href="/about">about</a> 
        <a href="/projects">Projects</a>
    </div>

    @yield('content')
    

</body>
</html>