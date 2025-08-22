<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $posicao = $_POST['posicao'];
    $numero_camisa = $_POST['numero_camisa'];
    $time_id = $_POST['time_id'];

    $sql = " INSERT INTO jogadores (nome,posicao, numero_camisa, time_id) VALUE ('$nome','$posicao', '$numero_camisa','$time_id')";

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
    <title>Create</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="posicao">Posição:</label>
        <input type="text" name="posicao" required>

        <label for="numero_camisa">Número da camisa:</label>
        <input type="text" name="numero_camisa" required>

        <label for="time_id">Id do time:</label>
        <input type="text" name="time_id" required>


        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>