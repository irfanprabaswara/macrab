<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">Macrab</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="{{ url('/') }}/assets/images/avatars/avatar.png">
                <span class="activity-indicator"></span>
                <span class="user-info-text">{{ ucwords(Auth::user()->name) }}
                    <br><span class="user-state-info">On a Dashboard</span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Apps
            </li>
            <li class="active-page">
                <a href="{{ url('/') }}" class="active"><i
                        class="material-icons-two-tone">dashboard</i>Management Core</a>
            </li>
            <li>
                <a href="index.html" class="active"><i
                        class="material-icons-two-tone">assessment</i>Data OTDR</a>
            </li>
            <li>
                <a href=""><i class="material-icons-two-tone">check_box</i>Validasi Data<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="pricing.html">Update Core</a>
                    </li>
                    <li>
                        <a href="invoice.html">Booking Core</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="material-icons-two-tone">book_online</i>My Ticket<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="/mytickets">My Ticket</a>
                    </li>
                    <li>
                        <a href="invoice.html">Booking Core</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html" class="active"><i
                        class="material-icons-two-tone">history</i>History Data</a>
            </li>
        </ul>
    </div>
</div>
