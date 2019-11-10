<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
      
        $salario = 800;
        $premio = "800";
        
        if ($salario === $premio) {/*salario é igual'==' a premio mais não é identico'===' por causa das aspas*/
            echo "salario é idetico a premio.";
        } else {
            echo "salario não é identico a premio.";
        }
            
        ?>
        
        <?php
        $fumante = true;
        
        if (!$fumante) {/*negação contrario de true*/
            echo "voce não é fumante";
        } else {
            echo "vc é fumante";/*gera essa se for true*/
        }
        
        
        ?>
        
        <?php
        $dia = "sabado";
    if    ($dia == "sabado" || $dia == "domingo") {/*sabado ou'||' domindo*/
            echo "dia de descansar";
        } else if ($dia == "segunda" && $dia == "terça") {/*segunda e'&&' terça,, tem q ser os dois junto para executar*/
            echo "dia de trabalhar";
        }else {
        echo "ultimo gás..."
    }
        
        
        ?>
    </body>
</html>
/**/
<!>
<!---->