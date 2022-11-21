@extends('admin.layouts.auth')

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ route('admin.login') }}">
    {{ csrf_field() }}
    <h1>Admin Login</h1>

    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        <input placeholder="User name" id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
    
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input placeholder="Password" id="password" type="password" class="form-control" name="password">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <div class="checkbox text-left">
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </div>

</form>
@endsection
