@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container flex">
    <div class="p-4 m-auto rounded w-full sm:max-w-md shadow-md sm:rounded-lg">
        @if ($errors->any())
            <div class="mb-4">
                @include('partials.errors')
            </div>
        @endif

        <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <p class="text-gray-600">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </p>

            <div class="mt-4">
                <label>{{ __('Code') }}</label>
                <input type="text" name="code" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required autofocus />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <button class="inline-block py-2 px-4 bg-blue-400 text-white rounded ml-3">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
