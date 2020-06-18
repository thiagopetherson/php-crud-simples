<?php
require_once("conexao.php");

$id = $_GET["id"];

$query = "delete from pessoa where id = $id";

$resultado = mysqli_query($conexao, $query);

if($resultado)
    echo "<h1>Excluído com sucesso</h1>";
else
    echo mysqli_error($conecao);