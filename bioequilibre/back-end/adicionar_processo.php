<?php
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $tamanho = $_POST['tamanho'];
    $vocesabia = $_POST['vocesabia'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

   
$sql = "INSERT INTO produtos (produto_nome, produto_preco, produto_tamanho, produto_descricao, produto_img1, produto_img2, produto_img3) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sssssss", $nome, $preco, $tamanho, $vocesabia, $img1, $img2, $img3);

if (mysqli_stmt_execute($stmt)) {
    // Success
    header('location:../index_adm.php#produtos');
    exit();
} else {
    // Error
    echo "Erro ao inserir o produto: " . mysqli_error($conexao);
}
mysqli_stmt_close($stmt);
}
?>