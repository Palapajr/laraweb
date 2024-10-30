<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        {{-- <div class="container-fluid d-flex align-items-center justify-content-between"> --}}
        {{-- container position-relative d-flex align-items-center justify-content-between --}}

        <a href="" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="/front/img/logo.png" alt=""> -->
            <img src="/assets/img/web/logoutama.jpg" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <li class="nav-link scrollto"><a href=""
                        class="{{ Request::is('/') ? 'active' : '' }}"><span>Home</span></a></li>

                <li class="dropdown"><a href="#"><span>Profil</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="">Services</a></li>
                <li><a class="nav-link scrollto" href="">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="">Team</a></li>
                <li><a href="blog.html">Blog</a></li>

                <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        {{-- <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a> --}}

    </div>
</header>
