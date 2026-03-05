@extends('Layout.layout')

@section('Content')
<style>
    body {
        padding-top: 40px; /* Adjust padding for navbar */
    }

    /* Profile Sidebar Styling */
    .profile-sidebar-card {
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 20px;
        text-align: center;
    }

    /* Profile Progress Bar */
    .progress-bar {
        background-color: #f43f5e;
    }

    .stat-card {
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .profile-content-card {
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .avatar-large {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #3490dc;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        font-size: 2.5rem;
        color: #fff;
    }

    .avatar-edit-btn i {
        font-size: 1.5rem;
        color: #3490dc;
    }
</style>

<section class="profile-section py-5 bg-light min-vh-100">
    <div class="container py-lg-4">
        <div class="row g-4">

            {{-- Left Side: Profile Sidebar --}}
            <div class="col-lg-4">
                <div class="profile-sidebar-card">
                    <div class="profile-avatar-wrapper mb-3 position-relative">
                        @if(Auth::check() && Auth::user()->profile_img)
                            <div class="avatar-large">
                                <img src="{{ asset(Auth::user()->profile_img) }}" alt="Profile Image" class="img-fluid rounded-circle">
                            </div>
                        @elseif(Auth::check())
                            <div class="avatar-large">
                                {{ strtoupper(substr(Auth::user()->firstname, 0, 1)) }}
                            </div>
                        @else
                            <div class="avatar-large">
                                Guest
                            </div>
                        @endif
                        <label for="avatar-upload" class="avatar-edit-btn">
                            <i class="fas fa-camera"></i>
                        </label>
                    </div>
                    @if(Auth::check())
                        <h4 class="fw-bold text-dark mb-1">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h4>
                        <p class="text-muted small mb-3">{{ Auth::user()->role ?? 'User' }}</p>
                    @else
                        <h4 class="fw-bold text-dark mb-1">Guest</h4>
                    @endif

                    <div class="profile-completeness mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small fw-bold text-muted">Profile Completion</span>
                            <span class="small fw-bold text-pink">85%</span>
                        </div>
                        <div class="progress rounded-pill" style="height: 8px;">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-pink-light rounded-pill fw-bold py-2">
                            <i class="fas fa-file-download me-2"></i> Download CV
                        </button>
                    </div>

                    <hr class="my-4 opacity-10">

                    <ul class="list-unstyled text-start profile-quick-info">
                        @if(Auth::check())
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-envelope me-3 text-pink"></i>
                                <span class="small text-muted">{{ Auth::user()->email }}</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-phone-alt me-3 text-pink"></i>
                                <span class="small text-muted">{{ Auth::user()->phone ?? 'N/A' }}</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt me-3 text-pink"></i>
                                <span class="small text-muted">{{ Auth::user()->city ?? 'City' }}, {{ Auth::user()->country ?? 'Country' }}</span>
                            </li>
                        @else
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-envelope me-3 text-pink"></i>
                                <span class="small text-muted">N/A</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-phone-alt me-3 text-pink"></i>
                                <span class="small text-muted">N/A</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt me-3 text-pink"></i>
                                <span class="small text-muted">N/A</span>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            {{-- Right Side: Profile Details & Stats --}}
            <div class="col-lg-8">
                {{-- Quick Stats Grid --}}
                {{-- <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="stat-card p-3 rounded-4 bg-white shadow-sm border-0 d-flex align-items-center">
                            <div class="stat-icon me-3 bg-blue-light"><i class="fas fa-briefcase text-primary"></i></div>
                            <div><h5 class="fw-bold mb-0">{{ $userStats['jobsApplied'] }}</h5><small class="text-muted">Applied Jobs</small></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card p-3 rounded-4 bg-white shadow-sm border-0 d-flex align-items-center">
                            <div class="stat-icon me-3 bg-pink-light"><i class="fas fa-heart text-pink"></i></div>
                            <div><h5 class="fw-bold mb-0">{{ $userStats['jobsSaved'] }}</h5><small class="text-muted">Saved Jobs</small></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card p-3 rounded-4 bg-white shadow-sm border-0 d-flex align-items-center">
                            <div class="stat-icon me-3 bg-success-light"><i class="fas fa-bell text-success"></i></div>
                            <div><h5 class="fw-bold mb-0">{{ $userStats['interviews'] }}</h5><small class="text-muted">Interviews</small></div>
                        </div>
                    </div>
                </div> --}}

                {{-- Profile Content Tabs --}}
                <div class="profile-content-card shadow-sm border-0 rounded-5 bg-white p-4">
                    <nav>
                        <div class="nav nav-tabs border-0 mb-4 profile-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active rounded-pill px-4 me-2" data-bs-toggle="tab" data-bs-target="#overview">Overview</button>
                            <button class="nav-link rounded-pill px-4 me-2" data-bs-toggle="tab" data-bs-target="#edit">Edit Profile</button>
                            <button class="nav-link rounded-pill px-4" data-bs-toggle="tab" data-bs-target="#settings">Settings</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        {{-- Overview Tab --}}
                        <div class="tab-pane fade show active" id="overview">
                            <h5 class="fw-bold text-dark mb-3">About Me</h5>
                            <p class="text-muted small">{{ Auth::user()->bio ?? 'No bio available.' }}</p>

                            <h5 class="fw-bold text-dark mt-4 mb-3">Recent Applications</h5>
                            @foreach($userRecentApplications as $application)
                                <div class="application-item p-3 border rounded-4 mb-3 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="company-logo-sm bg-light rounded-3 me-3">{{ $application->company_initials }}</div>
                                        <div>
                                            <h6 class="fw-bold mb-0 small">{{ $application->job_title }}</h6>
                                            <small class="text-muted">{{ $application->company_name }} • {{ $application->date }}</small>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue-light text-primary">{{ $application->status }}</span>
                                </div>
                            @endforeach
                        </div>

                        {{-- Edit Tab --}}
                        <div class="tab-pane fade" id="edit">
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="small fw-bold text-muted mb-1">First Name</label>
                                        <input type="text" class="form-control rounded-3" name="firstname" value="{{ Auth::user()->firstname }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small fw-bold text-muted mb-1">Last Name</label>
                                        <input type="text" class="form-control rounded-3" name="lastname" value="{{ Auth::user()->lastname }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="small fw-bold text-muted mb-1">Bio</label>
                                        <textarea class="form-control rounded-3" rows="3" name="bio">{{ Auth::user()->bio }}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-custom px-5 rounded-pill mt-2">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
