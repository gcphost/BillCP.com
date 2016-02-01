@extends('layouts.public')

@section('content')
<section class="page">
<div class="container">
    <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <form role="form" method="POST" action="{{ url('/password/reset') }}">
                {!! csrf_field() !!}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control input-lg" name="email" value="{{ $email or old('email') }}" placeholder="E-mail Address" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control input-lg" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                        <input type="password" class="form-control input-lg" name="password_confirmation" placeholder="Confirm Password" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">
                   Reset Password
                </button>
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