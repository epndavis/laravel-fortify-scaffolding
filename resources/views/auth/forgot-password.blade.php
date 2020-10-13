@extends('layouts.app')

@section('title', 'Forgot password')

@section('content')
<div class="container flex">
    <div class="p-4 m-auto rounded w-full sm:max-w-md shadow-lg">
        @if ($errors->any())
            <div class="mb-4">
                @include('partials.errors')
            </div>
        @endif
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <p class="text-sm">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>

            <div class="mt-4">
                <label>{{ __('Email') }}</label>
                <input type="text" name="email" placeholder="john.doe@example.com" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required autofocus />
            </div>

            <div class="mt-4 flex justify-end">
                <button class="inline-block py-2 px-4 bg-blue-400 text-white rounded ml-3">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
