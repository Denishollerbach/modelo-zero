<?php
ini_set('display_errors', 0);
$titulo = "Faq - Epocler";
$descricao = 'DescricaoPage';
// $indexacao = "noindex";
$indexacao = "index, follow";

include('core/database/db_connection.php');
include('core/partials/header.php');

$query_faq_benegrip = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip";';
$faq_benegrip = mysqli_query($conn, $query_faq_benegrip);

$query_faq_benegrip_multi = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-multi";';
$faq_benegrip_multi = mysqli_query($conn, $query_faq_benegrip_multi);

$query_faq_benegrip_multi_dia = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-multi-dia";';
$faq_benegrip_multi_dia = mysqli_query($conn, $query_faq_benegrip_multi_dia);

$query_faq_benegrip_multi_noite = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-multi-noite";';
$faq_benegrip_multi_noite = mysqli_query($conn, $query_faq_benegrip_multi_noite);

$query_faq_benegrip_multi_febre_dor = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-febre-dor";';
$faq_benegrip_multi_febre_dor = mysqli_query($conn, $query_faq_benegrip_multi_febre_dor);

$query_faq_benetosse = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benetosse";';
$faq_benetosse = mysqli_query($conn, $query_faq_benetosse);

$query_faq_benegrip_imuno = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-imuno";';
$faq_benegrip_imuno = mysqli_query($conn, $query_faq_benegrip_imuno);

$query_faq_benedesc = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-benedesc";';
$faq_benedesc = mysqli_query($conn, $query_faq_benedesc);

$query_faq_benegrip_imuno_kids = 'SELECT descritorPergunta, descritorResposta, slugProduto FROM faq INNER JOIN rel_produtos_faq ON faq.idPergunta = rel_produtos_faq.relPergunta INNER JOIN produtos ON produtos.idProduto = rel_produtos_faq.relProduto WHERE produtos.slugProduto="benegrip-imuno-kids";';
$faq_benegrip_imuno_kids = mysqli_query($conn, $query_faq_benegrip_imuno_kids);



?>


