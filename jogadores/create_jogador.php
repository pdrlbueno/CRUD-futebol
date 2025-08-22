<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $posicao = $_POST['posicao'];
    $numero_camisa = $_POST['numero_camisa'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $idade = $_POST['idade'];
    $time_id = $_POST['time_id'];

    $sql = " INSERT INTO jogadores (nome,posicao, numero_camisa,peso, altura, idade, time_id) VALUE ('$nome','$posicao', '$numero_camisa', '$peso', '$altura', '$idade', '$time_id')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create jogador</title>
</head>

<body>

    <form method="POST" action="create_jogador.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="posicao">Posição:</label>
        <input type="text" name="posicao" required>

        <label for="numero_camisa">Número da camisa:</label>
        <input type="text" name="numero_camisa" required>
        
        <label for="peso">Peso:</label>
        <input type="text" name="peso" required>

        <label for="altura">Altura:</label>
        <input type="text" name="altura" required>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" required>

        <label for="time_id">Id do time:</label>
        <input type="text" name="time_id" required>


        <input type="submit" value="Adicionar">

    </form>

    <a href="read_jogador.php">Ver jogadores.</a>

</body>

</html>