<?php
    $salario = 800;
    $gasolina = 2.79;
    $nome = "rafa";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica,, escrever incluindo numero string
echo "O $salario é um numero?" . is_numeric($salario) . "</br>";
echo "O $gasolina é um numero?" . is_numeric($gasolina) . "</br>";/*is_numeric se sair 1 é numero ou vdd*/
        echo "O $nome é uma string?" . is_numeric($nome) . "</br>";/*se não sair nada é falso*/
            // testar se é inteiro ou não quebrados
echo "O $salario é um inteiro?" . is_int($salario) . "</br>";
echo "O $gasolina é um inteiro?" . is_int($gasolina) . "</br>";

            // testar se é float,, numeros quebrados ou com virgula
        echo "O $salario é um float?" . is_float($salario) . "</br>";
echo "O $gasolina é um float?" . is_float($gasolina) . "</br>";
        
        echo round($gasolina) . "</br>";/*arredonda o numero para o mais proximo do inteiro*/
        echo floor($gasolina) . "</br>";/*arredonda para baixo*/
        echo ceil($gasolina) . "</br>";/*arredonda para cima+*/
        ?>
        
        
    </body>
</html>