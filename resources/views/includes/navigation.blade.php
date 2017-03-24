<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Shortcut buttons-->
        <!--================================-->
        <div id="mainnav-shortcut">
            <ul class="list-unstyled">
                <li class="col-xs-4" data-content="Profile">
                    <a id="demo-toggle-aside" class="shortcut-grid" href="#">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Settings">
                    <a id="demo-alert" class="shortcut-grid" href="#">
                        <i class="fa fa-cog"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Notifications">
                    <a id="demo-page-alert" class="shortcut-grid" href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--================================-->
        <!--End shortcut buttons-->


        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="{{ Request::is('/') ? 'active-link' : null }}">
                            <a href="{{ url('/') }}">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                    <!-- <span class="label label-success pull-right">Top</span> -->
                                </span>
                            </a>
                        </li>
                        <li class="{{ Request::is('kesehatan') ? 'active-link' : null }}">
                            <a href="">
                                <i class="fa fa-life-buoy"></i>
                                <span class="menu-title">
                                    <strong>Pelayanan Masyarakat</strong>
                                </span>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse {{ Request::is('kesehatan') ? 'in' : null }}">
                                <li><a href="#">Sarana & Prasarana</a></li>
                                <li class="{{ Request::is('kesehatan') ? 'active-link' : null }}"><a href="{{ url('kesehatan') }}">Pelayanan Kesehatan</a></li>
                                <li><a href="#">Pelayanan Pendidikan</a></li>
                                <li><a href="#">Bencana Alam</a></li>
                            </ul>
                        </li>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
