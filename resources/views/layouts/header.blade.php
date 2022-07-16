    <!--start header wrapper-->
    <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-collapse">
                    <div class="topbar-logo-header" onclick="location.href = '/home';">
                        <div class="">
                            <img src="{{ asset('assets/images/logo_atlas.jpg') }}" class="logo-icon" alt="logo icon">
                        </div>
                        <div class="">
                            <h4 class="logo-text">ATLAS</h4>
                        </div>
                    </div>
                    
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                   
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{auth()->user()->name}}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bx bx-log-out-circle"></i> Logout</button>
                            </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    <!-- Page wrapper end -->
