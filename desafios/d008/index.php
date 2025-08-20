<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Raizes</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number-quadrada">Informe um número quadrada:</label>
            <input type="input-quadrada" name="numero-quadrada" id="id-numero">

            <label for="number-cubica">Informe um número para raiz cúbica:</label>
            <input type="input-cubica" name="numero-cubica" id="id-numero-quadrada">

            <input type="submit" value="Enviar">


        </form>

        <?php 
        
        //cálculo para raiz quadrada
        $contador_quadrada;
        $valor_raiz_quadrada = $_GET['numero-quadrada'] ?? 0;
        $valor_final_raiz_quadrada = sqrt($valor_raiz_quadrada) ?? 0;

        //calculo para raiz cúbica
        $valor_raiz_cubica = $_GET['numero-cubica'] ?? 0;
        $valor_final_raiz_cubica;
        $valor_final_raiz_cubica = $valor_raiz_cubica ** (1/3) ?? 0;


        echo "<ul><li>A raiz quadrada é igual a: <strong>". number_format($valor_final_raiz_quadrada, 2, ",", ".") . "<br></li></strong>";

        echo "<li>A raiz cúbica é igual a: <strong>". number_format($valor_final_raiz_cubica, 2, ",", ".") . "</strong></li><ul>";

        ?>
    </main>
</body>
</html>