const SearchBar = () => {
	$('.header .icon-search').on('click', function () {
		$(".searchbar").toggleClass("active");
	});
}

export default SearchBar;