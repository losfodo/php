<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php/*function muito util para resumir repetiçoes de codigos*/
        function retornarDiaria($salario) {
            return number_format($salario/30,2);//number_format = para colocar quantos numeros com virgulas no resultado no caso 2 = 266.66
        }
        
        echo retornarDiaria(8000);/*retorna o resultado da divisão q é 8000 e dividi pra 30 = 266,66 */
        /*pode ser assim tbm abaixo
        $diaria = retornarDiaria(8000);
        echo $diaria; //saida fica aqui
        */
        
        ?>
        
    </body>
</html>
/**/
<!>
<!---->