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
    <th> Opções</th>
  </tr>

  <tr>
      <td><?php
    $sql = "SELECT email FROM usuario WHERE email='2022310916@gmail.com'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['email'].'';
  ?>
  </td>
    <td><?php
    $sql = "SELECT senha FROM usuario WHERE email='2022310916@gmail.com'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['senha'].'';
  ?></td>
  <td><a href="excluir.php">Excluir</a></td>
</tr>
  <tr>
    <td>
    <?php
    $sql = "SELECT email FROM usuario WHERE email='2022316043@gmail.com'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['email'].'';
  ?>
    </td>
    <td>
    <?php
    $sql = "SELECT senha FROM usuario WHERE email='2022316043@gmail.com'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['senha'].'';
  ?>
    </td>
    <td>
        <a href="alterar.php">Editar</a>
    </td>
</tr>
<tr>
    <td>
    <?php
    $sql = "SELECT email FROM usuario WHERE email='2003@gmail.com'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['email'].'';
  ?>
    </td>
    <td>
    <?php
    $sql = "SELECT senha FROM usuario WHERE email='2003@gmail.com'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['senha'].'';
  ?>
    </td>
    <td>
        <a href="adicionar.php">Adicionar</a>
    </td>
</tr>
</table>
  </fieldset>

</body>
</html>