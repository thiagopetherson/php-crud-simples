<?php
require_once("conexao.php");

$query = "select * from pessoa";

$resultado = mysqli_query($conexao, $query);
//echo var_dump($resultado);
//echo "LOL";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crudzin</title>
</head>
<body>
    <table>
        <thead>
        <th>
        <td>Nome</td>
        <td>Idade</td>
        </th>
        </thead>
        <tbody>
            <?php
                while($pessoa = mysqli_fetch_assoc($resultado)){
                    //var_dump($pessoa);
                    echo "<tr>
                          <td> $pessoa[nome] </td>
                          <td> $pessoa[idade]</td>
                          <td><a href='delete.php?id=$pessoa[id]'>excluir</a></td>
                          <td><a href='edit.php?id=$pessoa[id]'>editar</a></td>
                          </tr>
                            ";
                }
            ?>
        </tbody>
    </table>

    <form action="create.php" method="POST">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="idade">Idade</label><br>
        <input type="text" name="idade"><br>
        <input type="reset" value="Limpar">
        <input type="submit" value="enviar">
    </form>
</body>
</html>