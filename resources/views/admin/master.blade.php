<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand bg-light navbar-light">
        <div class="container">
            <a href="{{ route('admin.dashboard') }}"class="navbar-brand text-uppercase">Mental Support</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('admin.dashboard') }}" class="fw-bold nav-link">Dashboard</a></li>
                <li class="dropdown">
                    <a href="" class="fw-bold nav-link dropdown-toggle" data-bs-toggle="dropdown">Doctors</a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="{{ route('doctors.index') }}" class=" dropdown-item">Doctors List</a></li>
                        <li><a href="{{ route('doctors.create') }}" class="dropdown-item">Add Doctors</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.appointment-list') }}" class="fw-bold nav-link">Appointment</a></li>

                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('admin/img/default.jpg') }}" class="rounded-circle" alt="User" width="30" height="30">
                        {{ Auth::guard('admin')->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Profile</a></li>
                        <li><a href="{{ route('admin.change-password') }}" class="dropdown-item">Change Password</a></li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.js') }}"></script>
    <script src="https://kit.fontawesome.com/d365ede256.js" crossorigin="anonymous"></script>
    {{--Toster Alert js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
            {{ Session::forget('success') }}
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            toastr.error("{{ Session::get('error') }}");
            {{ Session::forget('error') }}
        </script>
    @endif
    @yield('script')

</body>
</html>
