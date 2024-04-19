<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/detalhes.css">
    <script src="./js/detalhes.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/1logo.png" type="image/png">
    <title>Bioéquilibre-detalhes</title>
</head>
<body>

<div class="seta">
<a href="index.php#produtos"><ion-icon name="chevron-back-outline"></ion-icon></a>
</div>


<div class='container'>
<?php
            include 'conexao.php';
            session_start();

            if (isset($_GET['id'])) {
                $produto_id = $_GET['id'];
                $sql = "SELECT * FROM produtos WHERE produto_id = $produto_id";
                $result = $conexao->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $produto_nome = $row['produto_nome'];
                    $produto_img1 = $row['produto_img1'];
                    $produto_img2 = $row['produto_img2'];
                    $produto_img3 = $row['produto_img3'];
                    $produto_tamanho = $row['produto_tamanho'];
                    $produto_descricao = $row['produto_descricao'];
                    $produto_preco = $row['produto_preco'];

                    // Exibir informações do produto

                    echo "<main>";
                
                echo "<div class='slider'>";
                // image-btns
                echo "<div class='image-btn'>";
                echo '<img src="' . $produto_img1 . '" onclick="myFunction(this)">';
                echo '<img src="' . $produto_img2 . '" onclick="myFunction(this)">';
                echo '<img src="' . $produto_img3 . '" onclick="myFunction(this)">';
                echo "</div>";
                
                echo "<div class='image-container'>";
                echo '<img src="' . $produto_img1 . '" id="imageBox">';
                echo "</div>";
                
                echo "</div>"; // fim slider
                
                echo "<div class='textos'>";
                echo "<h1>$produto_nome</h1>";
                echo '<img src="./img/estrelas.png">';
                echo "<p>$produto_tamanho</p>";
                echo "</div>";
                
                echo "<div class='box-buy'>";
                
                echo "<h2>$produto_preco</h2>";
                echo "<hr>";
                echo "<form action='./comprar.php'>";
                echo "<button type='submit'>Comprar</button>";
                echo "</form>";

                // echo "<form method='post' action='./carrinho.php'>";
                // echo "<input type='hidden' name='produto_id' value='" . $produto_id . "'>";
                // echo "<button type='submit'>Adicionar ao carrinho</button>";
                // echo "</form>";

                echo '<div class="pagamentos"><img src="./img/pix.png"></div>';
                echo '<div class="pagamentos"><img src="./img/boleto.png"></div>';
                echo '<div class="pagamentos"><img src="./img/cartoes.png"></div>';
                
                echo "</div>"; // fim container
                
                    echo "</main>";
                
                    echo "<div class='vocesabia'>";
                    echo "<h2>Você sabia?</h2>";
                    echo "<p>$produto_descricao</p>";
                    echo "</div>";

} else {
    echo "Nenhum produto encontrado.";
}
} else {
echo "Nenhum produto encontrado.";
}
// Fechar a conexão com o banco de dados
$conexao->close();
?>




<footer class="footer">
  	 <div class="container-footer">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>companhia</h4>
  	 			<ul>
  	 				<li><a href="./footer-links/sobre_nos.php">sobre nós</a></li>
  	 				<li><a href="./footer-links/politica_pvdd.php">política de privacidade</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>ajuda</h4>
  	 			<ul>
  	 				<li><a href="./footer-links/faq.php">FAQ</a></li>
  	 				<li><a href="./footer-links/retornos.php">retornos</a></li>
  	 				<li><a href="./footer-links/opcoes_pagamento.php">opções de pagamento</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
               <h4>dos criadors</h4>
                    <ul>
                        <li><a>kauê de souza</a></li>
                        <li><a>mariana ferreira</a></li>
                        <li><a>kaue brito</a></li>
                        <li><a>joão pedro</a></li>
                    </ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>redes sociais</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/senaitaubate/?locale=pt_BR"><ion-icon name="logo-facebook"></ion-icon></a>
  	 				<a href="https://www.instagram.com/senaitaubate/"><ion-icon name="logo-instagram"></ion-icon></a>
  	 				<a href="https://www.youtube.com/@escolasenaifelixguisard7939?app=desktop"><ion-icon name="logo-youtube"></ion-icon></a>
  	 				<a href="https://br.linkedin.com/company/escolasenaitaubate"><ion-icon name="logo-linkedin"></ion-icon></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

   </div>  <!--fim classe .container -->

</body>
</html>
