<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando diferentes strings</title>
</head>
<body>
    <?php
        // Aspas simples(single quoted) = Não interpreta
        // Aspas Duplas(Double quoted) = Interpreta


        $nome = 'Lucas';
        $sobrenome = 'Evangelista';

        echo "$nome $sobrenome \u{1F596}\u{1F913}<br>";
        

        // Testando com constantes
        const ESTADO = "RJ";
        echo "Moro no ".ESTADO;

        // Testando com Funções
        echo "<br>Estamos no ano de " .date('Y');

        // Sequência de escape
        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "<br>$nom\"Minotauro\"$snom<br>";

        // Escape sequences
        // \n = Nova Linha
        // \t = Tabulção Horizontal
        // \\ = Barra Invertida
        // \$ = Sinal de cifrão
        // \u{} = Codepoint Unicode

        // Sintaxe Heredoc
        $curso = "PHP";
        $ano = date('Y');

        echo <<< FRASE
            Estou estudando
                $curso em $ano <br>
        FRASE;

        // Strings Nowdoc
        echo <<< 'FRASE'
            Estou estudando
                $curso em $ano
        FRASE;
     ?>
</body>
</html>