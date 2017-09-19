$(function(){
    toastr.options.timeOut = 30000;
    //check if the phone field exists.
	if($( "#phone" ).length){
 
	    $("#phone").intlTelInput({
	        initialCountry: "auto",
	        utilsScript: "/js/utils.js",
	        separateDialCode: true,
	        geoIpLookup: function(callback) {
	            jQuery.post("/landing/getuserip", {valid: 1}, function(data) {
	                callback(data);
	            });
	        }
	    });

		$("#phone2").intlTelInput({
			initialCountry: "auto",
			utilsScript: "/js/utils.js",
			separateDialCode: true,
			geoIpLookup: function(callback) {
				jQuery.post("/landing/getuserip", {valid: 1}, function(data) {
					callback(data);
				});
			}
		});

        $("#phone3").intlTelInput({
            initialCountry: "auto",
            utilsScript: "/js/utils.js",
            separateDialCode: true,
            geoIpLookup: function(callback) {
                jQuery.post("/landing/getuserip", {valid: 1}, function(data) {
                    callback(data);
                });
            }
        });

        $("#phone_popup").intlTelInput({
            initialCountry: "auto",
            utilsScript: "/js/utils.js",
            separateDialCode: true,
            geoIpLookup: function(callback) {
                jQuery.post("/landing/getuserip", {valid: 1}, function(data) {
                    callback(data);
                });
            }
        });

		$('#registration_form').on('submit', function(){


			var phone = $("#phone").intlTelInput("getNumber");

			var countryCode = $("#phone").intlTelInput("getSelectedCountryData").dialCode;

			if (!$("#phone").intlTelInput("isValidNumber") || phone == ''){

				toastr.error('Please use regular numbers. Example: 555666777', 'Error!');
	        	return false;
			}

	        $("<input type='hidden' name='phone_number' value='" + phone + "' />").appendTo($(this));
	        $("<input type='hidden' name='country_code' value='" + countryCode + "' />").appendTo($(this));
		});
	 
	}

    
});