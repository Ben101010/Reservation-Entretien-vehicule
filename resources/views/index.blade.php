<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/kenny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 15:01:10 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Reservation et Entretient de véhicule</title>
	<meta name="description" content="Reservation et Entretient de véhicule." />
	<meta name="keywords" content="web app, application" />
	<meta name="author" content="hencework"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
    <link href="{{ asset('vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>

	<!-- Data table CSS -->
	<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">

    @livewireStyles
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
				<a href="#">
                    <span style="font-size:2.5em;"> Réservation & Entretien de Véhicule</span>
                </a>
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('dist/img/user1.png')}}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Mon profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Paramètre</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- /Top Menu Items -->

			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="dashboard_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="index.html">Analytical</a>
							</li>
							<li>
								<a href="index2.html">Demographic</a>
							</li>
							<li>
								<a href="index3.html">Project</a>
							</li>
							<li>
								<a href="index4.html">Classic</a>
							</li>
						</ul>
					</li>

				</ul>
			</div>
			<!-- /Left Sidebar Menu -->


        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg  bg-red">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">analytical</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>dashboard</span></a></li>
							<li class="active"><span>analytical</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

			</div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="{{ asset('dist/img/logo-sm.png') }}" alt="logo"/></a>
						{{-- <ul class="footer-link nav navbar-nav">
							<li class="logo-footer"><a href="#">help</a></li>
							<li class="logo-footer"><a href="#">terms</a></li>
							<li class="logo-footer"><a href="#">privacy</a></li>
						</ul> --}}
					</div>
					<div class="col-sm-7 text-right">
						<p>2016 &copy; Kenny. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>

	<!-- Data table JavaScript -->
	<script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }} "></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('dist/js/jquery.slimscroll.js') }} "></script>

	<!-- simpleWeather JavaScript -->
	<script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }} "></script>
	<script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }} "></script>
	<script src="{{ asset('dist/js/simpleweather-data.js') }} "></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }} "></script>
	<script src="{{ asset('vendors/bower_components/Counter-Up/jquery.counterup.min.js') }} "></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }} "></script>

	<!-- Sparkline JavaScript -->
	<script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }} "></script>

	<!-- ChartJS JavaScript -->
	<script src="{{ asset('vendors/chart.js/Chart.min.js') }} "></script>

	<!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendors/bower_components/raphael/raphael.min.js') }} "></script>
    <script src="{{ asset('vendors/bower_components/morris.js/morris.min.js') }} "></script>
    <script src="{{ asset('dist/js/morris-data.js') }} "></script>

	<script src="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }} "></script>

	<!-- Init JavaScript -->
	<script src="{{ asset('dist/js/init.js') }} "></script>
	<script src="{{ asset('dist/js/dashboard-data.js') }} "></script>

    @livewireScripts

</body>


<!-- Mirrored from hencework.com/theme/kenny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 15:04:45 GMT -->
</html>
