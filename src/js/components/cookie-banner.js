// data de modificacao 19/08/2024 v.1.0.0
document.addEventListener('DOMContentLoaded', function () {
     if (!localStorage.getItem('lgpdAceito')) {
          // Verifica se o banner fixo existe
          var bannerFixo = document.querySelector('.banner-fixo');
          var bannerFixoExiste = bannerFixo !== null;

          var cookieBanner = document.createElement('div');
          cookieBanner.id = 'cookie-banner';
          cookieBanner.className = 'cookie-banner';

          // Adiciona a classe no-banner-fixo-show se o banner fixo não existir
          if (!bannerFixoExiste) {
               cookieBanner.classList.add('no-banner-fixo-show');
          }

          cookieBanner.innerHTML = `
          <dialog id="cookie-dialog" class="cookie-dialog" tabindex="-1" aria-modal="true">
               <div class="content">
                    <div class="body">
                         <p id="cookie-dialog-label" class="cookie-message">Usamos cookies para personalizar conteúdos e melhorar a sua experiência. Para
                         mais informações, acesse o nosso <a href="/politica-de-privacidade" title="Acesse nossa politica de privacidade">Aviso Externo de
                              Privacidade.</a></p>
                         <button type="button" id="btn-accept-cookies" class="">Estou ciente</button>
                    </div>
               </div>
          </dialog>
        `;
          document.body.appendChild(cookieBanner);

          var btnAcceptCookies = document.getElementById('btn-accept-cookies');
          if (btnAcceptCookies) {
               btnAcceptCookies.addEventListener('click', function () {
                    localStorage.setItem('lgpdAceito', 'true');
                    cookieBanner.style.transform = 'translateY(-200px)';
                    setTimeout(function () {
                         cookieBanner.style.transform = 'translateY(200px)';
                    }, 520);
                    setTimeout(function () {
                         cookieBanner.parentNode.removeChild(cookieBanner);
                    }, 1000);
               });
          }

          // Adiciona a classe "no-banner-fixo-show" ao clicar no elemento com a classe "fechar-banner-fixo"
          var fecharBannerFixo = document.querySelectorAll('.fechar-banner-fixo');
          fecharBannerFixo.forEach(function (element) {
               element.addEventListener('click', function () {
                    document.getElementById('cookie-banner').classList.add('no-banner-fixo-show');
               });
          });

          // Remove a classe "no-banner-fixo-show" ao clicar no elemento com a classe "abrir-banner-fixo"
          var abrirBannerFixo = document.querySelectorAll('.abrir-banner-fixo');
          abrirBannerFixo.forEach(function (element) {
               element.addEventListener('click', function () {
                    document.getElementById('cookie-banner').classList.remove('no-banner-fixo-show');
               });
          });
     }
});

