@extends('layouts.main')


@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/schemes/css/styles.css" />

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
                            <h1>lost money in financial schemes? <span class="header-span"><br>we’ll help you recover it.</span></h1>
                            <p>Everyone makes bad financial decisions at some point whether from ill-conceived investments,
                                trusting the wrong person, or just plain bad luck. We want to help you get back on track.
                            </p>
                            <h4>The Roiteks Financial Recovery program will:</h4>
                            <ul>
                                <li>Do an in depth analysis of your financial history</li>
                                <li>Create a personalized recovery plan for your needs</li>
                                <li>Work with you to fully and comfortably execute your plan</li>
                            </ul>
                            <span class="ul-span">Schedule a free consultation call </span>
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

