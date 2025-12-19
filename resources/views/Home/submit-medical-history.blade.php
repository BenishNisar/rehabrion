<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>REHABRION - Patient Medical History & Consent Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary-color: #6f42c1;
      --secondary-color: #f8f9fa;
      --success-color: #28a745;
      --danger-color: #dc3545;
      --warning-color: #ffc107;
      --info-color: #17a2b8;
      --border-color: #dee2e6;
      --text-color: #333;
      --light-text: #6c757d;
      --sidebar-bg: linear-gradient(180deg, #6f42c1 0%, #5a32a3 100%);
      --sidebar-text: white;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      color: var(--text-color);
      line-height: 1.6;
      min-height: 100vh;
      padding: 0;
      margin: 0;
    }

    .main-container {
      display: flex;
      max-width: 1400px;
      height: 100%;
      margin: 0 auto;
      background: var(--sidebar-bg);
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
      position: relative;
      overflow: hidden;
    }

    .main-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(90deg, var(--primary-color), var(--info-color));
    }

    /* Sidebar Styles */
    .sidebar {
      width: 320px;
      height: 100%;
      background: var(--sidebar-bg);
      color: var(--sidebar-text);
      padding: 0;
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
    }

    .sidebar::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.05)"/></svg>');
      background-size: cover;
    }

    .sidebar-header {
      padding: 30px 25px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      position: relative;
      z-index: 1;
    }

    .sidebar-header h2 {
      color: white;
      font-weight: 700;
      margin-bottom: 5px;
      font-size: 1.8rem;
    }

    .sidebar-header p {
      color: rgba(255, 255, 255, 0.8);
      font-style: italic;
      font-size: 0.9rem;
      margin: 0;
    }

    .tabs-container {
      padding: 20px 0;
      position: relative;
      z-index: 1;
    }

    .nav-tabs {
      border: none;
      display: flex;
      flex-direction: column;
      gap: 5px;
      padding: 0 15px;
    }

    .nav-tabs .nav-link {
      color: rgba(255, 255, 255, 0.8);
      font-weight: 600;
      padding: 15px 20px;
      border-radius: 10px;
      border: none;
      text-align: left;
      background: rgba(255, 255, 255, 0.05);
      transition: all 0.3s;
      display: flex;
      align-items: center;
    }

    .nav-tabs .nav-link i {
      margin-right: 12px;
      font-size: 1.1rem;
      width: 24px;
      text-align: center;
    }

    .nav-tabs .nav-link:hover {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      transform: translateX(5px);
    }

    .nav-tabs .nav-link.active {
      background: rgba(255, 255, 255, 0.15);
      color: white;
      border-left: 4px solid white;
      transform: translateX(5px);
    }

    .steps-container {
      padding: 20px 15px;
      margin-top: auto;
      position: relative;
      z-index: 1;
    }

    .steps-title {
      font-size: 1rem;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 20px;
      padding: 0 10px;
      display: flex;
      align-items: center;
    }

    .steps-title i { margin-right: 10px; }

    .step-item {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      margin-bottom: 8px;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s;
      background: rgba(255, 255, 255, 0.05);
    }

    .step-item:hover { background: rgba(255, 255, 255, 0.1); }

    .step-item.active {
      background: rgba(255, 255, 255, 0.15);
      border-left: 3px solid white;
    }

    .step-item.completed { background: rgba(255, 255, 255, 0.1); }

    .step-number {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      margin-right: 15px;
      flex-shrink: 0;
      transition: all 0.3s;
    }

    .step-item.active .step-number {
      background: white;
      color: var(--primary-color);
      box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.3);
    }

    .step-item.completed .step-number {
      background: var(--success-color);
      color: white;
    }

    .step-info { flex-grow: 1; }

    .step-name {
      font-weight: 600;
      color: white;
      font-size: 0.95rem;
    }

    .step-desc {
      font-size: 0.8rem;
      color: rgba(255, 255, 255, 0.7);
      margin-top: 2px;
    }

    .sidebar-footer {
      padding: 20px 25px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      position: relative;
      z-index: 1;
      background: rgba(0, 0, 0, 0.1);
    }

    .confidential-notice {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 8px;
      padding: 12px 15px;
      font-size: 0.8rem;
      color: rgba(255, 255, 255, 0.9);
      display: flex;
      align-items: flex-start;
    }

    .confidential-notice i {
      color: #ffc107;
      margin-right: 10px;
      font-size: 1rem;
      margin-top: 2px;
    }

    /* Main Content Styles */
    .main-content {
      flex: 1;
      padding: 0;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .content-header {
      padding: 25px 30px 20px;
      border-bottom: 1px solid var(--border-color);
      background-color: white;
    }

    .content-header h1 {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 8px;
      font-size: 1.8rem;
    }

    .content-header p {
      color: var(--light-text);
      margin: 0;
      font-size: 0.95rem;
    }

    .tab-content {
      flex: 1;
      padding: 0;
      overflow-y: auto;
      background-color: #f8f9fa;
    }

    .tab-pane { height: 100%; padding: 0; }

    .form-container { height: 100%; padding: 30px; overflow-y: auto; }

    .form-section {
      margin-bottom: 25px;
      padding: 25px;
      border-radius: 10px;
      background-color: white;
      border-left: 5px solid var(--primary-color);
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }

    .form-section:hover { transform: translateY(-3px); }

    .section-title {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      font-size: 1.3rem;
    }

    .section-title i {
      margin-right: 12px;
      font-size: 1.3rem;
      background-color: rgba(111, 66, 193, 0.1);
      padding: 10px;
      border-radius: 50%;
    }

    .form-label { font-weight: 600; color: #555; margin-bottom: 8px; font-size: 0.95rem; }

    .required:after { content: " *"; color: var(--danger-color); }

    .checkbox-group, .radio-group { margin-bottom: 15px; }

    .checkbox-group label, .radio-group label {
      margin-right: 15px;
      font-weight: normal;
      cursor: pointer;
      font-size: 0.95rem;
    }

    .form-check-input { margin-right: 8px; cursor: pointer; }

    .form-control, .form-select {
      border-radius: 8px;
      border: 1px solid var(--border-color);
      padding: 12px 15px;
      transition: all 0.3s;
      font-size: 0.95rem;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
    }

    .textarea-control { min-height: 100px; resize: vertical; }

    .pain-scale { display: flex; align-items: center; margin-top: 10px; gap: 15px; }

    .pain-scale input[type="range"] { flex-grow: 1; height: 8px; border-radius: 4px; }

    .pain-scale input[type="number"] { width: 70px; text-align: center; }

    .pain-scale span { font-size: 0.9rem; color: var(--light-text); min-width: 70px; }

    .nav-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid var(--border-color);
    }

    .btn {
      padding: 12px 30px;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s;
      font-size: 1rem;
    }

    .btn-primary { background-color: var(--primary-color); border-color: var(--primary-color); }

    .btn-primary:hover {
      background-color: #5a32a3;
      border-color: #5a32a3;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(111, 66, 193, 0.3);
    }

    .btn-secondary { background-color: #6c757d; border-color: #6c757d; }

    .btn-secondary:hover { background-color: #5a6268; border-color: #545b62; transform: translateY(-2px); }

    .btn-success { background-color: var(--success-color); border-color: var(--success-color); }

    .progress-container {
      margin-bottom: 25px;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }

    .progress { height: 10px; border-radius: 5px; margin-bottom: 10px; overflow: hidden; }

    .progress-text { display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--light-text); font-weight: 500; }

    .form-step { display: none; animation: fadeIn 0.5s ease; }
    .form-step.active { display: block; }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .declaration-box {
      background-color: #f8f9fa;
      border: 2px solid #eaeaea;
      border-radius: 8px;
      padding: 25px;
      margin-top: 20px;
    }

    .signature-area { border-top: 1px dashed #ccc; padding-top: 20px; margin-top: 20px; }

    .other-input { margin-top: 10px; }

    .error-message{
      display:none;
      color:#dc3545;
      font-size:0.85rem;
      margin-top:6px;
    }
    .form-control.error, .form-select.error{
      border-color:#dc3545 !important;
      box-shadow: 0 0 0 .2rem rgba(220,53,69,.15);
      background-color: rgba(220, 53, 69, 0.05);
    }

    .consent-section { margin-bottom: 25px; padding-bottom: 20px; border-bottom: 1px solid #eee; }
    .consent-section h4 { color: var(--primary-color); margin-bottom: 15px; font-size: 1.2rem; }

    .success-message { text-align: center; padding: 40px 20px; }
    .success-icon { font-size: 5rem; color: var(--success-color); margin-bottom: 20px; }
.form-check-input.error{
  outline: 2px solid #dc3545;
  outline-offset: 2px;
}

    @media (max-width: 992px) {
      .main-container { flex-direction: column; }
      .sidebar { width: 100%; max-height: 400px; overflow-y: auto; }
      .nav-tabs { flex-direction: row; overflow-x: auto; padding-bottom: 10px; }
      .nav-tabs .nav-link { white-space: nowrap; }
      .steps-container { display: none; }
    }

    @media (max-width: 768px) {
      .form-container { padding: 15px; }
      .form-section { padding: 15px; }
      .btn { width: 100%; margin-bottom: 10px; }
      .nav-buttons { flex-direction: column; }
    }

    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #f1f1f1; }
    ::-webkit-scrollbar-thumb { background: var(--primary-color); border-radius: 3px; }
    ::-webkit-scrollbar-thumb:hover { background: #5a32a3; }


    /* Sidebar tab buttons same width */
.sidebar .nav-tabs .nav-item{
  width: 100%;
}

.sidebar .nav-tabs .nav-link{
  width: 100%;
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px 16px;
  border-radius: 12px;
  transition: 0.2s ease;
}

/* Optional: icon same space take kare */
.sidebar .nav-tabs .nav-link i{
  width: 24px;
  text-align: center;
  font-size: 18px;
}
/* Just fix spacing and small alignment, keep bootstrap look */
.tabs-container{
  margin-bottom: 14px;
}

#formTab.nav-tabs{
  gap: 10px;          /* spacing between tabs */
  flex-wrap: wrap;    /* mobile pe break */
}

#formTab.nav-tabs .nav-item{
  margin-bottom: 0;
}

#formTab.nav-tabs .nav-link{
  display: inline-flex;
  align-items: center;
  gap: 8px;           /* icon and text */
  border-top-left-radius: .5rem;
  border-top-right-radius: .5rem;
}

/* Mobile pe tabs clean full width */
@media (max-width: 576px){
  #formTab.nav-tabs .nav-item{
    flex: 1 1 auto;
  }
  #formTab.nav-tabs .nav-link{
    width: 100%;
    justify-content: center;
  }
}


  </style>
