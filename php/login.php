<?php
    include ('conexao.php');
    session_start();

    $nomeUsuario = $_POST['nomeUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];

    $sql =  ("SELECT * FROM usuario WHERE  login = '$nomeUsuario' AND senha = '$senhaUsuario'");
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) 
    {
        while ($linha = mysqli_fetch_assoc($resultado))
        {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['login'] = $linha["login"];
            $_SESSION['cod'] = $linha["cod"];
            header("location:biblioteca.php");
            die();
        }
    }
    else{
        unset ($_SESSION['login']);
        unset ($_SESSION['cod']);
        unset ($SESSION['loggedin']);
        echo ("<script>
            window.alert('Usuário ou senha incorretos!')
            window.location.href='http://localhost/staycalm/html/formlogin.html';
            </script>");
        die();
    }
?>