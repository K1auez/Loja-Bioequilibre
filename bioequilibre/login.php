<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login_cadastro.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/1logo.png" type="image/png">
    <title>Bioéquilibre-Login</title>
</head>

<!-- corpo da pagina -->
<body>

<div class="seta">
<a href="redirecionar.php"><ion-icon name="chevron-back-outline"></ion-icon></a>
</div>

<div class="login-container">

        <img src="./img/1logo.png">
        <h1>Bem-vindo(a) de volta</h1>

        <form action="./back-end/login_processo.php" method="post">
            <!-- <div class="social-icons">
            <a href="#"><ion-icon name="logo-google"></ion-icon></a>
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            </div> -->
            <span>Entre com seu email e senha</span>
            <input type="text" id="username" name="username" placeholder="Endereço de email">
            <input type="password" id="password" name="password" placeholder="Senha">
            <button type="submit">Continuar</button>
        </form>

        <a href="redefinir.php">Esqueceu a senha? Clique aqui</a>
        <a href="cadastro.php">Não tem uma conta? Clique aqui</a>
</div>

</body>
<!-- fim corpo da pagina -->
</html>