</head>

<body>
<div class="main-container">
  <!-- Left Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>REHABRION</h2>
      <p>Patient Medical History & Consent Form</p>
    </div>

    <!-- Form Tabs -->
    <div class="tabs-container">
      <ul class="nav nav-tabs" id="formTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical-form" type="button" role="tab">
          Medical History
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="consent-tab" data-bs-toggle="tab" data-bs-target="#consent-form" type="button" role="tab">
 Consent Form
          </button>
        </li>
      </ul>
    </div>

    <!-- Progress Steps (Only for Medical History) -->
    <div class="steps-container">
      <div class="steps-title">
        <i class="fas fa-list-ol"></i> Form Steps
      </div>
      <div class="step-list">
        <div class="step-item active" data-step="1">
          <div class="step-number">1</div>
          <div class="step-info">
            <div class="step-name">Personal Info</div>
            <div class="step-desc">Basic patient information</div>
          </div>
        </div>
        <div class="step-item" data-step="2">
          <div class="step-number">2</div>
          <div class="step-info">
            <div class="step-name">Primary Complaint</div>
            <div class="step-desc">Reason for visit & pain level</div>
          </div>
        </div>
        <div class="step-item" data-step="3">
          <div class="step-number">3</div>
          <div class="step-info">
            <div class="step-name">Pain Details</div>
            <div class="step-desc">Location, type & triggers</div>
          </div>
        </div>
        <div class="step-item" data-step="4">
          <div class="step-number">4</div>
          <div class="step-info">
            <div class="step-name">Medical History</div>
            <div class="step-desc">Past conditions & injuries</div>
          </div>
        </div>
        <div class="step-item" data-step="5">
          <div class="step-number">5</div>
          <div class="step-info">
            <div class="step-name">Surgical History</div>
            <div class="step-desc">Surgeries & medications</div>
          </div>
        </div>
        <div class="step-item" data-step="6">
          <div class="step-number">6</div>
          <div class="step-info">
            <div class="step-name">Lifestyle & Goals</div>
            <div class="step-desc">Activity level & therapy goals</div>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar-footer">
      <div class="confidential-notice">
        <i class="fas fa-shield-alt"></i>
        <div>All information is strictly confidential and used only for safe and effective treatment.</div>
      </div>
    </div>
  </div>

  <!-- Right Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="content-header">
      <h1 id="current-form-title">PATIENT MEDICAL HISTORY FORM</h1>
      <p id="current-form-description">Please fill out all required fields to help us provide you with the best care.</p>
    </div>

    <div class="tab-content" id="formTabContent">
      <!-- Medical History Tab -->
      <div class="tab-pane fade show active" id="medical-form" role="tabpanel">
        <div class="form-container">
          <div class="progress-container">
            <div class="progress">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 16.6%" id="form-progress"></div>
            </div>
            <div class="progress-text">
              <span id="current-step">Step 1 of 6</span>
              <span id="progress-percentage">16.6%</span>
            </div>
          </div>

          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <form id="medical-history-form" action="{{ route('Home.patient-medical-history.store') }}" method="POST">
            @csrf

            <!-- Step 1 -->
            <div class="form-step active" id="step1">
              <div class="form-section">
                <h3 class="section-title"><i class="fas fa-user"></i> PATIENT PERSONAL INFORMATION</h3>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label required">Full Name</label>
                    <input type="text" class="form-control" name="patient_full_name" id="fullName" placeholder="Enter your full name" required>
                    <div class="error-message" id="fullName-error">Please enter your full name</div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="dob" class="form-label required">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" id="dob" max="{{ now()->toDateString() }}" required>
                    <div class="error-message" id="dob-error"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="age" class="form-label required">Age</label>
                    <input type="number" name="age" class="form-control" id="age" min="0" max="120" placeholder="Age" required>
                    <div class="error-message" id="age-error">Please enter a valid age</div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label required">Gender</label>
                    <div class="radio-group">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                        <label class="form-check-label" for="male">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                        <label class="form-check-label" for="other">Other</label>
                      </div>
                    </div>
                    <div class="error-message" id="gender-error">Please select your gender</div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="contactNumber" class="form-label required">Contact Number</label>
                    <input type="tel" name="contact_number" class="form-control" id="contactNumber"
                           placeholder="03XXXXXXXXX or +923XXXXXXXXX" inputmode="numeric" autocomplete="tel" required>
                    <div class="error-message" id="contactNumber-error"></div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input name="email_address" type="email" class="form-control" id="email" placeholder="Email address">
                    <div class="error-message" id="email-error">Please enter a valid email address</div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="homeAddress" class="form-label">Home Address</label>
                    <input name="home_address" type="text" class="form-control" id="homeAddress" placeholder="Full address">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="emergencyContactName" class="form-label required">Emergency Contact Name</label>
                    <input type="text" name="emergency_contact_name" class="form-control" id="emergencyContactName" placeholder="Emergency contact name" required>
                    <div class="error-message" id="emergencyContactName-error">Please enter emergency contact name</div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="emergencyContactNumber" class="form-label required">Emergency Contact Number</label>
                    <input type="tel" name="emergency_contact_number" class="form-control" id="emergencyContactNumber"
                           placeholder="03XXXXXXXXX or +923XXXXXXXXX" inputmode="numeric" required>
                    <div class="error-message" id="emergencyContactNumber-error"></div>
                  </div>
                </div>
              </div>

              <div class="nav-buttons">
                <button type="button" class="btn btn-secondary" disabled>Previous</button>
                <button type="button" class="btn btn-primary next-step" data-next="step2">Next</button>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="form-step" id="step2">
              <div class="form-section">
                <h3 class="section-title"><i class="fas fa-stethoscope"></i> PRIMARY COMPLAINT / REASON FOR VISIT</h3>

                <div class="mb-3">
                  <label for="primaryComplaint" class="form-label required">What problem brings you to Rehabrion today?</label>
                  <textarea name="primary_complaint" class="form-control textarea-control" id="primaryComplaint" placeholder="Describe your problem in detail" rows="4" required></textarea>
                  <div class="error-message" id="primaryComplaint-error">Please describe your primary complaint</div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="problemStart" class="form-label required">When did this problem begin?</label>
                    <select class="form-select" name="problem_start" id="problemStart" required>
                      <option value="" selected disabled>Select option</option>
                      <option value="today">Today</option>
                      <option value="last_week">Last week</option>
                      <option value="last_month">Last month</option>
                      <option value="more_than_3_months">More than 3 months</option>
                    </select>
                    <div class="error-message" id="problemStart-error">Please select when the problem began</div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="problemCause" class="form-label required">How did your injury/problem occur?</label>
                    <select class="form-select" id="problemCause" name="problem_cause" required>
                      <option value="" selected disabled>Select option</option>
                      <option value="accident">Accident</option>
                      <option value="sports">Sports</option>
                      <option value="work">Work</option>
                      <option value="gradual">Gradual</option>
                      <option value="unknown">Unknown</option>
                    </select>
                    <div class="error-message" id="problemCause-error">Please select how the problem occurred</div>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label required">Pain level (0 = no pain, 10 = worst pain)</label>
                  <div class="pain-scale">
                    <span>0 (No pain)</span>
                    <input type="range" class="form-range" id="painLevel" min="0" max="10" step="1" value="0">
                    <input type="number" name="pain_level" class="form-control" id="painLevelNumber" min="0" max="10" value="0">
                    <span>10 (Worst pain)</span>
                  </div>
                  <div class="error-message" id="painLevel-error"></div>
                </div>
              </div>

              <div class="nav-buttons">
                <button type="button" class="btn btn-secondary prev-step" data-prev="step1">Previous</button>
                <button type="button" class="btn btn-primary next-step" data-next="step3">Next</button>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="form-step" id="step3">
              <div class="form-section">
                <h3 class="section-title"><i class="fas fa-pain"></i> PAIN DETAILS</h3>

                <div class="mb-3">
                  <label class="form-label required">Pain Location(s)</label>
                  <div class="checkbox-group row">
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="neck" value="neck"><label class="form-check-label" for="neck">Neck</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="shoulder" value="shoulder"><label class="form-check-label" for="shoulder">Shoulder</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="back" value="back"><label class="form-check-label" for="back">Back</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="hip" value="hip"><label class="form-check-label" for="hip">Hip</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="knee" value="knee"><label class="form-check-label" for="knee">Knee</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="ankle" value="ankle"><label class="form-check-label" for="ankle">Ankle</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="wrist" value="wrist"><label class="form-check-label" for="wrist">Wrist</label></div></div>

                    <div class="col-md-8 mb-2">
                      <div class="form-check">
                        <input class="form-check-input pain-location" name="pain_details_location[]" type="checkbox" id="otherLocation" value="other">
                        <label class="form-check-label" for="otherLocation">Other:</label>
                        <input type="text" name="pain_details_location[]" class="form-control other-input" id="otherLocationText" placeholder="Specify other location" style="display:none;">
                      </div>
                    </div>
                  </div>
                  <div class="error-message" id="painLocation-error">Please select at least one pain location</div>
                </div>

                <!-- (rest of step3 same as your code...) -->
                <!-- I am keeping it as-is to avoid messing UI -->
                <!-- ===== YOUR EXISTING STEP 3 CONTENT CONTINUES ===== -->
                <!-- NOTE: Aapka step3 ka baqi content yahan same rahega (pain type / worse / reduction) -->
                <!-- ===== YOUR EXISTING STEP 3 CONTENT CONTINUES ===== -->

                <div class="mb-3">
                  <label class="form-label">Type of Pain</label>
                  <div class="checkbox-group row">
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" name="pain_type[]" type="checkbox" id="sharp" value="sharp"><label class="form-check-label" for="sharp">Sharp</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" name="pain_type[]" type="checkbox" id="dull" value="dull"><label class="form-check-label" for="dull">Dull</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" name="pain_type[]" type="checkbox" id="burning" value="burning"><label class="form-check-label" for="burning">Burning</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" name="pain_type[]" type="checkbox" id="stiff" value="stiff"><label class="form-check-label" for="stiff">Stiff</label></div></div>
                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" name="pain_type[]" type="checkbox" id="throbbing" value="throbbing"><label class="form-check-label" for="throbbing">Throbbing</label></div></div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Pain is worse during</label>
                    <div class="checkbox-group">
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_worse_during[]" type="checkbox" id="sitting" value="sitting"><label class="form-check-label" for="sitting">Sitting</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_worse_during[]" type="checkbox" id="standing" value="standing"><label class="form-check-label" for="standing">Standing</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_worse_during[]" type="checkbox" id="walking" value="walking"><label class="form-check-label" for="walking">Walking</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_worse_during[]" type="checkbox" id="sleeping" value="sleeping"><label class="form-check-label" for="sleeping">Sleeping</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_worse_during[]" type="checkbox" id="exercise" value="exercise"><label class="form-check-label" for="exercise">Exercise</label></div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label">What reduces your pain?</label>
                    <div class="checkbox-group">
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_reduction[]" type="checkbox" id="rest" value="rest"><label class="form-check-label" for="rest">Rest</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_reduction[]" type="checkbox" id="heat" value="heat"><label class="form-check-label" for="heat">Heat</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_reduction[]" type="checkbox" id="ice" value="ice"><label class="form-check-label" for="ice">Ice</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_reduction[]" type="checkbox" id="medication" value="medication"><label class="form-check-label" for="medication">Medication</label></div>
                      <div class="form-check mb-2"><input class="form-check-input" name="pain_reduction[]" type="checkbox" id="movement" value="movement"><label class="form-check-label" for="movement">Movement</label></div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="nav-buttons">
                <button type="button" class="btn btn-secondary prev-step" data-prev="step2">Previous</button>
                <button type="button" class="btn btn-primary next-step" data-next="step4">Next</button>
              </div>
            </div>

            <!-- Step 4 / 5 / 6 -->
                                        <!-- Step 4: Past Medical History -->
                            <div class="form-step" id="step4">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-history"></i> PAST MEDICAL HISTORY</h3>
                                    <p class="mb-3">Do you currently have or ever had any of the following?</p>

                                    <div class="checkbox-group row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="highBP" value="highBP">
                                                <label class="form-check-label" for="highBP">High Blood Pressure</label>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="diabetes" value="diabetes">
                                                <label class="form-check-label" for="diabetes">Diabetes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="heartDisease" value="heartDisease">
                                        </div>
                                                <label class="form-check-label" for="heartDisease">Heart Disease</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input"  name="past_medical_history[]" type="checkbox" id="stroke" value="stroke">
                                                <label class="form-check-label" for="stroke">Stroke</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="asthma" value="asthma">
                                                <label class="form-check-label" for="asthma">Asthma</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="arthritis" value="arthritis">
                                                <label class="form-check-label" for="arthritis">Arthritis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="osteoporosis" value="osteoporosis">
                                                <label class="form-check-label" for="osteoporosis">Osteoporosis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="thyroid" value="thyroid">
                                                <label class="form-check-label" for="thyroid">Thyroid Disorder</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="neuro" value="neuro">
                                                <label class="form-check-label" for="neuro">Neurological Disorder</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="past_medical_history[]" type="checkbox" id="otherCondition" value="other">
                                                <label class="form-check-label" for="otherCondition">Other:</label>
                                                <input type="text" name="past_medical_history[]" class="form-control other-input" id="otherConditionText" placeholder="Specify other condition" style="display: none;">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Injury History -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-user-injured"></i> INJURY HISTORY</h4>
                                        <p class="mb-3">Have you ever had:</p>

                                        <div class="checkbox-group row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="injury_history[]" type="checkbox" id="fractures" value="fractures">
                                                    <label class="form-check-label" for="fractures">Fractures</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="injury_history[]" type="checkbox" id="dislocations" value="dislocations">
                                                    <label class="form-check-label" for="dislocations">Dislocations</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="injury_history[]" type="checkbox" id="ligamentTears" value="ligamentTears">
                                                    <label class="form-check-label" for="ligamentTears">Ligament tears</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="injury_history[]" type="checkbox" id="muscleTears" value="muscleTears">
                                                    <label class="form-check-label" for="muscleTears">Muscle tears</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="injury_history[]" type="checkbox" id="sportsInjuries" value="sportsInjuries">
                                                    <label class="form-check-label" for="sportsInjuries">Sports injuries</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="injuryDetails" class="form-label">Details</label>
                                            <textarea name="injury_history[]" class="form-control textarea-control" id="injuryDetails" placeholder="Provide details about your injury history" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Surgical History -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-procedures"></i> SURGICAL HISTORY</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Have you ever had surgery?</label>
                                            <div class="radio-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input surgery-radio"  name="surgical_history" type="radio"  id="surgeryYes" value="yes">
                                                    <label class="form-check-label" for="surgeryYes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input surgery-radio" name="surgical_history" type="radio" id="surgeryNo" value="no">
                                                    <label class="form-check-label" for="surgeryNo">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="surgeryDetails" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-8 mb-3">
                                                    <label for="surgeryType" class="form-label">Type of surgery</label>
                                                    <input type="text" name="surgery_type" class="form-control" id="surgeryType" placeholder="Type of surgery">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="surgeryYear" class="form-label">Year</label>
                                                    <input type="number"  name="surgery_year" class="form-control" id="surgeryYear"
                                                    min="1900" max="2024" placeholder="Year">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="additionalSurgery" class="form-label">Additional surgeries (if any)</label>
                                                <textarea class="form-control textarea-control" name="additional_surgery" id="additionalSurgery"
                                                 placeholder="List any additional surgeries" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nav-buttons">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step3">Previous</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="step5">Next</button>
                                </div>
                            </div>

                            <!-- Step 5: Medical Information -->
                            <div class="form-step" id="step5">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-pills"></i> MEDICATION INFORMATION</h3>

                                    <div class="mb-3">
                                        <label class="form-label">Are you currently taking any medications?</label>
                                        <div class="radio-group">
                                            <div class="form-check form-check-inline">
                                                <input name="medication_status" class="form-check-input medication-radio" type="radio"  id="medicationYes" value="yes">
                                                <label class="form-check-label" for="medicationYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="medication_status" class="form-check-input medication-radio" type="radio" id="medicationNo" value="no">
                                                <label class="form-check-label" for="medicationNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="medicationDetails" style="display: none;">
                                        <div class="mb-3">
                                            <label for="medicationList" class="form-label">Please list your medications</label>
                                            <textarea name="medication_info" class="form-control textarea-control" id="medicationList"
                                             placeholder="List all medications, dosages, and frequency" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <!-- Allergies -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-allergies"></i> ALLERGIES</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Do you have any allergies?</label>
                                            <div class="radio-group">
                                                <div class="form-check form-check-inline">
                                                    <input name="allergies[]" class="form-check-input allergy-radio" type="radio"  id="allergyNone" value="none">
                                                    <label class="form-check-label" for="allergyNone">None</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="allergies[]"  class="form-check-input allergy-radio" type="radio"  id="allergyMeds" value="medications">
                                                    <label class="form-check-label" for="allergyMeds">Medications</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="allergies[]"  class="form-check-input allergy-radio" type="radio"  id="allergyFood" value="food">
                                                    <label class="form-check-label" for="allergyFood">Food</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="allergies[]"  class="form-check-input allergy-radio" type="radio"  id="allergyLatex" value="latex">
                                                    <label class="form-check-label" for="allergyLatex">Latex</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="allergies[]"  class="form-check-input allergy-radio" type="radio"  id="allergyOther" value="other">
                                                    <label class="form-check-label" for="allergyOther">Other</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="allergyDetails" style="display: none;">
                                            <div class="mb-3">
                                                <label for="allergyDescription" class="form-label">Please describe your allergies</label>
                                                <textarea name="allergies[]"  class="form-control textarea-control" id="allergyDescription" placeholder="Describe your allergies and reactions" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post-Surgical Clearance -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-file-medical"></i> POST-SURGICAL / MEDICAL CLEARANCE</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Have you been advised physiotherapy by a doctor?</label>
                                            <div class="radio-group">
                                                <div class="form-check form-check-inline">
                                                    <input name="post_surgical_medical_clearance[]" class="form-check-input physio-radio" type="radio"  id="physioYes" value="yes">
                                                    <label class="form-check-label" for="physioYes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="post_surgical_medical_clearance[]" class="form-check-input physio-radio" type="radio"  id="physioNo" value="no">
                                                    <label class="form-check-label" for="physioNo">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="physioDetails" style="display: none;">
                                            <div class="mb-3">
                                                <label for="referralDetails" class="form-label">Diagnosis/Referral details</label>
                                                <textarea name="post_surgical_medical_clearance[]"
                                                class="form-control textarea-control" id="referralDetails"
                                                placeholder="Provide details of diagnosis and referral" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nav-buttons">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step4">Previous</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="step6">Next</button>
                                </div>
                            </div>

                            <!-- Step 6: Lifestyle, Goals & Declaration -->
                            <div class="form-step" id="step6">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-running"></i> LIFESTYLE & ACTIVITY LEVEL</h3>

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input name="occupation" type="text" class="form-control" id="occupation" placeholder="Your occupation">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Daily Activity Level</label>
                                            <div class="radio-group">
                                                <div class="form-check mb-2">
                                                    <input name="lifestyle_activity_level[]" class="form-check-input" type="radio"  id="low" value="low">
                                                    <label class="form-check-label" for="low">Low</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input name="lifestyle_activity_level[]" class="form-check-input" type="radio"  id="moderate" value="moderate">
                                                    <label class="form-check-label" for="moderate">Moderate</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input name="lifestyle_activity_level[]" class="form-check-input" type="radio"  id="active" value="active">
                                                    <label class="form-check-label" for="active">Active</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input name="lifestyle_activity_level[]" class="form-check-input" type="radio"  id="veryActive" value="veryActive">
                                                    <label class="form-check-label" for="veryActive">Very Active</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Exercise Routine</label>
                                            <div class="checkbox-group">
                                                <div class="form-check mb-2">
                                                    <input name="exercise_routine[]" class="form-check-input" type="checkbox" id="none" value="none">
                                                    <label class="form-check-label" for="none">None</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input name="exercise_routine[]" class="form-check-input" type="checkbox" id="walking" value="walking">
                                                    <label class="form-check-label" for="walking">Walking</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input  name="exercise_routine[]"class="form-check-input" type="checkbox" id="gym" value="gym">
                                                    <label class="form-check-label" for="gym">Gym</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input name="exercise_routine[]" class="form-check-input" type="checkbox" id="sportsEx" value="sports">
                                                    <label class="form-check-label" for="sports">Sports</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input  name="exercise_routine[]" class="form-check-input" type="checkbox" id="homeWorkout" value="homeWorkout">
                                                    <label class="form-check-label" for="home workout">Home workout</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Functional Limitations</label>
                                        <p class="mb-2">Are you having difficulty with:</p>
                                        <div class="checkbox-group row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input name="functional_limitations[]" class="form-check-input" type="checkbox" id="walkingDiff" value="walkingDiff">
                                                    <label class="form-check-label" for="walking">Walking</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input name="functional_limitations[]" class="form-check-input" type="checkbox" id="bending" value="bending">
                                                    <label class="form-check-label" for="bending">Bending</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input name="functional_limitations[]" class="form-check-input" type="checkbox" id="lifting" value="lifting">
                                                    <label class="form-check-label" for="lifting">Lifting</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input name="functional_limitations[]" class="form-check-input" type="checkbox" id="sittingDiff" value="sittingDiff">
                                                    <label class="form-check-label" for="sitting">Sitting</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input name="functional_limitations[]" class="form-check-input" type="checkbox" id="standingDiff" value="standingDiff">
                                                    <label class="form-check-label" for="standing">Standing</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input  name="functional_limitations[]"   class="form-check-input" type="checkbox" id="dressing" value="dressing">
                                                    <label class="form-check-label" for="dressing">Dressing</label>
                                                       </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="functional_limitations[]"   type="checkbox" id="sleepingDiff" value="sleepingDiff">
                                                    <label class="form-check-label" for="sleeping">Sleeping</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Women's Health -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-female"></i> WOMEN'S HEALTH (IF APPLICABLE)</h4>

                                     <div class="row">
  <div class="col-md-6 mb-3">
    <label class="form-label">Are you pregnant?</label>
    <div class="radio-group">
      <div class="form-check form-check-inline">
        <input name="pregnant_status" class="form-check-input" type="radio" id="pregnantYes" value="yes">
        <label class="form-check-label" for="pregnantYes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input name="pregnant_status" class="form-check-input" type="radio" id="pregnantNo" value="no">
        <label class="form-check-label" for="pregnantNo">No</label>
      </div>
    </div>
  </div>

  <div class="col-md-6 mb-3">
    <label class="form-label">Any recent delivery?</label>
    <div class="radio-group">
      <div class="form-check form-check-inline">
        <input name="recent_delivery" class="form-check-input" type="radio" id="deliveryYes" value="yes">
        <label class="form-check-label" for="deliveryYes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input name="recent_delivery" class="form-check-input" type="radio" id="deliveryNo" value="no">
        <label class="form-check-label" for="deliveryNo">No</label>
      </div>
    </div>
  </div>
