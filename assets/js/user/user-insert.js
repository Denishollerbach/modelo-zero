// Importar a função padrão de conectaApi.js
import { conectaApi } from "../api/conectaApi.js";
import { listarUsuarios } from "./user-select.js";
// import Swal from 'sweetalert2';

// Event listener para o formulário de cadastro de usuário
document.querySelector("[data-formulario-usuario]").addEventListener("submit", async (event) => {
     event.preventDefault(); // Previne o comportamento padrão do formulário

     // Obtém os valores dos campos do formulário
     const nomeInput = event.target.elements.nomeUsuario;
     const emailInput = event.target.elements.emailUsuario;
     const senhaInput = event.target.elements.senhaUsuario;

     const nome = nomeInput.value;
     const email = emailInput.value;
     const senha = senhaInput.value;

     // Tenta cadastrar o usuário chamando a API
     try {
          const emailExistente = await conectaApi.verificarEmailExistente(email);
          if (emailExistente) {
               // Exibe uma mensagem de erro usando SweetAlert2
               Swal.fire({
                    icon: 'info',
                    title: 'Este e-mail já está cadastrado!',
                    text: 'Por favor, use outro e-mail.',
               });
               // Sai da função se o e-mail já existir
               return;
          } else {
               // Faz a chamada para a API para cadastrar o usuário
               const resposta = await conectaApi.cadastroDeUsuario(nome, email, senha);

               // Verifica se o cadastro foi bem-sucedido
               if (resposta.status === 'success') {
                    // Se o cadastro foi bem-sucedido, atualiza a lista de usuários
                    await listarUsuarios();

                    // Limpa os valores dos campos do formulário
                    nomeInput.value = '';
                    emailInput.value = '';
                    senhaInput.value = '';

                    // Exibe uma mensagem de sucesso usando Sweet Alert
                    Swal.fire({
                         icon: 'success',
                         title: 'Sucesso!',
                         text: resposta.message
                    });
               } else {
                    // Se houve um erro no cadastro, exibe a mensagem de erro
                    console.error("Erro ao cadastrar o usuário:", resposta.message);

                    // Exibe uma mensagem de erro usando Sweet Alert
                    Swal.fire({
                         icon: 'error',
                         title: 'Erro!',
                         text: resposta.message
                    });
               }
          }
     } catch (error) {
          // Se ocorrer um erro ao chamar a API, imprime no console e exibe uma mensagem de erro
          console.error("Erro ao cadastrar o usuário:", error);

          // Exibe uma mensagem de erro usando Sweet Alert
          Swal.fire({
               icon: 'error',
               title: 'Erro!',
               text: 'Erro ao cadastrar o usuário. Por favor, tente novamente mais tarde.'
          });
     }
});
