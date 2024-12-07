document.addEventListener("DOMContentLoaded", function () {
	// hamburger menu
	const hamburgerMenu = document.getElementById("hamburger-menu");
	const smallNavbar = document.getElementById("small-navbar");
	const hamburgerCloseButton = document.getElementById("hamburger-close-button");

	hamburgerMenu.addEventListener("click", function () {
		smallNavbar.classList.remove("h-0", "hidden");
		smallNavbar.classList.add("h-[397px]", "flex");
	});

	hamburgerCloseButton.addEventListener("click", function () {
		smallNavbar.classList.remove("h-[397px]", "flex");
		smallNavbar.classList.add("h-0", "hidden");
	});

	// swiper hero section
	const swiper = new Swiper(".swiper", {
		autoplay: {
			loop: true,
			delay: 4000,
		},
		navigation: {
			prevEl: ".swiper-button-prev",
			nextEl: ".swiper-button-next",
		},
		spaceBetween: 0,
		effect: "slide",
		lazy: true,
	});

	// swiper categories section
	const swiperCategories = new Swiper(".swiper-categories", {
		spaceBetween: 0,
		effect: "slide",
		lazy: true,
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
			},
		},
	});
});
