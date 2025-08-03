<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
    <style>
       
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent body scroll */
        }

        .d-flex {
            display: flex;
        }

        .sidebar {
            width: 250px; /* Adjust sidebar width */
            background: #343a40; /* Optional */
            color: white;
            height: 100vh;
            overflow-y: auto;
            padding: 1rem;
        }

        .content {
            flex-grow: 1;
            overflow-y: auto; /* Allow internal scroll if content is large */
            padding: 2rem;
            height: 100vh;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 0.5rem 1rem;
            margin-bottom: 0.5rem;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }

        .has-error input{
            border: 1px solid var(--bs-red) !important;
        }

        .box-inner {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 12px;
            margin-bottom: 80px; /* leave room for mobile button */
            border: 1px solid #e0e0e0;
        }

        .box-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .headerTitleWrapper h3 {
            font-weight: 600;
        }

        .fixedBottomBtnWrapper {
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.05);
        }

        .offcanvas-header,
        .offcanvas-body,
        .offcanvas-footer {
            padding: 20px;
        }

        .offcanvas-body {
            max-height: calc(100vh - 150px);
            overflow-y: auto;
        }

        .offcanvas-footer {
            border-top: 1px solid #e0e0e0;
            background-color: #fff;
        }

        #tableHeaderLeftOption.active {
            display: block !important;
        }

        @media (max-width: 768px) {
            .fullWidthMbl {
                width: 100%;
            }
        }
        .center-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; /* or whatever height you want */
            width: 100%;
        }
       .search-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
        }

        select.form-select {
            height: 50px;
            font-size: 16px;
        }

        .bot-response {
            margin-top: 40px;
            width: 100%;
            max-width: 600px;
        }

        #chatAnswer.loading::before {
            content: "Thinking...";
            color: #6c757d;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        .hover-effect {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        .navbar-brand {
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
        }

        .nav-link:hover {
            opacity: 0.85;
        }
        .sticky {
            position: sticky;
            top: 0;
        }

        .full-screen {
            height: 100vh; /* 100% of the viewport height */
        }
        #profile-header-adjustement {
            min-width: 30px;
            max-width: 30px;
            min-height: 30px;
            max-height: 30px;
            background-color: #5119B7;
            border-radius: 50%;
            position: relative;
        }
        #profile-header-firstletter {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 17px;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }


    </style>
</head>
<body>
    @include('layouts.header')

    <div class="d-flex">
        @include('layouts.sidebar')
        
        <div class="content full-screen">
            @yield('content')
            <input type="hidden" value="10" id="lengthSelect">
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @stack('scripts')
</body>
</html>
