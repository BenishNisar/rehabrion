@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    :root{
        --rehab-primary: #6b8f86;      /* soft clinic green  */
        --rehab-primary-soft:#e3f0ec;
        --rehab-accent:#b10937;
        --rehab-dark:#1f2933;
        --rehab-muted:#6b7280;
        --rehab-bg:#f5f7fa;
    }

    .profile-page-wrapper{
        min-height: calc(100vh - 70px);
        background: radial-gradient(circle at top left, #e3f0ec 0, #f5f7fa 40%, #ffffff 100%);
        padding: 32px 12px 40px;
        font-family: "Poppins", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    .profile-container {
        max-width: 980px;
        margin: 0 auto;
        padding: 26px 26px 28px;
        background: #ffffff;
        border-radius: 22px;
        border: 1px solid rgba(148,163,184,0.35);
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
        position: relative;
        overflow: hidden;
    }

    .profile-container::before{
        content:"";
        position:absolute;
        inset:-40%;
        background:
            radial-gradient(circle at 0 0, rgba(107,143,134,0.12), transparent 55%),
            radial-gradient(circle at 100% 0, rgba(177,9,55,0.10), transparent 60%);
        opacity:0.9;
        z-index:-1;
    }

    .profile-header {
        display:flex;
        align-items:flex-start;
        justify-content:space-between;
        gap:18px;
        margin-bottom:26px;
    }

    .profile-header-left{
        display:flex;
        align-items:center;
        gap:18px;
    }

    .profile-avatar-wrap{
        position:relative;
        width:110px;
        height:110px;
        border-radius:999px;
        background: linear-gradient(135deg, var(--rehab-primary), var(--rehab-primary-soft));
        padding:2px;
    }

    .profile-avatar-inner{
        width:100%;
        height:100%;
        border-radius:inherit;
        background:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        overflow:hidden;
        position:relative;
    }

    .profile-avatar-inner img{
        width:100%;
        height:100%;
        object-fit:cover;
    }

    .profile-avatar-initials{
        font-size:32px;
        font-weight:700;
        color:var(--rehab-primary);
    }

    .profile-status-dot{
        position:absolute;
        right:6px;
        bottom:8px;
        width:14px;
        height:14px;
        border-radius:999px;
        background:#22c55e;
        border:3px solid #ffffff;
        box-shadow:0 0 0 2px rgba(34,197,94,0.35);
    }

    .profile-heading h2 {
        margin: 0 0 4px 0;
        font-size: 24px;
        font-weight: 700;
        color: var(--rehab-dark);
    }

    .profile-heading .role-line{
        font-size:13px;
        color:var(--rehab-muted);
    }

    .profile-chip-row{
        margin-top:10px;
        display:flex;
        flex-wrap:wrap;
        gap:8px;
    }

    .profile-chip{
        font-size:11px;
        text-transform:uppercase;
        letter-spacing:0.09em;
        padding:4px 10px;
        border-radius:999px;
        background:rgba(255,255,255,0.75);
        color:var(--rehab-dark);
        border:1px solid rgba(148,163,184,0.55);
        display:inline-flex;
        align-items:center;
        gap:6px;
    }
    .profile-chip i{font-size:11px;}

    .profile-header-right{
        text-align:right;
        font-size:12px;
        color:var(--rehab-muted);
    }
    .profile-header-right .label{
        text-transform:uppercase;
        letter-spacing:0.09em;
        font-size:11px;
    }
    .profile-header-right .value{
        font-weight:600;
        color:var(--rehab-dark);
    }

    .profile-grid-wrapper{
        margin-top:18px;
        background:rgba(248,250,252,0.95);
        border-radius:18px;
        padding:18px 18px 12px;
        border:1px solid rgba(209,213,219,0.8);
    }

    .profile-grid-title{
        font-size:13px;
        font-weight:600;
        color:var(--rehab-dark);
        margin-bottom:12px;
        display:flex;
        align-items:center;
        gap:8px;
    }
    .profile-grid-title i{
        font-size:14px;
        color:var(--rehab-primary);
    }

    .profile-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 14px 18px;
    }

    .profile-card {
        padding: 14px 14px 12px;
        background-color: #ffffff;
        border-radius: 14px;
        border: 1px solid rgba(226,232,240,0.9);
        transition: 0.25s ease;
        min-height: 72px;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .profile-card:hover {
        box-shadow: 0 12px 26px rgba(15, 23, 42, 0.10);
        transform: translateY(-2px);
        border-color: var(--rehab-primary);
    }

    .profile-label {
        font-weight: 600;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--rehab-muted);
        margin-bottom: 2px;
        display:flex;
        align-items:center;
        gap:6px;
    }
    .profile-label i{
        font-size:11px;
        color:var(--rehab-primary);
    }

    .profile-value {
        font-size: 14px;
        color: #111827;
        word-wrap: break-word;
        overflow-wrap: break-word;
        max-width: 100%;
    }

    .profile-value.muted{
        color:#9ca3af;
        font-style:italic;
    }

    @media (max-width: 768px) {
        .profile-container{
            padding:22px 18px 24px;
        }
        .profile-header{
            flex-direction:column;
            align-items:flex-start;
        }
        .profile-header-right{
            text-align:left;
        }
    }
</style>

<div class="profile-page-wrapper">
    <div class="profile-container">
        @php
            $user = auth()->user();
            $initials = ($user->firstname[0] ?? 'R') . ($user->lastname[0] ?? '');
        @endphp

        <div class="profile-header">
            <div class="profile-header-left">
                <div class="profile-avatar-wrap">
                    <div class="profile-avatar-inner">
                        @if($user->profile_img)
                            <img src="{{ asset($user->profile_img) }}" alt="Profile Image">
                        @else
                            <div class="profile-avatar-initials">
                                {{ strtoupper($initials) }}
                            </div>
                        @endif
                    </div>
                    <span class="profile-status-dot"></span>
                </div>

                <div class="profile-heading">
                    <h2>{{ $user->firstname }} {{ $user->lastname }}</h2>
                    <div class="role-line">Clinician / Admin profile</div>
                    <div class="profile-chip-row">
                        <span class="profile-chip">
                            <i class="fas fa-user-md"></i> Rehabrion   Panel
                        </span>
                        <span class="profile-chip">
                            <i class="fas fa-shield-alt"></i> Secure Account
                        </span>
                    </div>
                </div>
            </div>

            <div class="profile-header-right">
                <div class="label">Last login</div>
                <div class="value">{{ $user->last_login_at ?? '—' }}</div>
            </div>
        </div>

        <div class="profile-grid-wrapper">
            <div class="profile-grid-title">
                <i class="fas fa-id-card-alt"></i> Account details
            </div>

            <div class="profile-grid">
                <div class="profile-card">
                    <div class="profile-label">
                        <i class="fas fa-envelope"></i>Email
                    </div>
                    <div class="profile-value text-break">
                        {{ $user->email ?? 'Not provided' }}
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-label">
                        <i class="fas fa-venus-mars"></i>Gender
                    </div>
                    <div class="profile-value text-capitalize">
                        {{ $user->gender ?? 'Not provided' }}
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-label">
                        <i class="fas fa-globe-asia"></i>Country
                    </div>
                    <div class="profile-value">
                        {{ $user->country ?? 'Not provided' }}
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-label">
                        <i class="fas fa-city"></i>City
                    </div>
                    <div class="profile-value">
                        {{ $user->city ?? 'Not provided' }}
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-label">
                        <i class="fas fa-mail-bulk"></i>Zip Code
                    </div>
                    <div class="profile-value">
                        {{ $user->zip_code ?? 'Not provided' }}
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-label">
                        <i class="fas fa-hospital-user"></i>Organization
                    </div>
                    <div class="profile-value">
                        {{ $user->organization ?? 'Not provided' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
