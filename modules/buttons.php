<div class="p-4 w-100 d-flex flex-wrap justify-content-center gap-3">
    <h1 class="text-center w-100" data-aos="fade-up" id="atendimento">Atendimento</h1>

    <!-- Serviços Principais -->
    <a href="#" data-aos="zoom-in-up" data-aos-duration="380"
        class="link btn btn-primary d-flex flex-column align-items-center justify-content-center p-3 rounded-4 text-white"
        style="width: 160px; height: 160px;">
        <i class="bi bi-globe-americas display-2 pt-3"></i>
        <h5 class="mt-2">Nossos Planos</h5>
    </a>

    <a href="#" data-aos="zoom-in-up" data-aos-duration="350"
        class="link btn btn-primary d-flex flex-column align-items-center justify-content-center p-3 rounded-4 text-white"
        style="width: 160px; height: 160px;">
        <i class="bi bi-geo-alt display-2 pt-3"></i>
        <h5 class="mt-2">Verificar Cobertura</h5>
    </a>

    <a id="testconn" href="#" data-aos="zoom-in-up" data-aos-duration="300"
        class="link btn btn-primary d-flex flex-column align-items-center justify-content-center p-3 rounded-4 text-white"
        style="width: 160px; height: 160px;">
        <i class="bi bi-speedometer2 display-2 pt-3"></i>
        <h5 class="mt-2">Teste de Conexão</h5>
    </a>

    <!-- Atendimento e Suporte -->
    <a href="#" data-aos="zoom-in-up" data-aos-duration="300"
        class="link btn btn-primary d-flex flex-column align-items-center justify-content-center p-3 rounded-4 text-white"
        style="width: 160px; height: 160px;">
        <i class="bi bi-headset display-2 pt-3"></i>
        <h5 class="mt-2">Suporte Remoto</h5>
    </a>

    <a href="#" data-aos="zoom-in-up" data-aos-duration="350"
        class="link btn btn-primary d-flex flex-column align-items-center justify-content-center p-3 rounded-4 text-white"
        style="width: 160px; height: 160px;">
        <i class="bi bi-printer display-2 pt-3"></i>
        <h5 class="mt-2">2ª Via Boleto</h5>
    </a>

    <!-- Extra -->
    <a href="#" data-aos="zoom-in-up" data-aos-duration="380"
        class="link btn btn-primary d-flex flex-column align-items-center justify-content-center p-3 rounded-4 text-white"
        style="width: 160px; height: 160px;">
        <i class="bi bi-app-indicator display-2 pt-3"></i>
        <h5 class="mt-2">Nosso App</h5>
    </a>
</div>

<script>
const containers = document.querySelectorAll(".link");

function load() {
    if (window.innerWidth <= 382) {
        containers.forEach(container => {
            container.style.width = "120px";
            container.style.height = "120px";
        });
    } else {
        containers.forEach(container => {
            container.style.width = "160px";
            container.style.height = "160px";
        });
    }
}
load();
window.addEventListener('resize', load);
</script>