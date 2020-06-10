@extends('clients.layout')

@section('content')
<div>
    <h4 class="h4">Clientes</h4>
    <a href="{{ route('clients.create') }}">
        <button type=" button" class="btn btn-success">Novo Cliente</button>
    </a>
    <button type="button" class="btn btn-secondary">Imprimir</button>
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
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->Nome }}</td>
                <td>{{ $client->Telefone_01 }}</td>
                <td>{{ $client->Email }}</td>
                <td>{{ $client->CPF }}</td>
                <td>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('clients.show',$client->id) }}">Visualizar</a>

                        <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>

        </tbody>
        @endforeach


    </table>
</div>
{!! $clients->links() !!}
@endsection
