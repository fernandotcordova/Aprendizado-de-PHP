<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["numero"];

            echo "<p>O resultado é:</p>" .$n;
            echo "<p>O seu sucessor é:</p>" .$n + 1;
            echo "<p>O seu antecessor é: </p>" .$n - 1; 
        ?>
        <br>
        <footer>
            <a href="javascript:history.go(-1)">Voltar</a>
        </footer>
        
    </main>
</body>
</html>