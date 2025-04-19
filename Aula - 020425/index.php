<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para o PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php 
                include "menu.php"; 
            ?>
            </div>
            <div class="col-5 border bg-light">
                <h1 class="text-center display-3">Formulário PHP</h1>
                <form action="formulario.php" method="get">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" max="14" name="cpf" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p>Gênero</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="F">
                            <label for="genero" class="form-check-label">Feminino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="M" checked>
                            <label for="genero" class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="O">
                            <label for="genero" class="form-check-label">Outro</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Exames para qual laboratório?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="bioquimica" name="bioq" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Bioquimica
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="hematologia" name="hemato" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Hematologia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="imunologia" name="imuno" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Imunologia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="microbiologia" name="micro" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Microbiologia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="parasitologia" name="parasito" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Parasitologia
                            </label>
                        </div>
                    </div>
                    <div class="text-center m-2">
                        <button type="submit" class="btn btn-success">Salvar via GET</button>
                    </div>
                </form>
            </div>
            <div class="col p-3 mt-2">
                <form action="formulario.php" method="post">
                    <button type="submit" class="btn btn-danger">Solicitar formulario.php via POST
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>