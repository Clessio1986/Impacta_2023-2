<?php 
include ("conexao.php");

    $nome= $_POST ['nome'];
    $sobrenome=$_POST ['sobrenome'];
    $telefone=$_POST ['telefone'];    
    $endereco=$_POST ['endereco'];
    $cidade=$_POST ['cidade'];
    $estado=$_POST ['estado'];
    $email=$_POST ['email'];
    $senha=$_POST ['senha'];
    $confirmar=$_POST ['confirmar'];

    header('Location:login.php');
    
    
    $sql="INSERT INTO ususario (nome,sobrenome,telefone,endereco,cidade,estado,email,senha,confirmar) 
    VALUES ( '$nome','$sobrenome','$telefone','$endereco','$cidade','$estado','$email','$senha','$confirmar')";

    if (mysqli_query($conexao, $sql)) {
        echo "Usuario cadastrado com Sucesso";
    }
    else
    {
        echo "Erro ao Cadastrar".mysqli_error($conexao);
    }

 
    mysqli_close($conexao);
    
    

?>