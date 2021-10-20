<aside class="main-sidebar sidebar-light-primary elevation-4">

    <a href="{{ url('/') }}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">
            <img src="{{ asset('assets/logo.png') }}" height="33">
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://i.ibb.co/ykLWWnd/user-1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ ucwords(Auth::user()->name) }}
                    <br>
                    <?php if (Auth::user()->is_admin == 2 || Auth::user()->is_admin == 1) { ?>
                        {{ Auth::user()->unit }}
                    <?php } else { ?>
                        {{ Auth::user()->vendor }}
                    <?php } ?>
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>BERANDA</p>
                    </a>
                </li>

                <?php if (Auth::user()->is_admin == 2) { ?>
                <li class="nav-header">LIHAT SECTION & TOWER</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-signal"></i>
                        <p>
                            Section & Tower
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('section/view_section') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat Section</p>
                            </a>
                            <a href="{{ url('tower/view_tower') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat Tower</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>

                <?php if (Auth::user()->is_admin != 0) { ?>
                {{-- lihat grafik proteksi tower dan grounding --}}
                <li class="nav-header">LIHAT GRAFIK</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-chart-bar"></i>
                        <p>
                            Grafik
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- grafik proteksi tower --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                Lihat Grafik Proteksi Tower
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="{{ url('grafik/view_list_ese') }}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Grafik Proteksi Tower ESE</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="{{ url('grafik/view_list_dgs') }}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Grafik Proteksi Tower DGS</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="{{ url('grafik/view_list_tla') }}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Grafik Proteksi Tower TLA</p>
                                </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php } ?>

                <li class="nav-header">PROTEKSI TOWER</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-broadcast-tower"></i>
                        <p>
                            Proteksi Tower
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (Auth::user()->is_admin == 0) { ?>
                        <li class="nav-item">
                            <a href="{{ url('proteksi_tower/insert_ese') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ESE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('proteksi_tower/insert_dgs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DGS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('proteksi_tower/insert_tla') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>TLA</p>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a href="{{ url('proteksi_tower/view_ese') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ESE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('proteksi_tower/view_dgs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DGS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('proteksi_tower/view_tla') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>TLA</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="nav-header">GROUNDING</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-campground"></i>
                        <p>
                            Grounding
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (Auth::user()->is_admin == 0) { ?>
                        <li class="nav-item">
                            <a href="{{ url('grounding/insert_ese') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ESE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('grounding/insert_dgs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DGS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('grounding/insert_tla') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>TLA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('grounding/insert_tower') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tower</p>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a href="{{ url('grounding/view_ese') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ESE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('grounding/view_dgs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DGS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('grounding/view_tla') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>TLA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('grounding/view_tower') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tower</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="nav-header">CBM LANDING POINT</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-charging-station"></i>
                        <p>
                            CBM Landing Point
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (Auth::user()->is_admin == 0) { ?>
                        <li class="nav-item">
                            <a href="{{ url('cbmlp/insert_sauh') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CBM LP Sauh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cbmlp/insert_ngenang') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CBM LP Ngenang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cbmlp/insert_talok') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CBM LP Talok</p>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a href="{{ url('cbmlp/view_sauh') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CBM LP Sauh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cbmlp/view_ngenang') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CBM LP Ngenang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cbmlp/view_talok') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CBM LP Talok</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>

                </li>
            </ul>
        </nav>
    </div>
</aside>
