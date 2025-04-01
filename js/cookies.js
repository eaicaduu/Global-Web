document.addEventListener("DOMContentLoaded", function () {
    const isMobile = window.innerWidth <= 1000;
    const style = document.createElement("style");

    style.innerHTML = `
        #cookieBanner {
            position: fixed;
            bottom: -100px;
            left: 0;
            width: 100%;
            background: ${isMobile ? "rgba(50, 50, 50, 0.95)" : "rgba(0, 0, 0, 0.9)"};
            color: white;
            text-align: center;
            padding: ${isMobile ? "10px" : "15px"};
            transition: bottom 0.5s ease-in-out;
            z-index: 1000;
            font-size: ${isMobile ? "14px" : "16px"};
            border-bottom: 2px solid #0d6efd;
        }
        #cookieBanner.show {
            bottom: 0;
        }
        #cookieBanner.hide {
            bottom: -100px;
        }
    `;
    document.head.appendChild(style);

    function getCookie(name) {
        return document.cookie.split('; ').find(row => row.startsWith(name + '='))?.split('=')[1];
    }

    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000)); 
        const expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    if (!getCookie("cookies_aceitos")) {
        const banner = document.createElement("div");
        banner.id = "cookieBanner";
        banner.classList.add("d-none");
        banner.innerHTML = `
            ${isMobile ? "📱" : "🍪"} Este site usa cookies para melhorar sua experiência. Leia nossos 
            <a href="termos.html" class="text-warning">Termos de Uso</a> e 
            <a href="politica.html" class="text-warning">Política de Privacidade</a>.
            <button id="acceptCookies" class="btn btn-sm ${isMobile ? "btn-primary" : "btn-warning"} ms-2">Aceitar</button>
        `;

        document.body.appendChild(banner);

        setTimeout(() => {
            banner.classList.remove("d-none");
            setTimeout(() => {
                banner.classList.add("show");
            }, 50);
        }, 3000);


        document.getElementById("acceptCookies").addEventListener("click", function () {
            setCookie("cookies_aceitos", "true", 365);
            const email = getCookie("user_email") || null;
            setCookie("user_email", email, 365);

            banner.classList.remove("show");
            banner.classList.add("hide");
        });
    }
});
