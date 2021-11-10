<?php
session_start();

include './aulawebi13/server.php';

if (isset($_POST['log'])) {
    if (consultaUsuario($_POST['login'], $_POST['senha'])) {
        echo '<a href="sistema.php.php">Logar</a>';
        exit();
    } else {
        echo 'Sua senha ou seu usuário estão incorretos!';
    }
}
?>

<form method="post">
    <input type="text" name="login"
           placeholder="Login">
    <br>
    <input type="password" name="senha"
           placeholder="Senha">
    <br>
    <input type="submit" name="log">
</form>