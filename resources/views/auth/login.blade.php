@extends('layout')

@section('content')
<form method="POST" action="{{ route('login') }}" class="form">
    {{ csrf_field() }}
    <div class="field {{ $errors->has('email') ? ' is-danger' : '' }}">
        <label for="email" class="label">E-Mail Address</label>

        <p class="control has-icons-left has-icons-right">
            <input class="input" id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
            </span>
        </p>

        @if ($errors->has('email'))
            <span class="help is-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="field {{ $errors->has('password') ? ' is-danger' : '' }}">
        <label for="password" class="label">Password</label>

        <p class="control has-icons-left">
            <input class="input" placeholder="Password" id="password" type="password" class="form-control" name="password" required>
            <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
            </span>
        </p>

        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif
    </div>

    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-primary">
                Login
            </button>
        </div>
        <div class="control">
            <a class="button is-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>
    </div>
</form>
@endsection
