@extends('Layout.layout')
@section('Content')

@php
    use Illuminate\Support\Str;

    $location = trim(($job->city ?? "") . ($job->state ? ", {$job->state}" : "") . ($job->country ? ", {$job->country}" : ""));
    $location = $location ?: "Location not specified";

    $salaryText = "Salary negotiable";
    if ($job->salary_from && $job->salary_to) $salaryText = "PKR {$job->salary_from} to {$job->salary_to}";
    elseif ($job->salary_from) $salaryText = "PKR {$job->salary_from}";
    elseif ($job->salary_to) $salaryText = "PKR {$job->salary_to}";

    $posted = $job->posted_date ? \Carbon\Carbon::parse($job->posted_date)->format('M d, Y') : optional($job->created_at)->format('M d, Y');

    $descShort = Str::limit(strip_tags($job->description ?? ''), 200, "...");
@endphp

<!-- CSRF Token for AJAX -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="job-detail-header bg-dark-blue text-white py-5">
    <div class="container py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="{{ route('Home.jobs') }}" class="text-white-50 text-decoration-none small">Vacancies</a>
                </li>
                <li class="breadcrumb-item active text-white small" aria-current="page">Job Details</li>
            </ol>
        </nav>

        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="d-flex align-items-center gap-4 mb-3">
                    <div class="company-logo-large bg-white rounded-4 p-3 shadow-sm">
                        <i class="fas fa-building text-primary display-6"></i>
                    </div>
                    <div>
                        <h1 class="fw-bold display-6 mb-1">{{ $job->position }}</h1>
                        <p class="lead text-white-50 mb-0">{{ $job->company_name }} &bull; {{ $location }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <button class="btn btn-custom px-5 py-3 rounded-pill fw-bold shadow-lg job-detail-apply-btn" type="button">
                    Apply For This Position <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="job-body-section py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5">
                    <h4 class="fw-bold text-dark-blue mb-4">Job Description</h4>

                  @if(!empty($job->description))
    <p class="text-muted lh-lg">
        {{ strip_tags($job->description) }}
    </p>
@endif

                    @if(!empty($job->long_description))
                        <div class="text-muted lh-lg">
                            {!! $job->long_description !!}
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px; z-index: 10;">
                    <div class="card border-0 rounded-4 shadow-sm p-4 mb-4">
                        <h5 class="fw-bold text-dark-blue mb-4">Job Overview</h5>

                        <div class="overview-item d-flex gap-3 mb-4">
                            <div class="icon-box bg-pink-light text-pink rounded-3 p-2">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Date Posted</small>
                                <span class="fw-bold small">{{ $posted }}</span>
                            </div>
                        </div>

                        <div class="overview-item d-flex gap-3 mb-4">
                            <div class="icon-box bg-pink-light text-pink rounded-3 p-2">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Monthly Salary</small>
                                <span class="fw-bold small">{{ $salaryText }}</span>
                            </div>
                        </div>

                        <div class="overview-item d-flex gap-3 mb-4">
                            <div class="icon-box bg-pink-light text-pink rounded-3 p-2">
                                <i class="fas fa-user-clock"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Job Type</small>
                                <span class="fw-bold small">{{ $job->job_type ?? "Not specified" }}</span>
                            </div>
                        </div>

                        <hr class="my-4 opacity-25">

                        <button class="btn btn-outline-dark w-100 rounded-pill fw-bold mb-3" type="button">
                            <i class="far fa-heart me-2"></i> Save This Job
                        </button>

                        <button class="btn btn-custom w-100 rounded-pill fw-bold py-3 shadow job-detail-apply-btn" type="button">
                            Apply Now
                        </button>
                    </div>

                    <div class="card border-0 rounded-4 shadow-sm p-4 text-center">
                        <h6 class="fw-bold text-dark-blue mb-3">Share This Vacancy</h6>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hidden Job Data for JavaScript -->
<div id="jobDetailData"
     data-title="{{ $job->position }}"
     data-company="{{ $job->company_name }}"
     data-location="{{ $location }}"
     data-salary="{{ $salaryText }}"
     data-desc="{{ $descShort }}"
     data-slug="{{ $job->slug }}"
     style="display: none;">
</div>

<!-- Apply Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg position-relative">
            <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"
                style="top: 20px; right: 20px; z-index: 1050; background-color: white; border-radius: 50%; padding: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            </button>

            <div class="row g-0">
                <div class="col-lg-5 bg-light p-4 p-md-5 border-end">
                    <span class="badge bg-pink-light text-pink px-3 py-1 rounded-pill fw-bold mb-3">Job Details</span>
                    <h2 id="modalJobTitle" class="fw-bold text-dark-blue mb-2">{{ $job->position }}</h2>
                    <h5 id="modalCompanyName" class="text-muted mb-4">{{ $job->company_name }}</h5>
                    <div class="d-flex gap-3 mb-4">
                        <div class="bg-white p-2 px-3 rounded-3 border shadow-sm">
                            <small class="text-muted d-block">Location</small>
                            <span id="modalLocation" class="fw-bold small">{{ $location }}</span>
                        </div>
                        <div class="bg-white p-2 px-3 rounded-3 border shadow-sm">
                            <small class="text-muted d-block">Compensation</small>
                            <span id="modalSalary" class="fw-bold small">{{ $salaryText }}</span>
                        </div>
                    </div>
                    <h6 class="fw-bold text-dark-blue mb-2">Description</h6>
                    <p id="modalDesc" class="text-muted small lh-lg">{{ $descShort }}</p>
                </div>

                <div class="col-lg-7 p-4 p-md-5 bg-white">
                    <h3 class="fw-bold mb-4 text-dark-blue">Personal Details</h3>

                    <form id="applicationForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" id="jobIdField" value="{{ $job->slug }}">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">Full Name *</label>
                                <input type="text"
                                       name="full_name"
                                       class="form-control"
                                       placeholder="Enter full name"
                                       value="">
                                <div class="text-danger small mt-1 full_name_error" style="display: none;"></div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">Email Address *</label>
                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="email@example.com"
                                       value="">
                                <div class="text-danger small mt-1 email_error" style="display: none;"></div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">Phone Number *</label>
                                <input type="tel"
                                       name="phone"
                                       class="form-control"
                                       placeholder="+92 --- -------"
                                       value="">
                                <div class="text-danger small mt-1 phone_error" style="display: none;"></div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-muted">City *</label>
                                <input type="text"
                                       name="city"
                                       class="form-control"
                                       placeholder="Enter your city"
                                       value="">
                                <div class="text-danger small mt-1 city_error" style="display: none;"></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold small text-muted">Message (Optional)</label>
                                <textarea name="message"
                                          class="form-control"
                                          rows="3"
                                          placeholder="Any additional information..."></textarea>
                                <div class="text-danger small mt-1 message_error" style="display: none;"></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold small text-muted">Upload CV (PDF Preferred) *</label>
                                <div class="upload-area text-center p-4 border-dashed rounded-4 bg-light">
                                    <input type="file"
                                           name="cv"
                                           id="cvFile"
                                           class="d-none"
                                           accept=".pdf,.doc,.docx">
                                    <label for="cvFile" class="w-100 cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt text-pink fs-1 mb-2"></i>
                                        <p class="mb-0 fw-bold small" id="fileNameDisplay">Click to Select Resume</p>
                                        <small class="text-muted d-block">Max file size: 2MB</small>
                                    </label>
                                </div>
                                <div class="text-danger small mt-1 cv_error" style="display: none;"></div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-custom w-100 rounded-pill py-3 fw-bold" id="submitBtn">
                                    <span id="submitText">Submit My Application</span>
                                    <span id="loadingSpinner" style="display: none;" class="spinner-border spinner-border-sm"></span>
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg text-center p-5">
            <i class="fas fa-check-circle text-success display-1 mb-4"></i>
            <h3 class="fw-bold text-dark-blue">Application Sent!</h3>
            <p class="text-muted">Your application for <strong id="successJobName" class="text-pink">{{ $job->position }}</strong> was successful.</p>
            <button class="btn btn-custom px-5 rounded-pill" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Get job data from hidden div
    let jobSlug = $('#jobDetailData').data('slug');
    let jobTitle = $('#jobDetailData').data('title');
    let jobCompany = $('#jobDetailData').data('company');
    let jobLocation = $('#jobDetailData').data('location');
    let jobSalary = $('#jobDetailData').data('salary');
    let jobDesc = $('#jobDetailData').data('desc');

    // ============== APPLY NOW MODAL CODE ==============
    $('.job-detail-apply-btn').on('click', function() {
        // Set modal data
        $('#jobIdField').val(jobSlug);
        $('#modalJobTitle').text(jobTitle);
        $('#modalCompanyName').text(jobCompany);
        $('#modalLocation').text(jobLocation);
        $('#modalSalary').text(jobSalary);
        $('#modalDesc').text(jobDesc);

        // Reset form and clear errors
        $('#applicationForm')[0].reset();
        $('.text-danger').hide();
        $('.form-control').removeClass('is-invalid');
        $('.upload-area').removeClass('is-invalid');
        $('#fileNameDisplay').text('Click to Select Resume');

        $('#applyModal').modal('show');
    });

    // CV File Name Display
    $('#cvFile').on('change', function() {
        if(this.files.length > 0) {
            $('#fileNameDisplay').text(this.files[0].name);
        }
    });

    // ============== AJAX FORM SUBMISSION ==============
    $('#applicationForm').on('submit', function(e) {
        e.preventDefault();

        // Reset errors
        $('.text-danger').hide();
        $('.form-control').removeClass('is-invalid');
        $('.upload-area').removeClass('is-invalid');

        // Show loading spinner
        $('#submitBtn').prop('disabled', true);
        $('#submitText').hide();
        $('#loadingSpinner').show();

        // Client-side validation
        let hasError = false;

        const requiredFields = ['full_name', 'email', 'phone', 'city'];
        requiredFields.forEach(function(field) {
            const value = $(`[name="${field}"]`).val().trim();
            if (!value) {
                $(`.${field}_error`).text('This field is required').show();
                $(`[name="${field}"]`).addClass('is-invalid');
                hasError = true;
            }
        });

        const email = $('[name="email"]').val().trim();
        if (email && !isValidEmail(email)) {
            $('.email_error').text('Please enter a valid email address').show();
            $('[name="email"]').addClass('is-invalid');
            hasError = true;
        }

        if (!$('#cvFile')[0].files.length) {
            $('.cv_error').text('Please upload your CV').show();
            $('.upload-area').addClass('is-invalid');
            hasError = true;
        }

        if (hasError) {
            // Hide loading spinner if error
            $('#submitBtn').prop('disabled', false);
            $('#submitText').show();
            $('#loadingSpinner').hide();
            return false;
        }

        // Prepare FormData
        let formData = new FormData(this);
        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

        // AJAX request
        $.ajax({
            url: '/jobs/' + jobSlug,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Hide apply modal
                $('#applyModal').modal('hide');

                // Show success modal with job title
                $('#successJobName').text(jobTitle);
                $('#successModal').modal('show');

                // Reset form
                $('#applicationForm')[0].reset();
                $('#fileNameDisplay').text('Click to Select Resume');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // Validation errors from server
                    let errors = xhr.responseJSON.errors;

                    // Clear previous errors
                    $('.text-danger').hide();
                    $('.form-control').removeClass('is-invalid');
                    $('.upload-area').removeClass('is-invalid');

                    // Show new errors
                    $.each(errors, function(field, messages) {
                        if (field === 'cv') {
                            $('.cv_error').text(messages[0]).show();
                            $('.upload-area').addClass('is-invalid');
                        } else {
                            $(`.${field}_error`).text(messages[0]).show();
                            $(`[name="${field}"]`).addClass('is-invalid');
                        }
                    });
                } else {
                    alert('Something went wrong. Please try again.');
                }
            },
            complete: function() {
                // Hide loading spinner
                $('#submitBtn').prop('disabled', false);
                $('#submitText').show();
                $('#loadingSpinner').hide();
            }
        });
    });

    // Email validation helper
    function isValidEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Remove error on input
    $('.form-control').on('input', function() {
        $(this).removeClass('is-invalid');
        const fieldName = $(this).attr('name');
        $(`.${fieldName}_error`).hide();
    });
});
</script>

@endsection
