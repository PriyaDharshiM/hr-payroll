<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Legal Entity Creation</title>
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
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-custom" role="alert">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show alert-custom" role="alert">
        <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show alert-custom" role="alert">
        <i class="bi bi-exclamation-triangle me-2"></i>
        <strong>Validation Error!</strong>
        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
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
                <span class="mas semibold">Create Legal Entity</span>
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
                        <li><a class="dropdown-item logout" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="sidebarOverlay" class="overlay" aria-hidden="true"></div>

    <div style="display:flex; min-height: calc(100vh - 60px);">
        @include('partials.sidebar')

       <main class="content-area bg-white">
    <form method="POST" action="{{ route('legalentity.store') }}" enctype="multipart/form-data" id="legalForm">
        @csrf
        <input type="hidden" name="status" id="formStatus" value="Saved">

        <!-- Company Dropdown -->
      <div class="mb-4">
    <label class="form-label">Select Company <span class="text-danger">*</span></label>
    <select class="form-select" name="company_id" id="companySelect" required onchange="handleCompanyChange(this)">
        <option value="">Select Company</option>
        @foreach($companies as $comp)
            <option value="{{ $comp->company_id }}" 
                    {{ old('company_id') == $comp->company_id ? 'selected' : '' }}>
                {{ $comp->company_name }}
            </option>
        @endforeach
    </select>

    <!-- Feedback message area -->
    <div id="companyFeedback" class="mt-3"></div>
