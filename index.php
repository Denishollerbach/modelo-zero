<?php
// include_once("includes/session_start.php");
// $pagina = 'index';
$title = 'Homepage - modelo zero';
include_once("includes/header.php");
?>

<main>
     <!-- section.nome_da_classe>.container>.row>.col-md-12>h2{titulo}+p{texto} -->
     <section class="nome_da_classe">
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
</main>

<?php include_once("includes/footer.php"); ?>