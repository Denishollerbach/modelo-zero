<footer id="footer" class="">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-lg-3 logo-footer">
                    <!-- img logo -->
                    <p>Frase footer</p> <!-- Exibe a Frase Footer -->
                    <div class="social">
                         <!-- Icones redes sociais -->
                    </div>
               </div>

               <div class="col-md-6 col-lg-6 menu-footer">
                    <!-- Menu do footer -->
                    <div id="footer-submenu" class="grid-column footer-submenu">
                         <ul class="navbar-nav">
                              <li class="menu-item nav-item">
                                   <a class="nav-link" title="Assessoria de Imprensa" href="/assessoria-de-imprensa">Assessoria de Imprensa</a>
                              </li>
                              <li class="menu-item nav-item">
                                   <a class="nav-link" title="Contato" href="/contato">Contato</a>
                              </li>
                              <li class="menu-item nav-item">
                                   <a class="nav-link" title="Política de Cookies" href="/politica-de-cookies">Política de Cookies</a>
                              </li>
                              <li class="menu-item nav-item">
                                   <a class="nav-link" title="Política de Privacidade" href="/politica-de-privacidade">Política de Privacidade</a>
                              </li>

                              <li class="menu-item nav-item">
                                   <a class="nav-link" title="Termos de Uso" href="/termos-de-uso">Termos de Uso</a>
                              </li>


                              <li class="menu-item nav-item nav-item-social">
                                   <ul class="social-menu navbar-nav">
                                        <li class="menu-item nav-item">
                                             <a class="nav-link" title="Instagram de" href="https://www.instagram.comoficial/?fref=ts" target="_blank">
                                                  <picture class="image-picture image-icone-instagram ">
                                                       <source srcset="/assets/images/icones/icone-instagram.svg" media="(max-width: 720px)">
                                                       <source srcset="/assets/images/icones/icone-instagram.svg" media="(max-width: 1280px)">
                                                       <source srcset="/assets/images/icones/icone-instagram.svg">
                                                       <img loading="lazy" src="/assets/images/icones/icone-instagram.svg" class="image image-icone-instagram icone-invertido" alt="Logo do Instagram.">
                                                  </picture>
                                             </a>
                                        </li>

                    
                                   </ul>
                              </li>
                         </ul>
                    </div>

               </div>

               <div class="col-md-12 col-lg-3 suporte-online">
                    <h4>Suporte Online</h4>
                    <div class="social-2">

                         <div class="item">
                              <i class=""></i>
                              Texto
                         </div>
                    </div>
               </div>

               <div class="col-md-12">
                    <hr>
               </div>
               <div class="col-md-12 copyright d-flex align-items-center">
                    <div class="copy">
                         <div class="row-flex">
                              <?php
                              $data = date('Y');
                              ?>
                              <p><span>Nome do site <time><? echo $data; ?></time> © Todos os direitos reservados</span></p>
                         </div>
                    </div>

                    <div class="assinatura-hb d-none">

                         <a href="https://hbach.com.br" target="_Blank" title="Hbach design" alt="Site desenvolvido por Hbach design">
                         </a>

                    </div>
               </div>
          </div>
     </div>

     <!-- <div class="back-to-top nav-link"><a href="#top" alt="Voltar ao topo"><i class="fa fa-chevron-up"></i></a></div> -->
     <div class="back-to-top nav-link"><a href="#top" alt="Voltar ao topo"><img src="assets/svg/chevron-up.svg" alt="Voltar ao topo" loading="lazy"></a></div>
</footer>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- AOS -->
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
<!-- FontAwesome -->
<!-- <script src="https://kit.fontawesome.com/1395a6f245.js"></script> -->
<!-- Bootstrap JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
<script src="assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
<?php
// Sweet Alert
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.google.com/recaptcha/api.js" defer></script>
<?php
// API
?>
<script type="module" src="../../assets/js/api/conectaApi.js"></script>
<script type="module" src="../../assets/js/user/user-delete.js"></script>
<script type="module" src="../../assets/js/user/user-insert.js"></script>
<script type="module" src="../../assets/js/user/user-search.js"></script>
<script type="module" src="../../assets/js/user/user-select.js"></script>
<script type="module" src="../../assets/js/user/user-update.js"></script>
<!-- Jquery MASK  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- cookie-banner.js -->
<!-- <script src="assets/js/cookie-banner.min.js"></script> -->
<!-- Para adicionar no footer o script cookie-banner -->
<script type="text/javascript" src="/assets/js/components/cookie-banner.min.js" defer></script>
<!-- main.js -->
<script src="assets/js/main-min.js"></script>
<script src="assets/js/custom-main-min.js"></script>
</body>

</html>