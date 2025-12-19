<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rehabrion Register</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

  <style>
    :root{
      --primary:#7a958f;
      --primary-dark:#61756f;
      --bg-soft:#f3faf9;
      --text-main:#0f172a;
      --text-muted:#6b7280;
      --border:#d1d5db;
    }
    *{ box-sizing:border-box; }
    body{
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      min-height:100vh;
      margin:0;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:16px;
      color:var(--text-main);
      background-image:url('https://i.pinimg.com/1200x/0b/ca/e8/0bcae84115f447708fb06843fcb5fd82.jpg');
      background-size:cover;
      background-position:center;
    }
    .box{
      width:100%;
      max-width:520px;
      background:rgba(255,255,255,0.95);
      backdrop-filter: blur(6px);
      border-radius:18px;
      padding:22px;
      box-shadow:0 18px 45px rgba(15,23,42,0.16);
      border-top:5px solid var(--primary);
    }
    .top{
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
      gap:12px;
      margin-bottom:14px;
    }
    .top h1{ font-size:20px; margin:0; }
    .top p{ margin:6px 0 0; color:var(--text-muted); font-size:13px; }
    .top a{
      color:var(--primary);
      text-decoration:none;
      font-weight:600;
      font-size:13px;
      white-space:nowrap;
    }
    .grid{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:10px;
      margin-top:12px;
    }
    .field{
      display:flex;
      flex-direction:column;
      gap:6px;
      position:relative;
    }
    label{
      font-size:12px;
      color:var(--text-muted);
    }
    input{
      padding:11px 12px;
      border:1px solid var(--border);
      border-radius:10px;
      outline:none;
      font-size:14px;
      background:#f9fafb;
    }
    input:focus{
      border-color:var(--primary);
      background:#fff;
      box-shadow:0 0 0 4px rgba(122,149,143,0.15);
    }
    .full{ grid-column: 1 / -1; }
    .error{
      color:#b91c1c;
      font-size:12px;
      margin-top:6px;
    }

    /* password eye */
    .pw-wrap{
      position:relative;
    }
    .pw-input{
      padding-right:44px;
    }
    .pw-toggle{
      position:absolute;
      right:10px;
      top:50%;
      transform:translateY(-50%);
      width:34px;
      height:34px;
      border-radius:10px;
      border:1px solid rgba(15,23,42,0.08);
      background:#fff;
      display:flex;
      align-items:center;
      justify-content:center;
      cursor:pointer;
      color:var(--text-muted);
      transition: all .15s ease;
      user-select:none;
    }
    .pw-toggle:hover{
      color:var(--primary);
      border-color: rgba(122,149,143,0.35);
      box-shadow:0 10px 18px rgba(15,23,42,0.08);
    }
    .pw-toggle:active{
      transform:translateY(-50%) scale(0.98);
    }

    .btn{
      width:100%;
      margin-top:14px;
      background:linear-gradient(135deg,var(--primary),var(--primary-dark));
      color:#fff;
      padding:12px;
      border:none;
      border-radius:999px;
      font-weight:700;
      cursor:pointer;
      font-size:14px;
    }
    .hint{
      margin-top:10px;
      font-size:13px;
      color:var(--text-muted);
      text-align:center;
    }
    @media(max-width:640px){
      .grid{ grid-template-columns:1fr; }
    }
  </style>
</head>
<body>

  <div class="box">
    <div class="top">
      <div>
        <h1>Create Patient Account</h1>
        <p>Quick signup so you can login and start your assessment.</p>
      </div>
      <a href="{{ route('auth.accountlogin') }}">Back to Login</a>
    </div>

    @if ($errors->any())
      <div class="error">
        Please fix the highlighted errors and try again.
      </div>
    @endif

    <form method="POST" action="{{ route('auth.register.store') }}">
      @csrf

      <div class="grid">
        <div class="field">
          <label>First Name</label>
          <input name="firstname" value="{{ old('firstname') }}" required>
          @error('firstname') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="field">
          <label>Last Name</label>
          <input name="lastname" value="{{ old('lastname') }}" required>
          @error('lastname') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="field full">
          <label>Email</label>
          <input type="email" name="email" value="{{ old('email') }}" required>
          @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="field">
          <label>Phone</label>
          <input name="phone" value="{{ old('phone') }}" required>
          @error('phone') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="field">
          <label>Mobile Phone (Optional)</label>
          <input name="mobile_phone" value="{{ old('mobile_phone') }}">
        </div>

        <div class="field">
          <label>Password</label>
          <div class="pw-wrap">
            <input id="password" class="pw-input" type="password" name="password" required>
            <button type="button" class="pw-toggle" data-target="password" aria-label="Show password">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="field">
          <label>Confirm Password</label>
          <div class="pw-wrap">
            <input id="password_confirmation" class="pw-input" type="password" name="password_confirmation" required>
            <button type="button" class="pw-toggle" data-target="password_confirmation" aria-label="Show confirm password">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
        </div>
      </div>

      <button class="btn" type="submit">Create Account</button>

      <div class="hint">
        After login, you can complete your medical history in the next step.
      </div>
    </form>
  </div>

  <script>
    document.querySelectorAll('.pw-toggle').forEach(function(btn){
      btn.addEventListener('click', function(){
        var id = btn.getAttribute('data-target');
        var input = document.getElementById(id);
        var icon = btn.querySelector('i');

        if(!input) return;

        var isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';

        icon.classList.toggle('fa-eye', !isHidden);
        icon.classList.toggle('fa-eye-slash', isHidden);
        btn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
      });
    });
  </script>

</body>
</html>
