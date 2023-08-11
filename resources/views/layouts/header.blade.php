<header class="site-header">
    <div class="main-header">
        <div class="container">
            <div class="logo-wrap" itemprop="logo">
                <img src="{{asset('images/logo-idplay.png')}}" alt="Logo Image">
            </div>
            <div class="nav-wrap">
                <nav class="nav-desktop">
                    <ul class="menu-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="/products">Produk</a></li>

                        {{-- <li class="menu-parent"><a href="/products">Produk</a>
                            <ul class="sub-menu">
                                <li><a href="#">Child</a></li>
                                <li><a href="#">Child</a></li>
                                <li class="menu-parent">Child
                                    <ul class="sub-menu">
                                        <li><a href="">Grand-child</a></li>
                                        <li><a href="">Grand-child</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="menu-parent"><a href="/info">Info</a>
                            <ul class="sub-menu">
                                <li><a href="#">Child</a></li>
                                <li><a href="#">Child</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="/about">About</a></li> --}}
                        <li> <a href="#cekresiIDP">Cek Resi</a> </li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/showCart">Cart</a></li>
                        
                        @if (Route::has('login'))
                            @auth
                            <li class="menu-parent">
                                <a href="#">{{ auth()->user()->username}} </a>
                                <ul class="sub-menu">
                                    <li><a href="/logout">Logout</a> </li>
                                </ul>
                            </li>
                            
                            @else
                            <li><a href="/login">Login</a></li>
                        
                        @endauth
                        @endif
                        
                        
                    </ul>
                </nav>
                <div id="bar">
                    <i class="fas fa-bars"></i>
                </div>
                <div id="close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </div>
</header>