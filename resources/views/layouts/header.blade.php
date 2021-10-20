<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">{{ $title }}</h2>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user me-2"></i>{{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="/profile" class="dropdown-item">Profile</a></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <li><button type="submit" class="btn btn-light dropdown-item">Logout</button></li>
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</nav>



