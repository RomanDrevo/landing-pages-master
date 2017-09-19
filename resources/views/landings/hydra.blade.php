@extends('layouts.main')



@section('extra_styles')
    <link rel="shortcut icon" type="image/x-icon" href="/favico.png">
    <link rel="apple-touch-icon" href="/favico-xl.png">
    <link href="/landing-assets/hydra/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="/landing-assets/hydra/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="/landing-assets/hydra/css/hydra-fx.webflow.css" rel="stylesheet" type="text/css">
    <style>
        .name-error, .email-error, #instant-access { display: none;}
    </style>
@endsection

@section("content")
    <div id="main-content">
        <div class="w-container"><img class="logo" src="/landing-assets/hydra/images/H-logo.png">
        </div>
        <div class="section-11">
            <div class="w-container">
                <div class="big-title">"The App that Makes me&nbsp;<span class="blue">$5,025&nbsp;every 24 Hours!</span>"
                </div>
                <div class="big-title sma">The Single Most Powerful Trading System is LIVE again...</div>
                <div class="w-row">
                    <div class="video-clm w-col w-col-8">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <div id="videoHome" class="embed-responsive-item" data-vidit-player="mp8deiqfnrxagslv02z3">

                            </div>
                        </div>
                    </div>
                    <div class="form-clm w-col w-col-4">
                        <div class="form-subscribe-holder form" style="float:none;margin:0 auto;position: relative;">
                            <div class="form-title">Get Access at Zero Cost and See How Profits Start Rolling Today!
                            </div>
                            <div class="">
                                <button class="submit w-button" id="instant-access">
                                    GET INSTANT ACCESS
                                </button>
                            </div>
                            <form name="subscribeForm" method="get">
                                <div class="">
                                    <input type="text" class="f w-input" name="name" required="" placeholder="Your Full Name">
                                        <div class="text-danger name-error">*Name is required.</div>
                                </div>
                                <div class="">
                                    <input type="email" class="f w-input" name="email" required="" placeholder="Your E-mail Address">
                                        <div class="text-danger email-error">*Email is required.</div>
                                </div>
                                <input type="hidden" name="step" value="2">
                                <div class="">
                                    <button class="submit w-button" type="submit" >Register</button>
                                </div>
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="alert alert-success" >--}}
                                       {{----}}
                                    {{--</div>--}}
                                    {{--<div class="alert alert-danger" >--}}
                                        {{----}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="progress">--}}
                                        {{--<div class="progress-bar progress-bar-striped active" role="progressbar"--}}
                                             {{--aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"--}}
                                             {{--style="width: 100%">--}}
                                            {{--<span class="sr-only"></span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-4"><img src="/landing-assets/hydra/images/shot-gif.gif">
                    </div>
                    <div class="w-col w-col-8">
                        <div class="h1" style="margin-top: 0;">HYDRA SOFTWARE IN ACTION</div>
                        <div class="ttxt" data-ix="fade-in-from-left">Proven to Make $5,025 Daily</div>
                        <div class="ttxt" data-ix="fade-in-from-left">No Large Investments Required</div>
                        <div class="ttxt" data-ix="fade-in-from-left">Over 1,000 Successful Traders Weekly</div>
                        <div class="ttxt" data-ix="fade-in-from-left">Simple to use with NO Past Experience Required
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-row">
                <div class="clm w-col w-col-3">
                    <div class="_2 box">
                        <div class="bpx-txtt">Consistent Updates</div>
                    </div>
                </div>
                <div class="clm w-col w-col-3">
                    <div class="_3 box">
                        <div class="bpx-txtt">Financial Databases</div>
                    </div>
                </div>
                <div class="clm w-col w-col-3">
                    <div class="_4 box">
                        <div class="bpx-txtt">Easy&nbsp;To&nbsp;Use</div>
                    </div>
                </div>
                <div class="clm w-col w-col-3">
                    <div class="box">
                        <div class="bpx-txtt">1-on-1 Lifetime Support</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-4">
                        <div class="map-code w-embed w-script">
                            <script type="text/javascript" src="http://100widgets.com/js_data.php?id=66"></script>
                        </div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="slider-300 w-slider" data-animation="slide" data-autoplay="1" data-delay="4000"
                             data-duration="500" data-infinite="1">
                            <div class="w-slider-mask">
                                <div class="w-slide">
                                    <div class="w-row">
                                        <div class="w-col w-col-4">
                                            <div class="_3323 profile-pic">
                                                <div class="name">Marta C.</div>
                                            </div>
                                        </div>
                                        <div class="w-col w-col-8">
                                            <div class="testimonial-txt">I never thought I’d achieve financial stability
                                                in today’s economy, but with the Hydra System, I have a steady income
                                                and I've been able to pay off all my debts. The beauty of it is that you
                                                don’t have to have experience in the financial market and anyone can do
                                                it.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-slide">
                                    <div class="w-row">
                                        <div class="w-col w-col-4">
                                            <div class="_223 profile-pic">
                                                <div class="name">Benjamin B.</div>
                                            </div>
                                        </div>
                                        <div class="w-col w-col-8">
                                            <div class="testimonial-txt">I'm really not sure how to express my gratitude
                                                for such a wonderful development which you shared with me. With your
                                                method I was finally able to pay off 100% of my mortgage and now live
                                                life to the fullest while the money keeps rolling in!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-slide">
                                    <div class="w-row">
                                        <div class="w-col w-col-4">
                                            <div class="profile-pic">
                                                <div class="name">Marshall D.</div>
                                            </div>
                                        </div>
                                        <div class="w-col w-col-8">
                                            <div class="testimonial-txt">Ever since I found out about the Hydra System
                                                my life is so much better! I can make money on the markets without
                                                having to do anything. I started trading wisely and began to see high
                                                returns. The best part is no previous financial experience is required -
                                                anyone can succeed!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="w-container">
                <div>
                    <a href="/landing-assets/hydra/websiteagreement.html" class="footer-txt">Website Agreement</a> &nbsp;
                    <a href="/landing-assets/hydra/riskdisclaimer.html" class="footer-txt">Risk Disclaimer</a> &nbsp;
                    <a href="/landing-assets/hydra/privacypolicy.html" class="footer-txt">Privacy Policy</a> &nbsp;
                </div>
                <div class="footer-txt">
                    <p>
                        RISK DISCLAIMER: www.hydraapp.co makes no representations regarding the legality of access to or
                        use of this website or its content in any jurisdiction. Not all services offered are permitted
                        for use in all countries. Investing in financial instruments involves a high degree of risk and
                        may not be suitable for all investors. We strongly advise you to read our Site Agreement and
                        Risk Disclaimer statement before accessing this website. Neither www.hydraapp.co nor its
                        officials are responsible for any losses related to use of its services or software. If
                        necessary, seek independent advice prior to accessing the information and software on this
                        website. Users must be aware of their individual tax liability in their country of residence.
                    </p>
                    <p>
                        www.hydraapp.co is using 3rd party services for tracking, development, hosting, domain
                        purchasing and those are not affiliated with www.hydraapp.co nor responsible in any way. In some
                        cases actors have been used. This is a new system and there are no typical results. This system
                        does not guarantee income or success, and examples of the system owner's and other person's
                        results do not represent an indication of future success or earnings. Any testimonials and
                        examples used are exceptional results, don't apply to the average user and are not intended to
                        represent or guarantee that anyone will achieve the same or similar results. Each individual's
                        success depends on his or her background, dedication, desire and motivation as well as other
                        factors not always known and sometimes beyond control. There is no guarantee you will duplicate
                        the results stated here. You recognize any trading has inherent risk for complete loss of
                        investment.
                    </p>
                    <p>
                        Any advertisement, pre-lander, ad on other ad networks that lead you to reach this page is not
                        affiliated in anyway with www.hydraapp.co and beyond www.hydraapp.co control and responsibility
                        and any claims and use of names, trademarks or any other commercial sign is on their sole
                        responsibility.
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

    </div>
@endsection

@section('extra_scripts')
    <script src="https://cdn.vidit.io/scripts/v1/sdk.js" type="text/javascript"></script>
    <script type="text/javascript">
        var videoHome2 = new Vidit().player({
            "code": "ympunwqgti2o6aj5fedb",
            container: "#videoHome",
            player: {
                autoplay: true
            }
        });
    </script>

    <script>
        window.areaCode = "44";
    </script>

    <script type="text/javascript">
        window.localGoal = "lp2";
        window.country = "GB";
    </script>




    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:400,700"]
            }
        });
    </script>
    <script> var pageKey = "lp2";</script>
    {{--<script src="/js/app/SubscribeController.js?v=1.0.0" type="text/javascript"></script>--}}
    {{--<script src="js/webflow.js" type="text/javascript"></script>--}}
    <script>/* <![CDATA[ */
        (function (d, s, a, i, j, r, l, m, t) {
            try {
                l = d.getElementsByTagName('a');
                t = d.createElement('textarea');
                for (i = 0; l.length - i; i++) {
                    try {
                        a = l[i].href;
                        s = a.indexOf('/cdn-cgi/l/email-protection');
                        m = a.length;
                        if (a && s > -1 && m > 28) {
                            j = 28 + s;
                            s = '';
                            if (j < m) {
                                r = '0x' + a.substr(j, 2) | 0;
                                for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                                j++;
                                s = decodeURIComponent(s) + a.substr(j, m - j)
                            }
                            t.innerHTML = s.replace(/</g, '&lt;').replace(/\>/g, '&gt;');
                            l[i].href = 'mailto:' + t.value
                        }
                    } catch (e) {
                    }
                }
            } catch (e) {
            }
        })(document);
        /* ]]> */</script>


@endsection

