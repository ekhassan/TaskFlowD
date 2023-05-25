<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    {{-- For icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Task Flow</title>
</head>

<body>

    <header class="bg fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <a class="navbar-brand" href="#">Task Flow</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('register')}}">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="bg text-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>Task Flow</h2>
                </div>
                <div class="col-sm">
                    <h5>About Task Flow</h5>
                    <p>What’s behind the boards.</p>
                </div>
                <div class="col-sm">
                    <h5>Jobs</h5>
                    <p>Learn about open roles on the Task Flow team.</p>
                </div>
                <div class="col-sm">
                    <h5>Apps</h5>
                    <p>Download the task flow App for your Desktop or Mobile devices.
                    </p>
                </div>
                <div class="col-sm">
                    <h5>Contact us</h5>
                    <p>Need anything? Get in touch and we can help.
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privact Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cookie settings</a>
                        </li>
                    </ul>
                </div>
                <div class="col"><p>Copyright © 2023</p></div>
                <div class="col-sm">
                    <ul class="nav">
                        <li class="nav-item">
                            <i class="fa-brands fa-facebook-f"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa-brands fa-instagram"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa-brands fa-youtube"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
</body>

</html>
