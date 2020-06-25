@extends('layout.admin')

@section('content-title', 'Exclusão de fornecedor')

@section('content')
    <p class="display-4 text-danger">
        <small>
            Deseja realmente excluir o fornecedor listado abaixo? Essa ação não pode ser desfeita.
        </small>
    </p>

    <form action="{{ route('fornecedor.destroy', $fornecedores->id) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>Nome:</b> {{ $fornecedores->fornecedor }} <br>
            <b>cnpj:</b> {{ $fornecedores->cnpj }}
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('fornecedor.index') }}" class="btn btn-danger" >Cancelar</a>
    </form>
@endsection