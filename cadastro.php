<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	echo "</br>";
	$id = $_POST['nome']; // Suponha que id foi gerado aleatoriamente. Poderia ser um número.
	
	echo "Voce está cadastrado. Chame os seus amigos e ganhe pontos.";
        echo "</br>";
	echo "Para isso, é só passar o link: ";
	echo "http://localhost:8081/cadastro/etapa1.php";
        echo "</br>";
        echo $id; 
?>
