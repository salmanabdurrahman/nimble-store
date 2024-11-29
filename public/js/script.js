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

	// active link
	const navLinks = document.querySelectorAll(".nav-link");

	function setActiveLink() {
		const activeLinkId = localStorage.getItem("activeLink") || "nav-link-1";
		navLinks.forEach(navLink => {
			navLink.classList.remove("font-bold");
			if (navLink.id === activeLinkId) {
				navLink.classList.add("font-bold");
			}
		});
	}

	setActiveLink();

	navLinks.forEach(navLink => {
		navLink.addEventListener("click", function (event) {
			const navId = event.target.id;

			localStorage.setItem("activeLink", navId);

			navLinks.forEach(link => {
				link.classList.remove("font-bold");
			});

			navLink.classList.add("font-bold");
		});
	});
});
