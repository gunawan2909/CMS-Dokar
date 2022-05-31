<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link  {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                    href="{{ Route('home.index') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'profile' ? 'active' : '' }}  " aria-current="page"
                    href="{{ Route('profile.index') }}">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'pelayanan' ? 'active' : '' }} " aria-current="page"
                    href="{{ Route('home.index') }}">
                    Pelayanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'hukum' ? 'active' : '' }} " aria-current="page"
                    href="{{ Route('home.index') }}">
                    Dasar Hukum
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'kontak' ? 'active' : '' }} " aria-current="page"
                    href="{{ Route('home.index') }}">
                    Kontak Kami
                </a>
            </li>
            <div class="border-bottom">

            </div>
            <li class="nav-item mt-auto">
                <a class="nav-link " aria-current="page" href="#">
                    LogOut
                </a>
            </li>



        </ul>




    </div>
</nav>
