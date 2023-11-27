<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- <title>Corona Admin</title> -->
    <title>{{env('APP_NAME')}} | @yield('title','Page Name')</title>


    <!-- plugins:css -->

    <link rel="stylesheet" href="{{asset('public/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}" />
  </head>
	<body>

		@yield('content')

	<script src="{{asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>

    <script src="{{asset('public/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('public/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('public/js/misc.js')}}"></script>
    <script src="{{asset('public/assets/js/settings.js')}}"></script>
    <script src="{{asset('public/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>

		<script>

		@if(Session::has('success'))
				toastr.success("{{ Session::get('success') }}");
		@endif
		@if(Session::has('info'))
				toastr.info("{{ Session::get('info') }}");
		@endif
		@if(Session::has('warning'))
				toastr.warning("{{ Session::get('warning') }}");
		@endif
		@if(Session::has('error'))
				toastr.error("{{ Session::get('error') }}");
		@endif
  
		</script>
    {!! Toastr::message() !!}
	</body>
</html>
