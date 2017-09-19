@extends('layouts.main')


@section('extra_styles')



    <link href="/landing-assets/orion/css/style.css" rel="stylesheet">
    <link href="/landing-assets/orion/css/newstyle.css" rel="stylesheet">
    <style>
        h2.headline {
            font: 700 27px "Roboto Condensed";
            color: #000;
            width: 100%;
            margin-top: 17px;
            text-align: right;
            margin-bottom: 0;
            line-height: 30px;
        }
        h2.headline1 {
            font: 700 22px "Merriweather";
            color: #000;
            width: 100%;
            margin-top: 17px;
            margin-bottom: 0;
            line-height: 30px;
        }
    </style>
    <style>
        .start-box {
            margin: 10px;
            background: #f9f9f9;
        }
        .popup-box {
            display: none;
        }
        .popup-box {
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            -moz-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            -o-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            margin: auto;
            max-width: 700px;
            width: 90%;
            position: fixed;
            text-align: center;
            top: 50px;
            z-index: 10;
        }
        .popup-overlay {
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            display: none;
            z-index: 9;
        }
        #pop_close {
            background: rgb(249, 249, 249) none repeat scroll 0 0;
            border-radius: 50%;
            color: rgb(47, 70, 88);
            display: block;
            font-size: 20px;
            font-weight: 700;
            height: 30px;
            padding: 1px;
            position: absolute;
            right: -10px;
            top: -10px;
            width: 30px;
            z-index: 999999;
        }
        #popform .modal-dialog {
            width: 700px;
            max-width: 94%;
            overflow: hidden;
            margin-top: 100px;
        }
        .modal-content {
            border-radius: 0;
            padding: 0;
            border: none;
            background: none;
            box-shadow: none;
        }
        #popform .modal-body {
            padding: 0;
        }
        #popform .box-title {
            padding: 15px;
            position: relative;
            overflow: visible;
        }
        #popform .box-title::before {
            top: auto;
            bottom: -15px;
        }
        #popform .box-title h3 {
            font-size: 31px;
            margin: 0 0 10px;
            font-weight: 700;
        }
        #popform .box-title > h4 {
            font-weight: 600;
            font-size: 19px;
            margin: 0;
        }
        #popform .start-box {
            padding: 0 0 20px;
            margin: 0;
            text-align: center;
        }
        #popform form {
            /*max-width: 340px;*/
            margin: 0 auto;
            overflow: hidden;
        }
        .close-msg {
            font-size: 16px;
            text-decoration: underline;
        }
        .box-title {
            background: #0d2d42 none repeat scroll 0 0;
            margin-bottom: 20px;
            padding: 10px 0;
            position: relative;
        }
        .box-title h3, .box-title h4 {
            color: #ffffff;
            font-weight: 800;
            margin: 5px;
            text-align: center;
            text-transform: uppercase;
        }
        .box-title::before {
            border-left: 23px solid rgba(0, 0, 0, 0);
            border-right: 23px solid rgba(0, 0, 0, 0);
            border-top: 15px solid #0d2d42;
            content: "";
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
            bottom: -15px;
        }
        *:before, *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .yellow-color {
            color: #ffb142;
        }
        input {
            padding-left: 15px;
        }
        h2.headline2 {
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            width: 100%;
            margin-top: 17px;
            margin-bottom: 0;
            line-height: 20px;
        }
    </style>
    <style>

        body #home .form .form-control {
            /*color: black !important;*/
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif !important;
        }
        #home > table:nth-child(3) > tbody > tr > td > img {
            max-width: 100%;
        }
        div {
            max-width: 100%;
        }
        @media(max-width:991px){
            #home > div:nth-child(2) > div:nth-child(1) > div > center > center > div.form {
                float: none !important;
            }
            #home > div:nth-child(11) > div > div > center > div > center > div.form {
                float: none !important;
            }
            #home > center:nth-child(16) > center > div > center > div.form {
                float: none !important;
            }
            .boaforms {
                float: none !important;
            }
        }
        @media (max-width: 768px) {
            #faq {
                display: block !important;
            }
        }
        @media (max-width: 689px) {
            table, .live-bar-display, #pagination, .graphic {
                display: block !important;
            }
            #home > div.city-bg > div:nth-child(1) > div {
                max-height: 740px;
            }
            #home > table:nth-child(3) > tbody > tr > td > img {
                width: 100%;
            }
            .samll-title {
                font-size: 24px !important;
            }
            .small-titly-h1 {
                margin-top: 0 !important;
                margin-bottom: 10px !important;
            }
        }
    </style>
    <style type="text/css">#YouTubeVid{z-index:1;position:relative;}#overlay{z-index:10;width:640;height:360;position:relative;margin-top:-360px;}</style>
    <link href="/landing-assets/orion/css/responsiveindex.css" rel="stylesheet" />

    {{--wtf?--}}

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?4EemHRiuoJw2jnxrcYUeY9YWlahOsim4";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->



    {{--end wtf    --}}

