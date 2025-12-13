<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehabrion   - Patient Medical History & Consent Form</title>

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
            min-height: 100vh;
            max-width: 1400px;
            margin: 0 auto;
            background-color: white;
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

        .steps-title i {
            margin-right: 10px;
        }

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

        .step-item:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .step-item.active {
            background: rgba(255, 255, 255, 0.15);
            border-left: 3px solid white;
        }

        .step-item.completed {
            background: rgba(255, 255, 255, 0.1);
        }

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

        .step-info {
            flex-grow: 1;
        }

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

        .tab-pane {
            height: 100%;
            padding: 0;
        }

        .form-container {
            height: 100%;
            padding: 30px;
            overflow-y: auto;
        }

        .form-section {
            margin-bottom: 25px;
            padding: 25px;
            border-radius: 10px;
            background-color: white;
            border-left: 5px solid var(--primary-color);
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .form-section:hover {
            transform: translateY(-3px);
        }

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

        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .required:after {
            content: " *";
            color: var(--danger-color);
        }

        .checkbox-group, .radio-group {
            margin-bottom: 15px;
        }

        .checkbox-group label, .radio-group label {
            margin-right: 15px;
            font-weight: normal;
            cursor: pointer;
            font-size: 0.95rem;
        }

        .form-check-input {
            margin-right: 8px;
            cursor: pointer;
        }

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

        .textarea-control {
            min-height: 100px;
            resize: vertical;
        }

        .pain-scale {
            display: flex;
            align-items: center;
            margin-top: 10px;
            gap: 15px;
        }

        .pain-scale input[type="range"] {
            flex-grow: 1;
            height: 8px;
            border-radius: 4px;
        }

        .pain-scale input[type="number"] {
            width: 70px;
            text-align: center;
        }

        .pain-scale span {
            font-size: 0.9rem;
            color: var(--light-text);
            min-width: 70px;
        }

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

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #5a32a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(111, 66, 193, 0.3);
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
            transform: translateY(-2px);
        }

        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .progress-container {
            margin-bottom: 25px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .progress {
            height: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .progress-text {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: var(--light-text);
            font-weight: 500;
        }

        .form-step {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .form-step.active {
            display: block;
        }

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

        .signature-area {
            border-top: 1px dashed #ccc;
            padding-top: 20px;
            margin-top: 20px;
        }

        .other-input {
            margin-top: 10px;
        }

        .error-message {
            color: var(--danger-color);
            font-size: 0.875rem;
            margin-top: 5px;
            display: none;
        }

        .form-control.error, .form-select.error {
            border-color: var(--danger-color);
            background-color: rgba(220, 53, 69, 0.05);
        }

        .consent-section {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .consent-section h4 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .consent-checkbox {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f7ff;
            border-radius: 8px;
        }

        .success-message {
            text-align: center;
            padding: 40px 20px;
        }

        .success-icon {
            font-size: 5rem;
            color: var(--success-color);
            margin-bottom: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .main-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                max-height: 400px;
                overflow-y: auto;
            }

            .nav-tabs {
                flex-direction: row;
                overflow-x: auto;
                padding-bottom: 10px;
            }

            .nav-tabs .nav-link {
                white-space: nowrap;
            }

            .steps-container {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 15px;
            }

            .form-section {
                padding: 15px;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            .nav-buttons {
                flex-direction: column;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #5a32a3;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Rehabrion  </h2>
                <p>Patient Medical History & Consent Form</p>
            </div>

            <!-- Form Tabs -->
            <div class="tabs-container">
                <ul class="nav nav-tabs" id="formTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical-form" type="button" role="tab">
                            <i class="fas fa-file-medical-alt"></i> Medical History
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="consent-tab" data-bs-toggle="tab" data-bs-target="#consent-form" type="button" role="tab">
                            <i class="fas fa-file-signature"></i> Consent Form
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

            <!-- Tab Content -->
            <div class="tab-content" id="formTabContent">
                <!-- Medical History Tab -->
                <div class="tab-pane fade show active" id="medical-form" role="tabpanel">
                    <div class="form-container">
                        <!-- Progress Indicator -->
                        <div class="progress-container">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 16.6%" id="form-progress"></div>
                            </div>
                            <div class="progress-text">
                                <span id="current-step">Step 1 of 6</span>
                                <span id="progress-percentage">16.6%</span>
                            </div>
                        </div>

                        <!-- Medical History Form Steps -->
                        <form id="medicalHistoryForm">
                            <!-- Step 1: Personal Information -->
                            <div class="form-step active" id="step1">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-user"></i> PATIENT PERSONAL INFORMATION</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fullName" class="form-label required">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                                            <div class="error-message" id="fullName-error">Please enter your full name</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dob" class="form-label required">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" required>
                                            <div class="error-message" id="dob-error">Please enter your date of birth</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="age" class="form-label required">Age</label>
                                            <input type="number" class="form-control" id="age" min="0" max="120" placeholder="Age" required>
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
                                            <input type="tel" class="form-control" id="contactNumber" placeholder="Phone number" required>
                                            <div class="error-message" id="contactNumber-error">Please enter a valid phone number</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email address">
                                            <div class="error-message" id="email-error">Please enter a valid email address</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="homeAddress" class="form-label">Home Address</label>
                                            <input type="text" class="form-control" id="homeAddress" placeholder="Full address">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="emergencyContactName" class="form-label required">Emergency Contact Name</label>
                                            <input type="text" class="form-control" id="emergencyContactName" placeholder="Emergency contact name" required>
                                            <div class="error-message" id="emergencyContactName-error">Please enter emergency contact name</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="emergencyContactNumber" class="form-label required">Emergency Contact Number</label>
                                            <input type="tel" class="form-control" id="emergencyContactNumber" placeholder="Emergency contact number" required>
                                            <div class="error-message" id="emergencyContactNumber-error">Please enter emergency contact number</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nav-buttons">
                                    <button type="button" class="btn btn-secondary" disabled>Previous</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="step2">Next</button>
                                </div>
                            </div>

                            <!-- Step 2: Primary Complaint -->
                            <div class="form-step" id="step2">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-stethoscope"></i> PRIMARY COMPLAINT / REASON FOR VISIT</h3>

                                    <div class="mb-3">
                                        <label for="primaryComplaint" class="form-label required">What problem brings you to Rehabrion   today?</label>
                                        <textarea class="form-control textarea-control" id="primaryComplaint" placeholder="Describe your problem in detail" rows="4" required></textarea>
                                        <div class="error-message" id="primaryComplaint-error">Please describe your primary complaint</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="problemStart" class="form-label required">When did this problem begin?</label>
                                            <select class="form-select" id="problemStart" required>
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
                                            <select class="form-select" id="problemCause" required>
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
                                            <input type="number" class="form-control" id="painLevelNumber" min="0" max="10" value="0">
                                            <span>10 (Worst pain)</span>
                                        </div>
                                        <div class="error-message" id="painLevel-error">Please indicate your pain level</div>
                                    </div>
                                </div>

                                <div class="nav-buttons">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step1">Previous</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="step3">Next</button>
                                </div>
                            </div>

                            <!-- Step 3: Pain Details -->
                            <div class="form-step" id="step3">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-pain"></i> PAIN DETAILS</h3>

                                    <div class="mb-3">
                                        <label class="form-label required">Pain Location(s)</label>
                                        <div class="checkbox-group row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="neck" value="neck">
                                                    <label class="form-check-label" for="neck">Neck</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="shoulder" value="shoulder">
                                                    <label class="form-check-label" for="shoulder">Shoulder</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="back" value="back">
                                                    <label class="form-check-label" for="back">Back</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="hip" value="hip">
                                                    <label class="form-check-label" for="hip">Hip</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="knee" value="knee">
                                                    <label class="form-check-label" for="knee">Knee</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="ankle" value="ankle">
                                                    <label class="form-check-label" for="ankle">Ankle</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="wrist" value="wrist">
                                                    <label class="form-check-label" for="wrist">Wrist</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input pain-location" type="checkbox" id="otherLocation" value="other">
                                                    <label class="form-check-label" for="otherLocation">Other:</label>
                                                    <input type="text" class="form-control other-input" id="otherLocationText" placeholder="Specify other location" style="display: none;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="error-message" id="painLocation-error">Please select at least one pain location</div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Type of Pain</label>
                                        <div class="checkbox-group row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sharp" value="sharp">
                                                    <label class="form-check-label" for="sharp">Sharp</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="dull" value="dull">
                                                    <label class="form-check-label" for="dull">Dull</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="burning" value="burning">
                                                    <label class="form-check-label" for="burning">Burning</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="stiff" value="stiff">
                                                    <label class="form-check-label" for="stiff">Stiff</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="throbbing" value="throbbing">
                                                    <label class="form-check-label" for="throbbing">Throbbing</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Pain is worse during</label>
                                            <div class="checkbox-group">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="sitting" value="sitting">
                                                    <label class="form-check-label" for="sitting">Sitting</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="standing" value="standing">
                                                    <label class="form-check-label" for="standing">Standing</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="walking" value="walking">
                                                    <label class="form-check-label" for="walking">Walking</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="sleeping" value="sleeping">
                                                    <label class="form-check-label" for="sleeping">Sleeping</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="exercise" value="exercise">
                                                    <label class="form-check-label" for="exercise">Exercise</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">What reduces your pain?</label>
                                            <div class="checkbox-group">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="rest" value="rest">
                                                    <label class="form-check-label" for="rest">Rest</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="heat" value="heat">
                                                    <label class="form-check-label" for="heat">Heat</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="ice" value="ice">
                                                    <label class="form-check-label" for="ice">Ice</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="medication" value="medication">
                                                    <label class="form-check-label" for="medication">Medication</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="movement" value="movement">
                                                    <label class="form-check-label" for="movement">Movement</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nav-buttons">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step2">Previous</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="step4">Next</button>
                                </div>
                            </div>

                            <!-- Step 4: Past Medical History -->
                            <div class="form-step" id="step4">
                                <div class="form-section">
                                    <h3 class="section-title"><i class="fas fa-history"></i> PAST MEDICAL HISTORY</h3>
                                    <p class="mb-3">Do you currently have or ever had any of the following?</p>

                                    <div class="checkbox-group row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="highBP" value="highBP">
                                                <label class="form-check-label" for="highBP">High Blood Pressure</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="diabetes" value="diabetes">
                                                <label class="form-check-label" for="diabetes">Diabetes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="heartDisease" value="heartDisease">
                                                <label class="form-check-label" for="heartDisease">Heart Disease</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="stroke" value="stroke">
                                                <label class="form-check-label" for="stroke">Stroke</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="asthma" value="asthma">
                                                <label class="form-check-label" for="asthma">Asthma</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="arthritis" value="arthritis">
                                                <label class="form-check-label" for="arthritis">Arthritis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="osteoporosis" value="osteoporosis">
                                                <label class="form-check-label" for="osteoporosis">Osteoporosis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="thyroid" value="thyroid">
                                                <label class="form-check-label" for="thyroid">Thyroid Disorder</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="neuro" value="neuro">
                                                <label class="form-check-label" for="neuro">Neurological Disorder</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="otherCondition" value="other">
                                                <label class="form-check-label" for="otherCondition">Other:</label>
                                                <input type="text" class="form-control other-input" id="otherConditionText" placeholder="Specify other condition" style="display: none;">
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
                                                    <input class="form-check-input" type="checkbox" id="fractures" value="fractures">
                                                    <label class="form-check-label" for="fractures">Fractures</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="dislocations" value="dislocations">
                                                    <label class="form-check-label" for="dislocations">Dislocations</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="ligamentTears" value="ligamentTears">
                                                    <label class="form-check-label" for="ligamentTears">Ligament tears</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="muscleTears" value="muscleTears">
                                                    <label class="form-check-label" for="muscleTears">Muscle tears</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sportsInjuries" value="sportsInjuries">
                                                    <label class="form-check-label" for="sportsInjuries">Sports injuries</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="injuryDetails" class="form-label">Details</label>
                                            <textarea class="form-control textarea-control" id="injuryDetails" placeholder="Provide details about your injury history" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Surgical History -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-procedures"></i> SURGICAL HISTORY</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Have you ever had surgery?</label>
                                            <div class="radio-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input surgery-radio" type="radio" name="surgery" id="surgeryYes" value="yes">
                                                    <label class="form-check-label" for="surgeryYes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input surgery-radio" type="radio" name="surgery" id="surgeryNo" value="no">
                                                    <label class="form-check-label" for="surgeryNo">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="surgeryDetails" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-8 mb-3">
                                                    <label for="surgeryType" class="form-label">Type of surgery</label>
                                                    <input type="text" class="form-control" id="surgeryType" placeholder="Type of surgery">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="surgeryYear" class="form-label">Year</label>
                                                    <input type="number" class="form-control" id="surgeryYear" min="1900" max="2024" placeholder="Year">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="additionalSurgery" class="form-label">Additional surgeries (if any)</label>
                                                <textarea class="form-control textarea-control" id="additionalSurgery" placeholder="List any additional surgeries" rows="2"></textarea>
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
                                                <input class="form-check-input medication-radio" type="radio" name="medication" id="medicationYes" value="yes">
                                                <label class="form-check-label" for="medicationYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input medication-radio" type="radio" name="medication" id="medicationNo" value="no">
                                                <label class="form-check-label" for="medicationNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="medicationDetails" style="display: none;">
                                        <div class="mb-3">
                                            <label for="medicationList" class="form-label">Please list your medications</label>
                                            <textarea class="form-control textarea-control" id="medicationList" placeholder="List all medications, dosages, and frequency" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <!-- Allergies -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-allergies"></i> ALLERGIES</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Do you have any allergies?</label>
                                            <div class="radio-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input allergy-radio" type="radio" name="allergy" id="allergyNone" value="none">
                                                    <label class="form-check-label" for="allergyNone">None</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input allergy-radio" type="radio" name="allergy" id="allergyMeds" value="medications">
                                                    <label class="form-check-label" for="allergyMeds">Medications</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input allergy-radio" type="radio" name="allergy" id="allergyFood" value="food">
                                                    <label class="form-check-label" for="allergyFood">Food</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input allergy-radio" type="radio" name="allergy" id="allergyLatex" value="latex">
                                                    <label class="form-check-label" for="allergyLatex">Latex</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input allergy-radio" type="radio" name="allergy" id="allergyOther" value="other">
                                                    <label class="form-check-label" for="allergyOther">Other</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="allergyDetails" style="display: none;">
                                            <div class="mb-3">
                                                <label for="allergyDescription" class="form-label">Please describe your allergies</label>
                                                <textarea class="form-control textarea-control" id="allergyDescription" placeholder="Describe your allergies and reactions" rows="3"></textarea>
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
                                                    <input class="form-check-input physio-radio" type="radio" name="physio" id="physioYes" value="yes">
                                                    <label class="form-check-label" for="physioYes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input physio-radio" type="radio" name="physio" id="physioNo" value="no">
                                                    <label class="form-check-label" for="physioNo">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="physioDetails" style="display: none;">
                                            <div class="mb-3">
                                                <label for="referralDetails" class="form-label">Diagnosis/Referral details</label>
                                                <textarea class="form-control textarea-control" id="referralDetails" placeholder="Provide details of diagnosis and referral" rows="3"></textarea>
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
                                            <input type="text" class="form-control" id="occupation" placeholder="Your occupation">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Daily Activity Level</label>
                                            <div class="radio-group">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="activity" id="low" value="low">
                                                    <label class="form-check-label" for="low">Low</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="activity" id="moderate" value="moderate">
                                                    <label class="form-check-label" for="moderate">Moderate</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="activity" id="active" value="active">
                                                    <label class="form-check-label" for="active">Active</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="activity" id="veryActive" value="veryActive">
                                                    <label class="form-check-label" for="veryActive">Very Active</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Exercise Routine</label>
                                            <div class="checkbox-group">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="none" value="none">
                                                    <label class="form-check-label" for="none">None</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="walking" value="walking">
                                                    <label class="form-check-label" for="walking">Walking</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="gym" value="gym">
                                                    <label class="form-check-label" for="gym">Gym</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="sportsEx" value="sports">
                                                    <label class="form-check-label" for="sportsEx">Sports</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="homeWorkout" value="homeWorkout">
                                                    <label class="form-check-label" for="homeWorkout">Home workout</label>
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
                                                    <input class="form-check-input" type="checkbox" id="walkingDiff" value="walkingDiff">
                                                    <label class="form-check-label" for="walkingDiff">Walking</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="bending" value="bending">
                                                    <label class="form-check-label" for="bending">Bending</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="lifting" value="lifting">
                                                    <label class="form-check-label" for="lifting">Lifting</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sittingDiff" value="sittingDiff">
                                                    <label class="form-check-label" for="sittingDiff">Sitting</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="standingDiff" value="standingDiff">
                                                    <label class="form-check-label" for="standingDiff">Standing</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="dressing" value="dressing">
                                                    <label class="form-check-label" for="dressing">Dressing</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sleepingDiff" value="sleepingDiff">
                                                    <label class="form-check-label" for="sleepingDiff">Sleeping</label>
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
                                                        <input class="form-check-input" type="radio" name="pregnant" id="pregnantYes" value="yes">
                                                        <label class="form-check-label" for="pregnantYes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="pregnant" id="pregnantNo" value="no">
                                                        <label class="form-check-label" for="pregnantNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Any recent delivery?</label>
                                                <div class="radio-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="delivery" id="deliveryYes" value="yes">
                                                        <label class="form-check-label" for="deliveryYes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="delivery" id="deliveryNo" value="no">
                                                        <label class="form-check-label" for="deliveryNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Goals -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-bullseye"></i> GOALS FROM THERAPY</h4>
                                        <p class="mb-3">What do you hope to achieve from Rehabrion   treatment?</p>

                                        <div class="checkbox-group row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="painRelief" value="painRelief">
                                                    <label class="form-check-label" for="painRelief">Pain relief</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="betterMovement" value="betterMovement">
                                                    <label class="form-check-label" for="betterMovement">Better movement</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fasterRecovery" value="fasterRecovery">
                                                    <label class="form-check-label" for="fasterRecovery">Faster recovery</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="returnToSports" value="returnToSports">
                                                    <label class="form-check-label" for="returnToSports">Return to sports</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="improvePosture" value="improvePosture">
                                                    <label class="form-check-label" for="improvePosture">Improve posture</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="longTermWellness" value="longTermWellness">
                                                    <label class="form-check-label" for="longTermWellness">Long-term wellness</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="otherGoals" class="form-label">Other goals</label>
                                            <textarea class="form-control textarea-control" id="otherGoals" placeholder="Any other goals you have for therapy" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Safety Confirmation -->
                                    <div class="mt-4">
                                        <h4 class="section-title"><i class="fas fa-home"></i> HOME & VIRTUAL SESSION SAFETY CONFIRMATION</h4>
                                        <div class="checkbox-group">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="safeSpace" value="safeSpace">
                                                <label class="form-check-label" for="safeSpace">I have safe space at home for therapy</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="reportDiscomfort" value="reportDiscomfort">
                                                <label class="form-check-label" for="reportDiscomfort">I will immediately report discomfort during exercises</label>
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
                                                    <input type="text" class="form-control" id="patientName" placeholder="Full name" required>
                                                    <div class="error-message" id="patientName-error">Please enter your name</div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="signatureDate" class="form-label required">Date</label>
                                                    <input type="date" class="form-control" id="signatureDate" required>
                                                    <div class="error-message" id="signatureDate-error">Please enter the date</div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="signature" class="form-label required">Signature</label>
                                                <input type="text" class="form-control" id="signature" placeholder="Type your full name as signature" required>
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
                                    <button type="button" class="btn btn-success" id="submit-medical-form">Submit Medical Form</button>
                                </div>
                            </div>
                        </form>

                        <!-- Success Message -->
                        <div id="medical-success-message" style="display: none;">
                            <div class="success-message">
                                <div class="success-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h2 class="text-success">Medical History Form Submitted Successfully!</h2>
                                <p class="lead">Thank you for completing the Rehabrion   Medical History Form.</p>
                                <p>Your information has been received and will be reviewed by our medical team.</p>
                                <p>Please proceed to the Consent Form tab to complete your registration.</p>
                                <button type="button" class="btn btn-primary mt-4" id="go-to-consent">Go to Consent Form</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Consent Form Tab -->
                <div class="tab-pane fade" id="consent-form" role="tabpanel">
                    <div class="form-container">
                        <div class="content-header">
                            <h1>Rehabrion   – PATIENT CONSENT FORM</h1>
                            <p>Welcome to Rehabrion  . Before beginning any physiotherapy, rehabilitation, or wellness session with us (in person, at home, or virtually), please read the following terms carefully.</p>
                        </div>

                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Important:</strong> By proceeding with our services, you confirm your understanding and agreement with the consent below.
                        </div>

                        <form id="consentForm">
                            <div class="consent-section">
                                <h4><i class="fas fa-check-circle text-primary"></i> 1. Consent to Assessment & Treatment</h4>
                                <p>I voluntarily consent to participate in physiotherapy, rehabilitation, pain management, mobility training, and related wellness services provided by Rehabrion  .</p>
                                <p>I understand that my program may include (but is not limited to):</p>
                                <ul>
                                    <li>Physical therapy & rehabilitation exercises</li>
                                    <li>Manual therapy techniques</li>
                                    <li>Pain management routines</li>
                                    <li>Post-surgical rehabilitation</li>
                                    <li>Post-injury recovery programs</li>
                                    <li>Virtual / online rehabilitation sessions</li>
                                    <li>Wellness & preventive rehab programs</li>
                                </ul>
                                <p>I agree to actively cooperate in my treatment and follow instructions provided by my assigned therapist.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-exclamation-triangle text-warning"></i> 2. Understanding of Benefits & Risks</h4>
                                <p>I understand that physiotherapy and rehabilitation involve physical activity and manual techniques, which may carry some inherent risks including, but not limited to:</p>
                                <ul>
                                    <li>Muscle soreness or fatigue</li>
                                    <li>Temporary discomfort</li>
                                    <li>Joint stiffness</li>
                                    <li>Minor strain or inflammation</li>
                                </ul>
                                <p>I acknowledge that while Rehabrion   strives for safe and effective care, no guarantee of results has been made, and outcomes vary for each individual.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-clipboard-list text-info"></i> 3. Medical History Disclosure</h4>
                                <p>I confirm that I have:</p>
                                <ul>
                                    <li>Fully disclosed my medical history</li>
                                    <li>Shared all known health conditions, injuries, surgeries, allergies, medications, and physical limitations</li>
                                </ul>
                                <p>I understand that withholding or providing inaccurate health information may increase the risk of injury or complication during therapy.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-home text-primary"></i> 4. Home-Based & Virtual Session Responsibilities</h4>
                                <p>For at-home or virtual rehabilitation sessions, I confirm that:</p>
                                <ul>
                                    <li>I have a safe, clean, and suitable space for therapy</li>
                                    <li>I will ensure proper lighting, visibility, and equipment availability</li>
                                    <li>I will immediately stop exercises if I feel pain, dizziness, or discomfort</li>
                                    <li>I accept responsibility for my personal environment during home sessions</li>
                                </ul>
                                <p>Rehabrion   shall not be responsible for accidents caused due to unsafe home conditions beyond the therapist's control.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-video text-info"></i> 5. Tele-Rehabilitation & Online Sessions Consent</h4>
                                <p>For virtual sessions, I understand that:</p>
                                <ul>
                                    <li>Sessions may be conducted via video call</li>
                                    <li>Privacy-compliant platforms will be used</li>
                                    <li>Internet failure or technical errors may occur</li>
                                    <li>Full physical support may not be possible remotely</li>
                                </ul>
                                <p>I consent voluntarily to receive tele-rehabilitation services.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-shield-alt text-success"></i> 6. Data Privacy & Confidentiality</h4>
                                <p>I understand and agree that:</p>
                                <ul>
                                    <li>My medical records will be kept confidential</li>
                                    <li>My personal and health data will only be used for treatment purposes</li>
                                    <li>Information will not be shared without my consent unless required by law</li>
                                </ul>
                                <p>Rehabrion   follows strict privacy and ethical standards.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-credit-card text-warning"></i> 7. Payment Policy Acknowledgment</h4>
                                <p>I understand that:</p>
                                <ul>
                                    <li>All sessions must be paid for according to the agreed package</li>
                                    <li>Missed appointments may be subject to cancellation charges</li>
                                    <li>Refunds (if applicable) are subject to Rehabrion  's Refund Policy</li>
                                </ul>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-user-check text-success"></i> 8. Voluntary Participation & Right to Withdraw</h4>
                                <p>I understand that:</p>
                                <ul>
                                    <li>My participation in rehab sessions is voluntary</li>
                                    <li>I may discontinue treatment at any time</li>
                                    <li>I have the right to ask questions about my treatment at any stage</li>
                                </ul>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-file-contract text-danger"></i> 9. Liability Waiver</h4>
                                <p>I hereby release, waive, and discharge Rehabrion  , its therapists, staff, partners, and affiliates from any liability for injury, loss, or damages arising from participation in rehabilitation services except in cases of proven negligence.</p>
                            </div>

                            <div class="consent-section">
                                <h4><i class="fas fa-user-friends text-info"></i> 10. Guardian Consent (For Minors)</h4>
                                <p>For patients under 18 years of age, this consent must be signed by a parent or legal guardian confirming approval for therapy.</p>
                            </div>

                            <div class="consent-checkbox">
                                <h4><i class="fas fa-file-signature text-primary"></i> Final Agreement Statement</h4>
                                <p>By booking a session with Rehabrion  , I confirm that:</p>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="consentRead" required>
                                    <label class="form-check-label" for="consentRead">
                                        <strong>✅ I have read and understood this consent form</strong>
                                    </label>
                                    <div class="error-message" id="consentRead-error">You must confirm that you have read and understood the consent form</div>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="consentAgree" required>
                                    <label class="form-check-label" for="consentAgree">
                                        <strong>✅ I voluntarily agree to participate in Rehabrion   services</strong>
                                    </label>
                                    <div class="error-message" id="consentAgree-error">You must agree to participate in Rehabrion   services</div>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="consentTerms" required>
                                    <label class="form-check-label" for="consentTerms">
                                        <strong>✅ I accept all terms and conditions mentioned above</strong>
                                    </label>
                                    <div class="error-message" id="consentTerms-error">You must accept all terms and conditions</div>
                                </div>

                                <div class="signature-area mt-4">
                                    <h5>Patient Information</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="consentPatientName" class="form-label required">Patient Full Name</label>
                                            <input type="text" class="form-control" id="consentPatientName" placeholder="Full name" required>
                                            <div class="error-message" id="consentPatientName-error">Please enter your full name</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="consentDob" class="form-label required">Date of Birth</label>
                                            <input type="date" class="form-control" id="consentDob" required>
                                            <div class="error-message" id="consentDob-error">Please enter your date of birth</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="consentContact" class="form-label required">Contact Number</label>
                                            <input type="tel" class="form-control" id="consentContact" placeholder="Phone number" required>
                                            <div class="error-message" id="consentContact-error">Please enter your contact number</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="consentEmail" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="consentEmail" placeholder="Email address">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="consentEmergency" class="form-label required">Emergency Contact</label>
                                            <input type="text" class="form-control" id="consentEmergency" placeholder="Emergency contact name and number" required>
                                            <div class="error-message" id="consentEmergency-error">Please enter emergency contact information</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="consentSignature" class="form-label required">Patient / Guardian Signature</label>
                                            <input type="text" class="form-control" id="consentSignature" placeholder="Type your full name as signature" required>
                                            <div class="error-message" id="consentSignature-error">Please provide your signature</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="consentDate" class="form-label required">Date</label>
                                            <input type="date" class="form-control" id="consentDate" required>
                                            <div class="error-message" id="consentDate-error">Please enter the date</div>
                                        </div>
                                    </div>

                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="consentOptional">
                                        <label class="form-check-label" for="consentOptional">
                                            <strong>☐ I have read, understood, and agree to the Rehabrion   Consent Form and Privacy Policy.</strong> (Optional)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-buttons mt-4">
                                <button type="button" class="btn btn-secondary" id="back-to-medical">Back to Medical Form</button>
                                <button type="button" class="btn btn-success" id="submit-consent-form">Submit Consent Form</button>
                            </div>
                        </form>

                        <!-- Success Message -->
                        <div id="consent-success-message" style="display: none;">
                            <div class="success-message">
                                <div class="success-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h2 class="text-success">Consent Form Submitted Successfully!</h2>
                                <p class="lead">Thank you for completing the Rehabrion   Consent Form.</p>
                                <p>Your registration is now complete. Our team will contact you shortly to schedule your appointment.</p>
                                <p>Welcome to Rehabrion   - we look forward to helping you on your recovery journey!</p>
                                <button type="button" class="btn btn-primary mt-4" id="new-registration">Start New Registration</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Bootstrap tabs
            const formTab = new bootstrap.Tab(document.getElementById('medical-tab'));
            const consentTab = new bootstrap.Tab(document.getElementById('consent-tab'));

            // Update form title based on active tab
            document.getElementById('medical-tab').addEventListener('click', function() {
                document.getElementById('current-form-title').textContent = 'PATIENT MEDICAL HISTORY FORM';
                document.getElementById('current-form-description').textContent = 'Please fill out all required fields to help us provide you with the best care.';
            });

            document.getElementById('consent-tab').addEventListener('click', function() {
                document.getElementById('current-form-title').textContent = 'PATIENT CONSENT FORM';
                document.getElementById('current-form-description').textContent = 'Please read and agree to the terms and conditions below.';
            });

            // Medical Form Steps Management
            const steps = document.querySelectorAll('#medical-form .form-step');
            const nextButtons = document.querySelectorAll('#medical-form .next-step');
            const prevButtons = document.querySelectorAll('#medical-form .prev-step');
            const progressBar = document.getElementById('form-progress');
            const currentStepElement = document.getElementById('current-step');
            const progressPercentage = document.getElementById('progress-percentage');
            const stepItems = document.querySelectorAll('.step-item');
            const totalSteps = steps.length;
            let currentStep = 1;

            // Pain level synchronization
            const painLevelSlider = document.getElementById('painLevel');
            const painLevelNumber = document.getElementById('painLevelNumber');

            if (painLevelSlider && painLevelNumber) {
                painLevelSlider.addEventListener('input', function() {
                    painLevelNumber.value = this.value;
                });

                painLevelNumber.addEventListener('input', function() {
                    let value = parseInt(this.value);
                    if (value < 0) value = 0;
                    if (value > 10) value = 10;
                    this.value = value;
                    painLevelSlider.value = value;
                });
            }

            // Show/hide other input fields
            const otherLocationCheckbox = document.getElementById('otherLocation');
            const otherLocationText = document.getElementById('otherLocationText');
            const otherConditionCheckbox = document.getElementById('otherCondition');
            const otherConditionText = document.getElementById('otherConditionText');

            if (otherLocationCheckbox && otherLocationText) {
                otherLocationCheckbox.addEventListener('change', function() {
                    otherLocationText.style.display = this.checked ? 'block' : 'none';
                });
            }

            if (otherConditionCheckbox && otherConditionText) {
                otherConditionCheckbox.addEventListener('change', function() {
                    otherConditionText.style.display = this.checked ? 'block' : 'none';
                });
            }

            // Surgery radio buttons
            const surgeryRadios = document.querySelectorAll('.surgery-radio');
            const surgeryDetails = document.getElementById('surgeryDetails');

            surgeryRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    surgeryDetails.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });

            // Medication radio buttons
            const medicationRadios = document.querySelectorAll('.medication-radio');
            const medicationDetails = document.getElementById('medicationDetails');

            medicationRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    medicationDetails.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });

            // Allergy radio buttons
            const allergyRadios = document.querySelectorAll('.allergy-radio');
            const allergyDetails = document.getElementById('allergyDetails');

            allergyRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    allergyDetails.style.display = this.value !== 'none' ? 'block' : 'none';
                });
            });

            // Physiotherapy radio buttons
            const physioRadios = document.querySelectorAll('.physio-radio');
            const physioDetails = document.getElementById('physioDetails');

            physioRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    physioDetails.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });

            // Next button functionality
            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const nextStepId = this.getAttribute('data-next');

                    // Validate current step before proceeding
                    if (validateMedicalStep(currentStep)) {
                        goToStep(nextStepId);
                    }
                });
            });

            // Previous button functionality
            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const prevStepId = this.getAttribute('data-prev');
                    goToStep(prevStepId);
                });
            });

            // Go to specific step
            function goToStep(stepId) {
                // Hide all steps
                steps.forEach(step => {
                    step.classList.remove('active');
                });

                // Show target step
                document.getElementById(stepId).classList.add('active');

                // Update current step number
                currentStep = parseInt(stepId.replace('step', ''));

                // Update progress indicator
                updateProgress();

                // Scroll to top of form
                document.querySelector('.form-container').scrollTop = 0;
            }

            // Update progress bar and indicators
            function updateProgress() {
                // Update progress bar
                const progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
                progressBar.style.width = `${progress}%`;
                currentStepElement.textContent = `Step ${currentStep} of ${totalSteps}`;
                progressPercentage.textContent = `${Math.round(progress)}%`;

                // Update step indicators in sidebar
                stepItems.forEach((item, index) => {
                    const stepNumber = index + 1;
                    item.classList.remove('active', 'completed');

                    if (stepNumber === currentStep) {
                        item.classList.add('active');
                    } else if (stepNumber < currentStep) {
                        item.classList.add('completed');
                    }
                });
            }

            // Form validation for medical steps
            function validateMedicalStep(stepNumber) {
                let isValid = true;

                // Clear previous error messages
                document.querySelectorAll('#medical-form .error-message').forEach(msg => {
                    msg.style.display = 'none';
                });

                document.querySelectorAll('#medical-form .form-control.error, #medical-form .form-select.error').forEach(el => {
                    el.classList.remove('error');
                });

                // Step 1 validation
                if (stepNumber === 1) {
                    const fullName = document.getElementById('fullName');
                    const dob = document.getElementById('dob');
                    const age = document.getElementById('age');
                    const gender = document.querySelector('input[name="gender"]:checked');
                    const contactNumber = document.getElementById('contactNumber');
                    const emergencyContactName = document.getElementById('emergencyContactName');
                    const emergencyContactNumber = document.getElementById('emergencyContactNumber');

                    if (!fullName.value.trim()) {
                        showError(fullName, 'fullName-error');
                        isValid = false;
                    }

                    if (!dob.value) {
                        showError(dob, 'dob-error');
                        isValid = false;
                    }

                    if (!age.value || age.value < 0 || age.value > 120) {
                        showError(age, 'age-error');
                        isValid = false;
                    }

                    if (!gender) {
                        document.getElementById('gender-error').style.display = 'block';
                        isValid = false;
                    }

                    if (!contactNumber.value.trim()) {
                        showError(contactNumber, 'contactNumber-error');
                        isValid = false;
                    }

                    if (!emergencyContactName.value.trim()) {
                        showError(emergencyContactName, 'emergencyContactName-error');
                        isValid = false;
                    }

                    if (!emergencyContactNumber.value.trim()) {
                        showError(emergencyContactNumber, 'emergencyContactNumber-error');
                        isValid = false;
                    }

                    // Email validation (optional)
                    const email = document.getElementById('email');
                    if (email.value.trim() && !isValidEmail(email.value)) {
                        showError(email, 'email-error');
                        isValid = false;
                    }
                }

                // Step 2 validation
                else if (stepNumber === 2) {
                    const primaryComplaint = document.getElementById('primaryComplaint');
                    const problemStart = document.getElementById('problemStart');
                    const problemCause = document.getElementById('problemCause');

                    if (!primaryComplaint.value.trim()) {
                        showError(primaryComplaint, 'primaryComplaint-error');
                        isValid = false;
                    }

                    if (!problemStart.value) {
                        showError(problemStart, 'problemStart-error');
                        isValid = false;
                    }

                    if (!problemCause.value) {
                        showError(problemCause, 'problemCause-error');
                        isValid = false;
                    }
                }

                // Step 3 validation
                else if (stepNumber === 3) {
                    // Pain location validation (at least one checked)
                    const painLocations = document.querySelectorAll('.pain-location:checked');
                    if (painLocations.length === 0) {
                        document.getElementById('painLocation-error').style.display = 'block';
                        isValid = false;
                    }
                }

                // Step 6 validation (final step)
                else if (stepNumber === 6) {
                    const patientName = document.getElementById('patientName');
                    const signatureDate = document.getElementById('signatureDate');
                    const signature = document.getElementById('signature');

                    if (!patientName.value.trim()) {
                        showError(patientName, 'patientName-error');
                        isValid = false;
                    }

                    if (!signatureDate.value) {
                        showError(signatureDate, 'signatureDate-error');
                        isValid = false;
                    }

                    if (!signature.value.trim()) {
                        showError(signature, 'signature-error');
                        isValid = false;
                    }
                }

                return isValid;
            }

            // Show error for a specific field
            function showError(inputElement, errorId) {
                inputElement.classList.add('error');
                const errorElement = document.getElementById(errorId);
                if (errorElement) {
                    errorElement.style.display = 'block';
                }

                // Scroll to the error
                inputElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            // Email validation
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            // Medical form submission
            const submitMedicalButton = document.getElementById('submit-medical-form');
            const medicalSuccessMessage = document.getElementById('medical-success-message');
            const medicalHistoryForm = document.getElementById('medicalHistoryForm');

            if (submitMedicalButton) {
                submitMedicalButton.addEventListener('click', function() {
                    // Validate the final step
                    if (validateMedicalStep(currentStep)) {
                        // Collect form data
                        const formData = collectMedicalFormData();
                        console.log('Medical Form data:', formData);

                        // Hide the form and show success message
                        medicalHistoryForm.style.display = 'none';
                        medicalSuccessMessage.style.display = 'block';

                        // You would typically send this data to your server here
                        // Example: sendFormData(formData);
                    }
                });
            }

            // Go to consent form button
            const goToConsentButton = document.getElementById('go-to-consent');
            if (goToConsentButton) {
                goToConsentButton.addEventListener('click', function() {
                    consentTab.show();
                    document.getElementById('current-form-title').textContent = 'PATIENT CONSENT FORM';
                    document.getElementById('current-form-description').textContent = 'Please read and agree to the terms and conditions below.';
                });
            }

            // Back to medical form button
            const backToMedicalButton = document.getElementById('back-to-medical');
            if (backToMedicalButton) {
                backToMedicalButton.addEventListener('click', function() {
                    formTab.show();
                    document.getElementById('current-form-title').textContent = 'PATIENT MEDICAL HISTORY FORM';
                    document.getElementById('current-form-description').textContent = 'Please fill out all required fields to help us provide you with the best care.';
                });
            }

            // Consent form validation and submission
            const submitConsentButton = document.getElementById('submit-consent-form');
            const consentSuccessMessage = document.getElementById('consent-success-message');
            const consentForm = document.getElementById('consentForm');

            if (submitConsentButton) {
                submitConsentButton.addEventListener('click', function() {
                    // Clear previous error messages
                    document.querySelectorAll('#consent-form .error-message').forEach(msg => {
                        msg.style.display = 'none';
                    });

                    document.querySelectorAll('#consent-form .form-control.error').forEach(el => {
                        el.classList.remove('error');
                    });

                    let isValid = true;

                    // Validate required checkboxes
                    const consentRead = document.getElementById('consentRead');
                    const consentAgree = document.getElementById('consentAgree');
                    const consentTerms = document.getElementById('consentTerms');

                    if (!consentRead.checked) {
                        document.getElementById('consentRead-error').style.display = 'block';
                        isValid = false;
                    }

                    if (!consentAgree.checked) {
                        document.getElementById('consentAgree-error').style.display = 'block';
                        isValid = false;
                    }

                    if (!consentTerms.checked) {
                        document.getElementById('consentTerms-error').style.display = 'block';
                        isValid = false;
                    }

                    // Validate required fields
                    const consentPatientName = document.getElementById('consentPatientName');
                    const consentDob = document.getElementById('consentDob');
                    const consentContact = document.getElementById('consentContact');
                    const consentEmergency = document.getElementById('consentEmergency');
                    const consentSignature = document.getElementById('consentSignature');
                    const consentDate = document.getElementById('consentDate');

                    if (!consentPatientName.value.trim()) {
                        showConsentError(consentPatientName, 'consentPatientName-error');
                        isValid = false;
                    }

                    if (!consentDob.value) {
                        showConsentError(consentDob, 'consentDob-error');
                        isValid = false;
                    }

                    if (!consentContact.value.trim()) {
                        showConsentError(consentContact, 'consentContact-error');
                        isValid = false;
                    }

                    if (!consentEmergency.value.trim()) {
                        showConsentError(consentEmergency, 'consentEmergency-error');
                        isValid = false;
                    }

                    if (!consentSignature.value.trim()) {
                        showConsentError(consentSignature, 'consentSignature-error');
                        isValid = false;
                    }

                    if (!consentDate.value) {
                        showConsentError(consentDate, 'consentDate-error');
                        isValid = false;
                    }

                    // Email validation (optional)
                    const consentEmail = document.getElementById('consentEmail');
                    if (consentEmail.value.trim() && !isValidEmail(consentEmail.value)) {
                        showConsentError(consentEmail, 'consentEmail-error');
                        isValid = false;
                    }

                    if (isValid) {
                        // Collect consent form data
                        const consentData = collectConsentFormData();
                        console.log('Consent Form data:', consentData);

                        // Hide the form and show success message
                        consentForm.style.display = 'none';
                        consentSuccessMessage.style.display = 'block';

                        // You would typically send this data to your server here
                        // Example: sendConsentData(consentData);
                    }
                });
            }

            // Show error for consent form
            function showConsentError(inputElement, errorId) {
                inputElement.classList.add('error');
                const errorElement = document.getElementById(errorId);
                if (errorElement) {
                    errorElement.style.display = 'block';
                }

                // Scroll to the error
                inputElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            // New registration button
            const newRegistrationButton = document.getElementById('new-registration');
            if (newRegistrationButton) {
                newRegistrationButton.addEventListener('click', function() {
                    // Reset medical form
                    medicalHistoryForm.reset();
                    medicalHistoryForm.style.display = 'block';
                    medicalSuccessMessage.style.display = 'none';

                    // Reset consent form
                    consentForm.reset();
                    consentForm.style.display = 'block';
                    consentSuccessMessage.style.display = 'none';

                    // Go to first step
                    goToStep('step1');

                    // Reset dynamic fields
                    surgeryDetails.style.display = 'none';
                    medicationDetails.style.display = 'none';
                    allergyDetails.style.display = 'none';
                    physioDetails.style.display = 'none';
                    otherLocationText.style.display = 'none';
                    otherConditionText.style.display = 'none';

                    // Reset pain level
                    if (painLevelSlider && painLevelNumber) {
                        painLevelSlider.value = 0;
                        painLevelNumber.value = 0;
                    }

                    // Switch to medical tab
                    formTab.show();
                    document.getElementById('current-form-title').textContent = 'PATIENT MEDICAL HISTORY FORM';
                    document.getElementById('current-form-description').textContent = 'Please fill out all required fields to help us provide you with the best care.';

                    // Scroll to top
                    document.querySelector('.form-container').scrollTop = 0;
                });
            }

            // Auto-calculate age from date of birth
            const dobInput = document.getElementById('dob');
            const ageInput = document.getElementById('age');

            if (dobInput && ageInput) {
                dobInput.addEventListener('change', function() {
                    const birthDate = new Date(this.value);
                    const today = new Date();
                    let age = today.getFullYear() - birthDate.getFullYear();
                    const monthDiff = today.getMonth() - birthDate.getMonth();

                    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }

                    if (age >= 0 && age <= 120) {
                        ageInput.value = age;
                    }
                });
            }

            // Collect medical form data
            function collectMedicalFormData() {
                const data = {};

                // Get all form elements
                const formElements = medicalHistoryForm.elements;

                for (let element of formElements) {
                    if (element.name || element.id) {
                        const key = element.name || element.id;

                        if (element.type === 'checkbox' || element.type === 'radio') {
                            if (element.checked) {
                                if (!data[key]) data[key] = [];
                                data[key].push(element.value);
                            }
                        } else {
                            data[key] = element.value;
                        }
                    }
                }

                return data;
            }

            // Collect consent form data
            function collectConsentFormData() {
                const data = {};

                // Get all form elements
                const formElements = consentForm.elements;

                for (let element of formElements) {
                    if (element.name || element.id) {
                        const key = element.name || element.id;

                        if (element.type === 'checkbox' || element.type === 'radio') {
                            data[key] = element.checked;
                        } else {
                            data[key] = element.value;
                        }
                    }
                }

                return data;
            }
        });
    </script>
</body>
</html>
