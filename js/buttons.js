document.addEventListener("DOMContentLoaded", function () {
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

    if (window.innerWidth <= 734) {
        containers.forEach((container, index) => {
            containers[0].setAttribute("data-aos-duration", "350");
            containers[1].setAttribute("data-aos-duration", "350");
            containers[2].setAttribute("data-aos-duration", "350");
            containers[3].setAttribute("data-aos-duration", "350");
            containers[4].setAttribute("data-aos-duration", "350");
            containers[5].setAttribute("data-aos-duration", "350");
        });
    } else {
        containers[0].setAttribute("data-aos-duration", "450");
        containers[1].setAttribute("data-aos-duration", "350");
        containers[2].setAttribute("data-aos-duration", "300");
        containers[3].setAttribute("data-aos-duration", "300");
        containers[4].setAttribute("data-aos-duration", "350");
        containers[5].setAttribute("data-aos-duration", "450");
    }

}
load();
window.addEventListener('resize', load);
});