<!DOCTYPE html5>
<html>
<head>
    <title>Receitas PPI3</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    .navbar{
        background-color: #ff9ccd;
    }
</style>
<body class="bg-gray-100">
<nav class="navbar navbar-expand-lg mb-4 p-3 justify-content-center">
    <a class="nav-link text-light me-4" href="{{ route('receitas.index') }}">Home</a>
    @auth
        <a class="nav-link text-light me-4" href="{{ route('receitas.create') }}">Nova Receita</a>
        <form action="/logout" method="POST">@csrf<button type="submit">Sair</button></form>
    @else
        <a class="nav-link text-light me-4" href="/login">Entrar</a>
        <a class="nav-link text-light me-4" href="/register">Cadastrar</a>
    @endauth
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
