<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
        
        $contador = 1;//contador com 1 e while até=3,, então vai gerar 3 numeros na tela
        do{//do while =  ele realiza o primeiro passo depois faz o repet 
        $sorteio = rand(1,60);/*rand:sorteio de numeros de 1 até 60*/
        echo $sorteio . " ";/*numeros sorteados com espaço" " e com rand aleatoriamentes de 1 a 60*/
            $contador++;/*soma mais um o numero tipo repet de contagem até o limite do while*/
        }while($contador<=5)/*while = enquanto o contador for menor ou igual a 5 gera o looping ou repet*/
        ?>
    </body>
</html>
/**/
<!>
<!---->