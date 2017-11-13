@extends('baseLayout')

@section('content')
  <div class="login-form-div">
    <form class="login-form" method="POST" action="{{ route('login') }}">

      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">E-Mail Address</label><br>
        <input id="email" type="email" class="email" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
          <br><br>
          <span style="color:red" class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          <br><br>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Password</label><br>
        <input id="password" type="password" class="login-pass" name="password" required>
        @if ($errors->has('password'))
          <br><br>
          <span style="color:red" class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          <br><br>
        @endif
      </div>
      <label>
        <input class="remember-box" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
      </label>
      <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a><br>
      <input class="submit-loggin" type="submit" name="Login" value="Login">
    </form>
  </div>
@endsection
