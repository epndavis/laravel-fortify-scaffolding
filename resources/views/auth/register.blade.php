@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>{{ __('Name') }}</label>
            <input type="text" name="name" required value="{{ old('name') }}" />
        </div>

        <div>
            <label>{{ __('Email') }}</label>
            <input type="text" name="email" required value="{{ old('email') }}" />
        </div>

        <div>
            <label>{{ __('Password') }}</label>
            <input type="password" name="password" required />
        </div>

        <div>
            <label>{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" required />
        </div>

        <div>
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button>
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection
