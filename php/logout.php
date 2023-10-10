<?php
    include ('conexao.php');
    session_start();

    if(isset($_POST['btnLogout'])) {

        unset ($_SESSION['login']);

        session_destroy();
        header("location:../html/formlogin.html");
    }
?>