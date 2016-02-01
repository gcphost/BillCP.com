@extends('layouts.public')

@section('content')
<section class="page">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Login</h1>
            <form role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
                <fieldset>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input class="form-control input-lg" placeholder="E-mail" name="email" type="email" autofocus value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input class="form-control input-lg" placeholder="Password" name="password" type="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="checkbox hidden">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me" checked>Remember Me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                </fieldset>
            </form>
          </div>
      </div>
  </div>
</section>

<section class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="btn btn-lg btn-light" href="{{ url('/register') }}">Register</a>
                <a class="btn btn-lg btn-dark" href="{{ url('/password/reset') }}">Reset Password</a>
            </div>
        </div>
    </div>
</section>
@endsection