<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        $data1 = new DateTime('2014-12-30');/*começou sistema*/
        $data2 = new DateTime('2014-12-31');/*saber o distandiamento de datas no momento esta 1 dia apenas...*//*dia atual do sistema ou site*/
        $intervalo = $data ->diff($data2);/*util para saber a data que vriou um sistema a data atual*/
        ?>
        
        <pre>
        <?php print_r($intervalo)?>/<!--saber geral data-->
        </pre>
        
        <pre><!--saber de um dia exato-->
        <?php print_r($intervalo ->format('%R%a'))?><!--saber dia ou 'd',, o %R mostra + ou - dependendo do dia -->
        <?php print_r($intervalo ->format('%r%y'))?><!--ano,, com %r minusculo mostra sem positivo e se for negativo - mostra -->
        <?php print_r($intervalo ->format('%m'))?><!--mes-->
        </pre><!--,,+: para sistema antigo feito antes,, -:negativo p/ sistema novo  -->
    </body>
</html>
/**/
<!>
<!---->