<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    body {
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        text-align: center;
        color: white;

    }

    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.4);
        padding: 30px;
        border-radius: 10px;

    }

    a {
        text-decoration: none;
        border: 3px solid royalblue;
        color: white;
        border-radius: 10px;
        padding: 10px;
    }

    a:hover {
        background-color: royalblue;
        transition: 2s;
    }
    </style>
</head>

<body>
    <h1>IMPACTA 2023</h1>

    <div class="box">
        <a href="login.php">Login</a>
        <a href="index.php">Cadastra-se</a>
    </div>
</body>

</html>