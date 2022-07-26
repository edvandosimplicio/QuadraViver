<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/style_login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <section>
        <header>
            <a href="<?php echo 'index.php'?>"><span class="logo">
                    <ion-icon id="football" name="football-outline"></ion-icon>
                </span></a>
            <a href="<?php echo 'index.php'?>">
                <h1>Quadra VIVER</h1>
            </a>
            <ul>
                <li><a href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
            </ul>
        </header>
        </header>

        <!--LOGIN DE USUÁRIO-->
        <div class="center">
            <main class="container">
                <h2>Login</h2>

                <form id="caixa" action="../php/logar.php" method="post">
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="E-mail">
                        <div class="underline teste"></div>
                    </div>

                    <div class="input-field">
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                        <div class="underline"></div>
                    </div>

                    <div class="botoes">
                        <div class="cadastrar">
                            <a href="<?php echo 'cadastro.php'?>">
                                <button id="cadastro" type="button">Cadastre-se</button>
                            </a>
                        </div>
                        <button id="botao" type="submit">Entrar</button>
                    </div>
                </form>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>