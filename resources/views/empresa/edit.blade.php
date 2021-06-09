@extends('layouts.app')

@section('titulo')
    Atualizar {{ $empresa->nome }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('empresas.edit', $empresa) }}">Editar</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Atualização de {{ $empresa->nome }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('empresas.update', $empresa) }}" method="POST">
                        @method('PUT')

                        @include('empresa.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
