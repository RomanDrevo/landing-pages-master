@extends('layouts.main')


@section('extra_styles')
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700|Open+Sans:400,400italic,700,700italic&amp;subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link href="/landing-assets/30daychange/commodities/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/landing-assets/30daychange/commodities/css/jquery.fancybox.css" media="screen"/>

    <style>
        span.sms {
            display: block;
            margin-bottom: 8px;
            font-size: 17px;
            background-color: blanchedalmond;
            width: 170px;
            margin-top: 8px;
        }

        @media (max-width: 767px) {

            span.sms_mobile {
                display: block;
                margin-bottom: 8px;
                font-size: 17px;
                background-color: blanchedalmond;
                width: 170px;
                margin-top: 8px;
            }
        }

        button.upup_button {
            width: 100%;
            padding: 16px;
            background-color: #288bd7;
            border: 0 none;
            font-family: 'BenchNine', sans-serif, serif;
            font-size: 32px;
            font-weight: bold;
            color: #fff;
        }

        select#country {
            display: block;
            margin-bottom: 10px;
        }

        .intl-tel-input {
            width: 22%;
            position: relative;
            display: inline-block;
        }

        /*input#phone {*/
            /*width: 77%;*/
            /*display: inline-block;*/
        /*}*/

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=tel] {
            padding-left: 82px;
        }

        .iti-flag.il {
            display: none;
        }

        .intl-tel-input.separate-dial-code .selected-dial-code {
            display: table-cell;
            vertical-align: middle;
            padding-left: 14px;
        }

        .iti-arrow {
            display: none;
        }

        @media (max-width: 767px) {
            /*#phone {*/
                /*width: 76% !important;*/
                /*margin-left: 2px;*/
            /*}*/
        }
    </style>
@endsection

