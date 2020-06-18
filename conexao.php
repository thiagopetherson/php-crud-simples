<?php


$host = '127.0.0.1';
$bd = 'crudin';
$user = 'root';
$password = '12345';

$conexao = mysqli_connect($host, $user, $password, $bd);

if (!$conexao) {
    echo "Error: Não pode se conectar ao mysql" . PHP_EOL;
    echo "Debugging numero do  erro: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging erro: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

mysqli_close($conexao);

?>