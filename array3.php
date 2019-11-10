<?php
$lost = array(23,15,16,8,42,4 );

    ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
            
    <?php    
        echo max($lost) . "</br>";  /*mostra o maior numero q o array tem*/
        echo min($lost) . "</br>"; /*menor numero do array*/
        echo array_sum($lost) . "</br>";/*soma total dos numeros*/
        
        sort($lost) . "</br>";/*mostra em ordem crescente os numeros*/
        rsort($lost) . "</br>";/*descrecente*/
        shuffle($lost) . "</br>";/*aleatorio*/
        ?>
        
        
    </body>
</html>
/**/
<!>
<!---->