<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            // Exibindo uma mensagem de boas-vindas
            echo "<h3>Atividade 4</h3>";
            echo "<h1>Headers de Segurança e Política de Segurança de Conteúdo (CSP)</h1>";
            echo "<br>";
            echo "<h3>Grupo Márcio Luiz e Ana Rebli</h3>";
            echo "<h3>Prof. Jefferson O. Andrade</h3>";

            // Exibindo a data atual
            $dataAtual = date("d/m/Y H:i:s");
            echo "<p>Data e hora atual: $dataAtual</p>";
        ?>
    </div>
</body>
</html>
