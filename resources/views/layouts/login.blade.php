<?php
	$setting = App\Models\Setting::firstOrFail();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $setting->meta_title }} | Login</title>
	<link rel='shortcut icon' type='image/x-icon' href="{{ asset('contents/'.$setting->favicon) }}" />

	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="{{ url('admin') }}/css/bootstrap.min.css" rel="stylesheet">

	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="{{ url('admin') }}/css/nifty.min.css" rel="stylesheet">

	<!--Font Awesome [ OPTIONAL ]-->
	<link href="{{ url('admin') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="{{ url('admin') }}/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="{{ url('admin') }}/plugins/pace/pace.min.js"></script>

</head>

<body>
    <div id="container" class="cls-container">
        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div class="bg-img img-balloon"><img src="{{ asset('contents/'.$setting->bg_login) }}"></div>

        <!-- HEADER -->
        <!--===================================================-->
        <div class="cls-header cls-header-lg">
            <div class="cls-brand">
                <a class="box-inline" href="{{ url('/') }}">
                    <!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
                    <span class="brand-title">{{ $setting->system_name }} <span class="text-thin">Admin</span></span>
                </a>
            </div>
        </div>
        <!--===================================================-->
	       @yield('content')

   </div>
   <!--===================================================-->
   <!-- END OF CONTAINER -->
	<!--JAVASCRIPT-->
	<!--=================================================-->
	<!--jQuery [ REQUIRED ]-->
	<script src="{{ url('admin') }}/js/jquery-2.1.1.min.js"></script>
	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="{{ url('admin') }}/js/bootstrap.min.js"></script>
	<!--Fast Click [ OPTIONAL ]-->
	<script src="{{ url('admin') }}/plugins/fast-click/fastclick.min.js"></script>
	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="{{ url('admin') }}/js/nifty.min.js"></script>

</body>
</html>
