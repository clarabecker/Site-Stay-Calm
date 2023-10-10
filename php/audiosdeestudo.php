<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false){
    header("location: ../html/formlogin.html");
    exit;
}
?>
<html lang="pt">
    
    <head>
        <meta charset="UTF-8">
        <title>Músicas para estudo</title>
        <link rel="stylesheet" type="text/css" href="../css/audiosdeestudo.css">
    </head>
    <body>
        <form action="logout.php" method="POST">
        <input type="submit" value="Sair" name="btnLogout" class="btnsup">
        </form>
        <a href ="edicao.php">
            <input type="submit" value="Meu Cadastro" name="cadastro" class="btnshow">
        </a>
        <header>
        <h1>Selecione seu Conteúdo de interesse</h1> 
        </header>
        <img class="logo" src="../img/Stay Calm.png" alt="logo" width=100 height=100>
        <h2 class="subt">Músicas para Estudo</h2 class="subt">
    <section>

    <nav>
        <ul class="menu">
        <li><a href="biblioteca.php">Técnicas de Respiração</a></li>
		<li><a href="bibliotecamed.php">Meditação Guiada</a></li>
        <li><a href="autocuidado.php">Autocuidado</a></li>
	    <li><a href="audiosdeestudo.php">Músicas para Estudo</a></li>
	    <li><a href="dicasorg.php">Dicas de  Estudo e Organização</a></li>		
    </ul>
    </nav>

    <article> 
    <h2>Por que estudar ouvindo música?</h2>
    <p>Segundo muitos pesquisadores a música ajuda na concentração e melhora o aprendizado, porém é necessário se atentar na escolha das músicas, porque também pode atrapalhar sua concentração e prejudicar a memorização. Como o gosto musical varia de pessoa para pessoa, é recomendado fazer um teste com estilos musicais diferentes, até descobrir o que funciona para você. </p>
    <br>
    <h2>Recomendações</h2>
    <p>Música clássica, contemplando compositores como Bach, Mozart e Chopin. Confira no Spotify <a class ="links" href="https://open.spotify.com/playlist/37i9dQZF1DX8NTLI2TtZa6">aqui</a>!</p>
    <p>Músicas instrumentais no piano, com músicas mais tranquilas. Confira no Spotify <a class ="links" href="https://open.spotify.com/playlist/37i9dQZF1DX4sWSpwq3LiO">aqui</a>!</p>
    <p>Sons pacíficos da natureza. Confira no Spotify  <a class ="links" href="https://open.spotify.com/playlist/37i9dQZF1DX4PP3DA4J0N8">aqui</a>!</p>
    <p>Lofi é muito popular como música para estudo e concentração. Confira no Spotify  <a class ="links" href="https://open.spotify.com/playlist/37i9dQZF1DWWQRwui0ExPn">aqui</a>!</p>
    <p>Outra alternativa é o jazz, com musicas instrumentais. Confira no Spotify <a class ="links" href="https://open.spotify.com/playlist/1dHJUpqHMRbGN3kpMJDw0T">aqui</a>!</p>
    <br>
    <p>Se até aqui você não achou nenhuma recomendação interessante, você pode tentar escutar a trilha sonora de seu filme ou jogo favorito enquanto estuda.</p>
    </article>
    <a href="publicação.php">
        <input type="button" value="Veja as publicações de outros usuários" class="btninf">
    </a>
    <br>
    </section>
</html>