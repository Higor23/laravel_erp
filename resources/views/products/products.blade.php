<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Produtos</title>
</head>
<body>
    <div class="container">
    <h4 class="h4">Produtos</h4>
    <button type="button" class="btn btn-success">Novo Produto</button>
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
            <th scope="col">Cód.</th>
            
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Custo</th>
            <th scope="col">Venda</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>
              <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
 
                  <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Detalhes</a>
  
                  <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
 
                  <!--@csrf
                  @method('DELETE')-->
    
                  <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>Thornton</td>
            <td>
              <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
 
                  <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Detalhes</a>
  
                  <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
 
                  <!--@csrf
                  @method('DELETE')-->
    
                  <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>the Bird</td>
            <td>
              <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
 
                  <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Detalhes</a>
  
                  <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
 
                  <!--@csrf
                  @method('DELETE')-->
    
                  <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
</body>
</html>