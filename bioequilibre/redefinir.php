<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/redefinir.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/1logo.png" type="image/png">
    <title>Bioéquilibre-Senha</title>
</head>

<!-- corpo da pagina -->
<body>

<div class="seta">
<a href="redirecionar.php"><ion-icon name="chevron-back-outline"></ion-icon></a>
</div>

<div class="login-container">

        <img src="./img/1logo.png">
        <h1>Esqueceu a senha?</h1>

        <form action="./back-end/redefinir_processo.php" method="post">
            <span>Redefina sua senha</span>
            <input type="text" id="email" name="email" placeholder="Endereço de email">
            <input type="password" id="password" name="senha" placeholder="Senha atual">
            <input type="password" id="new-password" name="new-password" placeholder="Nova senha">
            <button type="submit">Continuar</button>
        </form>

        <a href="cadastro.php">Precisa de uma conta nova? Clique aqui</a>
</div>

</body>
<!-- fim corpo da pagina -->
</html>