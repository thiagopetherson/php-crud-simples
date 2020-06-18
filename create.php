<?php

require_once("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$query = "insert into pessoa(nome, idade) values('$nome', $idade)";

$resultado = mysqli_query($conexao, $query);

if($resultado)
    echo "Inserido com sucesso";
else
    echo mysqli_error($conexao);

?>