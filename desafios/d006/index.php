<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $d1 = 1;
        $d2 = 1;
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
        
    
    ?>    
    <main>
        <h1>Desafio 006</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="d1">Digite o valor 1:</label>
            <input type="number" name="d1" id="id-d1" min="0" value="<?=$dividendo?>" step="0">

            <label for="valor-2">Digite o valor 2:</label>
            <input type="number" name="d2" id="id-d2" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>    
    <section>
        <h2>Estrutura da divisão</h2>

            <?php
               $quociente = (int) ($dividendo / $divisor);
               $resto = $dividendo % $divisor; 
            ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>