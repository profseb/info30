<?php

class Banco {
	
	var $host = "localhost";
	var $usuario = "root";
	var $senha = "ifma";
	var $banco = "aula";
	var $conexao = null;

	public function conectar() {

		$this->conexao = mysqli_connect($this->host,$this->usuario,$this->senha);

		$sel = mysqli_select_db($this->conexao, $this->banco);

		return $this->conexao && $sel;

	}

	public function executarSQL($sql) {

		if ($this->conexao == null) {
			$this->conectar();
		}

		$query = mysqli_query($this->conexao, $sql);

		$resultado = array();

		while($linha = mysqli_fetch_assoc($query)) {
			$resultado[] = $linha;
		}

		return $resultado;

	}


	public function pegaTabela($tabela) {

		return $this->executarSQL("select * from $tabela");

	}

	public function inserir($dados, $tabela) {

		if ($this->conexao == null) {
			$this->conectar();
		}

		foreach($dados as $key=>$item) {
			$dados[$key] = "'" . $item . "'";
		}

		$insert = implode(", ", $dados);


		$sql = "insert into $tabela values (null, $insert)";
	
		return mysqli_query($this->conexao, $sql);

	}


}