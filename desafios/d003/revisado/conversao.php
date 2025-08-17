<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Converosr de moedas</h1>
        <?php 
            $cotacao = 5.40; //salvando
            
            $real = $_GET['din-real'] ?? die();
            
            $dolar = $real / $cotacao;
            
            //number format: mais simples
            //echo "Seus R$" .number_format($real, 2, ",",".") . " equivalem a US$" .number_format($dolar, 2, "," , ".");
            
            //outro método
            //biblioteca intl (Internalizattion PHP)
            
            $padrao =numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus <strong>" .numfmt_format_currency($padrao, $real,"BRL"). "</strong> valem <strong>" .numfmt_format_currency($padrao, $dolar, "USD" . "</strong></p>");
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>