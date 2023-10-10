<?php
include('conexao.php');
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
    header("location: ../html/formlogin.html");
    exit;
}

$codusuario = $_SESSION['cod'];
$sql = ("SELECT * FROM usuario WHERE cod = '$codusuario'");

$resultado = mysqli_query($conn, $sql);

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/edicao.css">
</head>

<body>
        <br>
        <img class="logo" src="../img/Stay Calm.png" alt="logo" width=100 height=100>
        <h2>Alterar Cadastro de Usuário</h2>

        <?php if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {

                $nome = $linha["nome"];
                $data_nasc = $linha["data_nasc"];
                $login = $linha["login"];
                $senha = $linha["senha"];
                $ifcs = $linha["ifcs"];
                $anoEscolar = $linha["turma"];
                $sexo = $linha["sexo"];
            }
        }
        ?>
        <div class="posicao">
        <form action="update.php" method="POST">
            <p>Nome Completo: <input type="text" name="nome" value="<?php echo $nome ?>" required></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc" value="<?php echo $data_nasc ?>" required></p>

            <P>Nome de Usuário: <input type="text" name="login" value="<?php echo $login ?>" required></P>
            <p>Senha: <input type="password" name="senha" value="<?php echo $senha ?>" required></p>

            <P>Você estuda no IFC-Campus Avançado Sombrio?<br>
                <br>
                <input type="radio" name="ifcs" value="1" <?php echo ($ifcs == "1") ? "checked" : null; ?>>Sim
                <br>
                <input type="radio" name="ifcs" value="0" <?php echo ($ifcs == "0") ? "checked" : null; ?>>Não
            </p>

            <p>Ano Escolar:
            <select name="anoEscolar" required>
            </p>
            <option value="1" name="anoEscolar" <?php echo ($anoEscolar == "1") ? "selected" : null; ?>>1° ano </option>
            <option value="2" name="anoEscolar" <?php echo ($anoEscolar == "2") ? "selected" : null; ?>>2° ano </option>
            <option value="3" name="anoEscolar" <?php echo ($anoEscolar == "3") ? "selected" : null; ?>>3° ano </option>
            </select>

            <p>Qual seu gênero?<br>
                <br>
                <input type="radio" name="sexo" value="F" <?php echo ($sexo == "F") ? "checked" : null; ?>>Feminino
                <br>
                <input type="radio" name="sexo" value="M" <?php echo ($sexo == "M") ? "checked" : null; ?>>Masculino
                <br>
                <input type="radio" name="sexo" value="O" <?php echo ($sexo == "O") ? "checked" : null; ?>>Outro
            </p>
            <br>
            <input type="submit" value="Enviar" class="btnEnviar" name="btnEnviar">

            
            <a href="biblioteca.php">
                <input type="button" class="btnVoltar" value="Voltar">
            </a>
        </form>
    </div>
</body>
</html>