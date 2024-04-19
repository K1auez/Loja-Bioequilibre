<?php
include '../conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["busca"];
    $sql = "SELECT * FROM produtos WHERE produto_nome LIKE '%$search%'";
    $result = $conexao->query($sql);
}
?>



    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/busca.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="icon" href="../img/logo.png" type="image/png">
        <title>BioÉquilibre</title>
    </head>




    <body>

<div class="seta">
<a href="../index.php#produtos"><ion-icon name="chevron-back-outline"></ion-icon></a>
</div>

    <h1 id="produtos">Produtos</h1>

<div class="box-busca">
<div class="search-box">
        <form method="post" action="busca.php">
        <input type="text" class="search-box-input" name="busca" placeholder="Faça sua Pesquisa">
        <button class="search-box-button"><ion-icon class="search-icon" name="search"></ion-icon></button>
        </form>
</div>
</div>

                    <section class="products">
                    <div class="all-products">
                    <?php
                            if (isset($result) && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                $produto_id = $row['produto_id'];
                                $produto_nome = $row['produto_nome'];
                                $produto_preco = $row['produto_preco'];
                                $produto_img1 = $row['produto_img1'];

                                echo "<a href='../detalhes.php?id=$produto_id'>";
                                echo "<div class='product'>";
                                echo "<img src='$produto_img1'>";
                                echo "<div class='product-info' id='produto_$produto_id'>";
                                echo "<h4 class='product-title'>$produto_nome</h4>";
                                echo "<p class='product-price'>R$$produto_preco</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</a>";
                                }
                            } else {
                                echo "Nenhum produto encontrado."; // Caso nenhum resultado seja encontrado
                            }
                    ?>
                    </div>
                    </section>

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

    </body>

    </html>