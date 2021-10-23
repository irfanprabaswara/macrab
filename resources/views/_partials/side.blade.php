<aside>
    <div class="app-sidebar">
        <!-- Logo -->
        <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">Macrab</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/avatars/avatar.png">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">{{ ucwords(Auth::user()->name) }}
                            <br><span class="user-state-info">On a Dashboard</span></span>
                    </a>
                </div>
        </div>
        <!-- Sidebar -->
        <div class="app-menu">
            <ul class="accordion-menu">
                <li class="sidebar-title">
                    Apps
                </li>
                <li>
                    <a href="index.html" class="active"><i class="material-icons-two-tone">dashboard</i>Management Core</a>
                </li>
                <li>
                    <a href="otdr.html"><i class="material-icons-two-tone">analytics</i>Data OTDR<span class="badge rounded-pill badge-danger float-end">87</span></a>
                </li>
                <li class="active-page">
                    <a href=""><i class="material-icons-two-tone">card_membership</i>My Ticket<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="myticket.html">Update Core</a>
                        </li>
                        <li>
                            <a href="invoice.html">Booking Core</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>     
    </div>  
</aside>
