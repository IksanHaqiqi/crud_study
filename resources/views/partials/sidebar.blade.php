    <aside class="menu-sidebar2">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('template/images/icon/logo-white.png') }}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="{{ asset('template/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
                </div>
                <h4 class="name">john doe</h4>
                <a href="#">Sign out</a>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="js-arrow"  href="{{ route('user.index') }}">
                            <i class="fas fa-chart-bar"></i>User</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>eCommerce</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-trophy"></i>Features
                            <span class="arrow">
                            </span>
                        </a>

                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages
                        </a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>