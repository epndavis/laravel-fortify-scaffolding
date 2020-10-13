@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>{{ __('Email') }}</label>
            <input type="text" name="email" required autofocus />
        </div>

        <div>
            <label>{{ __('Password') }}</label>
            <input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

        <div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button>
                {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
@endsection
