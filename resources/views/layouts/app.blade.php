</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/bootstrap.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/main.css') }}">
	<!--===============================================================================================-->
</head>

<body>

	@yield('content')

	<!--===============================================================================================-->
	<script src="{{ asset('Dashboard/js/jquery.js') }}"></script>
	<script src="{{ asset('Dashboard/js/bootstrap.js') }}"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
    <script src="{{ asset('Dashboard/js/main.js') }}"></script>

    <!-- Plugin added sweetalert custom-->
    @include('sweetalert::alert');

</body>

</html>

<!-- <link rel="stylesheet" href=""> -->
