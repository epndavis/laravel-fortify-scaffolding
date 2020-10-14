@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container flex">
    <div class="p-4 m-auto rounded w-full sm:max-w-md shadow-md sm:rounded-lg">
        @if ($errors->any())
            <div class="mb-4">
                @include('partials.errors')
            </div>
        @endif
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label>{{ __('Name') }}</label>
                <input type="text" name="name" placeholder="John Doe" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required value="{{ old('name') }}" autofocus />
            </div>

            <div class="mt-4">
                <label>{{ __('Email') }}</label>
                <input type="email" name="email" placeholder="john.doe@example.com" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required value="{{ old('email') }}" />
            </div>

            <div class="mt-4">
                <label>{{ __('Password') }}</label>
                <input type="password" name="password" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required />
            </div>

            <div class="mt-4">
                <label>{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a href="{{ route('login') }}" class="hover:underline">
                    {{ __('Already registered?') }}
                </a>

                <button class="inline-block py-2 px-4 bg-blue-400 text-white rounded ml-3">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
