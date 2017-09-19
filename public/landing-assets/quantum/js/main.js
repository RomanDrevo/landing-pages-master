/*validation*/
$(function(){

    $('.validate').each(function () {
        $(this).validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                FirstName: {
                    required: true,
                    username: true
                },
                LastName: {
                    required: true,
                    username: true
                },
                password: {
                    required: true,
                    maxlength: 12
                },
                fullname: {
                    required: true,
                    username: true
                },
                affId: {
                    required: true
                },
                name:{
                    required: true,
                    username: true
                },
                success: function () {
                    //window.onbeforeunload = null;
                }
            }
        });
    });

});