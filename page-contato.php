<?php
ini_set('display_errors', 0);
$titulo = "Contato - Epocler";
$descricao = 'DescricaoPage';
// $indexacao = "noindex";
$indexacao = "index, follow";

include('core/database/db_connection.php');
include('core/partials/header.php');
// http_response_code(404);

?>

<main id="" role="main" class="pagina-contato">
    <section class="banner-pagina-padrao p-5 bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column gap-5">
                    <ol class="breadcrumbs position-relative">
                        <li><a class="link" href="/">Home</a></li>
                        <li>></li>
                        <li><span class="texto ">Contato</span></li>
                    </ol>
                    <h1 class="pagina-titulo">Contato</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="contato py-5">
        <div id="formularioContato"></div>
    </section>

</main>

<?php include('core/partials/footer.php'); ?>

<!-- Paga pagina de contato -->
<script nonce="a9f8efbf1bcb58eaca003c7ff01f8a54" src="https://api.hypera.com.br/contato/contato-min.js"></script>