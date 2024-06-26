// Importa a função de exclusão do arquivo conectaApi.js
import { conectaApi } from "../api/conectaApi.js";
import { listarUsuarios } from "./user-select.js";

// Adicione o evento de clique ao elemento pai dos botões de exclusão
document.addEventListener('click', async (event) => {
     // Verifica se o clique foi em um botão de exclusão
     if (event.target.classList.contains('btn-delete-user')) {
          // Obtém o ID do usuario a partir do elemento pai do botão
          const idUsuario = event.target.closest('.user-item').dataset.idUsuario;
          console.log("Botão de excluir clicado");

          // Exibe um modal de confirmação usando o SweetAlert
          Swal.fire({
               title: 'Tem certeza?',
               text: 'Você realmente deseja excluir este usuario?',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#d33',
               cancelButtonColor: '#3085d6',
               confirmButtonText: 'Sim, excluir!',
               cancelButtonText: 'Cancelar'
          }).then(async (result) => {
               if (result.isConfirmed) {
                    // Se o usuário confirmar, exclua o usuario
                    try {
                         // Chama a função de exclusão
                         const response = await conectaApi.deleteUsuario(idUsuario);
                         // Exibe a mensagem de sucesso
                         Swal.fire({
                              title: 'Excluído!',
                              text: response.message,
                              icon: 'success'
                         });
                         // Atualiza a lista de user-its após a exclusão
                         listarUsuarios();
                    } catch (error) {
                         // Se houver erro, exibe um alerta com a mensagem de erro
                         alert(error);
                    }
               }
          });
     }
});
