<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="GlobalNet Provedor de internet.">
  <meta name="author" content="Globalnet">
  <meta name="keywords" content="Globalnet, Provedor, Cachoerinha, Gravataí, Internet">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Globalnet Provedor">
  <meta property="og:description" content="GlobalNet Provedor de internet.">
  <meta property="og:image" content="https://www.globalnetprovedor.com/imagens/logo.png">
  <meta property="og:url" content="https://www.globalnetprovedor.com">
  
  <link rel="icon" href="images/logo.png">
  <link href="bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/geral.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GlobalNet</title>
</head>

<body class="user-select-none vw-100" style="overflow-x: hidden;">
  <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/window.js"></script>
  <script src="js/alert.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/screen.js"></script>
  <script src="js/cookies.js"></script>

  <div id="main-content" style="display: none;">
  </div>

  <header>
    <nav id="navbar" class="navbar fixed-top shadow">
      <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center vw-100">
          <div class="d-flex">
            <img src="images/logo_global.png " class="ms-3 pe-none" width="200px">
            <ul class="navbar-nav nav-underline flex-row ms-4">
              <li class="nav-item">
                <a class="nav-link" href="#app">Nosso app</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#empresa">Sobre nós</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#planos">Planos</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" target="_blank" href="contrato.pdf">Contrato</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#atendimento">Atendimento</a>
              </li>
            </ul>
          </div>
          <div class="d-flex me-3">
            <img src="images/light_mode_24dp.png" id="theme" width="30px" style="cursor: pointer;" class="zoom-image">
            <a href="https://www.instagram.com/globalnetcachoeirinha/" target="_blank"><img class="zoom-image ms-3 "
                src="images/Instagram_icon.png" width="30px"></a>
            <a href="https://www.facebook.com/GlobalnetCachoeirinha" target="_blank"><img class="zoom-image ms-3"
                src="images/facebook.png" width="30px"></a>
            <a href="https://api.whatsapp.com/send?phone=5551991437617" target="_blank"><img class="zoom-image ms-3"
                src="images/whatsapp-icon.png" width="30px"></a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="container-fluid bg-primary d-flex justify-content-center">
    <img src="images/background.png" class="vh-100 vw-100 pe-none">
    <a href="#planos">
      <button id="atendimento"
        class="btn btn-warning shadow-sm rounded-4 text-white fs-4 fw-bold position-absolute translate-middle"
        style="top: 65%; left: 20%;">Planos disponíveis</button>
    </a>

  </section>

  <article class="d-flex justify-content-between">
    <div class="p-4 w-50">
      <div class="text-change">
      <h1 class="py-4" data-aos="fade-up" data-aos-duration="400" id="#atendimento">Atendimento</h1></div>

      <div data-aos="zoom-in-up" class="btn btn-light shadow-sm rounded-4 border me-2" style="width: 130px;">
        <a href="http://sistema.globalnetprovedor.com/" class="text-dark link-underline link-underline-opacity-0">
          <img src="images/print_24dp.png" width="80px">
          <h5>2ª Via Boleto</h5>
        </a>
      </div>

      <div data-aos="zoom-in-up" id="testconn" class="btn shadow-sm btn-light rounded-4 border me-2"
        style="width: 130px;">
        <img src="images/network_check_24dp.png" width="80px">
        <h5>Teste de Conexão</h5>
      </div>

      <div data-aos="zoom-in-up" class="btn btn-light shadow-sm rounded-4 border me-2" style="width: 130px;">
        <a href="https://api.whatsapp.com/send?phone=5551991437617"
          class="text-dark link-underline link-underline-opacity-0">
          <img src="images/support_agent_24dp.png" width="80px">
          <h5 id="planos">Suporte Técnico</h5>
        </a>
      </div>
    </div>

    <div class="d-flex flex-column p-4 w-50 text-change">
      <div class="d-flex align-items-center pt-4">
      <h2 data-aos="fade-up" data-aos-duration="400">Consulte disponibilidade na sua região.</h2></div>
      <form id="form" class="me-4" method="post">
        <div data-aos="fade-right" class="mb-1 d-flex justify-content-between">
          <div class="d-flex flex-column" style="width: 50%;">
            <label for="nome" class="form-label text-change">Nome Completo</label>
            <input type="text" oninput="validarNome()" class="form-control" placeholder="Insira seu nome completo"
              id="nome">
          </div>
          <div class="mb-1" style="width: 40%;">
            <label for="email" class="form-label text-change">E-mail * Opcional</label>
            <input type="text" oninput="validarEmail()" class="form-control" id="email" placeholder="Insira seu e-mail">
            <select id="email-suggestions" class="form-select" onchange="preencherEmail()" style="display: none;">
              <option selected value="">Selecionar E-mail</option>
              <option value="gmail.com">gmail.com</option>
              <option value="yahoo.com">yahoo.com</option>
              <option value="hotmail.com">hotmail.com</option>
              <option value="outlook.com">outlook.com</option>
              <option value="terra.com.br">terra.com.br</option>
            </select>
          </div>
        </div>
        <div data-aos="fade-right" class="d-flex justify-content-between">
          <div class="mb-1" style="width: 60%;">
            <label for="end" class="form-label text-change">Endereço Completo</label>
            <input type="text" oninput="validarEndereco()" class="form-control" id="end"
              placeholder="Insira seu endreço completo">
          </div>
          <div class="d-flex flex-column" style="width: 30%;">
            <label for="tel" class="form-label text-change">Telefone com DDD</label>
            <input type="text" oninput="validarTelefone()" maxlength="15" class="form-control"
              placeholder="(00) 0 0000-0000" id="tel">
          </div>
        </div>
        <div data-aos="fade-up" class="d-flex justify-content-center">
          <button type="button" class="btn btn-primary fw-bold px-4 mt-2">Enviar</button>
        </div>
      </form>
    </div>

  </article>

  <aside>
    <div class="p-4 text-change">
      <h1 class="py-4 ms-2" data-aos="fade-up">Planos GlobalNet</h1>

      <div class="d-flex justify-content-evenly">

        <div data-aos="flip-left" data-aos-duration="700" class="border bg-white rounded p-4 shadow-sm ms-2">
          <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
              <div class="d-flex align-items-center ms-2">
                  <h1 class="text-primary fw-bold me-1">100</h1>
                  <span class="text-primary">MEGAS</span>
              </div>
              <h6 class="text-primary ms-2">Plano Básico</h6>
          </div>
            <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon" width="50px" height="50px">
          </div>

          <div class="text-start text-black ms-2">
            <h4>
              <span class="fs-6">Oferta por</span> <br>
              <span class="fs-5">R$</span>
              <span id="valor100" class="fs-1">89,90</span>
              <br>
              <span class="fs-6">Até o vencimento</span>
            </h4>
          </div>

          <div class="d-flex justify-content-start align-items-center mb-3">
            <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
              <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center">
                <img src="images/whatsapp.png" class="me-2" width="20" height="20"><span>Contratar</span>
              </button>
            </a>
        </div>

          <div class="border-top pt-3">
            <div class="d-flex flex-column justify-content-around align-items-center">
              <div class="d-flex justify-content-between align-items-center pb-2 invisible">
                <img src="images/panamount.png" width="110" height="30">
            </div>
            <div class="d-flex justify-content-between align-items-center invisible pb-2">
                <img src="images/combate.png" width="120" height="20">
                <img src="images/max.png" class="ms-4" width="80" height="20">
            </div>
              <img src="images/streaming.png" class="invisible" width="180">
          </div>
        </div>
        </div>

        <div data-aos="flip-left" data-aos-duration="700" class="border bg-white rounded p-4 shadow-sm ms-2">
          <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
              <div class="d-flex align-items-center ms-2">
                  <h1 class="text-primary fw-bold me-1">400</h1>
                  <span class="text-primary">MEGAS</span>
              </div>
              <h6 class="text-primary ms-2">Plano Smart</h6>
          </div>
            <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon" width="50px" height="50px">
          </div>

          <div class="text-start text-black ms-2">
            <h4>
              <span class="fs-6">Oferta por</span> <br>
              <span class="fs-5">R$</span>
              <span id="valor100" class="fs-1">99,90</span>
              <br>
              <span class="fs-6">Até o vencimento</span>
            </h4>
          </div>

          <div class="d-flex justify-content-start align-items-center mb-3">
            <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
              <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center">
                <img src="images/whatsapp.png" class="me-2" width="20" height="20"><span>Contratar</span>
              </button>
            </a>
        </div>

          <div class="border-top pt-3">
            <div class="d-flex flex-column justify-content-around align-items-center">
              <div class="d-flex justify-content-between align-items-center pb-2">
                <img src="images/panamount.png" width="110" height="30">
            </div>
            <div class="d-flex justify-content-between align-items-center invisible pb-2">
                <img src="images/combate.png" width="120" height="20">
                <img src="images/max.png" class="ms-4" width="80" height="20">
            </div>
              <img src="images/streaming.png" width="180">
          </div>
        </div>
        </div>

        <div data-aos="flip-left" data-aos-duration="700" class="border bg-white rounded p-4 shadow-sm ms-2">
          <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
              <div class="d-flex align-items-center ms-2">
                  <h1 class="text-primary fw-bold me-1">600</h1>
                  <span class="text-primary">MEGAS</span>
              </div>
              <h6 class="text-primary ms-2">Plano Turbo</h6>
          </div>
            <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon" width="50px" height="50px">
          </div>

          <div class="text-start text-black ms-2">
            <h4>
              <span class="fs-6">Oferta por</span> <br>
              <span class="fs-5">R$</span>
              <span id="valor100" class="fs-1">129,90</span>
              <br>
              <span class="fs-6">Até o vencimento</span>
            </h4>
          </div>

          <div class="d-flex justify-content-start align-items-center mb-3">
            <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
              <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center">
                <img src="images/whatsapp.png" class="me-2" width="20" height="20"><span>Contratar</span>
              </button>
            </a>
        </div>

          <div class="border-top pt-3">
            <div class="d-flex flex-column justify-content-around align-items-center">
              <div class="d-flex justify-content-between align-items-center pb-2">
                <img src="images/combate.png" width="120" height="20">
                <img src="images/max.png" class="ms-4" width="80" height="20">
            </div>
            <div class="d-flex justify-content-between align-items-center pb-2">
                <img src="images/panamount.png" width="110" height="30">
            </div>
              <img src="images/streaming.png" width="180">
          </div>
        </div>
        </div>

        <div data-aos="flip-left" data-aos-duration="700" class="border bg-white rounded p-4 shadow-sm ms-2">
          <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
              <div class="d-flex align-items-center ms-2">
                  <h1 class="text-primary fw-bold me-1">900</h1>
                  <span class="text-primary">MEGAS</span>
              </div>
              <h6 class="text-primary ms-2">Plano Ultra</h6>
          </div>
            <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon" width="50px" height="50px">
          </div>

          <div class="text-start text-black ms-2">
            <h4>
              <span class="fs-6">Oferta por</span> <br>
              <span class="fs-5">R$</span>
              <span id="valor100" class="fs-1">179,90</span>
              <br>
              <span class="fs-6">Até o vencimento</span>
            </h4>
          </div>

          <div class="d-flex justify-content-start align-items-center mb-3">
            <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
              <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center">
                <img src="images/whatsapp.png" class="me-2" width="20" height="20"><span>Contratar</span>
              </button>
            </a>
        </div>

          <div class="border-top pt-3">
            <div class="d-flex flex-column justify-content-around align-items-center">
              <div class="d-flex justify-content-between align-items-center pb-2">
                  <img src="images/telecine.png" width="120" height="20">
                  <img src="images/max.png" class="ms-3" width="80" height="20">
              </div>
              <div class="d-flex justify-content-between align-items-center pb-2">
                  <img src="images/panamount.png" width="110" height="30">
                  <img src="images/combate.png" width="120" height="20" class="ms-2">
              </div>
              <img src="images/streaming.png" width="180">
          </div>
        </div>
        </div>
        
      </div>
    </div>

  </aside>

  <main id="empresa">
    <div class="d-flex justify-content-center align-items-center text-dark pt-2 p-4 vw-100 h-100">
      <div class="container text-change">
        <h2 data-aos="fade-up" class="text-center mb-4">
          <span>Sobre a</span>
          <span class="text-primary fw-bold">Global<span class="text-warning fw-bold">Net</span></span>

        </h2>
        <p class="lead" data-aos="fade-up">
          A GlobalNet é um provedor de internet com sede em Cachoeirinha, Rio Grande do Sul, que oferece
          soluções
          modernas de conectividade desde 2010. Inicialmente atuando no setor de segurança, migramos para
          o ramo internet em 2018, consolidando-nos como um dos principais provedores de internet da região.
        </p>
        <p class="lead" data-aos="fade-up">
          Nossa missão é conectar pessoas e negócios, oferecendo serviços de alta qualidade com atendimento
          personalizado.
          Com uma infraestrutura robusta e tecnologia de ponta, a GlobalNet proporciona planos de internet
          ultrarrápidos,
          estáveis e acessíveis, garantindo a melhor experiência para residências, empresas e instituições de todos os
          portes.
        </p>
        <p id="app" class="lead" data-aos="fade-up">
          Mais do que entregar conexão, acreditamos em fortalecer comunidades, fomentar o crescimento local e
          simplificar
          o acesso ao mundo digital. Contamos com uma equipe qualificada, suporte técnico eficiente e um compromisso
          constante com a inovação e a satisfação dos nossos clientes.
        </p>
        <div class="text-center mt-4" data-aos="fade-up">
          <img src="images/anatel.png" class="img-fluid pe-none" style="max-width: 200px;">
        </div>
      </div>
    </div>
  </main>

  <hr id="hr">

  <div class="text-center vw-100 text-change">
    <h1 class="mt-4" data-aos="fade-up">Baixe o app da GlobalNet</h1>
    <h5 data-aos="fade-up">A GlobalNet quer te manter sempre conectado e estar cada vez mais próximo de você! </h5>
    <div class="d-flex justify-content-center p-3 my-5">
      <div data-aos="flip-down" data-aos-duration="800"
        class="border p-3 bg-white text-dark text-center rounded me-4 p-2" style="width: 30%">
        <a href="https://play.google.com/store/apps/details?id=br.codize.appprovedor"
          class="text-dark link-underline link-underline-opacity-0">
          <div class="d-flex align-items-center justify-content-center">
            <h3>Google Play</h3> <img src="images/Google_Play_2022_icon.svg.png" class="ms-3" width="40px"
              height="40px">
          </div>
          <p>Faça download <br> no botão abaixo</p>
          <button class="btn btn-warning rounded-5 text-white fw-bold align-items-center justify-content-center">Clique
            Aqui
            <img src="images/download_24dp.png" width="20px" height="20px"></button>
        </a>
      </div>
      <div data-aos="flip-down" data-aos-duration="800" class="border text-center p-3 bg-white text-dark rounded p-2"
        style="width: 30%">
        <a href="https://apps.apple.com/br/app/app-provedor/id1564606498"
          class="text-dark link-underline link-underline-opacity-0">
          <div class="d-flex align-items-center justify-content-center">
            <h3>App Store</h3> <img src="images/App_Store_(iOS).svg.png" class="ms-3" width="40px" height="40px">
          </div>
          <p>Faça download <br> no botão abaixo</p>
          <button class="btn btn-warning rounded-5 text-white fw-bold align-items-center justify-content-center">Clique
            Aqui
            <img src="images/download_24dp.png" width="20px" height="20px"></button>
        </a>
      </div>
    </div>
  </div>

  <footer id="footer" class="bg-primary text-white vw-100">
    <div data-aos="zoom-in-up" data-aos-duration="400" class="pt-4 d-flex flex-column text-center">
      <h2 class="fw-bold">GlobalNet Fibra</h2>
      <p class="fs-5">Descubra as vantagens de contratar a GlobalNet</p>
    </div>

    <div class="d-flex justify-content-evenly p-3 align-items-center text-center w-100">
      <div data-aos="flip-right" data-aos-duration="700" style="width: 30%;" class="p-3 border rounded-4">
        <img src="images/cell_tower_24dp.png" width="80px">
        <p class="fs-6">Suporte 𝟮𝟰 𝗵𝗼𝗿𝗮𝘀 no whatsapp para garantir que seus problemas sejam resolvidos a qualquer momento, em qualquer dia da semana.</p>
      </div>
      <div data-aos="flip-right" data-aos-duration="700" style="width: 30%;" class="p-3 border rounded-4">
        <img src="images/5g_24dp.png" width="80px">
        <p class="fs-6">Possuimos roteadores com Wi-Fi 5G <br> para sua navegação ser ainda mais veloz, ideal para jogos online e downloads sem interrupções.</p>
      </div>
      <div data-aos="flip-right" data-aos-duration="700" style="width: 30%;" class="p-3 border rounded-4">
        <img src="images/verified_user_24dp.png" width="80px">
        <p class="fs-6">Velocidade constante, conexão estável, desempenho e segurança. Ideal para clientes que buscam eficiência, confiança e tecnologia de ponta.</p>
      </div>
    </div>

    <hr class="my-4">

    <div class="text-center fw-bold d-flex justify-content-center align-items-center">
      <p>© 2025 | GLOBALNET CNPJ: 09649158000161 - Todos os direitos reservados</p>
    </div>
  </footer>

  <a href="https://api.whatsapp.com/send?phone=5551991437617">
    <img src="images/whatsapp-icon.png" alt="WhatsApp Icon" class="img-fluid position-fixed"
      style="width: 50px; height: 50px; bottom: 30px; right: 30px; animation: bounce 2s infinite;">
  </a>

</body>

</html>