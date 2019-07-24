<?php

// primeiro comando da página quando se quer controlar o acesso a ela
session_start();

if (!empty($_POST)) {

	//if ($_POST["email"] == "admin" && $_POST["senha"] == "admin") {
	if ($_POST["email"] == $_POST["senha"]) {

		$_SESSION["logado"] = true;
		$_SESSION["usuario"] = $_POST["email"];

		// após o login, redireciona a navegação para a página inicial do sistema!
		header("location: index.php");
		exit;


	} else {
		echo "E-mail e senha incorretos!";
		exit;
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN:: Sistema INFO 30</title>
</head>
<body>

	<h1>Sistema da INFO 30</h1>

	<h2>Entrar no sistema</h2>

	<form method="post">
		
		E-mail: <input type="text" name="email" /> <br /><br />
		Senha: <input type="password" name="senha" /> <br />
		<input type="submit" value="Entrar" />

	</form>


</body>
</html>