<div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
    <ul class="nav-main nav-main-horizontal nav-main-hover">
        <li class="nav-main-item">
            <a class="nav-main-link active" href="/">
                <i class="nav-main-link-icon si si-home"></i>
                <span class="nav-main-link-name">Home</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-list"></i>
                <span class="nav-main-link-name">Service</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Technology</span>
                    </a>
                    @empty(!$languages)
                       <ul class="nav-main-submenu">
                            @foreach ($languages as $language)
                            <li class="nav-main-item">
                                <a class="nav-main-link"
                                href="/tech/{{ $language->id }}"> 
                                <span class="nav-main-link-name">
                                    {{ $language->langName }}
                                </span>
                                </a>
                            </li>
                            @endforeach
                        </ul> 
                    @endempty
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Category</span>
                    </a>

                    @empty(!$categories)
                       <ul class="nav-main-submenu">
                            @foreach ($categories as $category)
                            <li class="nav-main-item">
                                <a class="nav-main-link"
                                href="/cat/{{ $category->id }}">
                                <span class="nav-main-link-name">
                                    {{ $category->name }}
                                </span>
                                </a>
                            </li>
                            @endforeach
                        </ul> 
                    @endempty
                </li>
            </ul>
        </li>

        <li class="nav-main-item">
            <a class="nav-main-link" href="/about-us">
                <i class="nav-main-link-icon si si-puzzle"></i>
                <span class="nav-main-link-name">About us</span>
            </a>
        </li>

        <li class="nav-main-item">
            <a class="nav-main-link" href="/contact-us">
                <i class="nav-main-link-icon si si-globe-alt"></i>
                <span class="nav-main-link-name">Contact us</span>
            </a>
        </li>

        <li class="nav-main-item ml-lg-auto">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-code-branch"></i>
                <span class="nav-main-link-name d-lg-none">User</span>
            </a>

            <ul class="nav-main-submenu nav-main-submenu-right">
                @guest
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/login">
                        <i class="nav-main-link-icon fa fa-sign-in-alt text-amethyst"></i>
                        <span class="nav-main-link-name">Login</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/register">
                        <i class="nav-main-link-icon fa fa-user text-amethyst"></i>
                        <span class="nav-main-link-name">Register</span>
                    </a>
                </li>
                @else
                <li class="nav-main-item">
                    <a class="nav-main-link">
                        <i class="nav-main-link-icon fa fa-user-alt text-amethyst"></i>
                        <span>{{ Auth::user()->name }} 
                            <small class="text-success">
                                @if (session('status'))
                                <p class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </p>
                                @endif
                            </small>
                        </span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a href="{{ route('dashboard') }}" class="nav-main-link">
                        <span class="nav-main-link-name"><i class="nav-main-link-icon si si-speedometer text-amethyst"></i> {{ __('Admin Panel') }}</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a href="{{ route('logout') }}" class="nav-main-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="nav-main-link-name"><i class="nav-main-link-icon fa fa-sign-out-alt text-amethyst"></i>
                        {{ __('Logout') }}</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endguest

            </ul>
        </li>
    </ul>
</div>