const HeaderDisclaimer = () => {
	$('.covid-message .removeit').on('click', function () {
		$(this).closest(".covid-message").remove();
	});
}

export default HeaderDisclaimer;