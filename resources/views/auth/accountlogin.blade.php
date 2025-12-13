<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehabrion   Login</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <style>
        :root{
            --primary:#7a958f;         /* dark teal */
            --primary-dark:#61756f;    /* slightly darker teal */
            --accent:#bae0db;          /* mint */
            --bg-soft:#f3faf9;
            --text-main:#0f172a;
            --text-muted:#6b7280;
            --border:#d1d5db;
        }

        *{
            box-sizing:border-box;
        }

        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
              radial-gradient(circle at top left, rgba(186,224,219,0.7) 0, transparent 55%),
              radial-gradient(circle at bottom right, rgba(122,149,143,0.25) 0, transparent 55%),
              var(--bg-soft);
            min-height:100vh;
            margin:0;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:16px;
            color:var(--text-main);
        }

        .login-container{
            width:100%;
            max-width:420px;
            background:#ffffff;
            border-radius:18px;
            padding:28px 26px 24px;
            box-shadow:0 18px 45px rgba(15,23,42,0.16);
            border:1px solid rgba(97,117,111,0.15);
            border-top:5px solid var(--primary);
            position:relative;
            overflow:hidden;
        }

        .login-container::before{
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(135deg, rgba(186,224,219,0.32), transparent 60%);
            opacity:.8;
            pointer-events:none;
        }

        .login-inner{
            position:relative;
            z-index:1;
        }

        .logo{
            display:flex;
            justify-content:center;
            margin-bottom:8px;
        }

        .logo img{
            max-width:220px;
            height:auto;
        }

        .pill{
            display:inline-flex;
            align-items:center;
            gap:6px;
            padding:4px 10px;
            border-radius:999px;
            background:rgba(186,224,219,0.5);
            color:#33504a;
            font-size:11px;
            font-weight:500;
            margin:0 auto 6px;
        }

        .pill i{
            font-size:11px;
        }

        .login-title{
            margin:4px 0 2px;
            text-align:center;
            font-size:22px;
            font-weight:600;
        }

        .login-subtitle{
            margin:0 0 18px;
            text-align:center;
            font-size:13px;
            color:var(--text-muted);
        }

        form{
            margin-top:4px;
        }

        .input-group{
            margin:10px 0;
            display:flex;
            align-items:center;
            border:1px solid var(--border);
            border-radius:10px;
            padding:8px 10px;
            background:#f9fafb;
            transition:border-color .18s ease, box-shadow .18s ease, background .18s ease;
        }

        .input-group:focus-within{
            border-color:var(--primary);
            box-shadow:0 0 0 1px rgba(122,149,143,0.35);
            background:#ffffff;
        }

        .input-group i{
            color:#9ca3af;
            margin-right:8px;
            font-size:14px;
        }

        .input-group input{
            border:none;
            outline:none;
            flex:1;
            padding:6px 2px;
            font-size:14px;
            background:transparent;
            color:var(--text-main);
        }

        .input-group input::placeholder{
            color:#9ca3af;
        }

        #togglePassword{
            margin-left:6px;
        }

        .error-text{
            display:block;
            color:#b91c1c;
            font-size:11px;
            margin-top:2px;
            text-align:left;
        }

        .remember{
            display:flex;
            justify-content:space-between;
            align-items:center;
            font-size:12px;
            margin:8px 0 14px;
            color:var(--text-muted);
        }

        .remember label{
            display:flex;
            align-items:center;
            gap:4px;
            cursor:pointer;
            user-select:none;
        }

        .remember input[type="checkbox"]{
            accent-color:var(--primary);
        }

        .remember a{
            color:var(--primary);
            text-decoration:none;
            font-weight:500;
        }

        .remember a:hover{
            text-decoration:underline;
        }

        .login-btn{
            width:100%;
            background:linear-gradient(135deg,var(--primary),var(--primary-dark));
            color:#ffffff;
            padding:10px 14px;
            border:none;
            border-radius:999px;
            cursor:pointer;
            font-size:15px;
            font-weight:600;
            letter-spacing:.03em;
            margin-top:2px;
            transition:transform .12s ease, box-shadow .12s ease, opacity .12s ease;
            box-shadow:0 12px 30px rgba(97,117,111,.35);
        }

        .login-btn:hover{
            transform:translateY(-1px);
            box-shadow:0 16px 36px rgba(97,117,111,.42);
        }

        .login-btn:active{
            transform:translateY(0);
            box-shadow:0 10px 22px rgba(97,117,111,.32);
            opacity:.96;
        }

        @media (max-width:480px){
            .login-container{
                padding:24px 18px 20px;
                border-radius:16px;
            }
            .logo img{
                max-width:190px;
            }
            .login-title{
                font-size:20px;
            }
        }
    </style>
</head>
<body style="background-image:url('https://i.pinimg.com/1200x/0b/ca/e8/0bcae84115f447708fb06843fcb5fd82.jpg');
background-position:cover;background-size:cover;">
    <div class="login-container" >
        <div class="login-inner">

            <div class="logo">
                <img src="{{ asset('Dashboard_assets/img/logo.png') }}" alt="Rehabrion  ">
            </div>

            <div class="pill">
                <i class="fas fa-stethoscope"></i> Rehabrion   Admin Portal
            </div>

            <h1 class="login-title">Welcome back</h1>
            <p class="login-subtitle">Sign in to manage your physiotherapy appointments and patients.</p>

            <form action="{{ route('auth.accountlogin.store') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Username" required>
                </div>
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror

                <!-- Password Field -->
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <i class="far fa-eye" id="togglePassword" style="cursor:pointer;"></i>
                </div>
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror

                <div class="remember">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    <a href="{{ route('auth.forget-password') }}">Forgot password?</a>
                </div>

                <button type="submit" class="login-btn">LOGIN</button>
            </form>

        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
