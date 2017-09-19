@extends('layouts.main')


@section('extra_styles')

    <link href="/landing-assets/fin_lib2/css/style-one.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        input#prefix {
            margin-bottom: 19px;
        }

        .sms {
            margin-top: -118px;
            margin-left: 62px;
            width: 150px;
            position: absolute;
        }

        .sms_mobile {
            display: none;
        }

        input#phone, input#password, input#prefix {
            margin-top: 16px
        }

        .checkboxes {
            margin-top: -34px;
        }

        @media (max-width: 480px) {
            .checkboxes {
                margin-top: 0px;
            }

            .sms {
                display: none;
            }

            .sms_mobile {
                display: block;
                margin-bottom: 73px;
                margin-top: -173px;
                padding-bottom: 61px;
            }

            select#country {
                margin-bottom: 18px;
            }

            .form-sec ul li input#phone {
                margin-top: 6px
            }

            .form-sec ul li input#prefix {
                margin-top: 6px;
                margin-bottom: -11px;
            }

            input#password {
                margin-top: 0px
            }
        }

        .popup {
            position: absolute;
            margin-top: -15px;
            background: #484848;
        }

        .popup h2 {
            color: white
        }

        @media screen and (max-width: 767px) {
            .popup {
                width: 80%;
            }
        }
        .iti-arrow {
            display: none;
        }
        .iti-flag.il {
            display: none;
        }
        .intl-tel-input.separate-dial-code .selected-dial-code {
            display: table-cell;
            vertical-align: middle;
            padding-left: 14px;
        }
        .checkboxes {
            margin-top: 0;
        }
        input#phone, input#password, input#prefix {
            margin-top: 0;
        }
        .intl-tel-input {
            width: 30%;
            position: relative;
            display: inline-block;
        }
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 .selected-flag {
            width: 96px;
        }
        @media (max-width: 480px){
            .form-sec ul li input#phone {
                margin-top: 0;
                width: 70%;
            }
        }
    </style>
@endsection

@section("content")

    <div align="center" id="main-content">
        <div align="center" class="style1">
            <p><span class="style10">Please watch video for instructions</span></p>
            <div class="volume-up"><img src="/landing-assets/fin_lib2/images/vol00.png" width="667" height="50"/></div>
        </div>
        <div align="center">
            <div class="boaz-video">
                <video autoplay controls="controls">
                    <source src="/landing-assets/fin_lib2/video/freemoneynopromo.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="timer"><span class="hits-zero">Your FMS Spot Expires When The Clock Hits Zero!</span>
                <p>If you don't complete your sign up within the next 10 minutes, your chance at being a millionaire in 90
                    days will expire.</p>
                <div class="countdown">
                    <ul class="spin-timing">
                        <li><span class="hours"><span class="ce-minutes"></span></span>
                            <p class="time-hours">Minutes</p>
                        </li>
                        <li><span class="hours"> <span class="ce-seconds"></span></span>
                            <p class="time-hours">Seconds</p>
                        </li>
                        <li><span class="hours"> <span class="ce-mseconds"></span> </span>
                            <p class="time-hours">mseconds</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="create-new-account">
                <div class="account-create">
                    <div class="account-form-create"><img src="/landing-assets/fin_lib2/images/friendchatcity.png" alt=""/></div>
                    <div class="account-form">
                        <h2><img src="/landing-assets/fin_lib2/images/info.png" alt=""/> Contact Information</h2>
                        <div class="form-sec">
                            <form method="POST" id="registration_form">
                                {{ csrf_field() }}
                                <ul>
                                    <li>
                                        <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                        <input type="text" name="name" id="name" class="form_input"
                                               placeholder="Name">
                                    </li>
                                    <li>
                                        <input type="text" name="email" id="email" class="form_input" placeholder="Email">
                                    </li>
                                    <li>
                                        <input type="text" name="phone" id="phone" class="form_input" placeholder="Phone">
                                    </li>
                                    <li>

                                        <fieldset class="checkboxes">

                                            <label class="label_check" for="checkbox-02">

                                                <input name="sample-checkbox-02" id="checkbox-02" value="2" type="checkbox"
                                                       checked/>
                                                I Agree To The Terms & Conditions</label>
                                        </fieldset>

                                    </li>
                                    <li class="full-width">
                                        <input type="submit" id="submit" value="Submit" class="submit">
                                    </li>
                                </ul>
                                <ul>

                                    <p id="myerrors"
                                       style="color:red; clear: both;  text-align: center; padding-top: 8px;"></p>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout"><img src="/landing-assets/fin_lib2/images/checkout.png" alt=""/></div>
            <div class="table-layout"><img src="/landing-assets/fin_lib2/images//Untitled-4444443.jpg" width="787" height="725"/></div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup"><a class="close" href="#">×</a>
                <div class="content"></div>
            </div>
        </div>
        <!-- Start of ExitSplash.com Code -->
        <div id="ExitBackDiv"
             style="display: none; position: absolute; left: 0px; top: 0px; overflow: auto; height: 100%; width: 100%; background: #000000; opacity: 0.6; filter: alpha(opacity=60); z-index: 999;"></div>
        <div id="imgdiv" style="display: none;z-index:1000;position: absolute; left: 0px; top: 0px; overflow: auto;"><img
                    id="ExitImage" src="/landing-assets/fin_lib2/images/MS_5.jpg" border="0"></div>
        <!-- End of ExitSplash.com Code -->
        <footer>
            <p style="text-align: center;"><span class="disclaimer">Risk disclaimer:</span> finanviallibertysystem.com makes
                no representations regarding the legality of access to or use of this website or its content in any
                jurisdiction. Not all services offered through this website are permitted for use in all countries.
                Investing in financial instruments involves a high degree of risk and may not be suitable for all investors.
                Neither finanviallibertysystem.com nor its officials are responsible for any losses related to use of its
                services or software. If necessary, seek independent advice prior to accessing this website. Users must be
                aware of their individual tax liability in their country of residence.</p>
        </footer>
    </div>

