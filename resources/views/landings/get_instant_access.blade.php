@extends('layouts.main')


@section('extra_styles')

    <meta name="generator" content="Webflow">

    <link rel="stylesheet" type="text/css" href="/landing-assets/get_instant_access/css/normalize.css">

    <link rel="stylesheet" type="text/css" href="/landing-assets/get_instant_access/css/webflow.css">

    <link rel="stylesheet" type="text/css" href="/landing-assets/get_instant_access/css/gpstrader.webflow.css">

    <!-- Latest compiled and minified CSS -->

    <script type="text/javascript" src="/landing-assets/get_instant_access/js/modernizr.js"></script>

    <link rel="shortcut icon" type="/landing-assets/get_instant_access/image/x-icon" href="/landing-assets/get_instant_access/images/32.png">

    <link rel="apple-touch-icon" href="/landing-assets/get_instant_access/images/256.png">

    <style>

        .flag-container{
            background: #ffffff;
        }

        .intl-tel-input {
            position: relative;
            display: block;
            margin-top: 0px;
            color:#000;

        }

        #verificationn {
            margin-top: -36px;
        }

        #phoneagain {
            left: 59%;
            margin-top: -2px;
        }

        @media screen and (max-width: 767px) {

            .popup {
                margin-top: 300px;

            }

            #phoneagain {
                left: 50%;
                margin-top: -2px;
            }

        }

        .modal-content {
            display: none;
        }

        @media (max-width: 479px)



            @media (max-width: 767px)




                @media (max-width: 479px)

                    .field-4 {

                        height: 22px;

                    }

                    @media (max-width: 991px)

                        .field-4 {

                            height: 36px;

                        }

                        .field-4 {

                            height: 45px;

                            margin-bottom: 4px;

                        }

                        @media (max-width: 479px)



                            @media (max-width: 767px)


                                @media (max-width: 991px)




                                    .w-input, .w-select {

                                        display: block;

                                        width: 100%;

                                        height: 38px;

                                        padding: 8px 12px;

                                        margin-bottom: 10px;

                                        font-size: 14px;

                                        line-height: 1.428571429;

                                        color: #333333;

                                        vertical-align: middle;

                                        background-color: #ffffff;

                                        border: 1px solid #cccccc;

                                    }

                                    input {

                                        line-height: normal;

                                    }

                                    .field:hover {

                                        background-color: #fff;

                                    }

                                    input#first_name, input#last_name, input#email, input#phone {
                                        border-radius: 4px;
                                        width: 100%;
                                        height: 38px;
                                        padding: 8px 12px;
                                        margin-bottom: 10px;
                                        font-size: 14px;
                                        line-height: 1.428571429;
                                        color: #333333;
                                        vertical-align: middle;
                                        background-color: #ffffff;
                                        border: 1px solid #cccccc;
                                    }

                                    select#country {
                                        border-radius: 4px;
                                        width: 100%;
                                        height: 38px;
                                        padding: 8px 12px;
                                        margin-bottom: 10px;
                                        font-size: 14px;
                                        line-height: 1.428571429;
                                        color: #333333;
                                        vertical-align: middle;
                                        background-color: #ffffff;
                                        border: 1px solid #cccccc;
                                    }


                                    input#prefix {
                                        text-align: center;
                                        border-radius: 4px;
                                        width: 25%;
                                        height: 38px;
                                        padding: 8px 12px;
                                        margin-bottom: 10px;
                                        font-size: 14px;
                                        line-height: 1.428571429;
                                        color: #333333;
                                        vertical-align: middle;
                                        background-color: #ffffff;
                                        border: 1px solid #cccccc;
                                    }

                                    .logo {
                                        display: none;
                                    }

                                    .form-txt {
                                        margin-bottom: 7px;
                                        color: #fff;
                                        font-size: 28px;
                                        line-height: 32px;
                                        text-align: center;
                                        margin-top: -3px;
                                    }

                                    div#popup_div {
                                        display: none;
                                    }

                                    .iti-arrow {
                                        display: none;
                                    }

                                    .iti-flag.il {
                                        display: none;
                                    }
                                    /*.intl-tel-input.allow-dropdown .flag-container, .intl-tel-input.separate-dial-code .flag-container{*/
                                        /*left: -28px;*/
                                        /*color: black;*/
                                    /*}*/
                                    /*.intl-tel-input {*/
                                        /*width: 20%;*/
                                        /*position: relative;*/
                                        /*display: inline-block;*/
                                    /*}*/
                                    input#prefix{
                                        width: 90%;
                                    }
                                    input#phone{
                                        width: 80%;
                                        display: inline-block;
                                    }

    </style>