</div>

                                    </div>

                                    <!-- Goals -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-bullseye"></i> GOALS FROM THERAPY</h4>
                                        <p class="mb-3">What do you hope to achieve from Rehabrion treatment?</p>

                                        <div class="checkbox-group row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input name="goals_from_therapy[]" class="form-check-input" type="checkbox" id="painRelief" value="painRelief">
                                                    <label class="form-check-label" for="painRelief">Pain relief</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input  name="goals_from_therapy[]" class="form-check-input" type="checkbox" id="betterMovement" value="betterMovement">
                                                    <label class="form-check-label" for="betterMovement">Better movement</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input  name="goals_from_therapy[]" class="form-check-input" type="checkbox" id="fasterRecovery" value="fasterRecovery">
                                                    <label class="form-check-label" for="fasterRecovery">Faster recovery</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input   name="goals_from_therapy[]" class="form-check-input" type="checkbox" id="returnToSports" value="returnToSports">
                                                    <label class="form-check-label" for="returnToSports">Return to sports</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input  name="goals_from_therapy[]" class="form-check-input" type="checkbox" id="improvePosture" value="improvePosture">
                                                    <label class="form-check-label" for="improvePosture">Improve posture</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input  name="goals_from_therapy[]" class="form-check-input" type="checkbox" id="longTermWellness" value="longTermWellness">
                                                    <label class="form-check-label" for="longTermWellness">Long-term wellness</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="otherGoals" class="form-label">Other goals</label>
                                            <textarea  name="other_goals" class="form-control textarea-control" id="otherGoals" placeholder="Any other goals you have for therapy" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Safety Confirmation -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-home"></i> HOME & VIRTUAL SESSION SAFETY CONFIRMATION</h4>
                                        <div class="checkbox-group">
                                            <div class="form-check mb-2">
                                                <input name="home_virtual_session_safety[]" class="form-check-input" type="checkbox" id="safeSpace" value="safeSpace">
                                                <label class="form-check-label" for="I have safe space at home for therapy">I have safe space at home for therapy</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input name="home_virtual_session_safety[]" class="form-check-input" type="checkbox" id="reportDiscomfort" value="reportDiscomfort">
                                                <label class="form-check-label" for="I will immediately report discomfort during exercises">I will immediately report discomfort during exercises</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Declaration -->
                                    <div class="declaration-box mt-4">
                                        <h4 class="section-title"><i class="fas fa-file-signature"></i> DECLARATION & AGREEMENT</h4>

                                        <p><strong>I confirm that all information provided is true and correct to the best of my knowledge.</strong></p>
                                        <p>I understand that inaccurate information may affect my treatment outcome and safety.</p>

                                        <div class="signature-area">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="patientName" class="form-label required">Patient / Guardian Name</label>
                                                    <input type="text" name="declaration_agreement"  class="form-control" id="patientName" placeholder="Full name" required>
                                                    <div class="error-message" id="patientName-error">Please enter your name</div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="signatureDate" class="form-label required">Date</label>
                                                    <input  type="date"  name="signature_date" class="form-control" id="signatureDate" required>
                                                    <div class="error-message" id="signatureDate-error">Please enter the date</div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="signature" class="form-label required">Signature</label>
                                                <input name="patient_signature" type="text" class="form-control" id="signature" placeholder="Type your full name as signature" required>
                                                <div class="error-message" id="signature-error">Please provide your signature</div>
                                            </div>



                                        </div>

                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" id="optionalConfirm">
                                            <label class="form-check-label" for="optionalConfirm">
                                                <strong>I confirm that all information provided above is accurate and complete.</strong> (Optional)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="nav-buttons">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step5">Previous</button>
                                    <button type="button" id="submit-medical-form" class="btn btn-success" >Submit Medical Form</button>
                                </div>
                            </div>
            <!-- ✅ Aapka existing step4, step5, step6 HTML yahan SAME rahega -->
            <!-- (Main ne yahan JS fix kiya hai, HTML ko change nahi kiya.) -->

            <!-- ====== YOUR EXISTING Step 4, 5, 6 CONTENT (AS YOU POSTED) ====== -->

            <!-- NOTE: Paste your existing Step 4, Step 5, Step 6 exactly here (same as you already have) -->
            <!-- Important: IDs must remain: step4, step5, step6, patientName, signatureDate, signature, etc. -->

          </form>

          <!-- Success Message -->
          <div id="medical-success-message" style="display:none;">
            <div class="success-message">
              <div class="success-icon"><i class="fas fa-check-circle"></i></div>
              <h2 class="text-success">Medical History Form Submitted Successfully!</h2>
              <p class="lead">Thank you for completing the REHABRION Medical History Form.</p>
              <p>Your information has been received and will be reviewed by our medical team.</p>
              <p>Please proceed to the Consent Form tab to complete your registration.</p>
              <button type="button" class="btn btn-primary mt-4" id="go-to-consent">Go to Consent Form</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Consent Form Tab (your simplified version kept) -->
      {{-- <div class="tab-pane fade" id="consent-form" role="tabpanel">
        <div class="form-container">

          <div class="content-header">
            <h1>REHABRION – PATIENT CONSENT FORM</h1>
            <p>Welcome to Rehabrion. Before beginning any physiotherapy, rehabilitation, or wellness session with us (in person, at home, or virtually), please read the following terms carefully.</p>
          </div>

          <div class="alert alert-warning">
            <strong>Important:</strong>
            By proceeding with our services, you confirm your understanding and agreement with the consent below.
          </div>

          <form id="consentForm" method="POST" action="{{ route('Home.patient-consent.store') }}">
            @csrf

            <div class="consent-section">
              <h4>1. Consent to Assessment & Treatment</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="consent_to_assessment" value="1" required>
                <label class="form-check-label">I consent to assessment & treatment</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>2. Understanding of Benefits & Risks</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="understanding_of_benefits_and_risks" value="1" required>
                <label class="form-check-label">I understand benefits & risks</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>3. Medical History Disclosure</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="medical_history_disclosure" value="1" required>
                <label class="form-check-label">I have fully disclosed my medical history</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>4. Home-Based & Virtual Session Responsibilities</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="home_virtual_session_responsibility" value="1" required>
                <label class="form-check-label">I accept responsibility for my home/virtual session environment</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>5. Tele-Rehabilitation & Online Sessions</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="tele_rehabilitation_consent" value="1" required>
                <label class="form-check-label">I consent to tele-rehabilitation sessions</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>6. Data Privacy & Confidentiality</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="data_privacy" value="1" required>
                <label class="form-check-label">I agree to data privacy & confidentiality</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>7. Payment Policy</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="payment_policy_acknowledgment" value="1" required>
                <label class="form-check-label">I acknowledge the payment policy</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>8. Voluntary Participation</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="voluntary_participation" value="1" required>
                <label class="form-check-label">I understand participation is voluntary</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>9. Liability Waiver</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="liability_waiver" value="1" required>
                <label class="form-check-label">I agree to the liability waiver</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>10. Guardian Consent (Minors)</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="guardian_consent" value="1">
                <label class="form-check-label">Guardian consent (if applicable)</label>
              </div>
            </div>

            <div class="consent-section">
              <h4>Final Agreement</h4>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="final_agreement_statement" value="1" required>
                <label class="form-check-label">I have read, understood, and agree to all terms above</label>
              </div>
            </div>

            <hr>
            <h5>Patient Information</h5>

            <input type="text" name="patient_full_name" class="form-control mb-2" placeholder="Patient Full Name" required>
            <input type="date" name="date_of_birth" class="form-control mb-2" required>
            <input type="tel" name="contact_number" class="form-control mb-2" placeholder="Contact Number" required>
            <input type="email" name="email_address" class="form-control mb-2" placeholder="Email Address">
            <input type="text" name="emergency_contact" class="form-control mb-2" placeholder="Emergency Contact">
            <input type="text" name="patient_signature" class="form-control mb-2" placeholder="Signature (Full Name)" required>
            <input type="date" name="signature_date" class="form-control mb-3" required>

            <div class="nav-buttons mt-4">
              <button type="button" class="btn btn-secondary" id="back-to-medical">Back to Medical Form</button>
              <button type="submit" class="btn btn-success">Submit Consent Form</button>
            </div>
          </form>

        </div>
      </div> --}}
