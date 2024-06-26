// Efeito dark-mode
const button = document.querySelector("button.theme-option");
const icon = document.querySelector("button.theme-option i");
const body = document.querySelector("body");
const isDarkMode = localStorage.getItem("darkmode") === "true";
if (isDarkMode) {
	body.classList.add("dark");
} else {
}
if (button) {
	button.addEventListener("click", function () {
		body.classList.toggle("dark");
		const isDarkMode = body.classList.contains("dark");
		localStorage.setItem("darkmode", isDarkMode.toString());
	});
}

// indicator animation header
$(window).on("load", function () {
	// Indicador de rolagem
	const indicator = document.querySelector('#indicator');
	// console.log(indicator);
	if (indicator) {
		// Pegando a altura máxima do que podemos rolar
		const maxHeight = document.body.scrollHeight - window.innerHeight;
		// Adicionando o ouvinte de evento de rolagem, calcularemos a largura em porcentagem do indicador com base na altuar de rolagem e na posição autoplay
		window.addEventListener('scroll', () => {
			const percentage = (window.scrollY / maxHeight) * 100;
			indicator.style.width = `${percentage}%`;
		});
	}
	// $( "<div id='indicator'></div>" ).appendTo( "body" );
	// $( "<div id='indicator'></div>" ).insertAfter( ".overlay-loader" );
});

// Remover o Hash das classe nav link para não aparecer na url ao clicar no menu
// when the DOM is ready
$(document).ready(function () {
	// get the anchor link buttons
	const menuBtn = $('.nav-link');
	// when each button is clicked
	menuBtn.click(() => {
		// set a short timeout before taking action
		// so as to allow hash to be set
		setTimeout(() => {
			// call removeHash function after set timeout
			removeHash();
		}, 5); // 5 millisecond timeout in this case
	});
	// removeHash function
	// uses HTML5 history API to manipulate the location bar
	function removeHash() {
		history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
	}
});

// Não deixar scroll até carregar a pagina
$('html, body').css({ 'overflow': 'hidden' });
// Remove loader page
$(window).on("load", function () {
	setTimeout(function () {
		$('.overlay-loader').fadeOut()
		$('html, body').css({ 'overflow': 'initial' });
	}, .09);
});

