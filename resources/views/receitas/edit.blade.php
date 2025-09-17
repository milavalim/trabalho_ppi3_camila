@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Receita</h1>

    <form action="{{ route('receitas.update', $receita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $receita->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="ingredientes" class="form-label">Ingredientes</label>
            <textarea name="ingredientes" id="ingredientes" class="form-control" required>{{ $receita->ingredientes }}</textarea>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $receita->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label for="arquivo" class="form-label">Arquivo (opcional)</label>
            <input type="file" name="arquivo" id="arquivo" class="form-control">
            @if($receita->arquivo)
                <p class="mt-2">Arquivo atual: {{ $receita->arquivo }}</p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('receitas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
