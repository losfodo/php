<?php
$salada = array("maçã0", "Abacate", "Laranja");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php    
        echo $salada[0] . "</br>";/*primeira fruta*/
        echo $salada[1] . "</br>";/*segunda fruta*/
         echo count($salada) . "</br>";/*quantas salada tem=3*/
        $salada[]="kiwi" . "</br>";/*adicionou um novo elemento a salada,, sem posição e não add na tela pois nao uso echo*/
        echo count($salada) . "</br>";/*agora possui 4 mais o kiwi*/
        //echo $salada;//da erro pois não consegue converter em string
        ?>
        
        <pre><!--pre é tipo um pré visualizador-->
    <?php
print_r($salada);/*mostras todas as frutas de salada,,kiwi fica por ultimo*/

?>
        </pre>
    
    </body>
</html>