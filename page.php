<?php
$title = 'Page Title';
$titulo = "Página não encontrada";
$descricao = 'Retorne para a página inicial';
$indexacao = "noindex";

include('core/database/db_connection.php');
include_once("core/partials/header.php");
?>
<main id="content" class="pagina-contato">
     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-12">

                    </div>
               </div>
          </div>
     </section>
</main>

<?php
include_once("core/partials/footer.php");
?>