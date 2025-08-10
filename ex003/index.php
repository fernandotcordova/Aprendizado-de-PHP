<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //define o fuso hórario de São Paulo 
        echo "Hoje é dia (em números):\n" .date("d/m/y"); //coloca as datas em números
        echo "Hoje é dia (extenso): " .date("D/M/Y"); //coloca as datas em extenso
        echo "A hora agora é:" .date("G:i:s T"); 
    
    ?>
</body>
</html>