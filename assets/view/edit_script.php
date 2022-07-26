<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Alteração de cadastro</title>
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
        <li><a href="<?php echo 'listaUser.php'?>">Voltar para lista de usuários</a></li>
            <li><a href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
            <li><a href="<?php echo 'login.php'?>">Login</a></li>
            
        </ul>
    </header>


    <!--CADASTRO DE USUÁRIO-->

    <div class="center">
        <main class="container">
        <?php
          include "conexao.php";
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];
          $confsenha = $_POST['confsenha'];
          $cpf = $_POST['cpf'];
          
          //CRIANDO UPDATE/editar
          $sql = "UPDATE `usuario` set `nome` = '$nome', `email` = '$email', `senha` = '$senha', `cpf` = '$cpf' WHERE id =  $id";
          
          if(mysqli_query($conn, $sql)):
            echo "$nome, alterado com sucesso em nosso sistema!";
          else:
            echo "$nome, infelizmente não conseguimos alterar seus dados em nosso sistema.";
          endif;
          ?>
   </div>       
    <script src="../javascript/validacao_cpf.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>