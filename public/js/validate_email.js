$(function () {

    var button = $(this).find("input[type='submit']");

    console.log(button);

    //check if the email field exists.
    if ($("#email").length) {

        // $('#name').change(function () {
        //     button.prop("disabled", false);
        // });

        var validEmail = false;
        var toatrShowed = false;

        // $("#email").on('focusin', function(){
        //        $("#errors_container").hide();
        //    });

        $("#email").on('focusout', function () {
            if ($(this).val() == "")
                return false;


            $.ajax({
                type: "POST",
                url: "/landing/verifyemail",
                data: {email: $(this).val()}
            }).done(function (data) {
                if (data == "ok") {
                    validEmail = true;
                    if (toatrShowed)
                        toastr.success('Your email is now valid.', 'Success!');
                    button.prop("disabled", false);
                } else {
                    toatrShowed = true;
                    toastr.error('Your email is not valid.', 'Error!');
                    button.prop("disabled", true);

                }
            });
        });

        // $('#registration_form').on('submit', function () {
        //
        //     if (!validEmail) {
        //         toastr.error('Your email is not valid.', 'Error!');
        //         return false;
        //     }
        // });

    }

});