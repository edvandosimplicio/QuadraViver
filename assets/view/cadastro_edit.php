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
<?php
    //criando o GETT
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM usuario WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);
     ?>




    <header>
        <a href="<?php echo 'index.php'?>"><span class="logo">
                <ion-icon id="football" name="football-outline"></ion-icon>
            </span></a>
        <a href="<?php echo 'index.php'?>">
            <h1>Quadra VIVER</h1>
        </a>
        <ul>
            <li><a href="<?php echo 'listaUser.php'?>">Voltar para a lista de usuários</a></li>
            <li><a href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
            <li><a href="<?php echo 'login.php'?>">Login</a></li>
            
        </ul>
    </header>


    <!--CADASTRO DE USUÁRIO-->

    <div class="center">
        <main class="container">
            <h2>Alteração de cadastro - usuário</h2>
            <form action="edit_script.php" method="POST">
                <!--Nome-->
                <div class="input-field">
                    <label for="">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required value="<?php echo $linha['nome']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--E-mail-->
                <div class="input-field">
                    <label for="">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required value="<?php echo $linha['email']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--Senha-->

                <div class="input-field">
                    <label for="">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required value="<?php echo $linha['senha']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--Conf. Senha-->

                <div class="input-field">
                    <label for="">Confirmar Senha</label>
                    <input type="password" id="confsenha" name="confsenha" placeholder="Confirme sua senha" required>
                    <div class="underline"></div></br>
                </div>

                <!--CPF-->

                <div class="input-field">
                    <label for="">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required maxlength="14"
                        autocomplete="off" onkeyup="mascara_cpf() " value="<?php echo $linha['cpf']; ?>">
                    <div class="underline"></div></br>
                </div>
                
                <div class="botoes">
                    <button class="cadastro-btn" type="submit">Salvar alterações</button>
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                </div>
            </form>
   
   
    
    <script src="../javascript/validacao_cpf.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>