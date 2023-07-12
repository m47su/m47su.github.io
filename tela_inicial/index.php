<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem vindo!</title>
  <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../raposa.png" type="image/png">
    <link rel="stylesheet" href="stylePag.css" />
    <link rel="stylesheet" href="style.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

    .heartstrings-title {
      font-family: 'Indie Flower', cursive;
      color: white;
    }

    /* Estilos para o conteúdo principal */
    .containerPag {
      text-align: center;
      margin-top: 100px;
    }

    h1 {
      font-family: 'Cherry Bomb One', cursive;
      font-size: 70px;
      margin-top: -25px;
      color: #fff5f8;
      text-shadow: 3px 5px 0px rgb(239 120 175 / 50%);
      letter-spacing: 2px;
    }

    .input-wrapper {
      position: relative;
      display: inline-block;
    }

    .input {
      letter-spacing: 2px;
      width: 290px;
      margin-top: 25px;
      border: none;
      border-bottom: 2px solid #e66383;
      font-size: 16px;
      font-family: 'Indie Flower', cursive;
      background-color: transparent;
      transition: border-color 0.3s;
      color: white;
    }

    .input:focus {
      outline: none;
      border-color: #ffb5d4;
    }

    .input-line {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #e66383;
      transform-origin: bottom center;
      transform: scaleX(0);
      transition: transform 0.3s;
    }

    .input:focus+.input-line {
      transform: scaleX(1);
    }

    .input::placeholder {
      color: white;
    }

    .button {
      background-color: #e66383;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .card {
      margin-top: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .card img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .transparent-button {
      background-color: transparent;
      border: none;
      padding: 0;
    }

    .transparent-button:hover {
      background-color: transparent;
    }

    body {
      margin: 0;
      padding: 0;
      margin-bottom: 0px;
      background-color: #FAD1E3;
      overflow: hidden;
    }

    #background-image {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('tela_inicial.jpg');
      background-size: 50%;
      background-repeat: no-repeat;
      background-position: center bottom 0%;
      background-color: #F9CFBF;
      z-index: -1;
    }

    .adicionar-musica {
      width: 540px;
      height: 65px;
      background-color: #ff7cac73;
      padding: 10px;
      border-radius: 10px;
      border: 2px solid #ff68a7;
      /* Adiciona uma borda marrom */
      text-shadow: 2px 2px 0px rgb(239 120 175 / 50%);
      margin-left: 25rem;
    }

    .filtro {
      background-color: rgba(255, 185, 185, 0.45);
      width: 100vw;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .adicionar-botao {
      border-radius: 10px;
      font-family: cursive;
    }
    
  </style>
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-...saf5Q==" crossorigin="anonymous" />

  <style>
    /* Estilo para o popup */
    img.swal2-image {
      margin-right: 75px;
    }

    .swal2-styled.swal2-confirm{
      background-color: #f067a1;
    }
  </style>
  <script>
    // Mostrar o SweetAlert popup assim que a página for carregada
    window.addEventListener('load', function() {
      Swal.fire({
        title: 'Oi, meu amor!',
        text: 'Espero que goste da supresa...',
        imageUrl: 'fox-minecraft.gif',
        imageWidth: 400,
        imageHeight: 300, 
        imageAlt: 'Custom image',
      });
    });
  </script>
</head>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="style.css" />
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
  <a href="#" class="nav-link">
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
  <a href="../cartinhas/index.php" class="nav-link">
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
      text: 'A DIVERSÃO SÓ TÁ COMEÇANDO! Navegue pelo site e veja as surpresas!',
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

<style>
    /* Estilos para a topbar */
    .topbar {
      background-color: #f59eb4;
      height: 80px;
      display: flex;
      align-items: center;
      padding: 0 20px;
    }

    .topbar-logo {
      font-family: 'Cherry Bomb One', cursive;
      font-size: 24px;
      color: white;
      margin-right: auto;
    }

    .topbar-link {
      color: white;
      font-size: 18px;
      margin-left: 20px;
      text-decoration: none;
    }

    .topbar-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="topbar"></div>


  <div class="filtro">
    <div id="background-image"></div>
    <div class="containerPag">
      <h1>Bem-vindo!</h1>
    </div>
  </div>
  <body>
  <div id="container">
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
      <div class="rose" style="margin-bottom: -3rem;"></div>
    <audio id="audioPlayer" src="musiquinha.mp3"></audio>
    <style>
      
      .pointer {
      cursor: pointer;
      width: 50px;
      height: 20px;
      margin-left: 47%;
      background-color: #f59eb4;
      border: none;
      }   
      </style>
      
      <button type="button" class="pointer" onclick="animarRosas(); playAudio()"></button>
      
    <!-- Adicione mais divs com a classe "rose" se quiser mais rosas -->
  </div>
  <script src="script.js"></script>
  <script>
    function mostrarRosas() {
      var rosas = document.getElementsByClassName("rose");
      for (var i = 0; i < rosas.length; i++) {
        rosas[i].style.display = "block";
      }
    }



function playAudio() {
  var audioContext = new (window.AudioContext || window.webkitAudioContext)();
  var audioElement = new Audio("musiquinha.mp3");

  var source = audioContext.createMediaElementSource(audioElement);
  source.connect(audioContext.destination);

  audioElement.play();
}
</script>

</body>

</html>