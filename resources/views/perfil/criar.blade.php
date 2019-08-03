<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Regitro  - Sadam</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_perfil.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo01.png')}}" class="img-fluid" alt="logo" id="logo_sadam">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin">
            <div class="card-body">
            	 @if (session('erro'))
                            <div class="alert alert-danger">
                                {{ session('erro') }}
                            </div>
                @endif
              <h5 class="card-title text-center">{{ __('Registre-se') }}</h5>
                <form class="form-signin" method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label>Foto do Perfil</label><br>
                        <input class="" name="imagem" type="file">
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="nome" placeholder="Nome" value="{{$user->name}}" required autocomplete="name" autofocus>
                        <label for="name">Nome</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="end" class="form-control @error('end') is-invalid @enderror" name="endereco" placeholder="Endereço" value="{{ old('Endereço') }}" required autocomplete="end" autofocus>
                        <label for="end">Endereço</label>
                        @error('end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="city" class="form-control @error('city') is-invalid @enderror" name="cidade" placeholder="Cidade" value="{{ old('Cidade') }}" required autocomplete="Cidade" autofocus>
                        <label for="city">Cidade</label>
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="state" class="form-control @error('state') is-invalid @enderror" name="estado" placeholder="Estado" value="{{ old('Estado') }}" required autocomplete="Estado" autofocus>
                        <label for="state">Estado</label>
                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="cpf" class="form-control @error('cpf') is-invalid @enderror" name="cpf" placeholder="CPF" value="{{ old('CPF') }}" required autocomplete="CPF" autofocus>
                        <label for="cpf">CPF</label>
                        @error('cpf')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn=lg btn-block" id="btn-registrar">
                            {{ __('Confirmar Perfil') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</body>
</html>