<!DOCTYPE html>
<html>
<head>
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        <div style="margin: 20px;"></div>
        @include('includes.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2018 TodoList Developed by Orten </p>
    </footer>
</body>
</html>