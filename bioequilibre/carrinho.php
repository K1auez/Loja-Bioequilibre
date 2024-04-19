<?php
session_start();
include './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/carrinho.css">
    <script src="./js/carrinho.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="./img/1logo.png" type="image/png">
    <title>Bioéquilibre-carrinho</title>
</head>


<body>

  <header>
  <span>Carrinho de compras</span>
  </header>

  <div class="seta">
  <a href="./index.php"><ion-icon name="chevron-back-outline"></ion-icon></a>
  </div>

  <main>
    <div class="page-title">Seu Carrinho</div>
    <div class="content">
      <?php
     
        
        if (isset($_POST['produto_id'])) {
            $produto_id = $_POST['produto_id'];
            $usuario_id = $_SESSION['usuario_id'];
            // Insira o produto no carrinho
            $sql = "INSERT INTO carrinho (usuario_id, produto_id, quantidade) VALUES ('$usuario_id', '$produto_id', 1)";
            
            if (!$conexao->query($sql)) {
                echo "Erro ao adicionar produto ao carrinho: " . $conexao->error;
            }
        }
        
        // Recupere os produtos do carrinho do usuário
        $usuario_id = $_SESSION['usuario_id'];
   
        $sql = "SELECT DISTINCT produto_nome, produto_preco, produto_img1, quantidade, id
          FROM carrinho, produtos
          WHERE carrinho.produto_id = produtos.produto_id
          ORDER BY produtos.produto_id";


        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();
        
        
        if ($result->num_rows > 0) {
            $produto_nome = $row['produto_nome'];
            $produto_preco = $row['produto_preco'];
            $produto_img1 = $row['produto_img1'];
            $produto_quantidade = $row['quantidade'];
            $id = $row['id'];

            echo "<section>";
            echo "  <table>";
            echo "    <thead>";
            echo "      <tr>";
            echo "        <th>Produto</th>";
            echo "        <th>Preço</th>";
            echo "        <th>Quantidade</th>";
            echo "        <th>Total</th>";
            echo "        <th>-</th>";
            echo "      </tr>";
            echo "    </thead>";

              while ($row = $result->fetch_assoc()) {

            echo "    <tbody>";
            echo "      <tr>";
            echo "        <td>";
            echo "          <div class='product'>";
            echo "            <div><img src='" . $produto_img1 . "'></div>";
            echo "            <div class='info'>";
            echo "              <div class='name'>" . $produto_nome . "</div>";
            echo "            </div>";
            echo "          </div>";
            echo "        </td>";
            echo "        <td>" . $produto_preco . "</td>";
            echo "        <td>";
            echo "          <div class='qty'>";
            echo "            <button onclick='decrementarQuantidade()'><ion-icon name='remove-outline'></ion-icon></button>";
            echo "            <span id='quantidade'>" . $produto_quantidade . "</span>";
            echo "            <button onclick='incrementarQuantidade()'><ion-icon name='add-outline'></ion-icon></button>";
            echo "          </div>";
            echo "        </td>";
            echo "        <td>R$ </td>";
            echo "        <td>";
            echo "<form method='post' action='./back-end/excluir_carrinho.php'>";
            echo "<input type='hidden' name='id' value='" . $id . "'>";
            echo "<button class='remove'><ion-icon name='trash-bin-outline'></ion-icon></button>";
            echo "</form>";
            echo "        </td>";
            echo "      </tr>";
            echo "    </tbody>";
          } 
          echo "  </table>";
          echo "</section>";
        }
        else {
          echo "Nenhum produto encontrado.";
             }

            echo "<aside>";
            echo "  <div class='box'>";
            echo "    <header>";
            echo "      Resumo da compra";
            echo "      <button class='close-btn' onclick='fecharCampoCupom()'>X</button>";
            echo "    </header>";
            echo "    <div class='info'>";
            echo "      <div><span>Sub-total</span><span>R$ </span></div>";
            echo "      <div><span>Frete</span><span>Gratuito</span></div>";
            echo "      <div>";
            echo "        <button onclick='mostrarCampoCupom()'>";
            echo "          Adicionar cupom de desconto";
            echo "          <i class='bx bx-right-arrow-alt'></i>";
            echo "        </button>";
            echo "        <button onclick='aplicarCupom()' class='close-btn'></button>";
            echo "      </div>";
            echo "      <div id='campoCupom' style='display: none;'>";
            echo "        <input type='text' id='cupomInput' placeholder='Insira seu cupom'>";
            echo "        <button onclick='aplicarCupom()'>Aplicar</button>";
            echo "      </div>";
            echo "    </div>";
            echo "    <footer>";
            echo "      <span>Total</span>";
            echo "      <span>R$ </span>";
            echo "    </footer>";
            echo "  </div>";
            echo "  <button onclick='finalizarCompra()'>Finalizar Compra</button>";
            echo "</aside>";
            echo "</div>";
        
      ?>
  </main>

</body>
</html>
