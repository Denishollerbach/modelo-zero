<!doctype html>
<html lang="pt-br">

<head>
     <!-- Google Tag Manager -->

     <meta charset="UTF-8">
     <meta name="author" content="Hypera Pharma">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <title><?= $title ?></title>
     <meta name="description" content="DESCRIÇÃO DA PAGINA/SITE">

     <meta name="theme-color" content="#cecece">
     <!-- <meta name="robots" content="noindex"> -->
     <!-- <meta name="googlebot" content="noindex"> -->
     <meta name="robots" content="index, follow">
     <meta name="googlebot" content="index, follow">

     <link rel="canonical" href="https://URL DA PAGINA DO SITE">

     <meta property="og:locale" content="pt_BR">
     <meta property="og:url" content="https://URL DA PAGINA DO SITE">
     <meta property="og:title" content="TITULO DA PAGINA">
     <meta property="og:site_name" content="NOME DO SiTE">
     <meta property="og:description" content="DESCRIÇÃO DA PAGINA/SITE" />
     <meta property="og:image" content="../../assets/img/og/og-image.png" />
     <meta property="og:image:type" content="image/jpg">
     <meta property="og:type" content="website">

     <meta name="twitter:card" content="summary">
     <meta name="twitter:site" content="" />
     <meta name="twitter:creator" content="NOME DO AUTOR - EMPRESA" />

     <link rel="icon" href="../../assets/img/fav-icon.png">
     <link rel="apple-touch-icon" href="../../assets/img/fav-icon.png">
     <meta name="msapplication-TileImage" content="/favicon.ico">
     <link rel="shortcut icon" href="/favicon.ico">

     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="apple-mobile-web-app-status-bar-style" content="black">


     <!-- Preconnect -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS v5.2.1 -->
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" crossorigin="anonymous">

     <!-- AOS css -->
     <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

     <!-- Cookie banner -->
     <!-- Para adicionar no head o estilo cookie banner -->
     <link rel="stylesheet" href="https://hbach.com.br/api-hbach/cookie-banner/assets/css/cookie-banner.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
     <noscript>
          <link rel="preconnect" href="https://hbach.com.br/api-hbach/cookie-banner/assets/css/cookie-banner.min.css" media="screen">
     </noscript>
     <link rel="stylesheet" href="/assets/css/cookie-banner-custom.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
     <noscript>
          <link rel="preconnect" href="/assets/css/cookie-banner-custom.min.css" media="screen">
     </noscript>

     <!-- CSS only -->
     <link rel="stylesheet" type="text/css" href="../../assets/css/cookie-banner.min.css">
     <link rel="stylesheet" type="text/css" href="../../assets/css/main.min.css">
</head>

<body id="top" cz-shortcut-listen="true">
     <h1 class="d-none h1-hidden"><?= $title ?></h1>

     <header id="header" class="header">
          <div class="top-header">
               <div class="container">
                    <div class="row">

                         <div class="social col-6">

                         </div>
                    </div>
               </div>
          </div>
          <div class="bottom-header">
               <div class="container">
                    <div class="row navigation">
                         <div class="col-md-12">
                              <nav class="navbar navbar-expand-lg">
                                   <!-- logo -->
                                   <!-- Brand and toggle get grouped for better mobile display -->
                                   <div id="menuToggle" class="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox" class="toggle">
                                             <div class="bars" id="bar1"></div>
                                             <div class="bars" id="bar2"></div>
                                             <div class="bars" id="bar3"></div>
                                        </label>
                                   </div>

                                   <!-- Menu Bootstrap mantenha as classes -->
                                   <div id="navbarNav" class="collapse navbar-collapse">
                                        <ul id="menu-menu-principal" class="navbar-nav mb-2 mb-md-0 ">
                                             <li id="menu-item-81" class="ancora"><a href="/#sobre" class="nav-link">Sobre</a></li>
                                             <li id="menu-item-84" class="ancora"><a href="/#quem-somos" class="nav-link">Quem somos</a></li>
                                             <li id="menu-item-162" class="ancora"><a href="/#contato" class="nav-link active">Contato</a></li>
                                        </ul>
                                   </div>
                              </nav>
                              <div class="header-search">
                                   <div class="container">
                                        <div class="row">
                                             <div class="col-md-12">
                                                  <!-- form de busca -->
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </header>
     <div class="overlay-loader">
          <div class="c-loader"></div>
     </div>
     <div id="indicator"></div>