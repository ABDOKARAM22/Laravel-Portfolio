<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item Home-->
                    <li>
                        <a href="{{route('dashboard.home')}}"><i class="ti-home"></i><span class="right-nav-text">Home page</span> </a>
                    </li>
                    <!-- menu item About-->
                    <li>
                        <a href="{{route('dashboard.about')}}"><i class="ti-pencil-alt"></i><span class="right-nav-text">About page</span></a>
                    </li>
                    <!-- menu item services-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="ti-check-box"></i><span
                                    class="right-nav-text">services</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('services.index')}}">All services</a> </li>
                            <li> <a href="{{route('services.create')}}">Add service</a> </li>
                        </ul>
                    </li>
                    <!-- menu item prtfolio-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Portfolio">
                            <div class="pull-left"><i class="bx bx-camera-movie"></i>
                                <span class="right-nav-text">Portfolio</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Portfolio" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('portfolio.index')}}">Portfolio</a> </li>
                            <li> <a href="{{route('portfolio.create')}}">Add To Portfolio</a> </li>
                        </ul>
                    </li>
                    <!-- menu item Team-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-id-badge"></i><span
                                    class="right-nav-text">Team</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('team.index')}}">All Team</a> </li>
                            <li> <a href="{{route('team.create')}}">Add To Team</a> </li>
                        </ul>
                    </li>

                    <!-- menu item Contact-->
                    <li>
                        <a href="{{route('contact.index')}}"><i class="ti-world"></i><span class="right-nav-text">Contact Us page</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
