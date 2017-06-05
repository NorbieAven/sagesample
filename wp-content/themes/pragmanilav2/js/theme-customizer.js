/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	//Update site link color in real time...
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );


wp.customize( 'link-hover-color', function( value ) {
            value.bind( function( to ) {
 
                var style, el;
 
                // build the style element
                style = '<style class="hover-styles">a:hover { color: ' + to + '; }</style>';
 
                // look for a matching style element that might already be there
                el =  $( '.hover-styles' );
 
                // add the style element into the DOM or replace the matching style element that is already there
                if ( el.length ) {
                    el.replaceWith( style ); // style element already exists, so replace it
                } else {
                    $( 'head' ).append( style ); // style element doesn't exist so add it
                }
            } );
        } );
wp.customize( 'site_header_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar.shrink' ).css('background-color', to );
		} );
	} );

wp.customize( 'menu_items_color', function( value ) {
		value.bind( function( to ) {
			$( '.menu-item a' ).css('color', to );
		} );
	} );

wp.customize( 'tmx_content_color', function( value ) {
		value.bind( function( to ) {
			$( 'p' ).css( 'color', to );
		});
	});

wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.blog-footer' ).css('background-color', to );
		} );
	} );

wp.customize( 'footer_color', function( value ) {
		value.bind( function( to ) {
			$( '.blog-footer p' ).css('color', to );
		} );
	} );

} )( jQuery );
