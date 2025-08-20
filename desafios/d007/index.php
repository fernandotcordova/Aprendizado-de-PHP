<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        
        <label for="salario">Informe seu salário</label>
        <input type="number" name="salario" id="id-salario">
        <p>Considerando um salário mínimo de R$1518,00</p>
        <input type="submit" value="Calcular">
        </form>
    </main>

    <main>
        <?php 
        
        $salarioUser = $_GET['salario'];
        $salarioAtual = (float) 1_518 ?? 1_518;
        if($salarioUser < $salarioAtual){
            echo "<center>Salário menor que o mínimo. Salário definido com mínimo<br></center>";
            $salarioUser = $salarioAtual;
        }

        $calculo = (int) ($salarioUser / $salarioAtual);

        if($salarioUser < $salarioAtual){
            echo"Valor não aceito. Digite um valor acima de $salarioAtual " . die();
        }
        $resto = $salarioUser - ($calculo * $salarioAtual);

        echo "Quem recebe salário de R$" . number_format($salarioUser, "0" , ",", ".") . " ganha $calculo <strong> salários mínimos</strong> + R$". number_format($resto, "2", ",", ".")
        ?>
    </main>
</body>
</html>