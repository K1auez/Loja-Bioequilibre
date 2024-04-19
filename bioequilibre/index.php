<?php
session_start();
include './conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/1logo.png" type="image/png">
    <title>Bioéquilibre</title>
</head>

<!-- inicio corpo da pagina  -->
<body>

    <header> <!-- cabecalho -->
    <div class="interface">

            <div class="logo">
            <img src="./img/1logo.png">
            </div>

            <nav class="menu-desktop">
                <ul>
                    <li><a href="./footer-links/sobre_nos.php">Sobre</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                </ul>
            </nav>

            <div class="btns">
            <?php
                // echo '<div class="btn-a">';
                // echo "<a href='carrinho.php' class='add-to-cart-button' onclick='addToCart()'><ion-icon name='cart-outline' class='cart-icon'></ion-icon><span>Carrinho</span></a>";
                // echo "<span id='cart-count'>0</span>";
                // echo "</div>";
             ?>

            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<div class="btn-a">';
                    echo '<a class="btn-sair" href="./back-end/logout.php"><ion-icon name="exit-outline"></ion-icon><span>Sair</span></a>';
                    echo '</div>';
                } else {
                    echo '<div class="btn-a">';
                    echo '<a href="redirecionar.php"><ion-icon name="person"></ion-icon><span>Entrar</span></a>';
                    echo '</div>';
                }
            ?>
            </div>

    </div>
    </header> <!-- fim do cabecalho -->

    <main><!-- comeco da primeira parte -->

    <section>
        <div class="home-content">
        <h1>Oi, somos BioÉquilibre!</h1>
        <h3>A maior empresa de venda de embalagens sustentáveis e ecológicas.</h3>
        <p>Quando escolhemos caixas ecológicas, não estamos apenas optando por um produto,
        estamos tomando uma decisão consciente de priorizar a saúde do nosso planeta,
        proteger os recursos naturais para as gerações futuras e fazer a diferença na
        luta contra a degradação ambiental. Faça uma escolha que o futuro agradecerá!</p>

        <div class="btn-prod">
        <a href="#produtos">Ir para produtos</a>
        </div>

        </div>

        <div class="home-img">
        <img src="./img/kraft1.png">
        </div>
    </section>

    </main><!-- final da primeira parte -->

    <div class="produtos"><!-- comeco da segunda parte (produtos) -->

    <h1 id="produtos">Produtos</h1>

        <div class="box-busca">
        <div class="search-box">
                <form method="post" action="./back-end/busca.php">
                <input type="text" class="search-box-input" name="busca" placeholder="Faça sua Pesquisa">
                <button class="search-box-button"><ion-icon class="search-icon" name="search"></ion-icon></button>
                </form>
        </div>
        </div>



        <div class="all-products">
                    <?php
                    $sql = "SELECT * FROM produtos"; // Consulta SQL para selecionar todos os registros da tabela 'produtos'
                    $result = $conexao->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Aqui, você pode acessar os campos da tabela usando $row['nome_do_campo']
                            $produto_id = $row['produto_id'];
                            $produto_nome = $row['produto_nome'];
                            $produto_preco = $row['produto_preco'];
                            $produto_img1 = $row['produto_img1'];
                            // Exiba os dados na sua estrutura HTML
                            echo "<a href='detalhes.php?id=$produto_id'>";
                            echo "<div class='product'>";
                            echo "<img src='$produto_img1'>";
                            echo "<div class='product-info' id='$produto_id'>";
                            echo "<h4 class='product-title'>$produto_nome</h4>";
                            echo "<p class='product-price'>$produto_preco</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</a>";
                        }
                    } else {
                        echo "Nenhum produto encontrado.";
                    }
                    ?>
        </div>
 

    </div><!-- final da segunda parte (produtos) -->

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
               <h4>dos criadores</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/ea.mariih/">mariana ferreira</a></li>
                        <li><a href="https://www.instagram.com/k1auez/">kauê de souza</a></li>
                        <li><a href="https://www.instagram.com/kaueerib/">kauê brito</a></li>
                        <li><a href="https://www.instagram.com/joaofelic__f/">joão pedro2</a></li>
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
<!-- fim corpo da pagina  -->

</html>