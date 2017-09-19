@extends('layouts.main')

@section('extra_styles')
    <link href="/landing-assets/quantum/css/stylem.css" rel="stylesheet">
    <link rel="stylesheet" href="/landing-assets/quantum/css1/style.css">
    <link rel="stylesheet" href="/landing-assets/quantum/css1/font-awesome.css">
    <link rel="stylesheet" href="/landing-assets/quantum/css1/css.css" type="text/css">
    <link rel="stylesheet" href="/landing-assets/quantum/css2/site.min.css">
    <link rel="stylesheet" href="/landing-assets/quantum/css2/main2.css">
    <link rel="stylesheet" href="/landing-assets/quantum/css3/style.css">
    <link rel="stylesheet" href="/landing-assets/quantum/css/boost-form.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300italic,300,900italic,700italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt|Kaushan+Script|Gloria+Hallelujah' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>

    <style>
        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            opacity: 0.7;
            background-color: #000;
        }


        #MouseLeftTrend .modal-dialog {
            margin-top: 10%;
            width: 760px !important;
            overflow: visible !important;
        }

        #MouseLeftTrend .modal-body h2 strong {
            display: block;
            font-size: 60px;
            color: #d42824;
        }

        #MouseLeftTrend .modal-body h2 {
            font-size: 30px;
            padding-top: 10px;
        }

        .col-md-7 {
            width: 58.33333333%;
        }

        .col-md-5 {
            width: 41.66666667%;
        }

        #MouseLeftTrend img {
            margin: 20px 0 0 20px;
        }

        #MouseLeftTrend .leave-details {
            background-color: #fff;
            border-radius: 0 0 6px 6px;
            padding: 0 40px;
        }

        #MouseLeftTrend .modal-body p {
            font-size: 17px;
            line-height: normal;
            /*padding-right: 70px;*/
            padding-top: 10px;
            color: #C00;
        }

        #MouseLeftTrend a.no-thanks {
            color: #d42824;
            display: block;
            padding-bottom: 20px;
        }

        .submit {
            margin-bottom: 50px;
            background: #ffd954; /* Old browsers */
            background: -moz-linear-gradient(to bottom, #428bca 0%, rgb(0, 173, 239) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(to bottom, #428bca 0%, rgb(0, 173, 239) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #428bca 0%, rgb(0, 173, 239) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#428bca', endColorstr='#428bca', GradientType=0); /* IE6-9 */
            color: #FFF;
        }

        #registration_form  .intl-tel-input .country-list .country {
            text-align: left;
            font-size: 18px;
        }
        #registration_form .intl-tel-input.separate-dial-code .selected-dial-code {
            padding-left: 10px;
            font-size: 18px;
        }
    </style>

    <link href="/landing-assets/quantum/css/newstyle.css" rel="stylesheet">
@endsection

