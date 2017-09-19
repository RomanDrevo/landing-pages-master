@extends('layouts.main')


@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/social/css/styles.css" />

@endsection

@section("content")

    <div class="container-fluid" id="main-content">
        <div class="wrapper">
            <div class="row logo-row">
                @include('partials.logo')
            </div>
            <div class="row">
                <div class="col-sm-5">

                </div>
                <div class="right col-sm-6">
                    <div class="row text">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-11">
                            <h1>You can earn like an apple executive<br> or a facebook manager</h1>
                            <p>Tons of people make money off of the biggest brands and<br> you can get in on the action.
                                Learn how now.</p>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <form method="POST" id="registration_form">

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
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
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

