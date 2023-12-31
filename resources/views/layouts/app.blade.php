<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        padding-top: 20px;
    }

    footer {
        background-color: #f8f9fa;
        padding: 20px 0;
    }

    .social-icon {
        color: #007bff;
        margin-right: 10px;
        font-size: 20px;
    }
    </style>

</head>

<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Me</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    <!-- Content Area -->
    <div>
        @yield('content')
    </div>

    <!-- Footer -->

    <footer class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Portfolio</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
