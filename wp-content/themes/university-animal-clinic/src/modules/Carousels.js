const Carousels = () => {
	jQuery(document).ready(function($) {
		$('.home-slider').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			autoplay: true,
			autoplayTimeout: 5000,
			responsive: {
				0: {
					items: 1
				}
			}
		});

		$('.service-owl').owlCarousel({
			loop: true,
			margin: 16,
			nav: true,
			autoplay: false,
			items: 1,
			responsive: {
				0: {
					items: 1,
					stagePadding: 36,
				},
				992: {
					items: 1,
					stagePadding: 0,
				},
				768: {
					items: 3,
					stagePadding: 20,
				},
				500: {
					items: 2,
					stagePadding: 20,
				},
			}
		});

		$('.testi-owl').owlCarousel({
			loop: true,
			margin: 0,
			nav: true,
			autoplay: false,
			responsive: {
				0: {
					items: 1
				}
			}
		});
	});
}

export default Carousels;