document.addEventListener("DOMContentLoaded", function () {
    const theme = document.getElementById("theme");
    const body = document.body;
    const navbar = document.getElementById("navbar");
    const navitems = document.querySelectorAll(".nav-link");
    const text = document.querySelectorAll(".text-change");
    const icons = document.querySelectorAll(".theme-icon");
    const hr = document.getElementById("hr");

    function applyTheme(darkMode) {
        if (darkMode) {
            body.classList.add("bg-dark");
            body.classList.remove("bg-white");
            
            navbar.classList.add("bg-dark");
            navbar.classList.remove("bg-white");
            
            hr.classList.add("text-white");
            hr.classList.remove("text-dark");
            
            text.forEach(t => {
                t.classList.add("text-white");
                t.classList.remove("text-dark");
            });

            navitems.forEach(item => {
                item.classList.add("text-white");
                item.classList.remove("text-dark");
            });

            icons.forEach(icon => {
                icon.src = icon.src.replace('dark_24dp.png', 'white_24dp.png');
            });

            theme.src = "images/dark_mode_24dp.png";
        } else {
            body.classList.add("bg-white");
            body.classList.remove("bg-dark");

            navbar.classList.add("bg-white");
            navbar.classList.remove("bg-dark");

            hr.classList.add("text-dark");
            hr.classList.remove("text-white");

            text.forEach(t => {
                t.classList.add("text-dark");
                t.classList.remove("text-white");
            });

            navitems.forEach(item => {
                item.classList.add("text-dark");
                item.classList.remove("text-white");
            });

            icons.forEach(icon => {
                icon.src = icon.src.replace('white_24dp.png', 'dark_24dp.png');
            });

            theme.src = "images/light_mode_24dp.png";
        }

        localStorage.setItem("darkMode", darkMode ? "enabled" : "disabled");
    }

    const savedTheme = localStorage.getItem("darkMode");
    const darkMode = savedTheme === "enabled";
    applyTheme(darkMode);

    theme.addEventListener("click", function () {
        theme.style.transition = "transform 0.5s ease-out, filter 0.2s";
        theme.style.transform = "rotate(280deg)";
        theme.style.filter = "blur(0.8px)";

        setTimeout(() => {
            applyTheme(!body.classList.contains("bg-dark"));
            theme.style.transform = "rotate(0deg)";
            theme.style.filter = "blur(0px)";
        }, 300);
    });
});
