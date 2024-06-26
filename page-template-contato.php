<?php
$title = 'Contato';
include_once("core/partials/header.php");
?>
<main id="content" class="pagina-contato">
     <section class="banner-pagina bg-primary py-3">
          <div class="container d-grid position-relative">
               <ol class="breadcrumbs">
                    <li><a class="link" href="/">Home</a></li>
                    <li>></li>
                    <li><span class="texto">Contato</span></li>
               </ol>

               <h1 class="text-secondary text-center mt-5 p-5">Contato</h1>
          </div>
     </section>

     <section id="contato">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div class="mt-5" id="formularioContato"></div>
                    </div>
               </div>
          </div>
     </section>
</main>

<?php
include_once("core/partials/footer.php");
?>