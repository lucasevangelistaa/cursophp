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
        <h1>Conversor de Moedas</h1>
        <?php 
            $dolar = 4.91;
            $real = $_GET["valor"] ?? 0;
            $conversao = $real / $dolar;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL"). " equivalem a ". numfmt_format_currency($padrao, $conversao, "USD"). "</p>";
        ?>
        <button onclick="voltar()">&#x2B05;Voltar</button>
    </main>
    <script>
        function voltar() {
            window.location.href='index.html';
        }
    </script>
</body>
</html>