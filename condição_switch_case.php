<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
      
        $dia = "sexta";/*aparece apenas a opção q estiver aqui dos case*/
        switch($dia) {
            case "segunda":
                echo "hoje ainda é segunda :( <br>";
                break;/*break serve para sair apenas aquele case especifico*/
            case "quarta":
                echo "hoje não é sexta, mas chegando... <br>";
                break;
            case "sexta":
                echo "oba, sexta! <br>";/*no caso esta*/
                break;
            default:/*quando nenhuma das opçoes acima corresponde com case*/
                echo "trabalha ai que esta chegando";
        }
        
        ?>
    </body>
</html>
/**/
<!>
<!---->