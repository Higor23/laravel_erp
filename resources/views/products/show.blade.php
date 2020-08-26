@extends('template.template_base')

@section('content')

<!-- Cadastro de Produtos -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
    </div>

    <!-- Dados do cliente -->
    <div class="card">

        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $product->name }} </li>
                <li><strong>Quantidade:</strong> {{ $product->number }} </li>
                <li><strong>Preço:</strong> {{ $product->price }} </li>
                <li><strong>Custo:</strong> {{ $product->cost }} </li>
                <li><strong>Unidade de medida:</strong> {{ $product->measure->name }} </li>
                <li><strong>Código de Barras:</strong> {{ $product->codBar }} </li>
                <li><strong>Observações:</strong> {{ $product->note }} </li>
            </ul>
        </div>
    </div>
    @endsection