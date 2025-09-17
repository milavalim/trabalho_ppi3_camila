@extends('layouts.app')

@section('content')
<h1>Receitas</h1>
@foreach ($receitas as $receita)
    <div>
        <h2>{{ $receita->titulo }}</h2>
        <p>{{ $receita->descricao }}</p>
        <img src="{{ asset('storage/'.$receita->arquivo) }}" width="200">
        <a href="{{ route('receitas.show', $receita) }}">Ver mais</a>
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
@endforeach
{{ $receitas->links() }}
@endsection
