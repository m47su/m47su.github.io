<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartinhas</title>
  <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../raposa.png" type="image/png">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-...saf5Q==" crossorigin="anonymous" />

</head>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="styleAntigo.css" />
  <link rel="stylesheet" href="./styleEnvelope.css">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"/>
</head>
<body>
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">Menu</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>

      <li class="nav-item">
  <a href="../tela_inicial/index.php" class="nav-link">
    <i class="fas fa-heart fa-2x" style="margin-left: 25px; color: #cd1468;"></i>
    <span class="link-text">Oi, meu bem!</span>
  </a>
</li>


<li class="nav-item">
  <a href="../playlist/index.html" class="nav-link">
    <i class="fas fa-music fa-2x" style="margin-left: 25px; color:  #cd1468;"></i>
    <span class="link-text">Playlist do Amor</span>
  </a>
</li>

      
<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="fas fa-envelope fa-2x" style="margin-left: 25px; color:  #cd1468;"></i>
    <span class="link-text">Cartinhas</span>
  </a>
</li>

<li class="nav-item">
  <a href="../tradutor/index.php" class="nav-link">
    <i class="fas fa-pencil-alt fa-2x" style="margin-left: 25px; color:  #cd1468;"></i>
    <span class="link-text">Tradutor</span>
  </a>
</li>

<li class="nav-item">
  <a href="../tradutor/index.php" class="nav-link" id="popup-link">
    <i class="fas fa-question-circle fa-2x" style="margin-left: 25px; color: #cd1468;"></i>
    <span class="link-text">Dúvidas</span>
  </a>
</li>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.getElementById('popup-link').addEventListener('click', function(event) {
    event.preventDefault(); 

    Swal.fire({
      title: 'O que fazer nessa página?',
      text: 'Essa página é um gerador de cartinhas de amor! Cada vez que você apertar o botão "Gerar Cartinha", uma nova carta irá aparecer. Não se esqueça de fechar a carta que abriu! <3',
      icon: 'question',
      confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'swal2-confirm-button'
            }
    });
  });
</script>
<style>
    .swal2-confirm-button {
        font-size: 16px !important;
        padding: 8px 16px !important;
        height: auto !important;
        min-width: 60px !important;
        width: 65px;
        }
</style>
          <g class="fa-group">
            <path
              fill="brown"
              d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"
              class="fa-secondary"
            ></path>

              <path
                fill="currentColor"
                d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          
        </a>
      </li>
    </ul>
  </nav>
  </main>
</body>
</head>

<body>
  <div class="topbar"></div>


  <div class="filtro">
    <div id="background-image"></div>
    <div class="container">
      <h1>Cartinhas</h1>
    </div>
  </div>
  <style>
.containerenvelope {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    /* background-color: #fff; */
    padding: 0px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
}

    .containerenvelope.show {
        display: block;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9998;
    }

    .overlay.show {
        display: block;
    }
</style>

<div class="button-area">
    <button type="button" class="login-btn" onclick="showEnvelope()">Gerar Cartinha</button>
</div>

<div class="overlay" id="overlay" onclick="hideEnvelope()"></div>

<div class="containerenvelope" id="envelopeContainer">
    <div class="envelope-wrapper" id="envelopeWrapper">
        <div class="envelope">
            <div class="letter">
                <div class="text" id="letterText">
                    <strong>Meu bem.</strong>
                    <p>
                        No abraço do amor, encontro meu refúgio. 
                    </p>
                </div>
            </div>
        </div>
        <div class="heart"></div>
    </div>
</div>

<script>
    function showEnvelope() {
        const overlay = document.getElementById('overlay');
        const envelopeContainer = document.getElementById('envelopeContainer');
        envelopeContainer.classList.toggle('show');
        overlay.classList.toggle('show');
        
        // Textos predefinidos
        const predefinedTexts = [
            {
                title: "Meu bem.",
                content: "O brilho dos seus olhos ilumina o meu caminho."
            },
            {
                title: "Meu bem.",
                content: "No seu sorriso, encontro a razão para sorrir."
            },
            {
                title: "Meu bem.",
                content: "Entre as estrelas, nosso amor brilha mais forte."
            },
            {
                title: "Meu bem.",
                content: "Você é o meu porto seguro em meio à tempestade."
            },
            {
                title: "Meu bem.",
                content: "Nosso amor é a poesia que escreve os versos mais belos."
            },
            {
                title: "Meu bem.",
                content: "Juntos, construímos um castelo de sonhos e paixão."
            },
            {
                title: "Meu bem.",
                content: "Em seus braços, encontro a paz que tanto almejo."
            },
            {
                title: "Meu bem.",
                content: "Você é a música que embala minha alma."
            },
            {
                title: "Meu bem.",
                content: "Cada segundo ao seu lado é um presente inestimável."
            },
            {
                title: "Meu bem.",
                content: "Nosso amor é uma chama que nunca se apaga."
            },
            {
                title: "Meu bem.",
                content: "Você é o encaixe perfeito em minha vida."
            },
            {
                title: "Meu bem.",
                content: "No seu beijo, descubro a essência do amor verdadeiro."
            },
            {
                title: "Meu bem.",
                content: "Você é a estrela que ilumina o meu céu escuro."
            },
            {
                title: "Meu bem.",
                content: "A cada olhar, meu coração bate mais forte por você."
            },
            {
                title: "Meu bem.",
                content: "Juntos, escrevemos uma história de amor para a eternidade."
            },
            {
                title: "Meu bem.",
                content: "Você é a peça que faltava no quebra-cabeça da minha vida."
            },
            {
                title: "Meu bem.",
                content: "No seu abraço, sinto que pertenço a algum lugar."
            },
            {
                title: "Meu bem.",
                content: "Nosso amor é o destino traçado pelas estrelas."
            },
            {
                title: "Meu bem.",
                content: "Nossos corações se entrelaçam em uma dança eterna."
            }
        ];
        function showEnvelope() {
        const overlay = document.getElementById('overlay');
        const envelopeContainer = document.getElementById('envelopeContainer');
        envelopeContainer.classList.toggle('show');
        overlay.classList.toggle('show');
        
        generateNewText();
    }
    
    function generateNewText() {
        const randomIndex = Math.floor(Math.random() * predefinedTexts.length);
        const randomText = predefinedTexts[randomIndex];
        
        const letterText = document.getElementById('letterText');
        letterText.innerHTML = `<strong>${randomText.title}</strong><p>${randomText.content}</p>`;
    }
        const randomIndex = Math.floor(Math.random() * predefinedTexts.length);
        const randomText = predefinedTexts[randomIndex];
        
        const letterText = document.getElementById('letterText');
        letterText.innerHTML = `<strong>${randomText.title}</strong><p>${randomText.content}</p>`;
    }
    
    const envelope = document.querySelector('.envelope-wrapper');
    envelope.addEventListener('click', () => {
        envelope.classList.toggle('flap');
    });
    
    function hideEnvelope() {
        const overlay = document.getElementById('overlay');
        const envelopeContainer = document.getElementById('envelopeContainer');
        
        overlay.classList.remove('show');
        envelopeContainer.classList.remove('show');
    }
</script>
