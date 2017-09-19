@extends('layouts.main')



@section('extra_styles')
    <link rel="stylesheet" type="text/css" href="/landing-assets/best-trading/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/landing-assets/best-trading/fonts/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/landing-assets/best-trading/css/style.css">

    <style>
        .widget-people .content .desc {
            font-size: 14px;
        }
    </style>
@endsection

@section("content")
    <div id="main-content">

        <div id="wrapper">
            <div class="widget widget-people block-hidden first shown">
                <div class="widget-inner">

                    <div class="content">

                        <div class="img">
                            <img class="imgface" src="/landing-assets/best-trading/images/05.jpg" alt="">
                        </div>

                        <div class="desc">
                            <div class="name">
                                <span class="pname">Anthony N.</span> just made
                            </div>
                            <div class="sum">$<span class="pnum">295</span></div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="widget widget-spots-left block-hidden secondary shown">
                <div class="widget-inner">

                    <div class="content">

                        <div class="value pspots">1</div>
                        <div class="desc">
                            Free Copies Available
                        </div>

                    </div>

                </div>
            </div>
            <header id="header">
                <div class="header-content">
                    <a href="#" class="header-logo">The Bitcoin Code</a>
                </div>
            </header>

            <div id="container">


                <div class="section section-intro scroll-trigger">

                    <div class="section-container">

                        <div class="intro-title">
                            Ride The Wave of
                            <div>bitcoin</div>
                            And Earn a Guaranteed <span>$13,000 In Exactly 24 Hours</span>
                        </div>

                        <div class="row intro-wrapper">
                            <div class="col-md-8">

                                <div class="video-wrapper">
                                    <div class="video">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="620" height="370" src="//thebitcoincode.com/video.php?link=bitcoin_01&poster=poster1&autoplay=1&p=2" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="top-form-wrapper">

                                    <div class="form-title">

                                        Let Me Show You How to Make
                                        <div>
                                            <div>Cash LIVE</div>
                                            Right Now
                                        </div>
                                    </div>

                                    <form name="subscribeForm" method="get">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" required="" placeholder="Your Full Name">
                                            <div class="text-danger name-error">*Full name is required.</div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required="" placeholder="Your E-mail Address">
                                            <div class="text-danger email-error">*Email is required.</div>
                                        </div>
                                        <input type="hidden" name="step" value="2">
                                        <div class="form-group">
                                            <button class="form-control" type="submit" >Register</button>
                                        </div>
                                    </form>



                                </div>

                            </div>
                        </div>


                    </div>
                </div>


                <!-- tbc-description start -->
                <section class="section section-tbc-description">
                    <div class="section-container">
                        <div class="section-content">
                            <div class="section-title">
                                Join <span>The Bitcoin Code</span>
                            </div>
                            <div class="section-description">

                                <p><b><i>The Bitcoin Code</i></b> is a group reserved exclusively to people who jumped on the insane returns that Bitcoin offers and have quietly amassed a fortune in doing so.</p>

                                <p><b><i>Bitcoin Code Members</i></b> enjoy retreats around the world every month while they make money on their laptop with just a few minutes of “work” every day.</p>


                            </div>
                        </div>
                    </div>
                </section>
                <!-- tbc-description end -->


                <!-- vacations start -->
                <section class="section section-vacations">
                    <div class="section-container">
                        <div class="section-content">
                            <div class="section-title">
                                <div>
                                    Here are some of our past vacations
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- vacations end -->

                <!-- testimonials start -->
                <section class="section section-testimonials">
                    <div class="section-container">
                        <div class="section-content">
                            <div class="section-title">
                                Hear From Our Members Who Rely On Our Software To Fund Their Luxury Lifestyles
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="testimonials-list">
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-1.jpg" alt="">
                                            <div class="name">Laura Abenstein</div>
                                            <div class="description">
                                                I’ve been a member of the Bitcoin Code for only 47 days. But my life has already changed! Not only have I made my first $100K, but I’ve also met some of the most incredible people
                                                in the process. Thanks, Steve!
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-2.jpg" alt="">
                                            <div class="name">Joey Feldman</div>
                                            <div class="description">
                                                When I joined The Bitcoin Code 2 months ago, never could have I ever imagined the series of events that would unfold just days after locking in my free software. I was able to
                                                clear my $131,382 debt. There is no greater feeling than to be debt-free. Now, I’m in the process of buying my dream home. I still can’t believe this is all really happening…I’m
                                                forever grateful to Steve.
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-3.jpg" alt="">
                                            <div class="name">Michael Zusman</div>
                                            <div class="description">
                                                The results of the software speaks for itself...just as promised, I made over $13,000 every single day. Do I really need to say more?
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-4.jpg" alt="">
                                            <div class="name">Paulo Fonzi</div>
                                            <div class="description">
                                                Yesterday, I QUIT my job...and today, I’m at a pool party in Vegas! Life is CRAZYYYY. And it’s all thanks to the Bitcoin Code. THANK YOU STEVE!
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-5.jpg" alt="">
                                            <div class="name">Lewis H.</div>
                                            <div class="description">
                                                Is this for real? I just joined 2 days ago, and my account balance has already ballooned to a staggering $27,484.98!!!
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="testimonials-list">
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-6.jpg" alt="">
                                            <div class="name">Chris Hadid</div>
                                            <div class="description">
                                                I ask my wife to pinch me every morning when I wake up and check my bank balance. I have never seen a number that big before in MY bank account. And it just continues to grow and
                                                grow some more...this is what I’ve been waiting for my entire life. Now that I have a taste of what it really feels like to be my own boss and make tens of thousands of dollars
                                                every week, I won’t ever look back!
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-7.jpg" alt="">
                                            <div class="name">Daniel Pelts</div>
                                            <div class="description">
                                                Surprisingly, I used to be an investor on Wall Street. And I’ve never seen anything like this in my 10 year tenure at the company. My colleagues all thought I was crazy when I quit
                                                the firm to invest with the Bitcoin Code software full-time. $384,594 in profits later, all of my colleagues are now BEGGING me to let them in.
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-8.jpg" alt="">
                                            <div class="name">Magda Boltyanski</div>
                                            <div class="description">
                                                I finally know what it’s like to live the dream.
                                                I no longer feel like I’m on the outside looking in while everyone else has all the fun. The Bitcoin Code has allowed me to retire early and live the 1% lifestyle.
                                            </div>
                                        </li>
                                        <li><img src="/landing-assets/best-trading/images/media/testimonial-9.jpg" alt="">
                                            <div class="name">Carl Edwards</div>
                                            <div class="description">
                                                Two weeks ago, I got laid off. With no options left, I thought my life was over. Now I’m making over $13,261.42 each and every day. And for the first time in 2 months, my account
                                                isn’t overdrawn. Thank you, STEVE!
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- testimonials end -->


                <section class="section section-man">
                    <div class="section-container">
                        <div class="section-content">

                            <img src="/landing-assets/best-trading/images/media/man.jpg" alt="">

                            <div class="content-wrapper">
                                <div class="section-title">
                                    Meet Steve McKay
                                    <span>The Genius Behind The Bitcoin Code</span>
                                </div>
                                <div class="section-description">


                                    <p>Hi - I’m an ex-software developer for a large firm whose name I prefer not to disclose.</p>

                                    <p>I created a Bitcoin Trading Software that has earned over $18,484,931.77 in profits within the past 6 months alone.</p>

                                    <p>This software is making millionaires faster than early investors of Uber, Facebook or Airbnb.</p>

                                    <p>If you want to make a million with Bitcoin, watch the video above to learn how.</p>

                                    <img src="/landing-assets/best-trading/images/media/sign.png" align="right" alt="" class="sign">

                                    <p>
                                        Your Friend,
                                        <br/>Steve McKay


                                    </p>


                                </div>

                            </div>

                        </div>
                    </div>
                </section>


            </div>
        </div>


        <div id="footer">
            <div class="footer-content">

                <div class="top-form-wrapper" style="margin-bottom:20px;">
                </div>
                <!-- div class="buttons">
                    <a href="#">GET STARTED NOW</a>
                </div -->

                <div class="description">
                    Important Risk Note: Trading binary options can generate significant benefits but also involves a risk of partial or full funds loss and should be considered by initial investors. we strongly advise that you
                    read our terms & conditions and disclaimer page before making any investment. customers must be aware of their individual capital gain tax liability in their country of residence. It is against the law to
                    solicit U.S. persons to buy and sell commodity options, even if they are called \prediction' contracts, unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.
                </div>

                <ul class="footer-menu">
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Affiliate</a></li>
                    <li><a href="#">Support</a></li>
                </ul>

            </div>
        </div>


        <div class="widget widget-people block-hidden first">
            <div class="widget-inner">

                <div class="content">

                    <div class="img">
                        <img class="imgface" src="/landing-assets/best-trading/images/media/random-user.jpg" alt="">
                    </div>

                    <div class="desc">
                        <div class="name">
                            <span class="pname"></span> just made
                        </div>
                        <div class="sum">$<span class="pnum"></span></div>
                    </div>


                </div>

            </div>
        </div>
        <div class="widget widget-spots-left block-hidden secondary">
            <div class="widget-inner">

                <div class="content">

                    <div class="value pspots">15</div>
                    <div class="desc">
                        Free Copies Available
                    </div>

                </div>

            </div>
        </div>

        <style>

            @-webkit-keyframes spin {
                0%  {-webkit-transform: rotate(0deg);}
                100% {-webkit-transform: rotate(360deg);}
            }

            .app-spinner.loading.loading-success {
                border-color: rgba(41,47,67,.3);
                border-top-color: #337ab7;
                background: none;
            }
            .app-spinner.loading {
                /*float: left;*/
                /* z-index: 9999999; */
                position: absolute;
                /* float: left; */
                border-radius: 50%;
                margin: 10px 5px 10px 0;
                width: 150px;
                height: 150px;
                border: 3px solid rgba(219,224,228,.1);
                border-top-color: #DBE0E4;
                animation: spin 1s infinite linear;
                left: 45%;
                top: 40%;
                display: none;
            }
            .background {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999999;
                background-color: hsla(0, 0%, 0%, 0.5);
            }
            @media (max-width: 767px){
                .app-spinner.loading{
                    left: 30%;
                }
            }
        </style>
        <div class="background">
            <div class="app-spinner loading loading-success"></div>
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

