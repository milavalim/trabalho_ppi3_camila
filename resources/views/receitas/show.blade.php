@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $receita->titulo }}</h1>

    <p><strong>Ingredientes:</strong></p>
    <p>{{ $receita->ingredientes }}</p>

    <p><strong>Descrição:</strong></p>
    <p>{{ $receita->descricao }}</p>

    @if($receita->arquivo)
        <p><strong>Arquivo:</strong></p>
        <a href="{{ asset('storage/' . $receita->arquivo) }}" target="_blank">
            Ver arquivo
        </a>
    @endif

    <div class="mt-3">
        <a href="{{ route('receitas.edit', $receita->id) }}" class="btn btn-warning">Editar</a>

        <form action="{{ route('receitas.destroy', $receita->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
        </form>

        <a href="{{ route('receitas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection
