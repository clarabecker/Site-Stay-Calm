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
        <title>Dicas de Estudo</title>
        <link rel="stylesheet" type="text/css" href="../css/dicasorg.css">
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
        <h2 class="subt">Dicas de Estudo e Organização</h2></h2 class="subt">
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
        <h2>Como começar a estudar?</h2>  
            <p>1° Esteja disposto, sem ânimo você não consegue ter um tempo de estudo produtivo, por isso é bom praticar o autocuidado, para saber mais clique <a class="link1" href ="autocuidado.php">aqui</a>. </p> 
            <p>2° Escolha um ambiente de estudos, que de preferência seja silencioso, livre de distrações e bem iluminado e que você se sinta confortável. Não é recomendado estudar em lugares de lazer e descanso, como a sala e a cama por exemplo. Se o lugar não for silencioso você pode usar fone pra ouvir música enquanto estuda. </p>
            <p>3° Estabeleça metas, crie objetivos, imagine o seu futuro e pense o que você pode fazer no presente. Determine também suas prioridades no estudo, se organize, separe as matérias que você acha fácil, médio e difícil que muitas vezes são as matérias que você nunca tinha ouvido falar. Separe mais do seu tempo para as matérias difíceis e alguns minutos para revisar aquela que você tem menos dificuldade.</p>
            <p>4° Respeite sua rotina, se você passa o dia estudando em uma instituição como o Instituto Federal, separe um tempo para estudo quando chegar em casa, mas não se esqueça de separar um tempo para o lazer.</p>
            <p>5° Respeite também seu tempo de aprendizagem, é normal não entender um conteúdo ou como realizar uma questão “de primeira”, tenha paciência, continue estudando, pesquise, tire duvidas com quem está próximo de você.</p>
        <h2>Formas de se organizar</h2>
        <p>Pode ser utilizando uma agenda ou planner, existem pessoas que só conseguem se organizar anotando, o importante é visualizar seus compromissos e sua rotina. O planner apesar de ter um preço um pouco mais caro, se mostra mais dinâmico que a agenda. </p>
        <p>Você também pode utilizar a tecnologia a seu favor, utilizando apps para organização como Google agendas, Trello ou até mesmo se organizar através de planilhas. </p>
        </article>
    <a href="publicação.php">
        <input type="button" value="Veja as publicações de outros usuários" class="btninf">
    </a>
    <br>
    </section>
</html>