<!-- Consent Form Tab (your simplified version kept) -->
<div class="tab-pane fade" id="consent-form" role="tabpanel">
  <div class="form-container">

    <div class="content-header">
      <h1>REHABRION – PATIENT CONSENT FORM</h1>
      <p>
        Welcome to Rehabrion.
        Before beginning any physiotherapy, rehabilitation, or wellness session with us
        (in person, at home, or virtually), please read the following terms carefully.
        By proceeding with our services, you confirm your understanding and agreement with the consent below.
      </p>
    </div>

    <div class="alert alert-warning">
      <strong>Important:</strong>
      By proceeding with our services, you confirm your understanding and agreement with the consent below.
    </div>

    <!-- Full Consent Content (display only) -->
    <div class="consent-content mb-4">

      <hr>

      <h4 class="mt-3">1. Consent to Assessment & Treatment</h4>
      <p>
        I voluntarily consent to participate in physiotherapy, rehabilitation, pain management, mobility training,
        and related wellness services provided by Rehabrion.
        I understand that my program may include but is not limited to:
      </p>
      <ul class="mb-3">
        <li>Physical therapy & rehabilitation exercises</li>
        <li>Manual therapy techniques</li>
        <li>Pain management routines</li>
        <li>Post-surgical rehabilitation</li>
        <li>Post-injury recovery programs</li>
        <li>Virtual / online rehabilitation sessions</li>
        <li>Wellness & preventive rehab programs</li>
      </ul>
      <p class="mb-0">
        I agree to actively cooperate in my treatment and follow instructions provided by my assigned therapist.
      </p>

      <hr>

      <h4 class="mt-3">2. Understanding of Benefits & Risks</h4>
      <p>
        I understand that physiotherapy and rehabilitation involve physical activity and manual techniques,
        which may carry some inherent risks including but not limited to:
      </p>
      <ul class="mb-3">
        <li>Muscle soreness or fatigue</li>
        <li>Temporary discomfort</li>
        <li>Joint stiffness</li>
        <li>Minor strain or inflammation</li>
      </ul>
      <p class="mb-0">
        I acknowledge that while Rehabrion strives for safe and effective care, no guarantee of results has been made,
        and outcomes vary for each individual.
      </p>

      <hr>

      <h4 class="mt-3">3. Medical History Disclosure</h4>
      <p class="mb-2">I confirm that I have:</p>
      <ul class="mb-3">
        <li>Fully disclosed my medical history</li>
        <li>Shared all known health conditions, injuries, surgeries, allergies, medications, and physical limitations</li>
      </ul>
      <p class="mb-0">
        I understand that withholding or providing inaccurate health information may increase the risk of injury
        or complication during therapy.
      </p>

      <hr>

      <h4 class="mt-3">4. Home-Based & Virtual Session Responsibilities</h4>
      <p class="mb-2">For at home or virtual rehabilitation sessions, I confirm that:</p>
      <ul class="mb-3">
        <li>I have a safe, clean, and suitable space for therapy</li>
        <li>I will ensure proper lighting, visibility, and equipment availability</li>
        <li>I will immediately stop exercises if I feel pain, dizziness, or discomfort</li>
        <li>I accept responsibility for my personal environment during home sessions</li>
      </ul>
      <p class="mb-0">
        Rehabrion shall not be responsible for accidents caused due to unsafe home conditions beyond the therapist’s control.
      </p>

      <hr>

      <h4 class="mt-3">5. Tele-Rehabilitation & Online Sessions Consent</h4>
      <p class="mb-2">For virtual sessions, I understand that:</p>
      <ul class="mb-3">
        <li>Sessions may be conducted via video call</li>
        <li>Privacy compliant platforms will be used</li>
        <li>Internet failure or technical errors may occur</li>
        <li>Full physical support may not be possible remotely</li>
      </ul>
      <p class="mb-0">I consent voluntarily to receive tele-rehabilitation services.</p>

      <hr>

      <h4 class="mt-3">6. Data Privacy & Confidentiality</h4>
      <p class="mb-0">
        I understand and agree that my medical records will be kept confidential, my personal and health data
        will only be used for treatment purposes, and information will not be shared without my consent unless required by law.
        Rehabrion follows strict privacy and ethical standards.
      </p>

      <hr>

      <h4 class="mt-3">7. Payment Policy Acknowledgment</h4>
      <p class="mb-0">
        I understand that all sessions must be paid for according to the agreed package,
        missed appointments may be subject to cancellation charges,
        and refunds if applicable are subject to Rehabrion’s Refund Policy.
      </p>

      <hr>

      <h4 class="mt-3">8. Voluntary Participation & Right to Withdraw</h4>
      <p class="mb-0">
        I understand that my participation in rehab sessions is voluntary,
        I may discontinue treatment at any time,
        and I have the right to ask questions about my treatment at any stage.
      </p>

      <hr>

      <h4 class="mt-3">9. Liability Waiver</h4>
      <p class="mb-0">
        I hereby release, waive, and discharge Rehabrion, its therapists, staff, partners, and affiliates
        from any liability for injury, loss, or damages arising from participation in rehabilitation services
        except in cases of proven negligence.
      </p>

      <hr>

      <h4 class="mt-3">10. Guardian Consent (For Minors)</h4>
      <p class="mb-0">
        For patients under 18 years of age, this consent must be signed by a parent or legal guardian confirming approval for therapy.
      </p>

      <hr>

      <h4 class="mt-3">Final Agreement Statement</h4>
      <p class="mb-0">
        By booking a session with Rehabrion, I confirm that I have read and understood this consent form,
        I voluntarily agree to participate in Rehabrion services, and I accept all terms and conditions mentioned above.
      </p>

      <hr>

      <div class="mt-3">
        <strong>Optional checkbox text for your booking form</strong>
        <p class="mb-0">
          I have read, understood, and agree to the Rehabrion Consent Form and Privacy Policy.
        </p>
      </div>

      <hr>

    </div>
    <!-- End Full Consent Content -->

  <form id="consentForm" method="POST" action="{{ route('Home.patient-consent.store') }}">
      @csrf

      <div id="consentFormGlobalError" class="alert alert-danger" style="display:none;"></div>

      <!-- 1 -->
      <div class="consent-section">
        <h4>1. Consent to Assessment & Treatment</h4>
        <div class="form-check">
          <input id="consent_to_assessment" type="checkbox" class="form-check-input" name="consent_to_assessment" value="1">
          <label class="form-check-label" for="consent_to_assessment">I consent to assessment & treatment</label>
        </div>
        <div id="consent_to_assessment-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 2 -->
      <div class="consent-section">
        <h4>2. Understanding of Benefits & Risks</h4>
        <div class="form-check">
          <input id="understanding_of_benefits_and_risks" type="checkbox" class="form-check-input" name="understanding_of_benefits_and_risks" value="1">
          <label class="form-check-label" for="understanding_of_benefits_and_risks">I understand benefits & risks</label>
        </div>
        <div id="understanding_of_benefits_and_risks-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 3 -->
      <div class="consent-section">
        <h4>3. Medical History Disclosure</h4>
        <div class="form-check">
          <input id="medical_history_disclosure" type="checkbox" class="form-check-input" name="medical_history_disclosure" value="1">
          <label class="form-check-label" for="medical_history_disclosure">I have fully disclosed my medical history</label>
        </div>
        <div id="medical_history_disclosure-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 4 -->
      <div class="consent-section">
        <h4>4. Home Based & Virtual Session Responsibilities</h4>
        <div class="form-check">
          <input id="home_virtual_session_responsibility" type="checkbox" class="form-check-input" name="home_virtual_session_responsibility" value="1">
          <label class="form-check-label" for="home_virtual_session_responsibility">I accept responsibility for my home virtual session environment</label>
        </div>
        <div id="home_virtual_session_responsibility-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 5 -->
      <div class="consent-section">
        <h4>5. Tele Rehabilitation & Online Sessions</h4>
        <div class="form-check">
          <input id="tele_rehabilitation_consent" type="checkbox" class="form-check-input" name="tele_rehabilitation_consent" value="1">
          <label class="form-check-label" for="tele_rehabilitation_consent">I consent to tele rehabilitation sessions</label>
        </div>
        <div id="tele_rehabilitation_consent-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 6 -->
      <div class="consent-section">
        <h4>6. Data Privacy & Confidentiality</h4>
        <div class="form-check">
          <input id="data_privacy" type="checkbox" class="form-check-input" name="data_privacy" value="1">
          <label class="form-check-label" for="data_privacy">I agree to data privacy & confidentiality</label>
        </div>
        <div id="data_privacy-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 7 -->
      <div class="consent-section">
        <h4>7. Payment Policy</h4>
        <div class="form-check">
          <input id="payment_policy_acknowledgment" type="checkbox" class="form-check-input" name="payment_policy_acknowledgment" value="1">
          <label class="form-check-label" for="payment_policy_acknowledgment">I acknowledge the payment policy</label>
        </div>
        <div id="payment_policy_acknowledgment-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 8 -->
      <div class="consent-section">
        <h4>8. Voluntary Participation</h4>
        <div class="form-check">
          <input id="voluntary_participation" type="checkbox" class="form-check-input" name="voluntary_participation" value="1">
          <label class="form-check-label" for="voluntary_participation">I understand participation is voluntary</label>
        </div>
        <div id="voluntary_participation-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 9 -->
      <div class="consent-section">
        <h4>9. Liability Waiver</h4>
        <div class="form-check">
          <input id="liability_waiver" type="checkbox" class="form-check-input" name="liability_waiver" value="1">
          <label class="form-check-label" for="liability_waiver">I agree to the liability waiver</label>
        </div>
        <div id="liability_waiver-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- 10 optional -->
      <div class="consent-section">
        <h4>10. Guardian Consent (Minors)</h4>
        <div class="form-check">
          <input id="guardian_consent" type="checkbox" class="form-check-input" name="guardian_consent" value="1">
          <label class="form-check-label" for="guardian_consent">Guardian consent (if applicable)</label>
        </div>
        <div id="guardian_consent-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <!-- Final -->
      <div class="consent-section">
        <h4>Final Agreement</h4>
        <div class="form-check">
          <input id="final_agreement_statement" type="checkbox" class="form-check-input" name="final_agreement_statement" value="1">
          <label class="form-check-label" for="final_agreement_statement">I have read, understood, and agree to all terms above</label>
        </div>
        <div id="final_agreement_statement-error" class="error-message text-danger mt-1" style="display:none;"></div>
      </div>

      <hr>
      <h5>Patient Information</h5>

      <input
        id="consent_patient_full_name"
        type="text"
        name="patient_full_name"
        class="form-control mb-2"
        placeholder="Patient Full Name"
      >
      <div id="consent_patient_full_name-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <input
        id="consent_dob"
        type="date"
        name="date_of_birth"
        class="form-control mb-2"
      >
      <div id="consent_dob-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <input
        id="consent_contact"
        type="tel"
        name="contact_number"
        class="form-control mb-2"
        placeholder="Contact Number"
      >
      <div id="consent_contact-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <input
        id="consent_email"
        type="email"
        name="email_address"
        class="form-control mb-2"
        placeholder="Email Address"
      >
      <div id="email_address-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <input
        id="consent_emergency_contact"
        type="text"
        name="emergency_contact"
        class="form-control mb-2"
        placeholder="Emergency Contact"
      >
      <div id="emergency_contact-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <input
        id="consent_signature"
        type="text"
        name="patient_signature"
        class="form-control mb-2"
        placeholder="Signature (Full Name)"
      >
      <div id="consent_signature-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <input
        id="consent_signature_date"
        type="date"
        name="signature_date"
        class="form-control mb-3"
      >
      <div id="consent_signature_date-error" class="error-message text-danger mb-2" style="display:none;"></div>

      <div class="nav-buttons mt-4">
        <button type="button" class="btn btn-secondary" id="back-to-medical">Back to Medical Form</button>
        <button type="submit" class="btn btn-success">Submit Consent Form</button>
      </div>
    </form>

  </div>
