<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Login</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
           <div class="col-md-4">
               <div class="card shadow">
                   <div class="card-header py-2">
                       <h4 class="fw-bold text-secondary text-center">Doctor Login</h4>
                   </div>
                   <div class="card-body p-5">

                    @if (Session::has('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error:</strong> {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                       <div id="login_alert"></div>
                       <form action="{{ route('doctor.login') }}" method="post">
                           @csrf
                           <div class="mb-3">
                               <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-Mail">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
                           <div class="mb-3">
                               <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password">
                               @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
                           <div class="mb-3">
                               <a href="" class="text-decoration-none">Forgot Password ?</a>
                               <div class="invalid-feedback"></div>
                           </div>
                           <div class="mb-3 d-grid">
                               <input type="submit" value="Login" id="login_btn" class="btn btn-dark rounded-0 grid" placeholder="Password">
                               <div class="invalid-feedback"></div>
                           </div>
                            <div class="mb-3">
                                <p>Go to <a href="/" class="text-decoration-none">Home page</a></p>
                            </div>
                       </form>
                   </div>
               </div>
           </div>
        </div>
    </div>
    {{-- JS --}}
    <script src="{{ asset('admin/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
