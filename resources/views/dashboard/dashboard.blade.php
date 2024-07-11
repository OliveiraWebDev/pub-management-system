@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Resumo Financeiro
                    </div>
                    <div class="card-body">
                        <p>Total de Vendas: R$ 10,000</p>
                        <p>Lucro Líquido: R$ 5,000</p>
                        <p>Despesas: R$ 3,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Estoque
                    </div>
                    <div class="card-body">
                        <p>Itens em Estoque: 200</p>
                        <p>Alertas de Estoque Baixo: 5 produtos</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Clientes
                    </div>
                    <div class="card-body">
                        <p>Novos Clientes: 15</p>
                        <p>Fidelidade de Clientes: Alta</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Vendas e Pedidos
                    </div>
                    <div class="card-body">
                        <p>Pedidos em Aberto: 10</p>
                        <p>Melhores Vendedores: Cerveja Artesanal X, Y, Z</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
