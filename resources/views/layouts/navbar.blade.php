
 @if (auth()->guest())
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-terceary-color shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}''
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@else
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-terceary-color shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                           <h5 class="nav-link text-white"> Olá {{Auth::user()->name}} para onde deseja ir ? </h5>
                        </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('ranking') }}"><i class="fa-solid fa-medal me-2"></i>Ranking</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('workout',['id' => Auth::id()])}}"><i class="fa-solid fa-dumbbell me-2"></i>Treino</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('myAccount', ['id' => Auth::id()])}}"><i class="fa-solid fa-address-card me-2"></i>Minha Conta</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('changeWorkout', ['id' => Auth::id()])}}"><i class="fa-solid fa-right-left me-2"></i>Mudança de Treino</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('expireDate',['id' => Auth::id()]) }}"><i class="fa-solid fa-barcode me-2"></i>Expiração de contrato</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endif
