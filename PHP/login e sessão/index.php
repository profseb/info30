<?<?php 

// primeiro comando da página quando se quer controlar o acesso a ela
session_start();

// se o usuário NÃO está logado
if (!$_SESSION["logado"]) {
	// redireciona a navegação para a página login.php
	header("location: login.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema da INFO 30</title>
</head>
<body>

	<h1>Sistema da INFO 30</h1>

	<ul>
		<li>
			<a href="#">Início</a>
		</li>
		<li>
			<a href="#">Item 1</a>
		</li>
			<a href="#">Item 2</a>
		<li>	
			<a href="logout.php">Sair</a>			
		</li>
	</ul>

	<h2>Início</h2>

	<p>Olá, <?=$_SESSION["usuario"]?>! Seja bem-vindo(a) ao Sistema da INFO 30!</p>

</body>
</html>