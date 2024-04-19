<?php
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto_id'])) {
    $produto_id = $_POST['produto_id'];

    // Use prepared statements para evitar SQL injection
    $sql = "DELETE FROM produtos WHERE produto_id = ?";
    $stmt = mysqli_prepare($conexao, $sql);

    // Verifique se a preparação da declaração foi bem-sucedida
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $produto_id);
        mysqli_stmt_execute($stmt);

        // Verifique se a exclusão foi bem-sucedida
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header('location:../index_adm.php#produtos');
            exit(); 
        } else {
            echo "Produto não encontrado ou não foi possível excluir.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Erro na preparação da declaração: " . mysqli_error($conexao);
    }

    header('Location: ./index_adm.php');
    exit();
}


?>