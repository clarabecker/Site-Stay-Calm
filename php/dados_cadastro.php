<?php 
    include ('conexao.php');

    if(isset($_POST['btnEnviar']))  {

        $login = $_POST ['login'];
        $senha = $_POST ['senha'];
        $nome = $_POST ['nome'];
        $anoEscolar = $_POST ['anoEscolar'];
        $sexo = $_POST ['sexo'];
        $data_nasc = $_POST ['data_nasc'];
        $ifcs = $_POST ['ifcs'];

        $sql = "INSERT INTO usuario (login , senha, nome, turma , sexo, data_nasc, ifcs)
        VALUES ('$login', '$senha', '$nome','$anoEscolar', '$sexo', '$data_nasc', '$ifcs')";
          
        if(mysqli_query($conn, $sql)) 
        {

          if (isset($_FILES['img'])) {
              $target_file = "../fotos/" . $login . ".png";
              if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "ok";
              } 
            }

            echo "<script> alert('Usuário cadastrado com sucesso.') 
            window.location.href='http://localhost/staycalm/html/formlogin.html'</script>";
        }
        else 
        {
              echo "<script> alert('Ocorreu algum erro.') 
              window.location.href='http://localhost/staycalm/html/Cadastro.html'</script>";
        }    
    }   
?>