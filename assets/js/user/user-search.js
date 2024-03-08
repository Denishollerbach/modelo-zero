// Importações dos módulos necessários
import { conectaApi } from "../api/conectaApi.js";
import { constroiUsuario } from "./user-select.js";

// Função assíncrona para buscar usuários com base em um termo de pesquisa
async function buscarUsuario(evento) {
     // Prevenir o comportamento padrão do formulário
     evento.preventDefault();
     // Obter o termo de busca do campo de entrada
     const termoDeBusca = document.querySelector("[data-pesquisa]").value;
     // Chamar a função de busca de usuário da API
     const busca = await conectaApi.buscaDeUsuario(termoDeBusca);
     // Obter o elemento HTML da lista de usuários
     const listaUsuarioElement = document.querySelector("[data-user-list]");
     // Limpar o conteúdo atual da lista de usuários
     listaUsuarioElement.innerHTML = "";
     // Verificar se a busca retornou algum resultado
     if (busca.length === 0) {
          // Se não houver resultados, exibir uma mensagem indicando que não foram encontrados usuários com o termo de busca
          listaUsuarioElement.innerHTML = `<h2 class="mensagem__titulo">Não existem usuários com esse termo de busca!</h2>`;
     } else {
          // Se houver resultados, iterar sobre cada elemento retornado pela busca
          busca.forEach(elemento => {
               // Construir o elemento de usuário usando os dados retornados e a função constroiUsuario
               const usuarioElement = constroiUsuario(elemento.idUsuario, elemento.nomeUsuario, elemento.emailUsuario);

               // Adicionar o elemento de usuário à lista de usuários
               listaUsuarioElement.appendChild(usuarioElement);
          });
     }
}
// Obter o botão de pesquisa
const botaoDePesquisa = document.querySelector("[data-botao-pesquisa]");
// Adicionar um ouvinte de evento para o clique no botão de pesquisa, que chama a função buscarUsuario
botaoDePesquisa.addEventListener("click", buscarUsuario);
