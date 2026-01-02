<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Company Creation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            from { transform: translateX(400px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
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
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-white topbar-fixed" style="height:60px;">
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
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item logout" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="sidebarOverlay" class="overlay" aria-hidden="true"></div>

    <div style="display:flex; min-height: calc(100vh - 60px);">
        @include('partials.sidebar')

        <main class="content-area bg-white">
            <form method="POST" action="{{ route('company.update', $company->company_id) }}" enctype="multipart/form-data" id="companyForm">
                @csrf

                <input type="hidden" name="status" id="formStatus" value="Saved">

                <!-- Agreement Type Selection -->
                <div class="mb-4 d-flex gap-4 align-items-center">
                    <label class="d-flex align-items-center gap-2">
                        <input type="radio" name="agreement_type" value="company" id="companyAgreement"
                               {{ old('agreement_type', 'company') === 'company' ? 'checked' : '' }}>
                        <span class="mas">Company wise Agreement</span>
                    </label>
                    <label class="d-flex align-items-center gap-2">
                        <input type="radio" name="agreement_type" value="legal" id="legalAgreement"
                               {{ old('agreement_type') === 'legal' ? 'checked' : '' }}>
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
                                <input type="text" class="form-control" name="company_name" value="{{ old('company_name', $company->company_name) }}"
                                       placeholder="Enter Company Name" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Company Short Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="company_short_name" value="{{ old('company_short_name', $company->company_short_name) }}"
                                       placeholder="Enter Company Short Name" >
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Reference No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="reference_no" value="{{ old('reference_no', $company->reference_no) }}"
                                       placeholder="Enter Reference No" >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address 1</label>
                                <textarea class="form-control" rows="2" name="address1" placeholder="Enter Address">{{ old('address1', $company->address1) }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address 2</label>
                                <textarea class="form-control" rows="2" name="address2" placeholder="Enter Address">{{ old('address2', $company->address2) }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <select class="form-select" name="state" >
                                    <option value="">Select State</option>
                                    <option value="Tamil Nadu" {{ $company->state == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                                    <option value="Kerala" {{ $company->state == 'Kerala' ? 'selected' : '' }}>Kerala</option>
                                    <option value="Karnataka" {{ $company->state == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <select class="form-select" name="city" >
                                    <option value="">Select City</option>
                                    <option value="Madurai" {{ $company->city == 'Madurai' ? 'selected' : '' }}>Madurai</option>
                                    <option value="Chennai" {{ $company->city == 'Chennai' ? 'selected' : '' }}>Chennai</option>
                                    <option value="Coimbatore" {{ $company->city == 'Coimbatore' ? 'selected' : '' }}>Coimbatore</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Pincode <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pincode" value="{{ old('pincode', $company->pincode) }}"
                                       placeholder="Enter Pincode"  maxlength="6" pattern="[0-9]{6}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Contact Person <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="contact_person" value="{{ old('contact_person', $company->contact_person) }}"
                                       placeholder="Enter Contact Person" >
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number', $company->mobile_number) }}"
                                       placeholder="Enter Mobile Number"  maxlength="10" pattern="[0-9]{10}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Telephone Number</label>
                                <input type="text" class="form-control" name="telephone_number" value="{{ old('telephone_number', $company->telephone_number) }}"
                                       placeholder="Enter Telephone Number">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" value="{{ old('email', $company->email) }}"
                                       placeholder="Enter Email" >
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Company URL</label>
                                <input type="url" class="form-control" name="companyurl" value="{{ old('companyurl', $company->companyurl) }}"
                                       placeholder="https://example.com">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Company Logo</label>
                                <div style="border:2px dashed #3b82f6; background:#eef4ff; padding:20px; text-align:center; border-radius:12px;">
                                    <p class="mb-2" style="font-size:12px; color:#444;">Drag & Drop Files or</p>
                                    <input type="file" name="company_logo" id="companyLogo" hidden accept="image/*">
                                    <button type="button" class="btn btn-primary px-3 py-1" style="font-size:11px;"
                                            onclick="document.getElementById('companyLogo').click()">
                                        <i class="bi bi-upload"></i> Browse
                                    </button>
                                    <p class="mt-2" style="font-size:11px; color:#6b7280;">Supported: JPEG, PNG, WebP (Max: 2MB)</p>
                                    <span id="logoFileName" class="text-primary" style="font-size:11px;"></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Current Company Logo</label>
                                @if($company->company_logo)
                                    <img src="{{ asset($company->company_logo) }}" class="form-control" style="height: 150px" class="mb-2">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Section -->
                <div class="card p-0 mt-4 mb-4 cardborder">
                    <div class="d-flex justify-content-between align-items-center px-3 py-3 cardheader">
                        <h6 class="m-0 fw-semibold">Registration Details</h6>
                        <button type="button"
                                class="btn btn-primary d-flex align-items-center gap-2"
                                style="font-size:14px;"
                                onclick="addRegistrationRow()">
                            <i class="bi bi-plus-square"></i> Add Registration
                        </button>
                    </div>

                    <div class="p-4">
                        <div id="registrationContainer">

                            {{-- 🔁 EXISTING REGISTRATIONS --}}
                            @if(!empty($company->registration_type))
                                @foreach($company->registration_type as $i => $type)
                                    <div class="row g-4 registration-row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Registration Type</label>
                                            <select class="form-select" name="registration_type[]">
                                                <option value="">Select Type</option>
                                                <option value="GST" {{ $type == 'GST' ? 'selected' : '' }}>GST</option>
                                                <option value="CIN" {{ $type == 'CIN' ? 'selected' : '' }}>CIN</option>
                                                <option value="PAN" {{ $type == 'PAN' ? 'selected' : '' }}>PAN</option>
                                                <option value="TAN" {{ $type == 'TAN' ? 'selected' : '' }}>TAN</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label">Registration No</label>
                                            <input type="text"
                                                class="form-control"
                                                name="registration_no[]"
                                                value="{{ $company->registration_no[$i] ?? '' }}"
                                                placeholder="Enter Registration No">
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label">Attachment</label>

                                            @if(!empty($company->registration_attachment[$i]))
                                                <div class="mb-1">
                                                    <a href="{{ asset($company->registration_attachment[$i]) }}"
                                                    target="_blank"
                                                    class="text-primary small">
                                                        View existing
                                                    </a>
                                                </div>
                                            @endif

                                            <input type="file"
                                                class="form-control"
                                                name="registration_attachment[]"
                                                accept=".jpg,.jpeg,.png,.pdf">
                                        </div>

                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button"
                                                    class="btn btn-danger w-100"
                                                    onclick="removeRegistrationRow(this)">
                                                <i class="bi bi-trash"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                {{-- 🆕 IF NO REGISTRATIONS EXIST --}}
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

                                    <div class="col-md-3">
                                        <label class="form-label">Registration No</label>
                                        <input type="text"
                                            class="form-control"
                                            name="registration_no[]"
                                            placeholder="Enter Registration No">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">Attachment</label>
                                        <input type="file"
                                            class="form-control"
                                            name="registration_attachment[]"
                                            accept=".jpg,.jpeg,.png,.pdf">
                                    </div>

                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="button"
                                                class="btn btn-danger w-100"
                                                onclick="removeRegistrationRow(this)">
                                            <i class="bi bi-trash"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>


                <!-- Agreement Section (Visible only for Company Type) -->
                <div class="card p-0 mb-4 cardborder" id="agreementSection">
                    <div class="cardheader">Agreement Details</div>
                    <div class="p-4">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <label class="form-label">Agreement Reference No</label>
                                <input type="text" class="form-control" name="agreement_ref_no"
                                       value="{{ old('agreement_ref_no', $company->agreement_ref_no) }}" placeholder="Enter Agreement Reference No">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Agreement Name</label>
                                <input type="text" class="form-control" name="agreement_name"
                                       value="{{ old('agreement_name', $company->agreement_name) }}" placeholder="Enter Agreement Name">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Nature of Agreement</label>
                                <select class="form-select" name="nature_of_agreement">
                                    <option value="">Select</option>
                                    <option value="Service Agreement" {{ $company->nature_of_agreement == 'Service Agreement' ? 'selected' : '' }}>Service Agreement</option>
                                    <option value="Contract" {{ $company->nature_of_agreement == 'Contract' ? 'selected' : '' }}>Contract</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Mode of Document</label>
                                <input type="text" class="form-control" name="mode_of_document"
                                       value="{{ old('mode_of_document', $company->mode_of_document) }}" placeholder="Enter Mode">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">No. of Legal Entity</label>
                                <input type="number" class="form-control" name="no_of_legalentity"
                                       value="{{ old('no_of_legalentity', $company->no_of_legalentity) }}" placeholder="Enter Number" min="0">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Agreement Date</label>
                                <input type="date" class="form-control" name="agreement_date"
                                       value="{{ old('agreement_date', $company->agreement_date) }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Agreement Type</label>
                                <select class="form-select" name="agreement_type_dropdown">
                                    <option value="">Select</option>
                                    <option value="Annual" {{ $company->agreement_type == 'Annual' ? 'selected' : '' }}>Annual</option>
                                    <option value="Multi-Year" {{ $company->agreement_type == 'Multi-Year' ? 'selected' : '' }}>Multi-Year</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Vertical</label>
                                <select class="form-select" name="vertical">
                                    <option value="">Select</option>
                                    <option value="IT" {{ $company->vertical == 'IT' ? 'selected' : '' }}>IT</option>
                                    <option value="Manufacturing" {{ $company->vertical == 'Manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Effective From</label>
                                <input type="date" class="form-control" name="effective_from"
                                       value="{{ old('effective_from', $company->effective_from) }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Effective To</label>
                                <input type="date" class="form-control" name="effective_to"
                                       value="{{ old('effective_to', $company->effective_to) }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Renewal Due On</label>
                                <input type="date" class="form-control" name="renewal_due_on"
                                       value="{{ old('renewal_due_on', $company->renewal_due_on) }}">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scope Section (Visible only for Company Type) -->
                <div class="card p-0 mb-5 cardborder" id="scopeSection">
                    <div class="cardheader">Scope Details</div>
                    <div class="p-4">
                        <div class="row g-4">
                            <div class="col-md-3">
                                <label class="form-label">Domain Name</label>
                                <select class="form-select" name="domain_name">
                                    <option value="">Select</option>
                                    <option value="HR" {{ $company->domain_name == 'HR' ? 'selected' : '' }}>HR</option>
                                    <option value="Finance" {{ $company->domain_name == 'Finance' ? 'selected' : '' }}>Finance</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Type of Organization</label>
                                <select class="form-select" name="type_of_organization">
                                    <option value="">Select</option>
                                    <option value="Private Limited" {{ $company->type_of_organization == 'Private Limited' ? 'selected' : '' }}>Private Limited</option>
                                    <option value="Public Limited" {{ $company->type_of_organization == 'Public Limited' ? 'selected' : '' }}>Public Limited</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">State</label>
                                <select class="form-select" name="scope_state">
                                    <option value="">Select</option>
                                    <option value="Tamil Nadu" {{ $company->scope_state == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                                    <option value="Kerala" {{ $company->scope_state == 'Kerala' ? 'selected' : '' }}>Kerala</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Act</label>
                                <select class="form-select" name="act">
                                    <option value="">Select</option>
                                    <option value="Labour Act" {{ $company->act == 'Labour Act' ? 'selected' : '' }}>Labour Act</option>
                                    <option value="Companies Act" {{ $company->act == 'Companies Act' ? 'selected' : '' }}>Companies Act</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                    {{-- <button type="submit" class="btn btn-outline-primary px-4" id="draftBtn">
                        <i class="bi bi-save"></i> Save Draft
                    </button> --}}
                    <button type="submit" class="btn btn-primary px-4" id="submitBtn">
                        <i class="bi bi-check-circle"></i> Update
                    </button>
                </div>
            </form>
                      
        </main>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
/* =========================
   AUTO HIDE ALERTS
========================= */
setTimeout(() => {
    document.querySelectorAll('.alert-custom').forEach(alert => {
        if (bootstrap.Alert.getInstance(alert)) {
            bootstrap.Alert.getInstance(alert).close();
        } else {
            new bootstrap.Alert(alert).close();
        }
    });
}, 5000);

/* =========================
   LOGO FILE NAME (SAFE)
========================= */
const logoInput = document.getElementById('companyLogo');
if (logoInput) {
    logoInput.addEventListener('change', function () {
        const fileName = this.files[0]?.name || '';
        const label = document.getElementById('logoFileName');
        if (label) {
            label.textContent = fileName ? `Selected: ${fileName}` : '';
        }
    });
}

/* =========================
   FORM STATUS (DRAFT / SAVE)
========================= */
const draftBtn = document.getElementById('draftBtn');
const submitBtn = document.getElementById('submitBtn');
const formStatus = document.getElementById('formStatus');

if (draftBtn && formStatus) {
    draftBtn.addEventListener('click', () => formStatus.value = 'Draft');
}

if (submitBtn && formStatus) {
    submitBtn.addEventListener('click', () => formStatus.value = 'Saved');
}

/* =========================
   AGREEMENT / SCOPE TOGGLE
========================= */
function toggleSections() {
    const companyRadio = document.getElementById('companyAgreement');
    const agreementSection = document.getElementById('agreementSection');
    const scopeSection = document.getElementById('scopeSection');

    if (!companyRadio || !agreementSection || !scopeSection) return;

    if (companyRadio.checked) {
        agreementSection.style.display = '';
        scopeSection.style.display = '';
    } else {
        agreementSection.style.display = 'none';
        scopeSection.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', toggleSections);
document.getElementById('companyAgreement')?.addEventListener('change', toggleSections);
document.getElementById('legalAgreement')?.addEventListener('change', toggleSections);

/* =========================
   REGISTRATION ROW HANDLING
========================= */
function addRegistrationRow() {
    const container = document.getElementById('registrationContainer');
    if (!container) return;

    const row = document.createElement('div');
    row.className = 'row g-4 registration-row mb-3';

    row.innerHTML = `
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

        <div class="col-md-3">
            <label class="form-label">Registration No</label>
            <input type="text"
                   class="form-control"
                   name="registration_no[]"
                   placeholder="Enter Registration No">
        </div>

        <div class="col-md-3">
            <label class="form-label">Attachment</label>
            <input type="file"
                   class="form-control"
                   name="registration_attachment[]"
                   accept=".jpg,.jpeg,.png,.pdf">
        </div>

        <div class="col-md-2 d-flex align-items-end">
            <button type="button"
                    class="btn btn-danger w-100"
                    onclick="removeRegistrationRow(this)">
                <i class="bi bi-trash"></i> Remove
            </button>
        </div>
    `;

    container.appendChild(row);
}

function removeRegistrationRow(btn) {
    const row = btn.closest('.registration-row');
    if (row) row.remove();
}

/* =========================
   SIDEBAR TOGGLE (UNCHANGED)
========================= */
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('sidebarOverlay');

document.addEventListener('click', (e) => {
    const toggle = e.target.closest('.mobile-toggle');

    if (toggle && sidebar && overlay) {
        const isClosed = sidebar.classList.contains('closed');
        sidebar.classList.toggle('closed', !isClosed);
        overlay.classList.toggle('show', !isClosed);
    }

    if (e.target === overlay && sidebar) {
        sidebar.classList.add('closed');
        overlay.classList.remove('show');
    }
});

function setSidebarStateOnLoad() {
    if (!sidebar || !overlay) return;

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
