<?php
session_start();
include('conexao.php');

    $cod = $_GET['cod'];

    $sql = ("DELETE FROM publicacao WHERE cod = '$cod'");

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo 
            header("location:publicação.php");
    } else {
        echo  ("<script>
                window.alert('Ocorreu algum erro!')
                window.location.href='http://localhost/staycalm/php/publicação.php';
            </script>");
    }
?>