<nav class="navbar navbar-expand-md bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                    @endif

                    {{--                            @if (Route::has('register'))--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                    {{--                                </li>--}}
                    {{--                            @endif--}}
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}/?site=pocket">APOD</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            News
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('news') }}/?site=pocket">Pocket</a>
                            <a class="dropdown-item" href="{{ route('news') }}/?site=nerd">Nerd</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('filmes') }}/?site=pocket">Filmes/Séries</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Sat América
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('satelite') }}/1">Visível</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/2">Infra Termal</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/3">Vapor</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/4">Vapor Realçado</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/5">Topo Nuvens</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Sat Brasil
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('satelite') }}/6">Visível</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/7">Infra Termal</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/8">Vapor</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/9">Vapor Realçado</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/10">Topo Nuvens</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Sat NE
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('satelite') }}/11">Visível</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/12">Infra Termal</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/13">Vapor</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/14">Vapor Realçado</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/15">Topo Nuvens</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Sat Mundo
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('satelite') }}/16">Leste</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/17">Leste Full</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/18">Oeste</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/19">Oeste Full</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/20">Atlântico</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/21">Atlântico Full</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/22">Caribe</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/23">Caribe Full</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/24">Ásia</a>
                            <a class="dropdown-item" href="{{ route('satelite') }}/25">Ásia Globo</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Futebol
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('futebol') }}/99999?titulo=Jogos Agora">Jogos Agora</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/71?titulo=Serie A">Seria A</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/72?titulo=Serie B">Seria B</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/75?titulo=Serie C">Seria C</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/76?titulo=Serie D">Seria D</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/73?titulo=Copa do Brasil">Copa do Brasil</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/609?titulo=Cearense">Cearense</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/620?titulo=Cearense B">Cearense B</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/612?titulo=Copa Nordeste">Copa Nordeste</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/13?titulo=Libertadores">Libertadores</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/11?titulo=Sul Americana">Sul Americana</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/2?titulo=Champions League">Champions League</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/15?titulo=Mundial Clubes">Mundial Clubes</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/9?titulo=Copa América">Copa América</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/34?titulo=Class. Copa Mundo">Class. Copa Mundo</a>
                            <a class="dropdown-item" href="{{ route('futebol') }}/1?titulo=Copa Mundo">Copa Mundo</a>


                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
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

        <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input" id="darkSwitch" />
            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
        </div>

    </div>
</nav>
