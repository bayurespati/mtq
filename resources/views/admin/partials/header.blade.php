<!-- <header class="header" style="padding-left: 300px; top: -3px; background: #64B6AC;">
    <div class="header-right d-flex align-items-center justify-content-between" style="width: 100%;">
        <h3 class="m-0 ms-4" style="font-weight: bold; color: white;">
            Dashboard Peserta
        </h3>

        <div id="userbox" class="userbox mt-0">
            <a href="#" data-bs-toggle="dropdown" class="d-flex align-items-center">
                <div class="profile-info d-flex align-items-center" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span style="color: white;">Selamat Datang,&nbsp;&nbsp;</span>
                    <span class="name" style="font-weight: bold; color:white;">{{ Auth::user()->nama }}</span>
                </div>
                <figure class="profile-picture">
                    <img src="/admin/img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
                </figure>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"><i class="bx bx-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> -->

<header class="header d-flex justify-content-between align-items-center" style="
top: -3px; 
background: #64B6AC;
border-bottom: 1px solid #64B6AC;
border-top: 3px solid #64B6AC;
">
    <div class="logo-container" style="
    background-image: none !important;
    border: none !important;
    display: flex !important;
    align-items: center !important;
    ">
        <h3 class="m-0 ms-4" style="font-weight: bold; color: white;">
            Dashboard Peserta
        </h3>

        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened" style="background: #64B6AC !important;">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>

    </div>

    <!-- start: search & user box -->
    <div class="header-right d-flex align-items-center">
        <div id="userbox" class="userbox mt-0">
            <a href="#" data-bs-toggle="dropdown" class="d-flex align-items-center">
                <div class="profile-info d-flex align-items-center" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span style="color: white;">Selamat Datang,&nbsp;&nbsp;</span>
                    <span class="name" style="font-weight: bold; color:white;">Donny Jaya Kusuma</span>
                </div>
                <figure class="profile-picture">
                    <img src="/admin/img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
                </figure>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('beranda') }}"><i class="bx bx-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>