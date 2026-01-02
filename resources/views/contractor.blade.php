<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Contractor Master Entry</title>

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

        <div class="right-70 d-flex align-items-center justify-content-between" style="width:80%;padding:0px 10px;">

            <div class="breadcrumb-area">
                <span class="fw-semibold mas">Master</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="mas semibold">Contractor Master Entry</span>
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
    <!-- ========== /TOPBAR ========== -->

    <!-- overlay for mobile when sidebar open -->
    <div id="sidebarOverlay" class="overlay" aria-hidden="true"></div>

    <div style="display:flex; min-height: calc(100vh - 60px);">


        <!-- SIDEBAR INCLUDE -->
        @include('partials.sidebar')

        <!-- CONTENT -->
        <main class="content-area bg-white">
            <div class="container-fluid mt-3">


    

                        <div class="row g-4">

                            <!-- Company -->
                            <div class="col-md-3">
                                <label class="form-label">Company <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Company</option>
                                </select>
                            </div>

                            <!--legal entity -->
                            <div class="col-md-3">
                                <label class="form-label">Legal Entity <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Legal Entity</option>
                                </select>
                            </div>

                            <!-- Branch -->
                            <div class="col-md-3">
                                <label class="form-label">Branch <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Branch</option>
                                </select>
                            </div>

                            <!-- Contractor Code -->
                            <div class="col-md-3">
                                <label class="form-label">Contractor Code</label>
                                <input type="text" class="form-control" placeholder="Enter Contractor Code">
                            </div>

                            <!-- Contractor name -->
                            <div class="col-md-3">
                                <label class="form-label">Contractor Name</label>
                                <input type="text" class="form-control" placeholder="Enter Contractor Name">
                            </div>

                            <!-- Whether Subcontractor? -->
                            <div class="col-md-3 mt-5">
                                <label class="check-box">
                                    <input type="checkbox" />
                                   <span class="size-of-font">Whether Subcontractor?</span> 
                                </label>
                            </div>

                            <!-- Main Contractor -->
                            <div class="col-md-3">
                                <label class="form-label">Main Contractor <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Contractor</option>
                                </select>
                            </div>

                            <!-- Whether the contractor an excising Legal Entity  -->
                            <div class="col-md-3 mt-5">
                                <label class="check-box">
                                    <input type="checkbox" />
                                    <span class="size-of-font">Whether the contractor an excising Legal Entity</span>
                                </label>
                            </div>

                            <!-- Contractor Address 1 -->
                            <div class="col-md-3">
                                <label class="form-label">Contractor Address 1</label>
                                <input type="text" class="form-control" placeholder="Enter Contractor Address 1">
                            </div>

                            <!-- Contractor Address 2 -->
                            <div class="col-md-3">
                                <label class="form-label">Contractor Address 2 </label>
                                <input type="text" class="form-control" placeholder="Enter Contractor Address 2">
                            </div>


                            <!-- State -->
                            <div class="col-md-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select State</option>
                                </select>
                            </div>

                            <!-- City -->
                            <div class="col-md-3">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select City</option>
                                </select>
                            </div>

                            <!-- Pincode -->
                            <div class="col-md-3">
                                <label class="form-label">Pincode </label>
                                <input type="text" class="form-control" placeholder="Enter Pincode">
                            </div>

                            <!-- Mobile no -->
                            <div class="col-md-3">
                                <label class="form-label">Mobile No </label>
                                <input type="text" class="form-control" placeholder="Enter Mobile Number">
                            </div>

                            <!-- Email id -->
                            <div class="col-md-3">
                                <label class="form-label">Email ID </label>
                                <input type="text" class="form-control" placeholder="Enter Email ID">
                            </div>

                            <!-- Commencement of work -->
                            <div class="col-md-3">
                                <label class="form-label">Commencement of work<span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Contractor Short Name -->
                            <div class="col-md-3">
                                <label class="form-label">Contractor Short Name </label>
                                <input type="text" class="form-control" placeholder="Enter Contractor Short Name">
                            </div>

                            <!-- OT Applicability -->
                            <div class="col-md-3">
                                <label class="form-label">OT Applicability<span class="text-danger">*</span> </label>
                                <select class="form-select">
                                    <option>Select Applicability</option>
                                </select>
                            </div>

                            <!-- Establishment Name -->
                            <div class="col-md-3">
                                <label class="form-label">Establishment Name</label>
                                <input type="text" class="form-control" placeholder="Enter Establishment Name">
                            </div>

                            <!-- Establishment Type -->
                            <div class="col-md-3">
                                <label class="form-label">Establishment Type </label>
                                <input type="text" class="form-control" placeholder="Enter Establishment Type">
                            </div>

                            <!-- Establishment Address 1 -->
                            <div class="col-md-3">
                                <label class="form-label">Establishment Address 1 </label>
                                <input type="text" class="form-control" placeholder="Enter Establishment Address 1">
                            </div>

                            <!-- Establishment Address 2 -->
                            <div class="col-md-3">
                                <label class="form-label">Establishment Address 2 </label>
                                <input type="text" class="form-control" placeholder="Enter Establishment Address 2">
                            </div>

                            <!-- State -->
                            <div class="col-md-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select State</option>
                                </select>
                            </div>

                            <!-- City -->
                            <div class="col-md-3">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select City</option>
                                </select>
                            </div>

                            <!-- Pincode -->
                            <div class="col-md-3">
                                <label class="form-label">Pincode </label>
                                <input type="text" class="form-control" placeholder="Enter Pincode">
                            </div>

                            <!-- Mobile no -->
                            <div class="col-md-3">
                                <label class="form-label">Mobile No </label>
                                <input type="text" class="form-control" placeholder="Enter Mobile Number">
                            </div>

                            <!-- Email id -->
                            <div class="col-md-3">
                                <label class="form-label">Email ID </label>
                                <input type="text" class="form-control" placeholder="Enter Email ID">
                            </div>

                            <!-- URL -->
                            <div class="col-md-3">
                                <label class="form-label">URL </label>
                                <input type="text" class="form-control" placeholder="Enter URL">
                            </div>

                            <!-- Nature of work -->
                            <div class="col-md-3">
                                <label class="form-label"> Nature of work </label>
                                <input type="text" class="form-control" placeholder="Enter ">
                            </div>

                            <!-- PF Code -->
                            <div class="col-md-3">
                                <label class="form-label"> PF Code </label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- ESI Code -->
                            <div class="col-md-3">
                                <label class="form-label">ESI Code </label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                        </div>

                   
                <div class="card p-0 mb-4 mt-4 cardborder">

                    <!-- Header -->
                    <div class="cardheader">
                        <h6 class="m-0 fw-semibold">Applicability Details</h6>


                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!--  Agreement Date -->
                            <div class="col-md-3 mt-5 size-of-font">
                                <label class="check-box">
                                    <input type="checkbox" />
                                    Agreement Date
                                </label>
                            </div>

                            <!-- Issued on -->
                            <div class="col-md-3">
                                <label class="form-label">Issued on<span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Enter">
                            </div>

                            <!-- Vaild From -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild To -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!--  Canteen -->
                            <div class="col-md-3 mt-5 size-of-font">
                                <label class="check-box">
                                    <input type="checkbox" />
                                    Canteen
                                </label>
                            </div>

                            <!-- Issued on -->
                            <div class="col-md-3">
                                <label class="form-label">Issued on<span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Enter">
                            </div>

                            <!-- Vaild From -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild To -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!--  Entry Pass -->
                            <div class="col-md-3 mt-5 size-of-font">
                                <label class="check-box">
                                    <input type="checkbox" />
                                    Entry Pass
                                </label>
                            </div>

                            <!-- Issued on -->
                            <div class="col-md-3">
                                <label class="form-label">Issued on<span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Enter">
                            </div>

                            <!-- Vaild From -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild To -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!--  Transport -->
                            <div class="col-md-3 mt-5 size-of-font">
                                <label class="check-box">
                                    <input type="checkbox" />
                                    Transport
                                </label>
                            </div>

                            <!-- Issued on -->
                            <div class="col-md-3">
                                <label class="form-label">Issued on<span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Enter">
                            </div>

                            <!-- Vaild From -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild To -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- =======================
       Contractor In-Charge Details SECTION
    ======================= -->
                <div class="card p-0 mb-4 cardborder">

                    <!-- Header -->
                    <div class="cardheader">
                        Contractor In-Charge Details
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!-- Act Name -->
                            <div class="col-md-3">
                                <label class="form-label">Act Name <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                            <!-- In-charge Name -->
                            <div class="col-md-3">
                                <label class="form-label">In-charge Name</label>
                                <input class="form-control" placeholder="Enter In-charge Name">
                            </div>

                            <!-- Designation -->
                            <div class="col-md-3">
                                <label class="form-label">Designation <span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Enter Designation ">
                            </div>

                            <!-- Department -->
                            <div class="col-md-3">
                                <label class="form-label">Department</label>
                                <input class="form-control" placeholder="Enter Department">
                            </div>

                            <!-- Contact No -->
                            <div class="col-md-3">
                                <label class="form-label">Contact No</label>
                                <input class="form-control" placeholder="Enter Contact No">
                            </div>

                            <!-- Email id -->
                            <div class="col-md-3">
                                <label class="form-label">Email ID </label>
                                <input type="text" class="form-control" placeholder="Enter Email ID">
                            </div>

                            <!-- Address -->
                            <div class="col-md-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address">
                            </div>

                            <!-- Upload Box -->
                            <div class="col-md-3">
                                <label class="form-label">Authorized Signatory</label>

                                <div style="
                        border:2px dashed #3b82f6;
                        background:#eef4ff;
                        padding:20px;
                        text-align:center;
                        border-radius:12px;">

                                    <p class="mb-2" style="font-size:12px; color:#444;">Drag & Drop Files or</p>

                                    <button class="btn btn-primary px-3 py-1" style="font-size:11px;">
                                        <i class="bi bi-upload"></i> Browse
                                    </button>

                                    <p class="mt-2" style="font-size:11px; color:#6b7280;">
                                        Supported formats JPEG, PNG, WebP
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-3 mt-4">
                                <button class="btn btn-primary d-flex align-items-center gap-2" style="font-size:14px;">
                                    Add
                                </button>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- =======================
        LEAVE ACCOUNTING PERIOD SECTION
    ======================= -->
                <div class="card p-0 mb-5 cardborder">

                    <!-- Header -->
                    <div class="cardheader">
                        Leave Accounting Period
                    </div>

                    <div class="p-4">
                        <div class="row g-4">

                            <!-- Leave Accounting Period (Top Radio Buttons) -->
                            <div class="mb-7 d-flex gap-5  align-items-center row-md-4">
                                <label class="d-flex align-items-center gap-2">
                                    <input type="radio" name="agreement" checked>
                                    <span class="mas">Leave Accounting Period based on DOJ</span>
                                </label>

                                <label class="d-flex align-items-center gap-2">
                                    <input type="radio" name="agreement">
                                    <span class="mas">Custom Period on Selection</span>
                                </label>
                            </div>

                            <!-- Leave Accounting Year Starts on  -->

                            <div class="col-md-3">
                                <label class="form-label">Leave Accounting Year Starts on <span
                                        class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- =======================
      Wage Distribution SECTION
    ======================= -->
                <div class="card p-0 mb-4 cardborder">

                    <!-- Header -->
                    <div class="cardheader">
                        Wage Distribution
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!-- Wage Type -->
                            <div class="col-md-3">
                                <label class="form-label">Wage Type <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                            <!-- Wage based in -->
                            <div class="col-md-3">
                                <label class="form-label">Wage based in<span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                            <!-- Category -->
                            <div class="col-md-3">
                                <label class="form-label">Category<span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                            <!-- Amount of Daily Wages -->
                            <div class="col-md-3">
                                <label class="form-label">Amount of Daily Wages</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                        </div>

                    </div>
                </div>



                <!--RC Details SECTION
    ======================= -->
                <div class="card p-0 mb-4 cardborder" >

                    <!-- Header -->
                    <div class="cardheader">
                        RC Details
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!--  Type of RC-->
                            <div class="col-md-3">
                                <label class="form-label">Type of RC <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                            <!-- Rc No -->
                            <div class="col-md-3">
                                <label class="form-label">Rc No</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- Rc Strength -->
                            <div class="col-md-3">
                                <label class="form-label">Rc Strength</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- Issued on -->
                            <div class="col-md-3">
                                <label class="form-label">Issued on<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild From -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild To -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Name of work -->
                            <div class="col-md-3">
                                <label class="form-label">Name of work</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- Authority-->
                            <div class="col-md-3">
                                <label class="form-label">Authority</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                        </div>

                    </div>
                </div>


                <!--License Details SECTION
    ======================= -->
                <div class="card p-0 mb-4 cardborder">

                    <!-- Header -->
                    <div class="cardheader">
                        License Details
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!--  Type of License-->
                            <div class="col-md-3">
                                <label class="form-label">Type of License <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                </select>
                            </div>

                            <!-- Rc No -->
                            <div class="col-md-3">
                                <label class="form-label">Rc No</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- License No -->
                            <div class="col-md-3">
                                <label class="form-label">License No</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- License Strength -->
                            <div class="col-md-3">
                                <label class="form-label">License Strength</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- Issued on -->
                            <div class="col-md-3">
                                <label class="form-label">Issued on<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild From -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Vaild To -->
                            <div class="col-md-3">
                                <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Name of work -->
                            <div class="col-md-3">
                                <label class="form-label">Name of work</label>
                                <input type="text" class="form-control" placeholder="Enter">
                            </div>

                            <!-- Upload Box -->
                            <div class="col-md-3">
                                <label class="form-label">Attachment</label>

                                <div style="
                        border:2px dashed #3b82f6;
                        background:#eef4ff;
                        padding:20px;
                        text-align:center;
                        border-radius:12px;">

                                    <p class="mb-2" style="font-size:12px; color:#444;">Drag & Drop Files or</p>

                                    <button class="btn btn-primary px-3 py-1" style="font-size:11px;">
                                        <i class="bi bi-upload"></i> Browse
                                    </button>

                                    <p class="mt-2" style="font-size:11px; color:#6b7280;">
                                        Supported formats JPEG, PNG, WebP
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--Insurance Policy SECTION
    ======================= -->
            <div class="card p-0 mb-4 cardborder">

                <!-- Header -->
                <div class="cardheader">
                    Insurance Policy
                </div>

                <!-- Body -->
                <div class="p-4">
                    <div class="row g-4">

                        <!--  Type of Insurance-->
                        <div class="col-md-3">
                            <label class="form-label">Type of Insurance <span class="text-danger">*</span></label>
                            <select class="form-select">
                                <option>Select</option>
                            </select>
                        </div>

                        <!-- Insurance No -->
                        <div class="col-md-3">
                            <label class="form-label">Insurance No</label>
                            <input type="text" class="form-control" placeholder="Enter">
                        </div>

                        <!-- Insurance Amount -->
                        <div class="col-md-3">
                            <label class="form-label">Insurance Amount</label>
                            <input type="text" class="form-control" placeholder="Enter">
                        </div>

                        <!-- Insurance Strength -->
                        <div class="col-md-3">
                            <label class="form-label">Insurance Strength</label>
                            <input type="text" class="form-control" placeholder="Enter">
                        </div>

                        <!-- Issued on -->
                        <div class="col-md-3">
                            <label class="form-label">Issued on<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control" placeholder="Select Time">
                            </div>
                        </div>

                        <!-- Vaild From -->
                        <div class="col-md-3">
                            <label class="form-label">Vaild From<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control" placeholder="Select Time">
                            </div>
                        </div>

                        <!-- Vaild To -->
                        <div class="col-md-3">
                            <label class="form-label">Vaild To<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control" placeholder="Select Time">
                            </div>
                        </div>

                        <!-- Upload Box -->
                        <div class="col-md-3">
                            <label class="form-label">Attachment</label>

                            <div style="
                        border:2px dashed #3b82f6;
                        background:#eef4ff;
                        padding:20px;
                        text-align:center;
                        border-radius:12px;">

                                <p class="mb-2" style="font-size:12px; color:#444;">Drag & Drop Files or</p>

                                <button class="btn btn-primary px-3 py-1" style="font-size:11px;">
                                    <i class="bi bi-upload"></i> Browse
                                </button>

                                <p class="mt-2" style="font-size:11px; color:#6b7280;">
                                    Supported formats JPEG, PNG, WebP
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <!-- Buttons -->

            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                <button class="btn btn-outline-primary px-4">Save Draft</button>
                <button class="btn btn-primary px-4">Submit</button>
            </div>

    </div>

    </main>

    </div>

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
            const pageSub = document.querySelectorAll('#masterMenu .submenu-item')[18];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('masterMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
