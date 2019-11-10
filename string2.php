<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia; ou retorna numero de letras do $_nome
     echo strlen($_nome);
        echo strlen("Brasil") . "</br>";/*br para evitsr grudar tudo*/
            
            // stripos  - Retorna primeira ocorrência ou seja curso a letra u ta na posição 1,C posição 0.. 
            echo stripos($_nome,"u"). "</br>";/*letras maiusculas e minusculas nao importa*/

            // strripos - Retorna última ocorrência ou seja u de f'u'ndamental
echo strripos($_nome,"u"). "</br>";/*letras maiusculas e minusculas nao importa*/         
            
            // strtolower - converte para letras minusculas.
  echo strtolower($_nome). "</br>";          

            // strtoupper - converte para letras maiusculas.
  echo strtoupper($_nome). "</br>";          

            // SUBSTR_COUNT - Conta quantas ocorreram tipo quantas letras ou conjunto de palavras tem ex: u possui 2
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
        echo SUBSTR_COUNT($_nome,"u"). "</br>";          
        ?>
        
        
    </body>
</html>