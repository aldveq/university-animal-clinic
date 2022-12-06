const StickyHeader = () => {
	jQuery(document).ready(function($) {
		$(window).scroll(function () {
			const fromTopPx = 200;
			const scrolledFromtop = $(window).scrollTop();
			
			if (scrolledFromtop > fromTopPx) {
				$('header.header').addClass('fixed');
				$('body').addClass('header-fixed');
			} else {
				$('header.header').removeClass('fixed');
				$('body').removeClass('header-fixed');
			}
		});
	});
}

export default StickyHeader;