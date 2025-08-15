<?php   
	//definindo as variáveis
    $r = "2"; 
	$s = "2";
	
	//descrevendo o tipo
	var_dump($r);
	var_dump($s);
	
	//somando e convertendo valores
	
	echo "$r" + "$s". PHP_EOL;
	
	//Semelhante ao JS (Concatenação)
	echo "$r" . "$r";
	
	//Testando soma de strings em versões anteriores do PHP
	
	/*
	Não funcionará em versões recentes
	$nome = "Fernando";
	$s_nome = "Cordova";
	
	echo "$nome" + "$s_nome";
	
	

	$x = "101 doláres";
	$y = "10 reais";
	
	$k = "$x" + "$y";
	var_dump($k);
	
	$t = "nota 10" + " 1 ponto";
	
	var_dump($t);
	*/
?>