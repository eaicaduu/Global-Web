document.addEventListener("DOMContentLoaded", function () {

    function trocarImagens() {
        let imagens = document.querySelectorAll("#imageCarousel .carousel-item img");
        if (window.innerWidth >= 992) {
            imagens[0].src = "images/desktop-1.png";
            imagens[1].src = "images/desktop-2.png";
            imagens[2].src = "images/desktop-3.png";
            imagens[3].src = "images/desktop-4.png";
        } else {
            imagens[0].src = "images/mobile-1.png";
            imagens[1].src = "images/mobile-2.png";
            imagens[2].src = "images/mobile-3.png";
            imagens[3].src = "images/mobile-4.png";
        }
    }

window.addEventListener("load", trocarImagens);
window.addEventListener("resize", trocarImagens);


});