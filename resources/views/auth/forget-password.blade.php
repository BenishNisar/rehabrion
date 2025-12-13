<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            border: 3px solid #9d0000;
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
            margin-bottom: 15px;
        }
        .input-group {
            margin: 10px 0;
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
        }
        .input-group input {
            border: none;
            outline: none;
            flex: 1;
            padding: 8px;
        }
        .input-group i {
            margin-right: 10px;
            color: gray;
        }
        .remember {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin: 10px 0;
        }
        .login-btn {
            width: 100%;
            background: #3b1980;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .social-login {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .social-login i {
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            transition: transform 0.2s;
        }
        .social-login i:hover {
            transform: scale(1.1);
        }
        .fa-google, .fa-microsoft, .fa-globe {
            margin: 0;
            padding: 0 5px;
        }
        .fa-google { color: #db4437; }
        .fa-microsoft { color: #0078d4; }
        .fa-globe { color: #e63946; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('Dashboard_assets/img/logo.png') }}" alt="link_station" width="300px">
        </div>


    <!-- resources/views/auth/forget-password.blade.php -->
<form method="POST" action="{{ route('auth.forget-password') }}">
    @csrf
    <h3>Forgot Password</h3>

    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Enter your registered email" required>
    </div>

    <button type="submit" class="login-btn">Send Reset Link</button>

    @if(session('message'))
    <p style="color: green;">{{ session('message') }}</p>

    @if(session('reset_link'))
        <a href="{{ session('reset_link') }}" style="display: inline-block; margin-top:10px; padding:8px 15px; background:#9d0000; color:#fff; border-radius:5px; text-decoration:none;">
            Go to Reset Password
        </a>
    @endif
@endif


</form>



    </div>
</body>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // toggle type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // toggle icon
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>
