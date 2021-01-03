<div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="container">
                <nav class="navbar navbar-light bg-transparent">
                    <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM_ejaqiQVqKyLdSBUpiEqAbnWSX30-SwOOw&usqp=CAU" width="30" height="30" class="d-inline-block align-top" alt="">
                    Staycalm
                    </a>
                </nav>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li> --}}
                        <li class="nav-item dropdown mx-auto">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($elektronikas as $elektronika)
                                <a class="dropdown-item"
                                    href="{{ route('product-elektronika', $elektronika->id) }}">{{ $elektronika->nama }}</a>
                                @endforeach
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('products') }}">Semua Produk</a>
                            </div>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="{{ route('history') }}">History</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a href="{{ route('about') }}" class="nav-link">About Us</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="{{ route('keranjang') }}">Cart<i
                                    class="fas fa-shopping-cart"></i>
                                @if($jumlah_pesanan !==0)
                                <span class="badge badge-danger">{{ $jumlah_pesanan }}</span>
                                @endif
                            </a>
                        </li>
                        @guest
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown mx-auto">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>    
        </nav>
</div>