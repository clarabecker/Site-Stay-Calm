<?php
include ('conexao.php');
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false){
    header("location: ../html/formlogin.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt"> 
    <head>
        <meta charset="UTF-8">
        <title>Publicações</title>
        <link rel="stylesheet" type="text/css" href="../css/publicacao.css">
    </head>

    <body> 
        <form action="logout.php" method="POST">
        <input type="submit" value="Sair" name="btnLogout" class="btnSup">
        </form>
        <a href="biblioteca.php">
            <input type="button" value="Voltar" class="btnVoltar">
        </a>
        <h1>Ansiedade Escolar</h1>
            <p class="blocotext1">A ansiedade em ambiente escolar é comum no ensino médio devido a fatores que podem provocar estresse, alguns componentes importantes da ansiedade que podem interferir na aprendizagem e no desempenho em geral do aluno são a tensão, a incerteza e apreensão em relação ao futuro.</p>
            <p class="blocotext2">Aqui você pode compartilhar se o site te ajudou e dar sugestões, você também pode compartilhar outras dicas e técnicas com estudantes que também lidam com ansidedade escolar.
        </p>
        <br>
        <br>
        <form action ="insertpubli.php" class="upload" method="POST" id="formrelato">
            <textarea form="formrelato" id="txtArea" rows="10" cols="126" name="relato"></textarea>
            <br>
            <br>
            <input type="submit" value="Enviar" name="btnEnv" class="btnEnviar">
        </form>
        <p class="blocotext4">Confira abaixo as publicações dos usuários:</p>
        <img class="logo" src="../img/Stay Calm.png" alt="logo" width=100 height=100>
    
    <?php 

    function conversao_data($dt)
    {
        $data = date_create($dt);
        return date_format($data, "d/m/Y H:i");
    }
        $sql =  ("SELECT usuario.login, usuario.cod, publicacao.cod AS codPUb, publicacao.data_pub, publicacao.texto FROM publicacao INNER JOIN 
        usuario ON usuario.cod = publicacao.cod_usuario ORDER BY publicacao.cod DESC");

        $resultado = mysqli_query($conn, $sql);
        $codusuario = $_SESSION['cod'];

        if (mysqli_num_rows($resultado) > 0) 
        {
            while ($linha = mysqli_fetch_assoc($resultado))
            {
                $publicacaocod = $linha['codPUb'];
                $usuarioLogin = $linha['login'];
                $caminho = "../fotos/".$usuarioLogin.".png";

                echo "<img class='usuario' src='$caminho' alt='img_usuario'>";
                echo "<p class='nomeusuario'>".$linha['login']."</p>";
                echo "<p class='publicacao'>".$linha['texto']." (".conversao_data($linha['data_pub']).")</p>";
                
                if ($linha['cod'] == $codusuario) {
                    ?>
                    <a href="exclusao.php<?php echo '?cod=' . $publicacaocod; ?>" onclick="return confirm ('Tem certeza que deseja excluir essa publicação?')"> 
                        <button class="btnExc">Excluir</button>
                    </a>
                    <br>
            <?php    
            }
        }
    }
    ?>
    <br>
    </body>
</html>

