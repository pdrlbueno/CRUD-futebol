<?php

include '../db.php';

$sql = "SELECT 
    j.id,
    j.nomeJ,
    j.posicao,
    j.numero_camisa,
    j.peso,
    j.altura,
    j.idade,
    j.time_id,
    t.nome

FROM jogadores as j
INNER JOIN times as t ON j.time_id = t.id;
";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div>';
    while($row = $result->fetch_assoc()) {
        echo '
        <div>
            <div>
                <h1>Nome: ' . htmlspecialchars($row["nomeJ"]) . '</h1>
                <h1>Posição: ' . htmlspecialchars($row["posicao"]) . '</h1>
                <h1>Número Da Camisa: ' . htmlspecialchars($row["numero_camisa"]) . '</h1>
                <h1>Peso:' . number_format($row["peso"]) . '</h1>
                <h1>Altura: ' . htmlspecialchars($row["altura"]) . '</h1>
                <h1>Idade: ' . htmlspecialchars($row["idade"]) . '</h1>
                <h1>Time: ' . htmlspecialchars($row["time_id"]) . '</h1>
            </div>
        </div>
        ';
    }
    echo '</div>';
} else {
    echo "Nenhum produto encontrado.";
}

?>