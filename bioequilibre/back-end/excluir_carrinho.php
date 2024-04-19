<?php
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Use prepared statements para evitar SQL injection
    $sql = "DELETE FROM carrinho WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $sql);

    // Verifique se a preparação da declaração foi bem-sucedida
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        // Verifique se a exclusão foi bem-sucedida
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header('location:../carrinho.php');
            exit(); 
        } else {
            echo "Produto não encontrado ou não foi possível excluir.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Erro na preparação da declaração: " . mysqli_error($conexao);
    }

    header('location:../carrinho.php');
    exit();
}


?>