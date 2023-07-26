<header class="bg-primary p-1 text-center">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{ route('admin.index') }}">
                <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="DC Logo" style="width: 80px">
                <span class="d-inline-block ms-3 fs-3 text-white">DC Comics Admin Panel</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="txt-white">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-end">
                    <li class="nav-item m-3">
                        <a class="my_nav-link fs-5 {{ (Route::currentRouteName() == 'admin.index') ? 'active': ''}}" href="{{ route('admin.index') }}">Comics List</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="my_nav-link fs-5 {{ (Route::currentRouteName() == 'admin.create') ? 'active': ''}}" href="{{ route('admin.create') }}">Add New Comic</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>