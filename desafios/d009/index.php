<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Médias</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="primeiro-valor">1<sup>o</sup> valor</label>
            <input type="number" name="primeiro-valor" id="id-primeiro-valor" min="1" value="<?=$v1?>" required>

            <label for="primeiro-peso">1<sup>o</sup> peso</label>
            <input type="number" name="primeiro-peso" id="id-primeiro-peso" min="1" value="<?=$p1?>" required>

            <label for="segundo-valor">2<sup>o</sup> valor</label>
            <input type="number" name="segundo-valor" id="id-segundo-valor" min="1" value="<?=$v2?>" required>

            <label for="segundo-peso">2<sup>o</sup> peso</label>
            <input type="number" name="segundo-peso" id="id-segundo-peso" min="1" value="<?=$p2?>" required>

            <input type="submit" value="Enviar">
        </form>
        <?php
        
            $v1= $_GET['primeiro-valor'] ?? '';
            $v2 = $_GET['segundo-valor'] ?? '';
            $p1 = $_GET['primeiro-peso'] ?? '';
            $p2 = $_GET['segundo-peso'] ?? '';

            //média simples

            $media_simples = ($v1 + $v2) /2;
            
            //média ponderada
            $media_ponderada = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2) ;

            echo "<ul><li><strong>Média simples</strong> entre <strong>$v1</strong> e <strong>$v2</strong> com pesos <strong>$p1</strong> e <strong>$p2:</strong> " . number_format($media_simples, 2, ",", "."). "</li><br>";

            echo "<li><strong>Média ponderada</strong> entre <strong>$v1</strong> e <strong>$v2</strong> com pesos <strong>$p1</strong> e <strong>$p2</strong>: " . number_format($media_ponderada, 2, ",", "."). "</li></ul><br>";
        
        ?>
    </main>
</body>
</html>