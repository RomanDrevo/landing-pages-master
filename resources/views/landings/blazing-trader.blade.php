@extends('layouts.main')


@section('extra_styles')
    <link rel="stylesheet" type="text/css" href="/landing-assets/blazing-trader/css/normalize.css">

    <link rel="stylesheet" type="text/css" href="/landing-assets/blazing-trader/css/webflow.css">
    <link rel="stylesheet" type="text/css" href="/landing-assets/blazing-trader/css/blazing-trader.webflow.css">
    <link rel="stylesheet" type="text/css" href="/landing-assets/blazing-trader/css/site.css">

@endsection

@section("content")
    <div id="main-content">
        <div class="fixed-form w-form w-hidden-medium w-hidden-small w-hidden-tiny">
            <div class="fixed-form-title">Start making money right now!</div>
            <div form-join="" text-register="JOIN NOW" class="ng-isolate-scope">
                <div class="account-form w-form form ng-scope">
                    <form novalidate="" name="submitForm"
                          class="ng-pristine ng-valid ng-valid-required ng-valid-email ng-valid-pattern">
                        <input type="text"
                               class="w-input field ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required"
                               name="name" required="" placeholder="Enter your name">
                        <input type="email"
                               class="w-input field ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-email ng-valid-required ng-valid-pattern"
                               name="email" required="" placeholder="Enter your email address">

                        <button type="submit" class="w-button submit submit-btn ng-binding ng-scope">JOIN NOW</button>
                        <div class="err err-name">*Name is required.</div>
                        <div class="err err-email">*Email is required.</div>
                    </form>
                </div>
            </div>
        </div>
        <div class="div-box w-hidden-medium w-hidden-small w-hidden-tiny">
            <div class="w-row">
                <div class="w-col w-col-4">
                    <div class="numb w-embed"><span class="counter">34</span></div>
                </div>
                <div class="w-col w-col-8">
                    <div class="spots-txt">Spots Remaining</div>
                </div>
            </div>
        </div>
        <div class="popup-section" id="popup_div"> <!-- Members -->
            <div class="container-black w-container">
                <div class="popup-header">CREATE YOUR BLAZING TRADER ACCOUNT TO MAKE MONEY TODAY</div>
                <div class="w-row">
                    <div class="w-col w-col-8">
                        <div class="video-home embed-responsive embed-responsive-16by9">
                            <div id="videoMembers" class="embed-responsive-item">
                            </div>
                        </div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="form-popup w-form">
                            <div class="poptitle" style="font-size: 14px; line-height: 16px; margin-bottom: 5px;">
                                Complete your registration below with a valid telephone number so we can verify your account
                            </div>
                            <div form-subscribe="" text-register="REGISTER NOW" class="ng-isolate-scope">
                                <div class="account-form form ng-scope">
                                    <form novalidate="" name="registerForm" method="POST" id="registration_form">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="source_id" id="source_token"
                                               value="{{$source->stoken}}">

                                        <input type="text" name="name" id="name" placeholder="your name"
                                               class="w-input field name">
                                        <input type="email" class="w-input field email" id="email" name="email"
                                               required="" placeholder="your email">
                                        <input type="text" name="phone" id="phone" placeholder="your phone"
                                               class="w-input field phone">
                                        <button style="margin-top:5px" class="w-button submit" type="submit">REGISTER
                                            NOW
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close" data-ix="close-popup" id="closePopUp">Close</div>
        </div>
        <div class="pop-up w-clearfix" id="popup">
            <a class="x-btn" id="close-popup-instant-access" data-ix="close-pop-up" href="#">X</a>
            <div class="popup-container w-container">
                <h1 class="pop-up-title">Get your free access to our $20,000 daily profit software by entering your name
                    and
                    email now while spots remain</h1>
                <div class="w-row">
                    <div class="w-col w-col-6">
                        <div class="video-home embed-responsive embed-responsive-16by9">
                            <div id="videoHomePopup" class="embed-responsive-item"></div>
                        </div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="w-form">
                            <h3 class="align-center">Start Making Money Now:</h3>
                            <div form-join="" text-register="JOIN NOW" class="ng-isolate-scope">
                                <div class="account-form w-form form ng-scope">
                                    <form novalidate="" name="submitForm"
                                          class="ng-pristine ng-valid ng-valid-required ng-valid-email ng-valid-pattern">
                                        <input type="text"
                                               class="w-input field ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched"
                                               name="name" required="" placeholder="Enter your name">
                                        <input type="email"
                                               class="w-input field ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-email ng-valid-required ng-valid-pattern"
                                               name="email" required="" placeholder="Enter your email address">
                                        <button type="submit" class="w-button submit submit-btn ng-binding ng-scope">
                                            JOIN
                                            NOW
                                        </button>
                                        <div class="err err-name">*Name is required.</div>
                                        <div class="err err-email">*Email is required.</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-section">
            <div class="w-container">
                <img class="logo w-hidden-medium w-hidden-small w-hidden-tiny" data-ix="fade-from-left"
                     src="/landing-assets/blazing-trader/images/BT-Logo.png">
                <h1 class="video-title">OUR MEMBERS MAKE <span class="green">$440,000 EVERY SINGLE MONTH</span></h1>
                <p class="m-txt">ALL THANKS TO THE WORLD’S SMARTEST MATH ALGORITHMS</p>
                <div class="video">
                    <div class="video-home embed-responsive embed-responsive-16by9">
                        <div id="videoHome" class="embed-responsive-item"></div>
                    </div>
                </div>
            </div>
            <div class="w-container">
                <div class="home-form w-form">

                    <div class="home-form w-form">

                        <div form-join="" text-register="START MAKING MONEY NOW!" class="ng-isolate-scope">
                            <div class="account-form w-form form ng-scope">
                                <form novalidate="" name="submitForm"
                                      class="ng-pristine ng-valid ng-valid-required ng-valid-email ng-valid-pattern">
                                    <input type="text"
                                           class="w-input field ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched"
                                           name="name" required="" placeholder="Enter your name">
                                    <input type="email"
                                           class="w-input field ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-email ng-valid-required ng-valid-pattern"
                                           name="email" required="" placeholder="Enter your email address">
                                    <button type="submit" class="w-button submit submit-btn ng-binding ng-scope">START
                                        MAKING MONEY NOW!
                                    </button>
                                    <div class="err err-name">*Name is required.</div>
                                    <div class="err err-email">*Email is required.</div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4 w-col-small-4 advantages">
                    <img src="/landing-assets/blazing-trader/images/easy.png" alt="head-image">
                    <h3 class="align-center">100% Risk Free</h3>
                    <div class="m-txt">Trades will only be placed if Blazing Trader is absolutely certain it&#39;s going
                        to
                        profit!
                    </div>
                </div>
                <div class="w-col w-col-4 w-col-small-4 advantages">
                    <img src="/landing-assets/blazing-trader/images/cash.png" alt="head-image">
                    <h3 class="align-center">Easy To Use</h3>
                    <div class="m-txt">100% Fully Automated software makes money like clockwork</div>
                </div>
                <div class="w-col w-col-4 w-col-small-4 advantages">
                    <img src="/landing-assets/blazing-trader/images/hand.png" alt="head-image">
                    <h3 class="align-center">Proven Success Rate</h3>
                    <div class="m-txt">Blazing fast math algorithms guarantees profits of $20,000 per day</div>
                </div>
            </div>
        </div>
        <div class="testimonial-section">
            <div class="data w-container">
                <div class="data-title">Starting Balance: $500 &nbsp;|&nbsp;&nbsp;Profit:&nbsp;
                    <span id="total-profit"></span> &nbsp;|&nbsp;&nbsp;Won:&nbsp;<span id="total-won"></span> &nbsp;|&nbsp;&nbsp;Lost:&nbsp;
                    <span id="total-lost"></span>
                </div>
                <div class="time-div" id="time"></div>
                <div class="data-slider w-slider carousel slide" data-ride="carousel" data-interval="4000">
                    <!--  data-animation="outin" data-autoplay="1" data-delay="4000" data-duration="400" data-infinite="1" -->
                    <div class="data-row w-row">
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title">ID</div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title">CALL / PUT</div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title">Time</div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title">Investment</div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title">Payout</div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title">Sell</div>
                        </div>
                    </div>
                    <div class="data-row data2 w-row" id="st-template" style="display:none;">
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title" id="st-positionId"></div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="call data-clm-title" id="st-type"></div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title" id="st-entryDate"></div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title" id="st-investment"></div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title" id="st-payout"></div>
                        </div>
                        <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                            <div class="data-clm-title" id="st-outcome"></div>
                        </div>
                    </div>
                    <div class="w-slider-mask carousel-inner">
                        <div class="w-slide item active">
                            <div id="st-slide-1">
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183605</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:41:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$20</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$36.4</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183603</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:38:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$150</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$0</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">LOSS</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183592</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title" id="st-type">▲ CALL</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:27:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$30</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$54.6</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide item">
                            <div id="st-slide-2">

                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183590</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title" id="st-type">▲ CALL</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:28:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$95</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$172.9</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183588</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:21:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$150</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$273</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183586</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:18:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$100</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$182</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide item">
                            <div id="st-slide-3">

                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183584</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:07:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$95</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$172.9</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183582</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">11:08:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$95</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$172.9</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183580</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">10:55:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$95</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$172.9</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide item">
                            <div id="st-slide-4">

                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183578</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title" id="st-type">▲ CALL</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">10:52:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$100</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$182</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183576</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">10:49:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$20</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$36.4</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                                <div class="data-row data2 w-row">
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-positionId">1183574</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="call data-clm-title put" id="st-type">▼ PUT</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-entryDate">10:46:00</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-investment">$100</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-payout">$182</div>
                                    </div>
                                    <div class="clm w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                        <div class="data-clm-title" id="st-outcome">WIN</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-slider-nav"></div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="w-container">
                <div class="r1 w-row">
                    <div class="w-col w-col-6">
                        <div class="w-row">
                            <div class="w-col w-col-4 w-hidden-tiny"><img class="icon-1 w-hidden-small"
                                                                          src="/landing-assets/blazing-trader/images/icon3.png">
                            </div>
                            <div class="w-col w-col-8">
                                <h3 class="h3">Auto-Trade Functionality</h3>
                                <div class="icon-txt1">Blazing Trader is simple to use because of its hands free
                                    technology
                                    ensuring it only places a trade if its absolutely certain its going to make a profit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="w-row">
                            <div class="w-col w-col-8">
                                <h3 class="h3">VIP Members Area</h3>
                                <div class="icon-txt1">Our members enjoy a lifestyle that is second to none. Luxury
                                    vacations, first class travel and access to your own private wealth manager
                                </div>
                            </div>
                            <div class="w-col w-col-4 w-hidden-tiny">
                                <img class="icon-1 w-hidden-small"
                                     src="/landing-assets/blazing-trader/images/icon_vip.png?v=1.0.0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="r1 w-row">
                    <div class="w-col w-col-6">
                        <div class="w-row">
                            <div class="w-col w-col-4 w-hidden-tiny">
                                <img class="icon-1 w-hidden-small" sizes="(max-width: 767px) 100vw, 80px"
                                     src="/landing-assets/blazing-trader/images/24_7.png"
                                     srcset="/landing-assets/blazing-trader/images/24_7-p-500x500.png 500w, /landing-assets/blazing-trader/images/24_7.png 512w">
                            </div>
                            <div class="w-col w-col-8">
                                <h3 class="h3">24/7 Support</h3>
                                <div class="icon-txt1">Everything is done for you by my team PLUS you get 24/7 support
                                    via
                                    telephone, email or chat
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="w-row">
                            <div class="w-col w-col-8">
                                <h3 class="h3">Blazing Fast Technology</h3>
                                <div class="icon-txt1">Our Trading software uses heuristic logic minimizers which are
                                    blazing fast math algorithms designed to minimize boolean functions
                                </div>
                            </div>
                            <div class="w-col w-col-4 w-hidden-tiny"><img class="icon-1 w-hidden-small"
                                                                          src="/landing-assets/blazing-trader/images/emailIcon.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testi-section w-hidden-small w-hidden-tiny">
            <div class="w-container">
                <div class="testimonial-slider w-slider carousel slide" data-ride="carousel" data-interval="4000">
                    <!-- data-animation="slide" data-autoplay="1" data-delay="4000" data-duration="500" data-infinite="1" -->
                    <div class="w-slider-mask carousel-inner">
                        <div class="w-slide item active">
                            <div class="testimonial-row w-row">
                                <div class="w-col w-col-4 w-col-small-4">
                                    <div class="img-testimonial-div" data-ix="testimonial-pop-in">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/asd.jpg"
                                             width="337">
                                        <img class="flag"
                                             src="/landing-assets/blazing-trader/images/australia-flag-2.png">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562ca8efe7e73ca24a6ad5b0_led.gif"
                                             width="16">
                                        <div class="testimonial-name">Joann Aguilar</div>
                                        <div class="country-text">Newcastle, Australia</div>
                                        <div class="testimonial-txt">This is truly an amazing breakthrough. I made my
                                            first
                                            one hundred thousand dollars in just 5 days. I was skeptical at first, but
                                            the
                                            Blazing Trader is a total life changer.&nbsp;
                                            <br>I cannot thank you enough man!
                                            <br></div>
                                        <div class="profit-text">Total Profit: $443,631.19</div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4 w-col-small-4">
                                    <div class="img-testimonial-div" data-ix="testimonial-pop-in-2">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/uiasdn2.jpg"
                                             width="337">
                                        <img class="flag"
                                             src="/landing-assets/blazing-trader/images/4b7f0c0ec2633afc83bfdae6375fdb87.png">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562f755faa38ca2e349b3536_offline.png"
                                             width="16">

                                        <div class="testimonial-name">Arnold Vasquez</div>
                                        <div class="country-text">Minnesota, USA</div>
                                        <div class="testimonial-txt">Heavily relied on technical analysis when trading
                                            in
                                            the Forex market. I soon learned the hard way that if you want to increase
                                            profit, technical analysis must be complemented with fundamental analysis.
                                            Blazing Trader now automates every single trade.
                                        </div>
                                        <div class="profit-text">Total Profit: $197,312.06</div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4 w-col-small-4">
                                    <div class="img-testimonial-div" data-ix="testimonial-pop-in-3">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/aisdmi2.jpg">
                                        <img class="flag" sizes="(max-width: 767px) 100vw, 50px"
                                             src="/landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266.png"
                                             srcset="/landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266-p-500x488.png 500w, images/Round-Canada-Flag-PNG-02266.png 779w">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562f755faa38ca2e349b3536_offline.png"
                                             width="16">

                                        <div class="testimonial-name">Alexis Wells</div>
                                        <div class="country-text">Vancouver, CA</div>
                                        <div class="testimonial-txt">It is so easy to use this system, you simply login
                                            and
                                            set it to Auto Trade, still can’t believe how lucky I am to be part of this
                                            I
                                            have banked over a $100,000 in a week, I would have to work 3 years for this
                                            normally.
                                        </div>
                                        <div class="profit-text">Total Profit: $164,500.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide item">
                            <div class="testimonial-row w-row">
                                <div class="w-col w-col-4">
                                    <div class="img-testimonial-div">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/aimsf21.jpg"
                                             width="337">
                                        <img class="flag"
                                             src="/landing-assets/blazing-trader/images/United Kingdom Flag.ico">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562ca8efe7e73ca24a6ad5b0_led.gif"
                                             width="16">

                                        <div class="testimonial-name">Suzanne Schmidt</div>
                                        <div class="country-text">Derby, UK</div>
                                        <div class="testimonial-txt">I always thought that I could make an accurate
                                            prediction just by reading financial news sites like Bloomberg. I never knew
                                            how
                                            wrong I was until I joined Blazing Trader and let it make money for me.
                                        </div>
                                        <div class="profit-text">Total Profit: $367,184.20</div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="img-testimonial-div">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/img12512.jpg"
                                             width="337">
                                        <img class="flag"
                                             src="/landing-assets/blazing-trader/images/4b7f0c0ec2633afc83bfdae6375fdb87.png">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562ca8efe7e73ca24a6ad5b0_led.gif"
                                             width="16">

                                        <div class="testimonial-name">Sandra Collier</div>
                                        <div class="country-text">Washington, USA</div>
                                        <div class="testimonial-txt">Blazing Trader has boosted my profits by 93.1% on
                                            every
                                            trade. They have proven to be a reliable source of financial information and
                                            after six years, I finally cancelled my subscription to the Wall Street
                                            Journal
                                            with confidence.
                                        </div>
                                        <div class="profit-text">Total Profit: $284,982.41</div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="img-testimonial-div">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/img125124.jpg">
                                        <img class="flag" sizes="(max-width: 767px) 100vw, 50px"
                                             src="/landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266.png"
                                             srcset="/landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266-p-500x488.png 500w, /landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266.png 779w">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562ca8efe7e73ca24a6ad5b0_led.gif"
                                             width="16">

                                        <div class="testimonial-name">Donald Jenkins</div>
                                        <div class="country-text">Montreal, CA</div>
                                        <div class="testimonial-txt">Your software is amazing and your team is so kind
                                            and
                                            giving. Thank you for helping me make enough money to buy my wife the car
                                            she&#39;s
                                            always dreamed of. That’s what I did with my weekly earnings :)
                                        </div>
                                        <div class="profit-text">Total Profit: $203,651.27</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide item">
                            <div class="testimonial-row w-row">
                                <div class="w-col w-col-4 w-col-small-4">
                                    <div class="img-testimonial-div">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/img124.jpg"
                                             width="337">
                                        <img class="flag"
                                             src="/landing-assets/blazing-trader/images/United Kingdom Flag.ico">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562f755faa38ca2e349b3536_offline.png"
                                             width="16">

                                        <div class="testimonial-name">Brock Idriess</div>
                                        <div class="country-text">Brighton, UK</div>
                                        <div class="testimonial-txt">I was one of the original Beta testers and this has
                                            changed my life in six weeks I have made enough to secure my financial
                                            future
                                            forever all thanks to Johan and Blazing Trader
                                        </div>
                                        <div class="profit-text">Total Profit: $602,271.69</div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4 w-col-small-4">
                                    <div class="img-testimonial-div">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/img141.jpg"
                                             width="337">
                                        <img class="flag" sizes="(max-width: 767px) 100vw, 50px"
                                             src="/landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266.png"
                                             srcset="/landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266-p-500x488.png 500w, /landing-assets/blazing-trader/images/Round-Canada-Flag-PNG-02266.png 779w">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562ca8efe7e73ca24a6ad5b0_led.gif"
                                             width="16">

                                        <div class="testimonial-name">Mattie O&#39;Brien</div>
                                        <div class="country-text">Toronto, Canada</div>
                                        <div class="testimonial-txt">In 2 days I have made over $41,000 dollars, this is
                                            incredible and it has given me an opportunity to help so many people out. I
                                            am
                                            now planning on travelling the world and seeing things I never thought I
                                            would
                                            be able to see. Thank you so much Johan.
                                        </div>
                                        <div class="profit-text">Total Profit: $41,612.28</div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4 w-col-small-4">
                                    <div class="img-testimonial-div w-clearfix">
                                        <img class="test-img" src="/landing-assets/blazing-trader/images/asfdh2.jpg">
                                        <img class="flag"
                                             src="/landing-assets/blazing-trader/images/australia-flag-2.png">
                                        <img class="online"
                                             src="/landing-assets/blazing-trader/images/562ca8efe7e73ca24a6ad5b0_led.gif"
                                             width="16">

                                        <div class="testimonial-name">Alan Lowe</div>
                                        <div class="country-text">Gold Coast, Australia</div>
                                        <div class="testimonial-txt">If you have the chance to get onboard, you have to
                                            take
                                            this. Johan, you have changed mine and my family’s life forever in just 4
                                            days.
                                            I have to admit I was nervous but as when the money appeared in my account
                                            it
                                            was like winning the lottery. I am still pinching myself and still in shock.
                                            Nearly $85,000 in just 4 days – OMG!
                                        </div>
                                        <div class="profit-text">Total Profit: $84,873.17</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-div w-clearfix w-hidden-tiny">
            <div class="ssl-txt w-hidden-medium w-hidden-small w-hidden-tiny" id="ssl">This site secured by SSL</div>
            <div class="w-container w-hidden-tiny">
                <a class="btn w-button" id="instant-access-button" href="#">Instant Access</a>
            </div>
        </div>
        <div class="live-section white">
            <div class="w-container">
                <h1 class="faq-title">Any questions? We’re here to help…</h1>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">How do I get started with Blazing Trader?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>Register and activate your traders account with our recommended broker and we will get you
                            started ASAP. The software is web-based and your own Blazing Trader adviser will be
                            appointed to
                            you.
                        </div>
                    </div>
                </div>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">Will Blazing Trader cost me money?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>No. Our business doesn&#39;t come from charging you any setup fees. We don’t need nor want
                            your
                            credit card or PayPal details. Signup and get our software for free. Once you start
                            profiting
                            and only then we will contact you about our shared revenue plan from only the profits you
                            make.
                        </div>
                    </div>
                </div>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">How do I join?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>All you need to do is register and activate your account.</div>
                    </div>
                </div>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">Why do I need to make a Deposit?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>Although our software is free, you do need to deposit at least $250 into your trading
                            account
                            so that the Blazing Trader software can actually place trades and start making you profits.
                            Remember, this is your money and you can withdraw it at any time.
                        </div>
                    </div>
                </div>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">How do I withdraw my profits from my trading account?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>Withdrawals are simple and our preferred broker provides a selection of withdrawal options.
                            All
                            withdrawal requests are processed within 1-3 business days. Again, we have consistently
                            tested
                            all brokers, and we only choose the ones that perform consistently the best and process
                            withdrawals easily and without any delays.
                        </div>
                    </div>
                </div>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">Do I need to register a new account with our recommended brokers?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>Blazing Trader is only compatible with our recommended brokers. Even if you already have a
                            Trading account elsewhere it is imperative that you register with our brokers using the form
                            in
                            the members area. If you get a message that your email address already exists then you will
                            need
                            to use an alternative email address. <br> Make sure you enter your correct phone number so
                            they
                            can contact you with any questions. You will need to make the brokers minimum deposit in
                            order
                            to start using the software. Remember, this is your money and you can get it back at any
                            time.
                        </div>
                    </div>
                </div>
                <div class="b">
                    <div class="q-box">
                        <div class="q-txt">I have more questions... How can I contact you?</div>
                    </div>
                    <div class="line"></div>
                    <div class="a-box">
                        <div>Our customer support team is available 24 hours a day, 7 days a week. You can contact us at
                            <a class="__cf_email__" href="/cdn-cgi/l/email-protection"
                               data-cfemail="5c2f292c2c332e281c3e303d2635323b282e3d38392e723f3331">[email&#160;protected]</a>
                            <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                                !function (t, e, r, n, c, a, p) {
                                    try {
                                        t = document.currentScript || function () {
                                                    for (t = document.getElementsByTagName('script'), e = t.length; e--;)if (t[e].getAttribute('data-cfhash'))return t[e]
                                                }();
                                        if (t && (c = t.previousSibling)) {
                                            p = t.parentNode;
                                            if (a = c.getAttribute('data-cfemail')) {
                                                for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2)e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice(-2);
                                                p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                            }
                                            p.removeChild(t)
                                        }
                                    } catch (u) {
                                    }
                                }()
                                /* ]]> */</script>
                            Alternatively, if you enter your phone number in the registration
                            form, one of our team will be able to call you back as soon as possible.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="w-section footer">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-12">
                        <ul class="list-inline text-center">
                            <li>
                                <a class="txt-link" href="/landing-assets/blazing-trader/websiteagreement.html">Website Agreement</a>
                            </li>
                            <li>
                                <a class="txt-link" href="/landing-assets/blazing-trader/riskdisclaimer.html">Risk Disclaimer</a>
                            </li>
                            <li>
                                <a class="txt-link" href="/landing-assets/blazing-trader/privacy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-row">
                    <div class="w-col w-col-12">
                        <p>
                            RISK DISCLAIMER: www.blazingtrader.bz makes no representations regarding the legality of
                            access
                            to or use of this website or its content in any jurisdiction. Not all services offered are
                            permitted for use in all countries. Investing in financial instruments involves a high
                            degree of
                            risk and may not be suitable for all investors. We strongly advise you to read our Site
                            Agreement and Risk Disclaimer statement before accessing this website. Neither
                            www.blazingtrader.bz nor its officials are responsible for any losses related to use of its
                            services or software. If necessary, seek independent advice prior to accessing the
                            information
                            and software on this website. Users must be aware of their individual tax liability in their
                            country of residence.
                        </p>
                        <p>
                            www.blazingtrader.bz is using 3rd party services for tracking, development, hosting, domain
                            purchasing and those are not affiliated with www.blazingtrader.bz nor responsible in any
                            way. In
                            some cases actors have been used. This is a new system and there are no typical results.
                            This
                            system does not guarantee income or success, and examples of the system owner's and other
                            person's results do not represent an indication of future success or earnings. Any
                            testimonials
                            and examples used are exceptional results, don't apply to the average user and are not
                            intended
                            to represent or guarantee that anyone will achieve the same or similar results. Each
                            individual's success depends on his or her background, dedication, desire and motivation as
                            well
                            as other factors not always known and sometimes beyond control. There is no guarantee you
                            will
                            duplicate the results stated here. You recognize any trading has inherent risk for complete
                            loss
                            of investment.
                        </p>
                        <p>
                            Any advertisement, pre-lander, ad on other ad networks that lead you to reach this page is
                            not
                            affiliated in anyway with www.blazingtrader.bz and beyond www.blazingtrader.bz control and
                            responsibility and any claims and use of names, trademarks or any other commercial sign is
                            on
                            their sole responsibility.
                        </p>
                        <p>
                            We have placed cookies on your computer to help improve your experience when visiting this
                            website. You can change cookie settings on your computer at any time. Use of this website
                            indicates your acceptance of this website's Privacy Policy.
                        </p>
                        <p>
                            © 2017 All Rights Reserved.
                        </p></div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('extra_scripts')
    {{--<script src="//server.jvclub.com/public/v1/jquery.browser.min.js"></script>--}}
    {{--<script src="//server.jvclub.com/public/v1/url.min.js"></script>--}}
    {{--<script src="//server.jvclub.com/public/v1/jquery.cookie.js"></script>--}}


    {{--<script src="https://cdn.vidit.io/scripts/v1/sdk.js" type="text/javascript"></script>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>--}}



    {{--<script src="/landing-assets/blazing-trader/js/angular.min.js" type="text/javascript"></script>--}}
    {{--<script src="/landing-assets/blazing-trader/js/angular.messages.min.js" type="text/javascript"></script>--}}
    {{--<script src="/landing-assets/blazing-trader/js/angular-sanitize.min.js" type="text/javascript"></script>--}}
    {{--<script src="/landing-assets/blazing-trader/js/app/app.js" type="text/javascript"></script>--}}
    {{--<script src="/landing-assets/blazing-trader/js/jquery.twbsPagination.js" type="text/javascript"></script>--}}
    <script src="/landing-assets/blazing-trader/js/moment-with-locales.js" type="text/javascript"></script>
    <script type="text/javascript">
        function getCurrentTime() {
            var now = new Date();
            return [[AddZero(now.getDate()), AddZero(now.getMonth() + 1), now.getFullYear()].join("/"), [AddZero(now.getHours()), AddZero(now.getMinutes()), AddZero(now.getSeconds())].join(":")].join(" ");
        }
        //Pad given value to the left with "0"
        function AddZero(num) {
            return (num >= 0 && num < 10) ? "0" + num : num + "";
        }
        var div = document.getElementById("time");
        div.innerHTML = getCurrentTime();
        setInterval(function () {
            div.innerHTML = getCurrentTime();
        }, 1000);
    </script>



    <script>
        (function (e) {
            "use strict";
            e.fn.counterUp = function (t) {
                var n = e.extend({time: 400, delay: 10}, t);

                return this.each(function () {
                    var t = e(this), r = n, i = function () {
                        var e = [], n = r.time / r.delay, i = t.text(), s = /[0-9]+,[0-9]+/.test(i);
                        i = i.replace(/,/g, "");
                        var o = /^[0-9]+$/.test(i), u = /^[0-9]+\.[0-9]+$/.test(i), a = u ? (i.split(".")[1] || []).length : 0;
                        for (var f = n; f >= 1; f--) {
                            var l = parseInt(i / n * f);
                            u && (l = parseFloat(i / n * f).toFixed(a));
                            if (s)
                                while (/(\d+)(\d{3})/.test(l.toString()))
                                    l = l.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                            e.unshift(l)
                        }
                        t.data("counterup-nums", e);
                        t.text("0");
                        var c = function () {
                            t.text(t.data("counterup-nums").shift());
                            if (t.data("counterup-nums").length)
                                setTimeout(t.data("counterup-func"), r.delay);
                            else {
                                delete t.data("counterup-nums")
                                ;
                                t.data("counterup-nums", null);
                                t.data("counterup-func", null)
                            }
                        };
                        t.data("counterup-func", c);
                        setTimeout(t.data("counterup-func"), r.delay)
                    };
                    t.waypoint(i, {offset: "100%", triggerOnce: !0})
                })
            }
        })(jQuery);

        $('.counter').counterUp({
            delay: 68,
            time: 3000
        });
    </script>

    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var playerVideoHome;
        var playerVideoHomePopup;
        var playerVideoMembers;
        function onYouTubeIframeAPIReady() {
            playerVideoHome = new YT.Player('videoHome', {
                height: '527',
                width: '937',
                videoId: 'X3WlhTSKouY',
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    disablekb: 1,
                    rel: 0,
                    modestbranding: 1,
                    autoplay: 1
                }
            });
            playerVideoHomePopup = new YT.Player('videoHomePopup', {
                height: '527',
                width: '937',
                videoId: 'X3WlhTSKouY',
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    disablekb: 1,
                    rel: 0,
                    modestbranding: 1,
                    autoplay: 0
                }
            });
            playerVideoMembers = new YT.Player('videoMembers', {
                height: '527',
                width: '937',
                videoId: 'Ae82fRG7L14',
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    disablekb: 1,
                    rel: 0,
                    modestbranding: 1,
                    autoplay: 0
                }
            });
        }

        function toggleVideo(vid, status) {
            var iframe = document.getElementById(vid).contentWindow;
            func = state == 'pause' ? 'pauseVideo' : 'playVideo';

            iframe.postMessage('{"event":"command","func":"+ func + ')
            if (status == "play") {
                id.playVideo();
            }
            if (status == "pause") {
                id.pauseVideo();
            }
        }
    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(".video-section").height() < $(window).scrollTop()) {
                    $(".fixed-form").addClass("fixed-form--showed");
                } else {
                    $(".fixed-form").removeClass("fixed-form--showed");
                }
            }).trigger('scroll');

            $("#instant-access-button").click(function (e) {
                e.preventDefault();
                $("#popup_div").hide();
                $("#popup").css({
                    'display': 'block',
                    'opacity': 1
                });

                playerVideoHome.pauseVideo();
                playerVideoHomePopup.playVideo();
            });

            $("#close-popup-instant-access").click(function (e) {
                e.preventDefault();
                $("#popup_div").hide();
                $("#popup").hide();

                playerVideoHome.playVideo();
                playerVideoHomePopup.pauseVideo();
                //            window.videoJoinPopup.setCurrentTime(0);
            });

            $("#closePopUp").click(function (e) {
                e.preventDefault();
                $("#popup_div").hide();
                $("body").css("overflow", "auto");

                playerVideoHome.playVideo();
                playerVideoMembers.pauseVideo();
            });
            $("form[name='submitForm']").on("submit", function (e) {
                e.preventDefault();
                var name = $(this).find('input[name="name"]');
                var email = $(this).find('input[name="email"]');
                if (!name.val()) {
                    $(this).find('.err-name').show();
                }
                if (!email.val()) {
                    $(this).find('.err-email').show();
                }
                if (name.val() && email.val()) {
                    playerVideoHome.pauseVideo();
                    playerVideoMembers.playVideo();
                    $(this).find('.err-name').hide();
                    $(this).find('.err-email').hide();

                    $("#popup_div").show();
                    $('#registration_form #name').val(name.val());
                    $('#registration_form #email').val(email.val());
                }

            });



            $("form[name='registerForm']").on("submit", function (e) {
                e.preventDefault();
                var name = $(this).find('input[name="name"]');
                var email = $(this).find('input[name="email"]');
                if (!name.val()) {
                    $(this).find('.err-name').show();
                }
                if (!email.val()) {
                    $(this).find('.err-email').show();
                }
                if (name.val() && email.val()) {
                    playerVideoHome.pauseVideo();
                    playerVideoMembers.pauseVideo();
                    $(this).find('.err-name').hide();
                    $(this).find('.err-email').hide();

                    $("#popup_div").show();
                    $('#registration_form #name').val(name.val());
                    $('#registration_form #email').val(email.val());
                }

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
