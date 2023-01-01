<header>
    <div class="container">
        <div class="navbar navbar-expand-lg justify-content-between">
            <a href="{{ route('comics.index') }}" class="navbar-brand">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                Comics
                @yield('title')
            </a>
            <button class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            @yield('actions')
        </div>
    </div>
</header>
