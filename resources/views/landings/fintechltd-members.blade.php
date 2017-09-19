@extends('layouts.main')


@section('extra_styles')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic|Open+Sans+Condensed:300,700&amp;subset=latin,cyrillic"
          rel="stylesheet" type="text/css">
    <link href="/landing-assets/fintechltd/css/styles.css" rel="stylesheet" media="all">
    <link href="/landing-assets/fintechltd/css/print.css" rel="stylesheet" media="print">
    <link href="/landing-assets/fintechltd/css/media-success.css" rel="stylesheet" media="all">

    <link rel="apple-touch-icon" sizes="57x57" href="/landing-assets/fintechltd/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/landing-assets/fintechltd/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/landing-assets/fintechltd/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/landing-assets/fintechltd/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/landing-assets/fintechltd/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/landing-assets/fintechltd/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/landing-assets/fintechltd/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/landing-assets/fintechltd/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="/landing-assets/fintechltd/img/icons/android-icon-192x192.png">
    {{--<link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">--}}
    {{--<link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">--}}
    {{--<link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">--}}
    <link rel="manifest" href="/landing-assets/fintechltd/img/icons/manifest.json">
    <style>
        .full-register input {
            color: black;
        }
        #registration_form .country-list .country-name {
            color: #999;
        }

        .intl-tel-input { margin-top: 0px; }
        .intl-tel-input.separate-dial-code .selected-dial-code { color: #000; }
    </style>
@endsection


@section('content')
    <div id="main-content">
        <div class="page">
            <header class="page-header">
                <div class="wrapper">
                    <div class="logo">
                        <h1>FINTECH LOGO</h1>
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
                        <li><a href="javascript: void(0);" data-scrollto="live-results">Live results</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="technology">Technology</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="investors">Investors</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="faq">FAQ</a></li>
                    </ul><!-- /.navigation -->
                </div><!-- /.wrapper -->
            </header><!-- /.page-header -->

            <div class="content">
                <section class="register-success-section" id="home">
                    <div class="wrapper clearfix">
                        <h1 class="accented-text"><strong>ACT NOW and Change Your Life FOREVER!</strong><br>GUARANTEED
                            $2,500
                            Daily Profits In YOUR Account TONIGHT!</h1>
                        <div class="w2_3 left center">
                            <div class="video-container">
                                <iframe width="100%" height="436"
                                        src="https://www.youtube.com/embed/q_QXTyu9Fu8?modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1&amp;autoplay=1"
                                        frameborder="0" allowfullscreen=""></iframe>
                            </div><!-- /.video-container -->
                        </div><!-- /.w2_3 -->
                        <div class="w1_3 right form-loader-container">
                            <form action="" id="registration_form" method="post">
                                <fieldset class="full-register">
                                    {{ csrf_field() }}
                                    <h2>Complete registration <strong class="accented-text">and start today</strong>
                                    </h2>
                                    <div>
                                        <input id="name" name="name" type="text" class="full-width" placeholder="Full name" data-key="fullname">
                                    </div>
                                    <div>
                                        <input id="email" name="email" type="email" class="full-width"
                                               placeholder="Enter your email" data-key="email">
                                    </div>
                                    <div>
                                        <input type="text" name="phone" id="phone" placeholder="Enter your phone"
                                               class="full-width">
                                    </div><!-- /.row -->
                                    <input type="hidden" name="tid" class="transaction_id">
                                    <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                    <input type="submit" class="full-width" value="Sign Up Now" style="margin-top: 10px;">
                                </fieldset>
                            </form>
                            <div class="form-loader">
                                <div class="loader-gif">
                                    <img src="/landing-assets/fintechltd/img/loading_icon.gif" alt="loader">
                                </div>
                                <div class="loader-text">
                                    <ul class="rotatingList">
                                        <li>
                                            <p>
                                                <strong>1 of 4: Selecting the most profitable broker...</strong>
                                            </p>
                                            <p class="hiddenInner"><strong class="success"> Broker Selected!</strong>
                                            </p>
                                        </li>

                                        <li>
                                            <p>
                                                <strong>2 of 4: Setting up your brokerage account...</strong>
                                            </p>
                                            <p class="hiddenInner"><strong class="success"> Account created!</strong>
                                            </p>
                                        </li>

                                        <li>
                                            <p>
                                                <strong>3 of 4: Building your App...</strong>
                                            </p>
                                            <p class="hiddenInner"><strong class="success"> Trading App Ready!</strong>
                                            </p>
                                        </li>

                                        <li>
                                            <p>
                                                <strong>4 of 4: Connecting to the trading platform</strong>
                                            </p>
                                            <p class="hiddenInner"><strong class="success"> Trading Platform
                                                    Connected!</strong></p>
                                        </li>

                                        <li>
                                            <p>
                                                <strong> Starting Your app...</strong>
                                            </p>
                                            <p class="hiddenInner"><strong class="success"> Please wait up to 10
                                                    seconds...</strong></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.w1_3 -->

                    </div><!-- /.wrapper -->
                </section>

                <section id="timer">
                    <div class="wrapper clearfix">
                        <h1 style="font-size: 24px;">This Page Expires in:</h1>
                        <div class="clock"></div>
                    </div><!-- /.wrapper -->
                </section>


                <section id="live-results" class="live-results-section">
                    <div class="wrapper">
                        <h1>Our client's live results from last week</h1>
                        <h2>Click on day of the week to see more details</h2>

                        <div class="weeks">
                            <table>
                                <tbody>
                                <tr>
                                    <th>
                                        <div class="client">
                                            <img src="/landing-assets/fintechltd/img/live-results/1.jpg"
                                                 alt="Alfonso Rodriges">
                                            <div class="client-info">
                                                <h3>Alfonso Rodriges</h3>
                                                <span><em>From</em> Valencia, Spain</span>
                                                <span><em>Member since</em> 22/11/2015</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="day">Monday</span>
                                        <span class="daily-profit">$3 294,41</span>
                                    </td>
                                    <td>
                                        <span class="day">Tuesday</span>
                                        <span class="daily-profit">$2 325,47</span>
                                    </td>
                                    <td>
                                        <span class="day">Wednesday</span>
                                        <span class="daily-profit">$1 806,65</span>
                                    </td>
                                    <td>
                                        <span class="day">Thursday</span>
                                        <span class="daily-profit">$2 777,66</span>
                                    </td>
                                    <td>
                                        <span class="day">Friday</span>
                                        <span class="daily-profit">$4 188,56</span>
                                    </td>
                                    <td>
                                        <span class="day">Saturday</span>
                                        <span class="daily-profit">$3 794,16</span>
                                    </td>
                                    <td>
                                        <span class="day">Sunday</span>
                                        <span class="daily-profit">$2 973,71</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <div class="client">
                                            <img src="/landing-assets/fintechltd/img/live-results/2.jpg"
                                                 alt="Jack Stolz">
                                            <div class="client-info">
                                                <h3>Jack Stolz</h3>
                                                <span><em>From</em> Washington, USA</span>
                                                <span><em>Member since</em> 12/11/2015</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="day">Monday</span>
                                        <span class="daily-profit">$2 564,03</span>
                                    </td>
                                    <td>
                                        <span class="day">Tuesday</span>
                                        <span class="daily-profit">$3 491,21</span>
                                    </td>
                                    <td>
                                        <span class="day">Wednesday</span>
                                        <span class="daily-profit">$3 964,98</span>
                                    </td>
                                    <td>
                                        <span class="day">Thursday</span>
                                        <span class="daily-profit">$1 796,01</span>
                                    </td>
                                    <td>
                                        <span class="day">Friday</span>
                                        <span class="daily-profit">$2 819,32</span>
                                    </td>
                                    <td>
                                        <span class="day">Saturday</span>
                                        <span class="daily-profit">$3 808,25</span>
                                    </td>
                                    <td>
                                        <span class="day">Sunday</span>
                                        <span class="daily-profit">$4 681,21</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <div class="client">
                                            <img src="/landing-assets/fintechltd/img/live-results/3.jpg"
                                                 alt="Adriana Rada">
                                            <div class="client-info">
                                                <h3>Adriana Rada</h3>
                                                <span><em>From</em> Prague, Chech Republic</span>
                                                <span><em>Member since</em> 08/10/2015</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="day">Monday</span>
                                        <span class="daily-profit">$2 565,20</span>
                                    </td>
                                    <td>
                                        <span class="day">Tuesday</span>
                                        <span class="daily-profit">$1 725,24</span>
                                    </td>
                                    <td>
                                        <span class="day">Wednesday</span>
                                        <span class="daily-profit">$1 873,69</span>
                                    </td>
                                    <td>
                                        <span class="day">Thursday</span>
                                        <span class="daily-profit">$1 546,02</span>
                                    </td>
                                    <td>
                                        <span class="day">Friday</span>
                                        <span class="daily-profit">$2 012,39</span>
                                    </td>
                                    <td>
                                        <span class="day">Saturday</span>
                                        <span class="daily-profit">$2 966,25</span>
                                    </td>
                                    <td>
                                        <span class="day">Sunday</span>
                                        <span class="daily-profit">$3 728,70</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.weeks -->
                        <button class="full-width" data-scrollto="home">SIGN UP NOW</button>
                    </div><!-- /.wrapper -->
                </section>

                <section id="technology" class="technologies-section">
                    <div class="wrapper clearfix">
                        <h1>Award Winning <strong>Technology</strong></h1>
                        <h2>FinTech Assets Trading software inspects assets like stocks,
                            commodities, indices and currencies in <strong>the biggest exchanges around the
                                world</strong>.</h2>

                        <div class="center">
                            <img src="/landing-assets/fintechltd/img/indeces.jpg" alt="Indeces">
                        </div>

                        <h2 class="clearfix">You may not know the difference between straddles, strangles, spreads and
                            swaps,
                            but dont worry - you don’t have to. <strong>24/7</strong> in exchanges around the globe,
                            your
                            personal
                            program will be making profitable trades <strong>for you</strong>.</h2>

                    </div><!-- /.wrapper -->
                </section>

                <section id="investors">
                    <div class="wrapper clearfix">
                        <h1>Our successfull investors share their stories:</h1>
                        <div class="w1_3 left">
                            <ul class="audio-list">
                                <li>
                                    <audio id="audio-1">
                                        <source src="/landing-assets/fintechltd/media/audio/1.mp3">
                                    </audio>
                                    <a href="#" class="play">Sebastian Bias, <em>Amsterdam</em></a>
                                </li>
                                <li>
                                    <audio id="audio-2">
                                        <source src="/landing-assets/fintechltd/media/audio/2.mp3">
                                    </audio>
                                    <a href="#" class="play">Ivan Hulet, <em>New York</em></a>
                                </li>
                                <li>
                                    <audio id="audio-3">
                                        <source src="/landing-assets/fintechltd/media/audio/3.mp3">
                                    </audio>
                                    <a href="#" class="play">Willis Shatley, <em>London</em></a>
                                </li>
                                <li>
                                    <audio id="audio-4">
                                        <source src="/landing-assets/fintechltd/media/audio/4.mp3">
                                    </audio>
                                    <a href="#" class="play">Flavia Lieu, <em>New Jersey</em></a>
                                </li>
                                <li>
                                    <audio id="audio-5">
                                        <source src="/landing-assets/fintechltd/media/audio/5.mp3">
                                    </audio>
                                    <a href="#" class="play">Lilia Mendelson, <em>London</em></a>
                                </li>
                                <li>
                                    <audio id="audio-6">
                                        <source src="/landing-assets/fintechltd/media/audio/6.mp3">
                                    </audio>
                                    <a href="#" class="play">Emma Roderich, <em>Berlin</em></a>
                                </li>
                            </ul>
                        </div>
                        <div class="w2_3 right">
                            <ul class="video-list">
                                <li>
                                    <!-- data-video="169676239" -->
                                    <a href="#" class="play-video" data-video="8EsfXgPVuQE">
                                        <img src="/landing-assets/fintechltd/img/video/1.jpg" alt="">
                                        <span>Kenneth Miller <em>New Jersey</em></span>
                                    </a>
                                </li>
                                <li>
                                    <!-- data-video="169676245" -->
                                    <a href="#" class="play-video" data-video="m3T8FvtP8Rc">
                                        <img src="/landing-assets/fintechltd/img/video/2.jpg" alt="">
                                        <span>Susan Smith <em>Oklahoma</em></span>
                                    </a>
                                </li>
                                <li>
                                    <!-- data-video="169676241" -->
                                    <a href="#" class="play-video" data-video="Bgyuty7mOis">
                                        <img src="/landing-assets/fintechltd/img/video/3.jpg" alt="">
                                        <span>Anthony Cook <em>Los Angeles</em></span>
                                    </a>
                                </li>
                                <li>
                                    <!-- data-video="169676240" -->
                                    <a href="#" class="play-video" data-video="asoVpCkD9Lk">
                                        <img src="/landing-assets/fintechltd/img/video/4.jpg" alt="">
                                        <span>Daniel Scott <em>Florida</em></span>
                                    </a>
                                </li>
                                <li>
                                    <!-- data-video="169676242" -->
                                    <a href="#" class="play-video" data-video="D2s_UwwlcK0">
                                        <img src="/landing-assets/fintechltd/img/video/5.jpg" alt="">
                                        <span>Timothy Brown <em>Washington</em></span>
                                    </a>
                                </li>
                                <li>
                                    <!-- data-video="169676244" -->
                                    <a href="#" class="play-video" data-video="s0w-Mscwt8k">
                                        <img src="/landing-assets/fintechltd/img/video/6.jpg" alt="">
                                        <span>Amanda Phillpis <em>New York</em></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <button class="full-width" data-scrollto="home">JOIN NOW! <span style="font-weight: normal;">It's Free</span>
                        </button>
                    </div><!-- /.wrapper -->
                </section>

                <section id="faq">
                    <div class="wrapper clearfix">
                        <h1>Frequently Asked Questions</h1>
                        <div class="w1_2 left">
                            <ul class="faq">
                                <li>
                                    <h2>What’s Fintech Ltd.?</h2>
                                    <div class="answer">Fintech Ltd is an Algo-Trading system which uses innovative and
                                        precise
                                        algorithm that works with thousands unique data inputs. All this runs on
                                        infrastructure
                                        and extremely fast computers to buy and sell assets, currencies and futures in
                                        the
                                        financial markets. The company which employs 181 workers, projects a Net Revenue
                                        of $540
                                        million by the end of the year.
                                    </div>
                                </li>
                                <li>
                                    <h2>When has Fintech Ltd. been established?</h2>
                                    <div class="answer"><strong>FINTECH</strong> was established by its founding members
                                        on
                                        March 2013. Within two years the company was achieving a Net income of $404
                                        million
                                        for its members. They’ve been increasing the numbers for the last 2 years.
                                    </div>
                                </li>
                                <li>
                                    <h2>What can Fintech Ltd. do for me?</h2>
                                    <div class="answer">By linking up to our master account which is <strong>100%
                                            FREE</strong>,
                                        we can make <strong>GUARANTEED daily profits of $2,500</strong> for you
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="w1_2 right">
                            <ul class="faq">
                                <li>
                                    <h2>What’s the amount of money I can make per day?</h2>
                                    <div class="answer">We guarantee you will be making a <strong>daily average of
                                            $2,500</strong> , which equals a total of <strong>$18,000 per week</strong>.
                                        Check out
                                        our membership page to see exactly what we’ve been doing for our current
                                        members, and
                                        what we soon hope to be doing for you too.
                                    </div>
                                </li>
                                <li>
                                    <h2>How does it work?</h2>
                                    <div class="answer"><strong>FINTECH</strong> uses innovative and precise algorithm
                                        which
                                        works with thousands unique data inputs, fast computers to buy and sell assets,
                                        currencies and futures in the financial markets. For the assets it gets interest
                                        in, it
                                        offers both a BUY and SALE price. At the end of the day it sells the majority of
                                        positions – and earns a lot of money. For you it does all this in AutoPilot to
                                        guarantee
                                        your profits.
                                    </div>
                                </li>
                                <li>
                                    <h2>How do I start?</h2>
                                    <div class="answer">That’s very simple. Just fill out the registration form while
                                        still
                                        available, make your initial investment and your account will be automatically
                                        linked to
                                        their system, All the work will be <strong>100% done for you</strong> and you
                                        will
                                        collect your winnings.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.wrapper -->
                </section>

                <section class="register-bottom-section">
                    <div class="wrapper form-loader-container">
                        <h1>Complete registration <br><strong class="accented-text">and start today</strong></h1>
                        <form action="" id="registration_form_bottom" method="post">
                            <fieldset class="full-register lower-form">
                                {{ csrf_field() }}
                                <div>
                                    <input id="name2" name="name" type="text" class="full-width"
                                           placeholder="Full name" data-key="fullname">
                                </div>
                                <div>
                                    <input id="email2" name="email" data-key="email" type="email" class="full-width"
                                           placeholder="Enter your email">
                                    <span class="error-message hidden">Please, enter valid email.</span>
                                </div>

                                <div>
                                    <input type="text" id="phone2" name="phone" placeholder="Enter your phone">
                                </div><!-- /.row -->
                                <input type="hidden" name="tid" class="transaction_id">
                                <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                                <input type="submit" class="full-width" value="Sign Up Now">
                            </fieldset>
                        </form>
                        <div class="form-loader">
                            <div class="loader-gif">
                                <img src="/landing-assets/fintechltd/img/loading_icon.gif" alt="loader">
                            </div>
                            <div class="loader-text">
                                <ul class="bottomRotatingList">
                                    <li>
                                        <p>
                                            <strong>1 of 4: Selecting the most profitable broker...</strong>
                                        </p>
                                        <p class="hiddenInner"><strong class="success"> Broker Selected!</strong></p>
                                    </li>

                                    <li>
                                        <p>
                                            <strong>2 of 4: Setting up your brokerage account...</strong>
                                        </p>
                                        <p class="hiddenInner"><strong class="success"> Account created!</strong></p>
                                    </li>

                                    <li>
                                        <p>
                                            <strong>3 of 4: Building your App...</strong>
                                        </p>
                                        <p class="hiddenInner"><strong class="success"> Trading App Ready!</strong></p>
                                    </li>

                                    <li>
                                        <p>
                                            <strong>4 of 4: Connecting to the trading platform</strong>
                                        </p>
                                        <p class="hiddenInner"><strong class="success"> Trading Platform
                                                Connected!</strong></p>
                                    </li>

                                    <li>
                                        <p>
                                            <strong> Starting Your app...</strong>
                                        </p>
                                        <p class="hiddenInner"><strong class="success"> Please wait up to 10
                                                seconds...</strong></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.wrapper -->

                </section>

                <section class="certificates-section">
                    <div class="wrapper">
                        <ul class="certificates">
                            <li><img src="/landing-assets/fintechltd/img/certificates/1.png"
                                     alt="Premium service, guaranteed"></li>
                            <li><img src="/landing-assets/fintechltd/img/certificates/2.png" alt="Limited edition"></li>
                            <li><img src="/landing-assets/fintechltd/img/certificates/3.png"
                                     alt="Top quality, 100% confident"></li>
                        </ul>
                    </div><!-- /.wrapper -->
                </section>
            </div><!-- /.content -->

            <footer class="page-footer">
                <div class="wrapper">
                    <ul class="navigation">
                        <li><a href="javascript: void(0);" data-scrollto="home">Home</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="live-results">Live results</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="technology">Technology</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="investors">Investors</a></li>
                        <li><a href="javascript: void(0);" data-scrollto="faq">FAQ</a></li>
                    </ul><!-- /.navigation -->
                    <a href="service.html">Disclaimer</a>
                    <div class="copyright">Copyright © 2014-2016 FinTech All Rights Reserved</div>
                </div><!-- /.wrapper -->
            </footer><!-- /.page-footer -->
        </div><!-- /.page -->

        <div class="modal-container hidden" id="profit-details">
            <div class="modal">
                <a href="#" class="close"><img src="/landing-assets/fintechltd/img/graphic-icons/cross.svg" alt="Close"
                                               width="30"></a>
                <h1>Alfonso Rodriges</h1>
                <div>
                    <img class="person-img" src="" alt="">
                    <dl class="profits-list">
                        <dt>Daily Profit</dt>
                        <dd class="modal-daily-profit">$10</dd>
                        <dt>Last seven days Profit</dt>
                        <dd class="modal-weekly-profit">$100</dd>
                    </dl>
                </div>
            </div><!-- /.modal -->
        </div><!-- /.modal-container -->

        <div class="modal-container hidden" id="video-testimonial">
            <div class="modal">
                <a href="#" class="close"><img src="/landing-assets/fintechltd/img/graphic-icons/cross.svg" alt="Close"
                                               width="30"></a>
                <iframe width="100%" height="444" src="" frameborder="0" allowfullscreen=""></iframe>
            </div><!-- /.modal -->
        </div><!-- /.modal-container -->

        <div class="modal-container hidden" id="single-error">
            <div class="modal">
                <a href="#" class="close"><img src="/landing-assets/fintechltd/img/graphic-icons/cross.svg" alt="Close"
                                               width="30"></a>
                <h1>An error has occurred</h1>
                <p></p>
                <h3>Please, make sure that the entered information is valid.</h3>
            </div><!-- /.modal -->
        </div><!-- /.modal-container -->
    </div>
@endsection

@section('extra_scripts')
    <script type="text/javascript" src="/landing-assets/fintechltd/js/vendor/es6-promise.min.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/custom/helper.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/vendor/flipclock.min.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/config.js"></script>
    <script type="text/javascript" src="/landing-assets/fintechltd/js/init.js"></script>
    <script>
        mainApp.unload();
        $(function () {
            mainApp.step2();
        });
    </script>
    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
    <script src="/js/validate_phone.js"></script>
    @endif
@endsection







