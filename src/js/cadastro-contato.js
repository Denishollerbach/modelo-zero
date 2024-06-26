let validacaoNome = false;
let validacaoCpf = false;
let validacaoEmail = false;
let validacaoData = false;
let validacaoAceite = false;

// Validadores
function validaNome() {
     if ($('#crm-nome-lp').val() == '') {
          $('#crm-aviso-nome-lp').addClass('exibe-aviso').focus().text('Campo obrigatório');
     } else {
          $('#crm-aviso-nome-lp').removeClass('exibe-aviso');
          validacaoNome = true;
     }
}

function validaEmail() {
     if ($('#crm-email-lp').val() == '') {
          $('#crm-aviso-email-lp').addClass('exibe-aviso').focus().text('Campo obrigatório');
     } else {
          var re = /\S+@\S+\.\S+/;
          if (re.test($('#crm-email-lp').val())) {
               $('#crm-aviso-email-lp').removeClass('exibe-aviso');
               validacaoEmail = true;
          } else {
               $('#crm-aviso-email-lp').addClass('exibe-aviso').focus().text('E-mail inválido');
          }
     }
}

function validaData() {
     if ($('#crm-data-lp').val() == '') {
          $('#crm-aviso-data-lp').addClass('exibe-aviso').focus().text('Campo obrigatório');
     } else {
          var re = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
          if (re.test($('#crm-data-lp').val())) {
               $('#crm-aviso-data-lp').removeClass('exibe-aviso');
               validacaoData = true;
          } else {
               $('#crm-aviso-data-lp').addClass('exibe-aviso').focus().text('Data inválido');
          }
     }
}

function validaAceite() {
     if (!$('#agree-crm-lp').is(':checked')) {
          $('#crm-aviso-aceite-lp').addClass('exibe-aviso').focus().text('Aceite os termos de uso e política de privacidade');
     } else {
          $('#crm-aviso-aceite-lp').removeClass('exibe-aviso');
          validacaoAceite = true;
     }
}
// Validar CPF
// Função para validar o formato do CPF
function validaFormatoCpf(cpf) {
     // Lógica para validar o formato do CPF
     var re = /^[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}$/;
     return re.test(cpf);
}

// Função principal para validar o CPF
function validaCpf() {
     var cpf = $('#crm-cpf-lp').val().replace(/\D/g, '');
     if (cpf.length !== 11 || !validaFormatoCpf(cpf)) {
          $('#crm-aviso-cpf-lp').addClass('exibe-aviso').focus().text('CPF inválido');
     } else {
          $('#crm-aviso-cpf-lp').removeClass('exibe-aviso');
          validacaoCpf = true;
     }
}

// Máscaras
$('#crm-data-lp').mask('00/00/0000');
$('#crm-cpf-lp').mask('000.000.000-00', { reverse: true });

// Enviar dados do lead para SF e banco
document.getElementById('crm-btn-lp').addEventListener('click', function () {
     validaNome();
     validaCpf();
     validaEmail();
     validaData();
     validaAceite();

     if (validacaoNome && validacaoCpf && validacaoEmail && validacaoData && validacaoAceite) {
          sendLead();
     }
});

function sendLead() {
     const nome = document.getElementById('crm-nome-lp').value;
     const cpf = document.getElementById('crm-cpf-lp').value;
     const email = document.getElementById('crm-email-lp').value;
     const dataNascimento = document.getElementById('crm-data-lp').value;


     fetch('acao-circuito-sertanejo.php', {
          method: 'POST',
          headers: {
               'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
          },
          body: new URLSearchParams({
               nome: nome,
               cpf: cpf,
               email: email,
               dataNascimento: dataNascimento
          })
     })
          .then(response => response.json())
          .then(data => {
               if (data.status === 'success') {
                    // Sucesso - exibir mensagem de sucesso com SweetAlert
                    Swal.fire({
                         icon: 'success',
                         title: 'Sucesso!',
                         text: data.message
                    }).then(() => {
                         // esconde o formulário e mostra o resultado do cupom
                         // console.log('Mostrar cupom');

                         // document.getElementById('imagemBrinde').src = 'https://www.engov.com.br/assets/images/produtos/'+data.cupom+'.webp';
                         if (data.cupom === 'engov-up') {
                              document.getElementById('nomeBrinde').innerText = 'Você ganhou um Engov Up!';
                         } else if (data.cupom === 'drink') {
                              document.getElementById('nomeBrinde').innerText = 'Você ganhou um Drink!';
                         }


                         document.getElementById('formulario-cadastro-lp').reset();
                         document.getElementById('formulario-cadastro-lp').style.display = 'none';
                         document.getElementById('resultadoCupom').removeAttribute('hidden');

                    });
               } else {
                    // Falha - exibir mensagem de erro com SweetAlert
                    Swal.fire({
                         icon: 'error',
                         title: 'Erro!',
                         text: 'Erro de cadastro: ' + data.message
                    });
               }
          })
          .catch(error => {
               // Erro de conexão ou servidor - exibir mensagem de erro com SweetAlert
               Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Erro ao conectar-se ao servidor: ' + error.message
               });
          });
}


// Funcionalidades do modal de cupom
function copiarTexto() {
     let texto = document.getElementById("campo-cupom");
     texto.select();
     texto.setSelectionRange(0, 99999);
     navigator.clipboard.writeText(texto.value);
}