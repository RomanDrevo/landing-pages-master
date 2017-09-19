@extends('layouts.main')


@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/landing-arab-2/css/style.css"/>

@endsection

@section("content")

    <div class="container-fluid" id="main-content">
        <div class="content">
            <div class="wrap-bg">
                <header class="header container">
                    <img src="/landing-assets/landing-arab-2/image/72_logo_s.jpg" width="140" alt="logo Opteck" class="header-logo"/>
                </header>
                <div class="bl-sec">
                    <div class="bg-img"></div>
                    <div class="bl-sec__cont container">
                        <div class="info-block">
                            <h2 class="title">
                                أكثر من 4,000 $ خلال يوم واحد فقط!
                            </h2>
                            <div class="wrap-info-ar">
                                <p>
                                    شيء رائع أن يكون عندك مصدر دخل اضافي، حتى وإن كان لديك وظيفة.
                                </p>
                                <p>
                                    هنالك فرص جيدة للربح من تغير أسعار الذهب باستمرار. التداول عبر الإنترنت يسمح لك
                                    بتحقيق الأرباح مهما كان اتجاه تغير الأسعار
                                </p>
                                <p>
                                    هكذّا تمكنّت من تحقيّق أكثر من 4,000 $ كأرباح خلال ساعات قليلة.
                                </p>
                                <p>
                                    إبدأ الآن وتعلم كيّف يُمكنك تحسّين وضعك المّالي بثلاث خطوات بسيطة
                                </p>
                            </div>
                            <button type="button" class="mobile-scroll">سجل الآن</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-item">
                <div class="container">
                    <div class="item">
                        <div class="circle">1</div>
                        <div class="info">
                            <h5>إملء الاستمارة</h5>
                            <p>
                                سجل تفاصيلك واحجز موعد مع مدرب التداول الخاص بك.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="circle">2</div>
                        <div class="info">
                            <h5>تدرّب وتعلّم</h5>
                            <p>
                                طبق النصائح والتقنيات والأدوات التي حصلت عليها من المدرب الخاص بك على حساب تجريبي بقيمة
                                5,000 $
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="circle">3</div>
                        <div class="info">
                            <h5>إبدأ التداول</h5>
                            <p>
                                وكن مستعد لتحقق الأرباح الحقيقية!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container cont-form">
                <div class="bl-main__right" id="form-main">
                    <h5 class="bl-main__right-title">
                        حوّل إستثّمارك إلى ثرّوة من خلال تداوّل الذهب
                    </h5>
                    <style type="text/css">
                        #olgs_block {
                            font-family: Arial, sans-serif, Verdana;
                            font-size: 12px;
                            margin: 10px auto;
                            padding: 7px;
                            width: 400px;
                        }

                        .olgs_list {
                            list-style: none;
                            padding: 0;
                        }

                        .olgs_line {
                            padding: 7px 15px;
                        }

                        .olgs_hidden {
                            display: none !important;
                        }

                        .olgs_label {
                            color: #444;
                            display: block;
                            font-weight: bold;
                        }

                        .olgs_required {
                            color: red;
                            font-weight: bold;
                        }

                        .olgs_input_text {
                            border: 1px solid black;
                            padding: 2px;
                            width: 300px;
                        }

                        .olgs_incorrect {
                            background-color: #FF7171;
                        }

                        .olgs_notice {
                            color: #C90000;
                            display: none;
                            margin: 0 5px;
                        }

                        #olgs_popup_background {
                            background-color: #111;
                            filter: alpha(opacity=65);
                            height: 100%;
                            left: 0;
                            opacity: 0.65;
                            position: fixed;
                            top: 0;
                            width: 100%;
                            z-index: 100001;
                        }

                        #olgs_popup {
                            background-color: #eeeeee;
                            height: 140px;
                            left: 50%;
                            margin-left: -200px;
                            margin-top: -70px;
                            position: fixed;
                            text-align: center;
                            top: 50%;
                            width: 400px;
                            z-index: 100002;
                        }

                        #olgs_success_message {
                            font-size: 18px;
                            padding: 20px;
                        }

                        #olgs_close_popup {
                            margin: 5px;
                        }

                        .olgs_input_text{
                            /*border: 1px solid black;*/
                            /*padding: 2px;*/
                            /*width: 100px;*/
                        }
                    </style>


                    <div id="olgs_block" class="olgs_block_1143 olgs_lng_ar">




                        {{--<form method="POST" id="registration_form">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="col-md-5">--}}
                                {{--<input type="text" name="name" id="name" placeholder="your name">--}}
                                {{--<input type="text" name="email" id="email" placeholder="your email">--}}
                            {{--</div>--}}
                            {{--<div class="col-md-5">--}}
                                {{--<input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">--}}
                                {{--<input type="text" name="phone" id="phone" placeholder="your phone">--}}
                                {{--<input type="submit" name="submit" id="submit" value="sign up">--}}
                            {{--</div>--}}
                        {{--</form>--}}





                        <form method="POST" id="registration_form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" style="margin-left: 7%;">الاسم الكامل<span class="olgs_required">*</span></label>
                            </div>


                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email">البريد الإلكتروني <span class="olgs_required">*</span></label>
                            </div>

                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control">
                                <label for="phone">ﻒﺗﺎﻬﻟﺍﺍ<span class="olgs_required">*</span></label>
                            </div>

                            <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                            <div class="form-group">
                                <input type="submit" id="submit" name="submit" value="سجل الآن" class="form-control olgs_input_submit">
                            </div>
                        </form>
                    </div>


                    <div class="bl-main__right-imgs"></div>
                </div>
            </div>
            <div class="img-before-footer">
                <img class="img-before" src="/landing-assets/landing-arab-2/image/img-before-footer.png" alt="img">
            </div>
            <footer class="bl-footer">
                <div class="bl-footer__wrap container">
                    <div class="logo-footer">
                        <img src="/landing-assets/landing-arab-2/image/72_logo_vs.jpg" class="" alt="logo-footer">
                    </div>
                    <p class="some-text">
                        .،ﺕﻼﻤﻌﻟﺍ ﻞﺜﻣ ﺔﻴﺳﺎﺳﻷﺍ ﻝﻮﺻﻷﺍ ﻦﻣ 70 ﻦﻣ ﺮﺜﻛﺃ ﻰﻠﻋ ﻝﻭﺍﺪﺘﻟﺍ ﺭﺎﻴﺧ ﺎﻬﺋﻼﻤﻌﻟ ﺮﻓﻮﺗ ﺖﻧﺮﺘﻧﻻﺍ ﺮﺒﻋ ﺔﻴﺋﺎﻨﺜﻟﺍ
                        ﺕﺍﺭﺎﻴﺨﻟﺍ ﻝﻭﺍﺪﺘﻟ ﺔﺼﻨﻣ ﻲﻫ ™ﻚﺘﺑﻭﺃ .ﻙﺭﺎﻤﺜﺘﺳﺍ ﻦﻣ ﺔﻴﻟﺎﻋ ﺡﺎﺑﺭﺍ ﺪﺋﺎﻋ ﺪﻟﻮﻳ ﻥﺃ ﺔﻴﺋﺎﻨﺜﻟﺍ ﺕﺍﺭﺎﻴﺨﻟﺍ ﻝﻭﺍﺪﺘﻟ
                        ﻦﻜﻤﻤﻟﺍ ﻦﻣ :
                        ﻥﺎﻤﻀﻟﺍ ﻡﺪﻋ ﻁﺮﺷ .ﻢﻬﺳﻷﺍﻭ ﻊﻠﺴﻟﺍ ،ﺕﺍﺮﺷﺆﻤﻟﺍ .ﺎﻨﻌﻣ ﻚﻟﻭﺍﺪﺗ ﺀﺪﺑ ﻞﺒﻗ ﺎﻨﻌﻗﻮﻣ ﻲﻓ ﻁﻭﺮﺸﻟﺍﻭ ﺩﻮﻨﺒﻟﺍ ﺃﺮﻘﺗ ﻥﺃ
                        ﺓﺪﺸﺑ ﻚﻴﻠﻋ ﺡﺮﺘﻘﻧ .ﻲﻟﻭﻷﺍ ﻙﺭﺎﻤﺜﺘﺳﺍ ﻥﺍﺪﻘﻓ ﺮﻄﺧ ﻦﻤﻀﺘﻳ ﻪﻧﺃ ﺎﻤﻛ
                    </p>
                </div>
            </footer>
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

