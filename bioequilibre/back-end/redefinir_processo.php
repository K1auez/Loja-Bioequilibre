<?php

include '../conexao.php';


$email = $_POST['email'];
$senhaAtual = md5($_POST['senha']); 
$novaSenha = md5($_POST['new-password']);

$stmt = $conexao->prepare("SELECT * FROM cadastro WHERE cadastro_email = ? AND cadastro_senha = ?"); 
$stmt->execute([$email, $senhaAtual]);
$user = $stmt->fetch();

if ($user) {
    
    $stmt->close();


    $stmt = $conexao->prepare("UPDATE cadastro SET cadastro_senha = ? WHERE cadastro_email = ?");
    $stmt->execute([$novaSenha, $email]);
    print"<script>alert('Senha alterada com sucesso!');</script>";
    print"<script>location.href='../login.php';</script>";   
} else {
    print"<script>alert('Email ou senha incorretos');</script>";
    print"<script>location.href='../redefinir.php';</script>";
}
?>