</div>

        <!-- Agreement Type Selection -->
        <div class="mb-4 d-flex gap-4 align-items-center">
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="type" value="company" id="companyAgreement"
                       {{ old('type') === 'company' ? 'checked' : '' }}>
                <span class="mas">Company wise Agreement</span>
            </label>
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="type" value="legal" id="legalAgreement"
                       {{ old('type') === 'legal' ? 'checked' : '' }}>
                <span class="mas">Legal Entity wise Agreement</span>
            </label>
        </div>

        <!-- Basic Details -->
        <div class="card p-0 cardborder">
            <div class="cardheader">Basic Details</div>
            <div class="p-4">
                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label">Legal Entity Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="legalentity_name"
                               value="{{ old('legalentity_name') }}" placeholder="Enter Legal Entity Name" required
                               oninput="autoCapitalizeLegalName(this)" onblur="validateLegalEntityName(this)">
                        <small class="text-danger d-block mt-1" id="legalentity_name_error"></small>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Legal Entity Short Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="legalentity_short_name"
                               value="{{ old('legalentity_short_name') }}" placeholder="Enter Short Name" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Reference No <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="reference_no"
                               value="{{ old('reference_no') }}" placeholder="1-10 alphanumeric" required maxlength="10"
                               onblur="validateReferenceNo(this)">
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
                        <select class="form-select" name="state" required>
                            <option value="">Select State</option>
                            <option value="Tamil Nadu" {{ old('state') == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                            <option value="Kerala" {{ old('state') == 'Kerala' ? 'selected' : '' }}>Kerala</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">City <span class="text-danger">*</span></label>
                        <select class="form-select" name="city" required>
                            <option value="">Select City</option>
                            <option value="Madurai" {{ old('city') == 'Madurai' ? 'selected' : '' }}>Madurai</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Pincode <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="pincode" value="{{ old('pincode') }}"
                               placeholder="Enter Pincode" required maxlength="6" onblur="validatePincode(this)">
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
                               value="{{ old('mobile_number') }}" placeholder="Enter Mobile Number" required maxlength="10"
                               onblur="validateMobile(this)">
                        <small class="text-danger d-block mt-1" id="mobile_error"></small>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Telephone Number</label>
                        <input type="text" class="form-control" name="telephone_number"
                               value="{{ old('telephone_number') }}" placeholder="Enter Telephone Number">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                               placeholder="Enter Email" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">URL</label>
                        <input type="url" class="form-control" name="legalentity_url"
                               value="{{ old('legalentity_url') }}" placeholder="https://example.com">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Legal Entity Logo</label>
                        <div style="border:2px dashed #3b82f6; background:#eef4ff; padding:20px; text-align:center; border-radius:12px;">
                            <p class="mb-2" style="font-size:12px; color:#444;">Drag & Drop Files or</p>
                            <input type="file" name="legalentity_logo" id="legalLogo" hidden accept="image/*">
                            <button type="button" class="btn btn-primary px-3 py-1" style="font-size:11px;"
                                    onclick="document.getElementById('legalLogo').click()">
                                <i class="bi bi-upload"></i> Browse
                            </button>
                            <p class="mt-2" style="font-size:11px; color:#6b7280;">Supported: JPEG, PNG, WebP (Max: 2MB)</p>
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
                            <input type="text" class="form-control" name="registration_no[]" placeholder="Enter Registration No">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Attachment</label>
                            <input type="file" class="form-control" name="registration_attachment[]" accept=".jpg,.jpeg,.png,.pdf">
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
                        <input type="text" class="form-control" name="agreement_ref_no" id="agreement_ref_no"
                               value="{{ old('agreement_ref_no') }}" placeholder="1-10 digits" maxlength="10"
                               onblur="validateAgreementRef(this)">
                        <small class="text-danger d-block mt-1" id="agreement_ref_no_error"></small>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Agreement Name</label>
                        <input type="text" class="form-control" name="agreement_name" id="agreement_name"
                               value="{{ old('agreement_name') }}" placeholder="Enter Agreement Name">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Nature of Agreement</label>
                        <select class="form-select" name="nature_of_agreement" id="nature_of_agreement">
                            <option value="">Select</option>
                            <option value="Service Agreement">Service Agreement</option>
                            <option value="Contract">Contract</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Mode of Document</label>
                        <input type="text" class="form-control" name="mode_of_document" id="mode_of_document"
                               value="{{ old('mode_of_document') }}" placeholder="Enter Mode">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">No. of Legal Entity</label>
                        <input type="number" class="form-control" name="no_of_legalentity" id="no_of_legalentity"
                               value="{{ old('no_of_legalentity') }}" placeholder="Enter Number" min="0">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Agreement Date</label>
                        <input type="date" class="form-control" name="agreement_date" id="agreement_date"
                               value="{{ old('agreement_date') }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Agreement Type</label>
                        <select class="form-select" name="agreement_type" id="agreement_type">
                            <option value="">Select</option>
                            <option value="Annual">Annual</option>
                            <option value="Multi-Year">Multi-Year</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Vertical</label>
                        <select class="form-select" name="vertical" id="vertical">
                            <option value="">Select</option>
                            <option value="IT">IT</option>
                            <option value="Manufacturing">Manufacturing</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Effective From</label>
                        <input type="date" class="form-control" name="effective_from" id="effective_from"
                               value="{{ old('effective_from') }}" onchange="updateEffectiveToMin()">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Effective To</label>
                        <input type="date" class="form-control" name="effective_to" id="effective_to"
                               value="{{ old('effective_to') }}" onchange="validateDates(); autoFillRenewal()">
                        <small class="text-danger d-block mt-1" id="effective_to_error"></small>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Renewal Due On</label>
                        <input type="date" class="form-control" name="renewal_due_on" id="renewal_due_on"
                               value="{{ old('renewal_due_on') }}" readonly>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scope Section -->
        <div class="card p-0 mb-5 cardborder" id="scopeSection">
            <div class="cardheader">Scope Details</div>
            <div class="p-4">
                <div class="row g-4">
                    <div class="col-md-3">
                        <label class="form-label">Domain Name</label>
                        <select class="form-select" name="domain_name" id="domain_name">
                            <option value="">Select</option>
                            <option value="HR">HR</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Type of Organization</label>
                        <select class="form-select" name="type_of_organization" id="type_of_organization">
                            <option value="">Select</option>
                            <option value="Private Limited">Private Limited</option>
                            <option value="Public Limited">Public Limited</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">State</label>
                        <select class="form-select" name="scope_state" id="scope_state">
                            <option value="">Select</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Kerala">Kerala</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Act</label>
                        <select class="form-select" name="act" id="act">
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
            <button type="submit" class="btn btn-outline-primary px-4" id="draftBtn">
                <i class="bi bi-save"></i> Save Draft
            </button>
            <button type="submit" class="btn btn-primary px-4" id="submitBtn">
                <i class="bi bi-check-circle"></i> Submit
            </button>
        </div>
    </form>
    <div class="card mt-4 cardborder">
    <div class="cardheader">Existing Legal Entities</div>
    <div class="p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-sm align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Legal Entity ID</th>
                        <th>Name</th>
                        <th>Short Name</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="legalEntityTable">
                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            Select a company to view legal entities
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</main>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

    function autoCapitalizeLegalName(input) {
        let words = input.value.split(' ');
        words = words.map(word => word ? word[0].toUpperCase() + word.slice(1).toLowerCase() : word);
        input.value = words.join(' ');
    }

    function validateLegalEntityName(input) {
        const regex = /^([A-Z][a-z]+)(\s[A-Z][a-z]+)*$/;
        const error = document.getElementById('legalentity_name_error');
        if (input.value.trim() && !regex.test(input.value.trim())) {
            error.textContent = 'Each word must start with a capital letter';
        } else {
            error.textContent = '';
        }
    }

    function validateReferenceNo(input) {
        const error = document.getElementById('reference_no_error');
        const val = input.value.trim();
        if (val && (val.length > 10 || !/^[a-zA-Z0-9]+$/.test(val))) {
            error.textContent = 'Must be 1-10 alphanumeric characters';
        } else {
            error.textContent = '';
        }
    }

    function validatePincode(input) {
        const error = document.getElementById('pincode_error');
        if (input.value && !/^\d{6}$/.test(input.value)) {
            error.textContent = 'Pincode must be exactly 6 digits';
        } else {
            error.textContent = '';
        }
    }

    function validateMobile(input) {
        const error = document.getElementById('mobile_error');
        if (input.value && !/^\d{10}$/.test(input.value)) {
            error.textContent = 'Mobile must be exactly 10 digits';
        } else {
            error.textContent = '';
        }
    }

    function validateAgreementRef(input) {
        const error = document.getElementById('agreement_ref_no_error');
        const val = input.value.trim();
        if (val && (val.length > 10 || !/^\d+$/.test(val))) {
            error.textContent = 'Must be 1 to 10 digits only';
        } else {
            error.textContent = '';
        }
    }

    function updateEffectiveToMin() {
        const from = document.getElementById('effective_from');
        const to = document.getElementById('effective_to');
        if (from && to) {
            if (from.value) {
                to.min = from.value;
                if (to.value && to.value < from.value) {
                    to.value = from.value;
                    autoFillRenewal();
                }
            } else {
                to.min = '';
            }
            validateDates();
        }
    }

    function validateDates() {
        const from = document.getElementById('effective_from');
        const to = document.getElementById('effective_to');
        const error = document.getElementById('effective_to_error');
        if (from && to && error) {
            if (from.value && to.value && to.value < from.value) {
                error.textContent = 'Effective To cannot be before Effective From';
            } else {
                error.textContent = '';
            }
        }
    }

    function autoFillRenewal() {
        const to = document.getElementById('effective_to');
        const renewal = document.getElementById('renewal_due_on');
        if (to && renewal && to.value) {
            renewal.value = to.value;
        }
    }

    // Initialize validations on load
    document.addEventListener('DOMContentLoaded', function () {
        updateEffectiveToMin();
        autoFillRenewal();
    });
</script>
    <script>
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);

        document.getElementById('legalLogo').addEventListener('change', function () {
            const fileName = this.files[0]?.name || '';
            document.getElementById('logoFileName').textContent = fileName ? `Selected: ${fileName}` : '';
        });

        // Form status (same)
        document.getElementById('draftBtn').addEventListener('click', function () {
            document.getElementById('formStatus').value = 'Draft';
        });
        document.getElementById('submitBtn').addEventListener('click', function () {
            document.getElementById('formStatus').value = 'Saved';
        });

        // Add registration row (same as company)

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

        // Fetch company data on select change
        document.getElementById('companySelect').addEventListener('change', function () {
            const companyId = this.value;
            if (!companyId) return;
            loadLegalEntities(companyId);

            fetch(`/get-company/${companyId}`)
                .then(response => response.json())
                .then(data => {
                    // Set radio based on type
                    if (data.type === 'company') {
                        document.getElementById('companyAgreement').checked = true;
                        fillAgreementScope(data, true); // fill and disable
                    } else {
                        document.getElementById('legalAgreement').checked = true;
                        fillAgreementScope({}, false); // clear and enable
                    }
                })
                .catch(error => console.error('Error fetching company:', error));
        });

        function fillAgreementScope(data, disable) {
            // Agreement fields
            document.getElementById('agreement_ref_no').value = data.agreement_ref_no || '';
            document.getElementById('agreement_name').value = data.agreement_name || '';
            document.getElementById('nature_of_agreement').value = data.nature_of_agreement || '';
            document.getElementById('mode_of_document').value = data.mode_of_document || '';
            document.getElementById('no_of_legalentity').value = data.no_of_legalentity || '';
            document.getElementById('agreement_date').value = data.agreement_date || '';
            document.getElementById('agreement_type').value = data.agreement_type || '';
            document.getElementById('vertical').value = data.vertical || '';
            document.getElementById('effective_from').value = data.effective_from || '';
            document.getElementById('effective_to').value = data.effective_to || '';
            document.getElementById('renewal_due_on').value = data.renewal_due_on || '';

            // Scope fields
            document.getElementById('domain_name').value = data.domain_name || '';
            document.getElementById('type_of_organization').value = data.type_of_organization || '';
            document.getElementById('scope_state').value = data.scope_state || '';
            document.getElementById('act').value = data.act || '';

            // Disable or enable
            const agreementInputs = document.querySelectorAll('#agreementSection input, #agreementSection select');
            const scopeInputs = document.querySelectorAll('#scopeSection input, #scopeSection select');
            [...agreementInputs, ...scopeInputs].forEach(input => {
                input.disabled = disable;
            });
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
    <script>
    function handleCompanyChange(select) {
        const companyId = select.value;
        const feedbackDiv = document.getElementById('companyFeedback');
        const submitBtn = document.getElementById('submitBtn');
        const draftBtn = document.getElementById('draftBtn');

        // Clear previous message and enable buttons
        feedbackDiv.innerHTML = '';
        submitBtn.disabled = false;
        draftBtn.disabled = false;

        if (!companyId) {
            return;
        }

        // Show checking message
        feedbackDiv.innerHTML = `
            <div class="alert alert-info py-2">
                <i class="bi bi-hourglass-split"></i> Checking legal entity limit...
            </div>
        `;

        // AJAX call
        fetch(`/check-legal-entity-limit/${companyId}`)
            .then(response => response.json())
            .then(data => {
                if (data.allowed === false) {
                    // BLOCK SELECTION
                    select.value = ''; // Revert to blank

                    feedbackDiv.innerHTML = `
                        <div class="alert alert-danger py-2">
                            <i class="bi bi-x-circle-fill me-2"></i>
                            <strong>Cannot select this company</strong><br>
                            ${data.message}
                        </div>
                    `;

                    // Disable submit buttons
                    submitBtn.disabled = true;
                    draftBtn.disabled = true;
                } else {
                    // Allow selection
                    feedbackDiv.innerHTML = `
                        <div class="alert alert-success py-2">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            ${data.message}
                        </div>
                    `;
                }
            })
            .catch(err => {
                console.error('Error:', err);
                select.value = ''; // Revert on error

                feedbackDiv.innerHTML = `
                    <div class="alert alert-warning py-2">
                        <i class="bi bi-wifi-off me-2"></i>
                        Connection error. Selection cancelled.
                    </div>
                `;

                submitBtn.disabled = true;
                draftBtn.disabled = true;
            });
    }

    // Run on page load if there's old input
    document.addEventListener('DOMContentLoaded', function() {
        const select = document.getElementById('companySelect');
        if (select.value) {
            handleCompanyChange(select);
        }
    });
</script>
<script>
function loadLegalEntities(companyId) {
    const tableBody = document.getElementById('legalEntityTable');

    tableBody.innerHTML = `
        <tr>
            <td colspan="8" class="text-center text-muted">
                Loading legal entities...
            </td>
        </tr>
    `;

    fetch(`/company/${companyId}/legal-entities`)
        .then(res => res.json())
        .then(res => {
            const rows = res.data;

            if (!rows.length) {
                tableBody.innerHTML = `
                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            No legal entities found
                        </td>
                    </tr>
                `;
                return;
            }

            tableBody.innerHTML = '';
            rows.forEach((row, index) => {
                tableBody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${row.legalentity_id}</td>
                        <td>${row.legalentity_name}</td>
                        <td>${row.legalentity_short_name}</td>
                        <td>${row.state}</td>
                        <td>${row.city}</td>
                        <td>
                            <span class="badge ${row.status === 'Saved' ? 'bg-success' : 'bg-secondary'}">
                                ${row.status}
                            </span>
                        </td>
                        <td>${new Date(row.created_at).toLocaleDateString()}</td>
                        <td><a href="/legal-entity/${companyId}/${row.legalentity_id}/edit"
                            class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i> Edit
                            </a>
                        </td>
                    </tr>
                `;
            });
        })
        .catch(() => {
            tableBody.innerHTML = `
                <tr>
                    <td colspan="8" class="text-danger text-center">
                        Failed to load legal entities
                    </td>
                </tr>
            `;
        });
}
</script>

</body>

</html>
