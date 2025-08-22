<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];

    $sql = " INSERT INTO times (nome, cidade) VALUE ('$nome', '$cidade')";

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
    <title>Cadastro de times</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="containerTimes">

        <form method="POST" action="create_time.php">
            <div class="flex">

                <div class="boxTimes">
                    <label for="nome">Nome:</label><br>
                    <input type="text" name="nome" required>
                </div>
        
                <div class="boxTimes">
                    <label for="cidade">Cidade:</label><br>
                    <input type="text" name="cidade" required>
                </div>
            </div>
    
            <input type="submit" value="Adicionar" class="button">
    
        </form>
    
        <a href="read_times.php">Ver times</a>
    </div>

</body>

</html>