<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
//for(criação variavel inicial;condição existencia ou limite contagem;incremento variavel controle ou gerar contagem)        
for($contador=1; $contador < 7 ; $contador++ ) {
    echo rand(1,60) . " ";/*gera 6 numeros aleatorios de 1 a 60*/
            
        }
        
                ?>
        
        <?php
      
for($contador=1; ; $contador++ ) {
    if ($contador < 7) {
        break;/*outra maneira*/
    }
    echo rand(1,60) . " ";
            
        }
        
                ?>
    </body>
</html>
/**/
<!>
<!---->