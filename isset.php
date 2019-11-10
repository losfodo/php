<?php
$nome = null;/*nulo,, se atribuir um valor deixa de ser nulo*/
$endereco = "Brasil";/*não é nulo*/
$telefone = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
        echo "A variavel esta configurada?" . isset($telefone) . "</br>";/*é configurada aparece 1*/
        echo "A variavel esta configurada?" . isset($cep) . "</br>";/*não aparece o 1 nao config*/
        echo "A variavel esta configurada?" . isset($nome) . "</br>";/*null nao configurada*/
        ?>
    </body>
</html>
/**/
<!>
<!---->