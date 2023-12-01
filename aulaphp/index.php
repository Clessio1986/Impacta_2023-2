<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="_css/stilo.css">
</head>

<body>
    <a href="home.php">VOLTAR</a>
    <form class="form" action="cadastro.php" method="post">
        <p class="title">Cadastro</p>
        <p class="message">Faça seu cadastro, é grátis!!! </p>

        <div class="flex">
            <label>
                <input required="" placeholder="" type="text" name="nome" class="input">
                <span>Nome</span>
            </label>


            <label>
                <input required="" placeholder="" type="text" name=sobrenome class="input">
                <span>Sobrenome</span>
            </label>
        </div>
        <label>
            <input required="" placeholder="" type="tel" name="telefone" class="input">
            <span>Telefone</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" name="endereco" class="input">
            <span>Endereço</span>
        </label>

        <div class="flex">
            <label>
                <input required="" placeholder="" type="text" name="cidade" class="input">
                <span>cidade</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" name="estado" class="input">
                <span>Estado</span>
            </label>
        </div>

        <label>
            <input required="" placeholder="" type="email" name="email" class="input">
            <span>Email</span>
        </label>

        <label>
            <input required="" placeholder="" type="password" name="senha" class="input">
            <span>Senha</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" name="confirmar" class="input">
            <span>Confirmar Senha </span>
        </label>
        <button class="submit">Registrar</button>
        <p class="signin">Já tem uma conta? <a href="login.php">Entrar</a></p>
    </form>
</body>

</html>