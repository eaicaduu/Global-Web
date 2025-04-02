document.addEventListener("DOMContentLoaded", function () {
    
    let carouselElement = document.getElementById("imageCarousel");
    let carousel = new bootstrap.Carousel(carouselElement, {
        interval: 5000,
        ride: "carousel"
    });

    function showSplashScreen() {
        const splashScreen = document.createElement('div');
        splashScreen.id = 'splash-screen';
        splashScreen.style.position = 'fixed';
        splashScreen.style.top = '0';
        splashScreen.style.left = '0';
        splashScreen.style.width = '100%';
        splashScreen.style.height = '100%';
        splashScreen.style.backgroundColor = '#007bff';
        splashScreen.style.display = 'flex';
        splashScreen.style.justifyContent = 'center';
        splashScreen.style.alignItems = 'center';
        splashScreen.style.zIndex = '9999';
        splashScreen.style.transition = 'opacity 0.5s ease-out'; 
        document.body.style.overflow = 'hidden';
    
        const logo = document.createElement('img');
        logo.src = 'images/logo_global.png'; 
        logo.classList = 'pe-none';
        logo.width = 300;
        splashScreen.appendChild(logo);
    
        document.body.appendChild(splashScreen);

        setTimeout(function () {
            splashScreen.style.opacity = '0'; 
            document.body.style.overflow = '';
            splashScreen.style.overflow = 'hidden';
            setTimeout(function () {
                splashScreen.style.display = 'none';
            
            }, 500);
        }, 1500); 
    }

    showSplashScreen();
    
});
