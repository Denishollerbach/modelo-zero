<?php
$title = 'Homepage - modelo zero';
include_once("core/partials/header.php");
?>

<main>
     <section class="welcome-section d-none">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <h2>Boas-vindas</h2>
                         <p>Ao modelo zero</p>
                         <p>Texto de apoio</p>
                    </div>
               </div>
          </div>
     </section>

     <section class="user-section py-4">
          <div class="container">
               <h2 class="mb-4">Usuários</h2>
               <p>Cadastre novos usuários para sua aplicação!</p>
               <div class="row">
                    <div class="col-md-12 my-4">
                         <div id="busca-caixa">
                              <form role="search" method="get" id="search-form" class="form-inline" action="">
                                   <input type="search" placeholder="Pesquisar" id="pesquisar" class="pesquisar__input" data-pesquisa>
                                   <button id="search-submit" class="pesquisar__botao" data-botao-pesquisa>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                        </svg>
                                        <!-- <img src="assets/svg/search.svg" alt="Buscar"> -->
                                   Buscar     
                                   </button>
                              </form>
                         </div>
                    </div>
               </div>
               <!-- Formulário para inserir usuário -->
               <form data-formulario-usuario>
                    <div class="row mb-3">
                         <div class="col-md-4">
                              <input type="text" class="form-control" name="nomeUsuario" placeholder="Nome do usuário" required>
                         </div>
                         <div class="col-md-4">
                              <input type="email" class="form-control" name="emailUsuario" placeholder="E-mail do usuário" required>
                         </div>
                         <div class="col-md-4">
                              <input type="password" class="form-control" name="senhaUsuario" placeholder="Senha do usuário" required>
                         </div>
                    </div>
                    <div class="text-end">
                         <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
               </form>

               <!-- Lista de usuários -->
               <div class="row user-list mt-4" data-user-list>
                    <!-- Os usuários serão inseridos dinamicamente aqui -->
               </div>
          </div>
     </section>

</main>

<?php include_once("core/partials/footer.php"); ?>