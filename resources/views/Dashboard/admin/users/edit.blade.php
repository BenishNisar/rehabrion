@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    :root{
        --mint: #bae0db;
        --teal: #7a958f;
        --teal-dark: #58716b;
        --ink: #111827;
        --muted: #6b7280;
        --border-soft: #e5e7eb;
    }

    .user-edit-shell{
        margin-top:18px;
        margin-bottom:18px;
    }

    .user-form-card{
        background:#ffffff;
        border-radius:16px;
        border:1px solid rgba(122,149,143,0.20);
        box-shadow:0 16px 34px rgba(15,23,42,0.06);
        padding:18px 18px 14px;
        position:relative;
        overflow:hidden;
    }
    .user-form-card::before{
        content:"";
        position:absolute;
        inset:0;
        background:radial-gradient(circle at top left,rgba(186,224,219,0.45),transparent 55%),
                   radial-gradient(circle at top right,rgba(122,149,143,0.35),transparent 55%);
        opacity:0.35;
        pointer-events:none;
    }
    .user-form-card-inner{
        position:relative;
        z-index:1;
    }

    .page-head{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:12px;
        margin-bottom:12px;
        padding-bottom:8px;
        border-bottom:1px dashed rgba(148,163,184,0.6);
    }
    .page-head-left{
        display:flex;
        align-items:center;
        gap:10px;
    }
    .avatar-lg{
        width:52px;
        height:52px;
        border-radius:50%;
        object-fit:cover;
        border:2px solid rgba(186,224,219,0.9);
        background:#f3faf8;
    }
    .page-title-block h2{
        font-size:20px;
        font-weight:700;
        color:var(--ink);
        margin:0;
    }
    .page-title-block .meta{
        font-size:12px;
        color:var(--muted);
    }

    .tag-pill{
        font-size:11px;
        padding:4px 10px;
        border-radius:999px;
        border:1px solid rgba(148,163,184,0.6);
        background:#f9fafb;
        color:#4b5563;
    }

    .meta-second{
        font-size:11px;
        color:var(--muted);
        margin-top:2px;
    }

    /* Form styling */
    .form-label{
        font-weight:600;
        font-size:13px;
        color:#111827;
        margin-bottom:4px;
    }
    .form-control,
    .form-select{
        height:38px;
        padding:6px 10px;
        border:1px solid var(--border-soft);
        border-radius:9px;
        font-size:13px;
        color:#111827;
        background:#ffffff;
        transition:border-color .18s ease, box-shadow .18s ease, background-color .18s ease;
    }
    .form-control:focus,
    .form-select:focus{
        border-color:var(--teal);
        box-shadow:0 0 0 0.12rem rgba(122,149,143,0.30);
        outline:none;
        background:#ffffff;
    }
    .form-control::placeholder{
        font-weight:300;
        color:#9ca3af;
    }
    small{
        font-size:11px;
        color:#6b7280;
    }

    .img-thumb-wrap{
        display:flex;
        align-items:center;
        gap:10px;
        margin-bottom:6px;
    }
    .img-thumb-wrap img{
        border-radius:50%;
        width:54px;
        height:54px;
        object-fit:cover;
        border:2px solid rgba(186,224,219,0.9);
        background:#f9fafb;
    }

    .text-danger{
        font-size:11px;
        margin-top:2px;
    }

    /* Buttons */
    .actions-row{
        margin-top:4px;
    }
    .btn-chip{
        border-radius:999px;
        padding:7px 16px;
        font-size:13px;
        font-weight:600;
        border:none;
    }
    .btn-cancel{
        background:#e5e7eb;
        color:#111827;
        margin-right:8px;
    }
    .btn-cancel:hover{
        background:#d1d5db;
    }
    .btn-save{
        background:linear-gradient(135deg,var(--teal),var(--mint));
        color:#0b1620;
        border:none;
    }
    .btn-save:hover{
        background:linear-gradient(135deg,var(--teal-dark),var(--teal));
        color:#ffffff;
    }

    @media (max-width:768px){
        .user-form-card{
            padding:14px 12px 10px;
            border-radius:12px;
        }
        .page-head{
            flex-direction:column;
            align-items:flex-start;
        }
        .page-head-left{
            width:100%;
        }
    }
