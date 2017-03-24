<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') | WebCSR</title>

    @include('includes.style')
	@include('includes.script')

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="effect mainnav-lg">

        @include('includes.navbar')

		<div class="boxed">

			@yield('content')

            @include('includes.navigation')

		</div>

        @include('includes.footer')

		<!-- SCROLL TOP BUTTON -->
		<!--===================================================-->
		<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
		<!--===================================================-->

	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->

	@stack('javascript')
</body>
</html>
