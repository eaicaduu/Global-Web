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
    <link rel="stylesheet" href="css/geral.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobalNet</title>
</head>

<body class="user-select-none vw-100">
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

    <header id="navbar" class="bg-white shadow-sm w-100 d-column justify-content-center text-center">
        <div>
            <img src="images/logo_global.png" class="pt-2" width="200px">
            <img src="images/light_mode_24dp.png" id="theme" width="30px"
                style="position: absolute; top: 10px; right: 10px;">
        </div>
        <hr>
        <div class="d-flex align-items-center justify-content-evenly pb-3" style="overflow: auto;">
            <div class="d-column ms-3" style="width: 80px;">
                <a href="#planos" class="text-dark link-underline link-underline-opacity-0">
                    <button
                        class="btn btn-light border-primary border-3 rounded-circle border d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="images/language_24dp.png" width="40px">
                    </button>
                    <span class="fs-6 fw-bold text-change">Nossos Planos</span>
                </a>
            </div>
            <div class="d-column ms-3" style="width: 80px;">
                <a href="#empresa" class="text-dark link-underline link-underline-opacity-0">
                    <button
                        class="btn btn-light border-primary border-3 rounded-circle border d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="images/groups_24dp.png" width="40px">
                    </button>
                    <span class="fs-6 fw-bold text-change">Sobre a Global</span>
                </a>
            </div>
            <div class="d-column ms-3" style="width: 80px;">
                <a href="http://sistema.globalnetprovedor.com/" target="_blank"
                    class="text-dark link-underline link-underline-opacity-0">
                    <button
                        class="btn btn-light border-primary border-3 rounded-circle border d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="images/print_24dp.png" width="40px">
                    </button>
                    <span class="fs-6 fw-bold text-change">2ª Via Boleto</span>
                </a>
            </div>
            <div class="d-column ms-3" style="width: 80px;">
                <button onclick="instrucoes1()"
                    class="btn btn-light border-primary border-3 rounded-circle border d-flex justify-content-center align-items-center"
                    style="width: 80px; height: 80px;">
                    <img src="images/network_check_24dp.png" width="40px">
                </button>
                <span class="fs-6 fw-bold text-change">Teste de Conexão</span>
            </div>
            <div class="d-column ms-3" style="width: 80px;">
                <a href="https://api.whatsapp.com/send?phone=5551991437617" target="_blank"
                    class="text-dark link-underline link-underline-opacity-0">
                    <button
                        class="btn btn-light border-primary border-3 rounded-circle border d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="images/support_agent_24dp.png" width="40px">
                    </button>
                    <span class="fs-6 fw-bold text-change">Suporte Técnico</span>
                </a>
            </div>
            <div class="d-column ms-3 me-3" style="width: 80px;">
                <a href="#app" class="text-dark link-underline link-underline-opacity-0">
                    <button
                        class="btn btn-light border-primary border-3 rounded-circle border d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="images/smartphone_24dp.png" width="40px">
                    </button>
                    <span class="fs-6 fw-bold text-change">Nosso App</span>
                </a>
            </div>
        </div>
    </header>

    <section class="container-fluid bg-primary d-flex justify-content-center m-0 p-0">
        <div id="imageCarousel" class="carousel slide text-center" style="width: 100%;" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/3.png" class="pe-none" style="height: 80vh; object-fit: cover; max-width: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="images/4.png" class="pe-none" style="height: 80vh; object-fit: cover; max-width: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="images/2.png" class="pe-none" style="height: 80vh; object-fit: cover; max-width: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="images/1.png" class="pe-none" style="height: 80vh; object-fit: cover; max-width: 100%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="text-change">
        <h1 class="pt-4 text-center" data-aos="fade-up" data-aos-duration="400">Formulário <br>
            <h6 class="text-center" data-aos="fade-up" data-aos-duration="400">Consulte disponibilidade na sua região</h6>
        </h1>
        <form id="form" class="mx-3" method="post">
            <div data-aos="fade-up" class="mb-2">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" oninput="validarNome()" class="form-control form-control-lg"
                    placeholder="Insira seu nome completo" id="nome">
            </div>
            <div data-aos="fade-up" class="mb-2">
                <label for="email" class="form-label">E-mail * Opcional</label>
                <input type="text" oninput="validarEmail()" class="form-control form-control-lg" id="email"
                    placeholder="Insira seu e-mail">
                <select id="email-suggestions" class="form-select form-select-lg" onchange="preencherEmail()"
                    style="display: none;">
                    <option selected value="">Selecionar E-mail</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="yahoo.com">yahoo.com</option>
                    <option value="hotmail.com">hotmail.com</option>
                    <option value="outlook.com">outlook.com</option>
                    <option value="terra.com.br">terra.com.br</option>
                </select>
            </div>
            <div data-aos="fade-up" class="mb-2">
                <label for="tel" class="form-label">Telefone com DDD</label>
                <input type="text" inputmode="numeric" pattern="[0-9]*" oninput="validarTelefone()" maxlength="15"
                    class="form-control form-control-lg" placeholder="(00) 0 0000-0000" id="tel">
            </div>
            <div id="planos" data-aos="fade-up" class="mb-2">
                <label for="end" class="form-label">Endreço Completo</label>
                <input type="text" oninput="validarEndereco()" class="form-control form-control-lg" id="end"
                    placeholder="Insira seu endreço completo">
            </div>
            <div data-aos="fade-up" class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary fw-bold px-4 mt-2">Enviar</button>
            </div>
        </form>
    </div>

    <hr id="hr">

    <aside class="text-change">
        <div data-aos="zoom-in-up" data-aos-duration="700" class="d-flex align-items-center my-2 py-5"
            style="overflow-x: auto; white-space: nowrap;">

            <div class="border rounded p-4 bg-white shadow-sm ms-3" style="height: auto; max-width: 350px;">
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center ms-2">
                            <h1 class="text-primary fw-bold me-1 display-4">100</h1>
                            <span class="text-primary">MEGAS</span>
                        </div>
                        <h6 class="text-primary ms-2">Plano Básico</h6>
                    </div>
                    <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon ms-4" width="50" height="50">
                </div>

                <div class="text-start text-black mb-4 ms-2">
                    <h4>
                        <span class="fs-6">Oferta por</span><br>
                        <span class="fs-5">R$</span>
                        <span id="valor100" class="display-3 fw-bold">89,90</span><br>
                        <span class="fs-6">Até o vencimento</span>
                    </h4>
                </div>

                <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
                    <div class="d-flex justify-content-start ms-1 align-items-center mb-3">
                        <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center"
                            style="text-decoration: none;">
                            <img src="images/whatsapp.png" class="me-2" width="20" height="20">Contratar
                        </button>
                    </div>
                </a>
                <div class="border-top pt-3">
                    <div class="d-flex flex-column justify-content-around align-items-center">
                        <div class="d-flex justify-content-between align-items-center invisible pb-2">
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

            <div class="border rounded p-4 bg-white shadow-sm ms-3" style="height: auto; max-width: 350px;">
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center ms-2">
                            <h1 class="text-primary fw-bold me-1 display-4">400</h1>
                            <span class="text-primary">MEGAS</span>
                        </div>
                        <h6 class="text-primary ms-2">Plano Smart</h6>
                    </div>
                    <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon ms-4" width="50" height="50">
                </div>

                <div class="text-start text-black mb-4 ms-2">
                    <h4>
                        <span class="fs-6">Oferta por</span><br>
                        <span class="fs-5">R$</span>
                        <span id="valor100" class="display-3 fw-bold">99,90</span><br>
                        <span class="fs-6">Até o vencimento</span>
                    </h4>
                </div>

                <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
                    <div class="d-flex justify-content-start ms-1 align-items-center mb-3">
                        <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center"
                            style="text-decoration: none;">
                            <img src="images/whatsapp.png" class="me-2" width="20" height="20">Contratar
                        </button>
                    </div>
                </a>
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

            <div class="border rounded p-4 bg-white shadow-sm ms-3" style="height: auto; max-width: 350px;">
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center ms-2">
                            <h1 class="text-primary fw-bold me-1 display-4">600</h1>
                            <span class="text-primary">MEGAS</span>
                        </div>
                        <h6 class="text-primary ms-2">Plano Turbo</h6>
                    </div>
                    <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon ms-4" width="50" height="50">
                </div>

                <div class="text-start text-black mb-4 ms-2">
                    <h4>
                        <span class="fs-6">Oferta por</span><br>
                        <span class="fs-5">R$</span>
                        <span id="valor100" class="display-3 fw-bold">129,90</span><br>
                        <span class="fs-6">Até o vencimento</span>
                    </h4>
                </div>

                <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;">
                    <div class="d-flex justify-content-start ms-1 align-items-center mb-3">
                        <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center"
                            style="text-decoration: none;">
                            <img src="images/whatsapp.png" class="me-2" width="20" height="20">Contratar
                        </button>
                    </div>
                </a>
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

            <div class="border rounded p-4 bg-white shadow-sm ms-3 me-3" style="height: auto; max-width: 350px;">
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center ms-2">
                            <h1 class="text-primary fw-bold me-1 display-4">900</h1>
                            <span class="text-primary">MEGAS</span>
                        </div>
                        <h6 class="text-primary ms-2">Plano Ultra</h6>
                    </div>
                    <img src="images/wifi_dark_24dp.png" class="pe-none theme-icon ms-4" width="50" height="50">
                </div>

                <div class="text-start text-black mb-4 ms-2">
                    <h4>
                        <span class="fs-6">Oferta por</span><br>
                        <span class="fs-5">R$</span>
                        <span id="valor100" class="display-3 fw-bold">179,90</span><br>
                        <span class="fs-6">Até o vencimento</span>
                    </h4>
                </div>

                <a href="https://api.whatsapp.com/send?phone=5551991437617" style="text-decoration: none;"></a>
                <div class="d-flex justify-content-start ms-1 align-items-center mb-3">
                    <button class="btn btn-warning rounded-pill text-white fw-bold d-flex align-items-center"
                        style="text-decoration: none;">
                        <img src="images/whatsapp.png" class="me-2" width="20" height="20">Contratar
                    </button>
                </div>
                </a>

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
    </aside>

    <hr>

    <div class="text-center w-100 text-change" id="app">
        <div data-aos="fade-up" data-aos-duration="400">
            <h1 class="mt-4">Baixe o app da GlobalNet</h1>
            <h6>A GlobalNet quer te manter sempre conectado e estar cada vez mais próximo de você! </h6>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center p-3 my-3 w-100">
            <div data-aos="flip-left" data-aos-duration="700"
                class="border p-3 bg-white text-dark text-center rounded mb-3 mb-md-0 me-md-3 p-2" style="width: 300px">
                <a href="https://play.google.com/store/apps/details?id=br.codize.appprovedor"
                    class="text-dark link-underline link-underline-opacity-0">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3>Google Play</h3> <img src="images/Google_Play_2022_icon.svg.png" class="ms-3" width="40px"
                            height="40px">
                    </div>
                    <p>Faça download <br> no botão abaixo</p>
                    <button
                        class="btn btn-warning rounded-5 text-white fw-bold align-items-center justify-content-center">Clique
                        Aqui
                        <img src="images/download_24dp.png" width="20px" height="20px"></button>
                </a>
            </div>
            <div data-aos="flip-right" data-aos-duration="700"
                class="border text-center p-3 bg-white text-dark rounded p-2" style="width: 300px">
                <a href="https://apps.apple.com/br/app/app-provedor/id1564606498"
                    class="text-dark link-underline link-underline-opacity-0">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3>App Store</h3> <img src="images/App_Store_(iOS).svg.png" class="ms-3" width="40px"
                            height="40px">
                    </div>
                    <p>Faça download <br> no botão abaixo</p>
                    <button
                        class="btn btn-warning rounded-5 text-white fw-bold align-items-center justify-content-center">Clique
                        Aqui
                        <img src="images/download_24dp.png" width="20px" height="20px"></button>
                </a>
            </div>
        </div>
    </div>

    <hr>

    <main id="empresa">
        <div class="d-flex justify-content-center align-items-center text-dark pt-3 p-4 vw-100 h-100">
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
                    estáveis e acessíveis, garantindo a melhor experiência para residências, empresas e instituições de
                    todos os
                    portes.
                </p>
                <p class="lead" data-aos="fade-up">
                    Mais do que entregar conexão, acreditamos em fortalecer comunidades, fomentar o crescimento local e
                    simplificar
                    o acesso ao mundo digital. Contamos com uma equipe qualificada, suporte técnico eficiente e um
                    compromisso
                    constante com a inovação e a satisfação dos nossos clientes.
                </p>
                <div data-aos="fade-up" class="text-center mt-4">
                    <img src="images/anatel.png" id="app" class="img-fluid pe-none" style="max-width: 200px;">
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-primary text-white">
        <div data-aos="fade-up" class="pt-4 d-flex flex-column text-center">
            <h2 class="fw-bold">GlobalNet Fibra</h2>
            <p class="fs-5">Descubra as vantagens de contratar a GlobalNet</p>
        </div>

        <div class="d-flex flex-column text-center">
            <div data-aos="zoom-in-down" class="p-3">
                <img src="images/cell_tower_24dp.png" width="80px">
                <p class="fs-6">Suporte 𝟮𝟰 𝗵𝗼𝗿𝗮𝘀 no whatsapp para garantir que seus
                    problemas sejam resolvidos a qualquer momento, em qualquer dia da semana.</p>
            </div>
            <div data-aos="zoom-in-down" class="p-3">
                <img src="images/5g_24dp.png" width="80px">
                <p class="fs-6">Possuimos roteadores com Wi-Fi 5G <br> para sua navegação ser ainda mais veloz, ideal
                    para jogos
                    online e
                    downloads sem interrupções.</p>
            </div>
            <div data-aos="zoom-in-down" class="p-3">
                <img src="images/verified_user_24dp.png" width="80px">
                <p class="fs-6">Velocidade, conexão estável, desempenho e segurança. Ideal para clientes que
                    buscam eficiência, confiança e tecnologia de ponta.</p>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-center fw-bold d-flex justify-content-center align-items-center">
            <p>© 2025 | GLOBALNET CNPJ: 09649158000161 - Todos os direitos reservados</p>
        </div>

    </footer>

    <a href="https://api.whatsapp.com/send?phone=5551991437617">
        <img src="images/whatsapp-icon.png" alt="WhatsApp Icon" class="img-fluid position-fixed"
            style="width: 70px; height: 70px; bottom: 30px; right: 30px; animation: bounce 2s infinite;">
    </a>

</body>

</html>