</style>

<div class="container user-edit-shell">
    <div class="user-form-card">
        <div class="user-form-card-inner">

            @php
                $img = $user->profile_img ?: 'assets/profile_images/default.png';
            @endphp

            <div class="page-head">
                <div class="page-head-left">
                    <div>
                        <img src="{{ asset($img) }}" alt="Profile" class="avatar-lg">
                    </div>
                    <div class="page-title-block">
                        <h2>Edit User</h2>
                        <div class="meta">
                            {{ $user->firstname }} {{ $user->lastname }} • {{ $user->email }}
                        </div>
                        <div class="meta-second">
                            Created: {{ $user->created_at }} • Updated: {{ $user->updated_at }}
                        </div>
                    </div>
                </div>
                <span class="tag-pill">
                    ID: #{{ $user->id }}
                </span>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size:13px;">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li class="mb-1">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('Dashboard.admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                @csrf
                @method('PUT')

                {{-- Row 1: Name + Email + Password --}}
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text"
                               class="form-control"
                               name="firstname"
                               value="{{ old('firstname',$user->firstname) }}"
                               required />
                        @error('firstname') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text"
                               class="form-control"
                               name="lastname"
                               value="{{ old('lastname',$user->lastname) }}"
                               required />
                        @error('lastname') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email',$user->email) }}"
                               required>
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               autocomplete="new-password">
                        <small>Leave blank to keep the current password.</small>
                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

                {{-- Row 2: Profile + Gender + DOB + Role --}}
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="profile_img" class="form-label">Profile Image</label>
                        <div class="img-thumb-wrap">
                            <img src="{{ asset($img) }}" alt="Profile Image">
                        </div>
                        <input type="file"
                               name="profile_img"
                               class="form-control"
                               accept="image/*">
                        @error('profile_img') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-select">
                            <option value="">Select Gender</option>
                            <option value="male"   {{ old('gender',$user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender',$user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other"  {{ old('gender',$user->gender) == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date"
                               name="date_of_birth"
                               class="form-control"
                               value="{{ old('date_of_birth',$user->date_of_birth) }}">
                        @error('date_of_birth') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="role_id" class="form-label">Role</label>
                        <select name="role_id" class="form-select" required>
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ old('role_id',$user->role_id) == $role->id ? 'selected' : '' }}>
                                    {{ $role->role_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

                {{-- Row 3: Phone / Mobile / Country / City --}}
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text"
                               name="phone"
                               class="form-control"
                               value="{{ old('phone',$user->phone) }}"
                               required>
                        @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mobile_phone" class="form-label">Mobile Phone</label>
                        <input type="text"
                               name="mobile_phone"
                               class="form-control"
                               value="{{ old('mobile_phone',$user->mobile_phone) }}">
                        @error('mobile_phone') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text"
                               name="country"
                               class="form-control"
                               value="{{ old('country',$user->country) }}"
                               required>
                        @error('country') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text"
                               name="city"
                               class="form-control"
                               value="{{ old('city',$user->city) }}">
                        @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

                {{-- Row 4: Address / Org / Zip --}}
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="address_line1" class="form-label">Address Line 1</label>
                        <input type="text"
                               name="address_line1"
                               class="form-control"
                               value="{{ old('address_line1',$user->address_line1) }}">
                        @error('address_line1') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="address_line2" class="form-label">Address Line 2</label>
                        <input type="text"
                               name="address_line2"
                               class="form-control"
                               value="{{ old('address_line2',$user->address_line2) }}">
                        @error('address_line2') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="organization" class="form-label">Organization</label>
                        <input type="text"
                               name="organization"
                               class="form-control"
                               value="{{ old('organization',$user->organization) }}"
                               required>
                        @error('organization') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="zip_code" class="form-label">Zip Code</label>
                        <input type="text"
                               name="zip_code"
                               class="form-control"
                               value="{{ old('zip_code',$user->zip_code) }}"
                               required>
                        @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

                <!-- Actions -->
                <div class="mb-2 mt-1 d-flex justify-content-end actions-row">
                    <a href="{{ url('users') }}" class="btn btn-chip btn-cancel">Cancel</a>
                    <button type="submit" class="btn btn-chip btn-save">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
