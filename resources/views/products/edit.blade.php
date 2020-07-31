@extends('template.template_base')

@section('content')

<!-- Cadastro de Produtos -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao" placeholder="Descrição do Produto" value="{{ $product->descricao }}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-1">
                <label>Qtd.</label>
                <input type=" text" class="form-control" name="quantidade" placeholder="Qtd." value="{{ $product->quantidade }}">
            </div>
            <div class="form-group col-md-2">
                <label>Preço</label>
                <input type=" text" class="form-control" name="preco" placeholder="0,00" value="{{ $product->preco }}">
            </div>
            <div class="form-group col-md-2">
                <label>Custo</label>
                <input type=" text" class="form-control" name="custo" placeholder="0,00" value="{{ $product->custo }}">
            </div>

            <div class="form-group col-md-2"">
                <label for=" inputState">Unidade de medida</label>

                <select id="inputState" class="form-control" name="unidadeMedida_id">
                    <option selected>Selecione</option>
                    @foreach ($unidadeMedidas as $unidade)
                    <option selected value="{{ $unidade->id }}">{{ $unidade->unidadeMedida }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group col-md-3">
                <label>Código de Barras</label>
                <input type=" text" class="form-control" name="codBarras" placeholder="código de barras" value="{{ $product->codBarras }}">
            </div>

        </div>
        <div class="form-group">
            <label for="observacoes">Observações</label>
            <input type="text" class="form-control" name="obs" placeholder="Observações" value="{{ $product->observacoes }}">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
</div>

@endsection
