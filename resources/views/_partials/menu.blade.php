<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <b class="mt-2">
                    {{ ucwords(Auth::user()->name) }}
                </b>&nbsp;
                <img src="https://www.mojokertokota.go.id/assets/admin/assets/images/user.png" class="img-circle" style="max-height:25px;" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="{{ url('profile/edit_user') }}/{{ Auth::user()->id }}" class="dropdown-item">
                    <i class="fas fa-user"></i>
                    Profile
                </a>
                <?php if (Auth::user()->is_admin == 2) { ?>
                <div class="dropdown-divider"></div>
                <a href="{{ url('profile/view_user_petugas_pgp') }}" class="dropdown-item">
                    <i class="fas fa-user-friends"></i>
                    Lihat seluruh Data Petugas GP
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('profile/view_user') }}" class="dropdown-item">
                    <i class="fas fa-users"></i>
                    Lihat seluruh Data Pegawai
                </a>
                <?php } ?>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('logout') }}" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i>
                    Keluar
                </a>
            </div>
        </li>

    </ul>
</nav>
<!-- /.navbar -->
