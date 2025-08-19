<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>"method="get">
            
            <h1>Soma de valores</h1>
            <label for="valor-1">Valor</label>
            <input type="number" name="v1" id="id-valor-1" value="<?=$valor1?>">

            <label for="valor-2">Valor</label>
            <input type="number" name="v2" id="id-valor-2" value="<?=$valor2?>">
            
            <input type="submit" value="somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado soma</h2>
    
        <?php 
        
            $soma = $valor1 + $valor2;
            echo "<p>A soma dos valores <strong>$valor1</strong> e <strong>$valor2</strong> é igual a <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>