<?php
if (isset($_POST['logar'])) {
    //select no usuario
    //SELECT *
    //from usuarios
    //where login = 'marcondes'
    //and password = md5('teste')
    if (($_POST['login']=='admin')
        &&($_POST['senha']=='admin')) {
        $_SESSION['usuario']='Marcondes Maçaneiro';
        echo '<a href="index.php">Acessar</a>';
    } else {
        echo 'Login ou senha incorreto!';
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
        <input type="submit" name="logar">
    </form><?php