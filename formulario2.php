<?php
if( isset($_POST["formulario"])){//formulario submetido a mesma pagina 
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "sem definição";/*com operador ternario,, tipo if e else resumidos em 1 linha*/
    $email = isset($_POST["email"]) ? $_POST["email"] : "sem definição";

echo "Meu nome: " . $nome . "<br>";/*saida dos dados da pessoa , cadastro*/
echo "Meu email: " . $email . "<br>";/*um de cada*/
}

?>



<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php if (!isset($_POST["formulario"])) { ?><!--não ver o formulario-->
        <form action="formulario2.php" method="get"><!--via get vai outro site? e é visivel--><!--via post: para inseção banco de dados, n ve os dados-->
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro"><!--name formulario-->
        </form>
        <?php } ?>
    </body>
</html>