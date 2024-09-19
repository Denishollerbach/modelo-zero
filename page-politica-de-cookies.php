<?php
ini_set('display_errors', 0);
$titulo = "Política de Cookies - Epocler";
$descricao = 'Retorne para a página inicial';
// $indexacao = "noindex";
$indexacao = "index, follow";

include('core/database/db_connection.php');
include('core/partials/header.php');
// http_response_code(404);

?>

<main id="content" class="pagina-politica-cookies">
     <section class="banner-pagina p-5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 d-flex flex-column gap-5">
                         <ol class="breadcrumbs position-relative">
                              <li><a class="link"
                                        href="/">Home</a></li>
                              <li>></li>
                              <li><span class="texto">Política de Cookies</span></li>
                         </ol>

                         <h1 class="pagina-titulo">Política de Cookies padrão <br> para websites da Hypera Pharma</h1>
                    </div>
               </div>
          </div>
     </section>

     <section class="politica-de-cookies py-5" id="termosEpoliticas">
          <div class="container">
               <article class="row justify-content-center">
                    <div class="col-md-12">
                         <p>
                              Olá! Fizemos esta Política de Cookies (“Política”) para que Você obtenha todas as informações necessárias
                              sobre como os cookies são utilizados no nosso website. <br><br>

                              Buscando oferecer a “Você” (também denominado “Usuário”), a melhor experiência de acesso e o funcionamento
                              adequado do nosso website, armazenamos pequenos arquivos em seu dispositivo eletrônico - conhecidos como
                              “cookies”.
                         </p>

                         <h2>Como utilizamos cookies?</h2>

                         <p>Geralmente, um cookie contém o nome do website que o originou, seu tempo de vida e um valor, que é gerado
                              aleatoriamente.<br><br>

                              Os cookies são usados para facilitar o uso e melhor adaptar o website aos seus interesses e necessidades,
                              permitir a coleta de seus hábitos de navegação, enriquecer o conteúdo ofertado no website e otimizar as
                              suas experiências em acessos futuros. <br><br>

                              O cookie identifica o Usuário ou o seu dispositivo (computador ou smartphone) para permitir a execução de
                              funcionalidades necessárias ou adicionais. <br><br>

                              As funcionalidades necessárias servem para garantir o desempenho adequado do website, sem as quais ele não
                              opera corretamente. Já as funcionalidades adicionais são usadas para aprimorar a performance da navegação,
                              a depender da sua autorização, como: proporcionar maior segurança, rapidez ou melhor desempenho; monitorar
                              acessos, interação e preferências do Usuário; viabilizar o direcionamento de anúncios personalizados;
                              identificar as páginas mais populares, dentre outras.
                         </p>

                         <h2>Cookies utilizados no nosso website</h2>

                         <h3>1. Cookies Necessários</h3>

                         <p>São essenciais para o funcionamento do website e não podem ser desabilitados, sendo utilizados em
                              conformidade com o interesse legítimo da [HYPERA]. Sem os cookies <strong>necessários,</strong> o website
                              ou alguma de suas funcionalidades não opera corretamente e a navegação pode ficar prejudicada.<br><br>

                              Esses cookies não extraem informações sobre Você que poderiam ser utilizadas para fins de marketing ou
                              rastrear a sua navegação na internet.<br><br>

                              Veja, abaixo, a descrição do cookie necessário utilizado no website:
                         </p>

                         <table class="table">
                              <thead class="thead-light">
                                   <tr>
                                        <th scope="col">Cookie</th>
                                        <th scope="col">Domínio</th>
                                        <th scope="col">Expiração</th>
                                        <th scope="col">Finalidade</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th scope="row">PHPSESSID</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>30 minutos</td>
                                        <td>Controle de login no website</td>
                                   </tr>
                              </tbody>
                         </table>

                         <h3>2. Cookies Utilitários</h3>

                         <p>Quando os cookies <strong>utilitários</strong> são habilitados pelo Usuário, fornecem maior segurança,
                              funcionalidade, rapidez ou melhor desempenho. <br><br>

                              Você pode consultar esses cookies na tabela abaixo:
                         </p>

                         <table class="table">
                              <thead class="thead-light">
                                   <tr>
                                        <th scope="col">Cookie</th>
                                        <th scope="col">Domínio</th>
                                        <th scope="col">Expiração</th>
                                        <th scope="col">Finalidade</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th scope="row">1P_JAR</th>
                                        <td>.google.com.br</td>
                                        <td>1 mês</td>
                                        <td>Armazenar informações de acesso e personalizar anúncios.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">1P_JAR</th>
                                        <td>.google.com</td>
                                        <td>1 mês</td>
                                        <td>Armazenar informações de acesso e personalizar anúncios.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">1P_JAR</th>
                                        <td>.gstatic.com</td>
                                        <td>1 mês</td>
                                        <td>Armazenar informações de acesso e personalizar anúncios.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">AID</th>
                                        <td>.google.com</td>
                                        <td>1,5 anos</td>
                                        <td>Armazenar as atividades do usuário no Google em dispositivos diferentes, inclusive para anúncios
                                             de publicidade.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">ANID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Construir um perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">ANID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Construir um perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">APISID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">APISID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">DSID</th>
                                        <td>.doubleclick.net</td>
                                        <td>15 dias</td>
                                        <td>Armazenar as atividades do usuário no Google em dispositivos diferentes, inclusive para anúncios
                                             de publicidade.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">DV</th>
                                        <td>www.google.com</td>
                                        <td>alguns minutos</td>
                                        <td>DV www.google.com alguns minutos Construir um perfil de interesses do usuário e exibir anúncios do
                                             Google de forma relevante e personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">HSID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">HSID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">IDE</th>
                                        <td>.doubleclick.net</td>
                                        <td>2 anos</td>
                                        <td>IDE .doubleclick.net 2 anos Usado pelo Google DoubleClick para registrar, relatar e avaliar as
                                             ações do usuário com o anúncio e apresentar-lhe anúncios segmentados.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">NID</th>
                                        <td>.google.com</td>
                                        <td>6 meses</td>
                                        <td>NID .google.com 6 meses Lembrar suas preferências e outras informações (idioma preferido, nº de,
                                             resultados de pesquisa, ativação do filtro SafeSearch do Google).</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">NID</th>
                                        <td>.google.com.br</td>
                                        <td>6 meses</td>
                                        <td>Lembrar suas preferências e outras informações (idioma preferido, nº de, resultados de pesquisa,
                                             ativação do filtro SafeSearch do Google).</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">OGPC</th>
                                        <td>.google.com</td>
                                        <td>1 mês</td>
                                        <td>Habilita as funcionalidades do Google Maps.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">OTZ</th>
                                        <td>www.google.com</td>
                                        <td>1 mês</td>
                                        <td>Informações de tráfego mais voltado para o Google Analytics.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">OTZ</th>
                                        <td>www.google.com.br</td>
                                        <td>1 mês</td>
                                        <td>Informações de tráfego mais voltado para o Google Analytics.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SAPISID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SAPISID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SEARCH_SAMESITE</th>
                                        <td>.google.com.br</td>
                                        <td>6 meses</td>
                                        <td>Usado para targeting a fim de construir um perfil dos interesses do usuário visitante com o
                                             intuito de exibir ads do Google de forma relevante e personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SEARCH_SAMESITE</th>
                                        <td>.google.com</td>
                                        <td>6 meses</td>
                                        <td>Construir perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SIDCC</th>
                                        <td>.google.com</td>
                                        <td>1 ano</td>
                                        <td>Cookie de segurança para proteger os dados dos usuários contra acesso não autorizado.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SSID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">SSID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Usado pelo Google para armazenar as preferências do usuário.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-3PAPISID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Construir perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-3PAPISID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Construir perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-3PSID</th>
                                        <td>.google.com.br</td>
                                        <td>2 anos</td>
                                        <td>Construir perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-3PSID</th>
                                        <td>.google.com</td>
                                        <td>2 anos</td>
                                        <td>Construir perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-APISID</th>
                                        <td>.google.com.br</td>
                                        <td>6 meses</td>
                                        <td>Construir um perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-APISID</th>
                                        <td>.google.com</td>
                                        <td>Indicar o prazo</td>
                                        <td>Construir perfil de interesses do usuário e exibir anúncios do Google de forma relevante e
                                             personalizada.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-HSID</th>
                                        <td>.google.com.br</td>
                                        <td>6 meses</td>
                                        <td>Armazenar registros assinados e encriptados da conta de usuário do Google e identificar o login
                                             mais recente, permitindo ao Google autenticar usuários, prevenir operações fraudulentas e proteger
                                             acessos não-autorizados. Construção de perfil.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-HSID</th>
                                        <td>.google.com</td>
                                        <td>6 meses</td>
                                        <td>Armazenar registros assinados e encriptados da conta de usuário do Google e identificar o login
                                             mais recente, permitindo ao Google autenticar usuários, prevenir operações fraudulentas e proteger
                                             acessos não-autorizados. Construção de perfil.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-SSID</th>
                                        <td>.google.com.br</td>
                                        <td>6 meses</td>
                                        <td>Armazena informações de uso do website e dos anúncios. Personalização dos anúncios nas
                                             propriedades do Google, relembrando buscas mais recentes, interações feitas e resultados de busca.
                                        </td>
                                   </tr>
                                   <tr>
                                        <th scope="row">__Secure-SSID</th>
                                        <td>.google.com</td>
                                        <td>6 meses</td>
                                        <td>Armazena informações de uso do website e dos anúncios. Personalização dos anúncios nas
                                             propriedades do Google, relembrando buscas mais recentes, interações feitas e resultados de busca.
                                        </td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_fbp</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>3 meses</td>
                                        <td>Pixel de medições de acesso do Facebook.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_fbp</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>3 meses</td>
                                        <td>Pixel de medições de acesso do Facebook.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_ga</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>2 anos</td>
                                        <td>Cookies de armazenamento do usuário Google Analytics.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_ga</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>2 anos</td>
                                        <td>Cookies de armazenamento do usuário Google Analytics.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_gat_UA-12125132-1</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>15 minutos</td>
                                        <td>Usado para controlar a taxa de solicitação. </td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_dc_gtm_<property-id></property-id></th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>15 minutos</td>
                                        <td>Usado para controlar a taxa de solicitação quando o Google Analytics for implantado pelo
                                             Gerenciador de tags do Google.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_gid</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>1 dia</td>
                                        <td>Cookies de armazenamento do usuário Google.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_gid</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>1 dia</td>
                                        <td>Cookies de armazenamento do usuário Google.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_hjIncludedInSample</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>até logout</td>
                                        <td>Cookies de armazenamento do usuário HotJar</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">_hjid</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>1 ano</td>
                                        <td>Cookies de armazenamento do usuário HotJar</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">act</th>
                                        <td>.facebook.com</td>
                                        <td>até logout</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">c_user</th>
                                        <td>.facebook.com</td>
                                        <td>1 ano</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">datr</th>
                                        <td>.facebook.com</td>
                                        <td>2 anos</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">fr</th>
                                        <td>.facebook.com</td>
                                        <td>3 meses</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">locale</th>
                                        <td>.facebook.com</td>
                                        <td>2 dias</td>
                                        <td>Armazena dados de localização.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">presence</th>
                                        <td>.facebook.com</td>
                                        <td>até logout</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">sb</th>
                                        <td>.facebook.com</td>
                                        <td>2 anos</td>
                                        <td>O Facebook rastreia os usuários do Facebook com cookies (fr) usados para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">spin</th>
                                        <td>.facebook.com</td>
                                        <td>1 dia</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">wd</th>
                                        <td>.facebook.com</td>
                                        <td>1 semana</td>
                                        <td>Rastreamento de usuários, pelo Facebook, para fins publicitários.</td>
                                   </tr>
                                   <tr>
                                        <th scope="row">xs</th>
                                        <td>.facebook.com</td>
                                        <td>1 ano</td>
                                        <td>Session Cookie</td>
                                   </tr>
                              </tbody>
                         </table>

                         <h3>3. Cookies Analíticos</h3>

                         <p>Os cookies <strong>analíticos</strong> servem para coletar informações sobre a interação do Usuário no
                              website, através da integração de ferramentas, a exemplo do Google Analytics. <br><br>

                              Você pode consultar esses cookies na tabela abaixo:
                         </p>

                         <h3>4. Cookies de Marketing</h3>

                         <p>Os cookies <strong>de marketing</strong> são utilizados para coletar informações sobre o Usuário e
                              viabilizar o direcionamento de anúncios personalizados por e-mail ou na própria página do website, dentre
                              outras finalidades de publicidade.

                              Você pode consultar esses cookies na tabela abaixo:
                         </p>

                         <table class="table">
                              <thead class="thead-light">
                                   <tr>
                                        <th scope="col">Cookie</th>
                                        <th scope="col">Domínio</th>
                                        <th scope="col">Expiração</th>
                                        <th scope="col">Finalidade</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th scope="row">PHPSESSID</th>
                                        <td>.hyperapharma.com.br</td>
                                        <td>30 minutos</td>
                                        <td>Controle de login no website</td>
                                   </tr>
                              </tbody>
                         </table>

                         <h2>Gestão dos Cookies</h2>

                         <p>Você deve consentir com o uso dos cookies <strong>utilitários, analíticos e de marketing.</strong> O seu
                              consentimento é coletado através do cookie-banner disponibilizado a Você quando do primeiro acesso ao
                              website. Dado o consentimento, um cookie será armazenado em seu dispositivo para Você se lembrar disso na
                              próxima sessão. <br><br>

                              Quando quiser e como preferir, Você pode revogar o seu consentimento a através das configurações de seu
                              navegador de preferência. Para mais informações sobre como proceder em relação à gestão dos cookies nos
                              navegadores, disponibilizamos os links abaixo:
                         </p>

                         <ul>
                              <li>• <a
                                        href="https://support.microsoft.com/pt-br/windows/gerenciar-cookies-no-microsoft-edge-exibir-permitir-bloquear-excluir-e-usar-168dab11-0753-043d-7c16-ede5947fc64d"
                                        target="_blank"
                                        rel="noopener noreferrer">Internet Explorer</a></li>
                              <li>• <a href="https://support.mozilla.org/pt-BR/kb/protecao-aprimorada-contra-rastreamento-firefox-desktop"
                                        target="_blank"
                                        rel="noopener noreferrer">Mozilla Firefox</a></li>
                              <li>• <a href="https://support.google.com/accounts/answer/61416?co=GENIE.Platform%3DDesktop&amp;hl=pt-BR"
                                        target="_blank"
                                        rel="noopener noreferrer">Google Chrome</a></li>
                              <li>• <a href="https://support.apple.com/pt-br/guide/safari/sfri11471/mac"
                                        target="_blank"
                                        rel="noopener noreferrer">Safari</a></li>
                              <li>• <a
                                        href="https://support.microsoft.com/pt-br/windows/microsoft-edge-dados-de-navega%C3%A7%C3%A3o-e-privacidade-bb8174ba-9d73-dcf2-9b4a-c582b4e640dd"
                                        target="_blank"
                                        rel="noopener noreferrer">Microsoft Edge</a></li>
                         </ul>

                         <p>Caso Você revogue o seu consentimento, os cookies serão desativados e não serão mais utilizados para
                              coletar informações sobre a sua experiência no website. Todavia, os cookies desativados e coletados antes
                              da revogação continuarão sendo utilizados. </p>

                         <h2>Cookies de terceiros</h2>

                         <p>Não temos controle e nenhum tipo de responsabilidade em relação a cookies habilitados por terceiro, mesmo
                              se o acesso ao website desse terceiro se der pelo redirecionamento em link informado no nosso website.
                         </p>

                         <h2>Tem alguma dúvida? Fale conosco!</h2>

                         <p>Se Você tiver dúvidas sobre qualquer disposição constante nesta Política de Cookies ou quiser fazer
                              alguma solicitação, entre em contato conosco através do <a href="/contato">formulário de contato</a>
                         </p>

                         <h3>HYPERA S.A.<br>
                              CNPJ: 02.932.074/0006-04<br>
                              Endereço: Avenida Magalhães de Castro, nº 4800, 24º andar, Continental Tower, Cidade de São Paulo, Estado
                              de São Paulo, CEP. 05676-120<br>
                         </h3>

                         <p>Atualizado em 11 de maio de 2020.</p>


                    </div>
               </article>
          </div>
     </section>

     <?php include('core/partials/templates/secao-cta-contato.php'); ?>
</main>

<?php include('core/partials/footer.php'); ?>