<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Tipos primitivos PHP</h1>
    <?php 
        
        echo("<h2>Teste de variáveis</h2>");
        $num = 300;

        echo "O valor da variável é: $num <br>";

        $numHexadecimal = 0x1A; //indica um número na base hexadecimal (0x)

        /**
         * 0x - hedecimal
         * 0b - binário
         * 0 - octal
        **/

        echo "O valor da variável é: $numHexadecimal <br>";

        $numBinario = 0b1011;

        echo "O valor da variável em binário é: $numBinario <br>";

        $numOctal = 010;

        echo "O valor da variável é: $numOctal <br>";

        $v = 300;
        
        $numPotencia = 3e2; //(3x10^2)

        #função interna do PHP que mostra detalhes da variável

        echo("<h2>Teste da função var_dump</h2>");
        var_dump($v);
        var_dump($num); 
        var_dump($numHexadecimal);
        var_dump($numBinario);
        var_dump($numOctal);
        var_dump($numPotencia);

        //Como forçar o tipo primitivo no PHP = Coersão
        echo("<h2>Teste de forçar o tipo da variável</h2>");
        $teste = (integer) 3e2;
        var_dump($teste);
        
        $numero = "850";

        var_dump($numero);

        $numeroTratado = (int) "850";

        var_dump($numeroTratado);

        //$numReal = (real) "850"; 
        //Não funcionará mais. Foi removido na versão 7.4 (última versão disponível 7.3.33) do PHP
        
        echo("<h2>Teste de Boolean</h2>");

        $casado = false;
        var_dump($casado);

        //Não será mostrado nada, pois em echos e prints o atributo falso é vazio

        echo("<br>O valor para casado é (echo): $casado");
        print("<br>O valor para casado é (print): $casado");

        $casadoTeste = true;

        //Imprimirá 1, pois, em PHP, true = 1 e false é vazio.
        print("<br>O valor para casado é (print): $casadoTeste");

        echo("<br>O valor para casado é (echo): $casadoTeste");
        
        //Tipos compostos
        echo("<h2>Tipos compostos</h2>");
        echo("<h3>Arrays</h3>");
        $vet = [6, 7, 9, 10];
        $vetTeste = [6, "Maria", false, 3.545];
        
        var_dump($vet);
        echo("<br><br><br>");
        var_dump($vetTeste);

        echo("<h3>Objects</h3>");

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>