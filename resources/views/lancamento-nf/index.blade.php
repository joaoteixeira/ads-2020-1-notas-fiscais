@extends('layout.admin')

@section('title', 'Notas fiscais..::')

@section ('content-title','Notas fiscais')

@section('content')
        <a href="{{ route('lancamento-nf.create')}}" class="btn btn-primary"> Nova nota fiscal</a>

@endsection        