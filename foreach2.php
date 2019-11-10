<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
       
        $agenda = array(
            "nome" => "josé",
            "sobrenome" => "silva",
            "salario" => 1000
            );
        
        foreach($agenda as $atributo => valor) {/*foreach: criar array conectado outros arrays e incluir*/
            echo $atributo . ": ". $valor . "<br>";
        }
        ?>
    </body>
</html>
/**/
<!>
<!---->