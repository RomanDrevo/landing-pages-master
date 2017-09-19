@extends('layouts.main')


@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/extra-dollars/css/styles.css" />

@endsection

@section("content")

    <div class="container-fluid" id="main-content">
        <div class="wrapper">
            <div class="row logo-row">
                @include('partials.logo')
            </div>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="right col-md-6">
                    <div class="row text">
                        <h1>Everyone could use a few<br> <span>extra dollars</span></h1>
                        <p>What if you could make that money from the comfort of your own home<br>
                            Learn how to bring the extra money without getting off you couch.</p>
                    </div>
                    <div class="row form">
                        <div class="col-md-3"></div>
                        <form method="POST" id="registration_form">
                            {{ csrf_field() }}
                        <div class="col-md-6">
                            <span class="form-text">fill in this quick form</span>
                            <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
                            <input type="text" name="name" id="name" placeholder="your name">
                            <input type="text" name="email" id="email" placeholder="your email">
                            <input type="text" name="phone" id="phone" placeholder="your phone">
                            <input type="submit" name="submit" id="submit" value="sign up">
                        </div>
                        </form>
                        <div class="col-md-3"></div>
                    </div>
                </div>

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

