@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-8">
    <div class="w-full max-w-3xl m-auto">
        <h1 class="text-2xl">
            Dashboard
        </h1>

        <div class="mt-4 p-4 shadow rounded">
            <two-factor-auth :enabled="{{ json_encode(auth()->user()->twoFactorAuthEnabled()) }}" />
        </div>
    </div>
</div>
@endsection
