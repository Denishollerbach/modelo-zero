// Obtém a raiz do projeto
const rootUrl = window.location.origin + '/api/';
// console.log(rootUrl + "user-select.php");
// const rootUrl = '/api/';

// Função para obter a lista de usuários da API
async function listaDeUsuarios() {
     try {
          // Fazendo uma requisição GET para a URL da API de seleção de usuários
          const conexao = await fetch(rootUrl + "user-select.php", {
               method: "POST",
          });

          // Verifica se a requisição foi bem-sucedida
          if (!conexao.ok) {
               throw new Error(`Erro na requisição: ${conexao.status} - ${conexao.statusText}`);
          }

          // Converte a resposta para JSON
          const dados = await conexao.json();
          // console.log(dados);
          // Retorna os dados
          return dados;
     } catch (erro) {
          // Se ocorrer um erro, imprime no console e lança uma exceção
          console.error("Erro ao obter a lista de usuários:", erro);
          throw erro;
     }
}

// Função para cadastrar um novo usuário na API
async function cadastroDeUsuario(name, email, senha) {
     try {
          // Fazendo uma requisição POST para a URL da API de cadastro de usuários
          const conexao = await fetch(rootUrl + "user-insert.php", {
               method: "POST",
               headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
               },
               body: new URLSearchParams({
                    nomeUsuario: name,
                    emailUsuario: email,
                    senhaUsuario: senha,
               })
          });

          // Verifica se a requisição foi bem-sucedida
          if (!conexao.ok) {
               throw new Error("Não foi possível cadastrar o usuário. Verifique sua conexão com a API.");
          }

          // Converte a resposta para JSON
          const resultado = await conexao.json();

          // Retorna o resultado
          return resultado;
     } catch (erro) {
          // Se ocorrer um erro, imprime no console e lança uma exceção
          console.error("Erro ao cadastrar o usuário:", erro);
          throw erro;
     }
}

// Para editar um usuário
async function editarUsuario(usuarioId, name, email) {
     try {
          const conexao = await fetch(rootUrl + "user-update.php", {
               method: "PUT",
               headers: {
                    "Content-Type": "application/json"
               },
               body: JSON.stringify({
                    idUsuario: usuarioId,
                    nomeUsuario: name,
                    emailUsuario: email
               })
          });

          if (!conexao.ok) {
               throw new Error(`Erro ao editar usuário: ${conexao.status} - ${conexao.statusText}`);
          }

          const dados = await conexao.json();
          return dados;
     } catch (error) {
          console.error("Erro ao editar usuário:", error);
          throw error;
     }
}

// export { editarUsuario };

// Para deletar um usuario
async function deleteUsuario(idUsuario) {
     try {
          // Faz uma requisição DELETE para excluir o usuário com o ID especificado
          const conexao = await fetch(rootUrl + "user-delete.php", {

               method: "DELETE",
               headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
               },
               body: new URLSearchParams({
                    idUsuario: idUsuario,
               })
          });

          if (!conexao.ok) {
               throw new Error(`Erro ao excluir usuario: ${conexao.status} - ${conexao.statusText}`);
          }

          const dados = await conexao.json();
          return dados;
     } catch (error) {
          console.error("Erro ao excluir usuario:", error);
          throw error;
     }
}

// Função para verificar se o e-mail já está cadastrado na API
async function verificarEmailExistente(email) {
     try {
          // Fazendo uma requisição POST para a URL da API de verificação de e-mail
          const resposta = await fetch(rootUrl + "user-validate.php", {
               method: 'POST',
               headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
               },
               // body: JSON.stringify({ email });
               body: new URLSearchParams({ emailUsuario: email })
          });

          // Verifica se a requisição foi bem-sucedida
          if (!resposta.ok) {
               throw new Error('Erro ao verificar e-mail existente');
          }

          // Converte a resposta para JSON
          const resultado = await resposta.json();

          // Retorna true se o e-mail existe, false caso contrário
          return resultado.existe;
     } catch (erro) {
          // Se ocorrer um erro, imprime no console e retorna false
          console.error('Erro ao verificar e-mail existente:', erro);
          return false;
     }
}


// Para Busca de um usuario
async function buscaDeUsuario(termoDeBusca) {
     try {
          const resposta = await fetch(`${rootUrl}user-search.php?q=${termoDeBusca}`, {
               headers: {
                    "Accept": "application/json"
               }
          });

          if (!resposta.ok) {
               throw new Error(`Erro na busca de usuários: ${resposta.status} - ${resposta.statusText}`);
          }

          const pesquisaResposta = await resposta.text(); // Obtenha o texto da resposta
          // console.log(pesquisaResposta); // Exiba a resposta no console
          const dados = JSON.parse(pesquisaResposta); // Tente analisar o JSON
          return dados;
     } catch (erro) {
          console.error("Erro na busca de usuários:", erro);
          throw erro;
     }
}




// Exporta as funções para serem utilizadas em outros arquivos
export const conectaApi = {
     listaDeUsuarios,
     cadastroDeUsuario,
     editarUsuario,
     deleteUsuario,
     verificarEmailExistente,
     buscaDeUsuario
};
