@extends('layouts.public')

@section('content')
<section class="page">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Register</h1>
            <form role="form" method="POST" action="{{ url('/register') }}">
              {!! csrf_field() !!}
              <fieldset>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input class="form-control input-lg" placeholder="Full Name" name="name" type="text" autofocus value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
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
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input class="form-control input-lg" placeholder="Confirm Password" name="password_confirmation" type="password" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">
                      Register
                  </button>
                </div>
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
                <a class="btn btn-lg btn-light" href="{{ url('/') }}">Home</a>
                <a class="btn btn-lg btn-dark" href="{{ url('/login') }}">Login</a>
            </div>
        </div>
    </div>
</section>
@endsection