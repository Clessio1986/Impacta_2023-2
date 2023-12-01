<?php
$hostname = "localhost";
$Usuario = "root";
$senha = "";
$bancodedados = "clientes";

 $conexao = mysqli_connect ($hostname,$Usuario,$senha,$bancodedados);

if (!$conexao) {
    die ("HOUVE UM ERRO:" .mysqli_connect_errno());
}

?>