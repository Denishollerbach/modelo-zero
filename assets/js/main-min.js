const button=document.querySelector("button.theme-option"),icon=document.querySelector("button.theme-option i"),body=document.querySelector("body"),isDarkMode="true"===localStorage.getItem("darkmode");isDarkMode&&body.classList.add("dark"),button&&button.addEventListener("click",(function(){body.classList.toggle("dark");const e=body.classList.contains("dark");localStorage.setItem("darkmode",e.toString())})),$(window).on("load",(function(){const e=document.querySelector("#indicator");if(e){const t=document.body.scrollHeight-window.innerHeight;window.addEventListener("scroll",(()=>{const i=window.scrollY/t*100;e.style.width=`${i}%`}))}})),$(document).ready((function(){$(".nav-link").click((()=>{setTimeout((()=>{history.replaceState("",document.title,window.location.origin+window.location.pathname+window.location.search)}),5)}))})),$("html, body").css({overflow:"hidden"}),$(window).on("load",(function(){setTimeout((function(){$(".overlay-loader").fadeOut(),$("html, body").css({overflow:"initial"})}),.09)})),$(document).ready((function(e){e("li.ancora a").on("click",(function(){e(".header-search").fadeOut("slow"),e(".search-menu").removeClass("active"),e(".navbar-collapse").removeClass("show"),e("#checkbox").prop("checked",!1)})),e(".navbar-nav").append('<li class="search-menu"><span></span></li>'),e(".search-menu").click((function(){e(this).toggleClass("active"),e(".header-search").fadeToggle("slow")})),e("#menuToggle").on("click",(function(){e(".header-search").fadeOut("slow"),e(".search-menu").removeClass("active")}));var t,i=document.querySelector("#header"),o=document.querySelector(".banner-box");if(o){var n=i.clientHeight;o.style.height="calc(100vh - "+n+"px)"}if(e(".mySwiper").length>0&&"undefined"!=typeof Swiper){var a=e(".mySwiper .swiper-slide:not(.swiper-slide-duplicate)").length,s=5200;new Swiper(".mySwiper",{slidesPerView:1,direction:"horizontal",loop:a>1,parallax:!0,speed:1777,autoplay:{delay:s,disableOnInteraction:!1},pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},on:{slideChange:function(){var e=this.activeIndex,t=this.slides[e].querySelector("video");t&&(t.currentTime=0,t.play())}}});a<=1&&e(".swiper-pagination, .swiper-button-next, .swiper-button-prev").hide(),e(".mySwiper .swiper-slide video").each((function(e,t){var i=t.closest(".swiper-slide");i.classList.add("swiper-video"),i.setAttribute("data-swiper-autoplay",""),t.addEventListener("canplay",(function(){var e=t.duration;s=1e3*e-1777-520,i.setAttribute("data-swiper-autoplay",s)}))}))}function l(t){var i=e("header .top-header"),o=e("header .middle-header"),n=e("header .bottom-header"),a=e(window).scrollTop(),s=0;if(i.length>0&&(s+=i.innerHeight()),o.length>0&&(s+=o.innerHeight()),n.length>0&&(s+=n.innerHeight()),s<=a){t.addClass("sticky");var l=s+"px";"absolute"===n.css("position")&&(l=s-n.innerHeight()+"px"),e("main").css({"padding-top":l})}else t.removeClass("sticky"),e("main").css({"padding-top":0})}"undefined"!=typeof Swiper&&e(".swiper-slider-4-itens").length>0&&(t=".swiper-slider-4-itens",new Swiper(t,{slidesPerView:4,spaceBetween:20,speed:1e3,autoplay:{delay:3300,disableOnInteraction:!0},navigation:{nextEl:t+" .swiper-button-next",prevEl:t+" .swiper-button-prev"},pagination:{el:t+" .swiper-pagination",clickable:!0},breakpoints:{0:{slidesPerView:1,spaceBetween:0},480:{slidesPerView:3,spaceBetween:5},768:{slidesPerView:4}}})),e("aside#primary .widget-blog .children").each((function(t,i){e(this).parent().addClass("has_child")})),e("aside#primary .widget-blog ul li.has_child > a").on("click",(function(t){t.preventDefault(),e(this).parent().toggleClass("open"),e(this).next().slideToggle()})),e(window).on("load",(function(){e("header.shop-header").length||l(e("header")),e(this).scrollTop()>30?e(".back-to-top").addClass("active"):e(".back-to-top").removeClass("active")})),e(window).scroll((function(){e("header.shop-header").length||l(e("header")),e(this).scrollTop()>30?e(".back-to-top").addClass("active"):e(".back-to-top").removeClass("active")}));let r=document.querySelectorAll(".open-video:not(.intro)"),c=document.querySelectorAll(".close-video");function d(e,t){body.classList[t]("overflow"),e.classList[t]("active");let i=e.children[0];"video"===i.dataset.type?"add"===t?(i.muted=!1,i.play(),i.currentTime=0):"remove"===t&&i.pause():"iframe"===i.dataset.type&&"add"===t&&(i.src+="?autoplay=1")}function u(e,t){e.src="",e.src=t.replace("?autoplay=1","")}r.forEach((function(e,t){e.addEventListener("click",(function(){let t=e.nextElementSibling,i=t.children[0],o=i.src;i.dataset.originalSrc=o,d(t,"add"),e.classList.add("active")}))})),c.forEach((function(e,t){e.addEventListener("click",(function(){let t=e.parentElement,i=t.closest(".video-box");if(i){let e=i.querySelector(".open-video");d(t,"remove");let o=t.children[0];"iframe"===o.dataset.type&&o.src.includes("youtube")&&u(o,o.dataset.originalSrc),e.classList.remove("active")}}))})),document.querySelectorAll(".overlay").forEach((function(e){e.addEventListener("click",(function(){let e=this.closest(".video-box"),t=e.querySelector(".open-video"),i=e.querySelector(".clip");d(i,"remove");let o=i.children[0];"iframe"===o.dataset.type&&o.src.includes("youtube")&&u(o,o.dataset.originalSrc),t.classList.remove("active")}))})),r.forEach((function(e){e.addEventListener("mouseenter",(function(){this.closest(".video-box").querySelector(".video-box-overlay").style.filter="grayscale(0)"})),e.addEventListener("mouseleave",(function(){this.closest(".video-box").querySelector(".video-box-overlay").style.filter="grayscale(52%)"}))}));var p=document.querySelectorAll(".section_to_active");p.length&&window.addEventListener("scroll",(function(){p.forEach((function(e){var t=0,i=e.offsetTop+e.offsetHeight-window.innerHeight;0===t&&window.scrollY>i&&(e.classList.add("activated"),t=1)}))}))}));var ultimoScroll=0;window.addEventListener("scroll",(function(){var e=window.pageYOffset||document.documentElement.scrollTop,t=document.querySelector("header");t&&(e>ultimoScroll?t.classList.remove("visible"):t.classList.add("visible")),ultimoScroll=e}));const detailsElements=document.querySelectorAll("details");detailsElements.forEach((e=>{e.addEventListener("click",(()=>{detailsElements.forEach((t=>{t!==e&&t.removeAttribute("open")}))}))})),document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".contato label").forEach((function(e){var t=e.parentElement.querySelector("input, textarea"),i=e.parentElement.querySelector("i");t.addEventListener("focus",(function(){e.classList.add("active"),i&&i.classList.add("active")})),t.addEventListener("blur",(function(){""===this.value&&(e.classList.remove("active"),i&&i.classList.remove("active"))})),""!==t.value.trim()&&(e.classList.add("active"),i&&i.classList.add("active"))}))}));