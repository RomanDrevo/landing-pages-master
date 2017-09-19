@extends('layouts.main')

@section('extra_styles')
    <link href="/landing-assets/quantum/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/landing-assets/quantum/css/newstyle-access.css">
    <link rel="stylesheet" href="/landing-assets/quantum/css3/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300italic,300,900italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/landing-assets/quantum/css/countdown.css" />

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
            width: 760px;
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

            border-radius: 0 0 6px 6px;
            padding: 0 40px;
        }

        #MouseLeftTrend .modal-body form {
            margin-top: 30px;
            padding: 0;
            background: none !important;
        }
        #MouseLeftTrend .modal-body form p {
            color: #df241f;
            font-size: 25px;
            font-weight: 400;
            padding: 0;
        }
        #MouseLeftTrend .modal-body p {
            font-size: 17px;
            line-height: normal;
            padding-right: 70px;
            padding-top: 20px;
        }
        #MouseLeftTrend form .form-bg {
            background-color: transparent;
            box-shadow: none;
        }

        #MouseLeftTrend .modal-body form .btn {
            padding: 15px 8px;
        }
        form .btn {
            padding: 0;
            margin-bottom: 15px;
            width: 100%;
            box-shadow: 0 0 15px 0 rgba(0,0,0,0.2);
            color: rgb(0, 0, 0);
            font: 700 22px "Montserrat";
            padding: 20px;
            background-size: 139%;
            background: #ffc518;
            border-radius:0 !important;
            background: -moz-linear-gradient(top, #ffc518 0%, #ff7f00 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffc518', endColorstr='#ff7f00',GradientType=0 );
            white-space: normal;
        }
        #MouseLeftTrend a.no-thanks {
            color: #d42824;
            display: block;
            padding-bottom: 20px;
        }

        label.error
        {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: bold;
            color: red;
            position: absolute;
            width: 100%;
            bottom: 0;
            right: -69px;
            z-index: 999;
            font-size: 14px;
        }
    </style>

@endsection

@section("content")


<div id="widget76" style="width:225px; height:85px; position:fixed; right:10px; bottom:10px; border:0px; z-index:1;">
    <div class="count left copies">
        <div class="value" id="copies">20</div>
        <div class="desc">VIP Spots Available</div>
    </div>
</div>

<div id="widget76_2" style="width:225px; height:85px; position:fixed; left:10px; bottom:10px; border:0px; z-index:1;">
    <div class="count left copiesa">
        <div class="value" id="copiesa"></div>
        <div class="desc">PEOPLE ON THIS PAGE</div>
    </div>
</div>

<div id="home">
    <div class="top" style="padding-bottom:0px;">
        <div class="container" style="max-width:972px">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="logo"><img src="/landing-assets/quantum/images/qclogo.png" width="302" class="img-responsive qclogo" style="margin-top:5px;"/></div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12" style="margin-top:10px;margin-bottom:10px;">
                <div>
                    <h1 class="headline" style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; margin:0px !important;">WATCH THIS IMPORTANT VIDEO AND LEARN HOW</h1>
                    <h1 class="headline" style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; margin:0px !important;">TO MAKE OVER $1,892,460 EVERY MONTH!<strong></strong></h1>
                </div>
            </div>
            {{--<div class="col-lg-12">--}}
                {{--<a href="JP/"><img class="img-responsive" style="display: inline-block;max-width: 35px;" src="/landing-assets/quantum/images/jp.png"></a>--}}
                {{--<a href="DE/"><img class="img-responsive" style="display: inline-block;max-width: 35px;" src="/landing-assets/quantum/images/de.png"></a>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="city-bg">
        <div class="additonal-bg">
            <div class="row">
                <div class="container">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 left">
                        <div class="embed-container">

                            <iframe id="YouTubeVid" width="640" height="360" src="https://www.youtube.com/embed/dNrJZTYzxuY?autoplay=1&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen style="box-shadow:0 0 20px #000;"></iframe>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="float:none;margin:0 auto">
                        <div class="form" id="index-form" style="width:100%">

                            <form method="get" class="af-form-wrapper validate" accept-charset="UTF-8" action="">
                                <div id="af-form-245981371" class="af-form" style="margin-top:20px;position:relative">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" class="text name" autocomplete="off" value="" placeholder="Enter Your Name" />
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="text email" type="text" name="email" autocomplete="off" value="" placeholder="Valid E-Mail Address" />
                                    </div>

                                    <input type="hidden" name="step" value="2">
                                    <button name="submit" class="submit btn" type="submit" value="" style="font-family: 'Roboto Condensed', sans-serif !important; font-size:30px;"> YES! I WANT INSTANT VIP ACCESS TO THE QUANTUM CODE </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-wrap container">
                    <p><img src="/landing-assets/quantum/images/securitygrey.png" width="695" height="61" class="securityimg"></p>
                <p>
                    <a href="/landing-assets/quantum/privacy.html" target="_blank" style="font-size:9px;">Privacy</a>
                    <a href="/landing-assets/quantum/terms.html" target="_blank" style="font-size:9px;">Disclaimer</a><br/>
                    <span style="font-size:9px;">Copyright © 2016 thequantumcodes.trade</span>
                </p>
            </div>
        </div>
    </div>

@endsection


@section('extra_scripts')

    <script src="http://soft.thequantumcodes.trade/js/p.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/landing-assets/quantum/js/soundmanager2-nodebug-jsmin.js"></script>
    <script type="text/javascript" src="/landing-assets/quantum/js/timer.js"></script>

    <script>
        function closem()
        {
            $('#MouseLeftTrend').hide();
            $('.modal-backdrop').hide();
        }
        $(document).ready(function(){
            $('.trigger').click(function(){
                $('.trigger').not(this).popover('hide');
            });

            $('.modal-backdrop').click(function(){
                $('#MouseLeftTrend').fadeOut(500);
                $('.modal-backdrop').fadeOut(500);
            });
            $('#closetxt').click(function(){
                $('#MouseLeftTrend').fadeOut(500);
                $('.modal-backdrop').fadeOut(500);
            });

            $(document).ready(function() {
                exitMessageDisplayed = false;
                $(document).mousemove(function(e) {
                    if(e.pageY <= 5)
                    {
                        if(!exitMessageDisplayed){
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
            function randa(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            var c=randa(101,110);
            $("#copiesa").html(c);
            function copiesa(){
                var el = $("#copiesa");
                var left = parseInt($(el).html());
                left = left < 250 ? left + randa(-1,3) : left - randa(1,3);
                $(el).html(left);
                setTimeout('copiesa()', randa(6000,9000));
            }
            $(function(){
                copiesa();
            });
        </script>
        <script>
            function rand(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            function copies(){
                var el = $("#copies");
                var left = parseInt($(el).html());
                left = left > 5 ? left - rand(1,3) : left - rand(-2,2);
                if(left < 2) {
                    $(el).html(1);
                }
                else $(el).html(left);
                setTimeout('copies()', rand(6000,9000));
            }
            $(function(){
                copies();
            });
        </script>
        <script src="/landing-assets/quantum/js/jquery.validate.min.js"></script>
        <script src="/landing-assets/quantum/js/main.js"></script>

@endsection