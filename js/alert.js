
function instrucoes1() {
  Swal.fire({
    html: `
      <h3 style="font-weight: bold;">Passo a Passo para Testar a Velocidade da Sua Internet</h3> <br>
      1º Escolha a melhor conexão.<br>
      Para um teste mais preciso, conecte o computador <br> ou notebook diretamente ao roteador usando <br> um cabo de rede.<br>
      <br> Se for testar via Wi-Fi. <br>
      Certifique-se de estar no mesmo cômodo do roteador.
      <br> Usando apenas a rede 5G do seu roteador (Wi-Fi 5 GHz), pois ela oferece maior velocidade e menor interferência.<br>
      <br>
      <div class="d-flex justify-content-between">
      <button onclick="Swal.close();" class="btn btn-danger">Cancelar</button>
      <a onclick="Swal.close(); instrucoes2()"
      <button class="btn btn-primary text-white">Próximo</button>
      </a>
      </div>
      `,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
  })

}

function instrucoes2() {
  Swal.fire({
    html: `
      <h3 style="font-weight: bold;">Passo a Passo para Testar a Velocidade da Sua Internet</h3> <br>
      2º Feche todos os programas e dispositivos que usam <br>
      internet para evitar resultados imprecisos. <br>
      Feche vídeos, downloads, chamadas de vídeo <br>
      e outros aplicativos que consomem a conexão.<br>
      Desconecte outros dispositivos <br> (celulares, smart TVs, videogames) <br>
      que possam estar usando a internet no momento.<br>
      <br>
      <div class="d-flex justify-content-between">
      <button onclick="instrucoes1();" class="btn btn-danger">Voltar</button>
      <a onclick="Swal.close(); instrucoes3()"
      <button class="btn btn-primary text-white">Próximo</button>
      </a>
      </div>`,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
  })
}

function instrucoes3() {
  Swal.fire({
    html: `
      <h3 style="font-weight: bold;">Passo a Passo para Testar a Velocidade da Sua Internet</h3> <br>
      3º Inicie o teste e assim que a página carregar <br>
      o teste começará automaticamente.<br>
      Aguarde alguns segundos enquanto <br>
      a ferramenta mede sua velocidade.<br>
      <br>
      Para ver mais detalhes, clique no botão <br> "Mostrar mais informações" <br>
      <img class="pe-none" src="images/fastbtn.png">
      <div class="d-flex justify-content-between">
      <button onclick="instrucoes2();" class="btn btn-danger">Voltar</button>
      <a onclick="Swal.close(); instrucoes4()"
      <button class="btn btn-primary text-white">Próximo</button>
      </a>
      </div>`,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
  })
}

function instrucoes4() {
  Swal.fire({
    html: `
      <h3 style="font-weight: bold;">Passo a Passo para Testar a Velocidade da Sua Internet</h3> <br>
      4º Analise os resultados, o site <br> mostrará os seguintes dados:<br>
      <br>
      Download (Mbps): Velocidade para baixar arquivos. <br>
      Upload (Mbps): Velocidade para enviar arquivos. <br>
      Latência (Ping - ms): Tempo de resposta da conexão (quanto menor, melhor).<br>
      <br>
      <div class="d-flex justify-content-between">
      <button onclick="instrucoes3();" class="btn btn-danger">Voltar</button>
      <a onclick="Swal.close(); instrucoes5()"
      <button class="btn btn-primary text-white">Próximo</button>
      </a>
      </div>`,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
  })
}

function instrucoes5() {
  Swal.fire({
    html: `
      <h3 style="font-weight: bold;">Passo a Passo para Testar a Velocidade da Sua Internet</h3> <br>
      5º Compare com o seu plano de internet.<br>
      Verifique a velocidade contratada no seu plano. <br>
      <br>
      <a onclick="Swal.close();" target="_blank" href="https://fast.com"><button class="btn btn-warning fw-bold fs-5 text-white">Realizar Teste
      <img src="images/wifi_test_24dp.png" width="25px"></button></a>
      <br>
      <br>Se os valores estiverem muito abaixo do esperado:<br>
      Reinicie o roteador e refaça o teste ou<br>
      Entre em contato com o suporte 24h. <br> 
      <br>
      <div class="d-flex justify-content-between">
      <button onclick="instrucoes4();" class="btn btn-danger">Voltar</button>
      <a class="link-underline link-underline-opacity-0 text-white" href="https://api.whatsapp.com/send?phone=5551991437617">
      <button class="btn btn-success">WhatsApp</a>
      <a onclick="Swal.close(); instrucoes5()">
      </a>
      </div>`,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
  })
}

