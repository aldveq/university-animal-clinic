const FunFact = () => {
	jQuery(document).ready(function($) {
		$(".fun-fact-owl.owl-carousel").owlCarousel({
			loop: true,
			items: 1,
			margin: 0,
			stagePadding: 0,
			autoplay: false,
			nav: true,
		});

		let dotcount = 1;

		jQuery('.fun-fact-owl .owl-dot').each(function () {
			jQuery(this).addClass('dotnumber' + dotcount);
			jQuery(this).attr('data-info', dotcount);
			dotcount = dotcount + 1;
		});

		let slidecount = 1;

		jQuery('.fun-fact-owl .owl-item').not('.cloned').each(function () {
			jQuery(this).addClass('slidenumber' + slidecount);
			slidecount = slidecount + 1;
		});

		jQuery('.fun-fact-owl .owl-dot').each(function () {
			grab = jQuery(this).data('info');
			slidegrab = jQuery('.slidenumber' + grab + ' img').attr('src');
			jQuery(this).css("background-image", "url(" + slidegrab + ")");
		});

		const amount = $('.fun-fact-owl .owl-dot').length;
		const gotowidth = 100 / amount;
	});
}

export default FunFact;