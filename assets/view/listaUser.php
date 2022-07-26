<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" </head>
    <title>Lista de Funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css de wallace-->
    <link rel="stylesheet" href="../css/lista_User.css" />
</head>

<body class="b-corpo">
    <header>
        <nav class="container-side">
            <div class="link">
                <div class="texto">
                    <a class="link1" href="<?php echo 'index.php' ?>" style="letter-spacing: 0.5px; font-size: 1.5em; align-items: center;">Quadra VIVER
                        </strong></a>
                </div>
            </div>

            <div class="link">
                <div class="texto">
                    <a class="link1" href="<?php echo 'index.php' ?>">
                        <span class="ani">
                            Pagina Inicial 
                        </span>
                    </a>
                </div>
            </div>

            <div class="link">
                <div class="texto">
                    <a class="link1" href="<?php echo 'login.php' ?>">
                        <span class="item-login ani">
                            Login
                        </span>
                    </a>
                </div>
            </div>


    </header>
<div class="title"><span>Lista de usuários cadastrados</span></div>
    <table class="content-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th>Usuário</th>
                <th class="btn-crud">Ação</th>
            </tr>
        </thead>

        <!--CHAMANDO E COLOCANDO USUÁRIOS CADASTRADO EM UMA TABELA-->
        <tbody>
            <?php
            include "conexao.php";

            $sql = "SELECT * FROM usuario WHERE id";

            $dados = mysqli_query($conn, $sql);


            while ($linha = mysqli_fetch_assoc($dados)) {
                $id = $linha['id'];
                $nome = $linha['nome'];
                $email = $linha['email'];
                $cpf = $linha['cpf'];

                echo "<tr>
                <th>$nome</th>
                <th>$email</th>
                <th>$cpf</th>
                <th>$id</th>
                <td class='btn-crud'>
                <a class='btn-edit-delete' href='cadastro_edit.php?id=$id'><i class='fa fa-pencil'aria-hidden='true'></i></a>
                <a class='btn-edit-delete' href='#'><i class='fa fa-trash-o' aria-hidden='true' data-toggle='modal' data-target='#confirma'onclick=" .'"' ."pegar_dados($id, '$nome')" .'"' ."></i></a>
                </td>
            </tr>";
            }
            ?>

    </table>
    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="excluir_script.php" method="POST">
                        <p>Tem certeza que deseja excluir: <b id="nome_pessoa">Nome da pessoa</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal" aria-label="Close">Não</button>
                    <input type="hidden" name="nome" id="nome_pessa_1" value="">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="submit" class="btn btn-danger" value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessa_1').value = nome;
            document.getElementById('id').value = id;
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>