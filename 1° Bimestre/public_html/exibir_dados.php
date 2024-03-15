<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exibição de Dados</title>
    </head>

    <body>
    <h2>Dados Recebidos</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h3>Método GET</h3>";
        echo "<p>Nome: " . $_GET["nome"] . "</p>";
        echo "<p>Sexo: " . $_GET["sexo"] . "</p>";
        echo "<p>Data de Nascimento: " . $_GET["nascimento"] . "</p>";
        echo "<p>Nacionalidade: " . $_GET["nacionalidade"] . "</p>";
        if (isset($_GET["esportes"])) {
            echo "<p>Esportes Praticados: " . implode(", ", $_GET["esportes"]) . "</p>";
        }
        echo "<p>Observações: " . $_GET["observacoes"] . "</p>";
        } else {
        echo "<p>Nenhum dado recebido.</p>";
        }
    ?>
    </body>
</html>