<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado:</h1>

        <?php 
        
        $valor = $_GET["conversor_para_reais"];

        if($valor == null){
            echo "Você não digitou nada";
            die();
        }
        echo "Resultado: R$".$valor * 5.74; 
        
        ?>

    </main>
</body>
</html>
