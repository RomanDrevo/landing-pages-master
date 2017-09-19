@extends('layouts.main')

@section('extra_styles')


<link rel="stylesheet" href="/landing-assets/retirement-fund/css/styles.css" />

@endsection

@section("content")

<div class="container-fluid" id="main-content">
	<div class="wrapper">
		<div class="row logo-row">
			@include('partials.logo')
		</div>
		<div class="row">
		
			<div class="left col-sm-7">
				<div class="row text">
					<h1>Don't let your </h1>
					<h2>Retirement fund<br/>
					sit in a low interest account</h2>
					<p> “Retirement can be the best part of life, when you don’t worry about money. With interest rates dropping every year, leaving your retirement in a low interest IRA, may not be the smartest move you could do”
					<span>- Chris Bryson - Senior Analyst. </span>		
					</p>
					<p class="bolder">Find out how to grow your retirement funds with online trading. </p>
					<p class="last-p">Sign up now to get a free consultation call. </p>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-11">
						<div class="wrap-form">
							<form action="" method="POST" id="registration_form">
								{{ csrf_field() }}
							<div class="col-md-5"> 
							<input type="text" name="name" id="name" >
							<input type="email" name="email" id="email">
							</div>
							<div class="col-md-5">
								{{--<input type="hidden" name="source_id" id="source_id" value="{{$source->id}}">--}}
								<input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">

								<input type="text" name="phone" id="phone" required>
								<input type="submit" name="submit" value="sign up">
							</div>
							</form>
						</div>
						
					</div>
				
					
					
				</div>
			</div>

			<div class="col-sm-4">
				@include('partials.messages')
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

