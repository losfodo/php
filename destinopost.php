<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <pre>
        <?php
    //print_r($_POST);/*pegar as informações geral*/    
?>

<!--ou>


<?php
if (isset($_POST["nome"])) {//isset: saber se esta configurado o post nome
    $nome = $_POST["nome"];/*metodo post, para fazer cadastro*/
}else{
$nome = "Sem definição";/*metodo post, else se não configurado*/
}


if (isset($_POST["email"])) {
    $email = $_POST["email"];
}else{
$email = "sem definição";
}

/*ou*/

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "sem definição";/*com operador ternario,, tipo if e else resumidos em 1 linha*/
$email = isset($_POST["email"]) ? $_POST["email"] : "sem definição";



echo "Meu nome: " . $nome . "<br>";/*saida dos dados da pessoa , cadastro*/
echo "Meu email: " . $email . "<br>";/*um de cada*/

?>
        </pre>
        
        
    </body>
</html>