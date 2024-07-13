<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .nota {
            margin: 5px;
            height: 50px;
        }
        ul {
            list-style: none;
        }
        li {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$ 100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;

        // Saque de R$ 100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        // Saque de R$ 50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // Saque de R$ 10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // Saque de R$ 5
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>
    <section>
        <h2>Saque de R$ <?=$saque?> realizado</h2>
        <p>O Caixa Eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>