<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('contents/'.$setting->logo) }}" alt="Logo" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text">{{ $setting->system_name }}</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="fa fa-navicon fa-lg"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->



            </ul>
            <ul class="nav navbar-top-links pull-right">

                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right">
                            <img class="img-circle img-user media-object" src="{{ asset('contents/'.auth()->user()->image) }}" alt="Profile Picture">
                        </span>
                        <div class="username hidden-xs">{{ auth()->user()->name }}</div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="{{ url('profile') }}">
                                    <i class="fa fa-user fa-fw fa-lg"></i> Profile
                                </a>
                            </li>
                            @if($role->setting == 1)
                            <li>
                                <a href="{{ url('setting') }}">
                                    <!-- <span class="label label-success pull-right">New</span> -->
                                    <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                                </a>
                            </li>
                            @endif
                        </ul>

                        <!-- Dropdown footer -->
                        <div class="pad-all text-right">
                            <a href="{{ url('/logout') }}" class="btn btn-primary">
                                <i class="fa fa-sign-out fa-fw"></i> Logout
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->

            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->
