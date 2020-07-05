<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" style="display: flex;justify-content: center;">
                <a href="#">
                    <img src="{{ asset('aqua/aquametrics-logo-dashboard.jpeg') }}" width="200px" alt="Aquametrics">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <!-- @if(\Auth::user()->has_permission('dashboard'))
                        <li>
                            <a href="/admin">
                                <i class="fas fa-map-marker-alt"></i>@lang('dashboard.Dashboard')</a>
                        </li>
                        @endif -->


                        <li>
                            <a href="">
                                <i class="fas fa-home"></i>Əsas səhifə</a>
                        </li>

                        <li>
                            <a href="{{ route('products.index') }}">
                                <i class="fas fa-lemon-o"></i>Məhsullarım</a>
                        </li>

                        <li>
                            <a href="{{ route('calendar.index') }}">
                                <i class="fas fa-calendar"></i>Təqvim</a>
                        </li>

                        <li>
                            <a href="">
                                <i class="fas fa-area-chart"></i>Hesabatlar</a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>