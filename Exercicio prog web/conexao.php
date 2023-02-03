<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'arrumaai';
$port = '3306';

$conexao = mysqli_connect($server, $username, $password, $database, $port);

if ($conexao->connect_errno) {
    // echo 'Falha ao conectar ao MySQL: (' .
        $conexao->connect_errno .
        ') ' .
        $conexao->connect_errno;
}else{
  // echo 'conect sucess';
}


mysqli_set_charset($conexao, 'utf8');

?>