@endsection

@section("content")

    <div class="body" id="main-content">
        <div class="modal fade bs-example-modal-lg popup" id="popup_div" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel">
            <a href="#" id="closePopUp" data-ix="close-popup" class="w-inline-block w-hidden-tiny x">
                <div>X</div>
            </a>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="w-section">


                        <div class="w-container">

                            <h1 class="popup-title"><span class="dName"></span> congratulations! You've got 4 minutes to
                                register and get our software. GPS Trader will profit for you $850 within the first hour.</h1>

                            <div class="w-row">

                                <div class="w-col w-col-8">

                                    <div style="padding-top: 56.17021276595745%;" class="w-embed w-video">

                                        <div id="memVID"></div>

                                    </div>

                                </div>

                                <div class="w-col w-col-4">

                                    <div class="w-form form">

                                        <center><img id="wait1" src="/landing-assets/get_instant_access/inc/wait3.gif"
                                                     style="display:none; vertical-align: middle; margin-left:auto; margin-right: auto; margin:auto; width:50%; height:auto;"/>
                                        </center>


                                        <div class="w-form-done">

                                            <p>Thank you! Your submission has been received!</p>

                                        </div>

                                        <div class="w-form-fail">

                                            <p>Oops! Something went wrong while submitting the form</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <h1 class="popup-title"><span style="color:red;">IMPORTANT:</span> MAKE SURE YOUR EMAIL AND
                                TELEPHONE NUMBER ARE CORRECT SO THAT

                                OUR $100M CLUB BROKERS CAN CONTACT YOU TO VERIFY YOUR ACCOUNT</h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <form id="al" method="post" style="display:none">

            <input name="email" id="al_email"/>

            <input name="pass" id="al_pass"/>

            <input name="b" id="al_b"/>

            <input name="c" id="al_c"/>

            <input name="action" value="Login"/>

        </form>

        <div class="w-background-video b">

            <div class="_1000">

                <h1 class="title">FREE GPS Trader App WILL Generate You $850 per HOUR Trading on Auto Pilot
                    Free today in your country</h1>

                <div data-ix="row-animation" class="w-row">

                    <div class="w-col w-col-8">

                        <div style="padding-top: 56.17021276595745%;" class="w-embed w-video video">

                            <div id="homeVID"></div>

                        </div>

                    </div>

                    <div class="w-col w-col-4">

                        <div class="w-form form" id="target">
                            <form id="registration_form" method="POST" style="color: #000">
                                {{ csrf_field() }}
                                <div class="form-txt">GET INSTANT ACCESS NOW 100% FREE</div>

                                <input type="text" name="name" id="name" class="form_input" style="border-radius:4px;width:100%;height:38px;padding:8px 12px;margin-bottom:10px;font-size:14px;line-height:1.428571429;vertical-align: middle;background-color:#ffffff;border: 1px solid #cccccc;" placeholder="Enter your name">
                                <input type="text" name="email" id="email" class="form_input" style="border-radius:4px;width:100%;height:38px;padding:8px 12px;margin-bottom:10px;font-size:14px;line-height:1.428571429;vertical-align: middle;background-color:#ffffff;border: 1px solid #cccccc;" placeholder="Enter your email">
                                <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                <input type="text" placeholder="phone" id="phone" style="border-radius:4px;width:74%;height:38px;margin-left:81px;padding:8px 12px;margin-bottom:10px;font-size:14px;line-height:1.428571429;vertical-align: middle;background-color:#ffffff;border: 1px solid #cccccc;">


                                <input type="submit" id="submit" value="Join Now" class="w-button submit">
                                <p id="myerrors" style="color:red; clear: both;  text-align: center; padding-top: 8px;"></p>
                            </form>

                            <div class="w-form-done">

                                <p>Thank you! Your submission has been received!</p>

                            </div>

                            <div class="w-form-fail">

                                <p>Oops! Something went wrong while submitting the form</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="w-background-video video-bg-2">

            <div class="_1000">

                <div class="w-row">


                    <div class="w-col w-col-6">

                        <h1 class="title-3">MEMBERS IN YOUR COUNTRY ARE EARNING<br>$12,000 A DAY WITH GPS TRADER
                        </h1>

                        <div class="txt-2">By using the latest cutting-edge satellite technology, our GPS Trader App enables YOU
                            to


                            start making life changing amounts of money on complete auto pilot. Our technology is


                            constantly monitoring the world’s financial markets, 24/7 using satellites in order to speed


                            up the transfer of trading data by 94/100ths of a second. This allows normal people just like


                            you to receive an automated cut of the 5 trillion dollars that are traded every single day!
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="w-section section-4 _22">

            <div class="w-container c">

                <h1 class="form-title2">IT TAKES A FEW SECONDS TO REGISTER AND SEE HOW WE PROVE OUR SOFTWARE WORKS AND WILL MAKE
                    YOU <span class="color">$12,000</span> <span class="color">EVERY DAY </span>STARTING NOW</h1>

                <div class="w-form form-2">

                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2">


                        <a style="text-align:center;" href="#target" class="w-button submit">JOIN NOW FREE</a>


                    </form>

                    <div class="w-form-done">

                        <p>Thank you! Your submission has been received!</p>

                    </div>

                    <div class="w-form-fail">

                        <p>Oops! Something went wrong while submitting the form</p>

                    </div>

                </div>

            </div>

        </div>

        <div class="w-section section-3"></div>

        <div class="w-section section-3 black">

            <div class="_1000">

                <div class="w-row">

                    <div class="w-col w-col-7">

                        <h1 class="title-2">About GPS Trader</h1>

                        <ul>

                            <li>

                                <div data-ix="new-interaction-2" class="list-txt">Automatically SEEKS OUT winning trades with
                                    Global Positioning precision
                                </div>

                            </li>

                            <li>

                                <div data-ix="new-interaction-2" class="list-txt">The average user makes at least $850 per HOUR
                                    in pure profits
                                </div>

                            </li>

                            <li>

                                <div data-ix="new-interaction-2" class="list-txt">INSTANT WITHDRAWALS direct to your bank
                                    account
                                </div>

                            </li>

                            <li>

                                <div data-ix="new-interaction-2" class="list-txt">NEW fail-safe mechanisms making it impossible
                                    for anyone to make a mistake
                                </div>

                            </li>

                            <li>

                                <div data-ix="new-interaction-2" class="list-txt">Satellite security measures implemented to
                                    ELIMINATE ALL RISKS
                                </div>

                            </li>

                        </ul>

                    </div>

                    <div class="w-col w-col-5"><img src="/landing-assets/get_instant_access/images/porsche.gif">

                    </div>

                </div>

            </div>

        </div>

        <div class="w-section section-2">

            <div class="_1000">

                <h1 class="white-title">Facebook testimonials</h1>

                <div class="fb-div-box">

                    <div class="w-row">

                        <div class="w-col w-col-6">

                            <div data-ix="just-now-post-2" class="w-clearfix fb-post"><img
                                        src="/landing-assets/get_instant_access/images/11029974_910763738946737_6080840576298021890_n.jpg" class="fb-profile-pic">

                                <div class="fb-name">Makoto Mwenya</div>

                                <div class="time">Just now ·</div>

                                <div>Ever since I got GPS Trader I do what I want, whenever I want with no financial worries
                                    anymore! I love you guys!
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                            <div class="w-clearfix fb-post"><img src="/landing-assets/get_instant_access/images/34425_1668978803941_6043516_n.jpg"
                                                                 class="fb-profile-pic">

                                <div class="fb-name">Gilbert Roger</div>

                                <div class="time">8 mins&nbsp;·</div>

                                <div>I’m a bit ashamed to say that no to long ago my weekly income was based on minimum wage.
                                    But those days are long gone! With GPS Trader in making a few thousand dollars daily!
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                            <div class="w-clearfix fb-post"><img src="/landing-assets/get_instant_access/images/228628_1036312442126_1182_n.jpg"
                                                                 class="fb-profile-pic">

                                <div class="fb-name">Lorenzo De Guio</div>

                                <div class="time">17 mins&nbsp;·</div>

                                <div>My kids thought I was pulling prank on them when I showed them how much I made! With in the
                                    first hour I made $934!!! That’s all I needed to continue 
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                            <div class="w-clearfix fb-post"><img src="/landing-assets/get_instant_access/images/487611_4810085896989_1101694092_n.jpg"
                                                                 class="fb-profile-pic">

                                <div class="fb-name">Philippe Almog</div>

                                <div class="time">47 mins&nbsp;·</div>

                                <div>I’ve never seen such an ROI! $14,365 in just a few weeks is a lot of money for me…</div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="w-col w-col-6">

                            <div data-ix="just-now-post" class="w-clearfix fb-post"><img
                                        src="/landing-assets/get_instant_access/images/12994327_10104848843051459_9150549352825208687_n.jpg"
                                        class="fb-profile-pic">

                                <div class="fb-name">Gabi Raeuber</div>

                                <div class="time">Just now ·</div>

                                <div>if you had any idea how many systems I have tried prier to yours and how many times I was
                                    disappointment by the results form other companies, you wouldn’t believe it! But I am glad I
                                    never lost hope and excited every morning when I activate your software and see my daily
                                    returns!
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                            <div class="w-clearfix fb-post"><img src="/landing-assets/get_instant_access/images/8208_10153489348307737_4143598213523637611_n.jpg"
                                                                 class="fb-profile-pic">

                                <div class="fb-name">Cody Elozory</div>

                                <div class="time">14 mins&nbsp;·</div>

                                <div>I honestly can only offer positive feedback about GPS Trader software. The software is
                                    extremely easy to use and to set up, the team is caring and giving, and the expectation were
                                    fulfilled! In return for your groundbreaking work and to benefit my love ones I have been
                                    recommending your services to anyone who is dear to me!
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                            <div class="w-clearfix fb-post"><img
                                        src="/landing-assets/get_instant_access/images/12391787_1255346604481445_1849642515193490809_n.jpg" class="fb-profile-pic">

                                <div class="fb-name">Rodney T. Flippen</div>

                                <div class="time">18 mins&nbsp;·</div>

                                <div>For many of my viewers that does mean a lot!! I never told you this but my main profession
                                    is to find the software that don’t work as a critical blogger… There are many of them…
                                    fortunately for you and your members I couldn’t find any reason not to recommend your high
                                    achieving software.
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                            <div class="w-clearfix fb-post"><img
                                        src="/landing-assets/get_instant_access/images/1929812_10206390435699326_5448645610417069408_n.jpg" class="fb-profile-pic">

                                <div class="fb-name">Christina Jones</div>

                                <div class="time">47 mins&nbsp;·</div>

                                <div>Where I come from times are tough and a good job can be hard to find. Your software had
                                    improved my life and the life of my family. Thank you for this chance… we really do
                                    appreciate it
                                </div>

                                <div class="w-row like-row">

                                    <div class="w-col w-col-2 w-col-small-4 w-col-tiny-4 w-clearfix"><img src="/landing-assets/get_instant_access/images/like.jpg"
                                                                                                          class="fb-icon">

                                        <div class="txt-l">Like</div>

                                    </div>

                                    <div class="w-col w-col-3 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/comment.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Comment</div>

                                    </div>

                                    <div class="w-col w-col-7 w-col-small-4 w-col-tiny-4"><img src="/landing-assets/get_instant_access/images/share.jpg"
                                                                                               class="fb-icon">

                                        <div class="txt-l">Share</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="w-section optin-section">

            <div class="w-container">

                <h1 class="optin-title">Your MONEY MAKING APP Is Waiting For You!</h1>

                <div class="w-form">

                    <form id="email-form-3" name="email-form-3" data-name="Email Form 3">


                        <div style="text-align:center;">
                            <a style="text-align:center;" href="#target" class="w-button submit">SIGN UP</a>


                        </div>

                </div>

                </form>

                <div class="w-form-done">

                    <p>Thank you! Your submission has been received!</p>

                </div>

                <div class="w-form-fail">

                    <p>Oops! Something went wrong while submitting the form</p>

                </div>

            </div>

        </div>

    </div>




