<header class="bg-primary text-white p-1 text-center">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="DC Logo" style="width: 80px">
            <h1 class="d-inline-block ms-3 fs-3">Laravel DC Comics Index Panel</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="txt-white">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white fs-6" href="{{ route('admin.index') }}">Comics List</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-white fs-6" href="{{ route('admin.create') }}">Add New Comic</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>