@endsection

@section('extra_scripts')
    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif


    <script src="/landing-assets/fin_lib2/js/jquery.counteverest.min.js"></script>

    <script src="/landing-assets/fin_lib2/js/utils.js"></script>

    <script type="text/javascript">


        $(document).ready(function () {
            var currentDate = new Date();

            $('.countdown').countEverest({
                day: currentDate.getDate(),
                month: currentDate.getMonth() + 1,  //this is necessary because of the JavaScript standard. 0 = January and 11 = December.
                year: currentDate.getFullYear(),
                hour: currentDate.getHours(),
                minute: currentDate.getMinutes(),
                second: currentDate.getSeconds() + 600,
                onComplete: function () {
                    $('#message').text('Complete').addClass('complete');

                    //you can use a redirect too
                    //window.location.replace('http://anacoda.de');
                }
            });
        });

    </script>
    <script>
        var d = document;
        var safari = (navigator.userAgent.toLowerCase().indexOf('safari') != -1) ? true : false;
        var gebtn = function (parEl, child) {
            return parEl.getElementsByTagName(child);
        };
        onload = function () {

            var body = gebtn(d, 'body')[0];
            body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';

            if (!d.getElementById || !d.createTextNode) return;
            var ls = gebtn(d, 'label');
            for (var i = 0; i < ls.length; i++) {
                var l = ls[i];
                if (l.className.indexOf('label_') == -1) continue;
                var inp = gebtn(l, 'input')[0];
                if (l.className == 'label_check') {
                    l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
                    l.onclick = check_it;
                }
                ;
                if (l.className == 'label_radio') {
                    l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
                    l.onclick = turn_radio;
                }
                ;
            }
            ;
        };
        var check_it = function () {
            var inp = gebtn(this, 'input')[0];
            if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
                this.className = 'label_check c_on';
                if (safari) inp.click();
            } else {
                this.className = 'label_check c_off';
                if (safari) inp.click();
            }
            ;
        };
        var turn_radio = function () {
            var inp = gebtn(this, 'input')[0];
            if (this.className == 'label_radio r_off' || inp.checked) {
                var ls = gebtn(this.parentNode, 'label');
                for (var i = 0; i < ls.length; i++) {
                    var l = ls[i];
                    if (l.className.indexOf('label_radio') == -1)  continue;
                    l.className = 'label_radio r_off';
                }
                ;
                this.className = 'label_radio r_on';
                if (safari) inp.click();
            } else {
                this.className = 'label_radio r_off';
                if (safari) inp.click();
            }
            ;
        };
    </script>



@endsection

