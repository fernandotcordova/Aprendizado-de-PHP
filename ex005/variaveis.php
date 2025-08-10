<?php 
	//Variáveis
	$nome = "Fernando";
	$sobrenome = "Cordova";

	echo "Olá, $nome $sobrenome<br>"; //É possível usar tags HTML no PHP

	//Alterações de valoes da variável
	$nome = "Lucas";
	$sobrenome = "Silva";
	
	echo "Olá, $nome $sobrenome<br>";
	
	//Constantes
	const PAIS = "Brasil";
	
	echo "Você mora no: " .PAIS . "<br>";  //Pode estar acentuada (não recomandada, mas aceita)
	
	#PAIS = "Japão"; //Não aceitará ser mudado.
	#Outro método de comentar
	
	echo "Olá, você mora no: " .PAIS . "<br>";
    
?>
