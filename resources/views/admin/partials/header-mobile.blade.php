<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ route('dashboard.index') }}">
                            <img src="images/icon/logo.png" alt="Dictionary" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="">
                                    <i class="fas fa-home"></i>Əsas səhifə</a>
                            </li>

                            <li>
                                <a href="{{ route('products.index') }}">
                                    <i class="fas fa-lemon-o"></i>Məhsullarım</a>
                            </li>

                            <li>
                                <a href="">
                                    <i class="fas fa-calendar"></i>Təqvim</a>
                            </li>

                            <li>
                                <a href="">
                                    <i class="fas fa-area-chart"></i>Hesabatlar</a>
                            </li>
                    </ul>
                </div>
            </nav>
        </header>