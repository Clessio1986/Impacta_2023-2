<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="_css/stilo.css">
</head>

<body>
    <a href="home.php">VOLTAR</a>
    <form action="testeLogin.php" method="post" class=" form">
        <p class="title">Login</p>
        <p class="message">Entre com seu E-mail e senha! </p>

        <label>
            <input required="" placeholder="" type="text" name=email class="input">
            <span>Email</span>
        </label>

        <label>
            <input required="" placeholder="" type="password" name=senha class="input">
            <span>Senha</span>
        </label>

        </label>
        <input type="submit" name="submit" value="Enviar" class="submit">
        <p class="signin">Não é cadastrado? <a href="index.php">Cadastra-se!</a></p>
    </form>

</body>

</html>