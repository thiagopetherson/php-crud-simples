<?php

require_once("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$id = $_POST['id'];

$query = "update pessoa set nome = '$nome', idade = $idade where id = $id";

$resultado = mysqli_query($conexao, $query);

if($resultado)
    echo "Atualizado com sucesso";
else
    echo mysqli_error($conexao);

?>