function incrementarQuantidade() {
    var quantidadeElement = document.getElementById('quantidade');
    var quantidadeAtual = parseInt(quantidadeElement.innerText);
    quantidadeAtual++;
    quantidadeElement.innerText = quantidadeAtual;
    atualizarTotal();
  }

  function decrementarQuantidade() {
    var quantidadeElement = document.getElementById('quantidade');
    var quantidadeAtual = parseInt(quantidadeElement.innerText);
    if (quantidadeAtual > 1) {
      quantidadeAtual--;
      quantidadeElement.innerText = quantidadeAtual;
      atualizarTotal();
    }
  }

  function mostrarCampoCupom() {
    var campoCupom = document.getElementById('campoCupom');
    var closeBtn = document.querySelector('.close-btn');
    campoCupom.style.display = 'flex';
    closeBtn.style.display = 'block';
  }

  function fecharCampoCupom() {
    var campoCupom = document.getElementById('campoCupom');
    var closeBtn = document.querySelector('.close-btn');
    campoCupom.style.display = 'none';
    closeBtn.style.display = 'none';
  }

  function aplicarCupom() {
    var cupomInput = document.getElementById('cupomInput');
    var cupom = cupomInput.value;

    // Adicione a lógica para aplicar o cupom aqui.

    // Oculta o campo após aplicar o cupom
    fecharCampoCupom();
  }

  function finalizarCompra() {
    // Adicione a lógica para finalizar a compra aqui.
    alert('Implemente a lógica de finalização da compra aqui.');
  }