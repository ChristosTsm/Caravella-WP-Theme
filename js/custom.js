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
	let burger_close = document.querySelector('#burger-menu-close');
	let menu = document.querySelector('#navigation-container');

	burger_open.addEventListener('click', () => {
		nav_tl.to(burger_open, {
			x: -500,
			opacity: 0,
			display: 'none'
		})
		nav_tl.to(burger_close, {
			display: 'block',
			opacity: 1,
			y: 0
		})
		nav_tl.to(menu , {
			y:0
		})
		nav_tl.to('.site-info svg', {
			fill: '#333'
		})
		nav_tl.to('.language-switcher select', {
			color: "#333"
		},'-=1')
		nav_tl.play();
	})

	burger_close.addEventListener('click', () => {
		nav_tl.reverse();
	})
}



const tabs = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content]')

tabContents[0].classList.add('active-tab');

tabs.forEach( tab => {
	tab.addEventListener('click', () => {
		const target = document.querySelector(tab.dataset.tabTarget)
		tabContents.forEach( tabContent => tabContent.classList.remove('active-tab'))
		target.classList.add('active-tab')
	})
})