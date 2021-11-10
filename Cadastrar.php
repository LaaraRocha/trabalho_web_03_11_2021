<?php
    include '/';
?>


    <form method="post">

        <input type="text" name="nomePessoa" placeholder="nome da pessoa" />
        <br/> <br/>
        <input type="submit" name="salvar" />

    </form>

<?php

    if (isset($_POST['salvar'])) {
        echo $_SESSION['tela'];
        echo $_POST['salvar'];
        echo $_POST['nomePessoa'];
        if (cadastrarPessoa($_POST['nomePessoa'])) {
            echo '<p>seu cadastro foi efetuado com sucesso</p>';
            echo '<a href="sistema.php">Retornar</a>';
        }
    }

?>