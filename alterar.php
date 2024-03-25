<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
<form method="post">
        Email do usuario a ser alterado:
        <input type="text" name="email" size="100">
        <br>
        <br>
        <label>Email:</label>
        <input type="text" name="email1" size="100">
        <br>
        <br>
        <label>Senha:</label>
        <input type="text" name="senha" size="100">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se o formulário foi enviado

    if (isset($_POST["email"]) && isset($_POST["email1"])&& isset($_POST["senha"])){
        $email = $_POST['email'];
        $email1 = $_POST['email1'];
        $senha =$_POST['senha'];
    $sql = "UPDATE `usuario` SET `email`='$email1',`senha`='$senha' WHERE email='$email'";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>