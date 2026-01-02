        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Payaasaan - Branch Creation</title>

            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Icons -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap"
                rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('siteassets/css/style.css') }}">
            <style>

            </style>
        </head>

        <body>

            <!-- ========== TOPBAR (KEPT EXACTLY AS YOUR ORIGINAL) ========== -->
            <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-white topbar-fixed"
                style="height:60px;">

                <div class="left-30">
                    <i class="bi bi-list mobile-toggle d-none" aria-hidden="true"></i>

                    <div>
                        <h4 class="logo-title">PAYAASAAN</h4>
                        <p class="logo-sub d-flex text-center">Powered By<br>Thathwam Technologies</p>
                    </div>
                </div>

                <div class="right-70 d-flex align-items-center justify-content-between"
                    style="width:80%;padding:0px 10px;">

                    <div class="breadcrumb-area">
                        <span class="fw-semibold mas">Master</span>
                        <span class="mx-1 text-secondary">/</span>
                        <span class="mas semibold">Branch Creation</span>
                    </div>

                    <div class="d-flex align-items-center gap-4">

                        <div class="search-box position-relative" style="width:350px;">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control search-input"
                                placeholder="What are you looking for ?">
                        </div>

                        <i class="bi bi-bell bell-icon" style="font-size:20px; cursor:pointer;"></i>

                        <div class="dropdown">
                            <div class="profile-group" data-bs-toggle="dropdown">
                                <img src="{{ asset('siteassets/img/user.png') }}" class="profile-img" alt="">
                                <span class="username-text">Peter Griffin</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>

                            <ul class="dropdown-menu dropdown-menu-end mt-2">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key"></i> Change
                                        Password</a></li>
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
            <!-- ========== /TOPBAR ========== -->

            <!-- overlay for mobile when sidebar open -->
            <div id="sidebarOverlay" class="overlay" aria-hidden="true"></div>

            <div style="display:flex; min-height: calc(100vh - 60px);">


                <!-- SIDEBAR INCLUDE -->
                @include('partials.sidebar')

                <!-- CONTENT -->
                <main class="content-area bg-white">
                    <form action="{{ route('branch.company.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="status" id="formStatus" value="Submit">

                        <div class="container-fluid mt-3">

                            <!-- Top Two Fields -->
                            <div class="row g-4 mb-3">

                                <!-- Company -->
                                <div class="col-md-3">
                                    <label class="form-label">Company <span class="text-danger">*</span></label>
                                    <select name="company_id" id="companySelect" class="form-select">
                                        <option value="">Select Company</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->company_id }}">
                                                {{ $company->company_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Legal Entity -->
                                <div class="col-md-3">
                                    <label class="form-label">Legal Entity <span class="text-danger">*</span></label>
                                    <select name="legal_entity_id" id="legalEntitySelect" class="form-select">
                                        <option value="">Select Legal Entity</option>
                                    </select>
                                </div>

                            </div>

                            <!-- BASIC DETAILS CARD -->
                            <div class="card p-0 cardborder">

                                <!-- Header -->
                                <div class="cardheader">
                                    Basic Details
                                </div>

                                <!-- Body -->
                                <div class="p-4">
                                    <div class="row g-4">

                                        <!-- Branch Code -->
                                        <div class="col-md-3">
                                            <label class="form-label">Branch Code <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"name="branch_code" class="form-control"
                                                placeholder="Enter Code">
                                        </div>

                                        <!-- Branch Name -->
                                        <div class="col-md-3">
                                            <label class="form-label">Branch Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="branch_name" class="form-control"
                                                placeholder="Enter Branch Name">
                                        </div>
                                        <div class="row">
                                            <!-- Branch Address 1 -->
                                            <div class="col-md-6">
                                                <label class="form-label">Branch Address 1</label>
                                                <textarea class="form-control" name="branch_address_1" rows="2" placeholder="Enter Address"></textarea>
                                            </div>

                                            <!-- Branch Address 2 -->
                                            <div class="col-md-6">
                                                <label class="form-label">Branch Address 2</label>
                                                <textarea class="form-control" name="branch_address_2" rows="2" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>

                                        <!-- State -->
                                        <div class="col-md-3">
                                            <label class="form-label">State <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <select class="form-select" name="state">
                                                    <option>Select State</option>
                                                    <option>sample</option>
                                                    <option>creation</option>
                                                </select>

                                            </div>
                                        </div>

                                        <!-- City -->
                                        <div class="col-md-3">
                                            <label class="form-label">City <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <select class="form-select"name="city">
                                                    <option>Select City</option>
                                                    <option>sample</option>
                                                    <option>creation</option>
                                                </select>

                                            </div>
                                        </div>

                                        <!-- Pincode -->
                                        <div class="col-md-3">
                                            <label class="form-label">Pincode <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="pincode" class="form-control"
                                                placeholder="Enter Pincode">
                                        </div>

                                        <!-- Mobile -->
                                        <div class="col-md-3">
                                            <label class="form-label">Mobile Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="mobile_number" class="form-control"
                                                placeholder="Enter Mobile Number">
                                        </div>

                                        <!-- Telephone -->
                                        <div class="col-md-3">
                                            <label class="form-label">Telephone No <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="telephone_number" class="form-control"
                                                placeholder="Enter Telephone Number">
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-3">
                                            <label class="form-label">Email ID <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email_id" class="form-control"
                                                placeholder="Enter Email ID">
                                        </div>

                                        <!-- Nature of Work -->
                                        <div class="col-md-3">
                                            <label class="form-label">Nature of Work <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="nature_of_work"class="form-control"
                                                placeholder="Enter URL">
                                        </div>

                                        <!-- Industry Type -->
                                        <div class="col-md-3">
                                            <label class="form-label">Industry Type <span
                                                    class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <select class="form-select"name="industry_type">
                                                    <option>Select Type</option>
                                                    <option>sample</option>
                                                    <option>creation</option>
                                                </select>

                                            </div>
                                        </div>

                                        <!-- Date of Creation -->
                                        <div class="col-md-3">
                                            <label class="form-label">Date of Creation <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="date" name="date_of_creation" class="form-control">

                                            </div>
                                        </div>

                                        <!-- Date of Commencement -->
                                        <div class="col-md-3">
                                            <label class="form-label">Date of Commencement <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="date" name="date_of_commencement"
                                                    class="form-control">

                                            </div>
                                        </div>

                                        <!-- ESI -->
                                        <div class="col-md-3">
                                            <label class="form-label">ESI Location <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select"name="esi_location">
                                                <option>Select Location</option>
                                                <option>sample</option>
                                                <option>creation</option>
                                            </select>
                                        </div>

                                        <!-- PTax -->
                                        <div class="col-md-3">
                                            <label class="form-label">PTax Location <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="ptox_location">
                                                <option>Select Location</option>
                                                <option>sample</option>
                                                <option>creation</option>
                                            </select>
                                        </div>

                                        <!-- OT Availability -->
                                        <div class="col-md-3">
                                            <label class="form-label">OT Availability <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="ot_availability">
                                                <option>Select</option>
                                                <option>sample</option>
                                                <option>creation</option>
                                            </select>
                                        </div>

                                        <!-- OT Type -->
                                        <div class="col-md-3">
                                            <label class="form-label">OT Type <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="ot_type">
                                                <option>Select</option>
                                                <option>sample</option>
                                                <option>creation</option>
                                            </select>
                                        </div>

                                        <!-- OT Value -->
                                        <div class="col-md-3">
                                            <label class="form-label">OT Value <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="ot_value" class="form-control"
                                                placeholder="Enter Value">
                                        </div>

                                        <!-- Unit Closure -->
                                        <div class="col-md-3">
                                            <label class="form-label">Unit Closure <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="date"name="unit_closure" class="form-control">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- ROW: Unit Closure Remarks + Category -->
                                    <div class="row g-4 mt-2">

                                        <!-- Unit Closure Remarks (Left Side - Big Box) -->
                                        <div class="col-md-3">
                                            <label class="form-label">Unit Closure Remarks</label>
                                            <textarea class="form-control" name="unit_closure_remarks" rows="2" placeholder="Enter Address"></textarea>
                                        </div>

                                        <!-- Category Radio Buttons (Middle) -->
                                        <div class="col-md-3 d-flex align-items-center"
                                            style="gap:30px; margin-top:30px;">
                                            <label class="d-flex align-items-center gap-2">
                                                <input type="radio" name="type" value="core">
                                                <span class="mas">Core</span>
                                            </label>

                                            <label class="d-flex align-items-center gap-2">
                                                <input type="radio" name="type" value="contractor">
                                                <span class="mas">Contract Labour</span>
                                            </label>

                                            <label class="d-flex align-items-center gap-2">
                                                <input type="radio" name="type" value="both">
                                                <span class="mas">Both</span>
                                            </label>
                                        </div>

                                        <!-- Category Dropdown (Right Side) -->
                                        <div class="col-md-3">
                                            <label class="form-label">Category <span
                                                    class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <select class="form-select"name="category">
                                                    <option>Select</option>

                                                    <option>sample</option>
                                                    <option>creation</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- ============================
                        BRANCH IN-CHARGE DETAILS
                        =============================== -->
                            <div class="card p-0 mt-4 cardborder">

                                <!-- Header -->
                                <div class="cardheader">
                                    Branch In charge Details
                                </div>

                                <!-- Body -->
                                <div class="p-4">
                                    <div id="branchCloneArea">
                                        <div class="branchCloneItem">
                                            <div class="row g-4">

                                                <!-- Name -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name[]" class="form-control"
                                                        placeholder="Enter Name">
                                                </div>

                                                <!-- Father Name -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Father Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="father_name[]" class="form-control"
                                                        placeholder="Enter Name">
                                                </div>

                                                <!-- Designation -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Designation <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="designation[]" class="form-control"
                                                        placeholder="Enter Designation">
                                                </div>

                                                <!-- Department -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Department <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="department[]" class="form-control"
                                                        placeholder="Enter Department">
                                                </div>

                                                <!-- Mobile No -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Mobile No <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="branch_mobile_number[]"
                                                        class="form-control" placeholder="Enter Mobile No">
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Email ID <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" name="branch_email_id[]"
                                                        class="form-control" placeholder="Enter Email ID">
                                                </div>

                                                <!-- Remarks -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Remarks <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="remarks[]" class="form-control"
                                                        placeholder="Enter Remarks">
                                                </div>

                                                <!-- Specimen Signature Upload -->
                                                <div class="col-md-3">
                                                    <label class="form-label">Specimen Signature</label>
                                                    <div
                                                        style="border:2px dashed #3b82f6;background:#eef4ff;padding:20px;text-align:center;border-radius:12px;">
                                                        <p class="mb-2" style="font-size:12px;color:#444;">Drag &
                                                            Drop or</p>
                                                        <input type="file" name="specimen_signature"
                                                            id="specimenFile" accept="image/*,.pdf" hidden>
                                                        <button type="button" class="btn btn-primary px-3 py-1"
                                                            style="font-size:11px;"
                                                            onclick="document.getElementById('specimenFile').click()">
                                                            <i class="bi bi-upload"></i> Browse
                                                        </button>
                                                        <p class="mt-2" style="font-size:11px;color:#6b7280;">JPEG,
                                                            PNG, PDF (Max: 2MB)</p>
                                                        <small id="specimenFileName"
                                                            class="text-primary d-block mt-1"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="d-flex justify-content-end gap-3 mt-4">
                                                <button type="button"
                                                    id="branchClearBtn"class="btn btn-outline-primary px-4">Clear</button>
                                                <button type="button" id="branchAddBtn"
                                                    class="btn btn-primary px-4">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card p-0 mt-4 cardborder">

                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 custom-table ">
                                                <thead>
                                                    <tr>
                                                        <th>S. No</th>
                                                        <th>Name</th>
                                                        <th>Father Name</th>
                                                        <th>Designation</th>
                                                        <th>Department</th>
                                                        <th>Mobile Number</th>
                                                        <th>Email ID</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Floyd Miles</td>
                                                        <td>Arlene McCoy</td>
                                                        <td>Chief Executive Officer</td>
                                                        <td>IT</td>
                                                        <td>+919555566270</td>
                                                        <td>manhhacht08@gmail.com</td>
                                                        <td>nice work</td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Arlene McCoy</td>
                                                        <td>Darlene Robertson</td>
                                                        <td>Finance</td>
                                                        <td>Human Resources</td>
                                                        <td>+919355574544</td>
                                                        <td>vuhaituongnute@gmail.com</td>
                                                        <td>nice work</td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Annette Black</td>
                                                        <td>Guy Hawkins</td>
                                                        <td>Front End Developer</td>
                                                        <td>Manning</td>
                                                        <td>+919155559238</td>
                                                        <td>tienlpspktnd@gmail.com</td>
                                                        <td>Good job</td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Robert Fox</td>
                                                        <td>Jenny Wilson</td>
                                                        <td>Front End Developer</td>
                                                        <td>Maintenance</td>
                                                        <td>+919655516575</td>
                                                        <td>thuhang.nute@gmail.com</td>
                                                        <td>great job</td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td>Jacob Jones</td>
                                                        <td>Eleanor Pena</td>
                                                        <td>UX Designer</td>
                                                        <td>HSEQ</td>
                                                        <td>+918555031082</td>
                                                        <td>danghoang87hl@gmail.com</td>
                                                        <td>nice work</td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Jerome Bell</td>
                                                        <td>Jacob Jones</td>
                                                        <td>Customer Service Manager</td>
                                                        <td>Engineering</td>
                                                        <td>+918555110391</td>
                                                        <td>ckctm12@gmail.com</td>
                                                        <td>great job</td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Kathryn Murphy</td>
                                                        <td>Savannah Nguyen</td>
                                                        <td>Assistant Backend Developer</td>
                                                        <td>Operations</td>
                                                        <td>+917555078586</td>
                                                        <td>nvt.isst.nute@gmail.com</td>
                                                        <td>great</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Footer -->
                                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">
                                        <!-- Total Data -->
                                        <span class="text-muted mb-2 mb-md-0" style="font-size:13px;">
                                            A total of 89 data
                                        </span>

                                        <!-- Pagination + Items Per Page -->
                                        <div class="d-flex flex-wrap align-items-center gap-3">

                                            <!-- Pagination -->
                                            <nav>
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link">&lt;</a>
                                                    </li>

                                                    <li class="page-item active">
                                                        <a class="page-link">1</a>
                                                    </li>

                                                    <li class="page-item"><a class="page-link">2</a></li>
                                                    <li class="page-item"><a class="page-link">3</a></li>
                                                    <li class="page-item"><a class="page-link">4</a></li>
                                                    <li class="page-item"><a class="page-link">5</a></li>

                                                    <li class="page-item">
                                                        <a class="page-link">&gt;</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <!-- Items/Page Dropdown -->
                                            <select class="form-select form-select-sm" style="width:140px;">
                                                <option selected>10 Items/Page</option>
                                                <option>sample</option>
                                                <option>creation</option>
                                            </select>
                                        </div>

                                    </div>


                                </div>
                            </div>

                            <!-- ============================
                            REGISTRATION SECTION
                        =============================== -->
                            <div class="card p-0 mt-4 cardborder">

                                <!-- Header -->
                                <div class="cardheader">
                                    Registration
                                </div>

                                <!-- Body -->
                                <div class="p-4">

                                    <!-- 🔁 CLONE THIS GROUP -->
                                    <div id="cloneArea">
                                        <div class="row g-4 cloneItem">

                                            <!-- Registration Type -->
                                            <div class="col-md-4">
                                                <label class="form-label">Registration Type <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select" name="reg_type[]">
                                                        <option>Select Type</option>
                                                        <option value="Private">Private</option>
                                                        <option value="MSME">MSME</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Registration No -->
                                            <div class="col-md-4">
                                                <label class="form-label">Registration No <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="reg_no[]"
                                                    placeholder="Enter No">
                                            </div>

                                            <!-- Attachment -->
                                            <div class="col-md-4">
                                                <label class="form-label">Attachment</label>
                                                <input type="file" name="attachment[]" accept="image/*,.pdf"
                                                    class="form-control regFileInput">
                                                <small class="text-muted">Supported: JPEG, PNG, PDF (Max: 5MB
                                                    each)</small>
                                            </div>

                                        </div>
                                        <hr class="my-4">
                                    </div>
                                    <!-- end clone block -->

                                    <!-- Buttons -->
                                    <div class="d-flex justify-content-end gap-3 mt-4">
                                        <button type="button" class="btn btn-outline-primary px-4"
                                            id="clearBtn">Clear</button>
                                        <button type="button" class="btn btn-primary px-4"
                                            id="addBtn">Add</button>
                                    </div>

                                    <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #ffffff;">

                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 custom-table">
                                                <thead>
                                                    <tr>
                                                        <th>S. No</th>
                                                        <th>Registration Type</th>
                                                        <th>Registration Type</th>
                                                        <th>Attachment</th>
                                                        <th style="width:70px;">Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Floyd Miles</td>
                                                        <td>Arlene McCoy</td>
                                                        <td>Annual_Performance_Review.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"
                                                                style="cursor:pointer;"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Arlene McCoy</td>
                                                        <td>Darlene Robertson</td>
                                                        <td>Invoice_Template_Q3.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Annette Black</td>
                                                        <td>Guy Hawkins</td>
                                                        <td>Security_Policy_Summary.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Robert Fox</td>
                                                        <td>Jenny Wilson</td>
                                                        <td>Client_Agreement_Form.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td>Jacob Jones</td>
                                                        <td>Eleanor Pena</td>
                                                        <td>User_Manual.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Jerome Bell</td>
                                                        <td>Jacob Jones</td>
                                                        <td>Contract_Summary_V1.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Kathryn Murphy</td>
                                                        <td>Savannah Nguyen</td>
                                                        <td>Training_Guide_Overview.pdf</td>
                                                        <td class="text-center">
                                                            <i class="bi bi-pencil-square text-primary"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Footer -->
                                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">
                                            <!-- Total Data -->
                                            <span class="text-muted mb-2 mb-md-0" style="font-size:13px;">
                                                A total of 89 data
                                            </span>

                                            <!-- Pagination + Items Per Page -->
                                            <div class="d-flex flex-wrap align-items-center gap-3">

                                                <!-- Pagination -->
                                                <nav>
                                                    <ul class="pagination pagination-sm mb-0">
                                                        <li class="page-item disabled">
                                                            <a class="page-link">&lt;</a>
                                                        </li>

                                                        <li class="page-item active">
                                                            <a class="page-link">1</a>
                                                        </li>

                                                        <li class="page-item"><a class="page-link">2</a></li>
                                                        <li class="page-item"><a class="page-link">3</a></li>
                                                        <li class="page-item"><a class="page-link">4</a></li>
                                                        <li class="page-item"><a class="page-link">5</a></li>

                                                        <li class="page-item">
                                                            <a class="page-link">&gt;</a>
                                                        </li>
                                                    </ul>
                                                </nav>

                                                <!-- Items/Page Dropdown -->
                                                <select class="form-select form-select-sm" style="width:140px;">
                                                    <option selected>10 Items/Page</option>
                                                    <option>sample</option>
                                                    <option>creation</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- ====================================
                                TABLE (EXACT DESIGN)
                        ====================================== -->
                        <!-- ============================
                            CORE DETAILS SECTION
                        =============================== -->
                        <div class="card p-0 mt-4 cardborder">

                            <!-- Header -->
                            <div class="cardheader">
                                Core Details
                            </div>

                            <!-- Body -->
                            <div class="p-4">

                                <!-- 🔁 CLONE BLOCK START -->
                                <div id="coreCloneArea">
                                    <div class="row g-4 coreCloneItem">

                                        <!-- Code -->
                                        <div class="col-md-4">
                                            <label class="form-label">Code <span class="text-danger">*</span></label>
                                            <input type="text" name="code[]" class="form-control"
                                                placeholder="Enter Code">
                                        </div>

                                        <!-- Code Description -->
                                        <div class="col-md-4">
                                            <label class="form-label">Code Description <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="code_description[]" class="form-control"
                                                placeholder="Enter Description">
                                        </div>

                                        <!-- Buttons Right Side -->
                                        <div class="col-md-4 d-flex justify-content-end align-items-end gap-3">
                                            <button type="button" class="btn btn-outline-primary px-4"
                                                id="coreClearBtn">Clear</button>
                                            <button type="button" class="btn btn-primary px-4"
                                                id="coreAddBtn">Add</button>
                                        </div>

                                        <hr class="my-4">
                                    </div>
                                    <!-- 🔁 CLONE BLOCK END -->


                                </div>

                            </div>

                            <!-- TABLE -->
                            <div class="table-responsive px-3 pb-3">
                                <table class="table table-bordered mb-0 custom-table">
                                    <thead>
                                        <tr>
                                            <th style="width:80px;">S. No</th>
                                            <th style="width:200px;">Code</th>
                                            <th>Code Description</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>39146</td>
                                            <td>Arlene McCoy</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>87201</td>
                                            <td>Darlene Robertson</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>60341</td>
                                            <td>Guy Hawkins</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>44432</td>
                                            <td>Jenny Wilson</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>83000</td>
                                            <td>Eleanor Pena</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>18666</td>
                                            <td>Jacob Jones</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>07560</td>
                                            <td>Savannah Nguyen</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- FOOTER -->
                                <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">
                                    <!-- Total Data -->
                                    <span class="text-muted mb-2 mb-md-0" style="font-size:13px;">
                                        A total of 89 data
                                    </span>

                                    <!-- Pagination + Items Per Page -->
                                    <div class="d-flex flex-wrap align-items-center gap-3">

                                        <!-- Pagination -->
                                        <nav>
                                            <ul class="pagination pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link">&lt;</a>
                                                </li>

                                                <li class="page-item active">
                                                    <a class="page-link">1</a>
                                                </li>

                                                <li class="page-item"><a class="page-link">2</a></li>
                                                <li class="page-item"><a class="page-link">3</a></li>
                                                <li class="page-item"><a class="page-link">4</a></li>
                                                <li class="page-item"><a class="page-link">5</a></li>

                                                <li class="page-item">
                                                    <a class="page-link">&gt;</a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <!-- Items/Page Dropdown -->
                                        <select class="form-select form-select-sm" style="width:140px;">
                                            <option selected>10 Items/Page</option>
                                            <option>sample</option>
                                            <option>creation</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- =======================================
                                EMPOWERMENT DETAILS
                        ======================================== -->
                        <div class="card p-0 mt-4 cardborder">

                            <!-- Header -->
                            <div class="cardheader">
                                Empowerment Details
                            </div>

                            <!-- Body -->
                            <div class="p-4">
                                <div id="empCloneArea">
                                    <div class="empCloneItem">

                                        <div class="row g-4">

                                            <!-- Act Name -->
                                            <div class="col-md-3">
                                                <label class="form-label">Act Name <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select"name="act_name[]">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>

                                                    </select>
                                                    <i class="bi bi-chevron-down position-absolute"
                                                        style="right:15px; top:50%; transform:translateY(-50%);"></i>
                                                </div>
                                            </div>

                                            <!-- Name -->
                                            <div class="col-md-3">
                                                <label class="form-label">Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="emp_name[]" class="form-control"
                                                    placeholder="Enter NAmе">
                                            </div>

                                            <!-- Type -->
                                            <div class="col-md-3">
                                                <label class="form-label">Type <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select name="emp_type[]" class="form-select">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>
                                                    </select>
                                                    <i class="bi bi-chevron-down position-absolute"
                                                        style="right:15px; top:50%; transform:translateY(-50%);"></i>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="col-md-3">
                                                <label class="form-label">Designation <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="emp_designation[]" class="form-control"
                                                    placeholder="Enter Designation">
                                            </div>

                                            <!-- Residential Address -->
                                            <div class="col-md-3">
                                                <label class="form-label">Residential Address <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    name="emp_residential_address[]"class="form-control"
                                                    placeholder="Enter Address">
                                            </div>

                                            <!-- Contact Number -->
                                            <div class="col-md-3">
                                                <label class="form-label">Contact Number <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="emp_contact[]" class="form-control"
                                                    placeholder="Enter Contact Number">
                                            </div>

                                            <!-- Email ID -->
                                            <div class="col-md-3">
                                                <label class="form-label">Email ID <span
                                                        class="text-danger">*</span></label>
                                                <input type="email"name="emp_email[]" class="form-control"
                                                    placeholder="Enter Email ID">
                                            </div>

                                            <!-- Specimen Signature -->
                                            <div class="col-md-3">
                                                <label class="form-label">Specimen Signature</label>
                                                <input type="file" name="emp_specimen_signature[]"
                                                    accept="image/*,.pdf" class="form-control empSigInput">
                                                <small class="text-muted">JPEG, PNG, PDF (Max: 2MB)</small>
                                            </div>

                                            <!-- Remarks -->
                                            <div class="col-md-3">
                                                <label class="form-label">Remarks <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"name="emp_remarks[]" class="form-control"
                                                    placeholder="Enter Remarks">
                                            </div>

                                        </div>

                                        <!-- Buttons -->
                                        <div class="d-flex justify-content-end mt-4 gap-3">
                                            <button type="button" id="empClearBtn"
                                                class="btn btn-outline-primary px-4">Clear</button>
                                            <button type="button" id="empAddBtn"
                                                class="btn btn-primary px-4">Add</button>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- TABLE SECTION -->
                            <div class="table-responsive px-3 pb-3">
                                <table class="table table-bordered mb-0 custom-table">
                                    <thead>
                                        <tr>
                                            <th style="width:70px;">S. No</th>
                                            <th>Act Name</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Designation</th>
                                            <th>Residential Address</th>
                                            <th>Contact Number</th>
                                            <th>Email ID</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>39146</td>
                                            <td>Arlene McCoy</td>
                                            <td>Arlene McCoy</td>
                                            <td>Arlene McCoy</td>
                                            <td>Arlene McCoy</td>
                                            <td>Arlene McCoy</td>
                                            <td>Arlene McCoy</td>
                                            <td>Arlene McCoy</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>87201</td>
                                            <td>Darlene Robertson</td>
                                            <td>Darlene Robertson</td>
                                            <td>Darlene Robertson</td>
                                            <td>Darlene Robertson</td>
                                            <td>Darlene Robertson</td>
                                            <td>Darlene Robertson</td>
                                            <td>Darlene Robertson</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>60341</td>
                                            <td>Guy Hawkins</td>
                                            <td>Guy Hawkins</td>
                                            <td>Guy Hawkins</td>
                                            <td>Guy Hawkins</td>
                                            <td>Guy Hawkins</td>
                                            <td>Guy Hawkins</td>
                                            <td>Guy Hawkins</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>44432</td>
                                            <td>Jenny Wilson</td>
                                            <td>Jenny Wilson</td>
                                            <td>Jenny Wilson</td>
                                            <td>Jenny Wilson</td>
                                            <td>Jenny Wilson</td>
                                            <td>Jenny Wilson</td>
                                            <td>Jenny Wilson</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>83000</td>
                                            <td>Eleanor Pena</td>
                                            <td>Eleanor Pena</td>
                                            <td>Eleanor Pena</td>
                                            <td>Eleanor Pena</td>
                                            <td>Eleanor Pena</td>
                                            <td>Eleanor Pena</td>
                                            <td>Eleanor Pena</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>18666</td>
                                            <td>Jacob Jones</td>
                                            <td>Jacob Jones</td>
                                            <td>Jacob Jones</td>
                                            <td>Jacob Jones</td>
                                            <td>Jacob Jones</td>
                                            <td>Jacob Jones</td>
                                            <td>Jacob Jones</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>07560</td>
                                            <td>Savannah Nguyen</td>
                                            <td>Savannah Nguyen</td>
                                            <td>Savannah Nguyen</td>
                                            <td>Savannah Nguyen</td>
                                            <td>Savannah Nguyen</td>
                                            <td>Savannah Nguyen</td>
                                            <td>Savannah Nguyen</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- FOOTER -->

                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 "
                                style="padding:10px;">
                                <!-- Total Data -->
                                <span class="text-muted mb-2 mb-md-0" style="font-size:13px;">
                                    A total of 89 data
                                </span>

                                <!-- Pagination + Items Per Page -->
                                <div class="d-flex flex-wrap align-items-center gap-3">

                                    <!-- Pagination -->
                                    <nav>
                                        <ul class="pagination pagination-sm mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link">&lt;</a>
                                            </li>

                                            <li class="page-item active">
                                                <a class="page-link">1</a>
                                            </li>

                                            <li class="page-item"><a class="page-link">2</a></li>
                                            <li class="page-item"><a class="page-link">3</a></li>
                                            <li class="page-item"><a class="page-link">4</a></li>
                                            <li class="page-item"><a class="page-link">5</a></li>

                                            <li class="page-item">
                                                <a class="page-link">&gt;</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- Items/Page Dropdown -->
                                    <select class="form-select form-select-sm" style="width:140px;">
                                        <option selected>10 Items/Page</option>
                                        <option>sample</option>
                                        <option>creation</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <!-- =======================================
                                SCOPE DETAILS
                        ======================================== -->
                        <div class="card p-0 mt-4 cardborder">

                            <!-- Scope Container -->
                            <div id="scopeCloneArea">

                                <div class="scopeItem">

                                    <!-- Header -->
                                    <div class="cardheader">Scope</div>

                                    <!-- Body -->
                                    <div class="p-4">
                                        <div class="row g-4">

                                            <!-- Domain Name -->
                                            <div class="col-md-4">
                                                <label class="form-label">Domain Name <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select" name="domain_name[]">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Type of Organization -->
                                            <div class="col-md-4">
                                                <label class="form-label">Type of Organization <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select" name="sc_organization[]">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- State -->
                                            <div class="col-md-4">
                                                <label class="form-label">State <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select" name="sc_state[]">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Act -->
                                            <div class="col-md-4">
                                                <label class="form-label">Act <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select" name="sc_act[]">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Division -->
                                            <div class="col-md-4">
                                                <label class="form-label">Division <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <select class="form-select" name="sc_division[]">
                                                        <option>Select</option>
                                                        <option>sample</option>
                                                        <option>creation</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Buttons -->
                                        <div class="d-flex justify-content-end mt-4 gap-3">
                                            <button type="button"
                                                class="btn btn-outline-primary px-4 clearBtn">Clear</button>
                                            <button type="button" class="btn btn-primary px-4 addBtn">Add</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button type="button" class="btn btn-outline-secondary px-4"
                                    onclick="window.location.reload()">
                                    <i class="bi bi-x-circle"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-outline-primary px-4"
                                    onclick="document.getElementById('formStatus').value='Draft'">
                                    <i class="bi bi-save"></i> Save Draft
                                </button>
                                <button type="submit" class="btn btn-primary px-4"
                                    onclick="document.getElementById('formStatus').value='Submit'">
                                    <i class="bi bi-check-circle"></i> Submit
                                </button>
                            </div>

                        </div>
            </div>
            </div>

            </div>

            </form>
            </main>

            </div>

            @include('partials.footer')

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                // File name display for all file inputs
                document.addEventListener('change', function(e) {
                    if (e.target.matches('input[type="file"]')) {
                        const fileName = e.target.files[0]?.name || '';
                        let display = e.target.nextElementSibling?.querySelector('small[id$="FileName"]') ||
                            e.target.parentNode.querySelector('small.text-primary');

                        if (display) {
                            display.textContent = fileName ? `Selected: ${fileName}` : '';
                            display.className = 'text-primary d-block mt-1';
                        }
                    }
                });

                // Company → Legal Entity Cascade (Already in your code, just ensure it works)
                document.getElementById('companySelect').addEventListener('change', function() {
                    const companyId = this.value;
                    const legalSelect = document.getElementById('legalEntitySelect');

                    legalSelect.innerHTML = '<option value="">Loading...</option>';

                    if (companyId) {
                        fetch(`/get-legal-entities/${companyId}`)
                            .then(res => res.json())
                            .then(entities => {
                                legalSelect.innerHTML = '<option value="">Select Legal Entity</option>';
                                if (entities.length === 0) {
                                    legalSelect.innerHTML += '<option disabled>No Legal Entities</option>';
                                } else {
                                    entities.forEach(entity => {
                                        legalSelect.innerHTML +=
                                            `<option value="${entity.legalentity_id}">${entity.legalentity_name}</option>`;
                                    });
                                }
                            })
                            .catch(() => {
                                legalSelect.innerHTML = '<option value="">Error loading</option>';
                            });
                    } else {
                        legalSelect.innerHTML = '<option value="">Select Legal Entity</option>';
                    }
                });
            </script>
            <script>
                // Elements
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebarOverlay');

                // Use event delegation for the toggle icon - works even if class d-none exists
                document.addEventListener('click', (e) => {
                    const toggle = e.target.closest('.mobile-toggle');
                    if (toggle) {
                        // toggle sidebar open/close
                        const isClosed = sidebar.classList.contains('closed');
                        if (isClosed) {
                            sidebar.classList.remove('closed');
                            overlay.classList.add('show');
                        } else {
                            sidebar.classList.add('closed');
                            overlay.classList.remove('show');
                        }
                    }

                    // close sidebar when overlay clicked
                    if (e.target === overlay) {
                        sidebar.classList.add('closed');
                        overlay.classList.remove('show');
                    }
                });

                // Hide sidebar by default on small screens, show on desktop
                function setSidebarStateOnLoad() {
                    if (window.matchMedia('(max-width: 768px)').matches) {
                        sidebar.classList.add('closed');
                        overlay.classList.remove('show');
                    } else {
                        // ensure sidebar visible on desktop
                        sidebar.classList.remove('closed');
                        overlay.classList.remove('show');
                    }
                }

                // run on load
                setSidebarStateOnLoad();

                // on resize adjust state (keeps desktop open, mobile closed)
                window.addEventListener('resize', () => {
                    setSidebarStateOnLoad();
                });

                // make main menu clickable to set active state and auto-toggle others (optional behavior)
                document.querySelectorAll('.sidebar-main-item').forEach(item => {
                    item.addEventListener('click', (ev) => {
                        // mark clicked main menu active and remove active from siblings
                        document.querySelectorAll('.sidebar-main-item')
                            .forEach(i => {
                                if (!i.classList.contains('page-active')) i.classList.remove('active');
                            });

                        item.classList.add('active');

                        // allow bootstrap collapse to manage submenu show/hide; when opening, show overlay on mobile
                        const target = item.getAttribute('data-bs-target');
                        if (target) {
                            // after a small delay check if submenu opened and if on mobile show overlay
                            setTimeout(() => {
                                const panel = document.querySelector(target);
                                if (panel && panel.classList.contains('show') && window.matchMedia(
                                        '(max-width:768px)').matches) {
                                    overlay.classList.add('show');
                                    sidebar.classList.remove('closed');
                                } else {
                                    overlay.classList.remove('show');
                                }
                            }, 220);
                        }
                    });
                });

                // submenu item click - mark active and close sidebar on mobile (optional UX)
                document.querySelectorAll('.submenu-item').forEach(si => {
                    si.addEventListener('click', () => {
                        document.querySelectorAll('.submenu-item')
                            .forEach(s => {
                                if (!s.classList.contains('page-active')) s.classList.remove('active');
                            });

                        si.classList.add('active');

                        // on small screens auto-close sidebar
                        if (window.matchMedia('(max-width:768px)').matches) {
                            sidebar.classList.add('closed');
                            overlay.classList.remove('show');
                        }
                    });
                });
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {

                    // ADD PAGE-BASED ACTIVE (permanent)
                    const pageMain = document.querySelector('[data-bs-target="#masterMenu"]');
                    const pageSub = document.querySelectorAll('#masterMenu .submenu-item')[2];

                    pageMain.classList.add('active', 'page-active');
                    document.getElementById('masterMenu').classList.add('show');
                    pageSub.classList.add('active', 'page-active');
                });
            </script>

            <!-- COMPANY ID BASED LEGAL ENTITY SHOW SCRIPT -->
            <script>
                document.getElementById('companySelect').addEventListener('change', function() {
                    let companyId = this.value;
                    let legalDropdown = document.getElementById('legalEntitySelect');
                    legalDropdown.innerHTML = '<option>Loading...</option>';

                    if (companyId) {
                        fetch('/get-legal-entities/' + companyId)
                            .then(response => response.json())
                            .then(data => {
                                legalDropdown.innerHTML = '<option value="">Select Legal Entity</option>';

                                if (data.length === 0) {
                                    legalDropdown.innerHTML = '<option>No Legal Entities Found</option>';
                                    return;
                                }

                                data.forEach(entity => {
                                    legalDropdown.innerHTML +=
                                        `<option value="${entity.legalentity_id}">${entity.legalentity_name}</option>`;
                                });
                            }).catch(err => {
                                legalDropdown.innerHTML = '<option>Error loading data</option>';
                            });
                    } else {
                        legalDropdown.innerHTML = '<option value="">Select Legal Entity</option>';
                    }
                });
            </script>

            <!-- registration replicate -->
            <script>
                document.getElementById('addBtn').addEventListener('click', function() {
                    let clone = document.querySelector('.cloneItem').cloneNode(true);

                    // Reset fields inside the clone
                    clone.querySelectorAll('input').forEach(e => e.value = "");
                    clone.querySelectorAll('select').forEach(e => e.selectedIndex = 0);

                    document.getElementById('cloneArea').appendChild(clone);
                });

                document.getElementById('clearBtn').addEventListener('click', function() {
                    // remove all clones except first
                    const items = document.querySelectorAll('.cloneItem');
                    items.forEach((e, i) => {
                        if (i > 0) e.remove();
                    });

                    // clear first row fields
                    items[0].querySelectorAll('input').forEach(e => e.value = "");
                    items[0].querySelectorAll('select').forEach(e => e.selectedIndex = 0);
                });
            </script>

            <!-- Core Detail CLONE -->
            <script>
                // ⚡ Add new clone (works for all Add buttons)
                document.addEventListener('click', function(e) {
                    if (e.target && e.target.id === 'coreAddBtn') {
                        let clone = document.querySelector('.coreCloneItem').cloneNode(true);

                        // Clear input values
                        clone.querySelectorAll('input').forEach(el => el.value = '');

                        document.getElementById('coreCloneArea').appendChild(clone);
                    }
                });

                // 🧹 Clear button – reset to only first row
                document.getElementById('coreClearBtn').addEventListener('click', function() {
                    const rows = document.querySelectorAll('.coreCloneItem');
                    rows.forEach((row, index) => {
                        if (index > 0) row.remove();
                    });

                    rows[0].querySelectorAll('input').forEach(el => el.value = '');
                });
            </script>



            <!-- Empowerment Replicate -->
            <script>
                // ADD - Clone Row
                document.getElementById('empAddBtn').addEventListener('click', function() {
                    let original = document.querySelector('.empCloneItem');
                    let clone = original.cloneNode(true);

                    // Reset fields in clone
                    clone.querySelectorAll('input').forEach(el => el.value = "");
                    clone.querySelectorAll('select').forEach(el => el.selectedIndex = 0);
                    clone.querySelectorAll('input[type="file"]').forEach(el => el.value = "");

                    addEmpButtons(clone); // add remove + row-clear

                    document.getElementById('empCloneArea').appendChild(clone);
                });

                // Apply button logic to first/default row
                addEmpButtons(document.querySelector('.empCloneItem'));

                // --- Core Function: Attach Buttons to Each Row ---
                function addEmpButtons(row) {

                    // Remove previously generated remove buttons (to avoid duplicates)
                    row.querySelectorAll('.empRemoveBtn').forEach(btn => btn.remove());

                    // Row-specific clear button (keeps your ID but overrides action)
                    let clearBtn = row.querySelector('#empClearBtn');
                    clearBtn.onclick = function() {
                        row.querySelectorAll('input').forEach(el => el.value = "");
                        row.querySelectorAll('select').forEach(el => el.selectedIndex = 0);
                        row.querySelectorAll('input[type="file"]').forEach(el => el.value = "");
                    };

                    // Remove button for cloned rows
                    let removeBtn = document.createElement('button');
                    removeBtn.type = "button";
                    removeBtn.textContent = "Remove";
                    removeBtn.className = "btn btn-danger px-4 empRemoveBtn";

                    removeBtn.onclick = function() {
                        if (document.querySelectorAll('.empCloneItem').length > 1) {
                            row.remove();
                        }
                    };

                    // Attach remove button to the button area
                    let area = row.querySelector('.d-flex.gap-3');
                    area.appendChild(removeBtn);

                    // Hide remove button for the first row always
                    let allRows = document.querySelectorAll('.empCloneItem');
                    removeBtn.style.display = (allRows[0] === row) ? "none" : "inline-block";
                }
            </script>
            <!-- Branch In charge Details replicate clone -->
            <script>
                // ADD - Clone Branch In Charge Row
                document.getElementById('branchAddBtn').addEventListener('click', function() {
                    let clone = document.querySelector('.branchCloneItem').cloneNode(true);

                    // clear inputs & selects inside clone
                    clone.querySelectorAll('input').forEach(e => e.value = "");
                    clone.querySelectorAll('select').forEach(e => e.selectedIndex = 0);

                    document.getElementById('branchCloneArea').appendChild(clone);
                });

                // CLEAR - Remove all clones except first & reset first row
                document.getElementById('branchClearBtn').addEventListener('click', function() {
                    let items = document.querySelectorAll('.branchCloneItem');

                    items.forEach((row, index) => {
                        if (index > 0) row.remove();
                    });

                    // reset first original row fields
                    items[0].querySelectorAll('input').forEach(e => e.value = "");
                    items[0].querySelectorAll('select').forEach(e => e.selectedIndex = 0);
                });
            </script>
            </script>
            <!-- scope In charge Details replicate clone -->
            <script>
                document.addEventListener("click", function(e) {

                    // ADD NEW CLONE
                    if (e.target.classList.contains("addBtn")) {
                        let clone = e.target.closest(".scopeItem").cloneNode(true);

                        // Reset values in the cloned block
                        clone.querySelectorAll("select").forEach(s => s.selectedIndex = 0);

                        document.getElementById("scopeCloneArea").appendChild(clone);
                    }

                    // CLEAR SPECIFIC BLOCK
                    if (e.target.classList.contains("clearBtn")) {
                        let section = e.target.closest(".scopeItem");
                        section.querySelectorAll("select").forEach(s => s.selectedIndex = 0);
                    }

                });
            </script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            @if ($errors->any())
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed',
                        html: `{!! implode('<br>', $errors->all()) !!}`
                    });
                </script>
            @endif

            @if (session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: "{{ session('error') }}"
                    });
                </script>
            @endif

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: "{{ session('success') }}"
                    });
                </script>
            @endif
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            @if (session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Duplicate Entry',
                        text: "{{ session('error') }}",
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif


        </body>

        </html>
