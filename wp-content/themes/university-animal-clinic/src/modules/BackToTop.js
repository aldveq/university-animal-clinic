const BackToTop = () => {
	jQuery(document).ready(function($) {
		$(".back-top .learn-more").click(function () {
			$("html, body").animate({ scrollTop: 0 }, 1000);
		});
	});
}

export default BackToTop;