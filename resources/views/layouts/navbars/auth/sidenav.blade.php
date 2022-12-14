<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}"
            target="_blank">
            <img src="{{ asset('img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Argon Dashboard 2 Laravel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active bg-gradient-primary text-white' : '' }}" href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-sm opacity-10  {{ Route::currentRouteName() == 'home' ? 'text-white' : 'text-primary' }} "></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active bg-gradient-primary' : '' }}" href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-sm opacity-10 {{ Route::currentRouteName() == 'profile' ? 'text-white' : 'text-dark' }} "></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'create-test' ? 'active bg-gradient-primary text-white' : '' }}" href="{{ route('create-test') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tag text-sm opacity-10  {{ Route::currentRouteName() == 'create-test' ? 'text-white' : 'text-dark' }} "></i>
                    </div>
                    <span class="nav-link-text ms-1">Create Test</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'list-test' ? 'active bg-gradient-primary text-white' : '' }}" href="{{ route('list-test') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-sm opacity-10  {{ Route::currentRouteName() == 'list-test' ? 'text-white' : 'text-dark' }} "></i>
                    </div>
                    <span class="nav-link-text ms-1">List Test</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- Footer --}}
    <div class="sidenav-footer mx-3 ">
    </div>
</aside>
