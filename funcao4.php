<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php/*function muito util para resumir repetiçoes de codigos*/
        function retornarDiaria($salario,$dias,$cotacao) {
            $real = number_format($salario/$dias,2);// o ,2 é numeros com 2casa com virgula ex:0,00 //calculo real e abaixo dolar
            $dolar = number_format(($salario/$dias)/$cotacao,2);//number_format = para colocar quantos numeros com virgulas
            return array($real,$dolar);/*retornar os array abaixo 1 de cada*/
        }            
        
        $diaria_array = retornarDiaria(3000,10,2.5);/*(salario,dias,cotação do dolar)*/
        echo "Diaria em R$ " . $diaria_array[0] . "<br>"; //valor do real
        echo "Diaria em US$ " . $diaria_array[1] . "<br>";// valor do dolar
       
          /* echo retornarDiaria(3000,10,2.5);/*retorna o resultado */
        
 // tbm pode ser assim abaixo: usando list
 //         list($resultado_real,$resultado_dolar) = retornarDiaria(3000,10,2.5);/*(salario,dias,cotação do dolar)*/
 //         echo "Diaria em R$ " . $resultado_real . "<br>"; //valor do real
 //         echo "Diaria em US$ " . $resultado_dolar . "<br>";// valor do dolar
        
        ?>
        
    </body>
</html>
/**/
<!>
<!---->