<main id="content" class="pagina-faq">
     <section class="banner-pagina-padrao p-5 bg-gray-100">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 d-flex flex-column gap-5">
                         <ol class="breadcrumbs position-relative">
                              <li><a class="link" href="/">Home</a></li>
                              <li>></li>
                              <li><span class="texto ">Dúvidas Frequentes</span></li>
                         </ol>
                         <h1 class="pagina-titulo">Dúvidas frequentes</h1>
                    </div>
               </div>
          </div>
     </section>

     <section id="secao-duvidas" class="my-5">
          <div class="container d-flex flex-mobile-column">
               <aside class="col-3 filtro-categorias d-none-mobile sidebar" role="complementary">
                    <div class="secao-fixa widget">
                         <p>Filtrar por:</p>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip">Benegrip</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip-multi">Benegrip<sup>®</sup> Multi</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip-multi-dia">Benegrip<sup>®</sup> Multi Dia</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip-multi-noite">Benegrip<sup>®</sup> Multi Noite</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip-multi-febre-dor">Benegrip<sup>®</sup> Multi Febre e Dor</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benetosse">Xarope Benetosse</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip-imuno">Benegrip<sup>®</sup> Imuno</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benedesc">Benedesc Plus</a>
                         <a class="btn btn-outline-primary mt-3" href="#faq-benegrip-imuno-kids">Benegrip<sup>®</sup> Imuno Kids</a>
                    </div>
               </aside>

               <p class="d-md-none mb-3">Filtrar por:</p>
               <select class="form-select form-select-lg filtro-categorias-mobile d-md-none bg-primaria-50 text-primary fw-bold">
                    <option value="geral" class="link-filtro" selected>Geral</option>
                    <option value="faq-benegrip">
                         <a href="#faq-benegrip">Benegrip</a>
                    </option>
                    <option value="faq-benegrip-multi">
                         <a href="#faq-benegrip-multi">Benegrip<sup>®</sup> Multi</a>
                    </option>
                    <option value="faq-benegrip-multi-dia">
                         <a href="#faq-benegrip-multi-dia">Benegrip<sup>®</sup> Multi Dia</a>
                    </option>
                    <option value="faq-benegrip-multi-noite">
                         <a href="#faq-benegrip-multi-noite">Benegrip<sup>®</sup> Multi Noite</a>
                    </option>
                    <option value="faq-benegrip-multi-febre-do">
                         <a href="#faq-benegrip-multi-febre-dor">Benegrip<sup>®</sup> Multi Febre e Dor</a>
                    </option>
                    <option value="faq-benetosse">
                         <a href="#faq-benetosse">Xarope Benetosse</a>
                    </option>
                    <option value="faq-benegrip-imuno">
                         <a href="#faq-benegrip-imuno">Benegrip<sup>®</sup> Imuno</a>
                    </option>
               </select>

               <div class="secao-accordions col-md-8 offset-md-1">
                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip.webp" alt="Embalagem de Benegrip<sup>®</sup> comprimido." />
                    <h2 id="faq-benegrip" class="text-center mx-auto mb-3">Benegrip</h2>
                    <div id="accordions-perguntas-benegrip" class="container-perguntas accordion mx-auto">
                         <?php foreach ($faq_benegrip as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip-multi.webp" alt="Embalagem de Benegrip<sup>®</sup> Multi." />
                    <h2 id="faq-benegrip-multi" class="text-center mx-auto mb-3">Benegrip<sup>®</sup> Multi</h2>
                    <div id="accordions-perguntas-benegrip-multi" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benegrip-multi">
                         <?php foreach ($faq_benegrip_multi as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-multi-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-multi-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-multi-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-multi-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-multi-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip-multi">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip-multi-dia.webp" alt="Embalagem de Benegrip<sup>®</sup> Multi Dia." />
                    <h2 id="faq-benegrip-multi-dia" class="text-center mx-auto mb-3">Benegrip<sup>®</sup> Multi Dia</h2>
                    <div id="accordions-perguntas-benegrip-multi-dia" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benegrip-multi-dia">
                         <?php foreach ($faq_benegrip_multi_dia as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-multi-dia-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-multi-dia-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-multi-dia-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-multi-dia-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-multi-dia-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip-multi-dia">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip-multi-noite.webp" alt="Embalagem de Benegrip<sup>®</sup> Multi Noite." />
                    <h2 id="faq-benegrip-multi-noite" class="text-center mx-auto mb-3">Benegrip<sup>®</sup> Multi Noite</h2>
                    <div id="accordions-perguntas-benegrip-multi-noite" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benegrip-multi-noite">
                         <?php foreach ($faq_benegrip_multi_noite as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-multi-noite-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-multi-noite-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-multi-noite-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-multi-noite-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-multi-noite-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip-multi-noite">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip-multi-febre-e-dor.webp" alt="Embalagem de Benegrip<sup>®</sup> Multi Febre e Dor." />
                    <h2 id="faq-benegrip-multi-febre-dor" class="text-center mx-auto mb-3">Benegrip<sup>®</sup> Multi Febre e Dor</h2>
                    <div id="accordions-perguntas-benegrip-multi-febre-dor" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benegrip-multi-febre-dor">
                         <?php foreach ($faq_benegrip_multi_febre_dor as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-multi-febre-dor-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-multi-febre-dor-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-multi-febre-dor-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-multi-febre-dor-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-multi-febre-dor-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip-multi-febre-dor">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/xarope-benetosse.webp" alt="Embalagem de Xarope Benetosse." />
                    <h2 id="faq-benetosse" class="text-center mx-auto mb-3">Xarope Benetosse</h2>
                    <div id="accordions-perguntas-benetosse" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benetosse">
                         <?php foreach ($faq_benetosse as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benetosse-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benetosse-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benetosse-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benetosse-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benetosse-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benetosse">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip-imuno-energy.webp" alt="Embalagem de Benegrip<sup>®</sup> Imuno." />
                    <h2 id="faq-benegrip-imuno" class="text-center mx-auto mb-3">Benegrip<sup>®</sup> Imuno</h2>
                    <div id="accordions-perguntas-benegrip-imuno" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benegrip-imuno">
                         <?php foreach ($faq_benegrip_imuno as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-imuno-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-imuno-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-imuno-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-imuno-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-imuno-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip-imuno">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benedesc.webp" alt="Embalagem de Benedesc Plus." />
                    <h2 id="faq-benedesc" class="text-center mx-auto mb-3">Benedesc Plus</h2>
                    <div id="accordions-perguntas-benedesc" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benedesc">
                         <?php foreach ($faq_benedesc as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benedesc-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benedesc-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benedesc-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benedesc-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benedesc-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benedesc">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>

                    <img class="w-mobile-100 w-md-25 mx-auto d-flex" src="/assets/images/produtos/benegrip-imuno-kids.webp" alt="Embalagem de Benegrip<sup>®</sup> Imuno Kids." />
                    <h2 id="faq-benegrip-imuno-kids" class="text-center mx-auto mb-3">Benegrip<sup>®</sup> Imuno Kids</h2>
                    <div id="accordions-perguntas-benegrip-imuno-kids" class="container-perguntas accordion mx-auto" data-faq="-1" data-produto="benegrip-imuno-kids">
                         <?php foreach ($faq_benegrip_imuno_kids as $key => $pergunta) { ?>
                              <div class="accordion-item mb-3 <?= $pergunta['slugProduto'] ?>">
                                   <h3 class="accordion-header" id="faq-benegrip-imuno-kids-pergunta-<?= $key ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-benegrip-imuno-kids-resposta-<?= $key ?>" aria-expanded="false" aria-controls="faq-benegrip-imuno-kids-resposta-<?= $key ?>">
                                             <?= $pergunta['descritorPergunta'] ?>
                                        </button>
                                   </h3>

                                   <div id="faq-benegrip-imuno-kids-resposta-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="faq-benegrip-imuno-kids-pergunta-<?= $key ?>" data-bs-parent="#accordions-perguntas-benegrip-imuno-kids">
                                        <div class="accordion-body">
                                             <?= $pergunta['descritorResposta'] ?>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>
                    </div>
               </div>
          </div>
     </section>
</main>

<?php include('core/partials/footer.php');
