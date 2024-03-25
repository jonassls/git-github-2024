<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ínicio</title>
</head>
<body>
   <form method="POST">
    <fieldset>
        <legend><h1>
            Registrar Usuario
        </h1></legend>
        Email: <input type="text" name="email"><br>
        Senha: <input type="text" name="senha">
    </fieldset>
    <input type="submit" value="Registrar">
   </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se o formulário foi enviado

    if (isset($_POST["email"]) && isset($_POST["senha"])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    $sql = "INSERT INTO usuario(email, senha) VALUES ('$email','$senha')";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>