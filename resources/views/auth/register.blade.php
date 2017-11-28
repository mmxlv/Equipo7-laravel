@extends('baseLayout')

@section('content')
  <div class="register-form-div">
    <form class="register-form" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Nombre</label><br>
        <input id="name" type="text" class="username" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
          <br><br>
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
          <br><br>
        @endif
      </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">E-Mail Address</label><br>
        <input id="email" type="email" class="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
          <br><br>
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          <br><br>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Password</label><br>
        <input id="password" type="password" class="register-pass" name="password" required>
        @if ($errors->has('password'))
          <br><br>
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          <br><br>
        @endif
      </div>
      <div class="form-group">
        <label for="password-confirm">Confirm Password</label><br>
        <input id="password-confirm" type="password" class="cpassword" name="password_confirmation" required>
      </div>
      <input class="submit-register" type="submit" name="" value="Register">
    </form>
  </div>
  <script src="{{ asset('js/register.js') }}" charset="utf-8"></script>
@endsection
