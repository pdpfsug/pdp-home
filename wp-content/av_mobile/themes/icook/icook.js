/* WPtouch iCook JS File */
/* Public functions called here reside in base.js, found in the Foundation theme */

function doiCookReady() {
	icook_TabletView();
	icook_SwapGalleryNav();
	icook_HandleTextDropDowns();
	icook_HandleTabMenu();
	icook_WebAppMenu();
	icook_BindTappableLinks();
	icook_SearchToggle();
}
 
function icook_HandleTextDropDowns() {
	jQuery( '#content' ).on( 'click', '.text-expand', function() {
		var arrow = jQuery( this );
		var content = jQuery( this ).parent().find( '.post-content' );
		if ( content.hasClass( 'slide-in' ) ) {
			arrow.removeClass( 'icon-chevron-up' ).addClass( 'icon-chevron-down' );
			content.webkitSlideToggle();
		} else {
			arrow.removeClass( 'icon-chevron-down' ).addClass( 'icon-chevron-up' );	
			content.webkitSlideToggle();
		}
	});
}

function icook_HandleTabMenu() {
	if ( jQuery( 'ul.tab-menu' ).length ) {
		jQuery( 'ul.tab-menu' ).on( 'click', 'a:not(.login-button)', function( e ) {
			jQuery( 'ul.tab-menu li a' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery( '.tab-section' ).hide();
			var sectionName = ( '.' + jQuery( this ).attr( 'data-section' ) );
			jQuery( sectionName ).show();
	
			// Triggers focus on the search field when the search tab item is clicked
			if ( jQuery( this ).hasClass( 'icon-search' ) ) {
				jQuery( '#search-text' ).focus();
			}
	
			e.preventDefault();		
		});

		jQuery( 'ul.tab-menu li' ).find( 'a' ).first().click();
	} else {
		jQuery( '.wptouch-menu' ).css( 'display', 'none' );
	}
}

function icook_SwapGalleryNav(){
	var prevEl = jQuery( '.gallery-nav .left' );
	var nextEl = jQuery( '.gallery-nav .right' );
	var prevLink = prevEl.find( 'a' ).attr( 'href' );
	var nextLink = nextEl.find( 'a' ).attr( 'href' );
	if ( prevLink != undefined ) {
		prevEl.html( '<a class="gallery-nav-links" href="'+prevLink+'"><i class="icon-circle-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;|' );
	}
	if ( nextLink != undefined ) {
		nextEl.html( '<a class="gallery-nav-links" href="'+nextLink+'"><i class="icon-circle-arrow-right"></i></a>' );
	}
	
	jQuery( '.gallery-nav' ).on( 'click', 'a.gallery-nav-links', function( e ) {
		var galleryNavUrl = jQuery( this ).attr( 'href' );
		e.preventDefault();
		window.location = galleryNavUrl;
	});
}

// Setup iOS7 scrollable menus in Web App Mode
function icook_WebAppMenu(){
	if ( navigator.standalone ) {
		jQuery( window ).resize( function() { 
			var windowHeight = jQuery( window ).height() - 64;
			if ( jQuery( 'body.web-app-mode.ios7.smartphone.portrait' ).length ) {
				jQuery( '#menu' ).css( 'max-height', windowHeight );
			}
			if ( jQuery( 'body.web-app-mode.ios7.smartphone.landscape' ).length ) {
				jQuery( '#menu' ).css( 'max-height', windowHeight );
			}
		}).resize();
	}
}

function icook_TabletView(){
/* If it's a tablet & the clientWidth is less than 1024, 
assume it's portrait, else landscape, and remove classes when the visitor changes orientation */
	if ( jQuery( 'body' ).hasClass( 'tablet' ) ) {
		jQuery( window ).resize( function(){
			var animatedClasses = 'slide-out slide-in';
			if ( document.body.clientWidth < 1024 ) {
				jQuery( '#menu' ).hide().removeClass( animatedClasses );
			} else {
				jQuery( '#menu' ).show().removeClass( animatedClasses );
			}
		}).resize();
	}
}

// Add 'touched' class to these elements when they're actually touched (100ms delay) for a better UI experience (tappable module)
function icook_BindTappableLinks(){
	// Drop down menu items
	jQuery( '.wptouch-menu li, ul.tab-menu li a' ).each( function(){	
		jQuery( this ).addClass( 'tappable' );	  
	});
}

// CSS animated slideout
function icook_SearchToggle(){
	jQuery( '#search-toggle' ).on( 'click', function(){
		jQuery( '#search-dropper' ).toggleClass( 'toggled' );
	});
}

jQuery( document ).ready( function() { doiCookReady(); } );