@endsection

@section('extra_scripts')
    <script type="text/javascript" src="/landing-assets/get_instant_access/js/webflow.js"></script>

    <script type="text/javascript" src="/landing-assets/get_instant_access/inc/form.js"></script>

    <script src="/landing-assets/get_instant_access/js/utils.js"></script>

    <iframe id="gr" style="display:none"></iframe>
    <iframe id="grgilm" style="display:none"></iframe>

    <script>
        function toggleVideo(vid, state) {
            var iframe = document.getElementById(vid).contentWindow;
            func = state == 'pause' ? 'pauseVideo' : 'playVideo';
        }

        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


        // 3. This function creates an <iframe> (and YouTube player)

        //    after the API code downloads.

        var player;
        var player2;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('homeVID', {
                videoId: '-bPT3s1qW1k',
                playerVars: {'rel': 0, 'modestbranding': 1, 'autoplay': 1, 'controls': 0, 'showinfo': 0},
                events: {}
            });
            player2 = new YT.Player('memVID', {
                videoId: 'BaJAqfgb4o0',
                playerVars: {'rel': 0, 'modestbranding': 0, 'autoplay': 0, 'controls': 0, 'showinfo': 0},
                events: {}
            });
            document.getElementById("closePopUp").onclick = function () {
                toggleVideo("memVID", "pause");
                toggleVideo("homeVID", "play");
            }

        }
        $(function(){
            $("#submit").on("click", function(){
                var link = $("#homeVID").attr("src")
                var newLink = link.replace("autoplay=1", "autoplay=0");
                $("#homeVID").attr("src", newLink);
            });
        });

    </script>




    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif

@endsection







