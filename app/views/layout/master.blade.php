<!DOCTYPE html>
@if(Auth::guest())
{{Redirect::to("login")}}
@else

<html>
<head>
    <meta charset="UTF-8">
    <title>PSMS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />

    <!--multiselect-->
    <link href="{{ asset('jquery.multiselect.css') }} " rel="stylesheet" type="text/css"/>
    <link href="{{ asset('sumoselect.css') }} " rel="stylesheet" type="text/css"/>
    <link href="{{ asset('jquery.multiselect.filter.css') }} " rel="stylesheet" type="text/css"/>
    <!-- Morris chart -->
    <link href="{{ asset('css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
<!--    <link href="{{ asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />-->
    <!-- Theme style -->
    <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('advanced-datatable/media/css/demo_page.css') }}" rel="stylesheet"/>

    <link href="{{ asset('advanced-datatable/media/css/demo_table.css') }}" rel="stylesheet"/>

    <link href="{{ asset('data-tables/DT_bootstrap.css') }}" rel="stylesheet"/>

    {{ HTML::style("jqueryui/css/cupertino/jquery-ui.css") }}

    <!-- JQuery 2.0.2 -->
    <script src="{{ asset('jquery-2.0.3.min.js') }} "></script><!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript" language="JavaScript" src="{{ asset('advanced-datatable/media/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" language="JavaScript" src="{{ asset('data-tables/DT_bootstrap.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }} "></script>
    <script src="{{ asset('js/respond.min.js') }} "></script>
    <![endif]-->

    <style>
        #map-container { height: 300px }
    </style>
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<header class="header">
<a href="#" class="logo">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    <h2 style="font-size: 28px; margin-top: 12px; font-family: 'Roboto', sans-serif"><b>
    <span style="color: green">PO</span><span style="color: #000000">LI</span><span style="color: #0000ff"></span><span style="color: #ffff00">CE</span>
        </b>
    </h2>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<div class="navbar-right">
<ul class="nav navbar-nav">

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span>{{{ Auth::user()->fullName or '' }}}<i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header bg-light-blue">
            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
            <p>
                {{{ Auth::user()->fullName or ''}}} - Rank No{{{ Auth::user()->rankNo or ''}}}
                <small>Member since {{{ Auth::user()->created_at or ''}}}</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="{{ URL::to('logout') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
<!--            <div class="pull-left image">-->
<!--                <img src="img/avatar3.png" class="img-circle" alt="User Image" />-->
<!--            </div>-->
            <div class="text-center info">
                <p>Hello, Marwa</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href='{{ url("dashboard") }}'>
                    <i class="fa fa-dashboard"></i> <span>Home</span>
                </a>
            </li>
            <li>
                <a href='{{ url("offenses") }}'>
                    <i class="fa fa-th"></i> <span> Offenses Reported </span> <small class="badge pull-right bg-green">new</small>
                </a>
            </li>
            <li>
                <a href='{{ url("lisence") }}'>
                    <i class="fa fa-th"></i> <span>License</span>
                </a>
            </li>
            <li>
                <a href='{{ url("cars") }}'>
                    <i class="fa fa-th"></i> <span>Cars</span>
                </a>
            </li>

            <li>
                <a href="{{ url('list') }}">
                    <i class="fa fa-th"></i> <span>Offense List</span>
                </a>
            </li>

            <li>
                <a href="{{ url('user') }}">
                    <i class="fa fa-th"></i> <span>Officers</span>
                </a>
            </li>

            <li>
                <a href="{{ url('offence_reports') }}">
                    <i class="fa fa-th"></i> <span>Offence Reports</span>
                </a>
            </li>
            <li>
                <a href="{{ url('accident_reports') }}">
                    <i class="fa fa-th"></i> <span>Accident Reports</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Home
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    @yield('contents')

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


<!-- jQuery UI 1.10.3 -->
<script src="{{ asset('js/jquery.form.js') }} "></script>

{{ HTML::script("jqueryui/js/jquery-ui-1.10.4.custom.min.js") }}
<script src="{{ asset('jquery.multiselect.js') }}"></script>
<script src="{{ asset('jquery.sumoselect.min.js') }}"></script>
<script src="{{ asset('jquery.multiselect.filter.js') }}"></script>
<script type="text/javascript" src="{{ asset('Highcharts/js/highcharts.js') }}"></script>
<script type="text/javascript" src="{{ asset('Highcharts/js/modules/exporting.js') }}"></script>
<script type="text/javascript" src="{{ asset('Highcharts/js/themes/sand-signika.js') }}"></script>

<!-- Morris.js charts -->
<!--<script src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>-->
<!--<script src="{{ asset('js/plugins/morris/morris.min.js')}}" type="text/javascript"></script>-->
<!--<!-- Sparkline -->
<!--<script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>-->
<!--<!-- jvectormap -->
<!--<script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>-->
<!--<script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>-->
<!-- jQuery Knob Chart -->
<script src="{{ asset('js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script>

<script src="{{ asset('js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>


<!-- AdminLTE App -->
<script src="{{ asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>


<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/AdminLTE/demo.js') }}" type="text/javascript"></script>
<!--multiselect and high charts-->



</body>
</html>
@endif