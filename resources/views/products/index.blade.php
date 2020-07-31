@extends('template.template_base')

@section('content')
<div class="form-client">
    <h4 class="h4">Produtos</h4>
    <div class="btn-cad">
        <a href="{{ route('products.create') }}">
            <button type=" button" class="btn btn-success">Novo Produto</button>
        </a>

        <button type="button" class="btn btn-secondary">Imprimir</button>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <p></p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Descrição</th>
                <th scope="col">Qtd.</th>
                <th scope="col">Preço</th>
                <th scope="col">Custo</th>
                <th scope="col">Und. Medida</th>
                <th scope="col"></th>

            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
            <a href="{{ route('products.edit',$product->id) }}">
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->descricao }}</td>
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->preco }}</td>
                    <td>{{ $product->custo}}</td>
                    <!-- <td value="{{ $product->unidadeMedida_id }}">{{ $unidadesMedidas->unidadeMedida }}</td> -->

            </a>
            <td>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Detalhes</a>
            </td>
</tr>

        </tbody>
        @endforeach


    </table>
</div>
@endsection
