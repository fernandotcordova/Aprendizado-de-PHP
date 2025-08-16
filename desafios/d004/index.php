<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php 
    
        $min = 10000;
        $max = 10000000;

        //Número aleatório. Usando uma função interna do PHP mais nova e rápida
        echo "<br>Resultado: " .mt_rand($min, $max);
        
        //Usando uma função mais antiga, mas ainda muito usada
        echo "<br>Resultado: " .rand($min, $max);

        //Usando uma função que usa números criptograficamente seguros
        echo "<br>Resultado: " .random_int($min, max: $max);
    ?>

    <button onclick="javascript:document.location.reload()">&#x1F504; Recarregar</button>
    </main>
    
</body>
</html>