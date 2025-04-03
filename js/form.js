document.addEventListener("DOMContentLoaded", function () {

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
          confirmButtonColor: "#007bff"
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