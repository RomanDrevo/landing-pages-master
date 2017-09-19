@extends('layouts.main')

@section('extra_styles')


<link rel="stylesheet" href="/landing-assets/mortgage/css/styles.css" />

@endsection

@section("content")

<div class="container-fluid" id="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="row logo-row">
				@include('partials.logo')
			</div>
			<div class="left col-sm-8">
				<div class="row text">
					<h1>What if you could<br/>
						<span>Pay off your mortgage  twice as fast?</span>
					</h1>	
					<p>Buying a house shouldn’t mean spending years as a slave to mortgage payments. Standard payment plans can go on for years, even decades. Roiteks strives to help their clients cut the payment time in half.</p>
					<p class="bolder">Relief the stress of payments grow your income with online trading. </p>
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

			<div class="col-sm-">
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

