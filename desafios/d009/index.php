<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor1 = $_GET['v1'] ?? '';
        $peso1 = $_GET['p1'] ?? '';
        $valor2 = $_GET['v2'] ?? '';
        $peso2 = $_GET['p2'] ?? '';
    ?>
    <main>
        <h1>Médiaa Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>" >
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analizando os Valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$ma?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$mp?>.</li>
        </ul>
    </section>
</body>

</html>