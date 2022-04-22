/**
 * This is the namespace for the main.js file
 * @namespace main
 * @version 1.0
 */
jQuery(document).ready(function($){ 

	/**
	 * This function calls ajax and runs a function on success and on failure
	 * @param  {string} action - This is the action name for the function that is called in php. It should match the php function name
	 * @param  {object} data - This is the data that is parsed to the php. It will be initialzed within the $_POST array
	 * @param  {function} onSuccess - This is the function that is run when the data is returned successfully
	 * @param  {function} onFail - This is the function that is run when the data is returned with an error
	 * @param  {bool} global_bool - This bool allows or removes the global bool. 
	 * @return {void} - This function does not return anything
	 * @memberof main
	 */
	function call_ajax(action,data,onSuccess,onFail,global_bool = true){
		$.ajax({
			url: ajaxurl + "?action="+action,
			type:"POST",
			data:data,
			global:global_bool,
			success:onSuccess,
			error:onFail,
		});
	}

	/**
	 * This function will toggle a jquery element between hidden and non hidden
	 * @name toggleHidden
	 * @function
	 * @param {jQuery} element - The jQuery element on which to toggle Hidden
	 * @return {jQuery} - The jQuery element that as been toggled as hidden
	 * @memberof main
	 */
	
	$.fn.toggleHidden = function() {
		return this.each(function(index, element) {
			var $element = $(element);
			if ($element.attr('hidden')) {
				$element.removeAttr('hidden');
			} else {
				$element.attr('hidden', '');
			}
		});
	};
	
	// Mobile Button
	/**
	 * This is the click handler for the Mobile Buttons. It toggles it between open and close
	 * @memberof main
	 * @name menu-icon
	 * @event
	 */
	$('.menu-icon').click(function(event) {
		event.preventDefault();
		$(this).toggleClass('open');
		$('nav.mobile').slideToggle();
	});

	// cookies popup
	if (localStorage.getItem("ar_cookies_notice") != "accepted") {
        $('.cookies-notice').delay(1000).slideDown();
	}

	/**
	 * This is the click handler for the Cookie Acceptance. It closes the cookie popup and sets a cookies notice in the local storage
	 * @memberof main
	 * @name accept-cookies
	 * @event
	 */
	$('.accept-cookies').click(function(event) {
		event.preventDefault();
		$('.cookies-notice').slideUp();
		localStorage.setItem("ar_cookies_notice", "accepted");
	});

	//new WOW().init();
	
});

jQuery(window).on('load', function($) {

});

