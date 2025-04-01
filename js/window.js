window.addEventListener("resize", function() {
    function verificarLargura() {
        if (window.innerWidth > 1167 && !window.location.href.includes('index.html')) {
            window.location.href = 'index.html';
        }
        if (window.innerWidth < 1167 && window.location.href.includes('index.html')) {
            window.location.href = 'index_phone.html';
        }
    }
    verificarLargura();
    window.addEventListener('resize', verificarLargura);
});
