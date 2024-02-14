<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <h1>Somador de Valores</h1>
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $somar = $valor1 + $valor2;
            echo "<p>A soma entre os valores $valor1 e $valor2 é igual a $somar.</p>";
        ?>
    </section>
</body>
</html>