@extends('layout.admin')

@section('title', 'Beneficiarios..::')

@section ('content-title','Beneficiarios cadastrados')

@section('content')
        <a href="{{ route('beneficiario.create') }}" class="btn btn-primary"> Novo cliente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>

                @foreach($beneficiarios as $beneficiario)
                <tr>
                    <td>{{ $beneficiario -> id_beneficiario}}</td>
                    <td>{{ $beneficiario -> nome_beneficiario}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection 
