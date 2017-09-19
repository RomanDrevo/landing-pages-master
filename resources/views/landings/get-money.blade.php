@extends('layouts.main')


@section('extra_styles')

<link rel="stylesheet" href="/landing-assets/present/css/styles.css" />

@endsection

@section("content")

<div class="container-fluid">
	<div class="wrapper">
		<div class="row logo-row">
			@include('partials.logo')
		</div>
		<div class="row">
			<div class="col-sm-5">
				
			</div>
			<div class="right col-sm-6">
				<div class="row text">
					<h1><span>it's present</span> - buying time.</h1>
					<p>Earn some extra cash and make sure to empress your entire family!
					No one wants cheap socks! Find out how to earn the extra money to buy the best gifts.</p>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<form action="" method="POST" id="registration_form">
						{{ csrf_field() }}
						<div class="col-md-5"> 
							<input type="text" name="name" placeholder="your name">
							<input type="text" name="email" placeholder="your email">
						</div>
						<div class="col-md-5">
							<input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">
							<input type="text" name="phone" placeholder="your phone">
							<input type="submit" name="submit" value="sign up">
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
