<?php
$agenda = array( "nome" => "José",/*array mais detalhado*/
               "sobrenome" => "Silva",
                "salario"  => 800.99
               
               );

    ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <pre>
        <?php
        print_r($agenda)/*print_r mostra todos os detalhes do array*/
            ?>
        </pre>
        
        <p>
    <?php    //echo $agenda[0];   ?><!--não existe nenhum elemento 0 o 0 é um nome-->
        </p>
        
    </body>
</html>
/**/
<!>
<!---->