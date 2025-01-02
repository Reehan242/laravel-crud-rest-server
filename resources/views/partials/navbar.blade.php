{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a href="" class="navbar-brand text-danger ">Raihan Rest Server</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() === 'index') ? 'text-primary' : 'text-light' }}" aria-current="page" href="{{ route('index') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() === 'docs') ? 'text-primary' : 'text-light' }}" href="{{ route('docs') }}">Docs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- navbar end --}}