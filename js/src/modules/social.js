/*
* This Module provides the popup window functionality for social shares links.
* The class `.js-social-share` is used.
*/
(function($){
	'use strict';

	var socialShare = {

		selector: '.js-social-share',

		init: function() {

			$(socialShare.selector).click(function(event){

				event.preventDefault();

				var href = $(event.target).attr('href'),
					left = (screen.width/2)-(550/2),
					top = (screen.height/2)-(300/2);

				window.open(href, 'Share', "height=300,width=550,resizable=1, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no,top="+top+", left="+left);

			});

		} // init

	};

	$(document).on('ready', socialShare.init);

	return socialShare;

})(jQuery);
