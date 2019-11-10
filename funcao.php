<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php/*function muito util para resumir repetiçoes de codigos*/
        function retornarDiaria() {
            $salario = 910;
            return number_format($salario/30,2);//number_format = para colocar quantos numeros com virgulas no resultado no caso 2 = 30,33
        }
        
        echo retornarDiaria();/*retorna o resultado da divisão q é 30,33*/
        ?>
        
    </body>
</html>
/**/
<!>
<!---->