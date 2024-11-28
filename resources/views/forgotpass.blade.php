<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Loom</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <div class="container p-3 mt-5">
        <div class="registration-box shadow animated">
            <div class="left-side" id="form1">
                <h2 class="text-center mb-5">
                    <img src="{{ asset('images/img3.png') }}">
                </h2>
                <p class="info-text text-center">Enter your email and we'll send you a code.</p>
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <i class="fas fa-user icon" style="margin-left: 5px;"></i>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="col-12 mt-5 p-5">
                            <div class="form-group text-center">
                                <button type="button" class="btn" id="nextBtn">Next</button>
                            </div>
                            <div class="form-group text-center mt-3 text-edge">
                                <span class="return-login">
                                    <a href="/"><i class="fas fa-arrow-left"></i> Return to Login</a>
                                </span>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="left-side hidden" id="form2">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-2">
                            <input type="text" class="form-control" id="verificationCode" name="verificationCode" maxlength="6" placeholder="CODE" required style="height: 100px; font-size: 5em; text-align: center;">
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="form-group text-center">
                            <span class="resend-email">Resend Email</span>
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-5 p-5">
                        <div class="form-group text-center">
                            <button type="button" class="btn" id="nextBtn2">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left-side hidden" id="form3">
                <div class="row p-2">
                    <div class="col-12">
                        <div class="form-group mt-2">
                            <label for="newPassword">New Password</label>
                            <i class="fa-solid fa-lock icon" style="margin-left: 5px; margin-top: 11px;"></i>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mt-2">
                            <label for="confirmPassword">Confirm Password</label>
                            <i class="fa-solid fa-lock icon" style="margin-left: 5px; margin-top: 11px;"></i>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="form-group">
                            <input type="checkbox" id="showPasswords" class="checkbox">Show Passwords
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-5 p-5">
                        <div class="form-group text-center">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="right-side">
                <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid"></a>
            </div>
        </div>
    </div>

    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Toggle between forms
        document.getElementById('nextBtn').addEventListener('click', function() {
            document.getElementById('form1').classList.add('hidden');
            document.getElementById('form2').classList.remove('hidden');
        });

        document.getElementById('nextBtn2').addEventListener('click', function() {
            document.getElementById('form2').classList.add('hidden');
            document.getElementById('form3').classList.remove('hidden');
        });

        // Show password functionality
        document.getElementById('showPasswords').addEventListener('change', function() {
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const type = this.checked ? 'text' : 'password';
            newPassword.type = type;
            confirmPassword.type = type;
        });
    </script>
</body>
</html>
