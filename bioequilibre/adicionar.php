<?php
include './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adicionar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/1logo.png" type="image/png">
    <title>Bioéquilibre-adicionar</title>
</head>

<!-- inicio corpo da pagina  -->
<body>

<div class="seta">
<a href="./index_adm.php#produtos"><ion-icon name="chevron-back-outline"></ion-icon></a>
</div>

<main>

<h2>Adicione um novo produto aqui</h2>

<form method="POST" action="./back-end/adicionar_processo.php">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required>
        
        <label for="preco">Preço:</label>
        <input type="text" name="preco" required>

        <label for="img1">Link imagem 1:</label>
        <input type="text" name="img1" required>

        <label for="img2">Link imagem 2:</label>
        <input type="text" name="img2" required>

        <label for="img3">Link imagem 3:</label>
        <input type="text" name="img3" required>
        
        <label for="preco">Descrição:</label>
        <input type="text" name="tamanho" required>

        <label for="preco">Você Sabia:</label>
        <input type="text" name="vocesabia" required>

        
        <button type="submit">Continuar</button>
    </form>

</main>

</body>
<!-- fim corpo da pagina  -->

</html>


