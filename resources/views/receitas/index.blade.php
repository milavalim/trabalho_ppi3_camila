@extends('layouts.app')

<div class="container">
    @section('content')
    <h1>Receitas</h1>
    <div class="row">
        @foreach ($receitas as $receita)
        <div class="col-md-4 mb-3">
            <div class="card h-100 mt-4">
                <header class="card-header">
                    <h2 style="color: #d15895;">{{ $receita->titulo }}</h2>
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
    </div>
</div>
{{ $receitas->links() }}
@endsection
