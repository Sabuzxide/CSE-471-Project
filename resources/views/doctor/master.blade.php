<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand bg-light navbar-light">
        <div class="container">
            <a href="{{ route('admin.dashboard') }}"class="navbar-brand text-uppercase">Mental Support</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('doctor.dashboard') }}" class="fw-bold nav-link">Dashboard</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('admin/img/default.jpg') }}" class="rounded-circle" alt="User" width="30" height="30">
                        {{ Auth::guard('doctor')->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Profile</a></li>
                        <li><a href="{{ route('doctor.change-password') }}" class="dropdown-item">Change Password</a></li>
                        <li>
                            <form action="{{ route('doctor.logout') }}" method="POST">
                                @csrf
                                <button class="text-danger dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
    <script src="{{ asset('admin/js/bootstrap.bundle.js') }}"></script>
    <script src="https://kit.fontawesome.com/d365ede256.js" crossorigin="anonymous"></script>

</body>
</html>
