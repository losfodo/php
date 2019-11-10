<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao* e Divisao/
echo "Trimestre vezes: " . $salario * $meses . "</br>";
        echo "Quinzena divisão: " . $salario / 2 . "</br>";
            // Exponencial
echo "Exponencial" . pow(8,2) . "</br>";/*ex 6 ao quadrado ou ao cubo pow(6,3)..*/
            // Raiz Quadrada
echo "Raiz quadrada" . sqrt(36) . "</br>";
            // Randômico Generica
echo "randomico, sorteio: " . rand() . "</br>";
            // Randômico entre um intervalo
echo "randomico de 1 a 10 sorteio numeros inteiros: " . rand(1,10) . "</br>";
            // Valor absoluto
            echo "absoluto" . abs(-10);/*valor inteiro sem ser negativo ex -10 : 10*/
        ?>
    </body>
</html>