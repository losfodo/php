<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        
        <?php
        $salada = array("imagens/Laranja.jpg","imagens/Maca.jpg","imagens/Abacate.jpg");/*aparece o nome de cada */
        $fruta = $_GET["codigo"];/*codigo para chegar no destino de cada*/
       // echo $salada[$fruta];
        
        ?>
        <img src="<?php echo $salada[$fruta]; ?>"><!--mostra as imagens com php dinamicamente-->
    </body>
</html>