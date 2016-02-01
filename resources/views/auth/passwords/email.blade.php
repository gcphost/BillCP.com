@extends('layouts.public')

@section('content')
<section class="page">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <h1>Reset Password</h1>

            <form role="form" method="POST" action="{{ url('/password/email') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-lg">
                    Send Password Reset Link
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