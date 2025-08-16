<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 

            $number = $_GET["numero-aleatorio"];
            $gerar = rand(0,100);

            if($gerar == $number){
                echo "Parabéns, você conseguiu!";
            } else{
                echo "Errado";
            }
        ?>
    </main>
</body>
</html>