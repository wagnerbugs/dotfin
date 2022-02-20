@extends('layouts.boot')

@section('title', 'Login')

@section('content')
<div class="login-box">

    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>dot</b>FIN</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Faça o login para iniciar a sessão</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                    </div>

                </div>
            </form>

            @if (Route::has('password.request'))
            <p class="my-3">
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </p>
            @endif

            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">{{ __('Register') }}</a>
            </p>
        </div>

    </div>

</div>

@endsection
