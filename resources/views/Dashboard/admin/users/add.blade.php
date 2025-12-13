@extends("Layout.layouttwo")

@section("AdminContent")

<style>
    :root{
        --mint: #bae0db;
        --teal: #7a958f;
        --teal-dark: #58716b;
    }

    .card-custom {
        border-radius: 8px;
        border: 1px solid rgba(122, 149, 143, 0.18);
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
        overflow: hidden;
        background: #ffffff;
    }

    .card-custom .card-header {
        border-bottom: 1px solid rgba(122, 149, 143, 0.18);
        background: linear-gradient(135deg, var(--teal), var(--mint));
        color: #0b1620;
    }

    .card-custom .card-title {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 2px;
    }

    .card-custom .card-subtitle {
        font-size: 12px;
        opacity: 0.9;
    }

    .badge-chip {
        background: rgba(255, 255, 255, 0.85);
        border-radius: 999px;
        padding: 4px 10px;
        font-size: 11px;
        color: #334155;
    }

    .form-control,
    .form-select {
        height: 38px;
        padding: 6px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        transition: border-color 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease;
        font-size: 14px;
    }

    .form-label {
        font-weight: 600;
        font-size: 13px;
        color: #111827;
        margin-bottom: 4px;
    }

    .form-text-muted {
        font-size: 11px;
        color: #6b7280;
    }

    .form-control::placeholder {
        font-weight: 300;
        color: #9ca3af;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--teal);
        box-shadow: 0 0 0 0.12rem rgba(122, 149, 143, 0.30);
        background-color: #f9fdfc;
    }

    .square-button {
        width: 110px;
        height: 40px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 600;
        border: none;
    }

    .btn-cancel {
        background-color: #e5e7eb;
        color: #111827;
    }

    .btn-save {
        background: linear-gradient(135deg, var(--teal), var(--mint));
        color: #0b1620;
    }

    .btn-save:hover {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #ffffff;
    }

    .btn-cancel:hover {
        background-color: #d1d5db;
        color: #111827;
    }

    .required-star {
        color: #b91c1c;
        font-weight: 700;
    }

    .avatar-preview {
        width: 44px;
        height: 44px;
        border-radius: 999px;
        object-fit: cover;
        border: 2px solid rgba(122, 149, 143, 0.35);
        background: #f3faf8;
    }

    .section-label {
        font-size: 11px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #6b7280;
        font-weight: 600;
        margin-bottom: 4px;
    }

    @media (max-width: 767.98px) {
        .card-custom .card-header {
            padding: 12px 14px !important;
        }
        .card-custom .card-body {
            padding: 14px !important;
        }
        .card-custom .card-footer {
            padding: 10px 14px !important;
        }
        .square-button {
            width: 100px;
            height: 36px;
            font-size: 13px;
        }
    }
</style>

