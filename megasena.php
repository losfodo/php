<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
       
        $megasena = array();
        $contador = 1;
        
        while ( $contador < 7) {/*while vai até 7*/
            $sorteio = rand(1,60);/*rand sorteio 1 até 60*/
        if (!in_array($sorteio, $megasena) ){/*in_array pergunta se number existe , para não vir repetida*/    
            $megasena[] = $sorteio;/*megasena[posição 0 1 2..] = sorteio aleatorio*/
            $contador ++;/*contagem até o 7 stop*/
        }
        }
        
        sort($megasena);/*faz os numeros serem crescentes aleatoriamentes tipo 1 , 5 , 8...*/
        
        ?>
        
        <pre>
        <?php print_r($megasena) ?><!--saida da megasena dados..-->
        </pre>
    </body>
</html>
/**/
<!>
<!---->