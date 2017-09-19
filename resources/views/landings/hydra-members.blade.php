@extends('layouts.main')


@section('extra_styles')

    <link rel="shortcut icon" type="image/x-icon" href="/favico.png">
    <link rel="apple-touch-icon" href="/favico-xl.png">
    <link href="/landing-assets/hydra/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="/landing-assets/hydra/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="/landing-assets/hydra/css/hydra-fx.webflow.css" rel="stylesheet" type="text/css">
@endsection

@section("content")
    <div id="main-content">
        <div class="w-container">
            <img class="logo" src="/landing-assets/hydra/images/H-logo.png">
        </div>
        <div class="section-11">
            <div class="w-container">
                <div class="big-title">Register NOW To Start Making Your First <span class="blue"> $5,025!</span></div>
                <div class="big-title sma">You are about to get full unrestricted access to it all.</div>
                <div class="w-row">
                    <div class="video-clm w-col w-col-8">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <div id="videoHome" class="embed-responsive-item"
                                 data-vidit-player="mp8deiqfnrxagslv02z3"></div>

                        </div>
                    </div>
                    <div class="form-clm w-col w-col-4">
                        <div class="form-signup-holder form">
                            <div class="form-title">Get Access at Zero Cost and See How Profits Start Rolling Today!
                            </div>
                            <form novalidate name="signupForm" id="registration_form">
                                {{ csrf_field() }}
                                <div class="form-froup">
                                    <input type="text" id="name" class="f m w-input" name="name"
                                           placeholder="Your name">
                                </div>
                                <div class="form-group" style="margin-bottom:0">
                                    <input type="email" class="f m w-input" name="email" id="email"
                                           placeholder="Your e-mail address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="f m w-input" name="phone" id="phone"
                                           placeholder="Your phone">
                                </div>
                                <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                <div class="form-group">
                                    <button class="mm submit w-button" type="submit">Register</button>
                                </div>
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
                        <div class="h1" style="margin-top: 0;">WHY HYDRA WORKS?</div>
                        <div class="ttxt" data-ix="fade-in-from-left">Makes intuitive decisions based on trend
                            spotting
                        </div>
                        <div class="ttxt" data-ix="fade-in-from-left">Self-learning algorithms produce a minimum of
                            $5,000
                            daily
                        </div>
                        <div class="ttxt" data-ix="fade-in-from-left">97.4% Accuracy Rate</div>
                        <div class="ttxt" data-ix="fade-in-from-left">Anti-fail mechanism protects you from any
                            potential loss
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-4 w-hidden-tiny">
            <div class="video-background w-background-video" data-autoplay="data-autoplay" data-loop="data-loop"
                 data-poster-url="https://daks2k3a4ib2z.cloudfront.net/58aea2bff78c3f3a3fa6e9bc/58b33166d9def3fa0cacc092_Money Finance currency coins and stock market 1213 - economic calculations Free stock footage-poster-00001.jpg"
                 data-video-urls="https://daks2k3a4ib2z.cloudfront.net/58aea2bff78c3f3a3fa6e9bc/58b33166d9def3fa0cacc092_Money Finance currency coins and stock market 1213 - economic calculations Free stock footage-transcode.webm,https://daks2k3a4ib2z.cloudfront.net/58aea2bff78c3f3a3fa6e9bc/58b33166d9def3fa0cacc092_Money Finance currency coins and stock market 1213 - economic calculations Free stock footage-transcode.mp4"
                 data-wf-ignore="data-wf-ignore">
                <video autoplay="autoplay" loop="loop">
                    <source src="https://daks2k3a4ib2z.cloudfront.net/58aea2bff78c3f3a3fa6e9bc/58b33166d9def3fa0cacc092_Money Finance currency coins and stock market 1213 - economic calculations Free stock footage-transcode.webm"
                            data-wf-ignore="">
                    <source src="https://daks2k3a4ib2z.cloudfront.net/58aea2bff78c3f3a3fa6e9bc/58b33166d9def3fa0cacc092_Money Finance currency coins and stock market 1213 - economic calculations Free stock footage-transcode.mp4"
                            data-wf-ignore="">
                </video>
                <div class="w-container">
                    <div class="r1 w-row">
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <div class="row-title">Date</div>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <div class="row-title">Asset</div>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <div class="row-title">Direction</div>
                        </div>
                        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                            <div class="row-title">Payout</div>
                        </div>
                    </div>
                    <div id="softwareInAction">
                        <div class="gray r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">USD / EUR</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$38.00</div>
                            </div>
                        </div>

                        <div class="r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">USD / EUR</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 red">▼ DOWN</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$39.00</div>
                            </div>
                        </div>
                        <div class="gray r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">USD / EUR</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$50.00</div>
                            </div>
                        </div>
                        <div class="r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">Apple</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 red">▼ DOWN</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$44.00</div>
                            </div>
                        </div>
                        <div class="gray r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">CHF / USD</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$23.00</div>
                            </div>
                        </div>
                        <div class="r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">GBP / USD</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$31.00</div>
                            </div>
                        </div>
                        <div class="gray r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">CHF / USD</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 red">▼ DOWN</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$23.00</div>
                            </div>
                        </div>
                        <div class="r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">GBP / USD</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$49.00</div>
                            </div>
                        </div>
                        <div class="gray r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">Apple</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$48.00</div>
                            </div>
                        </div>
                        <div class="r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">Oil</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 red">▼ DOWN</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$36.00</div>
                            </div>
                        </div>
                        <div class="gray r2 w-row">
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">2017/04/30</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">Oil</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11 up">▲ UP</div>
                            </div>
                            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                                <div class="t11">$20.00</div>
                            </div>
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
        <div class="section-2" style="padding: 25px 0;">
            <div class="w-container">
                <div class="w-row">
                    <div class="video-clm w-col w-col-4"></div>
                    <div class="form-clm w-col w-col-4">
                        <div class="form-signup-holder form" style="background-color: #232f37;">
                            <div class="form-title">Get Access at Zero Cost and See How Profits Start Rolling Today!
                            </div>

                            <form novalidate name="signupForm" id="registration_form_bottom">
                                <div class="form-group">
                                    <input type="text" id="name2" class="f m w-input" name="firstName"
                                           placeholder="Your name">
                                </div>
                                <div class="form-group" style="margin-bottom:0">
                                    <input type="email" class="f m w-input" name="email" id="email2"
                                           placeholder="Your e-mail address">
                                </div>
                                <div class="form-group" >
                                    <input type="text" class="f m w-input" name="phone" id="phone2" placeholder="Your phone">
                                </div>

                                <div class="form-group">
                                    <button class="mm submit w-button" type="submit">Register</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="w-container">
                <div>
                    <a href="/landing-assets/hydra/websiteagreement.html" class="footer-txt">Website Agreement</a>
                    &nbsp;
                    <a href="/landing-assets/hydra/riskdisclaimer.html" class="footer-txt">Risk Disclaimer</a> &nbsp;
                    <a href="/landing-assets/hydra/privacypolicy.html" class="footer-txt">Privacy Policy</a> &nbsp;
                </div>
                <div class="footer-txt">
                    <p>
                        RISK DISCLAIMER: www.hydraapp.co makes no representations regarding the legality of access to or
                        use of
                        this website or its content in any jurisdiction. Not all services offered are permitted for use
                        in all
                        countries. Investing in financial instruments involves a high degree of risk and may not be
                        suitable for
                        all investors. We strongly advise you to read our Site Agreement and Risk Disclaimer statement
                        before
                        accessing this website. Neither www.hydraapp.co nor its officials are responsible for any losses
                        related
                        to use of its services or software. If necessary, seek independent advice prior to accessing the
                        information and software on this website. Users must be aware of their individual tax liability
                        in their
                        country of residence.
                    </p>
                    <p>
                        www.hydraapp.co is using 3rd party services for tracking, development, hosting, domain
                        purchasing and
                        those are not affiliated with www.hydraapp.co nor responsible in any way. In some cases actors
                        have been
                        used. This is a new system and there are no typical results. This system does not guarantee
                        income or
                        success, and examples of the system owner's and other person's results do not represent an
                        indication of
                        future success or earnings. Any testimonials and examples used are exceptional results, don't
                        apply to
                        the average user and are not intended to represent or guarantee that anyone will achieve the
                        same or
                        similar results. Each individual's success depends on his or her background, dedication, desire
                        and
                        motivation as well as other factors not always known and sometimes beyond control. There is no
                        guarantee
                        you will duplicate the results stated here. You recognize any trading has inherent risk for
                        complete
                        loss of investment.
                    </p>
                    <p>
                        Any advertisement, pre-lander, ad on other ad networks that lead you to reach this page is not
                        affiliated in anyway with www.hydraapp.co and beyond www.hydraapp.co control and responsibility
                        and any
                        claims and use of names, trademarks or any other commercial sign is on their sole
                        responsibility.
                    </p>
                    <p>
                        We have placed cookies on your computer to help improve your experience when visiting this
                        website. You
                        can change cookie settings on your computer at any time. Use of this website indicates your
                        acceptance
                        of this website's Privacy Policy.
                    </p>
                    <p>
                        © 2017 All Rights Reserved.
                    </p></div>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script>
        window.areaCode = "44";
    </script>
    {{--<script type="text/javascript">--}}
    {{--window.localGoal = "members2";--}}
    {{--window.country = "GB";--}}
    {{--document.write('<scr' + 'ipt id="script-integration-params" data-project-id="xfn-" src="//server.jvclub.com/public/integration/hydra/integration-params.js?v=' + Math.random() + '" type="text/javascript"></scr' + 'ipt>');--}}
    {{--</script>--}}
    {{--<script type="text/javascript">--}}
    {{--document.write('<scr' + 'ipt src="//server.jvclub.com/public/integration/hydra/integration.js?v=' + Math.random() + '" type="text/javascript"></scr' + 'ipt>');--}}
    {{--</script>--}}
    <!-- INTEGRATION BLOCK END-->
    <script src="https://cdn.vidit.io/scripts/v1/sdk.js" type="text/javascript"></script>

    <script type="text/javascript">
        var videoHome2 = new Vidit().player({
            "code": "fvgbi7c6xmnaj4qsry9w",
            container: "#videoHome",
            player: {

                autoplay: true
            }
        });
    </script>



    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:400,700"]
            }
        });
    </script>

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
            $("#name").val(nameFromUrl);
            $("#email").val(emailFromUrl);
            $("#name2").val(nameFromUrl);
            $("#email2").val(emailFromUrl);


            $('#registration_form_bottom').on('submit', function(e) {
                e.preventDefault();
                var name = $('#name2').val();
                var email = $('#email2').val();
                var phone = $('#phone2').val();
                $('#name').val(name);
                $('#email').val(email);
                $('#phone').val(phone);

                $( "#registration_form" ).trigger( "submit" );
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


