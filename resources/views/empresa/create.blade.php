@extends('layouts.app')

@section('titulo')
    Novo {{ $tipo }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('empresas.index') }}?tipo={{ $tipo }}">Listagem de {{ $tipo }}</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informe aqui os dados do novo {{ $tipo }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('empresas.store') }}" method="POST">

                        @include('empresa.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
