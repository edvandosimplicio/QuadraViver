<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastroStyles.css" />
</head>

<body>
    <header>
        <a href="<?php echo 'index.php'?>"><span class="logo">
                <ion-icon id="football" name="football-outline"></ion-icon>
            </span></a>
        <a href="<?php echo 'index.php'?>">
            <h1>Quadra VIVER</h1>
        </a>
        <ul>
            <li><a href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
            <li><a href="<?php echo 'login.php'?>">Login</a></li>
            
        </ul>
    </header>


    <!--CADASTRO DE USUÁRIO-->

    <div class="center">
        <main class="container">
        <?php
          include "conexao.php";

          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];
          $confsenha = $_POST['confsenha'];
          $cpf = $_POST['cpf'];
          
          //CRIANDO POST
          $sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`, `cpf`) VALUES ('$nome','$email','$senha','$cpf')";
          
          if(mysqli_query($conn, $sql)):
            echo "$nome, cadastrado com sucesso em nosso sistema!";
          else:
            echo "$nome, infelizmente não conseguimos cadastra-lo em nosso sistema.";
          endif;
          ?>
   </div>       
    <script src="../javascript/validacao_cpf.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>