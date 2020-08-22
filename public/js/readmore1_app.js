
	$( '#info' ).readmore( {
		moreLink: '<a href="#">Usage, examples, and options</a>',
		collapsedHeight: 200,
		afterToggle: function ( trigger, element, expanded ) {
			if ( !expanded ) { // The "Close" link was clicked
				$( 'html, body' ).animate( {
					scrollTop: element.offset().top
				}, {
					duration: 100
				} );
		}
	}
} );

	$( 'article' ).readmore( {
		speed: 500
	} );
