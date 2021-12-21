@extends('layouts.app')

@section('content')
    <x-layout.body.main title="Lista de kits" url-button="">
        @foreach ($kits as $kit)
            <div class="border-bottom py-3 text-sm">
                <div class="row">
                    <div class="col">
                        <h4>{{ $kit->modelo }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Potência: {{ $kit->potencia }} kWp
                    </div>
                    <div class="col-md-4">
                        Status: {{ get_status($kit->status) }}
                    </div>
                    <div class="col-md-4">
                        Status Fornecedor: {{ get_status($kit->status_fornecedor) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Id: #{{ $kit->id }}
                    </div>
                    <div class="col">
                        Estrutura: {{ get_estrutura($kit->estrutura) }}
                    </div>
                    <div class="col">
                        Tensão: {{ $kit->tensao }} V
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Preço Cliente: R$ {{ number_format($kit->preco_cliente, 2, ',', '.') }}
                    </div>
                    <div class="col-md-4">
                        Preço Fornecedor R$ {{ number_format($kit->preco_fornecedor, 2, ',', '.') }}
                    </div>
                    <div class="col-md-4">
                        Margem de Venda: {{ $kit->margem }}%
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col small">
                        Atualizado em: {{ date('d/m/y H:i', strtotime($kit->updated_at)) }}
                    </div>
                    <div class="col text-right">
                        <a href="/">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </x-layout.body.main>
@endsection
