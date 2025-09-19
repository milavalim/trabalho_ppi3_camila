@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="color: #d15895;">Criar Receita</h1>

    <form action="{{ route('receitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ingredientes" class="form-label">Ingredientes</label>
            <textarea name="ingredientes" id="ingredientes" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="arquivo" class="form-label">Arquivo (imagem, PDF, etc.)</label>
            <input type="file" name="arquivo" id="arquivo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('receitas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
