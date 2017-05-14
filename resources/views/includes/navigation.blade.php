<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Shortcut buttons-->
        <!--================================-->
        <div id="mainnav-shortcut">
            <ul class="list-unstyled">
                <li class="col-xs-4" data-content="Profile">
                    <a id="demo-toggle-aside" class="shortcut-grid" href="{{ url('profile') }}">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Settings">
                    <a id="demo-alert" class="shortcut-grid" href="{{ url('setting') }}">
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
                            request()->segment(1) == ('sarana') ||
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
                                request()->segment(1) == ('sarana') ||
                                request()->segment(1) == ('kesehatan') ||
                                request()->segment(1) == ('pendidikan') ||
                                request()->segment(1) == ('bencana')
                                ? 'in' : null
                            }}">
                                <li class="{{ request()->segment(1) == ('sarana') ? 'active-link' : null }}"><a href="{{ url('sarana') }}">Sarana & Prasarana</a></li>
                                <li class="{{ request()->segment(1) == ('kesehatan') ? 'active-link' : null }}"><a href="{{ url('kesehatan') }}">Pelayanan Kesehatan</a></li>
                                <li class="{{ request()->segment(1) == ('pendidikan') ? 'active-link' : null }}"><a href="{{ url('pendidikan') }}">Pelayanan Pendidikan</a></li>
                                <li class="{{ request()->segment(1) == ('bencana') ? 'active-link' : null }}"><a href="{{ url('bencana') }}">Bencana Alam</a></li>
                            </ul>
                        </li>

                        <li class="{{
                            request()->segment(1) == ('komunikasi') ||
                            request()->segment(1) == ('hari-besar') ||
                            request()->segment(1) == ('kegiatan-masyarakat')
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
                                request()->segment(1) == ('komunikasi') ||
                                request()->segment(1) == ('hari-besar') ||
                                request()->segment(1) == ('kegiatan-masyarakat')
                                ? 'in' : null
                            }}">
                                <li class="{{ request()->segment(1) == ('komunikasi') ? 'active-link' : null }}"><a href="{{ url('komunikasi') }}">Komunikasi Sosial</a></li>
                                <li class="{{ request()->segment(1) == ('hari-besar') ? 'active-link' : null }}"><a href="{{ url('hari-besar') }}">Partisipasi Hari Besar</a></li>
                                <li class="{{ request()->segment(1) == ('kegiatan-masyarakat') ? 'active-link' : null }}"><a href="{{ url('kegiatan-masyarakat') }}">Partisipasi Kegiatan Masyarakat</a></li>
                            </ul>
                        </li>

                        <li class="{{
                            request()->segment(1) == ('modal') ||
                            request()->segment(1) == ('ketrampilan') ||
                            request()->segment(1) == ('pemasaran') ||
                            request()->segment(1) == ('riset')
                            ? 'active-link' : null
                        }}">
                            <a href="">
                                <i class="fa fa-asterisk"></i>
                                <span class="menu-title">
                                    <strong>Pemberdayaan</strong>
                                </span>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse {{
                                request()->segment(1) == ('modal') ||
                                request()->segment(1) == ('ketrampilan') ||
                                request()->segment(1) == ('pemasaran') ||
                                request()->segment(1) == ('riset')
                                ? 'in' : null
                            }}">
                                <li class="{{ request()->segment(1) == ('modal') ? 'active-link' : null }}"><a href="{{ url('modal') }}">Modal & Usaha</a></li>
                                <li class="{{ request()->segment(1) == ('ketrampilan') ? 'active-link' : null }}"><a href="{{ url('ketrampilan') }}">Peningkatan Ketrampilan</a></li>
                                <li class="{{ request()->segment(1) == ('pemasaran') ? 'active-link' : null }}"><a href="{{ url('pemasaran') }}">Pemasaran Produk</a></li>
                                <li class="{{ request()->segment(1) == ('riset') ? 'active-link' : null }}"><a href="{{ url('riset') }}">Riset & Pengembangan</a></li>
                            </ul>
                        </li>

                        <li class="{{ request()->segment(1) == 'regulasi' ? 'active-link' : null }}">
                            <a href="{{ url('regulasi') }}">
                                <i class="fa fa-clipboard"></i>
                                <span class="menu-title">
                                    <strong>Regulasi</strong>
                                    <!-- <span class="label label-success pull-right">Top</span> -->
                                </span>
                            </a>
                        </li>

                        <li class="{{ request()->segment(1) == 'quick-win' ? 'active-link' : null }}">
                            <a href="{{ url('quick-win') }}">
                                <i class="fa fa-external-link"></i>
                                <span class="menu-title">
                                    <strong>Quick Win</strong>
                                    <!-- <span class="label label-success pull-right">Top</span> -->
                                </span>
                            </a>
                        </li>

                        <li class="{{
                            request()->segment(1) == ('kode-pendanaan') ||
                            request()->segment(1) == ('laporan-pendanaan')
                            ? 'active-link' : null
                        }}">
                            <a href="">
                                <i class="fa fa-line-chart"></i>
                                <span class="menu-title">
                                    <strong>Jenis Pendanaan</strong>
                                </span>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ request()->segment(1) == ('kode-pendanaan') ? 'active-link' : null }}"><a href="{{ url('kode-pendanaan') }}">Kode Pendanaan</a></li>
                                <li class="{{ request()->segment(1) == ('jenis-pendanaan') ? 'active-link' : null }}"><a href="{{ url('laporan-pendanaan') }}">Laporan Jenis Pendanaan</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="">
                                <i class="fa fa-users"></i>
                                <span class="menu-title">
                                    <strong>User Privileges</strong>
                                </span>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class=""><a href="#">Privileges</a></li>
                                <li class=""><a href="#">Users</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="">
                                <i class="fa fa-history"></i>
                                <span class="menu-title">
                                    <strong>Logs</strong>
                                </span>
                            </a>
                        </li>

                        <li class="{{
                            request()->segment(1) == ('setting')
                            ? 'active-link' : null
                        }}">
                            <a href="">
                                <i class="fa fa-cogs"></i>
                                <span class="menu-title">
                                    <strong>Settings</strong>
                                </span>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse {{
                                request()->segment(1) == ('setting')
                                ? 'in' : null
                            }}">
                                <li class="{{ request()->segment(1) == ('setting') ? 'active-link' : null }}"><a href="{{ url('setting') }}">System Setting</a></li>
                                <li class=""><a href="#">Profile</a></li>
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
