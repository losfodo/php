<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        //determinar timezone
        date_default_timezone_set('Etc/GMT+3');/*codigo horario no brasil oficial*///pode ser ex (America/Santa_Catarina)
        $agora = getdate();/*mostrar horario dia mês completo*/
          
        //criar elementos
        $ano = $agora["year"];
        $mes = $agora["mon"];
        $dia = $agora["mday"];
                              //o dia mes ano horas.... puxados
        $hora = $agora["hours"];
        $minuto = $agora["minutes"];
        $segundo = $agora["seconds"];    
        
        echo $dia . "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;/*determinar um de cada e juntar todos*/
        ?>
        
        
        <!--ou como abaixo-->
        
        <?php
         //determinar timezone
        date_default_timezone_set('America/Santa_Catarina');/*codigo horario no brasil oficial*///pode ser ex (America/Santa_Catarina)
        setlocale(LC-TIME, "pt_BR")/*deixar em portugues a data*/
        
        $agora = getdate();/*mostrar horario dia mês completo*/
          
        //criar elementos
        $ano = strftime['%Y'];//encontrado no site do php estes codigos
        $mes = strftime['%B'];/*deixa em portugues*/
        $dia = strftime['%d'];
        $_dia_semana = strftime['%A'];//quarta , quinta sexta...
        
        //o dia mes ano horas.... puxados
        $hora = strftime['%H'];
        $minuto = strftime['%M'];
        $segundo = strftime['%S'];   
        
        echo $_dia_semana . ", " . $dia . "de" . $mes . "de" . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;/*determinar um de cada e juntar todos*/
        
        ?>
    </body>
</html>
/**/
<!>
<!---->