</div>

    </div>
  </div>
</div>

<!-- THANK YOU MODAL -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0" style="border-radius:16px; overflow:hidden;">
      <div class="modal-body p-4 text-center">
        <div style="width:84px;height:84px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;background:rgba(40,167,69,.12);">
          <i class="fas fa-check-circle" style="font-size:48px;color:#28a745;"></i>
        </div>

        <h3 class="mb-2" style="font-weight:800;">Thank you!</h3>
        <p class="mb-3" style="color:#6c757d;">
          Your consent form has been submitted successfully.<br>
          Our team will contact you shortly.
        </p>

        <div class="d-flex gap-2 justify-content-center mt-3">
          <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary px-4" id="start-new-flow">Start New</button>
        </div>

        <small class="d-block mt-3" style="color:#9aa0a6;">Rehabrion • Confidential & Secure</small>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
/* =======================
   GLOBAL: CSRF for AJAX
======================= */
$.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

/* =======================
   Helpers + Error UI
======================= */
function normalizePhone(num){
  return (num || '').replace(/[\s\-\(\)]+/g,'').trim();
}
function isPkMobile(num){
  num = normalizePhone(num);
  return /^(\+92|0)3\d{9}$/.test(num);
}
function isValidEmail(email){
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}
function isFutureDob(dobStr){
  if(!dobStr) return false;
  const d = new Date(dobStr + "T00:00:00");
  const today = new Date();
  today.setHours(0,0,0,0);
  return d > today;
}
function calcAgeFromDob(dobStr){
  const dob = new Date(dobStr + "T00:00:00");
  const today = new Date();
  let age = today.getFullYear() - dob.getFullYear();
  const m = today.getMonth() - dob.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) age--;
  return age;
}

