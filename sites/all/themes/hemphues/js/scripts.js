$(document).ready(function () {
	/**
	 * Slideout Menu Hooks
	 **/
	var slideout = new Slideout({
		'panel': document.getElementById('page-wrapper'),
		'menu': document.getElementById('mobile-menu-wrapper'),
		'padding': 250,
		'tolerance': 70
	});

	// Toggle button
	document.querySelector('.mobile-menu-toggle > button.navbar-toggle').addEventListener('click', function() {
		slideout.toggle();
	});

	/**
	 * Search Toggle
	 */
	var search_btn = $("#search-btn"), search_input = $("#search-input"), is_search_toggled = false;
	search_btn.click(function () {
		if(is_search_toggled) {
			if(_.isEmpty(search_input.val())) {
				is_search_toggled = false;
				search_input.focus();
				search_input.hide();
				return false;
			} else {
				alert("searching...");
			}
		} else {
			is_search_toggled = true;
			search_input.show();
			search_input.focus();
			return false;
		}
	});
});