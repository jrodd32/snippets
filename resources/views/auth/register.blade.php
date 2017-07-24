@extends('layout')

@section('content')
    <form class="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="field{{ $errors->has('name') ? ' is-danger' : '' }}">
            <label for="name" class="label">Name</label>

            <div class="control">
                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field{{ $errors->has('email') ? ' is-danger' : '' }}">
            <label for="email" class="label">E-Mail Address</label>

            <div class="control">
                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field{{ $errors->has('password') ? ' is-danger' : '' }}">
            <label for="password" class="label">Password</label>

            <div class="control">
                <input id="password" type="password" class="input" name="password" required>

                @if ($errors->has('password'))
                    <span class="help">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field">
            <label for="password-confirm" class="label">Confirm Password</label>

            <div class="control">
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection
