<?php 
    $titulo = "Página não encontrada";
    $descricao = 'Retorne para a página inicial';
    $indexacao = "noindex";
	include( 'core/partials/header.php' ); 
    http_response_code(404);
?>	

<main id="content" role="main">
    <section id="error-page" class="container">
        <h1 class="mt-5">
            Ops...
            <br /><br />
            Página não encontrada.
        </h1>
        <br /><br />
        <a class="btn btn-primary mb-5" href="/">Retornar para a página inicial.</a>
    </section>
</main>

<?php include( 'core/partials/footer.php' );