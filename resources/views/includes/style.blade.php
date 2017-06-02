<!--STYLESHEET-->
<!--=================================================-->

<!--Open Sans Font [ OPTIONAL ] -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link href="{{ url('admin') }}/css/bootstrap.min.css" rel="stylesheet">
<!--Nifty Stylesheet [ REQUIRED ]-->
<link href="{{ url('admin') }}/css/nifty.min.css" rel="stylesheet">
@if($privilege->theme !== 'theme-dark')
  <link href="{{ url('admin') }}/css/themes/{{ $privilege->theme }}.min.css" rel="stylesheet">
@endif
<!--Font Awesome [ OPTIONAL ]-->
<link href="{{ url('admin') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!--Animate.css [ OPTIONAL ]-->
<link href="{{ url('admin') }}/plugins/animate-css/animate.min.css" rel="stylesheet">
<!--Morris.js [ OPTIONAL ]-->
<link href="{{ url('admin') }}/plugins/morris-js/morris.min.css" rel="stylesheet">
<!--Switchery [ OPTIONAL ]-->
<link href="{{ url('admin') }}/plugins/switchery/switchery.min.css" rel="stylesheet">
<!--Bootstrap Select [ OPTIONAL ]-->
<link href="{{ url('admin') }}/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
<!--Demo script [ DEMONSTRATION ]-->
<link href="{{ url('admin') }}/css/demo/nifty-demo.min.css" rel="stylesheet">
@stack('style')
