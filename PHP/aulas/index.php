<?php

$conexao = mysqli_connect("localhost","root","ifma");

$banco = mysqli_select_db($conexao, "aula");

//$sql = "insert into alunos values (null, 'Eduardo')";

//$resultado = mysqli_query($conexao, $sql);

$sql = "select * from alunos";

$resultado = mysqli_query($conexao, $sql);

$alunos = array();

while($linha = mysqli_fetch_assoc($resultado)) {
	$alunos[] = $linha;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Alunos da INFO 30</title>
</head>
<body>

	<h1>Alunos da INFO 30</h1>

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