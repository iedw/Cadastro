<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Cadastro</title>
</head>
<body class="bg-dark text-light">
    <div class="col-xl-4 col-md-6 mx-auto p-5 text-dark">
        <div class="card">
            <div class="card-body">
                <h2>Cadastro</h2>
                <form name="cadastro" method="POST" action="cadastro.php">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="form-control">
                        <label for="telefone">Telefone: </label>
                        <input type="text" name="telefone" id="telefone" class="form-control">
                        <br>
                    </div>
                    <div class="col d-grid gap-2">
                        <input type="submit" class="btn btn-dark btn-block" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
</body>