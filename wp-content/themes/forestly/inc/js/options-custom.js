/**
 * Custom scripts needed for the colorpicker, image button selectors,
 * and navigation tabs.
 */

jQuery(document).ready(function($) {

	// Loads the color pickers
	$('.of-color').wpColorPicker();

	// Image Options
	$('.of-radio-img-img').click(function(){
		$(this).parent().parent().find('.of-radio-img-img').removeClass('of-radio-img-selected');
		$(this).addClass('of-radio-img-selected');
	});

	$('.of-radio-img-label').hide();
	$('.of-radio-img-img').show();
	$('.of-radio-img-radio').hide();

	// Loads tabbed sections if they exist
	if ( $('.nav-tab-wrapper').length > 0 ) {
		options_framework_tabs();
	}

	function options_framework_tabs() {

		var $group = $('.group'),
			$navtabs = $('.nav-tab-wrapper a'),
			active_tab = '';

		// Hides all the .group sections to start
		$group.hide();

		// Find if a selected tab is saved in localStorage
		if ( typeof(localStorage) != 'undefined' ) {
			active_tab = localStorage.getItem('active_tab');
		}

		// If active tab is saved and exists, load it's .group
		if ( active_tab != '' && $(active_tab).length ) {
			$(active_tab).fadeIn();
			$(active_tab + '-tab').addClass('nav-tab-active');
		} else {
			$('.group:first').fadeIn();
			$('.nav-tab-wrapper a:first').addClass('nav-tab-active');
		}

		// Bind tabs clicks
		$navtabs.click(function(e) {

			e.preventDefault();

			// Remove active class from all tabs
			$navtabs.removeClass('nav-tab-active');

			$(this).addClass('nav-tab-active').blur();

			if (typeof(localStorage) != 'undefined' ) {
				localStorage.setItem('active_tab', $(this).attr('href') );
			}

			var selected = $(this).attr('href');

			$group.hide();
			$(selected).fadeIn();

		});
	}

});

jQuery(document).ready(function($) {
	// Color Scheme Options - These array names should match
	// the values in base_color_scheme of options.php
	// Forest Color Options
	var pre_forest = new Array();
	pre_forest['f_primary_bgcolor']='#00aa00';
	pre_forest['f_secondary_bgcolor']='#009900';
	pre_forest['f_nav_sub_bgcolor']='#CDFFD2';
	pre_forest['f_nav_sub_hover_bgcolor']='#B4FFBB';
	
	pre_forest['f_sticky_bgcolor']='#F8F8F8';
	pre_forest['f_sticky_bdcolor']='#00bb00';
	
	// Orange Color Options
	var pre_orange = new Array();
	pre_orange['f_primary_bgcolor']='#FF9900';
	pre_orange['f_secondary_bgcolor']='#FF7F00';
	pre_orange['f_nav_sub_bgcolor']='#FFE8CD';
	pre_orange['f_nav_sub_hover_bgcolor']='#FFE1BE';
	
	pre_orange['f_sticky_bgcolor']='#F8F8F8';
	pre_orange['f_sticky_bdcolor']='#FFC200';
	
	// BlueSky Color Options
	var pre_bluesky = new Array();
	pre_bluesky['f_primary_bgcolor']='#279CD9';
	pre_bluesky['f_secondary_bgcolor']='#2789D9';
	pre_bluesky['f_nav_sub_bgcolor']='#C2EDFF';
	pre_bluesky['f_nav_sub_hover_bgcolor']='#ABE6FF';
	
	pre_bluesky['f_sticky_bgcolor']='#F8F8F8';
	pre_bluesky['f_sticky_bdcolor']='#27AAD9';
	
	// Black&White Color Options
	var pre_blackwhite = new Array();
	pre_blackwhite['f_primary_bgcolor']='#292929';
	pre_blackwhite['f_secondary_bgcolor']='#4C4C4C';
	pre_blackwhite['f_nav_sub_bgcolor']='#D4D4D4';
	pre_blackwhite['f_nav_sub_hover_bgcolor']='#C7C7C7';
	
	pre_blackwhite['f_sticky_bgcolor']='#F8F8F8';
	pre_blackwhite['f_sticky_bdcolor']='#525252';
	
	// Grape Color Options
	var pre_grape = new Array();
	pre_grape['f_primary_bgcolor']='#8903AA';
	pre_grape['f_secondary_bgcolor']='#AF06D9';
	pre_grape['f_nav_sub_bgcolor']='#F1C9FB';
	pre_grape['f_nav_sub_hover_bgcolor']='#F2BCFF';
	
	pre_grape['f_sticky_bgcolor']='#F8F8F8';
	pre_grape['f_sticky_bdcolor']='#9921B7';
	
	// Puppy Color Options
	var pre_puppy = new Array();
	pre_puppy['f_primary_bgcolor']='#BA0055';
	pre_puppy['f_secondary_bgcolor']='#ED006C';
	pre_puppy['f_nav_sub_bgcolor']='#FDCAE1';
	pre_puppy['f_nav_sub_hover_bgcolor']='#FFBAD9';
	
	pre_puppy['f_sticky_bgcolor']='#F8F8F8';
	pre_puppy['f_sticky_bdcolor']='#C81F6C';
	
	// When the select box #base_color_scheme changes
	// it checks which value was selected and calls of_update_color
	$('#forestly_pre_design').change(function() {
	    colorscheme = $(this).val();
	    if (colorscheme == 'pre_forest') { colorscheme = pre_forest; }
	    if (colorscheme == 'pre_orange') { colorscheme = pre_orange; }
	    if (colorscheme == 'pre_bluesky') { colorscheme = pre_bluesky; }
	    if (colorscheme == 'pre_blackwhite') { colorscheme = pre_blackwhite; }
	    if (colorscheme == 'pre_grape') { colorscheme = pre_grape; }
	    if (colorscheme == 'pre_puppy') { colorscheme = pre_puppy; }
	    for (id in colorscheme) {
	        of_update_color(id,colorscheme[id]);
	    }
	});
	// This does the heavy lifting of updating all the colorpickers and text
        function of_update_color(id,hex) {
             $('#' + id).wpColorPicker('color',hex);
        }
});
