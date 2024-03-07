// Importar a função padrão de conectaApi.js
import { conectaApi } from "../api/conectaApi.js";

// Função para construir um usuário
export function constroiUsuario(id, nome, email) {
     const usuario = document.createElement("div");
     usuario.dataset.userId = id;

     usuario.className = "user-item col-md-4";
     usuario.innerHTML = `
          <div class="user-info mb-4">
          <p>ID: <span class="user-id">${id}</span></p>
          <p>Nome: <span class="user-name">${nome}</span></p>
          <p>Email: <span class="user-email">${email}</span></p>
          <button class="btn btn-primary me-2 btn-user-update" data-btn-user-update>Editar usuário</button>
          <button class="btn btn-danger btn-delete-user">Excluir</button>
     </div>
     `;
     return usuario;
}

// Função para listar os usuários
export async function listarUsuarios() {
     try {
          const listaApi = await conectaApi.listaDeUsuarios();
          console.log(listaApi);
          // Obtém o elemento HTML da lista de usuários
          const listaUsuarioElement = document.querySelector("[data-user-list]");

          // Verifica se o elemento listaUsuarioElement existe
          if (listaUsuarioElement) {
               listaUsuarioElement.innerHTML = "";

               if (listaApi.status === 'success') {
                    listaApi.usuarios.forEach((elemento) => {
                         const usuarioElement = constroiUsuario(elemento.idUsuario, elemento.nomeUsuario, elemento.emailUsuario);
                         listaUsuarioElement.appendChild(usuarioElement);
                    });
               } else {
                    console.error("A resposta da API não está no formato esperado.");
               }
          } else {
               console.error("Elemento listaUsuarioElement não encontrado.");
          }
     } catch (error) {
          console.error("Erro ao listar os usuários:", error);
          const listaUsuarioElement = document.querySelector("[data-user-list]");
          if (listaUsuarioElement) {
               listaUsuarioElement.innerHTML = `<h2 class="mensagem__titulo">Erro ao carregar a lista de usuários: ${error.message}</h2>`;
          } else {
               console.error("Elemento listaUsuarioElement não encontrado.");
          }
     }
}

listarUsuarios();
