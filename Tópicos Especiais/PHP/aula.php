<?php
	
	$data = date("d/m/Y H:i:s");

	if (date("s") % 2 == 0) {
		$color = "white";

	} else {
		$color = "white";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Events and Functions</title>

	

</head>
<body onload="bemvindo()" onclose="return fechar()" bgcolor="<?=$color?>">

	<h1>Events and Functions</h1>

	<p>Hoje é <?=$data?></p>

	<form onsubmit="return enviar()" onreset="return limpar()" />
		
		Nome do Aluno: <input type="text" name="aluno" /> 

		<input type="button" value="Clique" onclick="conversar()" />
		<input type="submit" value="Envie" />
		<input type="reset" value="Limpar" />

	</form>

	<?php if ($_GET["aluno"] != "") { ?>

	<h2>O nome do aluno enviado foi: <?=$_GET["aluno"]?></h2>

	<?php } ?>

	<script type="text/javascript">

		function enviar() {

			return confirm("Tem certeza que deseja enviar os dados?");

		}
		
		function limpar() {

			return confirm("Tem certeza que deseja descartar os dados deste formulário?");
		}
		function conversar() {

			nome = prompt("Informe o seu nome: ","<?php echo $_GET["aluno"]; ?>");

			if (confirm(nome + ", você está gostando do site?")) {
				alert("Legal! Obrigado por nos visitar!");
			} else {
				alert("Tudo bem! Pode fechar a página! :(");
			}
		}

		function bemvindo() {

			//alert("Seja bem-vindo ao meu programa!");

		}

		function fechar() {

			return confirm("Tem certeza que deseja fechar esta página!");

		}


	</script>
	

</body>
</html>