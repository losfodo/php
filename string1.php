<?php
$_nome = "Mario";/*variavel*/
    $_sobrenome="Bros";
$_nomecompleto = $_nome . " " . $_sobrenome;
?>    


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p>
        <?php echo $_nome ." ". $_sobrenome ?><!--completa nome com sobrenome,, as aspas duplas para dar espaço-->
        </p>
        
        <p>
        <?php echo $_nomecompleto; ?><!--direto nome completo-->
        </p>
    </body>
</html>
/**/
<!>
<!---->