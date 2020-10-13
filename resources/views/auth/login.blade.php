@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container flex">
    <div class="p-4 m-auto rounded w-full sm:max-w-md shadow-lg">
        @if ($errors->any())
            <div class="mb-4">
                @include('partials.errors')
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label>{{ __('Email') }}</label>
                <input type="text" name="email" placeholder="john.doe@example.com" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required autofocus />
            </div>

            <div class="mt-4">
                <label>{{ __('Password') }}</label>
                <input type="password" name="password" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required autocomplete="current-password" />
            </div>

            <div class="mt-4">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="hover:underline">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="inline-block py-2 px-4 bg-blue-400 text-white rounded ml-3">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
