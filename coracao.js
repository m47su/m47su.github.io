// Obtém uma referência ao botão pelo seu id
var button = document.getElementById('login-btn');

// Função para adicionar a classe de animação do coração
function addHeartAnimation() {
  // Adiciona a classe 'heart-animation' ao botão
  button.classList.add('heart-animation');

  // Remove a classe 'heart-animation' após 1 segundo
  setTimeout(function() {
    button.classList.remove('heart-animation');
  }, 1000);
}

// Adiciona um ouvinte de eventos para o evento de clique
button.addEventListener('click', function() {
  // Chama a função de animação do coração quando o botão é clicado
  addHeartAnimation();
});