function showError(input, errorId, msg, scroll){
  if(input) input.classList.add('error');
  const el = document.getElementById(errorId);
  if(el){
    if(msg) el.textContent = msg;
    el.style.display = 'block';
  }
  if(scroll && input){
    input.scrollIntoView({ behavior:'smooth', block:'center' });
  }
}
function clearError(input, errorId){
  if(input) input.classList.remove('error');
  const el = document.getElementById(errorId);
  if(el) el.style.display = 'none';
}
function hideEl(id){
  const el = document.getElementById(id);
  if(el) el.style.display = 'none';
}
function showEl(id){
  const el = document.getElementById(id);
  if(el) el.style.display = 'block';
}

/* =======================
   Step 1 Strict Validation
======================= */
function validateStep1(scrollOnError = false){
  let ok = true;

  const fullName = document.getElementById('fullName');
  const dob = document.getElementById('dob');
  const age = document.getElementById('age');
  const contactNumber = document.getElementById('contactNumber');
  const emergencyContactName = document.getElementById('emergencyContactName');
  const emergencyContactNumber = document.getElementById('emergencyContactNumber');
  const email = document.getElementById('email');
  const gender = document.querySelector('input[name="gender"]:checked');
  const genderError = document.getElementById('gender-error');

  // Clear old
  clearError(fullName,'fullName-error');
  clearError(dob,'dob-error');
  clearError(age,'age-error');
  clearError(contactNumber,'contactNumber-error');
  clearError(emergencyContactName,'emergencyContactName-error');
  clearError(emergencyContactNumber,'emergencyContactNumber-error');
  clearError(email,'email-error');
  if(genderError) genderError.style.display = 'none';

  // Full name
  if(!fullName.value.trim()){
    showError(fullName,'fullName-error','Please enter your full name',scrollOnError);
    ok = false;
  }

  // DOB
  if(!dob.value){
    showError(dob,'dob-error','Please enter your date of birth',scrollOnError);
    ok = false;
  } else if(isFutureDob(dob.value)){
    showError(dob,'dob-error','Date of birth cannot be in the future.',scrollOnError);
    ok = false;
  }

  // Age
  const ageVal = parseInt(age.value,10);
  if(!age.value || Number.isNaN(ageVal) || ageVal < 0 || ageVal > 120){
    showError(age,'age-error','Please enter a valid age (0-120).',scrollOnError);
    ok = false;
  }

  // Age vs DOB match (strict)
  if(dob.value && age.value && !Number.isNaN(ageVal)){
    const computed = calcAgeFromDob(dob.value);
    if(computed !== ageVal){
      showError(age,'age-error',`Age does not match the date of birth. Correct age: ${computed}`,scrollOnError);
      ok = false;
    }
  }

  // Gender
  if(!gender){
    if(genderError) genderError.style.display = 'block';
    ok = false;
  }

  // Phone
  const cn = contactNumber.value.trim();
  if(!cn){
    showError(contactNumber,'contactNumber-error','Contact number is required.',scrollOnError);
    ok = false;
  } else if(!isPkMobile(cn)){
    showError(contactNumber,'contactNumber-error','Enter valid Pakistan mobile (03XXXXXXXXX or +923XXXXXXXXX).',scrollOnError);
    ok = false;
  }

  // Emergency name
  if(!emergencyContactName.value.trim()){
    showError(emergencyContactName,'emergencyContactName-error','Emergency contact name is required.',scrollOnError);
    ok = false;
  }

  // Emergency phone
  const ecn = emergencyContactNumber.value.trim();
  if(!ecn){
    showError(emergencyContactNumber,'emergencyContactNumber-error','Emergency contact number is required.',scrollOnError);
    ok = false;
  } else if(!isPkMobile(ecn)){
    showError(emergencyContactNumber,'emergencyContactNumber-error','Enter valid Pakistan mobile (03XXXXXXXXX or +923XXXXXXXXX).',scrollOnError);
    ok = false;
  }

  // Email optional
  if(email.value.trim() && !isValidEmail(email.value.trim())){
    showError(email,'email-error','Please enter a valid email address.',scrollOnError);
    ok = false;
  }

  return ok;
}

