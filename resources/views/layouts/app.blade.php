<!DOCTYPE html>
<html>
<head>
    <title>Meu Site</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<nav>
    <a href="{{ route('receitas.index') }}">Home</a>
    @auth
        <a href="{{ route('receitas.create') }}">Nova Receita</a>
        <form action="/logout" method="POST">@csrf<button type="submit">Sair</button></form>
    @else
        <a href="/login">Entrar</a>
        <a href="/register">Cadastrar</a>
    @endauth
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
