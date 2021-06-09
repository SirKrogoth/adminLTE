@extends('layouts.app')

@section('titulo')
    Detalhes do {{ $empresa->tipo }} - {{ $empresa->nome }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('empresas.index') }}?tipo={{ $empresa->tipo }}">Listagem de {{ $empresa->tipo }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('empresas.show', $empresa) }}?tipo={{ $empresa->tipo }}">Detalhes</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> {{ $empresa->nome }}
                                </h4>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Razão Social</strong>: {{ $empresa->razao_social }} <br>
                                <strong>CNPJ/CPF</strong>:
                                    @if (strlen($empresa->documento) === 11)
                                        {{ mask($empresa->documento, "###.###.###-##") }}
                                    @else
                                        {{ mask($empresa->documento, "###.###.###/####-##") }}
                                    @endif
                                <br>
                                <strong>IE/RG</strong>: {{ $empresa->ie_rg }} <br>
                                <strong>Observações</strong>: {{ $empresa->observacao }} <br>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                    {{ $empresa->logradouro }}, {{ $empresa->bairro }} <br>
                                    {{ $empresa->cidade }} - {{ $empresa->estado }} - {{ mask($empresa->cep, "#####-###") }} <br>
                                    Nome Contato: {{ $empresa->nome_contato }} <br>
                                    Celular: {{ mask($empresa->celular, "(##) # ####-####") }} <br>
                                    Email: {{ $empresa->email }} <br>
                                    Telefone: {{ mask($empresa->telefone, "(##) ####-####") }}
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('empresas.destroy', $empresa) }}?tipo={{ $empresa->tipo }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger"
                         onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
