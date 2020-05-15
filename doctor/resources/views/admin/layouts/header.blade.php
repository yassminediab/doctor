<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor nagib</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin_design/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/tables/footable/footable.min.js') }}"></script>
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/tables/datatables/extensions/responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('admin_design/assets/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/pages/table_responsive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/pages/datatables_responsive.js')}}"></script>

    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('admin')}}"><img src="{{ asset('admin_design/assets/images/logo_light.png')}}" alt=""></a>
        <ul class="nav navbar-nav visible-xs-block">
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('admin_design/assets/images/placeholder.jpg')}}" alt="">
                        <span>Doctor Nagib</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i>   Logout
                        </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="{{ asset('admin_design/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Admin</span>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Settings</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/settings') }}">view settings</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Appointments</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/appointments') }}">view In Progress Appointments</a></li>
                                    <li><a href="{{ url('admin/appointments/cancel') }}">view Canceled Appointments</a></li>
                                    <li><a href="{{ url('admin/appointments/done') }}">view Done Appointments</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>blogs</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/blogs') }}">view blogs</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>link </span></a>
                                <ul>
                                    <li><a href="{{ url('admin/link') }}">view link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">
            @include('admin.layouts.success_message')
            @yield('content')
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
