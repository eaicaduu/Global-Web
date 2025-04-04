
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

function requestsuport() {
  Swal.fire({
    html: `
      <h3 style="font-weight: bold;">Escolha o Tipo de Suporte</h3> <br>
      Selecione uma das opções abaixo:
      <br><br>
           <div class="d-flex flex-column gap-3">
        <a href="https://api.whatsapp.com/send?phone=5551985761735&text=Olá,%20preciso%20de%20suporte%20técnico"
          target="_blank" class="btn btn-primary w-100 fw-bold fs-5 d-flex align-items-center justify-content-center">
          <i class="bi bi-tools me-2"></i> Suporte Técnico
        </a>
        <a href="https://api.whatsapp.com/send?phone=5551989708546&text=Olá,%20preciso%20de%20suporte%20financeiro"
          target="_blank" class="btn btn-success w-100 fw-bold fs-5 d-flex align-items-center justify-content-center">
          <i class="bi bi-cash-coin me-2"></i> Suporte Financeiro
        </a>
      </div>
      <br>
      <button onclick="Swal.close();" class="btn btn-danger w-100 fw-bold">Fechar</button>
    `,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: true,
    allowEscapeKey: true
});
}

document.addEventListener("DOMContentLoaded", function () {

  AOS.init({
    duration: 500,
  });

  const testconn = document.getElementById('testconn');
  const suport = document.getElementById('suport');
  testconn.addEventListener('click', instrucoes1);
  suport.addEventListener('click', requestsuport);

});