@extends('template.template_base')

@section('content')

<!-- Cadastro de clientes -->


<div class="form-client">
    <h4 class="h4">Cadastro</h4>
    <div class="btn-cad">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
    </div>
    <!-- Validação de erros conforme o model -->
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Por Favor, </strong>Preencha os dados corretamente.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <!-- Formulário de cadastro de clientes -->
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao" placeholder="Descrição do Produto">
        </div>

        <div class="form-row">
            <div class="col">
                <label>Qtd.</label>
                <input type="text" class="form-control" name="quantidade" placeholder="Qtd.">
            </div>
            <div class="col">
                <label>Preço</label>
                <input type="text" class="form-control" name="preco" placeholder="0,00">
            </div>
            <div class="col">
                <label>Custo</label>
                <input type="text" class="form-control" name="custo" placeholder="0,00">
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Unidade de medida</label>

                <select id="inputState" class="form-control">
                    <option selected>Selecione</option>
                    @foreach ($unidadeMedidas as $unidade)
                    <option selected name="unidadeMedida">{{ $unidade->unidadeMedida }}</option>
                </select>
                @endforeach
            </div>
            <div class="col">
                <label>Código de barras</label>
                <input type="text" class="form-control" name="codBarras" placeholder="Somente Números">
            </div>
        </div>
        <div class="form-group">
            <label>Observações</label>
            <input type="text" class="form-control" name="obs" placeholder="Observações">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>

</div>

</form>
</div>
@endsection
