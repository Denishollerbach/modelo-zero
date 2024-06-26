document.addEventListener('DOMContentLoaded', function () {
     if (!localStorage.getItem('lgpdAceito')) {
          var cookieBanner = document.createElement('div');
          cookieBanner.id = 'cookieBanner';
          cookieBanner.innerHTML = `
                                   <div class="content">
                                        <p>
                                        Usamos cookies para personalizar conteúdos e melhorar a sua experiência. <br>Para mais informações, acesse o nosso
                                        <a href="/politica-de-privacidade" target="_self">Aviso Externo de Privacidade.</a>
                                        </p>
                                        <button type="button" id="btnSaveCookie" class="btn btn-cookie">Aceitar e Prosseguir</button>
                                   </div>
                              `;
          document.body.appendChild(cookieBanner);
          setTimeout(function () {
               cookieBanner.classList.add("show");
          }, 777);

          var btnSaveCookie = document.getElementById('btnSaveCookie');
          if (btnSaveCookie) {
               btnSaveCookie.addEventListener('click', function () {
                    localStorage.setItem('lgpdAceito', 'true');
                    cookieBanner.classList.remove("show");
                    setTimeout(function () {
                         cookieBanner.parentNode.removeChild(cookieBanner);
                    }, 6000);
               });
          }
     }
});