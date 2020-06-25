@extends('layout.admin')

@section('content-title', 'Exclusão de cliente')

@section('content')
    <p class="display-4 text-danger">
        <small>
            Deseja realmente excluir o cliente listado abaixo?
        </small>
    </p>

    <form action="{{ route('beneficiario.destroy', $beneficiarios->id) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>Nome:</b> {{ $beneficiarios->nome_beneficiario }} <br>
            <b>Carteirinha:</b> {{ $beneficiarios->cart_beneficiario }}
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('beneficiario.index') }}" class="btn btn-danger" >Cancelar</a>
    </form>
@endsection