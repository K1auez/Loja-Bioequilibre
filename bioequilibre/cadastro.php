<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login_cadastro.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/logo.png" type="image/png">
    <title>Bioéquilibre-Cadastro</title>
</head>

<!-- corpo da pagina -->
<body>

<div class="seta">
<a href="redirecionar.php"><ion-icon name="chevron-back-outline"></ion-icon></a>
</div>

<div class="login-container">

        <img src="./img/1logo.png">
        <h1>Olá! Crie sua conta</h1>

        <form action="./back-end/cadastro_processo.php" method="post">
            <!-- <div class="social-icons">
            <a href="#"><ion-icon name="logo-google"></ion-icon></a>
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            </div> -->
            <span>Registre-se abaixo</span>
            <input type="text" name="nome" placeholder="Nome de usuário">
            <input type="email" name="email" placeholder="Endereço de email">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Continuar</button>
        </form>

        <a href="login.php">Já tem uma conta? Clique aqui</a>
</div>

</body>
<!-- fim corpo da pagina -->
</html>