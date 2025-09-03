<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm w-100 sticky">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ url('/index') }}">
            📚 E-commerce
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product*') ? 'active' : '' }}" href="{{ url('/product') }}">Product</a>
                </li>
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
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product*') ? 'active' : '' }}" href="{{ url('/home') }}">
                        <img src="{{ asset('img/site-logo.png') }}" alt="Site Logo" style="height:40px; width:120px;object-fit: contain;"> Site
                    </a>
                </li>
                
               
                <!-- You can add more menu items here -->
                {{-- Example: <li class="nav-item"><a class="nav-link" href="#">Settings</a></li> --}}
            </ul>
           <!-- Profile Initial & Dropdown -->
            <div class="ms-3 position-relative">
                <div id="profileBtn" class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; cursor: pointer; overflow: hidden;">
                    <img src="{{ asset('storage/' . session('profile')) }}" alt="Profile" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div id="profileDropdown" class="dropdown-menu shadow p-3 mt-2" style="display: none; min-width: 200px; left: auto; right: 0; transform: translateX(-20px);">
                    <div class="mb-3 text-center">
                        <strong>{{ ucfirst(session('user_name')) }}</strong>
                        <span class="badge bg-secondary ms-2">
                            {{ (session('usertype') == 1) ? 'Admin' : 'User' }}
                        </span>
                        <br>
                        <small class="text-muted d-block">{{ session('user_email') }}</small>
                        <a href='{{"/profile_edit"}}' class="btn btn-sm btn-outline-primary mt-2">Edit Profile</a>
                    </div>
                    <hr>
                    <!-- <a href="#" class="dropdown-item">Manage Account</a> -->
                    <a href="#" class="dropdown-item text-danger" onclick="onLogoutClick()">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    const profileBtn = document.getElementById('profileBtn');
    const profileDropdown = document.getElementById('profileDropdown');

    profileBtn.addEventListener('click', function () {
        profileDropdown.style.display = profileDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Optional: Close dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
        profileDropdown.style.display = 'none';
        }
    });

    function onLogoutClick()
    {
        $.ajax({
            type : "POST",
            url  : '<?= ('logout') ?>',
            data :{_token : '<?= csrf_token() ?>'},
            dataType: 'JSON',
            success: function(data)
            {
                if(data.status == true)
                {
                    window.location.href = '<?= ('login') ?>';
                }
            },
        })
    }
</script>
