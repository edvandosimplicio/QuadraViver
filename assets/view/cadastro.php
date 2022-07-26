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
            <h2>Cadastro - Usuário</h2>
            <form action="cadastro_script.php" method="post">
                <!--Nome-->
                <div class="input-field">
                    <label for="">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required autocomplete="off">
                    <div class="underline"></div></br>
                </div>

                <!--E-mail-->
                <div class="input-field">
                    <label for="">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    <div class="underline"></div></br>
                </div>

                <!--Senha-->

                <div class="input-field">
                    <label for="">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
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
                        autocomplete="off" onkeyup="mascara_cpf()">
                    <div class="underline"></div></br>
                </div>
                
                <div class="botoes">
                   

                    <button class="cadastro-btn" type="submit">Cadastrar</button>
                </div>
            </form>
   
   
    
    <script src="../javascript/validacao_cpf.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>