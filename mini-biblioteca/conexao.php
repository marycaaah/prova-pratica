<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'Biblioteca';

$conexao = new mysqli($host, $user, $password, $dbname);

if ($conexao->connect_error) {
  die('Erro na conexão: ' . $conexao->connect_error);
}
?>