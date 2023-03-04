{{-- link css --}}
<link rel="stylesheet" href="{{ asset('build/assets/css/style.css')}}">

<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #112B3C">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <h3 class="navbar-item color-3" style="font-weight: 900 ">Gollvander</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Center of Navbar -->
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item">
                    <a style="text-decoration: none; font-weight: 300" class="color-4 m-1 justify-content-center" href="{{ url('/home') }}">
                        Home
                    </a>
                    <a style="text-decoration: none; font-weight: 300" class="color-4 m-1 justify-content-center" href="{{ url('/product') }}">
                        Product
                     </a>
                    @if (Auth::user()->level == 'admin')
                        <span style="text-decoration: none; font-weight: 700" class="color-4 justify-content-center" ><span>- Dashboard Admin -</span>
                    @else
                        <span style="text-decoration: none; font-weight: 700" class="color-4 justify-content-center" ><span>- Dashboard User -</span>
                    @endif
                    <a style="text-decoration: none; font-weight: 300" class="color-4 m-1 justify-content-center" href="{{ url('/order') }}">
                        Order
                    </a>
                    <a style="text-decoration: none; font-weight: 300" class="color-4 m-1 justify-content-center" href="#">
                        Transaksi
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="dropmenu" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Product </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropmenu">
                        <a class="dropdown-item" href="{{ route('product.index') }}">Daftar Barang</a>
                        <a class="dropdown-item" href="{{ route('product.create') }}">Tambah Barang</a>
                    </div>
                </li>
                <li>
                    <a class="solid"></a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item color-4">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle color-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           Halo, {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
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

