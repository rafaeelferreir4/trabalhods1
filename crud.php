<?php
$conexao = mysqli_connect("localhost","root","","rafael") or print (mysqli_error());

$query = "SELECT * FROM medicamento WHERE nome LIKE '%".$_GET['pesquisa']."%'";

$resultado = mysqli_query($conexao,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-dark bg-dark">
        <form class="form-inline mx-auto" action="crud.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search"
                name="pesquisa">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            Cadastrar
        </button>
    </nav>
    <table class="table table-striped table-secondary">
        <section>
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Controlado</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>

                <?php
            while($linha = mysqli_fetch_array($resultado)){ ?>
                <tr>
                    <td><?php $linha['cod']?></td>
                    <td><?php $linha['nome']?></td>
                    <td><?php $linha['fabricante']?></td>
                    <td><?php $linha['quantidade']?></td>
                    <td><?php $linha['preco']?></td>
                    <td><?php $linha['controlado']?></td>
                    <td><button class="btn btn-warning">Alterar</button></td>
                    <td><a href="exclui.php?cod=<?php $linha["cod"] ?>" class="btn btn-danger">Excluir</a></td>
                </tr>

                <!-- TODO // INCLUIR O MODAL AQUIII -->

                <?php }

            mysqli_close($conexao);

        ?>
            </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar medicamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="cadastra.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nome do Medicamento</label>
                            <input name="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nome do fabricante</label>
                            <input name="fabricante" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantidade</label>
                            <input name="quantidade" class="form-control" type="number">
                        </div>
                        <div class="form-group">
                            <label>Preço</label>
                            <input name="preco" class="form-control" type="number">
                        </div>
                        <div class="form-group">
                            <label>Controlado:</label>
                            <select class="form-control" name="controlado">
                                <option>Não</option>
                                <option>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>