@if ($errors->any())
    <div class="container mt-3">
        <div class="alert alert-danger">
            <strong style="font-size:13px;">There were some problems with your input:</strong>
            <ul class="mb-0 mt-2" style="font-size: 12px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div class="container mt-4 mb-4">
    <div class="card card-custom">
        <div class="card-header d-flex justify-content-between align-items-center py-3 px-3 px-md-4">
            <div>
                <h1 class="card-title mb-1">User Management</h1>
                <p class="card-subtitle mb-0">Create a new user for your physiotherapy booking dashboard.</p>
            </div>
            <span class="badge-chip d-none d-sm-inline-flex">
                Users &nbsp;·&nbsp; Roles &nbsp;·&nbsp; Profiles
            </span>
        </div>

        <form action="{{ route('Dashboard.admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body px-3 px-md-4 pb-4 pt-3">

                {{-- SECTION: Basic Info --}}
                <div class="section-label">Basic information</div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label">First Name <span class="required-star">*</span></label>
                        <input type="text"
                               name="firstname"
                               class="form-control"
                               value="{{ old('firstname') }}"
                               placeholder="e.g. Ayesha"
                               required>
                        @error('firstname')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Last Name <span class="required-star">*</span></label>
                        <input type="text"
                               name="lastname"
                               class="form-control"
                               value="{{ old('lastname') }}"
                               placeholder="e.g. Khan"
                               required>
                        @error('lastname')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Email <span class="required-star">*</span></label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="user@example.com"
                               required>
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Password <span class="required-star">*</span></label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Minimum 6 characters"
                               required>
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- SECTION: Contact & Personal --}}
                <div class="section-label mt-2">Contact & personal</div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Phone (Primary) <span class="required-star">*</span></label>
                        <input type="text"
                               name="phone"
                               class="form-control"
                               value="{{ old('phone') }}"
                               placeholder="e.g. 03xx-xxxxxxx"
                               required>
                        @error('phone')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Mobile (SMS / WhatsApp)</label>
                        <input type="text"
                               name="mobile_phone"
                               class="form-control"
                               value="{{ old('mobile_phone') }}"
                               placeholder="Optional mobile number">
                        @error('mobile_phone')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                        <div class="form-text-muted mt-1">
                            Used for reminders & quick updates.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date"
                               name="date_of_birth"
                               class="form-control"
                               value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Gender <span class="required-star">*</span></label>
                        <select name="gender" class="form-select" required>
                            <option value="">Select Gender</option>
                            <option value="male"   {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other"  {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- SECTION: Location & Role --}}
                <div class="section-label mt-2">Location & role</div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Country <span class="required-star">*</span></label>
                        <input type="text"
                               name="country"
                               class="form-control"
                               value="{{ old('country') }}"
                               placeholder="e.g. Pakistan"
                               required>
                        @error('country')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">City</label>
                        <input type="text"
                               name="city"
                               class="form-control"
                               value="{{ old('city') }}"
                               placeholder="e.g. Karachi">
                        @error('city')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Zip / Postal Code <span class="required-star">*</span></label>
                        <input type="text"
                               name="zip_code"
                               class="form-control"
                               value="{{ old('zip_code') }}"
                               placeholder="e.g. 75010"
                               required>
                        @error('zip_code')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Role <span class="required-star">*</span></label>
                        <select name="role_id" class="form-select" required>
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                    {{ $role->role_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                        <div class="form-text-muted mt-1">
                            Controls access (Admin / Therapist / Patient / Staff).
                        </div>
                    </div>
                </div>

                {{-- SECTION: Address & Org --}}
                <div class="section-label mt-2">Address & organization</div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Address Line 1</label>
                        <input type="text"
                               name="address_line1"
                               class="form-control"
                               value="{{ old('address_line1') }}"
                               placeholder="House / Street / Area">
                        @error('address_line1')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Address Line 2</label>
                        <input type="text"
                               name="address_line2"
                               class="form-control"
                               value="{{ old('address_line2') }}"
                               placeholder="Apartment / Floor (optional)">
                        @error('address_line2')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Organization <span class="required-star">*</span></label>
                        <input type="text"
                               name="organization"
                               class="form-control"
                               value="{{ old('organization') }}"
                               placeholder="e.g. Rehabrion   Clinic"
                               required>
                        @error('organization')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- SECTION: Profile Image --}}
                <div class="section-label mt-2">Profile image</div>
                <div class="row align-items-end">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file"
                               name="profile_img"
                               class="form-control"
                               accept="image/*">
                        @error('profile_img')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                        <div class="form-text-muted mt-1">
                            If empty, a default avatar will be used.
                        </div>
                    </div>

                    <div class="col-md-2 mb-3 d-none d-md-block">
                        <label class="form-label">Preview</label><br>
                        <img src="data:image/jpeg;base64,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"
                             alt="Preview"
                             class="avatar-preview">
                    </div>
                </div>

            </div>

            {{-- Footer Buttons --}}
            <div class="card-footer d-flex flex-column flex-sm-row justify-content-end gap-2 py-3 px-3 px-md-4">
                <a href="{{ route('Dashboard.admin.users.index') }}"
                   class="btn btn-cancel square-button">
                    Cancel
                </a>
                <button type="submit"
                        class="btn btn-save square-button">
                    Save User
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
