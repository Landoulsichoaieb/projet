<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                                    <p class="text-white-50 mb-5">Please fill in the fields below to create an account!</p>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Display Validation Errors -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <!-- Name Field -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" required />
                                            <label class="form-label">Name</label>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Email Field -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required />
                                            <label class="form-label">Email</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Password Field -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required />
                                            <label class="form-label">Password</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Password Confirmation Field -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" name="password_confirmation" class="form-control form-control-lg" required />
                                            <label class="form-label">Confirm Password</label>
                                        </div>

                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
                                    </form>
                                </div>

                                <div>
                                    <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Login</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
