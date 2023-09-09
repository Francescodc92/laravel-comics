<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container ">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                      <a class="nav-link text-uppercase active" aria-current="page"  href="{{ route('home') }}">Home Page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-uppercase" href="#">contatti</a>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>
    <div class="header-bottom"></div>
</header>