/* =======================
   DOM Ready
======================= */
document.addEventListener('DOMContentLoaded', function(){

  // Set DOB max (browser-level)
  const dob = document.getElementById('dob');
  if(dob){
    dob.max = new Date().toISOString().split('T')[0];
    dob.addEventListener('change', ()=> validateStep1(false));
  }

  // Live validation Step1 inputs
  ['fullName','age','contactNumber','emergencyContactName','emergencyContactNumber','email'].forEach(id=>{
    const el = document.getElementById(id);
    if(!el) return;
    el.addEventListener('input', ()=> validateStep1(false));
    el.addEventListener('blur', ()=> validateStep1(false));
  });
  document.querySelectorAll('input[name="gender"]').forEach(r=>{
    r.addEventListener('change', ()=> validateStep1(false));
  });

  // Update header on tabs
  const medicalTabBtn = document.getElementById('medical-tab');
  const consentTabBtn = document.getElementById('consent-tab');

  if(medicalTabBtn){
    medicalTabBtn.addEventListener('click', ()=>{
      document.getElementById('current-form-title').textContent = 'PATIENT MEDICAL HISTORY FORM';
      document.getElementById('current-form-description').textContent = 'Please fill out all required fields to help us provide you with the best care.';
    });
  }
  if(consentTabBtn){
    consentTabBtn.addEventListener('click', ()=>{
      document.getElementById('current-form-title').textContent = 'PATIENT CONSENT FORM';
      document.getElementById('current-form-description').textContent = 'Please read and agree to the terms and conditions below.';
    });
  }

  // Step system
  const steps = Array.from(document.querySelectorAll('#medical-form .form-step'));
  const stepItems = Array.from(document.querySelectorAll('.step-item'));
  const totalSteps = steps.length || 6;

  const progressBar = document.getElementById('form-progress');
  const currentStepEl = document.getElementById('current-step');
  const progressPctEl = document.getElementById('progress-percentage');

  let currentStep = 1;

  function updateProgress(){
    const pct = Math.round((currentStep / totalSteps) * 100);
    if(progressBar) progressBar.style.width = pct + '%';
    if(currentStepEl) currentStepEl.textContent = `Step ${currentStep} of ${totalSteps}`;
    if(progressPctEl) progressPctEl.textContent = pct + '%';

    stepItems.forEach((item, idx)=>{
      const n = idx + 1;
      item.classList.remove('active','completed');
      if(n === currentStep) item.classList.add('active');
      if(n < currentStep) item.classList.add('completed');
    });
  }

  function goToStep(stepId){
    steps.forEach(s=> s.classList.remove('active'));
    const target = document.getElementById(stepId);
    if(target) target.classList.add('active');

    currentStep = parseInt(stepId.replace('step',''),10) || 1;
    updateProgress();

    const fc = document.querySelector('#medical-form .form-container');
    if(fc) fc.scrollTop = 0;
  }

  // Sidebar click (optional)
  stepItems.forEach(item=>{
    item.addEventListener('click', ()=>{
      const n = item.getAttribute('data-step');
      if(n) goToStep('step'+n);
    });
  });

  // Pain slider sync
  const painRange = document.getElementById('painLevel');
  const painNum = document.getElementById('painLevelNumber');
  if(painRange && painNum){
    painRange.addEventListener('input', ()=> painNum.value = painRange.value);
    painNum.addEventListener('input', ()=>{
      let v = parseInt(painNum.value || '0',10);
      if(v < 0) v = 0;
      if(v > 10) v = 10;
      painNum.value = v;
      painRange.value = v;
    });
  }

  // "Other" location text toggle
  const otherLocation = document.getElementById('otherLocation');
  const otherLocationText = document.getElementById('otherLocationText');
  if(otherLocation && otherLocationText){
    otherLocation.addEventListener('change', ()=>{
      otherLocationText.style.display = otherLocation.checked ? 'block' : 'none';
    });
  }

  // Step 4 other condition toggle (if exists)
  const otherCondition = document.getElementById('otherCondition');
  const otherConditionText = document.getElementById('otherConditionText');
  if(otherCondition && otherConditionText){
    otherCondition.addEventListener('change', ()=>{
      otherConditionText.style.display = otherCondition.checked ? 'block' : 'none';
    });
  }

  // Surgery details toggle
  const surgeryDetails = document.getElementById('surgeryDetails');
  document.querySelectorAll('.surgery-radio').forEach(r=>{
    r.addEventListener('change', ()=>{
      if(!surgeryDetails) return;
      surgeryDetails.style.display = (r.value === 'yes' && r.checked) ? 'block' : (document.getElementById('surgeryYes')?.checked ? 'block' : 'none');
    });
  });

  // Medication details toggle
  const medicationDetails = document.getElementById('medicationDetails');
  document.querySelectorAll('.medication-radio').forEach(r=>{
    r.addEventListener('change', ()=>{
      if(!medicationDetails) return;
      medicationDetails.style.display = (r.value === 'yes' && r.checked) ? 'block' : (document.getElementById('medicationYes')?.checked ? 'block' : 'none');
    });
  });

  // Allergy details toggle
  const allergyDetails = document.getElementById('allergyDetails');
  document.querySelectorAll('.allergy-radio').forEach(r=>{
    r.addEventListener('change', ()=>{
      if(!allergyDetails) return;
      const otherChecked = document.getElementById('allergyOther')?.checked;
      allergyDetails.style.display = otherChecked ? 'block' : 'none';
    });
  });

  // Physio details toggle
  const physioDetails = document.getElementById('physioDetails');
  document.querySelectorAll('.physio-radio').forEach(r=>{
    r.addEventListener('change', ()=>{
      if(!physioDetails) return;
      physioDetails.style.display = (r.value === 'yes' && r.checked) ? 'block' : (document.getElementById('physioYes')?.checked ? 'block' : 'none');
    });
  });

  // Step-level validation
  function validateStep(stepNumber){
    let ok = true;

    // Always hide painLocation error on re-check
    const plErr = document.getElementById('painLocation-error');
    if(plErr) plErr.style.display = 'none';

    if(stepNumber === 1){
      return validateStep1(true);
    }

    if(stepNumber === 2){
      const primaryComplaint = document.getElementById('primaryComplaint');
      const problemStart = document.getElementById('problemStart');
      const problemCause = document.getElementById('problemCause');

      clearError(primaryComplaint,'primaryComplaint-error');
      clearError(problemStart,'problemStart-error');
      clearError(problemCause,'problemCause-error');

      if(primaryComplaint && !primaryComplaint.value.trim()){
        showError(primaryComplaint,'primaryComplaint-error','Primary complaint is required.',true);
        ok = false;
      }
      if(problemStart && !problemStart.value){
        showError(problemStart,'problemStart-error','Please select when the problem began.',true);
        ok = false;
      }
      if(problemCause && !problemCause.value){
        showError(problemCause,'problemCause-error','Please select how the problem occurred.',true);
        ok = false;
      }
    }

    if(stepNumber === 3){
      const checked = document.querySelectorAll('.pain-location:checked');
      if(checked.length === 0){
        if(plErr) plErr.style.display = 'block';
        ok = false;
      }
    }

    if(stepNumber === 6){
      const patientName = document.getElementById('patientName');
      const signatureDate = document.getElementById('signatureDate');
      const signature = document.getElementById('signature');

      if(patientName){
        clearError(patientName,'patientName-error');
        if(!patientName.value.trim()){
          showError(patientName,'patientName-error','Patient / Guardian name is required.',true);
          ok = false;
        }
      }
      if(signatureDate){
        clearError(signatureDate,'signatureDate-error');
        if(!signatureDate.value){
          showError(signatureDate,'signatureDate-error','Date is required.',true);
          ok = false;
        }
      }
      if(signature){
        clearError(signature,'signature-error');
        if(!signature.value.trim()){
          showError(signature,'signature-error','Signature is required.',true);
          ok = false;
        }
      }
    }

    return ok;
  }

  // Next/Prev buttons
  document.querySelectorAll('#medical-form .next-step').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const nextId = btn.getAttribute('data-next');
      if(validateStep(currentStep)){
        goToStep(nextId);
      }
    });
  });

  document.querySelectorAll('#medical-form .prev-step').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const prevId = btn.getAttribute('data-prev');
      goToStep(prevId);
    });
  });

  updateProgress();

  // Go to consent button
  const goConsentBtn = document.getElementById('go-to-consent');
  if(goConsentBtn){
    goConsentBtn.addEventListener('click', ()=>{
      new bootstrap.Tab(document.getElementById('consent-tab')).show();
    });
  }

  // Medical submit AJAX
  $(document).on('click', '#submit-medical-form', function(e){
    e.preventDefault();
    if(!validateStep(currentStep)) return;

    const form = document.getElementById('medical-history-form');
    const formData = new FormData(form);

    $.ajax({
      url: form.action,
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      headers: { "Accept": "application/json" },

      success: function(){
        $('#medical-history-form').hide();
        $('#medical-success-message').show();
      },

      error: function(xhr){
        if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
          const errors = xhr.responseJSON.errors;

          // clear old
          $(".error-message").hide().text("");
          $(".form-control, .form-select").removeClass("error");

          const map = {
            patient_full_name: "fullName-error",
            date_of_birth: "dob-error",
            age: "age-error",
            gender: "gender-error",
            contact_number: "contactNumber-error",
            emergency_contact_name: "emergencyContactName-error",
            emergency_contact_number: "emergencyContactNumber-error",
            email_address: "email-error",
            primary_complaint: "primaryComplaint-error",
            problem_start: "problemStart-error",
            problem_cause: "problemCause-error",
          };

          Object.keys(errors).forEach(function(field){
            if(map[field]){
              const errId = map[field];
              const msg = errors[field][0];
              const errEl = document.getElementById(errId);
              if(errEl){
                errEl.textContent = msg;
                errEl.style.display = 'block';
              }
            }
          });

          // If step1 field errors -> go back step1
          if(errors.patient_full_name || errors.date_of_birth || errors.age || errors.gender || errors.contact_number){
            goToStep('step1');
          } else if(errors.primary_complaint || errors.problem_start || errors.problem_cause){
            goToStep('step2');
          }

          return;
        }

        console.log(xhr.responseText);
        alert("There was an error submitting the medical form.");
      }
    });
  });

});
</script>
{{--
<script>

    function showConsentError(input, errorId, msg, scroll){
  if(input) input.classList.add('error');
  const el = document.getElementById(errorId);
  if(el){
    el.textContent = msg || 'This field is required';
    el.style.display = 'block';
  }
  if(scroll && input){
    input.scrollIntoView({ behavior:'smooth', block:'center' });
  }
}

function clearConsentError(input, errorId){
  if(input) input.classList.remove('error');
  const el = document.getElementById(errorId);
  if(el) el.style.display = 'none';
}

function validateConsentForm(scrollOnError = true){
  let ok = true;

  // clear all old consent errors
  $('#consentForm .error-message').hide();
  $('#consentForm .error').removeClass('error');

  const requiredCheckboxes = [
    'consent_to_assessment',
    'understanding_of_benefits_and_risks',
    'medical_history_disclosure',
    'home_virtual_session_responsibility',
    'tele_rehabilitation_consent',
    'data_privacy',
    'payment_policy_acknowledgment',
    'voluntary_participation',
    'liability_waiver',
    'final_agreement_statement'
  ];

  // checkboxes
  requiredCheckboxes.forEach(function(name){
    const input = document.querySelector('#consentForm input[name="'+name+'"]');
    const checked = input && input.checked;
    if(!checked){
      showConsentError(input, name+'-error', 'Please check this box to continue', scrollOnError && ok);
      ok = false;
    }
  });

  // required inputs
  const fullName = document.getElementById('consent_patient_full_name');
  const dob = document.getElementById('consent_dob');
  const contact = document.getElementById('consent_contact');
  const signature = document.getElementById('consent_signature');
  const signatureDate = document.getElementById('consent_signature_date');

  if(fullName && !fullName.value.trim()){
    showConsentError(fullName,'consent_patient_full_name-error','Patient full name is required', scrollOnError && ok);
    ok = false;
  }
  if(dob && !dob.value){
    showConsentError(dob,'consent_dob-error','Date of birth is required', scrollOnError && ok);
    ok = false;
  }
  if(contact && !contact.value.trim()){
    showConsentError(contact,'consent_contact-error','Contact number is required', scrollOnError && ok);
    ok = false;
  }
  if(signature && !signature.value.trim()){
    showConsentError(signature,'consent_signature-error','Signature is required', scrollOnError && ok);
    ok = false;
  }
  if(signatureDate && !signatureDate.value){
    showConsentError(signatureDate,'consent_signature_date-error','Signature date is required', scrollOnError && ok);
    ok = false;
  }

  return ok;
}

/* Consent form AJAX */
$(document).ready(function () {

  $('#back-to-medical').on('click', function(){
    new bootstrap.Tab(document.getElementById('medical-tab')).show();
  });

  $('#consentForm').on('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    const $btn = $(form).find('button[type="submit"]');
    const btnText = $btn.text();
    $btn.prop('disabled', true).text('Submitting...');

    $.ajax({
      url: form.action,
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      headers: { "Accept": "application/json" },

      success: function () {
        $('#consentForm').hide();
        const modal = new bootstrap.Modal(document.getElementById('thankYouModal'));
        modal.show();
      },

      error: function (xhr) {
        console.log(xhr.responseText);
        alert("There was an error submitting the consent form.");
      },

      complete: function () {
        $btn.prop('disabled', false).text(btnText);
      }
    });
  });

  $('#start-new-flow').on('click', function () {
    const modalEl = document.getElementById('thankYouModal');
    const modalInstance = bootstrap.Modal.getInstance(modalEl);
    if(modalInstance) modalInstance.hide();

    const medicalForm = document.getElementById('medical-history-form');
    const consentForm = document.getElementById('consentForm');

    if (medicalForm) medicalForm.reset();
    if (consentForm) consentForm.reset();

    $('#medical-history-form').show();
    $('#medical-success-message').hide();
    $('#consentForm').show();

    // back to step1
    $('.form-step').removeClass('active');
    $('#step1').addClass('active');

    new bootstrap.Tab(document.getElementById('medical-tab')).show();

    window.scrollTo({ top: 0, behavior: "smooth" });
  });

});
</script> --}}
<script>
function showConsentError(input, errorId, msg, scroll){
  if(input) input.classList.add('error');
  const el = document.getElementById(errorId);
  if(el){
    el.textContent = msg || 'This field is required';
    el.style.display = 'block';
  }
  if(scroll && input){
    input.scrollIntoView({ behavior:'smooth', block:'center' });
  }
}

