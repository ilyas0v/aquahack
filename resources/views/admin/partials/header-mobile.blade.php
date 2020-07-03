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
                            <a href="{{ route('word_levels.index') }}">
                                <i class="fas fa-level-up-alt"></i>Levels</a>
                        </li>

                        <li>
                            <a href="{{ route('words.index') }}">
                                <i class="fas fa-language"></i>Words</a>
                        </li>


                        <li>
                            <a href="{{ route('projects.index') }}">
                                <i class="fas fa-user"></i>Projects</a>
                        </li>



                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>@lang('dashboard.My projects')</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                @foreach(\Auth::user()->my_projects as $project)
                                <li>
                                <a href="{{ route('projects.show', $project->id) }}"><img src="/storage/projects/{{ $project->icon }}" width="20px"> {{ $project->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Added projects</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                @foreach(\Auth::user()->projects as $project)
                                    <li>
                                        <a href="{{ route('projects.show', $project->id) }}"><img src="/storage/projects/{{ $project->icon }}" width="20px"> {{ $project->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                       
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>