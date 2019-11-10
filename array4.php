<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
        $salada = array("Macã", "Abacate","Laranja");
        
        echo "Existe o Elemento(saber se tem pera no array salada)? " . in_array("Pera",$salada);/*se não aparece nada é pq é falso*/
        echo "Existe o Elemento(saber se tem pera no array salada)? " . in_array("Laranja",$salada);/*se tem aparece 1 = q sig true vdd*/
        
        echo "qual a posição? " . array_searchy("Laranja",$salada);/*mostra a posição do elemento no array*/
        
        ?>
        
    </body>
</html>
/**/
<!>
<!---->