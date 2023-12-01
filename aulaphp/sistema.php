<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{   
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
 $logado= $_SESSION['email'];
 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="_css/stilo2.css">
    <script>
    function mudaFoto(foto) {
        document.getElementeById("icone").src = foto;
    }
    </script>
    <style>
    .container {
        display: flex;
        justify-content: flex-end;
        flex-wrap: wrap;
        height: 60px;
        background-color: white;

        align-content: space-between;

        box-shadow: 10px 10px 5px rgba(0, 0, 0, .1);



    }

    h1 {
        color: white;
        position: absolute;
        left: 5%;
        text-shadow: 1px 1px 1px #000;
        animation: move-shadow 1s linear infinite;
    }

    @keyframes move-shadow {
        0% {
            text-shadow: 1px 1px 1px #000;
        }

        100% {
            text-shadow: -1px -1px 1px #000;
        }
    }



    .item {
        flex-basis: 100px;

        width: 10%;
        text-align: center;
        list-style-type: none;
        background-color: royalblue;
        color: white;
        border-radius: 8px;
        padding: 8px;
        margin: 10px;
        transition: 1s ease-in-out;


    }




    .item1 {
        flex-basis: 100px;
        color: white;
        width: 10%;
        text-align: center;
        list-style-type: none;
        background-color: royalblue;
        border-radius: 8px;
        padding: 8px;
        margin: 10px;

    }

    .item2 {
        flex-basis: 100px;
        width: 10%;
        text-align: center;
        list-style-type: none;
        background-color: royalblue;
        border-radius: 8px;
        padding: 8px;
        margin: 10px;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        color: white;
        transition: 0.5s ease-in-out;
    }

    .rodape {
        display: flex;

        flex-wrap: wrap;

        background-color: Ivory;
        align-items: stretch;
    }

    .caixa1 {

        width: 100%;
        background-color: Gainsboro;
    }

    footer {
        height: 1cm;
        background-color: #ccc;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        text-align: center;
        padding: 8px;
    }

    #icone {
        width: 120px;
        height: 50px;
        position: absolute;
        top: px;
        right: 85%;


    }
    </style>
</head>


<body>
    <header>

        <ul class="container">

            <img id="icone" src="_imagens/impacta1.png">


            <li onmousemove="mudaFoto('_imagens/impacta.png')" class="item"><a href="home.php">Home</a></li>
            <li class="item1"><a href="index.php">Cadastro</a></li>
            <li class="item2"><a href="formulario.php">Fale Conosco</a></li>
        </ul>

        <form class="form" action="calcular.php" method="post">
            <p class="title"> Calculadora</p>
            <p class="message">Indice de Massa Corporal!!! </p>
            <label>
                <input required="" placeholder="" type="number" name="peso" class="input">
                <span>Digite seu peso</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" name="altura" class="input">
                <span>Digite sua altura</span>
            </label>
            <button class="submit">Calcular</button>


        </form>
    </header>
</body>


</html>