<?php
ini_set('display_errors', 0);
include ('core/partials/header.php');

$titulo = "Pesquisa no site - Hypera Pharma";
$descricao = 'Faça sua pesquisa no site Hypera Pharma';

if (isset($_GET['termo'])) {
    $termo = $_GET['termo'];
    // $resultados_totais = $_GET['numero'];
}

$page_busca = true;

?>

<main id="content" class="pagina-busca">
    <section class="pagina-banner py-5">
        <div class="container py-4 py-lg-4">
            <ol class="breadcrumbs">
                <li><a class="link text-secundaria-500" href="/">Início</a></li>
                <li class="d-flex align-items-center justify-content-center"><span class="material-symbols-outlined">chevron_right</span></li>
                <li><span class="texto">Busca</span></li>
            </ol>


            <div class="pagina-titulo py-3">
                <h1 class="pre-title text-center py-5">
                    Exibindo <span id="n-resultado"></span> resultados encontrados para
                </h1>
                <form id="form-busca" class="form-post-search d-flex aligm-items-center"
                    action="/busca?termo=<?= $_GET['termo'] ?>" method="get" role="search">
                    <button id="btn-search" type="submit" class="btn btn-transparent btn-busca">
                        <span class="material-symbols-rounded fs-3">search</span>
                        <span class="visually-hidden" aria-hidden="true">Buscar posts no blog</span>
                    </button>
                    <input id="campo-pesquisa-especifica" class="form-control campo-resultado" type="text" id="termo"
                        name="termo" aria-label="termo pesquisado" placeholder="Buscar por..."
                        value="<?= isset($_GET['termo']) ? $termo : '' ?>">

                </form>
            </div>
        </div>
    </section>


    <section class="secao-filtro-abas">
        <div class="container">
            <ol id="filtro-busca"
                class="filtro-abas d-flex gap-4 gap-md-2 mx-auto mb-0 flex-nowrap list-unstyled justify-content-between">
                <li class="item-filtro">
                    <button id="categoria-geral" class="btn item-texto active"
                        aria-label="Trocar ativação de todos no filtro">Todos</button>
                </li>

                <!-- <li class="item-filtro">
                    <button id="categoria-produtos" class="btn item-texto"
                        aria-label="Trocar ativação de Produtos no filtro">Produtos</button>
                </li> -->

                <li class="item-filtro">
                    <button id="categoria-posts" class="btn item-texto"
                        aria-label="Trocar ativação de Notícias no filtro">Notícias</button>
                </li>
            </ol>

        </div>
    </section>

    <section class="grid-resultados">
        <div id="carregar-resultados-especificos" class="container">
            <?php if (isset($_GET['termo'])) {
                $page_busca = true;
                include ('./core/partials/query-ajax-pesquisa.php');
            } ?>
            <p id="texto-inicial-sem-resultado" class="texto-sem-resultados">Não encontramos resultados.</p>
        </div>
    </section>
</main>

<?php include './core/partials/footer.php';







