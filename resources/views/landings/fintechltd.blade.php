@extends('layouts.main')


@section('extra_styles')

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic|Open+Sans+Condensed:300,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href="/landing-assets/fintechltd/css/styles.css" rel="stylesheet" media="all">
    <link href="/landing-assets/fintechltd/css/print.css" rel="stylesheet" media="print">
    <link href="/landing-assets/fintechltd/css/media.css" rel="stylesheet" media="all">

    <link rel="apple-touch-icon" sizes="57x57" href="/landing-assets/fintechltd/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/landing-assets/fintechltd/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/landing-assets/fintechltd/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/landing-assets/fintechltd/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/landing-assets/fintechltd/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/landing-assets/fintechltd/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/landing-assets/fintechltd/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/landing-assets/fintechltd/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/landing-assets/fintechltd/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/landing-assets/fintechltd/img/icons/android-icon-192x192.png">
    {{--<link rel="icon" type="image/png" sizes="32x32" href="/landing-assets/fintechltd/img/icons/favicon-32x32.png">--}}
    {{--<link rel="icon" type="image/png" sizes="96x96" href="/landing-assets/fintechltd/img/icons/favicon-96x96.png">--}}
    {{--<link rel="icon" type="image/png" sizes="16x16" href="/landing-assets/fintechltd/img/icons/favicon-16x16.png">--}}
    <link rel="manifest" href="/landing-assets/fintechltd/img/icons/manifest.json">
    <style>
        .register input {
            color: black;
        }
    </style>
@endsection

