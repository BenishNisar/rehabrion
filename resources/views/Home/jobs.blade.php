@extends('Layout.layout')
@section('Content')
<style>
    .text-danger {
        color: red;
        font-size: 0.875rem;
        margin-top: 5px;
    }

    .is-invalid {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
    }

    .border-dashed {
        border: 2px dashed #dee2e6;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    /* Filter active state */
    .filter-active {
        background-color: #f8f9fa;
        border-left: 3px solid #ff69b4;
    }
</style>

<header class="page-header bg-dark-blue text-white py-5 position-relative overflow-hidden">
    <div class="header-pattern"></div>
    <div class="container position-relative z-2 py-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-bold display-5">Explore <span class="text-pink">Opportunities</span></h1>
                <p class="text-white-50 mb-0">Discover your next career move with professional insights.</p>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="input-group bg-white rounded-pill p-1 shadow-sm border">
                    <input type="text" id="jobSearchInput" class="form-control border-0 rounded-pill ps-3" placeholder="Search by title...">
                    <button class="btn btn-custom rounded-pill px-4 fw-bold" id="searchBtn">Search</button>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="vacancies-section py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="filters-sidebar bg-white p-4 rounded-4 shadow-sm border border-light sticky-top" style="top: 100px; z-index: 90;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0 text-dark-blue">Filters</h5>
                        <a href="javascript:void(0);" id="clearAllBtn" class="text-pink small fw-bold text-decoration-none">Clear All</a>
                    </div>

                    <div class="filter-group mb-4">
                        <label class="fw-bold mb-2 small text-uppercase text-muted ls-1">Employment Type</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="full-time" id="ft" data-filter="type">
                            <label class="form-check-label" for="ft">Full Time</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="part-time" id="pt" data-filter="type">
                            <label class="form-check-label" for="pt">Part Time</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="remote" id="rm" data-filter="type">
                            <label class="form-check-label" for="rm">Remote Work</label>
                        </div>
                    </div>

                    <hr class="my-4 opacity-25">

                    <div class="filter-group mb-4">
                        <label class="fw-bold mb-2 small text-uppercase text-muted ls-1">Expertise Level</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="entry" id="entry" data-filter="level">
                            <label class="form-check-label" for="entry">Entry / Graduate</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="mid" id="mid" data-filter="level">
                            <label class="form-check-label" for="mid">Intermediate</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="senior" id="senior" data-filter="level">
                            <label class="form-check-label" for="senior">Professional / Senior</label>
                        </div>
                    </div>

                    <hr class="my-4 opacity-25">

                    <div class="filter-group">
                        <label class="fw-bold mb-2 small text-uppercase text-muted ls-1">Expected Salary: $<span id="salaryValue">0</span>k+</label>
                        <input type="range" class="form-range" min="0" max="200" value="0" id="salaryRange">
                        <div class="d-flex justify-content-between x-small fw-bold text-muted mt-1">
                            <span>$0</span><span>$200k+</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row g-4" id="jobContainer">
                    @php use Illuminate\Support\Str; @endphp
                    @forelse($jobs as $job)
                        @php
                            $salaryText = $job->salary_from ? "PKR {$job->salary_from}" . ($job->salary_to ? " - {$job->salary_to}" : "") : "Salary negotiable";
                            $location = trim(($job->city ?? "") . ($job->country ? ", {$job->country}" : ""));

                            // Expertise logic for data-attribute
                            $exp = Str::lower($job->experience);
                            $level = "mid";
                            if(Str::contains($exp, ['entry', 'fresh', '0 years', '0'])) $level = "entry";
                            if(Str::contains($exp, ['senior', 'lead', '5', '5+'])) $level = "senior";

                            // Job type slug for filter
                            $jobTypeSlug = $job->job_type ? Str::slug($job->job_type) : 'full-time';
                        @endphp

                        <div class="col-md-6 job-card-item"
                             data-type="{{ $jobTypeSlug }}"
                             data-level="{{ $level }}">
                            <div class="job-grid-card bg-white p-4 rounded-4 border-0 shadow-sm position-relative"
                                 data-company="{{ $job->company_name }}"
                                 data-location="{{ $location ?: 'Location not specified' }}"
                                 data-desc="{{ strip_tags($job->description) }}"
                                 data-salary-text="{{ $salaryText }}"
                                 data-title="{{ $job->position }}"
                                 data-slug="{{ $job->slug }}">

                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="company-logo-sm bg-light rounded-3 p-2">
                                        <i class="fas fa-building text-primary fs-3"></i>
                                    </div>
                                    <button class="btn-save-job" title="Save Job" type="button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>

                                <h5 class="fw-bold text-dark-blue mb-1">{{ $job->position }}</h5>
                                <p class="text-muted small mb-3"><i class="fas fa-building me-1"></i> {{ $job->company_name }}</p>

                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    <span class="badge bg-light text-dark-blue border rounded-pill px-3">{{ $job->job_type ?? 'Full Time' }}</span>
                                    <span class="badge bg-light text-dark-blue border rounded-pill px-3">{{ $salaryText }}</span>
                                </div>

                                <div class="d-flex gap-2">
                                    <a href="{{ route('Home.jobs-details', ['job' => $job->slug]) }}" class="btn btn-outline-dark rounded-pill flex-grow-1 py-2 small fw-bold text-decoration-none text-center">
                                        Read More
                                    </a>
                                    <button class="btn btn-custom rounded-pill flex-grow-1 btn-apply-trigger py-2 small fw-bold" type="button">
                                        Apply Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center p-5">
                            <h5>No jobs found.</h5>
                        </div>
                    @endforelse
                </div>

                @if($jobs->hasPages())
                    <nav class="mt-5 d-flex justify-content-center">
                        {{ $jobs->links() }}
                    </nav>
                @endif
            </div>
        </div>
    </div>
</section>

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
                    <h2 id="modalJobTitle" class="fw-bold text-dark-blue mb-2">---</h2>
                    <h5 id="modalCompanyName" class="text-muted mb-4">---</h5>
                    <div class="d-flex gap-3 mb-4">
                        <div class="bg-white p-2 px-3 rounded-3 border shadow-sm">
                            <small class="text-muted d-block">Location</small>
                            <span id="modalLocation" class="fw-bold small">---</span>
                        </div>
                        <div class="bg-white p-2 px-3 rounded-3 border shadow-sm">
                            <small class="text-muted d-block">Compensation</small>
                            <span id="modalSalary" class="fw-bold small">---</span>
                        </div>
                    </div>
                    <h6 class="fw-bold text-dark-blue mb-2">Description</h6>
                    <p id="modalDesc" class="text-muted small lh-lg">---</p>
                </div>

                <div class="col-lg-7 p-4 p-md-5 bg-white">
                    <h3 class="fw-bold mb-4 text-dark-blue">Personal Details</h3>

                    <form id="applicationForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" id="jobIdField" value="">

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
            <p class="text-muted">Your application for <strong id="successJobName" class="text-pink"></strong> was successful.</p>
            <button class="btn btn-custom px-5 rounded-pill" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
$(document).ready(function() {
    let currentJobSlug = '';
    let currentJobTitle = '';

    // ============== APPLY NOW MODAL CODE ==============
    $(document).on('click', '.btn-apply-trigger', function() {
        const card = $(this).closest('.job-card-item').find('.job-grid-card');
        currentJobSlug = card.data('slug');
        currentJobTitle = card.data('title');

        $('#jobIdField').val(currentJobSlug);
        $('#modalJobTitle').text(card.data('title'));
        $('#modalCompanyName').text(card.data('company'));
        $('#modalLocation').text(card.data('location'));
        $('#modalSalary').text(card.data('salary-text'));
        $('#modalDesc').text(card.data('desc'));

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
            url: '/jobs/' + currentJobSlug,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Hide apply modal
                $('#applyModal').modal('hide');

                // Show success modal with job title
                $('#successJobName').text(currentJobTitle);
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

    // ============== FILTER CODE ==============
    function filterJobs() {
        // Get selected types
        let selectedTypes = [];
        $('input[data-filter="type"]:checked').each(function() {
            selectedTypes.push($(this).val());
        });

        // Get selected levels
        let selectedLevels = [];
        $('input[data-filter="level"]:checked').each(function() {
            selectedLevels.push($(this).val());
        });

        // Loop through each job card
        $('.job-card-item').each(function() {
            let $job = $(this);
            let jobType = $job.data('type');
            let jobLevel = $job.data('level');

            let typeMatch = selectedTypes.length === 0 || selectedTypes.includes(jobType);
            let levelMatch = selectedLevels.length === 0 || selectedLevels.includes(jobLevel);

            // Show/hide based on filters
            if (typeMatch && levelMatch) {
                $job.show();
            } else {
                $job.hide();
            }
        });

        // Show message if no jobs visible
        let visibleJobs = $('.job-card-item:visible').length;
        if (visibleJobs === 0) {
            if ($('#noJobsMessage').length === 0) {
                $('#jobContainer').append('<div id="noJobsMessage" class="col-12 text-center p-5"><h5>No jobs match your filters.</h5></div>');
            }
        } else {
            $('#noJobsMessage').remove();
        }
    }

    // Filter event listeners
    $('.filter-checkbox').on('change', filterJobs);

    $('#salaryRange').on('input', function() {
        $('#salaryValue').text($(this).val());
        // Salary filter can be implemented here if needed
    });

    // Clear all filters
    $('#clearAllBtn').on('click', function() {
        $('.filter-checkbox').prop('checked', false);
        $('#salaryRange').val(0);
        $('#salaryValue').text('0');
        filterJobs();
    });

    // Search functionality
    $('#searchBtn, #jobSearchInput').on('click keypress', function(e) {
        if (e.type === 'click' || (e.type === 'keypress' && e.which === 13)) {
            let searchTerm = $('#jobSearchInput').val().toLowerCase().trim();

            $('.job-card-item').each(function() {
                let $card = $(this).find('.job-grid-card');
                let title = $card.data('title').toLowerCase();
                let company = $card.data('company').toLowerCase();
                let location = $card.data('location').toLowerCase();

                if (title.includes(searchTerm) || company.includes(searchTerm) || location.includes(searchTerm) || searchTerm === '') {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
});
</script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let currentJobSlug = '';
    let currentJobTitle = '';

    // ============== 1. APPLY NOW MODAL & AJAX (Validation Included) ==============
    $(document).on('click', '.btn-apply-trigger', function() {
        const card = $(this).closest('.job-card-item').find('.job-grid-card');
        currentJobSlug = card.data('slug');
        currentJobTitle = card.data('title');

        $('#jobIdField').val(currentJobSlug);
        $('#modalJobTitle').text(card.data('title'));
        $('#modalCompanyName').text(card.data('company'));
        $('#modalLocation').text(card.data('location'));
        $('#modalSalary').text(card.data('salary-text'));
        $('#modalDesc').text(card.data('desc'));

        $('#applicationForm')[0].reset();
        $('.text-danger').hide();
        $('.form-control').removeClass('is-invalid');
        $('#fileNameDisplay').text('Click to Select Resume');
        $('#applyModal').modal('show');
    });

    $('#cvFile').on('change', function() {
        if(this.files.length > 0) $('#fileNameDisplay').text(this.files[0].name);
    });

    $('#applicationForm').on('submit', function(e) {
        e.preventDefault();
        $('.text-danger').hide();
        $('.form-control').removeClass('is-invalid');

        $('#submitBtn').prop('disabled', true);
        $('#loadingSpinner').show();
        $('#submitText').hide();

        let formData = new FormData(this);
        $.ajax({
            url: '/jobs/' + currentJobSlug,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#applyModal').modal('hide');
                $('#successJobName').text(currentJobTitle);
                $('#successModal').modal('show');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(field, messages) {
                        $(`.${field}_error`).text(messages[0]).show();
                        $(`[name="${field}"]`).addClass('is-invalid');
                    });
                } else { alert('Error occurred. Try again.'); }
            },
            complete: function() {
                $('#submitBtn').prop('disabled', false);
                $('#loadingSpinner').hide();
                $('#submitText').show();
            }
        });
    });

    // ============== 2. COMBINED SEARCH & FILTER LOGIC ==============
    function applyAllFilters() {
        let searchTerm = $('#jobSearchInput').val().toLowerCase().trim();

        let selectedTypes = [];
        $('input[data-filter="type"]:checked').each(function() { selectedTypes.push($(this).val()); });

        let selectedLevels = [];
        $('input[data-filter="level"]:checked').each(function() { selectedLevels.push($(this).val()); });

        let visibleCount = 0;

        $('.job-card-item').each(function() {
            let $jobCard = $(this);
            let $data = $jobCard.find('.job-grid-card');

            // Data from attributes
            let title = $data.data('title').toString().toLowerCase();
            let company = $data.data('company').toString().toLowerCase();
            let location = $data.data('location').toString().toLowerCase();
            let jobType = $jobCard.data('type');
            let jobLevel = $jobCard.data('level');

            // Logic Check
            let searchMatch = !searchTerm || (title.includes(searchTerm) || company.includes(searchTerm) || location.includes(searchTerm));
            let typeMatch = selectedTypes.length === 0 || selectedTypes.includes(jobType);
            let levelMatch = selectedLevels.length === 0 || selectedLevels.includes(jobLevel);

            if (searchMatch && typeMatch && levelMatch) {
                $jobCard.show();
                visibleCount++;
            } else {
                $jobCard.hide();
            }
        });

        // Toggle No Results Message
        $('#noSearchMessage').remove();
        if (visibleCount === 0) {
            $('#jobContainer').append('<div id="noSearchMessage" class="col-12 text-center p-5"><h5>No jobs found.</h5><p class="text-muted">Try changing your search or filters.</p></div>');
        }
    }

    // Search Events
    $('#searchBtn').on('click', applyAllFilters);
    $('#jobSearchInput').on('keyup', applyAllFilters); // Real-time search as you type

    // Filter Events
    $('.filter-checkbox').on('change', applyAllFilters);

    // Reset All
    $('#clearAllBtn').on('click', function() {
        $('#jobSearchInput').val('');
        $('.filter-checkbox').prop('checked', false);
        $('#salaryRange').val(0);
        $('#salaryValue').text('0');
        applyAllFilters();
    });

    // Helper for email
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
});
</script>
@endsection
