@extends('template.template_base')

@section('content')
<div class="form-client">
    <h4 class="h4">Produtos</h4>
    <div class="btn-cad">
    <a href="{{ route('product.create') }}">
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
                <th scope="col">Unidade de Medida</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)

                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->number }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->cost}}</td>
                    <td>{{ $product->measure->name }}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('product.show', [$product->id]) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('product.edit', [$product->id]) }}">Editar</a>
            </td>
</tr>
@endforeach
        </tbody>
       


    </table>
</div>
@endsection
