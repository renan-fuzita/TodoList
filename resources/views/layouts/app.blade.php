<!DOCTYPE html>
<html lang="jp">
    <head>
        <title>TodoList</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
    </head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

<footer id="footer" class="footer text-center">
    <p>copyrigth &copy; 2019 TodoList</p>
</footer>
</body>
</html>