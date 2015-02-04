var Main = (function() {
	'use strict';
	// Controller provides control to different actions we want to do on our screen
	var controller = {		
		language_switch: function(data) {
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: data.url,
				success: function() {
					view.language_switch();
				}
			});
		}
    };
    // Views contain reference to all the UI elements we need to play with
	var view = { 
		language_switch: function() {
			location.reload();
		}
	};
	//model contains data we need for or screen
	/*var model = {

		
	};*/
	
    // Bind events to objects in view
	function bind_events() {	
		$('#anchors').on('click', 'a', function(event) {
			var data = {
				url: $(this).attr('href')
			}
			controller.language_switch(data);
			event.preventDefault();
		});
    }
 
	return {
		// Methods accessible outside  
		initialize: function() {
			bind_events();
		}
    };
})();

$(document).ready(function() {
	Main.initialize();
});