@section("content")

    <div class="global-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 logo">
                    <img src="/landing-assets/30daychange/commodities/images/logo.png" alt="besttradingoffers">
                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <h1 class="header-lg-2 text-center text-uppercase">
            HOW DID <strong class="text-underline">167 AVERAGE PEOPLE</strong> WENT FROM A MONTHLY SALARY OF $3,200 TO
            MAKING <strong class="text-underline">$46,572.79 IN LESS THAN A MONTH</strong>?
        </h1>

    </div>

    <div class="ticker ticker1 hidden-xs hidden-sm">
        <div class="header text-uppercase">
            Real-time<br>
            Profits
        </div>
    </div>

    <div class="container" id="main-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="main-block">
                    <div class="videoWrapper">
                        <iframe id="mainVideo" width="100%" height="658"
                                src="https://www.youtube.com/embed/nHc9oQSNba4?modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1&amp;autoplay=1"
                                frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="block-padding">
                        <div class="row">
                            <div class="col-sm-6 col-lg-5 col-lg-offset-1">
                                <h2 class="header-md-2 text-uppercase text-center">REGISTER AND PROFIT WITH MY SYSTEM<br>
                                    <span class="hl-red-1 text-underline">ABSOLUTELY FREE</span> - START RIGHT AWAY!</h2>
                                <div class="dotted-border"></div>
                                <p class="text-center">No Credit Card or PayPal Needed <strong>This is 100% FREE!</strong>
                                </p>
                                <img src="/landing-assets/30daychange/img/no_cc.png" class="img-responsive center-block">
                                <ul class="steps">
                                    <li class="one"><p>Fill in your <strong>valid contact</strong> details and private
                                            password</p></li>
                                    <li class="two"><p class="bottom-padding-md"><strong>Open and fund</strong> your account
                                            with the recommended broker so we can connect you to the sophisticated software
                                            of 30DayChange.</p></li>
                                    <li class="three"><p>After you've opened an account you will be directed to the
                                            30DayChange software and you can <strong>start making profits</strong> just like
                                            I do.</p></li>
                                </ul>


                            </div>

                            <div id="upup" class="col-sm-6 col-lg-5">
                                <div class="subscribe-form">

                                    <form method="POST" id="registration_form">
                                        {{ csrf_field() }}
                                        {{--<input type="hidden" name="source_id" id="source_id" value="{{$source->id}}">--}}
                                        <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                        <div class="input">
                                            {{--<input name="first_name" id="first_name" type="text" placeholder="first name">--}}
                                            <input type="text" name="name" id="name" placeholder="your name">
                                        </div>
                                        <div class="input">
                                            <input type="text" name="email" id="email" placeholder="your email">
                                        </div>
                                        <div class="input">
                                            <span class="sms"> *For SMS Verification</span>
                                            <input type="text" name="phone" id="phone" placeholder="your phone" style=" width: 372%;
    padding: 18px;
    background-color: #eee;
    border: 0 none;
    font-family: 'BenchNine', sans-serif, serif;
    font-size: 24px;
    color: #222;
    margin-left: 79px;">
                                        </div>

                                        <div class="input">
                                            <input type="submit" value="Start Now!" name="submit" id="submit" class="text-uppercase">
                                        </div>
                                        <p id="myerrors"
                                           style="color:red; clear: both;  text-align: center; padding-top: 8px;font-size: 15px;"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="badges text-center">
            <img src="/landing-assets/30daychange/img/badges.png" class="img-responsive center-block">
        </div>
        <h2 class="header-md-1 text-center text-uppercase">Check Out How Our New <strong>30 Day Change Members</strong> Have
            Been Doing</h2>
        <div id="results" class="results-block" data-ride="carousel">
            <a href="#results" data-slide="prev" class="results-prev visible-sm visible-lg"></a>
            <a href="#results" data-slide="next" class="results-next visible-sm visible-lg"></a>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="results-item">
                        <div class="photo"><a class="fancybox vid fancybox.iframe"
                                              href="#"><img
                                        src="/landing-assets/30daychange/img/jack.jpg"></a></div>
                        <div class="info">
                            Name: Jack Powell<br>
                            Location: Manchester, UK<br>
                            Member Since: November 3rd<br>
                            Profit to date: $87,934.78
                            <img src="/landing-assets/30daychange/img/uk.png">
                        </div>
                        <div class="click"><a class="fancybox vid fancybox.iframe"
                                              href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="results-item">
                        <div class="photo"><a class="fancybox img" href=""><img src="/landing-assets/30daychange/img/lauren.jpg"></a></div>
                        <div class="info">
                            Name: Lauren Bragard<br>
                            Location: Marcie, FR<br>
                            Member Since: November 10th<br>
                            Profit to date: €12,341.98
                            <img src="/landing-assets/30daychange/img/fr.png">
                        </div>
                        <div class="click"><a class="fancybox img" href=""><img src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="results-item">
                        <div class="photo"><a class="fancybox img" href="/landing-assets/30daychange/img/alberto_proof.png"><img src="/landing-assets/30daychange/img/alberto.jpg"></a>
                        </div>
                        <div class="info">
                            Name: Alberto Pascual<br>
                            Location: Barcelona, ES<br>
                            Member Since: November 12th<br>
                            Profit to date: €45,293.97
                            <img src="/landing-assets/30daychange/img/es.png">
                        </div>
                        <div class="click"><a class="fancybox img" href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="results-item">
                        <div class="photo"><a class="fancybox img" href="#"><img src="/landing-assets/30daychange/img/michael.jpg"></a>
                        </div>
                        <div class="info">
                            Name: Michael Madell<br>
                            Location: Johannesburg, ZA<br>
                            Member Since: November 5th<br>
                            Profit to date: $107,129.33
                            <img src="/landing-assets/30daychange/img/za.png">
                        </div>
                        <div class="click"><a class="fancybox img" href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="item">
                    <div class="results-item">
                        <div class="photo"><a class="fancybox img" href="#"><img
                                        src="/landing-assets/30daychange/img/lauren.jpg"></a></div>
                        <div class="info">
                            Name: Lauren Bragard<br>
                            Location: Marcie, FR<br>
                            Member Since: November 10th<br>
                            Profit to date: €12,341.98
                            <img src="/landing-assets/30daychange/img/fr.png">
                        </div>
                        <div class="click"><a class="fancybox img" href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="results-item">
                        <div class="photo"><a class="fancybox vid fancybox.iframe"
                                              href="#"><img
                                        src="/landing-assets/30daychange/img/malinda.jpg"></a></div>
                        <div class="info">
                            Name: Malinda Iser<br>
                            Location: Boston, USA<br>
                            Member Since: October 15th<br>
                            Profit to date: $274,101.45
                            <img src="/landing-assets/30daychange/img/us.png">
                        </div>
                        <div class="click"><a class="fancybox vid fancybox.iframe"
                                              href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="results-item">
                        <div class="photo"><a class="fancybox img" href="#"><img src="/landing-assets/30daychange/img/michael.jpg"></a>
                        </div>
                        <div class="info">
                            Name: Michael Madell<br>
                            Location: Johannesburg, ZA<br>
                            Member Since: November 5th<br>
                            Profit to date: $107,129.33
                            <img src="/landing-assets/30daychange/img/za.png">
                        </div>
                        <div class="click"><a class="fancybox img" href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="results-item">
                        <div class="photo"><a class="fancybox vid fancybox.iframe"
                                              href="#"><img
                                        src="/landing-assets/30daychange/img/james.jpg"></a></div>
                        <div class="info">
                            Name: James River<br>
                            Location: New Orleans, USA<br>
                            Member Since: October 20th<br>
                            Profit to date: $154,478.19
                            <img src="/landing-assets/30daychange/img/us.png">
                        </div>
                        <div class="click"><a class="fancybox vid fancybox.iframe"
                                              href="#"><img
                                        src="/landing-assets/30daychange/img/click_proof.png"></a></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <h1 class="header-lg-1 text-center text-uppercase">WHY IS THIS <span class="hl-blue-1">YOUR SAFEST CHOICE?</span>
        </h1>

        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                <div class="main-block">
                    <div class="block-padding">
                        <div class="row">
                            <div class="col-sm-4 col-md-3"><img src="/landing-assets/30daychange/img/stamp.png" class="img-responsive center-block">
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <h3 class="header-sm-1 text-uppercase">YOU WILL MAKE HUGE PROFITS <span class="hl-red-1">AT NO RISK</span>!
                                </h3>
                                <ul class="star">
                                    <li>It's totally free and will make you profits of over $8,467 A DAY</li>
                                    <li>You'll keep 100% of the profits you make (no strings attached)</li>
                                    <li>Lifetime license (all updates included)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="/landing-assets/30daychange/img/no_experience.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="ticker ticker2 hiddex-xs hidden-sm">
        <div class="header text-uppercase">
            Real-time<br>
            Profits
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                <div class="main-block">
                    <div class="block-padding">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="frame-small-red text-uppercase text-center">
                                    <img src="/landing-assets/30daychange/img/alert_small_red.png"> THIS OFFER IS LIMITED TO THE FIRST 100 MEMBERS
                                </div>
                                <h3 class="header-sm-1 text-uppercase text-center">Save your spot today by registering
                                    now!</h3>
                                <div class="dotted-border"></div>

                            </div>
                            <div class="col-sm-6">
                                <div class="subscribe-form ">
                                    <p class="text-center">No Credit Card or PayPal Needed <strong>This is 100%
                                            FREE!</strong></p>
                                    <img src="/landing-assets/30daychange/img/no_cc.png" class="img-responsive center-block">
                                    <div class="upup"><a href="#upup">
                                            <button class="upup_button">START NOW!</button>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="badges text-center">
            <img src="/landing-assets/30daychange/img/badges_gray.png" class="img-responsive center-block">
        </div>
    </div>
    <div class="global-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-4 logo">
                    <img src="/landing-assets/30daychange/commodities/images/logo.png" class="img-responsive">
                </div>

            </div>
        </div>
    </div>

@endsection

@section('extra_scripts')
    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif


    <script src="/landing-assets/30daychange/js/utils.js"></script>


    <script type="text/javascript" src="/landing-assets/30daychange/commodities/js/jquery.fancybox.js?v=2.1.5"></script>
    <script>
        $(function(){
            $("#submit").on("click", function(){
                $("#mainVideo").attr("src", "https://www.youtube.com/embed/nHc9oQSNba4?modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1&amp;autoplay=0");
            });
        });
    </script>


@endsection

