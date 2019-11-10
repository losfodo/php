<?php
$nome = null;/*nulo,, se atribuir um valor deixa de ser nulo*/
$endereco = "";/*não é nulo*/
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
        echo "A variavel é null?" . is_null($nome) . "</br>";/*aparece 1 de verdadeiro é nulo*/
        echo "A variavel é null?" . is_null($nome);/*nao nulo*/
        
        ?>
    </body>
</html>
/**/
<!>
<!---->