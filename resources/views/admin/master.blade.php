<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
	@include('admin.header');
	</div>
	<!-- start: Header -->






@yield('content')











	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	@include('admin.footer');

	<!-- start: JavaScript-->

		<script src="{{ asset('admin/js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.ui.touch-punch.js') }}"></script>

		<script src="{{ asset('admin/js/modernizr.js') }}"></script>

		<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>

		<script src='{{ asset('admin/js/fullcalendar.min.js') }}'></script>

		<script src='{{ asset('admin/js/jquery.dataTables.min.js') }}'></script>

		<script src="{{ asset('admin/js/excanvas.js') }}"></script>

	<script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.pie.js') }}"></script>

	<script src="{{ asset('admin/js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.chosen.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.uniform.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.cleditor.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.noty.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.elfinder.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.raty.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.iphone.toggle.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.imagesloaded.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.masonry.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.knob.modified.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>

		<script src="{{ asset('admin/js/counter.js') }}"></script>

		<script src="{{ asset('admin/js/retina.js') }}"></script>

		<script src="{{ asset('admin/js/custom.js') }}"></script>
	<!-- end: JavaScript-->

</body>
</html>
