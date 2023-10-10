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
        <title>Técnicas de Respiração</title>
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
        <h2 class="subt">Técnicas para lidar com  ansiedade</h2 class="subt">
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
        <h2>Você já tem acesso a algo incrível: a sua respiração!</h2>
           
           <p>A respiração é uma ferramenta natural do nosso corpo. Mas, você sabia que nem todo 
            mundo o faz da maneira correta? Você sabia que a respiração correta ajuda a diminuir 
            a ansiedade? Isso acontece porque ela ajuda a diminuir a frequência do batimento 
            cardíaco e a pressão arterial, o que nos deixa mais relaxados. 
            Desta forma, pela respiração, é possível alterar os estados emocionais e até o humor, 
            fazendo com que a ansiedade seja controlada pelo ritmo respiratório. </p> 
            <p>Exercícios de respiração são ótimos para que seu organismo aprenda a respirar de 
                forma automática, mas da maneira correta. Para continuarmos a leitura, preparei um 
                exercício para que você comece a partir de agora a sentir a sua respiração da maneira 
                certa!</p>
            <p>Sinta a sua respiração.</p>
            <p>Deixe fluir sua respiração.</p> 
            <p>Conte quantas vezes você respira no período de 10 segundos.</p>
            <p>Agora, inspire lentamente.</p>
            <p>Também lentamente, coloque uma mão na barriga e expire.</p>
            <p>Sinta o ar entrando e saindo de seu corpo.</p>
            <br>
            <p>Autora: Psicóloga Thaiana F. Brotto</p>
            <p>Livro "20 estratégias práticas e eficientes para controlar a ansiedade"
            </p>
            <br>
        <br>
    </article>
    <a href="publicação.php">
        <input type="button" value="Veja as publicações de outros usuários" class="btninf">
    </a>
    <br>
    </section>
</html>