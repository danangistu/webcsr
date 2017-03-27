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
                        <li class="{{
                            request()->segment(1) == ('kesehatan') ||
                            request()->segment(1) == ('pendidikan') ||
                            request()->segment(1) == ('bencana')
                            ? 'active-link' : null
                        }}">
                            <a href="">
                                <i class="fa fa-life-buoy"></i>
                                <span class="menu-title">
                                    <strong>Pelayanan Masyarakat</strong>
                                </span>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse {{
                                request()->segment(1) == ('kesehatan') ||
                                request()->segment(1) == ('pendidikan') ||
                                request()->segment(1) == ('bencana')
                                ? 'in' : null
                            }}">
                                <li><a href="#">Sarana & Prasarana</a></li>
                                <li class="{{ request()->segment(1) == ('kesehatan') ? 'active-link' : null }}"><a href="{{ url('kesehatan') }}">Pelayanan Kesehatan</a></li>
                                <li class="{{ request()->segment(1) == ('pendidikan') ? 'active-link' : null }}"><a href="{{ url('pendidikan') }}">Pelayanan Pendidikan</a></li>
                                <li class="{{ request()->segment(1) == ('bencana') ? 'active-link' : null }}"><a href="{{ url('bencana') }}">Bencana Alam</a></li>
                            </ul>
                        </li>

                        <li class="{{
                            request()->segment(1) == ('komunikasi')
                            ? 'active-link' : null
                        }}">
                            <a href="">
                                <i class="fa fa-link"></i>
                                <span class="menu-title">
                                    <strong>Pembinaan Hubungan</strong>
                                </span>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse {{
                                request()->segment(1) == ('komunikasi')
                                ? 'in' : null
                            }}">
                                <li class="{{ request()->segment(1) == ('komunikasi') ? 'active-link' : null }}"><a href="{{ url('komunikasi') }}">Komunikasi Sosial</a></li>
                                <li><a href="#">Partisipasi Hari Besar</a></li>
                                <li><a href="#">Partisipasi Kegiatan Masyarakat</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="">
                                <i class="fa fa-asterisk"></i>
                                <span class="menu-title">
                                    <strong>Pemberdayaan</strong>
                                </span>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="#">Modal & Usaha</a></li>
                                <li><a href="#">Peningkatan Ketrampilan</a></li>
                                <li><a href="#">Pemasaran Produk</a></li>
                                <li><a href="#">Riset & Pengembangan</a></li>
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
