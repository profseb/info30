<?php

// primeiro comando da página quando se quer controlar o acesso a ela
session_start();

// zera o array global SESSION
$_SESSION = array();

// redireciona a navegação para a página login.php
header("location: login.php");
exit;

?>