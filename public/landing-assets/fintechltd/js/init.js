document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + 'js';

$(function () {
    mainApp.init();
});

/* All the UI required functions have their own scope */
var mainApp = (function () {

    var Log = function (data) {
        $.ajaxSetup({
            headers: {
                'X-Auth-Token': config.api.auth.key
            },
            contentType: 'application/json; charset=utf-8',
            dataType: 'json'
        });
        $.post(config.endpoints.log + '/api/logs', JSON.stringify($.extend({
            brand: config.campaign
        }, data)));
    }

    var Optin = {
        save: function (data) {
            $.ajaxSetup({
                headers: {
                    'X-Auth-Token': config.api.auth.key
                },
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                async: true
            });
            $.post(config.endpoints.log + '/api/optins', JSON.stringify($.extend({
                brand: config.campaign
            }, data)));
        },
        load: function (email) {
            $.ajaxSetup({
                headers: {
                    'X-Auth-Token': config.api.auth.key
                },
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                async: false
            });

            var optin_data = {};
            $.get(config.endpoints.log + '/api/optins/transactionId', {
                    email: email,
                    brand: config.campaign
                })
                .done(function (data) {
                    optin_data = data;
                });

            return optin_data;
        }
    }

    var QueryString = function () {
        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (typeof query_string[pair[0]] === "undefined") {
                query_string[pair[0]] = decodeURIComponent(pair[1]);
            } else if (typeof query_string[pair[0]] === "string") {
                var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
                query_string[pair[0]] = arr;
            } else {
                query_string[pair[0]].push(decodeURIComponent(pair[1]));
            }
        }
        return query_string;
    }();

    function locale() {
        var caller = {
            fire: function () {
                var promise = new Promise(function (resolve, reject) {
                    $.getJSON(config.endpoints.rotator + '/locale')
                        .done(function (resp) {
                            resolve(resp);
                        })
                        .fail(function (resp) {
                            reject(resp);
                        })
                });
                return promise;
            }
        };

        return {
            init: function () {
                return "";
                // return caller.fire();
            }
        }
    }

    /* Initialisation of all the named functions, that the UI requires */
    function init() {
        scrollToSection();
        initCount();
        loadFacebookTestimonials();
        initClock();
        initLiveResults();
        initFAQ();
        playAudio();
        playVideo();
        initBannerModals();
        initHamburger();
        //initDetectCountry();
        initUrlParams();
    }

    function scrollToSection() {
        $('[data-scrollto]').on('click', function (e) {
            e.preventDefault();

            var scrolltoID = $(this).attr("data-scrollto");
            $('html, body').animate({
                scrollTop: $('#' + scrolltoID).offset().top - 55
            }, 600);
            $('.hamburger').removeClass('open');
        })
    }

    function initCount(argument) {
        $('.count').each(function () {
            var _this = this;
            var current = parseFloat($(this).data('initial'));
            var iterator = parseFloat($(this).data('iterator'));

            $(_this).text(number_format(current, 2, ',', ' '));

            setInterval(function () {
                current += iterator;
                var newValue = number_format(current, 2, ',', ' ');

                $(_this).text(newValue);
            }, 6000);
        });
    }

    function loadFacebookTestimonials() {
        var testimonialsCount = $('.social-testimonials li').length;
        if (testimonialsCount) {
            while (5 !== $('.social-testimonials li').length) {
                $('.social-testimonials li:nth-child(' + Math.ceil(Math.random() * testimonialsCount) + ')').remove();
            }
        }
    }

    function initClock() {
        if (!$('.clock').length) return;

        var clock = new FlipClock($('.clock'), {
            countdown: true,
            clockFace: 'MinuteCounter'
        });
        clock.setTime(420);
        clock.start();
    }

    function initLiveResults() {
        var minValue = 748;
        var maxValue = 4877;

        var minWeekValue = 7487;
        var maxWeekValue = 14877;

        $('.daily-profit').each(function () {
            var random = parseFloat(minValue + Math.random() * (maxValue - minValue));

            $(this).text('$' + number_format(random, 2, ',', ' '));

            var randomWeek = parseFloat(minWeekValue + Math.random() * (maxWeekValue - minWeekValue));

            $(this).data('weekly', '$' + number_format(randomWeek, 2, ',', ' '));
        });

        $('.weeks td').on('click', function () {
            $('#profit-details').removeClass('hidden');
            var person = $('h3', $(this).parent()).html();
            var personImageSrc = $('.client img', $(this).parent()).attr('src');
            var daily = $('.daily-profit', $(this)).html();
            var weekly = $('.daily-profit', $(this)).data('weekly');

            $('#profit-details h1').html(person);
            $('#profit-details .modal-daily-profit').html(daily);
            $('#profit-details .modal-weekly-profit').html(weekly);
            $('.person-img').attr('src', personImageSrc);
        })
        $('.modal-container .close').on('click', function (e) {
            e.preventDefault();
            $(this).parent().parent().addClass('hidden');
        })
    }

    function initFAQ() {
        $('.faq h2').on('click', function () {
            if ($(this).hasClass('opened')) {
                $(this).removeClass('opened')
            }
            else {
                $('.faq h2').removeClass('opened');
                $(this).addClass('opened');
            }
        });
    }

    function playAudio() {
        $('audio').each(function () {
            $(this).get(0).pause(); // Stop playing
            $(this).get(0).addEventListener('loadedmetadata', function () {
                this.currentTime = 0;
            })
        });
        $('.audio-list a').on('click', function (e) {
            e.preventDefault();
            $('audio').each(function () {
                $(this).get(0).pause(); // Stop playing
                $(this).get(0).addEventListener('loadedmetadata', function () {
                    this.currentTime = 0;
                });
            });

            if ($(this).hasClass('playing')) {
                $(this).removeClass('playing');
            }
            else {
                var audioToPlay = $('audio', $(this).parent())[0];
                audioToPlay.play();

                $('.audio-list a').removeClass('playing');
                $(this).addClass('playing');
            }
        });
    }

    function playVideo() {
        $('.video-list a').on('click', function (e) {
            e.preventDefault();
            var videoId = $(this).data('video');
            $('#video-testimonial iframe').attr('src', 'https://www.youtube.com/embed/' + videoId +
                '?modestbranding=1&controls=0&showinfo=0&rel=0&title=0&autohide=1&wmode=transparent&hd=1&autoplay=0')

            $('#video-testimonial').removeClass('hidden');
        });

        $('#video-testimonial .close').on('click', function () {
            $('#video-testimonial iframe').attr('src', '');
        })

    }

    function initBannerModals() {
        $('.banners a').on('click', function (e) {
            e.preventDefault();

            $('#banner-modal .selected-banner').html($(this).html());
            var imgSrc = $('img', $(this))[0].src;
            $('#banner-modal code').text('<img src="' + imgSrc + '" alt="Make money with FinTech" />');
            $('#banner-modal').removeClass('hidden');
        });
    }

    function initHamburger() {
        $('.hamburger').on('click', function (e) {
            $(this).toggleClass('open');
        });
    }

    function initDetectCountry() {

        locale().init()
            .then(function (response) {
                countryCode = response.country.toLowerCase();
                if (countryCode in config.countries) {
                    $('.your-country').html(config.countries[countryCode]);

                    var folder = $('.your-flag').data('folder')
                    $('.your-flag').attr('src', folder + countryCode + '.png');

                    $('.detected-country').removeClass('hidden');
                    $('.not-detected-country').addClass('hidden');
                }
                else {
                    $('.detected-country').addClass('hidden');
                    $('.not-detected-country').removeClass('hidden');
                }

                if (countryCode in config.phonecodes) {
                    if ($('input[name="code"]').length) {
                        $('input[name="code"]').val(config.phonecodes[countryCode])
                    }
                }
            })
    }

    function initUrlParams() {
        if (QueryString.fullname) {

            // var name = decodeURIComponent(QueryString.fullname.replace(/\+/g, '%20')).split(' ');
            // if (name.length < 2) {
            //     $('#first-name').val(name);
            //     $('#first-name2').val(name);
            // } else {
            //     var first = name.shift(),
            //         last = name.join(' ');
            //     $('#first-name').val(first);
            //     $('#first-name2').val(first);
            //     $('#last-name').val(last);
            //     $('#last-name2').val(last);
            // }
            $('#name').val(QueryString.fullname);
            $('#name2').val(QueryString.fullname);
        }

        if (QueryString.email) {
            $('#email').val(QueryString.email);
            $('#email2').val(QueryString.email);
        }
    }

    function initStep1() {
        if (QueryString.tid) {
            $('.transaction_id').val(QueryString.tid);
            $('.affiliate_id').val(QueryString.aff_id);
        }
        $('form').on('submit', function () {
            var name = $(this).find('[name="fullname"]').val(),
                email = $(this).find('[name="email"]').val();

            $('[name="fullname"]', this).parent().removeClass('error');
            $('[name="email"]', this).parent().removeClass('error');

            var isValid = true;
            var regex_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (name == '') {
                isValid = false;
                $('[name="fullname"]', this).parent().addClass('error');
            }

            if (email == '' || !regex_email.test(email)) {
                isValid = false;
                $('[name="email"]', this).parent().addClass('error');
            }
            if (!isValid) return false;
        });
    }

    function initLoading() {
        if (!QueryString.email || !QueryString.fullname) {
            return {};
        }

        $.post(config.endpoints.pigeon + '/step/kppx', {
            name: decodeURIComponent(QueryString.fullname.replace(/\+/g, '%20')),
            email: QueryString.email,
            brand: config.campaign
        });

        if (QueryString.tid && QueryString.tid.length) {
            return Optin.save({
                email: QueryString.email.trim(),
                name: decodeURIComponent(QueryString.fullname.replace(/\+/g, '%20')),
                transactionId: QueryString.tid,
                affiliateId: QueryString.aff_id
            });
        } else {
            var optin = Optin.load(QueryString.email);
            if (optin.success) {
                return optin;
            } else {
                return Optin.save({
                    email: QueryString.email.trim(),
                    name: decodeURIComponent(QueryString.fullname.replace(/\+/g, '%20'))
                })
            }
        }
    }

    function initStep2() {
        if (QueryString.tid) {
            var iframe = $('<iframe/>')
                .attr('id', 'conversion-frame').attr('width', 1).attr('height', 1)
                .attr('src', config.endpoints.affcrunch + QueryString.tid);
            $('body').append(iframe);
            $('#conversion-frame').on('load', function () {
                $('#conversion-frame').remove();
            });
            $('.transaction_id').val(QueryString.tid);
            $('.affiliate_id').val(QueryString.aff_id);
        }

        var localeConfig, country;

        // locale()
        //     .init()
        //     .then(function (loc) {
        //         localeConfig = loc;
        //         country = String(localeConfig.country).toLowerCase();
        //     });

        //var submitted = false;
        $('.register-bottom-section #registration_form_bottom').on('submit', function(e) {
            e.preventDefault();
            var name = $('#name2').val();
            var email = $('#email2').val();
            var phone = $('#phone2').val();
            $('#name').val(name);
            $('#email').val(email);
            $('#phone').val(phone);

            $( "#registration_form" ).trigger( "submit" );
        });
        // $('form').on('submit', function (ev) {
        //     ev.preventDefault();
        //
        //     var self = this;
        //
        //     if (submitted) {
        //         return false;
        //     }
        //     submitted = true;
        //
        //     if ($(this).closest('.form-loader-container').length > 0) {
        //         $('.form-loader').addClass('active');
        //
        //         initTextLoadingRotationStep2($('.rotatingList > li'));
        //         initTextLoadingRotationStep2($('.bottomRotatingList > li'));
        //
        //     }
        //
        //     $('.error-message').addClass('hidden');
        //
        //     var firstName = $(this).find('[name="first-name"]').val(),
        //         lastName = $(this).find('[name="last-name"]').val(),
        //         email = $(this).find('[name="email"]').val(),
        //         password = $(this).find('[name="password"]').val(),
        //         phoneCode = $(this).find('[name="code"]').val(),
        //         phoneNumber = $(this).find('[name="phone"]').val(),
        //         phone = phoneCode + '' + phoneNumber,
        //         transaction_id = $(this).find('.transaction_id').val();
        //
        //     if (phone.length <= 4) {
        //         $(self).find('.phone .error-message').html('This field is required.').removeClass('hidden');
        //
        //         $('.form-loader').removeClass('active');
        //         submitted = false;
        //
        //         Log({
        //             email: email,
        //             source: 'Landing',
        //             action: 'Validate form.',
        //             outcome: 'Form validation failed.',
        //             request: JSON.stringify($('form.cu-form').serializeArray()),
        //             level: 'notice',
        //             code: 8420
        //         });
        //         return false;
        //     }
        //
        //     var currency = (typeof country !== 'undefined' &&
        //     typeof config.currencies[country.toLowerCase()] !== 'undefined')
        //         ? config.currencies[country.toLowerCase()]
        //         : 'USD';
        //
        //     var request = JSON.stringify({
        //         email: email,
        //         password: password,
        //         passwordConfirm: password,
        //         extra: {
        //             firstName: firstName,
        //             lastName: lastName,
        //             gender: 'male',
        //             phone: phone.replace(/[^0-9+]/g, ''),
        //             phoneCode: phoneCode.replace(/[^0-9+]/g, ''),
        //             phoneNumber: phoneNumber,
        //             currency: currency,
        //             birthday: '1970-01-01',
        //             autologin: true,
        //             transactionId: transaction_id,
        //             proxy: config.proxy,
        //             brand: config.campaign
        //         }
        //     });
        //
        //     $
        //         .ajax({
        //             type: 'POST',
        //             url: config.endpoints.rotator + '/brokers/email-address/' + encodeURIComponent(email),
        //             contentType: 'application/json; charset=utf-8',
        //             dataType: 'json',
        //             data: request
        //         })
        //         .done(function (resp) {
        //
        //             if (resp.success) {
        //                 if (resp.forward) {
        //                     Log({
        //                         email: email,
        //                         source: 'Landing',
        //                         action: 'Proxy user',
        //                         outcome: 'Server sent deposit link',
        //                         request: request,
        //                         response: JSON.stringify(resp),
        //                         level: 'info',
        //                         code: 8427
        //                     });
        //
        //                     window.location.href = resp.forward;
        //                 } else if (resp.token) {
        //                     window.location.href =
        //                         config.endpoints.app + '/#/user/autologin/' + encodeURIComponent(resp.token);
        //                 } else {
        //                     Log({
        //                         email: email,
        //                         source: 'Landing',
        //                         action: 'Register user',
        //                         outcome: 'No deposit URL or autologin token found. Contact tech support ASAP.',
        //                         request: request,
        //                         response: JSON.stringify(resp),
        //                         level: 'emergency',
        //                         code: 8428
        //                     });
        //
        //                     $('.form-loader').removeClass('active');
        //                     $('#single-error').removeClass('hidden').find('p')
        //                         .html('System temporary unavailable. Please, try again later or contact support.');
        //                 }
        //             } else if (!resp.success) {
        //                 $('.form-loader').removeClass('active');
        //
        //                 if (typeof resp.broker !== 'undefined' && resp.broker.length
        //                     && typeof resp.homepage !== 'undefined' && resp.homepage.length) {
        //
        //                     window.location = 'account.html?broker=' + resp.broker + '&url=' + resp.homepage;
        //                 }
        //
        //                 if (resp.link) {
        //                     Log({
        //                         email: email,
        //                         source: 'Landing',
        //                         action: 'Register user',
        //                         outcome: 'Server sent redirect link',
        //                         request: request,
        //                         response: JSON.stringify(resp),
        //                         level: 'info',
        //                         code: 8421
        //                     });
        //                     window.location.href = resp.link;
        //                 } else if (resp.error) {
        //                     $('#single-error').removeClass('hidden').find('p').html(resp.error);
        //
        //                     Log({
        //                         email: email,
        //                         source: 'Landing',
        //                         action: 'Register user.',
        //                         outcome: resp.error,
        //                         request: request,
        //                         response: JSON.stringify(resp),
        //                         level: 'notice',
        //                         code: 8422
        //                     });
        //                 } else if (resp.errors) {
        //                     resp.errors.forEach(function (err) {
        //                         var param = (-1 !== err.param.indexOf('.') ? err.param.split('.')[1] : err.param),
        //                             inputName = param.replace(/([A-Z])/g, function (g) {
        //                                 return '-' + g.toLowerCase();
        //                             });
        //
        //                         $(self).find('input[name="' + inputName + '"]')
        //                             .parent()
        //                             .find('span.error-message')
        //                             .html(err.msg)
        //                             .removeClass('hidden');
        //                     });
        //
        //                     Log({
        //                         email: email,
        //                         source: 'Landing',
        //                         action: 'Register user.',
        //                         outcome: JSON.stringify(resp.errors),
        //                         request: request,
        //                         response: JSON.stringify(resp),
        //                         level: 'notice',
        //                         code: 8423
        //                     });
        //                 } else {
        //                     $('#single-error').removeClass('hidden').find('p')
        //                         .html('Service temporary unavailable. Please, try again later.');
        //
        //                     Log({
        //                         email: email,
        //                         source: 'Landing',
        //                         action: 'Register user.',
        //                         outcome: 'Unable to register user for reason unknown.',
        //                         request: request,
        //                         response: JSON.stringify(resp),
        //                         level: 'warning',
        //                         code: 8424
        //                     });
        //                 }
        //                 return false;
        //             }
        //         })
        //         .fail(function (resp) {
        //             $('.form-loader').removeClass('active');
        //             $('#single-error').removeClass('hidden').find('p')
        //                 .html('Service temporary unavailable. Please, try again later or contact support.');
        //
        //             Log({
        //                 email: email,
        //                 source: 'Landing',
        //                 action: 'Register user.',
        //                 outcome: 'Uknown server error.',
        //                 request: request,
        //                 response: JSON.stringify(resp),
        //                 level: 'alert',
        //                 code: 8425
        //             });
        //         })
        //         .always(function () {
        //             submitted = false;
        //         });
        // });
    }

    function initJV() {
        $('form').on('submit', function (e) {
            e.preventDefault();
            $(this).find('.error-message').addClass('hidden');

            var name = $(this).find('[name="fullname"]').val(),
                email = $(this).find('[name="email"]').val();

            $('[name="fullname"]', this).parent().removeClass('error');
            $('[name="email"]', this).parent().removeClass('error');

            var isValid = true;
            var regex_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (name == '') {
                isValid = false;
                $('[name="fullname"]', this).parent().addClass('error');
            }

            if (email == '' || !regex_email.test(email)) {
                isValid = false;
                $('[name="email"]', this).parent().addClass('error');
            }

            if (!isValid) return false;

            $.post(config.endpoints.pigeon + '/step/5u42', {
                name: name,
                email: email,
                brand: config.campaign
            });

            $('#notification').removeClass('hidden');
        });
    }

    function initUnload() {
        if (QueryString.exit && 0 == QueryString.exit) {
            return;
        }
        window.onbeforeunload = function (e) {
            var message = '##############################\r\n' +
                '\r\n' +
                'W A I T  B E F O R E  Y O U  G O !\r\n' +
                '\r\n' +
                'CLICK STAY ON THIS PAGE\r\n' +
                'TO SEE WHAT I HAVE FOR YOU.\r\n' +
                '\r\n' +
                'YOU DONT WANT TO MISS THIS!\r\n' +
                '\r\n' +
                '##############################\r\n';
            e = e || window.event;
            e.returnValue = message;
            return message;
        }

        $('a, input[type="submit"], button').on('click', function () {
            window.onbeforeunload = null;
        });
    }

    function initTextLoadingRotationStep2(selector) {

        var timer = 6000;
        var i = 0;
        var max = selector.length;
        var interval = null;
        selector.find('p:nth-of-type(2)').addClass('hiddenInner');
        selector.removeClass('activeNode');
        selector.eq(i).addClass('activeNode');
        setTimeout(function () {
            selector.eq(i).find('p:nth-of-type(2)').removeClass('hiddenInner');
        }, 4000);

        interval = setInterval(function () {
            selector.removeClass('activeNode');

            if (i < max) {
                i = i + 1;
            }

            selector.eq(i).addClass('activeNode');
            if (i == max - 1) {
                if (selector.eq(i).hasClass('activeNode')) {
                    setTimeout(function () {
                        selector.eq(i).find('p.hiddenInner').removeClass('hiddenInner');
                    }, 4000)
                }
                clearInterval(interval);
            }

            if (selector.eq(i).hasClass('activeNode')) {
                setTimeout(function () {
                    selector.eq(i).find('p:nth-of-type(2)').removeClass('hiddenInner');
                }, 4000)
            }

        }, timer);
    }

    return {
        init: init,
        step1: initStep1,
        loading: initLoading,
        step2: initStep2,
        unload: initUnload,
        jv: initJV
    };
}());
