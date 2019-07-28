<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - Sadam</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_login.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6" id="col_left">
          <img src="{{asset('img/logo01.png')}}" class="img-fluid" alt="logo" id="logo_sadam">
          <h5 class="title_sadam">Seja bem vindo ao sistema SADAM</h5>
          <h5 class="title_sadam">Sobre o sistema</h5>
          <h6 class="texto_sadam">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at tincidunt nisl. Integer sem est, interdum at nisl eget, rhoncus ornare orci. Donec vel lectus sed elit iaculis posuere. Nullam sit amet molestie neque. Donec nunc dolor, dignissim a nunc non, cursus imperdiet mi.</h6>
          <h5 class="title_sadam">Como efetuar login</h5>
          <h6 class="texto_sadam">O Login deve ser feito utilizando o email e senha do administrador do sistema definido no cadastro. Caso não tenha cadastro, clique no botão ao lado para se cadastrar</h6>
          <h5 class="title_sadam">Esqueceu a senha?</h5>
          <h6 class="texto_sadam">Caso esqueça sua senha, clique no botão ao lado "esqueceu a senha senha?".</h6>
        </div>
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" id="col_right">
          <div class="card card-signin">
            <div class="card-body">
              <h5 class="card-title text-center">{{ __('Login') }}</h5>
              <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror auto-" name="email" placeholder="Endereço de Email" required autocomplete="email" autofocus>
                  <label for="inputEmail">Endereço de Email</label>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror    
                </div>
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                  <label for="inputPassword">Senha</label>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">
                          {{ __('Me Mantenha Conectado') }}
                      </label>
                </div>
                <button class="btn btn-block text-uppercase" type="submit" id="btn-login">Entrar</button>
                <hr class="my-4">
                <a class="btn btn-lg btn-cadastro btn-block" href="{{ route('register') }} "type="submit"><i class="fab fa-google mr-2"></i> Cadastre-se</a>
                @if (Route::has('password.request'))
                  <a class="btn btn-lg btn-esqueceu-senha btn-block" href="{{ route('password.request') }}" type="submit"><i class="fab fa-facebook-f mr-2"></i> Esqueceu a Senha?</a>
                @endif
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


