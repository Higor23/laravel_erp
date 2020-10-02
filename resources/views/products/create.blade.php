@extends('template.template_base')

@section('content')

<!-- Cadastro de Produtos -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
    </div>

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="name" placeholder="Descrição do Produto">
        </div>

        <div class="form-row">
            <div class="form-group col-md-1">
                <label>Qtd.</label>
                <input type=" text" class="form-control" name="number" placeholder="Qtd.">
            </div>
            <div class="form-group col-md-2">
                <label>Preço</label>
                <input type=" text" class="form-control" name="price" placeholder="0,00">
            </div>
            <div class="form-group col-md-2">
                <label>Custo</label>
                <input type=" text" class="form-control" name="cost" placeholder="0,00">
            </div>

            <div class="form-group col-md-2"">
                <label for="inputState">Unidade de medida</label>

                <select id="inputState" class="form-control" name="measure_id">
                <option selected>Selecione</option>
                    @foreach ($measures as $measure)
                    <option value="{{ $measure->id }}">{{ $measure->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group col-md-3">
                <label>Código de Barras</label>
                <input type=" text" class="form-control" name="codBar" placeholder="código de barras">
            </div>

        </div>
            <div class="form-group">
                <label for="observacoes">Observações</label>
                <input type="text" class="form-control" name="obs" placeholder="Observações">
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
</div>
@endsection
