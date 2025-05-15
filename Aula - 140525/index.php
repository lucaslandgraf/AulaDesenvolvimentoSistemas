<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Cadastro de Fabricante</title>
</head>
<body>
    <div class="container">
        <div class="row"> <!-- Linha de cabeçalho da página -->
            <div class="col">
                <h1 class="display-3">Cadastro de Fabricante</h1>
            </div>
        </div>
        <!-- Linha do formulário -->
        <div class="row">
            <form action="controller/FabricanteController.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="mb-3">
                    <label for="documento" class="form-label">Documento</label>
                    <input type="text" class="form-control" name="documento">
                </div>
                <input type="submit" name="cadastrar" value="Salvar" class="btn btn-primary">
            </form>
        </div>
        <div class="row">
            <div class="col mx-4 mt-4"></div>
                <form action="controller/FabricanteController.php" method="get">
                    <input type="submit" name="listar" value="Ver Fabricantes cadastrados" class="btn btn-primary">
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th> <th>Nome</th> <th>Endereço</th> <th>Documento</th> <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>X</td><td>o nome</td><td>o endereço</td><td>doc</td><td>botões</td>
                        </tr>
                        <!-- chamar select * from-->
                    </tbody>
                </table>
                
        </div>
    </div>
</body>
</html>