document.addEventListener("DOMContentLoaded", function () {
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

    
        const logo = document.createElement('img');
        logo.src = 'images/logo_global.png'; 
        logo.width = 300;
        splashScreen.appendChild(logo);
    
        document.body.appendChild(splashScreen);

        setTimeout(function () {
            splashScreen.style.opacity = '0'; 
            splashScreen.style.overflow = 'hidden';
            setTimeout(function () {
                splashScreen.style.display = 'none';
                document.getElementById('main-content').style.display = 'none'; 
            }, 500);
        }, 1500); 
    }

    showSplashScreen();
});
