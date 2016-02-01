@extends(Auth::user()->hasRole('admin') ? 'layouts.app' : 'layouts.public')

@section('content')
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Billing? &mdash; We do that!</h2>
                    <p class="lead">You're on the 'client' dashboard now.</p>

                    @if (Auth::guest())
                      <a href="{{ url('/login') }}" class="btn btn-primary btn-lg">Log-in</a> &nbsp; or &nbsp; <a href="{{ url('/register') }}"  class="btn btn-success btn-lg">Register</a>
                    @endif

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>We'd love to actually do it, but this is all we've got:</h3>
                    <a href="{{ url('logout') }}" class="btn btn-lg btn-light">Log out</a>
                    <a href="{{ url('/') }}" class="btn btn-lg btn-dark">Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection
