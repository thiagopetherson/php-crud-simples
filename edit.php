<?php
require_once("conexao.php");

$id = $_GET['id'];
$query = "select * from pessoa where id = $id";

$resultado = mysqli_fetch_assoc(mysqli_query($conexao, $query));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crudzin- edit pessoa</title>
</head>
<body>
<form action="update.php" method="POST">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" value=<?php echo $resultado['nome']; ?> required><br>
        <label for="idade">Idade</label><br>
        <input type="text" name="idade" value=<?php echo $resultado['idade']; ?> required><br>
        <input type="hidden" name="id" value=<?php echo $resultado['id']; ?>>
        <input type="submit" value="enviar update">
    </form>
</body>
</html>