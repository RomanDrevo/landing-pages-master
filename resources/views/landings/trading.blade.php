@extends('layouts.main')

@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/easy-trade/css/styles.css" />

@endsection

@section("content")

    <div class="container-fluid" id="main-content">
        <div class="wrapper">
            <div class="row logo-row">
                @include('partials.logo')
            </div>

            <div class="row">
                <div class="right col-md-6">
                    <div class="row text">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <h1><span class="span1">Trading  made</span> <span class="span2">easy</span><br> with the best trading signals </h1>
                            <p>It takes a lot of time and effort to read and analyse the market every day.
                                So unless it’s your job to do this, let the experts do the heavy lifting.
                                With Harrison & Woods you get the benefit of round the clock market
                                analysis from the best in the business.
                            </p>

                            <p class="clients">
                                <span class="number">93.7%</span> of our clients claimed a significant change in their win rates!
                            </p>

                            <span class="">Sign up now to get our daily signals directly to your email.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <form method="POST" id="registration_form">
                            {{ csrf_field() }}
                            <div class="col-md-5">
                                <input type="text" name="name" id="name" placeholder="your name">
                                <input type="text" name="email" id="email" placeholder="your email">
                            </div>
                            <div class="col-md-5">
                                <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">

                                {{--<input type="hidden" name="source_id" id="source_id" value="{{$source->id}}">--}}
                                <input type="text" name="phone" id="phone" placeholder="your phone">
                                <input type="submit" name="submit" id="submit" value="sign up">
                            </div>
                        </form>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    @include('partials.messages')
                </div>

                <div class="col-md-1"></div>
            </div>
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

