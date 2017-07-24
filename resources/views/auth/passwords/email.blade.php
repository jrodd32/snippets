@extends('layout')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

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

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
@endsection
