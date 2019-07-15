<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Aplikasi Pengaduan Jalan Rusak.">
    <meta name="author" content="ThemeSelect">
    <title>User Login | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="{{asset('public/template/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/template/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/vendors/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/css/themes/horizontal-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/css/themes/horizontal-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/css/layouts/style-horizontal.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/css/pages/login.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('public/template/css/custom/custom.css')}}">

  </head>

  <body class="horizontal-layout page-header-light horizontal-menu 1-column login-bg  blank-page blank-page" data-open="click" data-menu="horizontal-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form"  method="POST" action="{{ route('login') }}">
        @csrf
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Sign in</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">email</i>
          <input id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  type="text" value="{{ old('email') }}"  placeholder="Email" required>
          @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  type="password" name="password"alue="{{ old('password') }}"   placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
          <p>
            <label>
              <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
              <span>Remember Me</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" type="submit">Sign In</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="{{ route('password.request') }}l">Forgot password ?</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('public/template/js/vendors.min.js" type="text/javascript')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('public/template/js/plugins.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/template/js/custom/custom-script.js')}}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
