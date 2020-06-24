@extends('layout.admin')

@section('title', 'Beneficiarios..::')

@section ('content-title','Beneficiarios cadastrados')

@section('content')
        <a href="{{ route('beneficiario.create') }}" class="btn btn-primary"> Novo cliente</a>

        @if (session('status'))
            <div class="alert alert-sucess">
                {{session('status')}}
            </div>    
        @endif

        @if (session('statusUpdate'))
            <div class="alert alert-info">
                {{session('statusUpdate')}}
            </div>    
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Carteirinha</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>

                @foreach($beneficiarios as $beneficiario)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $beneficiario -> nome_beneficiario}}</td>
                    <td>{{ $beneficiario -> cart_beneficiario}}</td>
                    <td><a href="/beneficiario/{{ $beneficiario->id}}/edit">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection 
