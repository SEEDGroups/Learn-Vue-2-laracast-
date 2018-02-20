<html>
	<head><title>@yield('pageTitle')</title>
	<script type="text/javascript" src="/plugins/mdb/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/plugins/mdb/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/plugins/mdb/css/mdb.min.css">
	@yield('styles')
	</head>
	<body>
		@yield('mainContent')

	<script type="text/javascript" src="/plugins/mdb/js/bootstrap.min.js"></script>
<script src="/plugins/mdb/js/mdb.min.js"></script>
<script type="text/javascript" src="/plugins/mdb/js/popper.min.js"></script>
<script type="text/javascript" src="/js/vue.js"></script>
	@yield('scripts')
	</body>
</html>