@extends('baseLayout')

@section('content')
<div class="register-form-div">
    <form class="register-form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name">{{ __('Name') }}</label><br>              
            <input id="name" type="text" class="username @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror           
        </div>

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label><br>
            <input id="email" type="email" class="email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password">{{ __('Password') }}</label><br>
            <input id="password" type="password" class="register-pass @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                <br>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password-confirm">{{ __('Confirm Password') }}</label><br>
            <input id="password-confirm" type="password" class="cpassword form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        
        <button type="submit" class="submit-register">
            {{ __('Register') }}
        </button>

    </form>     
</div>
@endsection
