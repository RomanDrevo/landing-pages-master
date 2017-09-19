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
	<title>Landings | Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/admin/styles.css">
	<link rel="stylesheet" href="/css/toastr.min.css">
	@yield('extra_styles')
</head>
<body>

	@yield('content')
	

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/toastr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
	<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip(); 
	});
	</script>
	@yield('extra_scripts')
</body>
</html>