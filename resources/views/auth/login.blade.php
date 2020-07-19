@extends('baseLayout')

@section('content')
<div class="login-form-div">
    <form class="login-form" method="POST" action="{{ route('login') }}">

        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label><br>
            <input id="email" type="email" class="email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label><br>
            <input id="password" type="password" class="login-pass form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="remember-box form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="form-group">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <br>
            <button type="submit" class="submit-loggin">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
@endsection
