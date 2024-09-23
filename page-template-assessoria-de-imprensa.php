<?php
ini_set('display_errors', 0);
$titulo = "Assessoria de Imprensa - Epocler";
$descricao = 'DescricaoPage';
// $indexacao = "noindex";
$indexacao = "index, follow";

include('core/database/db_connection.php');
include('core/partials/header.php');
// http_response_code(404);

?>

<main id="content" class="pagina-assessoria">
     <section class="banner-pagina-padrao p-5 bg-gray-100">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 d-flex flex-column gap-5">
                         <ol class="breadcrumbs position-relative">
                              <li><a class="link" href="/">Home</a></li>
                              <li>></li>
                              <li><span class="texto">Assessoria de Imprensa</span></li>
                         </ol>

                         <h1 class="pagina-titulo">Assessoria de Imprensa</h1>
                    </div>
               </div>
          </div>
     </section>

     <section class="assessoria-de-imprensa py-5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">

                         <div id="press-office">
                              <h3>Marcas e produtos – Comunicação Hypera Pharma</h3><br><br><strong>Geral - <a
                                        href="mailto:imprensa@hypera.com.br">
                                        imprensa@hypera.com.br</a></strong><br><br><strong>Main Contact:<br> <a
                                        href="mailto:hypermarcas@maquinacohnwolfe.com">hypermarcas@maquinacohnwolfe.com</a><br> Tel:
                                   (11) 3147-7900</strong><br><br><strong>Nancy Campos:<br> <a
                                        href="mailto:nancy.campos@maquinacohnwolfe.com">nancy.campos@maquinacohnwolfe.com</a><br>
                                   Tel: (11) 3147-7445</strong><br><br><strong>Ivan Verona:<br> <a
                                        href="mailto:ivan.verona@maquinacohnwolfe.com">ivan.verona@maquinacohnwolfe.com</a><br> Tel:
                                   (11) 3147-7260</strong><br><br>
                         </div>

                    </div>
               </div>
          </div>
     </section>
     <?php include('core/partials/templates/secao-cta-contato.php'); ?>
</main>

<?php include('core/partials/footer.php'); ?>