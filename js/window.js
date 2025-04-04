document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.getElementById("link");
    const apps = document.getElementById("app");
    let imagens = document.querySelectorAll("#imageCarousel .carousel-item img");

    function load() {
        if (window.innerWidth <= 992) {
        buttons.classList.add("d-none");
        apps.classList.add("d-none");
            imagens[0].src = "images/mobile-1.png";
            imagens[1].src = "images/mobile-2.png";
            imagens[2].src = "images/mobile-3.png";
            imagens[3].src = "images/mobile-4.png";
        } else {
            imagens[0].src = "images/desktop-1.png";
            imagens[1].src = "images/desktop-2.png";
            imagens[2].src = "images/desktop-3.png";
            imagens[3].src = "images/desktop-4.png";
        buttons.classList.remove("d-none");
        apps.classList.remove("d-none");
        }
    }

    window.addEventListener("load", load);
    window.addEventListener("resize", load);
});
