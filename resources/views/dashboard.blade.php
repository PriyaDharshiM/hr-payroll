<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Company Creation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('siteassets/css/style.css') }}">
    <style>
        .alert-custom {
            position: fixed;
            top: 80px;
            right: 20px;
            min-width: 300px;
            z-index: 9999;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Alert Messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show alert-custom" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show alert-custom" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show alert-custom" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>
            <strong>Validation Error!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- TOPBAR -->
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-white topbar-fixed"
        style="height:60px;">
        <div class="left-30">
            <i class="bi bi-list mobile-toggle d-none" aria-hidden="true"></i>
            <div>
                <h4 class="logo-title">PAYAASAAN</h4>
                <p class="logo-sub d-flex text-center">Powered By<br>Thathwam Technologies</p>
            </div>
        </div>

        <div class="right-70 d-flex align-items-center justify-content-between" style="width:80%;padding:0px 10px;">
            <div class="breadcrumb-area">
                <span class="fw-semibold mas">Master</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="mas semibold">Create Company</span>
            </div>

            <div class="d-flex align-items-center gap-4">
                <div class="search-box position-relative" style="width:350px;">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="What are you looking for ?">
                </div>
                <i class="bi bi-bell bell-icon" style="font-size:20px; cursor:pointer;"></i>
                <div class="dropdown">
                    <div class="profile-group" data-bs-toggle="dropdown">
                        <img src="{{ asset('siteassets/img/user.png') }}" class="profile-img" alt="">
                        <span class="username-text">Peter Griffin</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-key"></i> Change Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item logout" href="#"><i class="bi bi-box-arrow-right"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="sidebarOverlay" class="overlay" aria-hidden="true"></div>

    <div style="display:flex; min-height: calc(100vh - 60px);">
        @include('partials.sidebar')

        <main class="content-area bg-white">
            <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data" id="companyForm">
                @csrf
                <input type="hidden" name="status" id="formStatus" value="Saved">

                <!-- Agreement Type Selection -->
                <div class="mb-4 d-flex gap-4 align-items-center">
                    <label class="d-flex align-items-center gap-2">
                        <input type="radio" name="agreement_type" value="company" id="companyAgreement"
                            {{ old('agreement_type', 'company') === 'company' ? 'checked' : '' }}
                            onchange="toggleAgreementSections()">
                        <span class="mas">Company wise Agreement</span>
                    </label>
                    <label class="d-flex align-items-center gap-2">
                        <input type="radio" name="agreement_type" value="legal" id="legalAgreement"
                            {{ old('agreement_type') === 'legal' ? 'checked' : '' }}
                            onchange="toggleAgreementSections()">
                        <span class="mas">Legal Entity wise Agreement</span>
                    </label>
                </div>

                <!-- Basic Details -->
                <div class="card p-0 cardborder">
                    <div class="cardheader">Basic Details</div>
                    <div class="p-4">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="company_name"
                                    value="{{ old('company_name') }}" placeholder="Enter Company Name" required
                                    oninput="autoCapitalizeCompanyName(this)" onblur="validateCompanyName(this)">
                                <small class="text-danger d-block mt-1" id="company_name_error"></small>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Company Short Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="company_short_name"
                                    value="{{ old('company_short_name') }}" placeholder="Enter Company Short Name"
                                    required>
                                <!-- No client validation as requested -->
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Reference No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="reference_no"
                                    value="{{ old('reference_no') }}" placeholder="1-10 alphanumeric chars" required
                                    maxlength="10" onblur="validateReferenceNo(this)">
                                <small class="text-danger d-block mt-1" id="reference_no_error"></small>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Address 1</label>
                                <textarea class="form-control" rows="2" name="address1" placeholder="Enter Address">{{ old('address1') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address 2</label>
                                <textarea class="form-control" rows="2" name="address2" placeholder="Enter Address">{{ old('address2') }}</textarea>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <select class="form-select" name="state" required
                                    onchange="this.value || showError('state_error', 'Please select a state')">
                                    <option value="">Select State</option>
                                    <option value="Tamil Nadu" {{ old('state') == 'Tamil Nadu' ? 'selected' : '' }}>
                                        Tamil Nadu</option>
                                    <option value="Kerala" {{ old('state') == 'Kerala' ? 'selected' : '' }}>Kerala
                                    </option>
                                    <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>
                                        Karnataka</option>
                                </select>
                                <small class="text-danger d-block mt-1" id="state_error"></small>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <select class="form-select" name="city" required
                                    onchange="this.value || showError('city_error', 'Please select a city')">
                                    <option value="">Select City</option>
                                    <option value="Madurai" {{ old('city') == 'Madurai' ? 'selected' : '' }}>Madurai
                                    </option>
                                    <option value="Chennai" {{ old('city') == 'Chennai' ? 'selected' : '' }}>Chennai
                                    </option>
                                    <option value="Coimbatore" {{ old('city') == 'Coimbatore' ? 'selected' : '' }}>
                                        Coimbatore</option>
                                </select>
                                <small class="text-danger d-block mt-1" id="city_error"></small>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Pincode <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pincode"
                                    value="{{ old('pincode') }}" placeholder="Enter Pincode" required maxlength="6"
                                    onblur="validatePincode(this)">
                                <small class="text-danger d-block mt-1" id="pincode_error"></small>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Contact Person <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="contact_person"
                                    value="{{ old('contact_person') }}" placeholder="Enter Contact Person" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mobile_number"
                                    value="{{ old('mobile_number') }}" placeholder="Enter Mobile Number" required
                                    maxlength="10" onblur="validateMobile(this)">
                                <small class="text-danger d-block mt-1" id="mobile_error"></small>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Telephone Number</label>
                                <input type="text" class="form-control" name="telephone_number"
                                    value="{{ old('telephone_number') }}" placeholder="Enter Telephone Number">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" placeholder="Enter Email" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Company URL</label>
                                <input type="url" class="form-control" name="companyurl"
                                    value="{{ old('companyurl') }}" placeholder="https://example.com">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Company Logo</label>
                                <div
                                    style="border:2px dashed #3b82f6; background:#eef4ff; padding:20px; text-align:center; border-radius:12px;">
                                    <p class="mb-2" style="font-size:12px; color:#444;">Drag & Drop Files or</p>
                                    <input type="file" name="company_logo" id="companyLogo" hidden
                                        accept=".jpeg,.jpg,.png,.pdf">
                                    <button type="button" class="btn btn-primary px-3 py-1" style="font-size:11px;"
                                        onclick="document.getElementById('companyLogo').click()">
                                        <i class="bi bi-upload"></i> Browse
                                    </button>
                                    <p class="mt-2" style="font-size:11px; color:#6b7280;">Supported: JPEG, PNG, PDF
                                        (Max: 2MB)</p>
                                    <span id="logoFileName" class="text-primary" style="font-size:11px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Section -->
                <div class="card p-0 mt-4 mb-4 cardborder">
                    <div class="d-flex justify-content-between align-items-center px-3 py-3 cardheader">
                        <h6 class="m-0 fw-semibold">Registration Details</h6>
                        <button type="button" class="btn btn-primary d-flex align-items-center gap-2"
                            style="font-size:14px;" onclick="addRegistrationRow()">
                            <i class="bi bi-plus-square"></i> Add Registration
                        </button>
                    </div>
                    <div class="p-4">
                        <div id="registrationContainer">
                            <div class="row g-4 registration-row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Registration Type</label>
                                    <select class="form-select" name="registration_type[]">
                                        <option value="">Select Type</option>
                                        <option value="GST">GST</option>
                                        <option value="CIN">CIN</option>
                                        <option value="PAN">PAN</option>
                                        <option value="TAN">TAN</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Registration No</label>
                                    <input type="text" class="form-control" name="registration_no[]"
                                        placeholder="Enter Registration No">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Attachment</label>
                                    <input type="file" class="form-control" name="registration_attachment[]"
                                        accept=".jpg,.jpeg,.png,.pdf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agreement Section -->
                <div class="card p-0 mb-4 cardborder" id="agreementSection">
                    <div class="cardheader">Agreement Details</div>
                    <div class="p-4">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <label class="form-label">Agreement Reference No</label>
                                <input type="text" class="form-control" name="agreement_ref_no"
                                    value="{{ old('agreement_ref_no') }}" placeholder="1-10 digits" maxlength="10"
                                    onblur="validateAgreementRef(this)">
                                <small class="text-danger d-block mt-1" id="agreement_ref_no_error"></small>
                            </div>
                            <!-- Other agreement fields remain same -->
                            <div class="col-md-4">
                                <label class="form-label">Agreement Name</label>
                                <input type="text" class="form-control" name="agreement_name" maxlength="50"
                                    value="{{ old('agreement_name') }}" placeholder="Enter Agreement Name">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Nature of Agreement</label>
                                <select class="form-select" name="nature_of_agreement">
                                    <option value="">Select</option>
                                    <option value="Service Agreement">Service Agreement</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Mode of Document</label>
                                <input type="text" class="form-control" name="mode_of_document"
                                    value="{{ old('mode_of_document') }}" placeholder="Enter Mode">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">No. of Legal Entity</label>
                                <input type="number" class="form-control" name="no_of_legalentity" min="0"
                                    value="{{ old('no_of_legalentity') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Agreement Date</label>
                                <input type="date" class="form-control" name="agreement_date"
                                    value="{{ old('agreement_date') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Agreement Type</label>
                                <select class="form-select" name="agreement_type_dropdown">
                                    <option value="">Select</option>
                                    <option value="Annual">Annual</option>
                                    <option value="Multi-Year">Multi-Year</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Vertical</label>
                                <select class="form-select" name="vertical">
                                    <option value="">Select</option>
                                    <option value="IT">IT</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Effective From</label>
                                <input type="date" class="form-control" name="effective_from"
                                    value="{{ old('effective_from') }}" id="effective_from"
                                    onchange="validateDates(); updateEffectiveToMin()">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Effective To</label>
                                <input type="date" class="form-control" name="effective_to"
                                    value="{{ old('effective_to') }}" id="effective_to"
                                    onchange="validateDates(); autoFillRenewal(); updateEffectiveToMin()">
                                <small class="text-danger d-block mt-1" id="effective_to_error"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Renewal Due On</label>
                                <input type="date" class="form-control" name="renewal_due_on"
                                    value="{{ old('renewal_due_on') }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scope Section remains unchanged -->
                <div class="card p-0 mb-5 cardborder" id="scopeSection">
                    <div class="cardheader">Scope Details</div>
                    <div class="p-4">
                        <div class="row g-4">
                            <div class="col-md-3">
                                <label class="form-label">Domain Name</label>
                                <select class="form-select" name="domain_name">
                                    <option value="">Select</option>
                                    <option value="HR">HR</option>
                                    <option value="Finance">Finance</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Type of Organization</label>
                                <select class="form-select" name="type_of_organization">
                                    <option value="">Select</option>
                                    <option value="Private Limited">Private Limited</option>
                                    <option value="Public Limited">Public Limited</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">State</label>
                                <select class="form-select" name="scope_state">
                                    <option value="">Select</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Kerala">Kerala</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Act</label>
                                <select class="form-select" name="act">
                                    <option value="">Select</option>
                                    <option value="Labour Act">Labour Act</option>
                                    <option value="Companies Act">Companies Act</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                    <button type="button" class="btn btn-outline-secondary px-4" onclick="window.location.reload()">
                        <i class="bi bi-x-circle"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-outline-primary px-4" id="draftBtn"
                        onclick="document.getElementById('formStatus').value='Draft'">
                        <i class="bi bi-save"></i> Save Draft
                    </button>
                    <button type="submit" class="btn btn-primary px-4" id="submitBtn"
                        onclick="document.getElementById('formStatus').value='Saved'">
                        <i class="bi bi-check-circle"></i> Submit
                    </button>
                </div>
            </form>
            <div class="card p-0 mt-4 cardborder" id="company-list-table">
                <!-- Header -->
                <div class="cardheader">
                    Company List
                </div>

                <!-- Body -->
                <div class="p-4">
                    <!-- Search Bar -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="position-relative" style="width:260px;">
                            <form method="GET" action="{{ route('createcompany') }}" id="searchForm">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Search by Company...."
                                    value="{{ request('search') }}">
                                <i class="bi bi-search position-absolute"
                                    style="right:12px; top:50%; transform:translateY(-50%); font-size:14px; pointer-events:none;"></i>
                            </form>
                        </div>
                        <button type="submit" form="searchForm" class="btn btn-primary px-3">Go</button>

                        @if (request('search'))
                            <a href="{{ route('createcompany') }}" class="btn btn-outline-secondary px-3">Clear</a>
                        @endif
                    </div>

                    <!-- TABLE -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 custom-table">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>Company Name</th>
                                    <th>Company Short Name</th>
                                    <th>Contact Person</th>
                                    <th>Mobile Number</th>
                                    <th>Company URL</th>
                                    <th class="text-center" style="width:140px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                    <tr>
                                        <td>{{ $loop->iteration + ($companies->currentPage() - 1) * $companies->perPage() }}
                                        </td>
                                        <td>{{ $company->company_name ?? '-' }}</td>
                                        <td>{{ $company->company_short_name ?? '-' }}</td>
                                        <td>{{ $company->contact_person ?? '-' }}</td>
                                        <td>{{ $company->mobile_number ?? '-' }}</td>
                                        <td>
                                            @php
                                                $url = $company->companyurl ?? ($company->company_url ?? null);
                                            @endphp
                                            @if ($url)
                                                <a href="{{ $url }}" target="_blank"
                                                    class="text-primary text-decoration-underline">
                                                    {{ Str::limit($url, 40) }}
                                                </a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <!-- Edit Icon -->
                                            <a href="{{ route('company.edit', $company->company_id) }}"
                                                class="text-primary me-3 icon-bold" title="Edit">
                                                <i class="bi bi-pencil-square fs-5"></i>
                                            </a>

                                            <!-- View Icon -->
                                            <a href=""
                                                class="text-primary me-3 icon-bold" title="View Details">
                                                <i class="bi bi-eye fs-5"></i>
                                            </a>

                                            <!-- Download Icon -->
                                            <a href=""
                                                class="text-primary icon-bold" title="Download">
                                                <i class="bi bi-download fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-4">
                                            <strong>No companies found.</strong><br>
                                            @if (request('search'))
                                                No results for "<em>{{ request('search') }}</em>".
                                                <a href="{{ route('createcompany') }}">Clear search</a>
                                            @else
                                                There are currently no companies in the system.
                                            @endif
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- FOOTER + PAGINATION -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">
                        <span class="text-muted mb-2 mb-md-0" style="font-size:13px;">
                            A total of {{ $companies->total() }} data
                        </span>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <nav>
                                {{ $companies->appends(request()->query())->links('pagination::bootstrap-5') }}
                            </nav>

                            <select class="form-select form-select-sm" style="width:140px;"
                                onchange="window.location.href = this.value">
                                @foreach ([10, 20, 50, 100] as $limit)
                                    <option value="{{ request()->fullUrlWithQuery(['per_page' => $limit]) }}"
                                        {{ request('per_page', 10) == $limit ? 'selected' : '' }}>
                                        {{ $limit }} Items/Page
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Reliable Auto-Scroll Script --}}
            @if (request('search') || request('page'))
                <script>
                    // Wait for full page load including images and dynamic content
                    window.addEventListener('load', function() {
                        const element = document.getElementById('company-list-table');
                        if (element) {
                            element.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                            // Adjust for fixed navbar (change -100 to match your navbar height)
                            setTimeout(() => {
                                window.scrollBy(0, -100);
                            }, 600); // Small delay to ensure smooth scroll completes first
                        }
                    });
                </script>
            @endif
        </main>


    </div>

    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto capitalize company name (Title Case)
        function autoCapitalizeCompanyName(input) {
            let words = input.value.split(' ');
            words = words.map(word => {
                if (word.length > 0) {
                    return word[0].toUpperCase() + word.slice(1).toLowerCase();
                }
                return word;
            });
            input.value = words.join(' ');
        }

        // Validate company name format on blur
        function validateCompanyName(input) {
            const regex = /^([A-Z][a-z]+)(\s[A-Z][a-z]+)*$/;
            const error = document.getElementById('company_name_error');
            if (input.value && !regex.test(input.value)) {
                error.textContent = 'Each word must start with a capital letter';
            } else {
                error.textContent = '';
            }
        }

        // Reference No: 1-10 alphanumeric
        function validateReferenceNo(input) {
            const error = document.getElementById('reference_no_error');
            const val = input.value.trim();
            if (val && (val.length < 1 || val.length > 10 || !/^[a-zA-Z0-9]+$/.test(val))) {
                error.textContent = 'Must be 1-10 alphanumeric characters';
            } else {
                error.textContent = '';
            }
        }

        // Pincode: exactly 6 digits
        function validatePincode(input) {
            const error = document.getElementById('pincode_error');
            if (input.value && !/^\d{6}$/.test(input.value)) {
                error.textContent = 'Pincode must be exactly 6 digits';
            } else {
                error.textContent = '';
            }
        }

        // Mobile: exactly 10 digits
        function validateMobile(input) {
            const error = document.getElementById('mobile_error');
            if (input.value && !/^\d{10}$/.test(input.value)) {
                error.textContent = 'Mobile must be exactly 10 digits';
            } else {
                error.textContent = '';
            }
        }

        // Agreement Ref No: 1-10 digits
        function validateAgreementRef(input) {
            const error = document.getElementById('agreement_ref_no_error');
            const val = input.value.trim();
            if (val && (val.length > 10 || !/^\d+$/.test(val))) {
                error.textContent = 'Must be 1 to 10 digits only';
            } else {
                error.textContent = '';
            }
        }

        // Effective dates validation
        function updateEffectiveToMin() {
            const fromDate = document.getElementById('effective_from').value;
            const toDateInput = document.getElementById('effective_to');

            if (fromDate) {
                toDateInput.min = fromDate; // Locks previous dates

                // If current Effective To is now invalid (before Effective From), clear or adjust it
                if (toDateInput.value && toDateInput.value < fromDate) {
                    toDateInput.value = fromDate; // Auto-set to Effective From if invalid
                    autoFillRenewal(); // Also update Renewal Due On
                }
            } else {
                toDateInput.min = ''; // Remove restriction if no Effective From
            }

            validateDates(); // Re-validate
        }

        // Keep your existing validateDates function
        function validateDates() {
            const from = document.getElementById('effective_from');
            const to = document.getElementById('effective_to');
            const error = document.getElementById('effective_to_error');

            if (from.value && to.value && to.value < from.value) {
                error.textContent = 'Effective To cannot be before Effective From';
            } else {
                error.textContent = '';
            }
        }

        // Auto-fill Renewal Due On
        function autoFillRenewal() {
            const to = document.getElementById('effective_to');
            const renewal = document.querySelector('[name="renewal_due_on"]');
            if (to.value) {
                renewal.value = to.value;
            }
        }

        // Run on page load to handle old() values
        document.addEventListener('DOMContentLoaded', function() {
            updateEffectiveToMin();
            validateDates();
            autoFillRenewal();
        });

        // Toggle agreement & scope sections
        function toggleAgreementSections() {
            const isCompany = document.getElementById('companyAgreement').checked;
            document.getElementById('agreementSection').style.display = isCompany ? 'block' : 'none';
            document.getElementById('scopeSection').style.display = isCompany ? 'block' : 'none';
        }

        // Initialize on load
        document.addEventListener('DOMContentLoaded', function() {
            toggleAgreementSections();
            autoFillRenewal(); // in case old value exists
        });
    </script>
    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);

        // Logo file name display
        document.getElementById('companyLogo').addEventListener('change', function() {
            const fileName = this.files[0]?.name || '';
            document.getElementById('logoFileName').textContent = fileName ? `Selected: ${fileName}` : '';
        });

        // Form status handling
        document.getElementById('draftBtn').addEventListener('click', function() {
            document.getElementById('formStatus').value = 'Draft';
        });

        document.getElementById('submitBtn').addEventListener('click', function() {
            document.getElementById('formStatus').value = 'Saved';
        });

        // Toggle Agreement and Scope sections
        function toggleSections() {
            const companyType = document.getElementById('companyAgreement').checked;
            const agreementSection = document.getElementById('agreementSection');
            const scopeSection = document.getElementById('scopeSection');

            if (companyType) {
                agreementSection.style.display = '';
                scopeSection.style.display = '';
            } else {
                agreementSection.style.display = 'none';
                scopeSection.style.display = 'none';
            }
        }

        // Initialize sections on load
        document.addEventListener('DOMContentLoaded', toggleSections);
        document.getElementById('companyAgreement').addEventListener('change', toggleSections);
        document.getElementById('legalAgreement').addEventListener('change', toggleSections);

        // Add registration row dynamically
        let regIndex = 1;

        function addRegistrationRow() {
            const container = document.getElementById('registrationContainer');
            const row = document.createElement('div');
            row.className = 'row g-4 registration-row mb-3';
            row.innerHTML = `
                <div class="col-md-4">
                    <select class="form-select" name="registration_type[]">
                        <option value="">Select Type</option>
                        <option value="GST">GST</option>
                        <option value="CIN">CIN</option>
                        <option value="PAN">PAN</option>
                        <option value="TAN">TAN</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="registration_no[]" placeholder="Enter Registration No">
                </div>
                <div class="col-md-3">
                    <input type="file" class="form-control" name="registration_attachment[]" accept=".jpg,.jpeg,.png,.pdf">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger w-100" onclick="this.closest('.registration-row').remove()">
                        <i class="bi bi-trash"></i> Remove
                    </button>
                </div>
            `;
            container.appendChild(row);
            regIndex++;
        }

        // Sidebar toggle logic
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        document.addEventListener('click', (e) => {
            const toggle = e.target.closest('.mobile-toggle');
            if (toggle) {
                const isClosed = sidebar.classList.contains('closed');
                if (isClosed) {
                    sidebar.classList.remove('closed');
                    overlay.classList.add('show');
                } else {
                    sidebar.classList.add('closed');
                    overlay.classList.remove('show');
                }
            }

            if (e.target === overlay) {
                sidebar.classList.add('closed');
                overlay.classList.remove('show');
            }
        });

        function setSidebarStateOnLoad() {
            if (window.matchMedia('(max-width: 768px)').matches) {
                sidebar.classList.add('closed');
                overlay.classList.remove('show');
            } else {
                sidebar.classList.remove('closed');
                overlay.classList.remove('show');
            }
        }

        setSidebarStateOnLoad();
        window.addEventListener('resize', setSidebarStateOnLoad);
    </script>
</body>

</html>
