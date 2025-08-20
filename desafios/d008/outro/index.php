<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        <h1>Raizes aleatórias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="raiz">Digite a raiz que você quer:</label>
                <input type="number" name="raiz-aleatoria" id="id-raiz-aleatoria">
                <label for="input-raiz">Digite o valor que você quer calcular a raiz</label>
                <input type="number" name="valor-raiz" id="id-valor-raiz">
                <input type="submit" value="Enviar">
        </form>
        <?php
            $elevado = $_GET['raiz-aleatoria'] ?? 0;
            $valor = $_GET['valor-raiz'] ?? 0;

            $valor_final = $valor ** (1/$elevado);

            echo "<br><section>Valor final: " . number_format($valor_final, 2, ",", ".". "</section>");
        
        ?>
    </main>
</body>
</html>