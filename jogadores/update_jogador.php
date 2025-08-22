<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $posicao = $_POST['posicao'];
    $numero_camisa = $_POST['numero_camisa'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $idade = $_POST['idade'];
    $time_id = $_POST['time_id'];
    

    $sql = "UPDATE jogadores SET nome ='$nome',posicao ='$posicao', numero_camisa = '$numero_camisa', peso = '$peso', altura = '$altura', idade = '$idade', time_id = '$time_id' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM jogadores WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $row['nome'];?>" required>

        <label for="posicao">Posição:</label>
        <input type="text" name="posicao" value="<?php echo $row['posicao'];?>" required>
        
        <label for="numero_camisa">Número da camisa:</label>
        <input type="text" name="numero_camisa" value="<?php echo $row['numero_camisa'];?>" required>
        
        <label for="peso">Peso:</label>
        <input type="text" name="peso" value="<?php echo $row['peso'];?>" required>
        
        <label for="altura">Altura:</label>
        <input type="text" name="altura" value="<?php echo $row['altura'];?>" required>
        
        <label for="idade">Idade:</label>
        <input type="text" name="idade" value="<?php echo $row['idade'];?>" required>

        <label for="time_id">Id do time:</label>
        <input type="text" name="time_id" value="<?php echo $row['time_id'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read_jogador.php">Ver registros.</a>

</body>

</html>