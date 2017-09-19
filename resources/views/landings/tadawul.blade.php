@extends('layouts.main')


@section('extra_styles')

    {{--<link rel="stylesheet" href="/landing-assets/tadawul/css/style.css"/>--}}

@endsection

@section("content")
    <style>

        @import url('https://fonts.googleapis.com/css?family=Cairo:400,600,700,900&subset=arabic');

        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,
        section,summary,time,mark,audio,video{
            margin:0;
            padding:0;
            border:0;
            font:inherit;
            font-size:100%;
            vertical-align:baseline
        }
        html{
            line-height:1
        }
        ol,ul{
            list-style:none
        }
        table{
            border-collapse:collapse;border-spacing:0
        }
        caption,th,td{
            text-align:left;font-weight:normal;vertical-align:middle
        }
        q,blockquote{
            quotes:none
        }
        q:before,q:after,blockquote:before,blockquote:after{
            content:"";content:none
        }
        a img{
            border:none
        }
        article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{
            display:block
        }
        body{
            font-family: 'Cairo', sans-serif;
            font-size:100%;
            background-color:#52555a;
            direction:rtl
        }

        form{
            /*direction: ltr;*/
        }
        button{
            font-family: 'Cairo', sans-serif;
        }
        h1{
            font-size:4em;
            line-height:1;
            color:#50a5fb;
            font-weight:bold;
            margin:10px 0;
            text-align:center;
            flex:0 auto;
            text-shadow:1px 1px 3px rgba(0,0,0,0.75)
        }
        main{
            display:flex;flex-direction:column
        }
        @media screen and (min-width: 600px){
            main{height:559px;background:url(/landing-assets/tadawul/img/bg.jpg) 50% 0 no-repeat
            }
        }
        article{
            flex:1 79%;
            width:1000px;
            max-width:100%;
            display:flex;
            flex-flow:column;
            flex-wrap:wrap;
            margin:auto;
            position:relative
        }
        section{
            flex:1 40%;
            width:350px;
            max-width:100%
        }
        section h2{
            color:#fd915f;
            font-size:1.25em;
            line-height:28px;
            font-weight:700;
            margin-bottom:15px;
            text-shadow:1px 1px 3px rgba(0,0,0,0.75)
        }
        section div{margin-right:130px;
            color:#fff;
            font-size:1em
        }

        section div:after{content:'';
            display:table;
            clear:both;
            height:.3em
        }
        section h4{font-weight:700;
            background-color:#50a5fb;
            color:#fff;
            text-shadow:1px 1px 3px rgba(0,0,0,0.75);
            font-size:1.25em;
            line-height:1.3;
            padding:4px;
            display:inline-block;
            white-space:nowrap
        }
        section img{width:115px;
            height:115px;
            box-shadow:0 0 3px 1px rgba(0,0,0,0.75);
            float:right
        }
        section:nth-of-type(3){
            display:flex;
            flex-direction:column
        }
        @media screen and (min-width: 600px){
            section:nth-of-type(3){
                position:absolute;
                top:0;
                bottom:0;
                left:0
            }
        }
        section:nth-of-type(3) img{
            display:none
        }
        section:nth-of-type(3) h4{
            white-space:normal;
            margin-bottom:10px
        }
        section:nth-of-type(3) div{
            margin-right:0;
            margin-bottom:auto
        }
        section.form{
            padding:0 11px;
            background:linear-gradient(to top, #BAAEA3 0, #0A0A0A 100%);
            box-shadow:0px 1px 3px 2px rgba(0,0,0,0.25);
            border-radius:3px
        }
        @media screen and (min-width: 600px){
            section.form{
                position:absolute;
                left:50%;
                top:10px;
                transform:translatex(-50%);
                z-index:10;
                width:216px
            }
        }
        section.form div{
            margin:0
        }
        section.form div:after{
            content:initial
        }
        section.form .mauticform-row{
            margin:0 0 8px 0
        }
        section.form .mauticform-row label{
            display:none
        }
        section.form .mauticform-row input,section.form .mauticform-row select{
            border-radius:0;
            line-height:1.5;
            width:100%;
            background:#fff;
            border:none;
            height:30px
        }
        section.form .mauticform-row input{
            line-height:1
        }
        section.form .mauticform-row input[type=checkbox]{
            width:auto
        }
        section.form .mauticform-row button[type=submit]{
            background:url(/landing-assets/tadawul/img/button.png) 0 0 no-repeat;
            width:217px;
            height:66px;
            font-size:0;
            cursor:pointer;
            border:none
        }
        section.form .mauticform-row.phoneprefix input{
            /*text-align:center*/
        }
        section.form .mauticform-row.header{
            /*text-align:center;*/
            line-height:1.3
        }
        section.form .mauticform-row.header h3{
            font-size:2em;
            font-weight:700
        }
        section.form .mauticform-row.header .mauticform-freehtml{
            font-size:1.25em;
            font-weight:700
        }
        section.form .mauticform-row.phoneprefix{
            width:5em;
            /*float:left*/
        }
        section.form .mauticform-row.phoneprefix+div{
            /*float:right;*/
            width:calc(100% - 5.5em);
            margin-bottom:0
        }
        section.form .mauticform-row.phoneprefix+div:after{
            display:table;
            content:'';
            clear:both
        }
        section.form .mauticform-checkboxgrp{
            position:absolute;
            font-size:0;
            height:30px;
            margin-top:-40px
        }
        section.form .agree-text{
            clear:both;
            line-height:30px;
            font-size:.6em;
            color:#020202;
            margin-right:30px
        }
        section.form .mauticform-checkboxgrp label{
            display:block
        }
        footer{
            text-align:center
        }
        footer .features:before{
            content:url(/landing-assets/tadawul/img/footericons.png)
        }
        footer .brands{
            background-color:#f3f3f3;
            margin:auto
        }
        footer .brands:before{
            content:url(/landing-assets/tadawul/img/footer-seals.png)
        }
        footer p{
            width:1000px;
            max-width:100%;
            font-size:.75em;
            line-height:1.3;
            text-align:right;
            margin:auto;
            color:#f3f3f3;
            margin-top:1em
        }
        @media screen and (max-width: 599px){
            html{
                font-size:13px
            }
            body{
                background:#000
            }
            h1{font-size:calc(1em + 4.5vw);
                padding:.5em 0
            }
            article{
                flex:1 auto;
                background:#555452;
                width:100vw;
                height:auto
            }
            section{
                flex:1 auto;
                width:100%;
                padding:0;
                box-sizing:border-box;
                order:3
            }
            section h2{
                font-size:calc(1em + 3vw);
                text-align:center;
                margin-top:.5em
            }
            section h4{
                padding:.3em 1em;
                display:block;
                white-space:normal;
                font-size:calc(1em + 2.5vw);
                text-align:center;
                margin-bottom:0 !important
            }
            section img{
                margin-right:10px
            }
            section.test1 div,section.test2 div{
                padding:0 .5em;
                font-size:calc(10px + 1.3vw);
                line-height:1.2
            }
            section:nth-of-type(3){
                order:1;
                position:relative
            }
            section:nth-of-type(3) h2{
                position:absolute;
                top:0;
                left:0;
                width:100%;
                text-align:center
            }
            section:nth-of-type(3) img{
                display:block;
                width:100vw;
                height:auto;
                margin-bottom:10px;
                margin-right:0
            }
            section:nth-of-type(3) div{
                display:none
            }
            footer div{
                display:none
            }
            footer p{
                padding:1em;
                box-sizing:border-box
            }
            section.form{
                background:#1c1c1c;
                padding:1em;
                order:2
            }
            section.form .agree-text{
                font-size:1em
            }
            section.form input,section.form select{
                height:37px;
                font-size:18px;
                padding:4px;
                background-color:#fff;
                border:none;
                box-sizing:border-box
            }
            section.form .mauticform-row{
                margin-bottom:16px
            }
            section.form .mauticform-row.header h3{
                font-size:3em
            }
            section.form .mauticform-row.header .mauticform-freehtml{
                font-size:20px
            }
            section.form .mauticform-checkboxgrp input{
                margin-top:-3px
            }
            section.form .agree-text a{
                color:#0861bb
            }
            section.form .mauticform-row button[type=submit]{
                width:100%;
                font-size:35px;
                color:#000;
                font-weight:700;
                text-transform:uppercase;
                height:75px;
                background:#abeb3c;
                background:linear-gradient(to bottom, #abeb3c 0%, #87d32d 100%);
                border-bottom:#3f6f07 solid 3px;border-radius:5px
            }
        }

        .form-group{
            margin-top: 6%!important;
            margin-bottom: 6%!important;
        }

        .country-list,
        .country,
        .country-highlight{
            direction: ltr;
        }

        .country,
        .country-highlight{
            color: black;
        }

        #phone{
            direction: ltr;
        }
    </style>

    <div class="container-fluid" id="main-content">
        <main>
            <h1>اختبر طريق النجاح مثلنا</h1>
            <article>
                <section class="test1">
                    <h2>الدكتور احمد خليفة-ابو ظبي</h2>
                    <img src="/landing-assets/tadawul/img/doctor.jpg" alt="" />
                    <div>
                        شركة 72Option رائعة وجديرة بالثقة تساعد على تحقيق الارباح في وقت قصير جدا. إنا اشكر الشركة بحيث تهتم حقا لنجاح زبائنها وتحقيق الارباح لهم
                    </div>
                    <h4> توصياتهم حققت لي 10501 شهري</h4>
                </section>
                <section class="test2">
                    <h2>نورة العنزي- الكويت</h2>
                    <img src="/landing-assets/tadawul/img/wife.jpg" alt="" />
                    <div>
                        لقد تعاملت مع شركات للتداول من قبل ولم أستطع الوصول لما اريد. وعندما إبتدأت بالتعامل مع 72Option حققت وفي وقت سريع جدا اكثر مما توقعت. إنها فعلا شركة رائعة وانصح الجميع بالتعامل معها.
                    </div>
                    <h4> فتحت حساب تداول وحققت 590$ خلال شهر</h4>
                </section>
                <section>
                    <h2>فارس القرشي - السعودية</h2>
                    <img src="/landing-assets/tadawul/img/couple-mobile.jpg" alt="" />
                    <div>
                        من خلال اشتراكي مع 72Option حصلت على دخل جيد لي ولأسرتي. لقد وفرت لي هذه الشركة فرصة استثمارية كبيرة وقدمت الحلول المناسبه لنجاحي وتقدمي.
                    </div>
                    <h4>لقد ازداد مدخولي الشهري ب 750 دولار من دون جهد</h4>
                </section>
                <section data-slot-container="1" class="form">
                    <div data-slot="text">
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
                                <label for="phone">الهاتف<span class="olgs_required">*</span></label>
                            </div>

                            <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                            <div class="form-group">
                                <input type="submit" id="submit" name="submit" value="سجل الآن" class="form-control olgs_input_submit">
                            </div>
                        </form>




                        {{--<div id="mauticform_wrapper_testimonialsar" class="mauticform_wrapper">--}}
                            {{--<form autocomplete="false" role="form" method="post"  id="registration_form" data-mautic-form="testimonialsar">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">--}}
                                {{--<div class="mauticform-error" id="mauticform_testimonialsar_error"></div>--}}
                                {{--<div class="mauticform-message" id="mauticform_testimonialsar_message"></div>--}}
                                {{--<div class="mauticform-innerform">--}}


                                    {{--<div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">--}}

                                        {{--<div id="mauticform_testimonialsar_sjl_alan" class="mauticform-row mauticform-freehtml mauticform-field-1 header">--}}
                                            {{--<h3 id="mauticform_label_testimonialsar_sjl_alan" for="mauticform_input_testimonialsar_sjl_alan" class="mauticform-label">--}}
                                                {{--سجل الآن--}}
                                            {{--</h3>--}}
                                            {{--<div id="mauticform_input_testimonialsar_sjl_alan" name="mauticform[sjl_alan]" value="" class="mauticform-freehtml">--}}
                                                {{--كل ثانية لها قيمتها--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div id="mauticform_testimonialsar_first_name"  data-validate="first_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">--}}
                                            {{--<input id="name" name="name" value="" placeholder="الأسم الأول" class="mauticform-input" type="text" />--}}
                                            {{--<span class="mauticform-errormsg" style="display: none;">Please enter your first name, at least 2 characters (a-z, A-Z allowed only)</span>--}}
                                        {{--</div>--}}


                                        {{--<div id="mauticform_testimonialsar_phone"  data-validate="phone" data-validation-type="tel" class="mauticform-row mauticform-tel mauticform-field-6 mauticform-required">--}}
                                            {{--<label id="mauticform_label_testimonialsar_phone" for="phone" class="mauticform-label">Phone</label>--}}
                                            {{--<input id="phone" name="phone" value="" placeholder="رقم الهاتف" class="mauticform-input" type="text" />--}}
                                            {{--<span class="mauticform-errormsg" style="display: none;">من فضلك إدخل رقم الهاتف .على الأقل 7 أرقام</span>--}}
                                        {{--</div>--}}

                                        {{--<div id="mauticform_testimonialsar_email"  data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-7 mauticform-required">--}}
                                            {{--<input id="email" name="email" value="" placeholder="الإيميل" class="mauticform-input" type="email" />--}}
                                            {{--<span class="mauticform-errormsg" style="display: none;">يرجى تقديم عنوان بريد إلكتروني صحيح. مثال: name@somedomain.com</span>--}}
                                        {{--</div>--}}

                                        {{--<div id="mauticform_testimonialsar_none" class="mauticform-row mauticform-freehtml mauticform-field-8 agree-text">--}}
                                            {{--<div id="mauticform_input_testimonialsar_none" name="mauticform[none]" value="" class="mauticform-freehtml">--}}
                                                {{--<span>لقد قرأت واوافق على </span><a href="https://tadawul.trade/legalterms-conditions" target="_blank">الشروط والأحكام</a>.--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div id="mauticform_testimonialsar_submit"  class="mauticform-row mauticform-button-wrapper mauticform-field-10">--}}
                                            {{--<button type="submit" name="submit" id="submit" value="" class="mauticform-button btn btn-default" value="1">سجل الان مجانا</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            {{--</form>--}}
                        {{--</div>--}}
                    </div>
                </section>
            </article>
        </main>
        <footer>
            <div class="features"></div>
            <div class="brands"></div>
            <p> التجارة بالخيارات الثنائية تتضمن مخاطرة ولذلك ننصح بشدة أن تقرأ الشروط والأحكام. على الرغم من أن المخاطرة عند التداول في الخيارات الثنائية هو ثابت لكل عملية تداول، الصفقات هي حية وأنه من الممكن أن يخسر استثمارا أوليا، ولا سيما إذا كان المتداول يختار الاستثمار بأكمل المبلغ . لهذا ننصح بشدة أن المتداول الذي إختار استراتيجية إدارة الأموال السليم باختيار المبلغ المناسب.  </p>
        </footer>
    </div>
@endsection

@section('extra_scripts')

    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif


    <script src="/js/validate_full_name.js"></script>
@endsection

