/*global jQuery*/

const HeaderDisclaimer = () => {
	jQuery( document ).ready( function( $ ) {
		$( '.covid-message .removeit' ).on( 'click', function() {
			$( this ).closest( '.covid-message' ).remove();
		} );
	} );
};

export default HeaderDisclaimer;
