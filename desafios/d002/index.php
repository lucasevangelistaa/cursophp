<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h2>Trabalhando com Números Aleatórios</h2>
        <?php
            $num = mt_rand(0, 100);
            echo "<p>Gerando um número Aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>"
        ?>
        <button onclick="recarregar()">&#x1F504; Gerar outro número</button>
    </main>
    <script>
        function recarregar() {
            document.location.reload();
        }
    </script>
</body>

</html>