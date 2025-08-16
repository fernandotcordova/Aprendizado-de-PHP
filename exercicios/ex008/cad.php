<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado processamento em PHP</h1>
    </header>
    <main>
        <?php 
            var_dump($_GET); //variável já declarada no PHP, para métodos de envio do tipo get

            var_dump($_POST); //variável já declarada no PHP, para métodos de envio do tipo post

            var_dump($_REQUEST); //Funciona em ambos tipos: $_GET, $_POST, $_COOKIE

            echo "<hr><br>";
            $n = $_GET["nome"] ?? "Sem nome"; //operador de coalecência nula
            $s = $_GET["s-nome"] ?? "Desconhecido"; //operador de coalecência nula

            if($_GET == null){
                die();
            }
            
            echo "É um prazer te conhecer $n $s. Seu currículo já foi enviado!"
        ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
</body>
</html>