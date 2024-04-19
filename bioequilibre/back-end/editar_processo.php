<?php
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = isset($_POST['produto_id']) ? $_POST['produto_id'] : '';
    // SQL para obter os dados do produto pelo ID
    $sql = "SELECT * FROM produtos WHERE produto_id=$produto_id";
    $resultado = mysqli_query($conexao, $sql);
    $produto = mysqli_fetch_assoc($resultado);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $preco = isset($_POST['preco']) ? $_POST['preco'] : '';
        $tamanho = isset($_POST['tamanho']) ? $_POST['tamanho'] : '';
        $vocesabia = isset($_POST['vocesabia']) ? $_POST['vocesabia'] : '';
        $img1 = isset($_POST['img1']) ? $_POST['img1'] : '';
        $img2 = isset($_POST['img2']) ? $_POST['img2'] : '';
        $img3 = isset($_POST['img3']) ? $_POST['img3'] : '';
        // Adicione aqui os outros campos

        // SQL para atualizar o produto no banco de dados
        $sql = "UPDATE produtos SET produto_nome='$nome', produto_preco='$preco', produto_tamanho='$tamanho', produto_descricao='$vocesabia', produto_img1='$img1', produto_img2='$img2', produto_img3='$img3' WHERE produto_id=$produto_id";
        
        if (mysqli_query($conexao, $sql)) {
            header('location:../index_adm.php#produtos');
            exit(); 
        } else {
            echo "Erro ao atualizar o produto: " . mysqli_error($conexao);
        }
    }
} else {
    echo "ID do produto não fornecido.";
}

?>