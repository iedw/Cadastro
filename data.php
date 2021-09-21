<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Final - Dados</title>
</head>
<body class="bg-dark text-light">
<div class="col-xl-6 col-md-8 mx-auto p-5 text-dark">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    session_start();
                    $i=1;

                    foreach ($_SESSION['resultados'] as $resultado){
                        echo "<tr>
                                <th scope='row'>" . $i . "</th>
                                <td>". $resultado->nome ."</td>
                                <td>". $resultado->telefone ."</td>
                            </tr>";
                        $i++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form>
</body>