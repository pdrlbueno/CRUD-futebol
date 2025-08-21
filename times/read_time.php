<?php

include 'db.php';

$sql = "SELECT * FROM times";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div class="produtos_container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="produtos_box">';
        echo '
        <h1>' . htmlspecialchars($row["nome_produto"]) . '</h1>
        <div class="produtos_flex">
            <div class="secaoBranca">
                <h1>Descrição: ' . htmlspecialchars($row["nome"]) . '</h1>
                <h1>Quantidade: ' . htmlspecialchars($row["cidade"]) . '</h1>
                
            </div>
        </div>
        ';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum time encontrado";
}

?>
