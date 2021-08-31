	
jQuery(document).ready(function ($) { // wait until the document is ready
	$('#attachment').click(function(){ // when the button is clicked the code executes
		$('.error').fadeOut('slow'); // reset the error messages (hides them)

		var error = false; // we will set this true if the form isn't valid

		var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
		var email = $('input#cv_mail').val(); // get the value of the input field
		if (email == "" || email == " ") { // check if the field is empty
			$('#err-email_cv').fadeIn('slow'); // error - empty
			error = true;
		}else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable
			$('#err-emailvld_cv').fadeIn('slow'); // error - not right format
			error = true;
		}
		
		if(error == true) {
			$('#err-form_cv').slideDown('slow');
			return false;
		}

		var data_string = $('#attachment_form').serialize(); // Collect data from form

		$.ajax({
			type: "POST",
			url: $('#attachment_form').attr('action'),
			data: data_string,
			timeout: 6000,
			error: function(request,error) {
				if (error == "timeout") {
					$('#err-timedout_cv').slideDown('slow');
				}
				else {
					$('#err-state_cv').slideDown('slow');
					$("#err-state_cv").html('An error occurred: ' + error + '');
				}
			},
			success: function() {
				$('#attachment_form').slideUp('slow');
				$('#cv_send').slideDown('slow');
			}
		});

		return false; // stops user browser being directed to the php file
	}); // end click function
});
