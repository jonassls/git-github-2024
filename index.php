<?php
include("conecta.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <fieldset><legend><h1>Lista de Usuarios
    </h1></legend>

    <table border="1">
  <tr>
    <th> Email </th>
    <th> Senha </th>
  </tr>

  <tr>
      <td><?php
    $sql = "SELECT email FROM usuario WHERE email=`jonas.2022310916@aluno.iffar.edu.br`";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['email'].'';
  ?>
  </td>
    <td><?php
    $sql = "SELECT senha FROM usuario WHERE email=`jonas.2022310916@aluno.iffar.edu.br`";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['senha'].'';
  ?></td>
  <td><a href="excluir.php">Excluir</a></td>
</tr>

  <tr>
    <td>
</table>
  </fieldset>

</body>
</html>