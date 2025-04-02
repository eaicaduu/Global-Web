document.addEventListener("DOMContentLoaded", function () {
const container = document.getElementById("scroll-container");
let isDown = false;
let startX, scrollLeft;

container.addEventListener("mousedown", (e) => {
    isDown = true;
    container.style.cursor = "grabbing";
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
});

container.addEventListener("mouseleave", () => {
    isDown = false;
    container.style.cursor = "grab";
});

container.addEventListener("mouseup", () => {
    isDown = false;
    container.style.cursor = "grab";
});

container.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - container.offsetLeft;
    const walk = (x - startX) * 1;
    container.scrollLeft = scrollLeft - walk;
});
function containerLoad() {
if (window.innerWidth <= 992) {
container.style.visibility = "hidden";
} else {
    container.style.visibility = "visible";
}
}

containerLoad();
window.addEventListener("load", containerLoad);
window.addEventListener("resize", containerLoad);
});