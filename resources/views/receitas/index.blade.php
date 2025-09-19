@extends('layouts.app')

<div class="container">
    @section('content')
    <h1>Receitas</h1>
    @foreach ($receitas as $receita)
    <div class="card">
        <header class="card-header">
            <h2>{{ $receita->titulo }}</h2>
        </header>
        <div class="card-body">
            <p>{{ $receita->descricao }}</p> 
            <img src="{{ asset('storage/'.$receita->arquivo) }}" width="200">
            <a href="{{ route('receitas.show', $receita) }}">Ver mais</a>
        </div>
        @can('update', $receita)
            <a href="{{ route('receitas.edit', $receita) }}">Editar</a>
        @endcan
        @can('delete', $receita)
            <form action="{{ route('receitas.destroy', $receita) }}" method="POST">
                @csrf @method('DELETE')
                <button>Excluir</button>
            </form>
        @endcan
    </div>
</div>
@endforeach
{{ $receitas->links() }}
@endsection