function validateConsentForm(scrollOnError = true){
  let ok = true;

  $('#consentForm .error-message').hide().text('');
  $('#consentForm .error').removeClass('error');
  $('#consentFormGlobalError').hide().text('');

  const requiredCheckboxes = [
    'consent_to_assessment',
    'understanding_of_benefits_and_risks',
    'medical_history_disclosure',
    'home_virtual_session_responsibility',
    'tele_rehabilitation_consent',
    'data_privacy',
    'payment_policy_acknowledgment',
    'voluntary_participation',
    'liability_waiver',
    'final_agreement_statement'
  ];

  requiredCheckboxes.forEach(function(name){
    const input = document.querySelector('#consentForm input[name="'+name+'"]');
    const checked = input && input.checked;
    if(!checked){
      showConsentError(input, name+'-error', 'Please check this box to continue', scrollOnError && ok);
      ok = false;
    }
  });

  const fullName = document.getElementById('consent_patient_full_name');
  const dob = document.getElementById('consent_dob');
  const contact = document.getElementById('consent_contact');
  const signature = document.getElementById('consent_signature');
  const signatureDate = document.getElementById('consent_signature_date');
  const emergency = document.getElementById('consent_emergency_contact');

  if(fullName && !fullName.value.trim()){
    showConsentError(fullName,'consent_patient_full_name-error','Patient full name is required', scrollOnError && ok);
    ok = false;
  }
  if(dob && !dob.value){
    showConsentError(dob,'consent_dob-error','Date of birth is required', scrollOnError && ok);
    ok = false;
  }
  if(contact && !contact.value.trim()){
    showConsentError(contact,'consent_contact-error','Contact number is required', scrollOnError && ok);
    ok = false;
  }
  if(emergency && !emergency.value.trim()){
    showConsentError(emergency,'emergency_contact-error','Emergency contact is required', scrollOnError && ok);
    ok = false;
  }
  if(signature && !signature.value.trim()){
    showConsentError(signature,'consent_signature-error','Signature is required', scrollOnError && ok);
    ok = false;
  }
  if(signatureDate && !signatureDate.value){
    showConsentError(signatureDate,'consent_signature_date-error','Signature date is required', scrollOnError && ok);
    ok = false;
  }

  return ok;
}

$(document).ready(function () {

  $('#back-to-medical').on('click', function(){
    new bootstrap.Tab(document.getElementById('medical-tab')).show();
  });

  $('#consentForm').on('submit', function (e) {
    e.preventDefault();

    if(!validateConsentForm(true)) return;

    const form = this;
    const formData = new FormData(form);

    const $btn = $(form).find('button[type="submit"]');
    const btnText = $btn.text();
    $btn.prop('disabled', true).text('Submitting...');

    $.ajax({
      url: form.action,
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      headers: {
        "Accept": "application/json",
        "X-CSRF-TOKEN": $('input[name="_token"]').val()
      },

      success: function () {
        $('#consentForm').hide();
        const modal = new bootstrap.Modal(document.getElementById('thankYouModal'));
        modal.show();
      },

      error: function (xhr) {
        if(xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors){
          const errors = xhr.responseJSON.errors;

          $('#consentForm .error-message').hide().text('');
          $('#consentForm .error').removeClass('error');

          Object.keys(errors).forEach(function(field){
            const msg = errors[field][0] || 'This field is required';

            const map = {
              patient_full_name: 'consent_patient_full_name-error',
              date_of_birth: 'consent_dob-error',
              contact_number: 'consent_contact-error',
              patient_signature: 'consent_signature-error',
              signature_date: 'consent_signature_date-error',
              emergency_contact: 'emergency_contact-error'
            };

            const errorId = map[field] || (field + '-error');
            const el = document.getElementById(errorId);
            if(el){
              el.textContent = msg;
              el.style.display = 'block';
            }
          });

          const firstErr = document.querySelector('#consentForm .error-message[style*="block"]');
          if(firstErr) firstErr.scrollIntoView({behavior:'smooth', block:'center'});

          return;
        }

        $('#consentFormGlobalError').text('There was an error submitting the consent form. Please try again.').show();
        console.log(xhr.responseText);
      },

      complete: function () {
        $btn.prop('disabled', false).text(btnText);
      }
    });
  });

});
</script>
</body>
</html>
