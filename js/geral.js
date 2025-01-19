
const script_google = 'https://script.google.com/macros/s/AKfycbyRTsO7sgJgk_TIq29lXEoPfMQHnOmvKWs7lNd4Ot9htcRc3NSPnFEb-RGst5ek3PiwXA/exec';
const dados = document.forms['form'];

dados.addEventListener('submit', function(e) {
    e.preventDefault();

    fetch(script_google, {method: 'POST', body: new FormData(dados)})
    .then(response => {
        dados.reset();
    })
})
