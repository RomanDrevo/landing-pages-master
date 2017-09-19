<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="" name="description">
	<meta content="" property="og:image">
	<meta content="" property="og:description">
	<meta content="" property="og:site_name">
	<meta content="website" property="og:type">
	<meta content="telephone=no" name="format-detection">
	<meta http-equiv="x-rim-auto-match" content="none">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="_token" content="{{ csrf_token() }}">
	<title>{{ $landing->title }}</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/toastr.min.css">
	@yield('extra_styles')
</head>
<body>
	
	@yield('content')
	

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/intlTelInput.min.js"></script>
	<script src="/js/toastr.min.js"></script>
	@yield('extra_scripts')
</body>
</html>