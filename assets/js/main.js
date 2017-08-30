var modalBackdrop = false;

// Smooth scroll
$(document).ready(function(){
	// Add smooth scrolling to all links
	$("a").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Close mobile header menu when item is selected
			if ($("#mobile-nav-menu").is(":visible")) {
				ToggleMenu();
			}
			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		}
	});

	$('#nav-icon1').on('click', function(){
		ToggleMenu();
	});

	// $("body").on('click', function(event) {
	// 	if ($("#mobile-nav-menu").is(":visible")) {
	// 	    if ($(event.target).closest('#mobile-nav').length === 0) {
	// 	    	ToggleMenu();
	// 		}
	//     }
	// });

	$("#opaque-modal").on('click', function(event) {
		if ($("#mobile-nav-menu").is(":visible")) {
		    if ($(event.target).closest('#mobile-nav').length === 0) {
		    	ToggleMenu();
			}
	    } else if ($("#email-modal").is(":visible")) {
	    	ToggleEmailModal();
	    }
	});

	function ToggleMenu() {
		$("body").toggleClass('stop-scrolling');
		$("#nav-icon1").toggleClass('open');
		ToggleOpaqueModal(false);
		$("#mobile-nav-menu").slideToggle("fast");
	}







	FillBar(25, 100, "bar-fill");

	function FillBar(i, input, id) {
		var equation = (i / input) * 100;
		id = "#"+id;
		$(id).css('width', equation + '%');
		// $('#results').empty().append(equation + '%');;
	}




});





// For ajax
// Depricated
function SendEmail() {
	var name = document.getElementsByName("contact-name")[0].value;
	var email = document.getElementsByName("contact-email")[0].value;
	var message = document.getElementsByName("contact-message")[0].value;
	name = encodeURIComponent(name);
	email = encodeURIComponent(email);
	message = encodeURIComponent(message);

	var ajax = new XMLHttpRequest();
	ajax.open("POST", "/assets/php/contact-email.php", true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send("name="+name+"&email="+email+"&message="+message);

	ajax.onreadystatechange = function(event) {
		if (ajax.readyState == 4 && ajax.status == 200) {
			// AJAX Completed Successfully
			// alert("AJAX Completed Successfully");
			alert(event.status);
		} else {
			// alert("Failed to send your message");
			alert(event.status);
		}
	}
}

function ToggleOpaqueModal(coverHeader) {
	// $("#opaque-modal").toggle();
	$("#opaque-modal").fadeToggle("fast");
	if (coverHeader) {
		$("#opaque-modal").css("z-index", "3");
	} else {
		$("#opaque-modal").css("z-index", "1");
	}
}

function ToggleEmailModal() {
	$("body").toggleClass('stop-scrolling');
	ToggleOpaqueModal(true);
	$("#email-modal").slideToggle("slow");
}
