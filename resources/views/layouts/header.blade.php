<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm w-100 sticky">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ url('/index') }}">
            📚 AuthorBook
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('index') ? 'active' : '' }}" href="{{ url('/index') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('author*') ? 'active' : '' }}" href="{{ url('/author') }}">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('books*') ? 'active' : '' }}" href="{{ url('/books') }}">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('chatbot*') ? 'active' : '' }}" href="{{ url('/chatbot') }}">ChatBot</a>
                </li>
                <!-- You can add more menu items here -->
                {{-- Example: <li class="nav-item"><a class="nav-link" href="#">Settings</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
