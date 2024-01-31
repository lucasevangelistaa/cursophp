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
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $num = $_GET["num"] ?? 0;
            
                $antecessor = $num - 1;
                $sucessor = $num + 1;
            
                echo "O Número escolhido foi $num";
                echo "<br>O seu Antecessor é $antecessor";
                echo "<br>O seu Sucessor é $sucessor";    
            ?>
        </p>
        <button id="voltar" onclick="voltar()">&#x2B05;Voltar</button>
    </main>
    <script>
        function voltar() {
            window.location.href='index.html';
        }
    </script>
</body>
</html>