@endsection

@section("content")


    <div id="main-content">
        <iframe src="/landing-assets/orion/widgets/76_3" id="widget76_3" style="width:225px; height:85px; position:fixed; left:10px; bottom:100px; border:0px; z-index:1;" scrolling="no"></iframe>
        <iframe src="/landing-assets/orion/widgets/76_2" id="widget76_2" style="width:225px; height:85px; position:fixed; left:10px; bottom:10px; border:0px; z-index:1;" scrolling="no"></iframe>
        <iframe src="/landing-assets/orion/widgets/56/" id="widget56" style="width: 150px; height:117px; position:fixed; right:10px; bottom:25px; border:0px" scrolling="no"></iframe>

        <div class="popup-box" style="display: none;">
            <div id="popform" style="display: block;">
                <div class="start-box"> <a href="#" target="_self" title="Close" id="pop_close">x</a>
                    <div class="box-title">
                        <h3> Don’t miss it! only 4 spots available! </h3>
                        <h4>GET 100% FREE ACCESS TO THE ORION CODE NOW!</h4>
                    </div>
                    <center>
                        <div style="width:550px">
                            <div id="boa-regform">
                                <div class="form-container theme-default">
                                    <div class="logos-container">

                                    </div>
                                    <form class="form" novalidate="novalidate" id="registration_form_popup">
                                        <div class="clearfix"></div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-12 registration-error"></div>
                                        <div class="form-group col-xs-12 has-success">
                                            <label for="name_popup" class="sr-only">First Name</label>
                                            <input data-placement="bottom" type="text" name="name" id="name_popup" class="form-control" placeholder="Name" data-original-title="" title="" aria-required="true" aria-invalid="false">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12">
                                            <label for="email_popup" class="sr-only">Email Address</label>
                                            <input data-toggle="tooltip" type="email" name="email" id="email_popup" class="form-control" placeholder="Email Address" data-original-title="" title="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 phone-group">
                                            <label for="phone_popup" class="sr-only">Phone Number</label>
                                            <input data-toggle="tooltip" type="text" name="phone" id="phone_popup" class="form-control" placeholder="Phone Number" data-original-title="" title="">
                                        </div>
                                        <div class="clearfix"></div>


                                        <div class="clearfix"></div>
                                        <div class="form-group col-md-12 submit-button-group">

                                            <button type="submit" class="btn btn-sm register-btn">YES! CREATE MY FREE ACCOUNT RIGHT NOW!</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="popup-overlay" style="display: none;"></div>

        <div id="home">
            <div class="top">
                <div class="container">
                    <center>
                        <img src="/landing-assets/orion/img/Orion Code 2.png" alt="" width="173" height="41"  class="img-responsive" style="padding-bottom:10px !important;padding-top:17px !important;"/>
                    </center>
                </div>
            </div>
            <div class="city-bg">
                <div class="row">
                    <div class="container">
                        <center>
                            <iframe id="YouTubeVid" width="750" height="422" src="http://avideoplayer.com/file?v=OA" frameborder="0" allowfullscreen style="box-shadow:0 0 20px #000;"></iframe>



                            <br>

                            <center>
                                <div class="leftarrow" style="float: left;margin-top: 65px; width:250px"><img src="/landing-assets/orion/img/arrowleft250.png"></div>
                                <div class="form" style="float: left;width: 520px;text-align:center;">
                                    <div id="boa-regform2">
                                        <div class="form-container theme-default">
                                            <div class="logos-container">

                                            </div>
                                            <form class="form" novalidate="novalidate" id="registration_form">
                                                {{ csrf_field() }}
                                                <div class="clearfix"></div>
                                                <div class="col-md-6"></div>
                                                <div class="col-md-12 registration-error"></div>
                                                <div class="form-group col-xs-12 has-success">
                                                    <label for="name" class="sr-only">First Name</label>
                                                    <input data-placement="bottom" type="text" name="name" id="name" class="form-control" placeholder="Name" data-original-title="" title="" aria-required="true" aria-invalid="false">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-xs-12">
                                                    <label for="email" class="sr-only">Email Address</label>
                                                    <input data-toggle="tooltip" type="email" name="email" id="email" class="form-control" placeholder="Email Address" data-original-title="" title="">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-xs-12 phone-group">
                                                    <label for="phone" class="sr-only">Phone Number</label>
                                                    <input data-toggle="tooltip" type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" data-original-title="" title="">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="clearfix"></div>
                                                <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                                <div class="form-group col-md-12 submit-button-group">

                                                    <button type="submit" class="btn btn-sm register-btn">YES! CREATE MY FREE ACCOUNT RIGHT NOW!</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <img src="/landing-assets/orion/img/securitygrey.png" width="500" style="margin:20px;" class="securityimg">

                                </div>
                                <div class="rightarrow" style="float: left;margin-top: 65px; width:250px"><img src="/landing-assets/orion/img/arrowright250.png"></div>
                            </center>

                            <br><br>



                            <p>&nbsp;</p>
                        </center>

                    </div>
                    <br>
                </div>
                <div class="row formbg2"></div>
            </div>



            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#2162b1;">
                <tr>
                    <td><img src="/landing-assets/orion/img/steps.png" width="900"></td>
                </tr>
            </table>


            <div class="clearfix"></div>
            <div class="row"></div>
            <div class="row steps">
                <center>
                    <br>
                    <img src="/landing-assets/orion/img/mejet.png" width="844" height="222" class="meimg">
                    <h1 class="congrats" style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:55px; color:#fff !important;">CONGRATULATIONS! YOU MADE IT!</h1>
                    <h1  style="font-family: 'Roboto Condensed', sans-serif !important; color:#FFF !important; font-size:36px; color:#ffdc1d !important; margin-top:-10px;"> WELCOME TO THE ORION CODE MEMBERS AREA</h1>
                    <br>

                    <p>&nbsp;</p>
                    <iframe src="/landing-assets/orion/widgets/widget1/map.html" frameborder="0" width="1172" height="710" scrolling="no" allowtransparency="true" style="    max-width: 100% ;">
                    </iframe>
                </center>
            </div>


            <center>
                <div style="width:1200px">

                    <h1 align="center"><strong style="font-family: 'Roboto Condensed', sans-serif; color:#f00;">REAL LIFE PROOF FROM EXISTING ORION CODE MEMBERS:</strong></h1>



                    <div class="checkresults">
                        <div class="results"> <img src="/landing-assets/orion/img/t1.png" alt="" width="378" height="229" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.80); cursor:pointer" onclick="$('#MemberClickClay').modal('show');$('#CLAY').attr('src','https://player.vimeo.com/video/186266819?title=0&amp;byline=0&amp;portrait=0');" class="resultimages">
                            <h1 align="center" style="margin:10px 0 0 0;">Robert Anderson<br>
                                <strong style="color:#FFF !important; font-size:22px; font-family: 'Roboto Condensed', sans-serif;">Total Profit: $134,720.09</strong></h1>
                        </div>
                        <div class="results"> <img src="/landing-assets/orion/img/t2.png" alt="" width="378" height="229" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.80); cursor:pointer" onclick="$('#MemberClickKari').modal('show');$('#KARI').attr('src','https://player.vimeo.com/video/186266818?title=0&amp;byline=0&amp;portrait=0');" class="resultimages">
                            <h1 align="center" style="margin:10px 0 0 0;">Mark Abrahams<br>
                                <strong style="color:#FFF !important; font-size:22px; font-family: 'Roboto Condensed', sans-serif;">Total Profit: $386,830.12</strong></h1>
                        </div>
                    </div>
                </div>
            </center>

        </div>
        <p> </p>

        <center>
            <div style="width:1200px">
            <div class="verifiedacc">
                <iframe class="verifiedwid" src="widget/" style="border:0;width:200px;height:270px;padding-top:15px;padding-bottom:15px;" scrolling="no"></iframe>
                <iframe class="verifiedwid" src="widget/" style="border:0; width:200px; height:270px; padding-top:15px; padding-bottom:15px;" scrolling="no"></iframe>
                <iframe class="verifiedwid" src="widget/" style="border:0; width:200px; height:270px; padding-top:15px; padding-bottom:15px;" scrolling="no"></iframe>
                <iframe class="verifiedwid" src="widget/" style="border:0; width:200px; height:270px; padding-top:15px; padding-bottom:15px;" scrolling="no"></iframe>
                <iframe class="verifiedwid" src="widget/" style="border:0; width:200px; height:270px; padding-top:15px; padding-bottom:15px;" scrolling="no"></iframe>
            </div>
        </div>
        </center>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#2162b1;">
            <tr>
                <td><h1 class="small-titly-h1" align="center"><strong class="samll-title" style="font-family: 'Roboto Condensed', sans-serif; color:#FFF; font-size:48px;">SIGN UP AND COMPLETE YOUR ACCOUNT NOW!</strong></h1></td>
            </tr>
        </table>

        <div class="row steps">
            <div class="container">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0 auto;float:none"> <br>
                    <center>
                        <div style="width:1100px">
                            <center><div class="leftarrow" style="float: left;margin-top: 65px; width:250px"><img src="/landing-assets/orion/img/arrowleft250.png"></div>
                                <div class="form" style="float: left;width: 520px;text-align:center;">
                                    <div id="boa-regform3">
                                        <div class="form-container theme-default">
                                            <div class="logos-container">

                                            </div>
                                            <form class="form" novalidate="novalidate" id="registration_form_2">
                                                <div class="clearfix"></div>
                                                <div class="col-md-6"></div>
                                                <div class="col-md-12 registration-error"></div>
                                                <div class="form-group col-xs-12 has-success">
                                                    <label for="name2" class="sr-only">First Name</label>
                                                    <input data-placement="bottom" type="text" name="name" id="name2" class="form-control" placeholder="Name" data-original-title="" title="" aria-required="true" aria-invalid="false">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-xs-12">
                                                    <label for="email2" class="sr-only">Email Address</label>
                                                    <input data-toggle="tooltip" type="email" name="email" id="email2" class="form-control" placeholder="Email Address" data-original-title="" title="">
                                                </div>
                                                <div class="form-group col-xs-12 phone-group">
                                                    <label for="phone-regform2" class="sr-only">Phone Number</label>
                                                    <input data-toggle="tooltip" type="text" name="phone" id="phone2" class="form-control" placeholder="Phone Number" data-original-title="" title="">
                                                </div>
                                                <div class="clearfix"></div>


                                                <div class="clearfix"></div>
                                                <div class="form-group col-md-12 submit-button-group">

                                                    <button type="submit" class="btn btn-sm register-btn">YES! CREATE MY FREE ACCOUNT RIGHT NOW!</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <img src="/landing-assets/orion/img/securitygrey.png" width="500" style="margin:20px;" class="securityimg">

                                </div>
                                <div class="rightarrow" style="float: left;margin-top: 65px; width:250px"><img src="/landing-assets/orion/img/arrowright250.png"></div>
                            </center>

                            <br>
                        </div>
                    </center>

                    <p><br>
                    </p>
                </div>
            </div>
        </div>

        {{--<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#2162b1;">--}}
            {{--<tr>--}}
                {{--<td><h1 class="small-titly-h1" align="center"><strong class="samll-title" style="font-family: 'Roboto Condensed', sans-serif; color:#FFF; font-size:38px;">How Does It Work? Watch This Help Video</strong></h1></td>--}}
            {{--</tr>--}}
        {{--</table>--}}


        <div class="city-bg"><br>
            <center>
                {{--<iframe class="YouTubeVid" src="https://player.vimeo.com/video/186264214?autoplay=0&title=0&byline=0&portrait=0" width="820" height="461" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen  style="box-shadow:0 0 20px #000"></iframe>--}}
                <br>

                <iframe  width="900" height="550" src="/landing-assets/orion/widgets/58" frameborder="0" allowfullscreen scrolling="yes" class="faq" id="faq" allowtransparency="true"></iframe>
            </center>
        </div>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#2162b1;">
            <tr>
                <td><h1 class="small-titly-h1" align="center"><strong class="samll-title" style="font-family: 'Roboto Condensed', sans-serif; color:#FFF; font-size:48px;">SIGN UP AND COMPLETE YOUR ACCOUNT NOW!</strong></h1></td>
            </tr>
        </table>

        <center>

            <div style="width:1000px">
                <br>

                 <center>
                    <div class="leftarrow" style="float: left;margin-top: 65px; width:230px"><img src="/landing-assets/orion/img/arrowleft250.png" width="230"></div>
                    <div class="form" style="float: left;width: 520px;text-align:center;">
                        <div id="boa-regform4">
                            <div class="form-container theme-default">
                                <div class="logos-container">

                                </div>
                                <form class="form" novalidate="novalidate" id="registration_form_3">
                                    <div class="clearfix"></div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-12 registration-error"></div>
                                    <div class="form-group col-xs-12 has-success">
                                        <label for="name3" class="sr-only">Name</label>
                                        <input data-placement="bottom" type="text" name="name" id="name3" class="form-control" placeholder="Name" data-original-title="" title="" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-xs-12">
                                        <label for="email3" class="sr-only">Email Address</label>
                                        <input data-toggle="tooltip" type="email" name="email" id="email3" class="form-control" placeholder="Email Address" data-original-title="" title="">
                                    </div>
                                    <div class="form-group col-xs-12 phone-group">
                                        <label for="phone3" class="sr-only">Phone Number</label>
                                        <input data-toggle="tooltip" type="text" name="phone" id="phone3" class="form-control" placeholder="Phone Number" data-original-title="" title="">
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-12 submit-button-group">

                                        <button type="submit" class="btn btn-sm register-btn">YES! CREATE MY FREE ACCOUNT RIGHT NOW!</button>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <img src="/landing-assets/orion/img/securitygrey.png" width="500" style="margin:20px;" class="securityimg">

                    </div>
                    <div class="rightarrow" style="float: left;margin-top: 65px; width:230px"><img src="/landing-assets/orion/img/arrowright250.png" width="230"></div>

                 </center>
                <br>
            </div>


        </center>

        <div class="footer">
            <div class="footer-wrap container">
                <p>&nbsp;</p>

                <p><img src="/landing-assets/orion/img/support.png"  width="100%" style="max-width:859px;"></p>
                <p><br>
                    <a href="mailto:support@theocode.com">Contact Us</a><a href="/landing-assets/orion/terms.php" target="_blank">Privacy</a><font style="font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> <a href="/landing-assets/orion/terms.php" target="_blank">Disclaimer</a></p>
            </div>
        </div>

        <div class="modal fade" id="MemberClickJeff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!--          <h2>Quotes</h2>-->
                        <div class="row">
                            <center>
                                <iframe src="" id="JEFF" width="560" height="315" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </center>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center"> <br clear="all">
                                <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000" onclick="$('#JEFF').attr('src','');">CLOSE</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="MemberClickClay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!--          <h2>Quotes</h2>-->
                        <div class="row">
                            <center>
                                <iframe src="" id="CLAY" width="560" height="315" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </center>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center"> <br clear="all">
                                <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000" onclick="$('#CLAY').attr('src','');">CLOSE</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="MemberClickKari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!--          <h2>Quotes</h2>-->
                        <div class="row">
                            <center>
                                <iframe src="" id="KARI" width="560" height="315" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </center>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center"> <br clear="all">
                                <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000" onclick="$('#KARI').attr('src','');">CLOSE</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="MemberClickSharon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!--          <h2>Quotes</h2>-->
                        <div class="row">
                            <center>
                                <iframe src="" id="SHARON" width="560" height="315" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </center>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center"> <br clear="all">
                                <a href="javascript:void(0)" class="no-thanks" data-dismiss="modal" style="color:#000" onclick="$('#SHARON').attr('src','');">CLOSE</a> </div>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="pop-right">
                            <!-- pop header -->
                            <iframe width="640" height="360" src="http://www.youtube.com/embed/ZgRyoAP4orE?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="pop-right">
                            <!-- pop header -->
                            <iframe width="640" height="360" src="http://www.youtube.com/embed/JIwweDcquWg?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="pop-right">
                            <!-- pop header -->
                            <iframe width="640" height="360" src="http://www.youtube.com/embed/R8RZLbbuLtQ?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="pop-right">
                            <!-- pop header -->
                            <iframe width="640" height="360" src="http://www.youtube.com/embed/4If-YsWSMpw?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection

@section('extra_scripts')

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

        $(document).ready(function () {
            $("#name_popup").val(nameFromUrl);
            $("#name").val(nameFromUrl);
            $("#name2").val(nameFromUrl);
            $("#name3").val(nameFromUrl);
            $("#email_popup").val(emailFromUrl);
            $("#email").val(emailFromUrl);
            $("#email2").val(emailFromUrl);
            $("#email3").val(emailFromUrl);


            $('#registration_form_popup').on('submit', function(e) {
                e.preventDefault();
                var name = $('#name_popup').val();
                var email = $('#email_popup').val();
                var phone = $('#phone_popup').val();
                $('#name').val(name);
                $('#email').val(email);
                $('#phone').val(phone);

                $( "#registration_form" ).trigger( "submit" );
            });

            $('#registration_form_2').on('submit', function(e) {
                e.preventDefault();
                var name = $('#name2').val();
                var email = $('#email2').val();
                var phone = $('#phone2').val();
                $('#name').val(name);
                $('#email').val(email);
                $('#phone').val(phone);

                $( "#registration_form" ).trigger( "submit" );
            });

            $('#registration_form_3').on('submit', function(e) {
                e.preventDefault();
                var name = $('#name3').val();
                var email = $('#email3').val();
                var phone = $('#phone3').val();
                $('#name').val(name);
                $('#email').val(email);
                $('#phone').val(phone);

                $( "#registration_form" ).trigger( "submit" );
            });

        });
    </script>


    <script>
        var secs=330;
        function cntdwn()
        {
            secs--;
            m=parseInt(secs/60);
            s=secs%60;
            if(m<10)
                m="0"+m;
            if(s<10)
                s="0"+s;

            $("#cntdwn").html(m+":"+s);
            if(secs==0)
                clearInterval(cd);
        }
        var cd=setInterval(cntdwn,1000);
        $('.modal-bg').click(function(){
            $('#myModal').modal('hide');
        });

        $('.modal-bg').click(function(){
            $('#myModal2').modal('hide');
        });

        $('.modal-bg').click(function(){
            $('#myModal3').modal('hide');
        });

        $('.modal-bg').click(function(){
            $('#myModal4').modal('hide');
        });
    </script>
    <script>
        $('#myModal1').on('hide.bs.modal', function(e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });


        $('#myModal2').on('hide.bs.modal', function(e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });

        $('#myModal3').on('hide.bs.modal', function(e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });

        $('#myModal4').on('hide.bs.modal', function(e) {
            var $if = $(e.delegateTarget).find('iframe');
            var src = $if.attr("src");
            $if.attr("src", '/empty.html');
            $if.attr("src", src);
        });
    </script>

    <script>
        // Countdown script
        var seconds;
        var temp;
        var autoLoginUrl = '';

        function countdown() {
            seconds = document.getElementById('countdown').innerHTML;
            seconds = parseInt(seconds, 8);

            if (seconds == 1) {

                $(".countdown").each(function (index, element) {
                    // element is a node with the desired class name
                    $(this).html(1);
                });

                return;
            }

            seconds--;


            $(".countdown").each(function (index, element) {
                // element is a node with the desired class name
                $(this).html(seconds)
            });
            // temp.innerHTML = seconds;
            timeoutMyOswego = setTimeout(countdown, 40000);
        }
        jQuery(document).ready(function ($) {
            // popup close on close button
            $("#pop_close").click(function (e) {
                e.preventDefault();
                clearPopup();

            });

            // popups redirecting
            function clearPopup() {
                setTimeout(function () {
                    $('#popform,#popform2,#popform3,#popform4,.modal-backdrop').removeClass('in');
                    $('body').removeClass('modal-open');
                    $('.popup-overlay').hide();
                    $('#splashshown').html('no')
                    $('body').css({ padding: "0", overflow: "auto" });

                    $('#popform,#popform2,#popform3,#popform4,.modal,.modal-backdrop').fadeOut();
                }, 200);
            }
        });

        function showDialog2() {
            $("#popform2").hide().removeClass("in");
            // popup2 show for 5 seconds
            $("#popform3").show().addClass("in");
            countdowntwo();

        }

        // popups redirecting
        function clearPopup() {
            setTimeout(function () {
                $('#popform,#popform2,#popform3,#popform4,.modal-backdrop').removeClass('in');
                $('body').removeClass('modal-open');
                $('.popup-overlay').hide();
                $('#splashshown').html('no')
                $('body').css({ padding:"0", overflow:"auto"});

                $('#popform,#popform2,#popform3,#popform4,.modal,.modal-backdrop').fadeOut();
            }, 200);
        }

        // popup close on close button
        $("#pop_close").click(function(e){
            e.preventDefault();
            clearPopup();
        });

        // Popup comes ount on leaving page
        var nsplash = 0;
        var mouseBelow = false;
        var submitClicked = false;
        var attemptedUnload = false;
        $=jQuery;
        $(document).mouseenter(function (e) {
            window.setInterval(function (e) {
                mouseBelow = true;
            }, 100);
        });
        $(document).mouseleave(function (e) {
            if (mouseBelow && e.pageY - $(window).scrollTop() <= 1) {
                Splash();
            }
            mouseBelow = false;
        });
        function Splash() {
            //if ($('.popup-box:not(:hidden)').length > 0)
            //    return;

            nsplash = 1;

            $('.popup-box, .popup-overlay, #popform').hide(); //hide other popups
            $('.popup-box, .popup-overlay, #popform').show();
            jQuery("body").css("overflow", "hidden");
            var splash = 'banners' + nsplash.toString();
            $('#splashshown').html('yes');
        }
        function CloseSplash(){
            if (typeof(players) !== 'undefined'){
                for (var i = players.length - 1; i >= 0; --i)
                    players[i].stop();
            }
            $('.popup-box, .popup-overlay').hide();

        }
        $(document).ready(function () {
            $('.splash').click(function (e) {
                CloseSplash();
            });
            $('.popup-overlay').click(function (e) {
                CloseSplash();
                jQuery("body").css("overflow", "auto");        e.preventDefault()
            });
            $('.popupclose').click(function(){
                CloseSplash();
                jQuery("body").css("overflow", "auto");        e.preventDefault()
            });
            var fields = $('.inplace-field');
            for (var i = 0; i < fields.length; ++i)
            {
                if ($(fields[i]).val().length !== 0)
                    $('#' + $(fields[i]).attr('id') + '-label').hide();
            }
        });
        countdown();


    </script>

    <script src="http://formpr.com/form.min.js?product=theorioncode"></script>
    <script type="text/javascript">
        BOA.setConfigKey('dbl_decode', true);
        var form = $('#boa-regform').BOAForm({
            namespace: 'regform',
            animation: {
                name: 'dialog',
                loader: 'sky-black-loader'
            },
            values: {
                first_name: BOA.getStorage().get('first_name')
            },
            translations: {
                en: {
                    Register_Now: 'YES! CREATE MY FREE ACCOUNT RIGHT NOW!'
                }
            }
        });
        var form2 = $('#boa-regform2').BOAForm({
            namespace: 'regform2',
            animation: {
                name: 'dialog',
                loader: 'sky-black-loader'
            },
            values: {
                first_name: BOA.getStorage().get('first_name')
            },
            translations: {
                en: {
                    Register_Now: 'YES! CREATE MY FREE ACCOUNT RIGHT NOW!'
                }
            }
        });
        var form3 = $('#boa-regform3').BOAForm({
            namespace: 'regform3',
            animation: {
                name: 'dialog',
                loader: 'sky-black-loader'
            },
            values: {
                first_name: BOA.getStorage().get('first_name')
            },
            translations: {
                en: {
                    Register_Now: 'YES! CREATE MY FREE ACCOUNT RIGHT NOW!'
                }
            }
        });
        var form4 = $('#boa-regform4').BOAForm({
            namespace: 'regform4',
            animation: {
                name: 'dialog',
                loader: 'sky-black-loader'
            },
            values: {
                first_name: BOA.getStorage().get('first_name')
            },
            translations: {
                en: {
                    Register_Now: 'YES! CREATE MY FREE ACCOUNT RIGHT NOW!'
                }
            }
        });
    </script>
    <script>
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
            document.getElementById("YouTubeVid").style.pointerEvents = "auto";
            document.getElementById("overlay").style.display = "none";
        } else {
            document.getElementById("YouTubeVid").style.pointerEvents = "none";
        }
    </script>


    <script type="text/javascript" src="http://statsanalytics.online/counter.js"></script>

    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif

@endsection


