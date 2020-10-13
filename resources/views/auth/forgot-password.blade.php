@extends('layouts.app')

@section('title', 'Forgot password')

@section('content')
<div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <label>{{ __('Email') }}</label>
            <input type="text" name="email" required autofocus />
        </div>

        <div>
            <button>
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection
