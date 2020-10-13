<div class="container flex items-center justify-between py-2 px-4">
    <div>
        <a href="{{ route('welcome') }}">
            @include('partials.logo')
        </a>
    </div>

    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 inline-block mx-2">{{ __('Dashboard') }}</a>

                <form class="inline-block mx-2" action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button class="text-gray-700">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 inline-block mx-2">{{ __('Login') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-gray-700 inline-block mx-2">{{ __('Register') }}</a>
                @endif
            @endif
        </div>
    @endif
</div>