// Start
$(document).ready(function ($) {
	// esconder o menu mobile ao clicar no li ancora a do menu, clicou ele sobe o menu sozinho
	$('li.ancora a').on('click', function () {
		$('.header-search').fadeOut('slow');
		$('.search-menu').removeClass('active');
		$('.navbar-collapse').removeClass('show');
		$('#checkbox').prop("checked", false);
	});
	// Aciionar item do menu para busca
	$(".navbar-nav").append('<li class="search-menu"><span></span></li>');
	// Clique no icone da busca, mudar classe para o x e abri ou fechar a busca
	$(".search-menu").click(function () {
		$(this).toggleClass('active');
		$('.header-search').fadeToggle('slow');
	});
	// Fechar busca, recolher busca ao clicar no botao do menu
	$('#menuToggle').on('click', function () {
		$('.header-search').fadeOut('slow');
		$('.search-menu').removeClass('active');
	});
	// -------------------------------------------------
	// banner;
	var header = document.querySelector('#header');
	// Selecione o elemento .banner-box
	var bannerBox = document.querySelector('.banner-box');
	// Verifique se o elemento .banner-box existe na página
	if (bannerBox) {
		// Calcule a altura do header
		var headerHeight = header.clientHeight;

		// Defina a altura da .banner-box usando a altura do header
		bannerBox.style.height = 'calc(100vh - ' + headerHeight + 'px)';
	}
	// -------------------------------------------------
	// Verifique se o elemento com a classe ".mySwiper" existe na página
	if ($('.mySwiper').length > 0 && typeof Swiper !== "undefined") {
		// Contagem do número de slides reais (não duplicados)
		var numberOfSlides = $('.mySwiper .swiper-slide:not(.swiper-slide-duplicate)').length;
		var speedSlide = 1777;
		var delayTime = 5200;
		// console.log('delay padrão ' + delayTime);
		var swiperConfig = {
			slidesPerView: 1,
			direction: 'horizontal',
			loop: numberOfSlides > 1,
			parallax: true,
			speed: speedSlide,
			autoplay: {
				delay: delayTime,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			on: {
				slideChange: function () {
					var activeIndex = this.activeIndex;
					var slide = this.slides[activeIndex];
					var video = slide.querySelector('video');

					if (video) {
						video.currentTime = 0;
						video.play();
					}
				},
			},
		};

		// Inicialize o Swiper
		var swiper = new Swiper(".mySwiper", swiperConfig);

		// Oculte as setas e os bullets se houver apenas um slide
		if (numberOfSlides <= 1) {
			$(".swiper-pagination, .swiper-button-next, .swiper-button-prev").hide();
		}

		// Configurar o atributo data-swiper-autoplay com a duração dos vídeos
		$('.mySwiper .swiper-slide video').each(function (index, videoElement) {
			var slide = videoElement.closest('.swiper-slide');
			slide.classList.add('swiper-video');
			slide.setAttribute('data-swiper-autoplay', '');
			// videoElement.addEventListener('loadedmetadata', function () {
			videoElement.addEventListener('canplay', function () {
				var videoDuration = videoElement.duration;
				delayTime = videoDuration * 1000 - speedSlide - 520;
				slide.setAttribute('data-swiper-autoplay', delayTime);
				// console.log('delay do video ' + delayTime);
			});
		});

	}


	// Swiper slider generico 4 itens
	// Função para inicializar o Swiper com base na classe genérica
	function initSwiperSlider(selector, slidesPerView, spaceBetween) {
		var swiper = new Swiper(selector, {
			slidesPerView: slidesPerView,
			spaceBetween: spaceBetween,
			// loop: true,
			speed: 1000,
			autoplay: {
				delay: 3300,
				disableOnInteraction: true,
			},
			navigation: {
				nextEl: selector + ' .swiper-button-next',
				prevEl: selector + ' .swiper-button-prev',
			},
			pagination: {
				el: selector + ' .swiper-pagination', // Elemento para os bullets
				clickable: true, // Permitir clique nos bullets para navegar entre os slides
			},
			breakpoints: {
				// when window width is >= 320px
				0: {
					slidesPerView: 1,
					spaceBetween: 0
				},
				// when window width is >= 480px
				480: {
					slidesPerView: 3,
					spaceBetween: 5
				},
				// when window width is >= 768px
				768: {
					slidesPerView: 4,
				},
			}
		});
	}
	// Verifique se a biblioteca Swiper está definida e se o elemento com a classe ".swiper-slider-4-itens" existe na página
	if (typeof Swiper !== "undefined" && $('.swiper-slider-4-itens').length > 0) {
		// Crie a instância do Swiper aqui
		initSwiperSlider('.swiper-slider-4-itens', 4, 20);
	}

	// -------------------------------------------------

	// Abrir sub itens do blog itens filhos
	$('aside#primary .widget-blog .children').each(function (index, el) {
		$(this).parent().addClass('has_child');
	});
	$('aside#primary .widget-blog ul li.has_child > a').on('click', function (event) {
		event.preventDefault();
		$(this).parent().toggleClass('open');
		$(this).next().slideToggle();
	});


	// Onload Sticky and back to top
	$(window).on("load", function () {
		if (!$('header.shop-header').length) {
			sticky($('header'));
		}
		if ($(this).scrollTop() > 30) {
			$('.back-to-top').addClass('active');
		} else {
			$('.back-to-top').removeClass('active');
		}
	});

	// On scroll Sticky and Back to top
	$(window).scroll(function () {
		if (!$('header.shop-header').length) {
			sticky($('header'));
		}
		if ($(this).scrollTop() > 30) {
			$('.back-to-top').addClass('active');
		} else {
			$('.back-to-top').removeClass('active');
		}
	});

	function sticky(element) {
		var $topHeader = $('header .top-header');
		var $middleHeader = $('header .middle-header');
		var $bottomHeader = $('header .bottom-header');
		var scrollPosition = $(window).scrollTop();
		var headerTotalOriginal = 0;

		if ($topHeader.length > 0) {
			headerTotalOriginal += $topHeader.innerHeight();
		}

		if ($middleHeader.length > 0) {
			headerTotalOriginal += $middleHeader.innerHeight();
		}

		if ($bottomHeader.length > 0) {
			headerTotalOriginal += $bottomHeader.innerHeight();
		}

		if (headerTotalOriginal <= scrollPosition) {
			element.addClass('sticky');
			var paddingTop = headerTotalOriginal + 'px';

			if ($bottomHeader.css('position') === 'absolute') {
				paddingTop = (headerTotalOriginal - $bottomHeader.innerHeight()) + 'px';
			}

			$('main').css({ 'padding-top': paddingTop });
		} else {
			element.removeClass('sticky');
			$('main').css({ 'padding-top': 0 });
		}
	}

	// document.addEventListener("DOMContentLoaded", function () {
	// Custom VIDEO
	let open_video_btn = document.querySelectorAll('.open-video:not(.intro)');
	let close_video_btn = document.querySelectorAll('.close-video');

	function manipulateVideo(clip, action) {
		body.classList[action]('overflow');
		clip.classList[action]('active');
		let player = clip.children[0];

		if (player.dataset.type === "video") {
			if (action === 'add') {
				player.muted = false;
				player.play();
				player.currentTime = 0;
			} else if (action === 'remove') {
				player.pause();
			}
		} else if (player.dataset.type === "iframe" && action === 'add') {
			player.src += "?autoplay=1";
		}
	}

	function removeAndRecreateIframe(iframe, originalSrc) {
		iframe.src = '';
		iframe.src = originalSrc.replace('?autoplay=1', '');
	}

	open_video_btn.forEach(function (btt, index) {
		btt.addEventListener('click', function () {
			let clipActual = btt.nextElementSibling;
			// console.log(clipActual);
			let player = clipActual.children[0];
			let originalSrc = player.src;
			player.dataset.originalSrc = originalSrc;
			manipulateVideo(clipActual, 'add');
			btt.classList.add('active');
		});
	});

	close_video_btn.forEach(function (btt_close, index) {
		btt_close.addEventListener('click', function () {
			let clipActual = btt_close.parentElement;
			let videoBox = clipActual.closest('.video-box');

			if (videoBox) {
				let openVideoBtn = videoBox.querySelector('.open-video');
				manipulateVideo(clipActual, 'remove');
				let player = clipActual.children[0];

				if (player.dataset.type === "iframe" && player.src.includes('youtube')) {
					removeAndRecreateIframe(player, player.dataset.originalSrc);
				}

				openVideoBtn.classList.remove('active');
			}
		});
	});


	document.querySelectorAll('.overlay').forEach(function (overlay) {
		overlay.addEventListener('click', function () {
			let videoBox = this.closest('.video-box');
			let openVideoBtn = videoBox.querySelector('.open-video');
			let clipActual = videoBox.querySelector('.clip');

			manipulateVideo(clipActual, 'remove');
			let player = clipActual.children[0];

			if (player.dataset.type === "iframe" && player.src.includes('youtube')) {
				removeAndRecreateIframe(player, player.dataset.originalSrc);
			}

			openVideoBtn.classList.remove('active');
		});
	});

	// Efeito
	open_video_btn.forEach(function (openVideo) {
		openVideo.addEventListener('mouseenter', function () {
			// Quando o mouse entra, remove o filtro de escala de cinza
			var videoBox = this.closest('.video-box');
			videoBox.querySelector('.video-box-overlay').style.filter = 'grayscale(0)';
		});
		openVideo.addEventListener('mouseleave', function () {
			// Quando o mouse sai, restaura o filtro de escala de cinza
			var videoBox = this.closest('.video-box');
			videoBox.querySelector('.video-box-overlay').style.filter = 'grayscale(52%)';
		});
	});

	// });

	// Função para adicionar a classe activated nas seções desejadas
	var sections_to_activate = document.querySelectorAll('.section_to_active');
	var qtd_ativacao = Array.from(sections_to_activate).fill(0); // Inicializa um array com zeros para acompanhar a ativação de cada seção

	if (sections_to_activate.length) {
		function activateSections() {
			sections_to_activate.forEach(function (section_to_active, index) {
				var toTop = section_to_active.offsetTop;
				var toBottom = toTop + section_to_active.offsetHeight;
				var animateOffset = parseInt(section_to_active.getAttribute('data-animate-offset')) || 10;
				var margem = (toBottom - toTop) * (animateOffset / 100);
				var toBottomSection = toBottom - window.innerHeight - margem;

				if (qtd_ativacao[index] === 0 && window.scrollY > toBottomSection) {
					section_to_active.classList.add('activated');
					qtd_ativacao[index] = 1;
				} else if (qtd_ativacao[index] === 1 && window.scrollY < toBottomSection) {
					section_to_active.classList.remove('activated');
					qtd_ativacao[index] = 0;
				}
			});
		}

		window.addEventListener('scroll', activateSections);
		window.addEventListener('load', activateSections);
	}

});

var ultimoScroll = 0;
window.addEventListener("scroll", function () {
	var atualScroll = window.pageYOffset || document.documentElement.scrollTop;
	var header = document.querySelector("header");

	if (header) {
		if (atualScroll > ultimoScroll) {
			// Rolagem para baixo
			header.classList.remove("visible");
		} else {
			// Rolagem para cima
			header.classList.add("visible");
		}
	}
	ultimoScroll = atualScroll;
});


// Tag details para abrir apenas uma de cada vez
const detailsElements = document.querySelectorAll('details');
detailsElements.forEach((details) => {
	details.addEventListener('click', () => {
		// Feche todos os detalhes, exceto o que foi clicado
		detailsElements.forEach((otherDetails) => {
			if (otherDetails !== details) {
				otherDetails.removeAttribute('open');
			}
		});
	});
});


// Contato troca de classes 
document.addEventListener("DOMContentLoaded", function () {
	var labels = document.querySelectorAll(".contato label");
	labels.forEach(function (label) {
		var input = label.parentElement.querySelector("input, textarea");
		var icon = label.parentElement.querySelector("i");

		input.addEventListener("focus", function () {
			label.classList.add("active");
			if (icon) {
				icon.classList.add("active");
			}
		});

		input.addEventListener("blur", function () {
			if (this.value === "") {
				label.classList.remove("active");
				if (icon) {
					icon.classList.remove("active");
				}
			}
		});

		if (input.value.trim() !== "") {
			label.classList.add("active");
			if (icon) {
				icon.classList.add("active");
			}
		}
	});
});