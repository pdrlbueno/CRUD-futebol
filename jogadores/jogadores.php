<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Futebol</title>
</head>

<body>
    <header>
        <h1>Futebol</h1>
        <div></div>
        <div>
            <button class="navButton">Jogadores</button>
            <button class="navButton">Times</button>
            <button class="navButton">Partidas</button>
        </div>
    </header>
    <main>
        <form method="POST" action="create_jogador.php">
            <div class="inputInfo">
                <label for="nomeJ">Nome:</label>
                <input type="text" name="nomeJ" required>
            </div>

            <div class="inputInfo">
                <label for="nome">Posição:</label>
                <input type="text" name="posicao" required>
            </div>

            <div class="inputInfo">
                <label for="nome">Número da Camisa:</label>
                <input type="text" name="numero_camisa" required>
            </div>

            <div class="inputInfo">
                <label for="nome">Peso:</label>
                <input type="text" name="peso" required>
            </div>

            <div class="inputInfo">
                <label for="nome">Altura:</label>
                <input type="text" name="altura" required>
            </div>

            <div class="inputInfo">
                <label for="nome">Idade:</label>
                <input type="text" name="idade" required>
            </div>

            <div class="inputInfo">
                <label for="nome">Número do Time:</label>
                <input type="text" name="time_id" required>
            </div>

            <input type="submit" value="Adicionar">
        </form>
    </main>
</body>

</html>