<nav class="navbar navbar-expand-lg qh-navbar">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo.jpeg') }}" alt="Quiet Hiring" class="qh-logo">
        </a>

        {{-- Mobile Menu Button --}}
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#qhNavbar" aria-controls="qhNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list text-white fs-2"></i>
        </button>

        {{-- Navigation --}}
        <div class="collapse navbar-collapse" id="qhNavbar">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link qh-nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                        Home
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link qh-nav-link {{ request()->is('jobs*') ? 'active' : '' }}"
                        href="{{ url('/jobs') }}">
                        Jobs
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link qh-nav-link {{ request()->is('companies*') ? 'active' : '' }}"
                        href="{{ url('/companies') }}">
                        Companies
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link qh-nav-link {{ request()->is('freshers*') ? 'active' : '' }}"
                        href="{{ url('/freshers') }}">
                        Freshers
                    </a>
                </li>

                <li class="nav-item">
                     <a class="nav-link qh-nav-link {{ request()->is('internships*') ? 'active' : '' }}"
                        href="{{ url('/internships') }}">
                        Internships
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link qh-nav-link" href="#">
                        About Us
                    </a>
                </li>

            </ul>

            {{-- Right Buttons --}}
            <div class="d-flex gap-2 align-items-center mt-3 mt-lg-0">

                <a href="#" class="qh-login-btn">
                    Login
                </a>

                <a href="#" class="qh-register-btn">
                    Register
                </a>

            </div>

        </div>

    </div>
</nav>