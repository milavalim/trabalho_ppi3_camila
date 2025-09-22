@extends('layouts.app')

@section('content')
<div class="container mb-5">
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
                    <a href="{{ route('receitas.show', $receita) }}" class="btn btn-outline-dark mt-2">Detalhes</a>
                </div>
                {{-- @can('update', $receita)
                    <a href="{{ route('receitas.edit', $receita) }}" class="btn btn-outline-secondary mt-2">Editar</a>
                @endcan --}}
                {{-- @can('delete', $receita)
                    <form action="{{ route('receitas.destroy', $receita) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="btn btn-outline-danger mt-2">Excluir</button>
                    </form>
                @endcan --}}
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $receitas->links() }} 
        {{-- esse código de cima é o recurso de paginação --}}
    </div>
</div>
@endsection
