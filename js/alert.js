document.addEventListener('DOMContentLoaded', function () {
  const button = document.getElementById('testconn');
  if (button) {
    button.addEventListener('click', instrucoes1);
  }
});

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
      2º Feche programas e dispositivos que usam <br>
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
      <img src="images/wifi_tethering_error_24dp4.png" width="25px"></button></a>
      <br>
      <br>Se os valores estiverem muito abaixo do esperado:<br>
      Reinicie o roteador e refaça o teste ou<br>
      Entre em contato com o suporte 24h. <br> 
      <br>
      <div class="d-flex justify-content-between">
      <button onclick="instrucoes4();" class="btn btn-danger">Voltar</button>
      <a class="link-underline link-underline-opacity-0 text-white" href="https://api.whatsapp.com/send?phone=5551991437617">
      <button class="btn btn-success">WhatsApp</a>
      <a onclick="Swal.close(); instrucoes5()"
      </a>
      </div>`,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
  })
}

function atualizarValor() {
  const valorBase100 = 89.90;
  const valorBase400 = 99.90;
  const valorBase600 = 129.90;

  let valorTel = 14.90
  let valorStr = 9.90

  function calcularValorAdicional(planoBase, idSwitch, valorAdicional) {
    const switchElement = document.getElementById(idSwitch);
    if (switchElement.checked) {
      return planoBase + valorAdicional;
    }
    return planoBase;
  }

  let valorFinal100 = valorBase100;
  let valorFinal400 = valorBase400;
  let valorFinal600 = valorBase600;

  if (document.getElementById("tel100").checked) valorFinal100 += valorTel;
  if (document.getElementById("str100").checked) valorFinal100 += valorStr;

  if (document.getElementById("tel400").checked) valorFinal400 += valorTel;
  if (document.getElementById("str400").checked) valorFinal400 += valorStr;

  if (document.getElementById("tel600").checked) valorFinal600 += valorTel;
  if (document.getElementById("str600").checked) valorFinal600 += valorStr;

  document.getElementById("valor100").textContent = valorFinal100.toFixed(2);
  document.getElementById("valor400").textContent = valorFinal400.toFixed(2);
  document.getElementById("valor600").textContent = valorFinal600.toFixed(2);
}

document.addEventListener('DOMContentLoaded', function () {
  const switches = document.querySelectorAll(".form-check-input");

  if (switches.length > 0) {
    switches.forEach(switchElement => {
      switchElement.addEventListener('change', atualizarValor);
    });

    atualizarValor();
  }
});

AOS.init({
  duration: 500,
});
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form");
  const submitButton = form.querySelector("button");

  submitButton.addEventListener("click", function () {
      const nomeInput = document.getElementById("nome");
      const telefoneInput = document.getElementById("tel");
      const enderecoInput = document.getElementById("end");
      
      const nome = nomeInput.value.trim();
      const telefone = telefoneInput.value.trim();
      const endereco = enderecoInput.value.trim();
      
      if (!nome || !telefone || !endereco) {
          Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Preencha todos os campos!",
          });
          return;
      } 

      const formData = {
          nome,
          telefone,
          endereco
      };

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

          nomeInput.value = "";
          telefoneInput.value = "";
          enderecoInput.value = "";
      })
      .catch(error => {
          Swal.fire({
              icon: "error",
              title: "Erro!",
              text: "Ocorreu um erro ao enviar os dados."
          });
          console.error("Erro ao enviar:", error);
      });
  });
});

function validarNome() {
  const nomeInput = document.getElementById('nome');

  nomeInput.value = nomeInput.value.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, "");

  nomeInput.value = nomeInput.value.replace(/\b\w/g, function(match) {
    return match.toUpperCase();
  }).replace(/\B\w/g, function(match) {
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
  
  endInput.value = endInput.value.replace(/\b\w/g, function(match) {
    return match.toUpperCase();
  }).replace(/\B\w/g, function(match) {
    return match.toLowerCase();
  });
}
