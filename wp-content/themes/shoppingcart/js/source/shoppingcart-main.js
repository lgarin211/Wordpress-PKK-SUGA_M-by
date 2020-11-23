jQuery( function() {
		
		// Search toggle.
		var searchbutton = jQuery('#search-toggle');
		var searchbox = jQuery('#search-box');

			searchbutton.on('click', function(){
		    if (searchbutton.hasClass('header-search')){
		        searchbutton.removeClass('header-search').addClass('header-search-x');
		        searchbox.addClass('show-search-box');
		    }
		    
		    else{
		        searchbutton.removeClass('header-search-x').addClass('header-search');
		        searchbox.removeClass('show-search-box');
		    }
		});

		// Add class
		jQuery( function() {
			var jQuerymuse = jQuery("#page div");
			var jQuerysld = jQuery("body");

			if (jQuerymuse.hasClass("main-slider")) {
			       jQuerysld.addClass("sld-plus");
			}
		});

		// Main Menu toggle for below 981px screens.
		( function() {
			var togglenav = jQuery( '.main-navigation' ), button, menu;
			if ( ! togglenav ) {
				return;
			}

			button = togglenav.find( '.menu-toggle' );
			if ( ! button ) {
				return;
			}
			
			menu = togglenav.find( '.menu' );
			if ( ! menu || ! menu.children().length ) {
				button.hide();
				return;
			}

			jQuery( '.menu-toggle' ).on( 'click', function() {
				jQuery(this).toggleClass("on");
				togglenav.toggleClass( 'toggled-on' );
			} );
		} )();

		// Top Menu toggle for below 981px screens.
		( function() {
			var togglenav = jQuery( '.top-bar-menu' ), button, menu;
			if ( ! togglenav ) {
				return;
			}

			button = togglenav.find( '.top-menu-toggle' );
			if ( ! button ) {
				return;
			}
			
			menu = togglenav.find( '.top-menu' );
			if ( ! menu || ! menu.children().length ) {
				button.hide();
				return;
			}

			jQuery( '.top-menu-toggle' ).on( 'click', function() {
				jQuery(this).toggleClass("on");
				togglenav.toggleClass( 'toggled-on' );
			} );
		} )();

		// Menu toggle for catalog menu.
		jQuery(document).ready( function() {
		  //when the button is clicked
		  jQuery(".show-menu-toggle").click( function() {
		    //apply toggleable classes
		    jQuery(".catalog-menu-box").toggleClass("show");
		    jQuery(".page-overlay").toggleClass("catalog-menu-open"); 
		    jQuery("#page").addClass("catalog-content-open");  
		  });
		  
		  jQuery(".hide-menu-toggle, .page-overlay").click( function() {
		    jQuery(".catalog-menu-box").removeClass("show");
		    jQuery(".page-overlay").removeClass("catalog-menu-open");
		    jQuery("#page").removeClass("catalog-content-open");
		  });
		});

		// Catalog menu below 768px
		jQuery( function() {
			if(jQuery( window ).width() < 767){
				jQuery(".catalog-menu .menu-item-has-children ul, .catalog-menu .page_item_has_children ul").hide();
				jQuery(".catalog-menu .menu-item-has-children a, .catalog-menu .page_item_has_children a").click(function () {
					jQuery(this).parent(".catalog-menu .menu-item-has-children, .catalog-menu .page_item_has_children").children("ul").slideToggle("100");
				});
			}
		});

		jQuery( function() {
			if(jQuery( window ).width() < 981){
				jQuery(".main-navigation .menu-item-has-children ul, .main-navigation .page_item_has_children ul").hide();
				jQuery(".main-navigation .menu-item-has-children a, .main-navigation .page_item_has_children a").click(function () {
					jQuery(this).parent(".main-navigation .menu-item-has-children, .main-navigation .page_item_has_children").children("ul").slideToggle("100");
				});
			}
		});

		// Go to top button.
		jQuery(document).ready(function(){

		// Hide Go to top icon.
		jQuery(".go-to-top").hide();

		  jQuery(window).scroll(function(){

		    var windowScroll = jQuery(window).scrollTop();
		    if(windowScroll > 900)
		    {
		      jQuery('.go-to-top').fadeIn();
		    }
		    else
		    {
		      jQuery('.go-to-top').fadeOut();
		    }
		  });

		  // scroll to Top on click
		  jQuery('.go-to-top').click(function(){
		    jQuery('html,header,body').animate({
		    	scrollTop: 0
			}, 700);
			return false;
		  });

		});

} );