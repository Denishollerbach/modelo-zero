// import { conectaApi } from "./conectaApi.js";
import { conectaApi } from "../api/conectaApi.js";

document.addEventListener('click', event => {
     const button = event.target.closest('[data-btn-user-update]');
     if (button) {
          document.body.classList.add('overflow-hidden');
          const usuarioItem = button.closest('.user-item');

          // Obtenha o userId do item atualmente sendo editado
          const currentUserId = usuarioItem.dataset.userId;
          
          const name = usuarioItem.querySelector('.user-name').textContent.trim();
          const email = usuarioItem.querySelector('.user-email').textContent.trim();

          abrirModal(currentUserId, name, email);
     }
});

function abrirModal(userId, name, email) {
     Swal.fire({
          title: 'Editar usuário',
          html: `
               <div class="form-group text-start">
                    <label for="swal-editName">Nome</label>
                    <input id="swal-editName" class="mx-0 swal2-input form-control" value="${name}" placeholder="Nome">
               </div>
               <div class="form-group text-start">
                    <label for="swal-editEmail">Email</label>
                    <input id="swal-editEmail" class="mx-0 swal2-input form-control" value="${email}" placeholder="Email">
               </div>
          `,
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          confirmButtonText: 'Salvar Alterações',
          customClass: {
               closeButton: 'swal2-close-button',
          },
          preConfirm: () => {
               const newName = document.getElementById('swal-editName').value.trim();
               const newEmail = document.getElementById('swal-editEmail').value.trim();
               salvarAlteracoes(userId, newName, newEmail);
          }
     }).then(() => {
          document.body.classList.remove('overflow-hidden');
     });
}

async function salvarAlteracoes(userId, newName, newEmail) {
     try {
          await conectaApi.editarUsuario(userId, newName, newEmail);
          const editedUsuarioItem = document.querySelector(`.user-item[data-user-id="${userId}"]`);
          editedUsuarioItem.querySelector('.user-name').textContent = newName;
          editedUsuarioItem.querySelector('.user-email').textContent = newEmail;
          Swal.fire('Alterações salvas com sucesso!', '', 'success');
     } catch (error) {
          Swal.fire('Erro ao salvar as alterações!', error.message, 'error');
     }
}
