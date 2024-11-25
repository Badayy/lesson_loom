<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Loom</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <div class="container p-5 animated">
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            </div>
            <form>
                <div class="form-group mt-5">
                    <i class="fas fa-user icon" style="margin-left: 5px;"></i>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock icon" style="margin-left: 5px;"></i>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div class="role-select">
                        <i class="fas fa-user-shield role-icon" style="margin-left: 5px;"></i>
                        <select class="form-select" id="role" name="role" required style="width: 150%;">
                            <option value="" disabled selected>Role</option>
                            <option value="admin" required>Admin</option>
                            <option value="teacher" required>Teacher</option>
                            <option value="school" required>School</option>
                        </select>
                    </div>
                    <p class="mb-0 align-self-center">
                        <a href="/forgotpass" style="text-decoration: none; color: grey;">Forgot Password?</a>
                    </p>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn mt-5">Login</button>
                </div>
                <div class="mt-5">
                    <p class="text-center text-secondary">Don't have an account?</p>
                    <h4 class="signup text-center">
                        <a href="/signup">SIGN UP</a>
                    </h4>
                </div>
            </form>
        </div>
    </div>

    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
