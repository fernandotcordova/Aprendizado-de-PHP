<?php
	$nome = "Fernando";
	$sobrenome = "Cordova";
	
	#Double quotes
	echo "$nome $sobrenome\u{1FAC2}";
	
	#Simple quotes
	echo '$nome $sobrenome \u{1FAC2}';
	
	#Simple quotes nas variáveis
	
	$nomeSimple = 'Fernando';
	
	echo "$nomeSimple"; //não muda nada
	
	$nomeSimpleSimbolo = 'Fernando \u{1FAC2}';

	echo "$nomeSimplesSimbolo"; #O PHP vai colocar o que tem dentro da string na tela, mas não irá interpretar o código unicode, pois ele está entre aspas simples
	
	//O código unicode aparecerá não o símbolo, pois ele somente substituiu a variável
	//Essa interpretação de unicode somente funciona a partir do 7

	//Pegando o data de hoje

	echo("Hoje é dia: ").date('D');

	//Escapes de sequência

	$nomeSequencia = "Fernando";
	$sobrenomeSequencia = "Cordova";
	$apelido = "Fernandinho";

	echo "$nomeSequencia $apelido $sobrenomeSequencia";

	//Apresentará sem aspas no apelido usando os conceitos de double quotes
	echo "$nomeSequencia $apelido $sobrenomeSequencia";
	
	//Apresentará com aspas no apelido com double quotes
	echo "$nomeSequencia \"$apelido\" $sobrenomeSequencia";
	
	//Apresentará aspas simples no apelido usando os conceitos de simple quotes
	echo '$nome \'$apelido\' $sobrenome';
	
	//Usando tabulação e quebra de linha
	echo "$nomeSequencia \n\t \"$apelido\" \n\t$sobrenomeSequencia";

	//Strings heredoc

	$liquido  = "cafe";
	$ano = date('Y');
	
	//deve ter uma espaço entre as três maiores (antes e depois)
	echo <<< TESTE
	
	Olá, eu 
		tomo $liquido em 
	$ano \u{1FAC2}
	
	TESTE; //obrigatoriamente igual lá em cima

	//Strings nowdoc

	$liquido  = "cafe";
	$ano = date('Y');
	
	//deve ter uma espaço entre as três maiores (antes e depois)
	
	echo <<< 'TESTE'
	Olá, eu 
		tomo $liquido em 
	$ano \u{1FAC2}
	
	TESTE; //obrigatoriamente igual lá em cima
?>