<?php
$nome = null;/*nulo,, se atribuir um valor deixa de ser nulo*/
$endereco = "";/*não é nulo, mas é vazio*/
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
        echo "A variavel é vazio ou empty?" . empty($nome) . "</br>";/*aparece 1 de verdadeiro é vazio*/
        echo "A variavel é vazio?" . empty($nome);/*este tbm vdd pois esta vazio 1*/
        
        ?>
    </body>
</html>
/**/
<!>
<!---->