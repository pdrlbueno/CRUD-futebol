<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $time_casa_id = $_POST['time_casa_id'];
    $time_fora_id = $_POST['time_fora_id'];
    $data_jogo = $_POST['data_jogo'];
    $gols_casa = $_POST['gols_casa'];
    $gols_fora = $_POST['gols_fora'];
    $publico = $_POST['publico'];
    $renda = $_POST['renda'];
    $estadio = $_POST['estadio'];


    $sql = " INSERT INTO partidas (time_casa_id, time_fora_id, data_jogo, gols_casa, gols_fora, publico, renda, estadio) VALUE ('$time_casa_id', '$time_fora_id', '$data_jogo', '$gols_casa', '$gols_fora', '$publico', '$renda', '$estadio')";

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
    <title>Cadastro de Produtos</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="time_casa_id">Id do time da casa:</label>
        <input type="text" name="time_casa_id" required>

        <label for="time_fora_id">Id do time da fora:</label>
        <input type="text" name="time_fora_id" required>

        <label for="data_jogo">Data do jogo:</label>
        <input type="data" name="data_jogo" required>

        <label for="gols_casa">Gols da casa:</label>
        <input type="number" name="gols_casa" required>

        <label for="gols_fora">Gols de fora:</label>
        <input type="number" name="gols_fora" required>

        <label for="publico">Publico:</label>
        <input type="number" name="publico" required>

        <label for="renda">Renda:</label>
        <input type="number" name="renda" required>

        <label for="estadio">Estádio:</label>
        <input type="text" name="estadio" required>


        <input type="submit" value="Adicionar">

    </form>

    <a href="read_partida.php">Ver registros.</a>

</body>

</html>