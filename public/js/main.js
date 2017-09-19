(function() {
    window.countryCode = "GB"
    $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        var countryCode = (resp && resp.country) ? resp.country : "UK";
        window.countryCode = countryCode;
    });
})();



$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $('#registration_form').on('submit', function (e) {

        e.preventDefault();




        var button = $(this).find("input[type='submit']");

        var field = $(this).find("input");

        button.prop("disabled", true);
        var email = $("#email").val(),
            name = $("#name").val(),
            phone = $('.selected-dial-code').text() + $("#phone").val(),
            source_id = $("#source_id").val(),
            source_token = $("#source_token").val();

        $.ajax({
            type: "POST",
            url: "/landing/tracking",
            dataType: 'json',
            data: {
                email: email,
                name: name,
                phone: phone,
                source_id: source_id,
                source_token: source_token
            },
            complete: function (jqxhr) {
                var respLead = jqxhr.responseJSON;
                $.ajax({
                    type: "POST",
                    url: '/landing/' + source_token,
                    dataType: 'json',
                    data: {
                        email: email,
                        name: name,
                        phone: phone,
                        offer_id: getUrlParameter('offer_id'),
                        affiliate_id: getUrlParameter('affiliate_id'),
                        transaction_id: getUrlParameter('transaction_id'),
                        country_code: countryCode
                    },
                    complete: function (xqxhr) {
                        var respUser = xqxhr.responseJSON;
                        var errors = arrayUnique([].concat(respUser.errors || [], respLead.errors || []));
                        if(errors.length) {
                            button.prop("disabled", true);
                            field.focusin(function () {
                                button.prop("disabled", false);
                            });
                            for (var i = 0; i < errors.length; i++) {
                                toastr.error(errors[i], 'Error!');
                            }
                            return false;
                        }
                        //redirect url in response
                        if (typeof respUser.redirect !== 'undefined') {
                            // var redirectUrl = decodeURI(respUser.redirect);
                            $('#main-content').prepend('<iframe id="broker_iframe" src=""></iframe> ');

                            $("#broker_iframe").attr("src", respUser.redirect);

                            setTimeout(function () {
                                $('#main-content, #broker_iframe').addClass("active");
                            }, 1000);
                        }

                        button.prop("disabled", false);
                    }
                });
            }
        });
    });


    function arrayUnique(array) {
        var a = [];
        for (var i = 0, l = array.length; i < l; i++)
            if (a.indexOf(array[i]) === -1)
                a.push(array[i]);
        return a;
    }


    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };


});
