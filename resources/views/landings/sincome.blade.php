@extends('layouts.main')


@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/sincome/css/grid.css" />
    <link rel="stylesheet" href="/landing-assets/sincome/css/custom.css" />

@endsection

@section("content")

<div class="container-fluid" id="main-content">
        <div class="">
            <div class="row logo-row">
                @include('partials.logo')
            </div>

            <div id="header">
                <div class="container">
                    <div class="col-lg-12">
                        <img id="logo" src="//72option.com/wp-content/uploads/2015/02/72_logo_s.png" alt="72 Option™">
                    </div>
                </div>
            </div>

            <div id="content-wrapper">
                <div class="container for_bg_pic">
                    <div class="col-lg-8">
                        <div id="content">
                            <h1 class="padder">Trading has never been easier!</h1>
                            <h3 class="hiddeno">Use our state-of-the-art technology and world-class <br> education to profit from the financial markets like a pro</h3>
                            <h2 class="hiddeno">Open a free account today to take the next step</h2>
                            <h3 class="upc boldo padder2 grayer"><span class="bordo grayer_bordo">No previous experience needed!</span></h3></div>
                    </div><!-- /col-lg-6 -->
                    <div class="col-lg-4 brusht">
                        <div id="sidebar">
                            <div id="form-wrap">
                                <div >
                                    <h5>Please Fill Out The Registration Form:</h5>
                                </div>
                                <form method="post" action="" name="" id="registration_form" name="accountForm">
                                    <input class="span12" type="text" name="name" id="name" placeholder="Name" style="cursor: auto; " >
                                    <input class="span12" type="email" name="email" id="email" placeholder="E-mail">
                                    <div>
                                        <input class="ph_number" type="text" name="phone" id="phone" placeholder="Phone">
                                        <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                    </div>

                                    <style rel="stylesheet">
                                        .invisible{ display: none;}
                                        img#preloader { margin-bottom: 10px; width: 50px; }
                                    </style>


                                    <input type="submit" class="btn btn-default bttn" value="SUBMIT"/>

                                </form>

                                <br clear="all">
                            </div>
                        </div><!-- /sidebar -->

                    </div><!-- /col-lg-6 -->

                    <div class="col-lg-4">
                        <div class="testim_unit roundedo">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testim_unit roundedo">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testim_unit roundedo">

                        </div>
                    </div>

                    <div class="col-lg-6 fc_off">

                        <div id="content">

                            <ul>
                                <li>Up to 100% welcome bonus</li>
                                <li>More than 100 asset for trading</li>
                                <li>No commissions, no spreads, no fees involved</li>
                            </ul>

                        </div>

                    </div>

                </div> <!-- /container -->

            </div><!-- /content-wrapper -->
            <div id="copyright">
                <div class="container">
                    Copyright &copy; 2017 72 Option™ - All rights reserved | <a href="//www.72option.com/terms-of-conditions/" target="_blank">Terms&Conditions</a>
                </div>
            </div>
            <div id="disclamer"><div class="container">Risk disclosure: When using information obtained through this web-site, remember that trading on financial markets, such as forex, stock, derivative and commodities exchanges, carries a high level of risk and is not suitable for all investors. When using a leverage, there is a possibility of losing funds, exceeding your initial investment. Therefore, you should not risk more than you can afford to lose. Before deciding to trade, you should be fully aware of your exposure to risk. If you do not fully understand and acknowledge the above, you should seek the advice of independent consultants.</div></div>

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

@endsection