@section("content")
    <div id="main-content">


        <div id="widget76_3"
             style="width:225px; height:85px; position:fixed; left:10px; bottom:100px; border:0px; z-index:1;">
            <div class="count left copies">
                <div class="value" id="copies">1</div>
                <div class="desc">VIP Spots Available</div>
            </div>
        </div>
        <div id="widget76_2"
             style="width:225px; height:85px; position:fixed; left:10px; bottom:10px; border:0px; z-index:1;">
            <div class="count left copiesa">
                <div class="value" id="copiesa"></div>
                <div class="desc">PEOPLE ON THIS PAGE</div>
            </div>
        </div>
        <div id="members">
            <div class="top">
                <center>
                    <img src="/landing-assets/quantum/images/qclogo.png" width="240" height="37"
                         style="margin-top:10px;" class="qclogo"/>
                    {{--<div class="col-lg-12">--}}
                        {{--<a href="JP/members"><img class="img-responsive" style="display: inline-block;max-width: 35px;"--}}
                                                  {{--src="/landing-assets/quantum/images/jp.png"/></a>--}}
                        {{--<a href="DE/members"><img class="img-responsive" style="display: inline-block;max-width: 35px;"--}}
                                                  {{--src="/landing-assets/quantum/images/gb.png"/></a>--}}
                    {{--</div>--}}
                </center>
            </div>
            <div class="city-bg">
                <div class="row">
                    <div class="container">
                        <center>
                            <div class="col-md-8 center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width=100% style="border: 0!important;" id="frameVid"
                                            class="embed-responsive-item"
                                            src='https://www.youtube.com/embed/uEWoQj2aHDE?autohide=1&autoplay=1&wmode=transparent&hd=1wmode=opaque&modestbranding=1&controls=0&showinfo=0&rel=0&title=0'
                                            frameBorder="0" scrolling="no" webkitallowfullscreen mozallowfullscreen
                                            frameborder></iframe>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h1 class="headline"
                                style="font-family: 'Roboto Condensed', sans-serif !important; color:#ffdc1d !important; font-size:28px;">
                                <span style="color:#FFF !important; font-size:30px;">STEP ONE:</span> CREATE YOUR
                                QUANTUM CODE ACCOUNT NOW<br>
                            </h1>
                            <div class="leftarrow col-md-3" style="margin-top: 15px;"><img class="img-responsive"
                                                                                           src="/landing-assets/quantum/images/arrowleft.png">
                            </div>
                            <div class="form col-md-6" style="text-align:center;">
                                <div id="boost-form">
                                    <form action="" method="post" id="registration_form">
                                        <fieldset>
                                            {{ csrf_field() }}
                                            <div  class="form-group">
                                                <input class="form-control input-lg names icons valid" type="text"
                                                       id="name" name="name" placeholder="Name">
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control input-lg icons" type="email" id="email"
                                                       name="email" placeholder="E-mail">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="phone" id="phone">
                                            </div>

                                            <input type="hidden" id="source_token"  value="{{$source->stoken}}">

                                            <div id="regBtn-container" class="form-group">
                                                <input class="btn btn-block buttons-style" type="submit" value="CREATE PROFIT ACCOUNT">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <img class="img-responsive center securityimg"
                                     src="/landing-assets/quantum/images/securitygrey.png">

                            </div>
                            <div class="rightarrow col-md-3" style="margin-top: 15px;"><img class="img-responsive"
                                                                                            src="/landing-assets/quantum/images/arrowright.png">
                            </div>
                        </center>
                    </div>
                </div>
                <div class="row section5">
                    <center>
                        <h1 class="headline"><img src="/landing-assets/quantum/images/steps.png" alt=""
                                                  class="stepsimg img-responsive center"></h1>
                    </center>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="container">
                        <center><br>
                            <h1 class="headline"
                                style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:55px; color:#fff !important;">
                                <img src="/landing-assets/quantum/images/me.jpg" class="meimg img-responsive center">
                            </h1>
                            <h1 class="headline"
                                style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:55px; color:#fff !important;">
                                CONGRATULATIONS! YOU MADE IT!</h1>
                            <h1 class="headline"
                                style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:36px; color:#ffdc1d !important; margin-top:-20px;">
                                WELCOME TO THE QUANTUM CODE MEMBERS AREA</h1>
                            <br>
                            <h1 class="headline"
                                style="font-family: 'Rock Salt', cursive !important; color:#f00 !important; font-size:28px;">
                                Real life proof from existing quantum code members:</h1>
                            <div class="checkresults">
                                <div class="results"><img src="/landing-assets/quantum/images/t1.jpg" alt=""
                                                          style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.80); cursor:pointer"
                                                          onclick="$('#MemberClickClay').modal('show');$('#CLAY').attr('src','https://www.youtube.com/embed/EqegAQ5LAMQ?autoplay=1&modestbranding=1&autohide=1&showinfo=0&controls=0');"
                                                          class="resultimages img-responsive">
                                    <h1 align="center" style="margin:10px 0 0 0;">Robert Anderson<br>
                                        <strong style="color:#FFF !important; font-size:22px;">Total Profit:
                                            $134,720.09</strong></h1>
                                </div>
                                <div class="results"><img src="/landing-assets/quantum/images/t2.jpg" alt=""
                                                          style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.80); cursor:pointer"
                                                          onclick="$('#MemberClickKari').modal('show');$('#KARI').attr('src','https://www.youtube.com/embed/fu57QIBTDeE?autoplay=1&modestbranding=1&autohide=1&showinfo=0&controls=0');"
                                                          class="resultimages img-responsive">
                                    <h1 align="center" style="margin:10px 0 0 0;">Mark Abrahams<br>
                                        <strong style="color:#FFF !important; font-size:22px;">Total Profit:
                                            $386,830.12</strong></h1>
                                </div>

                            </div>
                            <p>&nbsp;</p>
                            <div class="verifiedacc row">
                                <div class="verifiedwid col-md-3 col-sm-6">
                                    <div class="profile_widget">
                                        <div class="pw_avatar">
                                            <img src="" width="100%" alt="" id="MemberImage"/>
                                        </div><!-- /.pw_avatar -->
                                        <div class="pw_info">
                                            <h1 id="MemberName"></h1>
                                            <h2>just made profit</h2>
                                            <p style="font-size:40px; color:#2062b5; font-weight:bold; letter-spacing:-1px;"
                                               id="Profit"></p>
                                        </div><!-- /.pw_info -->
                                    </div><!-- /.profile_widget -->
                                </div>
                                <div class="verifiedwid col-md-3 col-sm-6">
                                    <div class="profile_widget">
                                        <div class="pw_avatar">
                                            <img src="" width="100%" alt="" id="MemberImage1"/>
                                        </div><!-- /.pw_avatar -->
                                        <div class="pw_info">
                                            <h1 id="MemberName1"></h1>
                                            <h2>just made profit</h2>
                                            <p style="font-size:40px; color:#2062b5; font-weight:bold; letter-spacing:-1px;"
                                               id="Profit1"></p>
                                        </div><!-- /.pw_info -->
                                    </div><!-- /.profile_widget -->
                                </div>
                                <div class="verifiedwid col-md-3 col-sm-6">
                                    <div class="profile_widget">
                                        <div class="pw_avatar">
                                            <img src="" width="100%" alt="" id="MemberImage2"/>
                                        </div><!-- /.pw_avatar -->
                                        <div class="pw_info">
                                            <h1 id="MemberName2"></h1>
                                            <h2>just made profit</h2>
                                            <p style="font-size:40px; color:#2062b5; font-weight:bold; letter-spacing:-1px;"
                                               id="Profit2"></p>
                                        </div><!-- /.pw_info -->
                                    </div><!-- /.profile_widget -->
                                </div>
                                <div class="verifiedwid col-md-3 col-sm-6">
                                    <div class="profile_widget">
                                        <div class="pw_avatar">
                                            <img src="" width="100%" alt="" id="MemberImage3"/>
                                        </div><!-- /.pw_avatar -->
                                        <div class="pw_info">
                                            <h1 id="MemberName3"></h1>
                                            <h2>just made profit</h2>
                                            <p style="font-size:40px; color:#2062b5; font-weight:bold; letter-spacing:-1px;"
                                               id="Profit3"></p>
                                        </div><!-- /.pw_info -->
                                    </div><!-- /.profile_widget -->
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <br>
                            <p style="clear:both"><span class="headline"
                                                        style="font-family: 'Rock Salt', cursive !important; color:#f00 !important; font-size:34px;"><strong>How does it all work?</strong></span>
                            </p>
                            <!--        <iframe id="YouTubeVid" width="800" height="450" src="https://player.vimeo.com/video/171477434?title=0&byline=0&portrait=0" frameborder="0" allowfullscreen ></iframe>-->
                            <div class="col-md-8 center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width=100% style="border: 0!important;" id="frameVid"
                                            class="embed-responsive-item"
                                            src='https://www.youtube.com/embed/G91vhVQzM7U?autohide=1&autoplay=1&wmode=transparent&hd=1wmode=opaque&modestbranding=1&controls=0&showinfo=0&rel=0&title=0'
                                            frameBorder="0" scrolling="no" webkitallowfullscreen mozallowfullscreen
                                            frameborder></iframe>
                                </div>
                            </div>

                            <p>&nbsp;</p>
                            <br>
                            <h1 class="headline"
                                style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:65px; color:#fff !important; margin-top:30px;">
                                OUR HELP AND SUPPORT</h1>
                            <h1 class="headline"
                                style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:36px; color:#ffdc1d !important; margin-top:-20px;">
                                WE ANSWER YOUR QUESTIONS AND HELP YOU MAKE MONEY</h1>
                            <div class="faq">
                                <div class="container" style="max-width:992px;">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                            <div class="question one">What is Quantum Code?</div>
                                            <div class="answer one">Quantum Code is a 100% FREE software that will trade
                                                on the binary options markets with just 1 click! It's fully automated
                                                and places the winning trades for you!
                                            </div>
                                            <div class="question two">How much money can I make with this software?
                                            </div>
                                            <div class="answer two">To put it in short, there's no limit. To put it more
                                                technically, it really depends on how much money you fund your account
                                                with. Most of our members fund their account with $300, and make about
                                                $800-1000 daily. Those who fund their account with $1,000 or over make
                                                over $2,500 per day!
                                            </div>
                                            <div class="question one">What is the minimum required deposit?</div>
                                            <div class="answer one">You need to deposit some money into your trading
                                                account before you can make profits. Remember, it takes money to make
                                                money. You need to deposit at LEAST $250, but the more you deposit early
                                                on, the more money you will make right away! Remember you will easily
                                                make this back on your first day, and you can withdraw this money at any
                                                time! I would personally suggest starting with $500 or more, but $250 is
                                                fine too!
                                            </div>
                                            <div class="question two">How exactly does it work?</div>
                                            <div class="answer two">There are a few simple steps to take before you
                                                start making money. Step 1, watch the video and sign up to get access to
                                                the members area! Step 2, create your account at our favourite broker,
                                                so you are all ready for trading. Step 3, deposit money into your
                                                account. Step 4, Start making money right away! On day one!
                                            </div>
                                            <div class="question one">Do I need to use my credit card when I signup?
                                            </div>
                                            <div class="answer one">NO WAY. The Quantum Code App is 100% FREE. You will
                                                NOT be asked for your credit card or paypal or bank information when you
                                                download the Quantum Code System! Once you are in the members area, we
                                                will recommend a binary options broker that you can exploit. For this,
                                                you'll need funds to deposit in order to start making profits. This is
                                                YOUR money that you are just depositing to trade with, and you can
                                                withdraw it at any time!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                    </div>
                </div>
            </div>
            <br>

            <div class="row section5">
                <center>
                    <h1 class="headline"
                        style="font-family: 'Roboto Condensed', sans-serif !important; color:#ffdc1d !important; font-size:28px;">
                        <span style="color:#FFF !important; font-size:30px;">SIGN UP ABOVE TO GET STARTED RIGHT NOW!</span><br>
                    </h1>
                </center>
            </div>
        </div>
    </div>
    <div style="margin-top:30px; text-align:center">
        <div class="row">
            <div class="container">
                <p><span class="headline"
                         style="font-family: 'Rock Salt', cursive !important; color:#f00 !important; font-size:24px;"><strong><br>
          Personal help and support from my team:</strong></span></p>
                <p><img src="/landing-assets/quantum/images/support.png" class="supportimg img-responsive center"></p>
                <p style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:36px; color:#ffdc1d !important;">
                    </h1>
                </p>
                </center>
            </div>
        </div>
    </div>

    </div>
    <div class="city-bg">
        <div class="row"></div>
        <div class="footer">
            <div class="footer-wrap container">
                <center>
                    <p><img src="/landing-assets/quantum/images/securitygrey.png"
                            class="securityimg img-responsive center"></p>

                </center>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><a href="mailto:support@thequantumcodes.trade" style="font-size:9px;">Contact Us</a><font
                            style="font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> <a
                            href="/landing-assets/quantum/privacy.html" style="font-size:9px;">Privacy</a><font style="font-family:Arial">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> <a href="/landing-assets/quantum/terms.html" style="font-size:9px;">Disclaimer</a><br/>
                    <span style="font-size:9px;">Copyright © 2016 thequantumcodes.trade</span></p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="MemberClickJeff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!--          <h2>Quotes</h2>-->
                    <div class="row">
                        <center>
                            <iframe src="" id="JEFF" width="560" height="315" frameborder="0" webkitallowfullscreen=""
                                    mozallowfullscreen="" allowfullscreen=""></iframe>
                        </center>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center"><br clear="all">
                            <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000"
                               onclick="$('#JEFF').attr('src','');">CLOSE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="MemberClickClay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!--          <h2>Quotes</h2>-->
                    <div class="row">
                        <center>
                            <iframe src="" id="CLAY" width="560" height="315" frameborder="0" webkitallowfullscreen=""
                                    mozallowfullscreen="" allowfullscreen=""></iframe>
                        </center>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center"><br clear="all">
                            <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000"
                               onclick="$('#CLAY').attr('src','');">CLOSE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="MemberClickKari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!--          <h2>Quotes</h2>-->
                    <div class="row">
                        <center>
                            <iframe src="" id="KARI" width="560" height="315" frameborder="0" webkitallowfullscreen=""
                                    mozallowfullscreen="" allowfullscreen=""></iframe>
                        </center>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center"><br clear="all">
                            <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000"
                               onclick="$('#KARI').attr('src','');">CLOSE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="MemberClickSharon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!--          <h2>Quotes</h2>-->
                    <div class="row">
                        <center>
                            <iframe src="" id="SHARON" width="560" height="315" frameborder="0" webkitallowfullscreen=""
                                    mozallowfullscreen="" allowfullscreen=""></iframe>
                        </center>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center"><br clear="all">
                            <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000"
                               onclick="$('#SHARON').attr('src','');">CLOSE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-bg"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="pop-right">
                        <!-- pop header -->
                        <iframe width="640" height="360"
                                src="http://www.youtube.com/embed/ZgRyoAP4orE?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-bg"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="pop-right">
                        <!-- pop header -->
                        <iframe width="640" height="360"
                                src="http://www.youtube.com/embed/JIwweDcquWg?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-bg"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="pop-right">
                        <!-- pop header -->
                        <iframe width="640" height="360"
                                src="http://www.youtube.com/embed/R8RZLbbuLtQ?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-bg"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="pop-right">
                        <!-- pop header -->
                        <iframe width="640" height="360"
                                src="http://www.youtube.com/embed/4If-YsWSMpw?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('extra_scripts')
    <script src="http://soft.thequantumcodes.trade/js/p.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script>

        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        var nameFromUrl = getParameterByName("name");
        var emailFromUrl = getParameterByName("email");
