<?php
$title = 'Homepage - modelo zero';
include_once("templates/header.php");
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

<?php include_once("templates/footer.php"); ?>