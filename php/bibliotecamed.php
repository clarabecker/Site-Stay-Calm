<?php
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
        <title>Meditação Guiada</title>
        <link rel="stylesheet" type="text/css" href="../css/bibliotecames.css">
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
        <h2 class="subt">Meditação</h2 class="subt">
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
        <p>Meditação para FOCO, CONCENTRAÇÃO e APRENDIZADO nos estudos- PROVAS, Enem, CONCURSOS</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Hfptig4uHmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <p>MEDITAÇÃO para Estudos e Provas - Concursos Públicos, Exame da OAB, Faculdade, Vestibular e Enem</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/J3e-22bohpQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <p>Meditação Guiada - 10 minutos! | Foco, harmonia, paz interior...Mindfulness!</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QQkRN4tjHns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
    </article>
    <a href="publicação.php">
        <input type="button" value="Veja as publicações de outros usuários" class="btninf">
    </a>
    </section>
    

</html>