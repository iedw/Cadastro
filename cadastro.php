<?php

    session_start();

    $cadastro = [
      'nome' => $_POST['nome'],
      'telefone' => $_POST['telefone']
    ];

    $conn = new PDO('mysql:host=localhost;port=33066;dbname=final', 'root', '');
    $sql = "INSERT INTO CADASTRO VALUES (:nome, :telefone)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue('nome', $cadastro['nome'], PDO::PARAM_STR);
    $stmt->bindValue('telefone', $cadastro['telefone'], PDO::PARAM_STR);
    $stmt->execute();

    $sql = 'SELECT * FROM CADASTRO';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $_SESSION['resultados'] = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo "<a href='data.php'>Exibir dados</a>";