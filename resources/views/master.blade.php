<!DOCTYPE html>
<html>
	<head>
		@include('layouts.head')
	</head>
	<body>
		@include('layouts.nav')

		@yield('content')

		@include('layouts.footer')
		
		@include('sweetalert::alert')


	</body>
</html>