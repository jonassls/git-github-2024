<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
<form method="post">
        <label>Email:</label>
        <input type="text" name="email" size="100">
        <br>
        <br>
        <input type="submit" value="Excluir">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se o formulário foi enviado

    if (isset($_POST["email"])){
        $email = $_POST['email'];
            $sql = "DELETE FROM `produtos` WHERE email=$email";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>