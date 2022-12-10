/*global jQuery*/

const SearchBar = () => {
	jQuery( document ).ready( function( $ ) {
		$( '.header .icon-search' ).on( 'click', function() {
			$( '.searchbar' ).toggleClass( 'active' );
		} );
	} );
};

export default SearchBar;
