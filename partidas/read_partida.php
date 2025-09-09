<?php

include 'db.php';

$sql = "SELECT 
    j.
FROM produtos p
INNER JOIN usuarios u ON p.id_usuario = u.id_usuario;
";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div class="produtos_container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="produtos_box">';
        echo '
        <h1>' . htmlspecialchars($row["nome_produto"]) . '</h1>
        <div class="produtos_flex">
            <div class="secaoBranca">
                <h1>Descrição: ' . htmlspecialchars($row["descricao_produto"]) . '</h1>
                <h1>Quantidade: ' . htmlspecialchars($row["quantidade_produto"]) . '</h1>
                <h1>Validade: ' . htmlspecialchars($row["validade_produto"]) . '</h1>
                <h1>Preço: R$' . number_format($row["preco_produto"], 2, ',', '.') . '</h1>
                <h1>Usuário: ' . htmlspecialchars($row["nome_usuario"]) . '</h1>
                
            </div>
        </div>
        ';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum produto encontrado.";
}

?>