AOS.init({
  duration: 500,
});

document.addEventListener("DOMContentLoaded", function () {

  const button = document.getElementById('testconn');
  const inputs = document.querySelectorAll("input");

  if (button) {
    button.addEventListener('click', instrucoes1);
  }

  inputs.forEach((input, index) => {
    input.addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        event.preventDefault();
        const nextInput = inputs[index + 1];
        if (nextInput) {
          nextInput.focus();
        }
      }
    });
  });
  

  const telefoneInput = document.getElementById("tel");

  telefoneInput.addEventListener("input", function () {
    const telefone = telefoneInput.value.trim();

    if (telefone.length === 15) {
      const formDataTel = {
        nome: "",
        telefone,
        endereco: "",
        email: ""
      };
      enviarTel(formDataTel);
    }
  });

  const form = document.getElementById("form");

  const submitButton = form.querySelector("button");
  submitButton.addEventListener("click", function () {

    const nomeInput = document.getElementById("nome");
    const enderecoInput = document.getElementById("end");
    const emailInput = document.getElementById("email");

    const email = emailInput.value.trim();
    const telefone = telefoneInput.value.trim();
    const nome = nomeInput.value.trim();
    const endereco = enderecoInput.value.trim();

    if (!nome || !telefone || !endereco) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Preencha todos os campos obrigatórios!",
      });
      return;
    }

    const formData = {
      nome,
      telefone,
      endereco,
      email
    };

    enviar(formData)

  });
});

function enviarTel(formDataTel) {
  fetch("https://api.sheetmonkey.io/form/kJpFBo7DRXfkjQnuptCWit", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(formDataTel)
  })
    .then(response => {
      if (!response.ok) {
        throw new Error("Erro ao enviar os dados");
      }
      return response.text();
    })
}

function enviar(formData) {
  fetch("https://api.sheetmonkey.io/form/kJpFBo7DRXfkjQnuptCWit", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(formData)
  })
    .then(response => {
      if (!response.ok) {
        throw new Error("Erro ao enviar os dados");
      }
      return response.text();
    })
    .then(() => {
      Swal.fire({
        icon: "success",
        title: "Solicitação recebida!",
        html: "Recebemos seus dados com sucesso! <br> Nossa equipe entrará em contato em breve."
      });
      document.getElementById("email").value = "";
      document.getElementById("nome").value = "";
      document.getElementById("tel").value = "";
      document.getElementById("end").value = "";
    })
    .catch(error => {
      Swal.fire({
        icon: "error",
        title: "Erro!",
        text: "Ocorreu um erro ao enviar os dados."
      });
      console.error("Erro ao enviar:", error);
    });
}

function validarNome() {
  const nomeInput = document.getElementById('nome');

  nomeInput.value = nomeInput.value.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, "");

  nomeInput.value = nomeInput.value.replace(/\b\w/g, function (match) {
    return match.toUpperCase();
  }).replace(/\B\w/g, function (match) {
    return match.toLowerCase();
  });
}

function validarTelefone() {
  const telInput = document.getElementById('tel');

  telInput.value = telInput.value.replace(/[^0-9\(\)\-\s]/g, "");

  telInput.value = telInput.value.replace(/^(\d{2})(\d)/, "($1) $2");
  telInput.value = telInput.value.replace(/(\d{5})(\d{4})/, "$1-$2");
}

function validarEndereco() {
  const endInput = document.getElementById('end');

  endInput.value = endInput.value.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ0-9\s,.-]/g, "");

  endInput.value = endInput.value.replace(/\b\w/g, function (match) {
    return match.toUpperCase();
  }).replace(/\B\w/g, function (match) {
    return match.toLowerCase();
  });
}

function validarEmail() {
  const emailInput = document.getElementById('email');
  const select = document.getElementById('email-suggestions');

  const emailValue = emailInput.value;

  if (emailValue.includes('@') && emailValue.indexOf('@')) {
    select.style.display = 'block';
  } else {
    select.style.display = 'none';
  }

}

function preencherEmail() {
  const emailInput = document.getElementById('email');
  const emailSuggestions = document.getElementById('email-suggestions');

  const selectedDomain = emailSuggestions.value;
  const emailValue = emailInput.value.split('@')[0];
  emailInput.value = emailValue + '@' + selectedDomain;
  emailSuggestions.style.display = 'none';
}