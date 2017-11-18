@extends('app')

@section('content')
<div class="page-inner page-login">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-4 center">
                <a href="{{route('campaign.calculator')}}" class="logo-name text-center">Calculator Login</a>
                <p class="text-center m-t-md">Please login into your account.</p>
                <form action="{{route('auth.login')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-10 center">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-10 center">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 center">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