@section("content")
    <div class="page">
        <header class="page-header">
            <div class="wrapper">
                <div class="logo">
                    <div class="logo">Fintech Limited</div>
                </div>
                <div class="hamburger">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <ul class="navigation">
                    <li><a href="javascript: void(0);" data-scrollto="home">Home</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="social">Social</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="success">Success</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="how-it-works">How it works</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="steps">Steps</a></li>
                </ul><!-- /.navigation -->
            </div><!-- /.wrapper -->
        </header><!-- /.page-header -->

        <div class="content">
            <section class="video-section" id="home">
                <div class="wrapper">
                    <h1>Join FinTech TODAY and <strong>profit TONIGHT</strong>!</h1>
                    <div class="video-container">
                        <iframe width="100%" height="664" src="https://www.youtube.com/embed/H9jRznr07UI?modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
                    </div><!-- /.video-container -->
                </div><!-- /.wrapper -->
            </section>

            <section id="register-section" class="register-section">
                <div class="wrapper">
                    <h1>Sign up below for <strong>instant</strong> profits</h1>
                    <form action="">
                        <fieldset class="register">
                            <div class="button-wrapper">
                                <input type="text" name="fullname" placeholder="Enter your name">
                                <span class="error-message">Name cannot be blank.</span>
                            </div>
                            <div class="button-wrapper">
                                <input type="email" name="email" placeholder="Enter your email">
                                <span class="error-message">Please, enter valid email.</span>
                            </div>
                            <div class="button-wrapper">
                                <input type="hidden" name="tid" class="transaction_id">
                                <input type="hidden" name="aff_id" class="affiliate_id">
                                <input type="hidden" name="step" value="2">
                                <input type="submit" class="ft-signup" value="Start Making Money NOW">
                            </div>
                        </fieldset>
                    </form>
                </div><!-- /.wrapper -->
            </section>

            <section id="social">
                <div class="wrapper clearfix">
                    <h1>See What Others Say About Us</h1>
                    <ul class="social-testimonials">

                        <li>
                            <img src="/landing-assets/fintechltd/img/facebook/2.jpg" alt="">
                            <div>2 months ago I started using FinTech software and I am feeling amazing about my decision. I
                                make huge amounts of money every week, so next Friday is my last day at work.<span class="author">Christina Bername</span></div>
                        </li>
                        <li>
                            <img src="/landing-assets/fintechltd/img/facebook/3.jpg" alt="">
                            <div>I’ve been investing on TechFin as my personal money manager since 2015 and I can assure
                                their system is awesome.<span class="author">Jenny White</span></div>
                        </li>

                        <li>
                            <img src="/landing-assets/fintechltd/img/facebook/5.jpg" alt="">
                            <div>I took 7 day challenge as well and just withdrew 1164 EUR profit from just 250 deposit! it
                                WORKS so I will go more! I love you guys!<span class="author">Linna Knight</span></div>
                        </li>



                        <li>
                            <img src="/landing-assets/fintechltd/img/facebook/8.jpg" alt="">
                            <div>FinTech LTD trading software is not just ‘game-changer’, this is a frigging LIFE CHANGER!
                                Anyone, and I do mean ANYONE, will make a fortune with this program.<span class="author">Leo Chang</span>
                            </div>
                        </li>


                        <li>
                            <img src="/landing-assets/fintechltd/img/facebook/11.jpg" alt="">
                            <div>This profits is a bless!!! For sure! I placed $500 now my account is at $1815 at 7 days not
                                bad more than double actually tripled!<span class="author">Emilyo Selvatore</span></div>
                        </li>

                    </ul>

                    <div class="facebook-feed">
                        <img src="/landing-assets/fintechltd/img/facebook.jpg" alt="Fintech limited facebook feed">
                    </div>
                </div><!-- /.wrapper -->
            </section>

            <section id="success">
                <div class="wrapper clearfix">
                    <h1>Make Money On The Go!</h1>
                    <div class="mobile-image">
                        <img src="/landing-assets/fintechltd/img/devices.png" alt="Our software runs on mobile devices too">
                    </div>
                    <div class="profits">
                        <h2>FinTech is available for any device! <strong>Be Mobile</strong> – Join The Revolution!</h2>
                        <ul class="profits">
                            <li>
                                <div class="digit">
                                    <img src="/landing-assets/fintechltd/img/graphic-icons/profit.svg" alt="Profit">
                                    $
                                    <span class="count" data-iterator="92.77" data-initial="147477.00">148 033,62</span>
                                </div>
                                <h3>Today Investment Profits</h3>
                            </li>
                            <li>
                                <div class="digit">
                                    <img src="/landing-assets/fintechltd/img/graphic-icons/profit.svg" alt="Profit">
                                    $
                                    <span class="count" data-iterator="102.77" data-initial="7607462.26">7 608 078,88</span>
                                </div>
                                <h3>Total Investment Profits</h3>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.wrapper -->
            </section>

            <section class="how-it-works-section" id="how-it-works">
                <div class="wrapper clearfix">
                    <h1>FREE COPIES ARE VERY LIMITED - GET YOURS <strong>RIGHT NOW</strong>!</h1>

                    <img class="person" src="/landing-assets/fintechltd/img/motivator.png" alt="">
                    <div class="motivation">
                        <p>Hi , I am Daniel Roberts and YOU are about to make a LOT OF MONEY</p>
                        <ul>
                            <li>
                                You don’t need any trading experience to make money with my software, with One-Click, Auto
                                Trading our professionals will do it for <strong>YOU!</strong>
                            </li>
                            <li>
                                You won’t have to do any research, read any charts or do any complicated calculations. My
                                new software version will do all of it FOR YOU!
                            </li>
                            <li>
                                Set it up in minutes, start trading within the hour and see your first profits later today.
                                <strong>I GUARANTEE IT!</strong>
                            </li>
                            <li>
                                There’s nothing to buy, no contracts to sign and no future payments.
                            </li>
                            <li>
                                That`s right, there is no fee to join, it is <strong>100% FREE</strong> today!
                            </li>
                        </ul>
                        <button class="full-width" data-scrollto="register-section">
                            Click Here And Start Making Money | 100% Free
                        </button>
                    </div><!-- /.motivation -->
                </div><!-- /.wrapper -->
            </section>

            <section id="steps">
                <div class="wrapper">
                    <h1>With Only <strong>3 Easy Steps</strong>, YOU Will Finally Live <strong>The Life of Your
                            Dreams</strong>!</h1>
                    <h2>FinTech is totaly Free and there are no catches</h2>
                    <ul class="steps">
                        <li>
                            <div class="step">
                                <h3>Create your Free FinTech account</h3>
                                <p>No fee, nothing to buy no hoops to jump through!<br>
                                    In a minute, you will be ready for the next step in your dream life!</p>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <h3>Activate Your account</h3>
                                <p>
                                    We’ve made exclusive arrangements for you with the BEST brokers on Walls St.<br>
                                    Once you’ve made a small deposit, you’re ready to start profiting!
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <h3>Enjoy watching YOUR money start growing.</h3>
                                <p>
                                    Software goes to work automatically for you and the profits are coming!<br>
                                    TODAY your new life starts and dreams become reality. Congratulations!
                                </p>
                            </div>
                        </li>
                    </ul><!-- /.steps -->
                    <div class="center">
                        <button data-scrollto="register-section">Start Making MONEY Now</button>
                    </div>
                </div><!-- /.wrapper -->
            </section>

            <section class="certificates-section">
                <div class="wrapper">
                    <ul class="certificates">
                        <li><img src="/landing-assets/fintechltd/img/certificates/1.png" alt="Premium service, guaranteed"></li>
                        <li><img src="/landing-assets/fintechltd/img/certificates/2.png" alt="Limited edition"></li>
                        <li><img src="/landing-assets/fintechltd/img/certificates/3.png" alt="Top quality, 100% confident"></li>
                    </ul>
                </div><!-- /.wrapper -->
            </section>
        </div><!-- /.content -->

        <footer class="page-footer">
            <div class="wrapper">
                <ul class="navigation">
                    <li><a href="javascript: void(0);" data-scrollto="home">Home</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="social">Social</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="success">Success</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="how-it-works">How it works</a></li>
                    <li><a href="javascript: void(0);" data-scrollto="steps">Steps</a></li>
                </ul>
                <a href="service.html">Disclaimer</a>
                <div class="copyright">Copyright © 2014-2016 FinTech All Rights Reserved</div>
            </div><!-- /.wrapper -->
        </footer><!-- /.page-footer -->
    </div><!-- /.page -->

    <div class="sticky-form hidden">
        <form action="loading.html">
            <h3 class="not-detected-country hidden">Only 7 slots available! Join NOW!*</h3>
            <h3 class="detected-country">
                <img class="your-flag" data-folder="img/flags/" src="/landing-assets/fintechltd/img/flags/gb.png" height="16" alt="">
                Only 7 slots available in <span class="your-country">United Kingdom</span>!
                Join NOW!*
            </h3>
            <fieldset class="register">
                <div class="button-wrapper">
                    <input type="text" name="fullname" placeholder="Enter your name">
                    <span class="error-message">Name cannot be blank.</span>
                </div>
                <div class="button-wrapper">
                    <input type="email" name="email" placeholder="Enter your email">
                    <span class="error-message">Please, enter valid email.</span>
                </div>
                <div class="button-wrapper">
                    <input type="hidden" name="tid" class="transaction_id">
                    <input type="hidden" name="aff_id" class="affiliate_id">
                    <input type="submit" value="Create Your FREE Account">
                </div>
                <div class="limited">
                    *Limited Time Offer
                </div>
            </fieldset>
        </form>
    </div>
@endsection


@section('extra_scripts')
    <script type="text/javascript" src="/landing-assets/fintechltd/js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/vendor/es6-promise.min.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/config.js"></script>

    <script type="text/javascript" src="/landing-assets/fintechltd/js/custom/helper.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/init.js"></script>


    <script>
        mainApp.unload();
        $(function () {
            mainApp.step1();
        });
    </script>

@endsection
