<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
        
            $num = $_POST["n"] ?? 0;
            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".")."</strong> informado pelo usuário...</p>";

            $int = (int) $num;
            $fra = ($num - $int);

            echo "<ul><li>Parte inteira do número:<strong>" . $int . "</strong><br><li>Parte fracionária do número:<strong>".number_format($fra, 2, ",", ".") . "</strong></ul>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>