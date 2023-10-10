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
        <title>Autocuidado</title>
        <link rel="stylesheet" type="text/css" href="../css/biblioteca.css">
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
        <h2 class="subt">Autocuidado</h2 class="subt">
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
        <h2>O que é autocuidado?</h2>
           <p>É o conjunto de práticas, hábitos e condutas saudáveis que uma pessoa prática visando seu bem estar, cuidando de si mesma em vários aspectos que compõem a existência humana. Como, por exemplo saúde, família, vida profissional, vida amorosa, vida social, etc. </p> 
        <h2>Por que autocuidado é importante para lidar com a ansiedade?</h2>
            <p>A saúde mental e a física estão diretamente ligadas, quando a saúde física está em um estado precário prejudica a saúde mental e vice-versa. Se você não possui um autocuidado pode prejudicar sua saúde mental, pois não está cuidando de sua saúde física. Quando você entende a importância do autocuidado, passa diretamente a cuidar também de sua saúde mental. Por exemplo, quando você ou alguém que você conhece não come bem, não dorme bem, vai a escola apenas por obrigação, não tem vontade de sair com amigos, esse individuo não está praticando autocuidado. </p>
        <h2>Como praticar o autocuidado?</h2>
            <p>O principal é cuidar de sua saúde física, dormir bem, comer de forma mais saudável, cuidar de sua higiene pessoal. Mas temos que ter cuidado, o autocuidado não está ligado a uma questão estética, ele se refere ao que faz você se sentir bem e sua qualidade de vida. Outra prática muito importante para o autocuidado é a socialização, aproxime-se das pessoas que te faz se sentir bem, não se isole socialmente. Muito importante ressaltar que terapia também faz parte do autocuidado, a terapia não é somente para tratamento de transtornos mentais, ela também é para pessoas que querem cuidar de sua saúde mental, se autoconhecer e clarear dúvidas sobre o futuro. </p>
        <br>
    </article>
    <a href="publicação.php">
        <input type="button" value="Veja as publicações de outros usuários" class="btninf">
    </a>
    <br>
    </section>
</html>