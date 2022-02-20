@extends('layouts.boot')

@section('title', 'Recuperar acesso')

@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>dot</b>FIN</a>
        </div>
        <div class="card-body">

            <p class="login-box-msg">Você esqueceu sua senha? Aqui você pode recuperar uma nova senha.</p>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email"
                        autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link')
                            }}</button>
                    </div>

                </div>
            </form>
            <p class="mt-3 mb-1">
                <a href="{{ route('login') }}">Login</a>
            </p>
        </div>

    </div>
</div>

@endsection
