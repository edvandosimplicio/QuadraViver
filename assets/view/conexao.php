<?php
//conectando o nosso codigo com o banco de dados do xamppp
$server = "localhost";
$user = "root";
$pass = "";
$bd = "quadraviver";

$conn = mysqli_connect($server, $user, $pass, $bd);
//testando a conexão
if($conn):
    //echo"conectado";
else:
    echo "Error!";
endif;
?>