
    @guest
    <head> <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SBH | SIAKAD | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}"></head>
    <body class="hold-transition login-page">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="login-box">
                        <div class="login-logo">
                            <a href="">
                                <b> Sistem Informasi </b>
                                <b><strong> SBH</strong></b></a>
                          </div>

                     <div class="card-body login-card-body">
                            <p class="login-box-msg"><h3 align="center">Login Mahasiswa</h3></p>
                        <div class="card-body">
                            <form method="POST" action="/mahasiswa/login">
                                @csrf
                                @include('alert')
                                <div class="input-group-md-6">
                                                <div>
                                    <div class="input form-label">Email
                                </div>

                                    <div class="input-group-append">
                                        <input id="email" type="text" class="form-control
                                        {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                              <span class="fas fa-envelope"></span>
                                            </div>
                                          </div>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <div class="input form-label">Password
                                </div>

                                <div class="input-group-md-6">
                                    <div class="input-group-append">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                          </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-8">
                                      <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                      <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                {{-- <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </body>
        <!-- jQuery -->
<script src="{{ asset ('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('lte/dist/js/adminlte.min.js') }}"></script>
</body>
@section('content')
@endsection
@endguest
