<!DOCTYPE html>
<html>
	<head>
		@include('layouts.admin.head')
	</head>
	<body class="fixed-left">
		
		@include('layouts.admin.side-menu')

		@include('layouts.admin.topbar')

		@yield('content')

		@include('layouts.admin.footer')

		@include('sweetalert::alert')


	</body>
</html>