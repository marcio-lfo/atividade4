<?php
// Definindo headers de segurança

// Content Security Policy (CSP)
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline';");

// X-Content-Type-Options
header("X-Content-Type-Options: nosniff");

// X-Frame-Options
header("X-Frame-Options: DENY");

// X-XSS-Protection
header("X-XSS-Protection: 1; mode=block");

// Strict-Transport-Security
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

// Referrer-Policy
header("Referrer-Policy: no-referrer-when-downgrade");

// Permissions-Policy
header("Permissions-Policy: geolocation=(self), microphone=()");

?>

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
            echo "<h3>Atividade</h3>";
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

