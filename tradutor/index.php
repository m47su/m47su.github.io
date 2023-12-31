<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tradutor</title>
  <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../raposa.png" type="image/png">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-...saf5Q==" crossorigin="anonymous" />

</head>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="styleAntigo.css" />
  <link rel="stylesheet" href="styleTradutor.css" />
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
  <a href="../cartinhas/index.php" class="nav-link">
    <i class="fas fa-envelope fa-2x" style="margin-left: 25px; color:  #cd1468;"></i>
    <span class="link-text">Cartinhas</span>
  </a>
</li>

<li class="nav-item">
  <a href="../cartinhas/index.php" class="nav-link">
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
      text: 'Essa página é um tradutor e compilador para a nossa linguagem secreta! Escreva o que você quer traduzir ou compilar e veja a mágica acontecer <3',
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
      <h1>Tradutor</h1>
    </div>
  </div>
  <div class="login-wrap active">
            <div class="title-input">
                <h1>Traduzir</h1>
            </div>
            
           <!-- traduzir -->
      <div class="input-area">
          <input type="text" name="login1" id="email" autocomplete="off" required>
          <label for="email"></label>
      </div>

      <div class="button-area">
          <button type="button" class="login-btn" onclick="traduzir()">Traduzir</button>
      </div>
  </form>

  <div class="form-toggle-area">
      <p>Ah! Você quer compilar? <span id="toggle-signup">Clique aqui!</span></p>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<style>
    .swal2-confirm-button {
        font-size: 16px !important;
        padding: 8px 16px !important;
        height: auto !important;
        min-width: 60px !important;
        width: 65px;
        }
</style>
        <!-- compilar -->
        <div class="signup-wrap">
            <div class="title-input">
                <h1>Compilar</h1>
            </div>
                <div class="input-area">
                    <input type="text" name="login" id="name" autocomplete="off" required>
                    <label for="name"></label>
                </div>

                <div class="button-area">
                    <button type="submit" class="signup-btn" onclick="traduzir()">Compilar</button>
                </div>
            </form>

            <div class="form-toggle-area">
                <p>Quer traduzir? <span id="toggle-login">Volte aqui!</span></p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<script>
let loginForm = document.querySelector('.login-wrap');
let signupForm = document.querySelector('.signup-wrap');
let title = document.querySelector('title');

let signupToggleBtn = document.querySelector('#toggle-signup');
let loginToggleBtn = document.querySelector('#toggle-login');

signupToggleBtn.onclick = () => {
    loginForm.classList.remove('active');
    signupForm.classList.add('active');
    title.textContent = 'Compilar';
}

loginToggleBtn.onclick = () => {
    signupForm.classList.remove('active');
    loginForm.classList.add('active');
    title.textContent = 'Traduzir';
}

</script>

<script>
function traduzir() {
    var textoOriginal = document.getElementById('email').value;

    textoOriginal = textoOriginal.toLowerCase();

    var textoTraduzido = '';

    for (var i = 0; i < textoOriginal.length; i++) {
        var char = textoOriginal.charAt(i);

        switch (char) {
            case 'e':
                textoTraduzido += 'm';
                break;
            case 'm':
                textoTraduzido += 'e';
                break;
            case 's':
                textoTraduzido += 'p';
                break;
            case 'p':
                textoTraduzido += 's';
                break;
            case 'f':
                textoTraduzido += 'r';
                break;
            case 'r':
                textoTraduzido += 'f';
                break;
            case 'i':
                textoTraduzido += 'c';
                break;
            case 'c':
                textoTraduzido += 'i';
                break;
            case 'h':
                textoTraduzido += 't';
                break;
            case 't':
                textoTraduzido += 'h';
                break;
            case 'a':
                textoTraduzido += 'b';
                break;
            case 'b':
                textoTraduzido += 'a';
                break;
            default:
                textoTraduzido += char;
        }
    }
        Swal.fire({
            title: 'Texto traduzido:',
            text: textoTraduzido,
            icon: 'success',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'swal2-confirm-button'
            }
        });
    }
</script>

<script>
function traduzir() {
    var textoOriginal = document.getElementById('email').value;

    textoOriginal = textoOriginal.toLowerCase();

    var textoTraduzido = '';

    for (var i = 0; i < textoOriginal.length; i++) {
        var char = textoOriginal.charAt(i);

        switch (char) {
            case 'e':
                textoTraduzido += 'm';
                break;
            case 'm':
                textoTraduzido += 'e';
                break;
            case 's':
                textoTraduzido += 'p';
                break;
            case 'p':
                textoTraduzido += 's';
                break;
            case 'f':
                textoTraduzido += 'r';
                break;
            case 'r':
                textoTraduzido += 'f';
                break;
            case 'i':
                textoTraduzido += 'c';
                break;
            case 'c':
                textoTraduzido += 'i';
                break;
            case 'h':
                textoTraduzido += 't';
                break;
            case 't':
                textoTraduzido += 'h';
                break;
            case 'a':
                textoTraduzido += 'b';
                break;
            case 'b':
                textoTraduzido += 'a';
                break;
            default:
                textoTraduzido += char;
        }
    }
        Swal.fire({
            title: 'Texto compilado:',
            text: textoTraduzido,
            icon: 'success',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'swal2-confirm-button'
            }
        });
    }
</script>