//        var stokenFromUrl = getParameterByName("source_id");
        $(document).ready(function () {

            $("#name").val(nameFromUrl);
            $("#email").val(emailFromUrl);
//            $("#source_token").val(stokenFromUrl);
            var days = 0;
            var hours = 0;
            var minutes = 05;
            var seconds = 00;
            var milliseconds = [02, 10, 24, 35, 48, 60, 73, 74, 80, 99];
            var millisecondCount = 0;
            var millinewseconds = 99;
            var totalCopies = 25;
            //updateCountDown();
            updateNewCountDown();
            //updateMilliSec();
            updateCopiesCount();

            function getRandomTimeout(min, max) {
                return Math.round(Math.random() * (max - min) + min);
            }

            function getAmount(min, max) {
                var amount = Math.round(Math.random() * (max - min) + min);
                if (amount % 2 == 0) {
                    if (amount == max) {
                        amount--;
                    }
                    else {
                        amount++;
                    }
                }
                return amount;
            }

            function updateCountDown() {
                seconds--;
                jQuery("span.timer").html(minutes + " : " + seconds);
                if (seconds == 0) {
                    if (minutes == 0) {
                        window.clearTimeout(timerID);
                        window.clearTimeout(timerCentiID);
                        return;
                    }
                    minutes--;
                    seconds = 60;
                }


                var timerID = window.setTimeout(updateCountDown, 1000);
            }

            function updateNewCountDown() {
                millinewseconds -= 9;

                if (millinewseconds < 0) {
                    seconds--;
                    millinewseconds = 99;
                }
                if (millinewseconds < 10) {
                    newcenti = "0" + millinewseconds;
                }
                else {
                    newcenti = millinewseconds;
                }
                if (seconds < 10) {
                    newseconds = "0" + seconds;
                }
                else {
                    newseconds = seconds;
                }
                if (minutes < 10) {
                    newminutes = "0" + minutes;
                }
                else {
                    newminutes = minutes;
                }
                jQuery("span.timer").html(newminutes + " : " + newseconds);
                if (seconds == 0) {
                    if (minutes == 0) {
                        newcenti = "0" + 0;
                        jQuery("span.timer").html(newminutes + " : " + newseconds);
                        window.clearTimeout(timerID);
                        return;
                    }
                    minutes--;
                    seconds = 59;
                }


                var timerID = window.setTimeout(updateNewCountDown, 100);
            }

            function updateMilliSec() {
                millisecondCount++;
                jQuery("#signup h2 span.milli").html(milliseconds[millisecondCount]);
                if (millisecondCount == 9) {
                    millisecondCount = 0;
                }


                var timerCentiID = window.setTimeout(updateMilliSec, 90);
            }

            function updateCopiesCount() {
                if (totalCopies == 5) {
                    window.clearTimeout(copiesTimerID);
                    return;
                }
                totalCopies--;
                jQuery("#header-bar h2 span.count").html(totalCopies);
                var copiesTimerID = window.setTimeout(updateCopiesCount, 45000);
            }


        });
        var copy = 8;
        function mkChangesCnt() {
            copy--;
            if (copy == 0)
                clearTimeout(cd);
            else {
                $("#copy").html(copy);
            }
        }
        var cd = setInterval(mkChangesCnt, 20000);
    </script>
    <script>
        function closem() {
            $('#MouseLeftTrend').hide();
            $('.modal-backdrop').hide();
        }
        $(document).ready(function () {
            $('.trigger').click(function () {
                $('.trigger').not(this).popover('hide');
            })

            $('.modal-backdrop').click(function () {
                $('#MouseLeftTrend').fadeOut(500);
                $('.modal-backdrop').fadeOut(500);
            });
            $('#closetxt').click(function () {
                $('#MouseLeftTrend').fadeOut(500);
                $('.modal-backdrop').fadeOut(500);
            });

            $(document).ready(function () {
                exitMessageDisplayed = false;
                $(document).mousemove(function (e) {
                    if (e.pageY <= 5) {
                        if (!exitMessageDisplayed) {
                            // Show the exit popup
                            $('#MouseLeftTrend').fadeIn(500);
                            $('.modal-backdrop').fadeIn(500);
                        }
                    }
                });
            });
        });
    </script>

    <script>

        $('.modal-bg').click(function () {
            $('#myModal').modal('hide');
        });

        $('.modal-bg').click(function () {
            $('#myModal2').modal('hide');
        });

        $('.modal-bg').click(function () {
            $('#myModal3').modal('hide');
        });

        $('.modal-bg').click(function () {
            $('#myModal4').modal('hide');
        });
    </script>
    <script>
        $('#myModal1').on('hide.bs.modal', function (e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });


        $('#myModal2').on('hide.bs.modal', function (e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });

        $('#myModal3').on('hide.bs.modal', function (e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });

        $('#myModal4').on('hide.bs.modal', function (e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });
    </script>
    <script>
        function rand_num(min, max) {
            var number = min + Math.floor(Math.random() * max);
            return number;
        }
        function numberCom(val) {
            while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1" + "," + "$2");
            return val;
        }
        var names = new Array("Harvey", "Christopher", "David", "Morgan", "Jason", "Travis", "Charlie", "Robert", "Henry", "Kieran", "Charles", "Joseph", "Ellis", "Billy", "Andrew"/*,"Johnny","George","Sebastian","Cameron","Tory","Joel","Adam","Bryce","Dwayne","Vincent","Leon","Aidan","Aidan","David","Jacob","Ben","Alex","Enrique","Dennis","Nathan","Charles","Robert","Alfie","Dominic","Leon","John","Daniel","Charles","Romeo","Noah","Anthony","James","Mohammed","Louis","Joseph","Ellis","Kai","Jay","Noah","Lewis","Anthony","Jamie","Elliot","Ronald","Troy","Reece","Richard","Joel","Callum","Jack","Richard","Nicholas","Cameron","Harry","William","Lyle","Frank","Norman","Anthony","Morgan","Geoffrey","Alejandro","Zak","Anthony","Kieran","Ross","Paul","Sam","Richard","Michael","Roger","Charles","Reece","Brandon","Robert","Luca","Harrison","Ryan","Taylor","Frank","Larry","Billy","Sam","Finlay","Zara","Georgia","Sylvie","Kiera","Margaret","Patria","Ava","Diane","Skye","Helen","Jennifer","Isabella","Faith","Jessica","Penny","Rebecca","Summer","Tamara","Tamika","Magdalene","Wendy","Genevieve","Stephanie","Erin","Abby","Ann","Abbie","Leigh","Shanna","Tilly","Laura","Mary","Paula","Isabel","Ella","Tatiana","Mary","Tegan","Cynthia","Abigail","Lauren","Laura","Katherine","Naomi","Barbara","Melisa","Pamela","Leeann","Jodie","Terri","Caitlin","Roberta","Daisy","Molly","Frieda","Louise","Elizabeth","Stella","Billie","Gracie","Sienna","Katie","Mildred","Kayleigh","Christy","Kiera","Yun","Courtney","Tegan","Sheila","Ray","Lydia","Mamie","Keira","Matilda","Sonya","Ava","Cerys","Eleanor","Grace","Jodie","Sharon","Elva","Eleanor","Freya","Bessie","Sofia","Amelie","Brenda","Poppy","Tegan","Sienna","Leah","Antoinette","Zoe"*/);
        var images = new Array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "6.jpg", "7.jpg", "8.jpg", "10.jpg", "1(1).jpg", "2(1).jpg", "4(1).jpg", "5(1).jpg", "8(1).jpg", "9(1).jpg", "10(1).jpg");

        function mkChanges() {
            var x = rand_num(0, names.length);
            var name = names[x];
            var img = images[x];
            var profit = rand_num(100, 500);
            var y = rand_num(0, names.length);
            var name1 = names[y];
            var img1 = images[y];
            var profit1 = rand_num(100, 600);
            var z = rand_num(0, names.length);
            var name2 = names[z];
            var img2 = images[z];
            var profit2 = rand_num(100, 700);
            var w = rand_num(0, names.length);
            var name3 = names[w];
            var img3 = images[w];
            var profit3 = rand_num(100, 800);
            document.getElementById("MemberImage").src = "/landing-assets/quantum/img/" + img;
            document.getElementById("MemberName").innerHTML = name;
            document.getElementById("Profit").innerHTML = "$" + profit;
            document.getElementById("MemberImage1").src = "/landing-assets/quantum/img/" + img1;
            document.getElementById("MemberName1").innerHTML = name1;
            document.getElementById("Profit1").innerHTML = "$" + profit1;
            document.getElementById("MemberImage2").src = "/landing-assets/quantum/img/" + img2;
            document.getElementById("MemberName2").innerHTML = name2;
            document.getElementById("Profit2").innerHTML = "$" + profit2;
            document.getElementById("MemberImage3").src = "/landing-assets/quantum/img/" + img3;
            document.getElementById("MemberName3").innerHTML = name3;
            document.getElementById("Profit3").innerHTML = "$" + profit3;
            setTimeout(mkChanges, rand_num(3000, 4000));
        }
        setTimeout(mkChanges, rand_num(3000, 5000));
        mkChanges();
    </script>


    <script>
        function rand(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function copies() {
            var el = $("#copies");
            var left = parseInt($(el).html());
            left = left > 5 ? left - rand(1, 3) : left - rand(-2, 2);
            if (left < 2) {
                $(el).html(1);
            }
            else $(el).html(left);
            setTimeout('copies()', rand(6000, 9000));
        }
        $(function () {
//    copies();
        });
    </script>
    <script>
        function randa(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        var c = randa(101, 110);
        $("#copiesa").html(c);
        function copiesa() {
            var el = $("#copiesa");
            var left = parseInt($(el).html());
            left = left < 250 ? left + randa(-1, 3) : left - randa(1, 3);
            $(el).html(left);
            setTimeout('copiesa()', randa(6000, 9000));
        }
        $(function () {
            copiesa();
        });
    </script>

    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif
@endsection





