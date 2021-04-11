window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector("#masthead").style.background = "#fff";
		document.querySelector('.phone').style.fill = "#333";
  } else {
    document.querySelector("#masthead").style.background = "transparent";
	document.querySelector('.phone').style.fill = "#fff";
  }
}

if(AOS) {
	AOS.init({
		// Global settings:
		disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		initClassName: 'aos-init', // class applied after initialization
		animatedClassName: 'aos-animate', // class applied on animation
		useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
		disableMutationObserver: false, // disables automatic mutations' detections (advanced)
		debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
		throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
		
	  
		// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
		offset: 120, // offset (in px) from the original trigger point
		delay: 0, // values from 0 to 3000, with step 50ms
		duration: 700, // values from 0 to 3000, with step 50ms
		easing: 'ease', // default easing for AOS animations
		once: false, // whether animation should happen only once - while scrolling down
		mirror: false, // whether elements should animate out while scrolling past them
		anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
	  
	  });
}

if (document.querySelector('.swiper-container-header')) {

	var swiper = new Swiper(".swiper-container-header", {
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
				spaceBetween: 0,
				slidesPerView: 'auto',
				centeredSlides: true
			},
			// when window width is >= 480px
			480: {
				spaceBetween: 0,
				slidesPerView: 'auto',
				centeredSlides: true

			},
			// when window width is >= 640px
			640: {
				spaceBetween: 0,
				centeredSlides: true,
				slidesPerView: 'auto'

			}
		  }
	});

	var swiper = new Swiper('#testimonials .swiper-container', {
		pagination: {
		  el: '.swiper-pagination',
		},
	});
}

if(document.querySelector('.swiper-container-locations')) {

	var swiper_locations = new Swiper(".swiper-container-locations", {
		pagination: {
			el: ".swiper-pagination-location",
			clickable: true,
		},
	});

}

if(document.querySelector('.swiper-container-apartment-single')) {

	var swiper = new Swiper('.swiper-container-apartment-single', {

		slidesPerView: 1,
		spaceBetween: 30,
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	  });
}

if(document.querySelector('.swiper-container')) {

	var swiper = new Swiper('.swiper-container', {

		slidesPerView: 1,
		spaceBetween: 30,
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	  });
}


if (document.querySelector('#burger-menu')) {

	nav_tl = gsap.timeline();

	let burger_open = document.querySelector('#burger-menu');
	// let burger_close = document.querySelector('#burger-menu-close');
	let menu = document.querySelector('#navigation-container');

	nav_tl.to(menu , {
		y:0
	})
	nav_tl.to('.site-info svg', {
		fill: '#333'
	})
	nav_tl.to('.language-switcher select', {
		color: "#333"
	},'-=1')
	.reverse()

	nav_tl.pause();

	burger_open.addEventListener('click', () => {
		nav_tl.reversed() ? nav_tl.play() : nav_tl.reverse()
	})
}


if (document.querySelector('[data-tab-target]')) {

	const tabs = document.querySelectorAll('[data-tab-target]');
	const tabContents = document.querySelectorAll('[data-tab-content]')

	tabContents[0].classList.add('active-tab');
	tabs[0].firstElementChild.classList.add('rotate-tab-indicator');

	tabs.forEach( tab => {
		tab.addEventListener('click', () => {
			const target = document.querySelector(tab.dataset.tabTarget)
			tabContents.forEach( tabContent => {
				tabContent.classList.remove('active-tab')
				tabContent.parentElement.previousElementSibling.firstElementChild.classList.remove('rotate-tab-indicator');
			})
			target.classList.add('active-tab')
			tab.firstElementChild.classList.add('rotate-tab-indicator')
		})
	})

}