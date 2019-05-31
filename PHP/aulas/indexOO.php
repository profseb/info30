<?php

include "Banco.class.php";

$banco = new Banco();

$dados = array($_GET["nome"]);

$banco->inserir($dados,'alunos');

$alunos = $banco->pegaTabela("alunos");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alunos da INFO 30</title>
</head>
<body>

	<h1>Alunos da INFO 30</h1>

	<form action="indexOO.php" method="get">
		<h3>Novo Aluno</h3>
		Nome do aluno: <input type="text" name="nome" />

		<input type="submit" value="Salvar" />
	</form>

	<br />
	<br />

	<table width="50%" cellpadding="5" cellspacing="0" border="1" align="center">
		<tr>
			<th>ID</th>
			<th>Nome</th>
		</tr>
		<?php foreach($alunos as $key=>$aluno) { ?>
		<tr>
			<td><?=$aluno["id"]?></td>
			<td><?=$aluno["nome"]?></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>