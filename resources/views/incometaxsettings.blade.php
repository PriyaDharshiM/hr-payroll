<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Income Tax Settings</title>

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
                <span class="mas semibold">Income Tax Financial Setting</span>
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

                <!-- Top Two Fields -->
                <div class="row g-4 mb-3">

                    <!-- Company -->
                    <div class="col-md-3">
                        <label class="form-label">Company <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Company</option>
                            </select>
                        </div>
                    </div>

                    <!-- Legal Entity -->
                    <div class="col-md-3">
                        <label class="form-label">Legal Entity <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Legal Entity</option>
                            </select>
                        </div>
                    </div>

                    <!-- PAN -->
                    <div class="col-md-3">
                        <label class="form-label">PAN No <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter PAN Number">
                    </div>

                    <!-- TAN -->
                    <div class="col-md-3">
                        <label class="form-label">TAN No <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter TAN Number">
                    </div>

                    <!-- Category Input -->
                    <div class="col-md-3">
                        <label class="form-label">Word / Circle <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Word / Circle Name">
                    </div>

                    <!-- Category Input -->
                    <div class="col-md-3">
                        <label class="form-label">CIT Address 1 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter CIT Address1">
                    </div>

                    <!-- Category Input -->
                    <div class="col-md-3">
                        <label class="form-label">CIT Address 2 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter CIT Address2">
                    </div>

                </div>

                <div class="row g-4 mb-3">
                    <!-- Company -->
                    <div class="col-md-3">
                        <label class="form-label">Type <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select</option>
                            </select>
                        </div>
                    </div>

                    <!-- Legal Entity -->
                    <div class="col-md-3">
                        <label class="form-label">From <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Date">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">To <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Date">

                        </div>
                    </div>

                    <div class="col-md-3 d-flex  gap-4 ">
                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="category_type">
                            <span class="size-of-font">Default Year</span>
                        </label>
                    </div>

                    <!-- TAN -->
                    <div class="col-md-3">
                        <label class="form-label">Acknowledgement No 1 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Acknowledgement No 1">
                    </div>

                    <!-- Category Input -->
                    <div class="col-md-3">
                        <label class="form-label">Acknowledgement No 2 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Acknowledgement No 2">
                    </div>

                    <!-- Category Input -->
                    <div class="col-md-3">
                        <label class="form-label">Acknowledgement No 3 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Acknowledgement No 3">
                    </div>

                    <!-- Category Input -->
                    <div class="col-md-3">
                        <label class="form-label">Acknowledgement No 4 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Acknowledgement No 4">
                    </div>
                </div>


                <div class="row g-4 mb-3 align-items-center size-of-font">
                    <!-- Metro title -->
                    <div class="col-md-2 fw-semibold">
                        Metro 50%
                    </div>

                    <!-- Checkboxes group -->
                    <div class="col-md-10 d-flex flex-wrap gap-5">
                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="metro_basic">
                            <span class="fw-bold">Basic</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="metro_da">
                            <span class="fw-bold">DA</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="metro_arrear_basic">
                            <span class="fw-bold">Arrear Basic</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="metro_arrear_da">
                            <span class="fw-bold">Arrear DA</span>
                        </label>
                    </div>
                </div>

                <div class="row g-4 mb-3 align-items-center size-of-font">
                    <!-- Non metro title -->
                    <div class="col-md-2 fw-semibold">
                        Non Metro 40%
                    </div>

                    <!-- Checkboxes group -->
                    <div class="col-md-10 d-flex flex-wrap gap-5">
                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="nonmetro_basic">
                            <span class="fw-bold">Basic</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="nonmetro_da">
                            <span class="fw-bold">DA</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="nonmetro_arrear_basic">
                            <span class="fw-bold">Arrear Basic</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="nonmetro_arrear_da">
                            <span class="fw-bold">Arrear DA</span>
                        </label>
                    </div>
                </div>

                <div class="row g-4 mb-3 mt-2">
                    <div class="col-md-3">
                        <label class="form-label">Authorized Signature</label>

                        <div
                            style="
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

                    <div class="col-md-3">
                        <label class="form-label">Designation <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Designation">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Father's Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Father's Name">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Rabate <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter">
                    </div>
                </div>


                <!-- BASIC DETAILS CARD -->
                <div class="card p-0 cardborder">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Income Tax Section Creation
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                        <div class="row g-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label">Section Name</label>
                                <input type="text" class="form-control" placeholder="Enter Section Name">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Limit</label>
                                <input type="text" class="form-control" placeholder="Enter Limit">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Regime <span class="text-danger">*</span></label>
                                <div class="d-flex flex-wrap gap-4 mt-1">
                                    <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="old_regime">
                                        <span class="size-of-font">Old Regime</span>
                                    </label>
                                    <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="new_regime">
                                        <span class="size-of-font">New Regime</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mb-2">
                            <div class="col-md-3 d-flex  gap-4 ">
                                <label class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="category_type">
                                    <span class="size-of-font">Bill Required</span>
                                </label>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Order No</label>
                                <input type="text" class="form-control" placeholder="Enter Order No">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end align-items-end">
                                <button class="btn btn-primary px-3">Add</button>
                            </div>
                        </div>

                        <div class="card p-0 mt-3 cardborder">

                            <!-- Header -->
                            <div
                                class="cardheader">
                                Section List
                            </div>

                            <!-- Body -->
                            <div class="p-3">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="position-relative" style="width:260px;">
                                        <input type="text" class="form-control" placeholder="Search by Field Name">
                                        <i class="bi bi-search position-absolute"
                                            style="right:12px; top:50%; transform:translateY(-50%); font-size:14px;"></i>
                                    </div>
                                    <button class="btn btn-primary px-3">Go</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table">
                                        <thead>
                                            <tr>
                                                <th>S. No</th>
                                                <th>Company</th>
                                                <th>Legal Entity</th>
                                                <th>Branch</th>
                                                <th>Category</th>
                                                <th style="width:100px;">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>PayNortheast</td>
                                                <td>Lexiqvolax</td>
                                                <td>Raja Garden Chowk, New Delhi</td>
                                                <td>Home & Lifestyle</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-download text-primary icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Businessworld</td>
                                                <td>Iselectrics</td>
                                                <td>Dap, New Delhi</td>
                                                <td>Tourism</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-download text-primary icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Astra Payroll Services</td>
                                                <td>Toughzap</td>
                                                <td>Micro Finance Branch Karol Bagh</td>
                                                <td>Tech</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-download text-primary icon-bold"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- FOOTER + PAGINATION -->
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
                                    <option>20 Items/Page</option>
                                    <option>50 Items/Page</option>
                                </select>
                            </div>

                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                {{-- income tax sub section --}}
                <div class="card p-0 mt-4 cardborder">

                    <!-- Header -->
                    <div
                        class="cardheader">
                        Income Tax Sub Section
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                        <div class="row g-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label">Section <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Section</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Sub Section <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Sub Section">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Limit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Limit">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Bill Required <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bill Required">
                            </div>
                        </div>

                        <div class="row g-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label">Regime <span class="text-danger">*</span></label>
                                <div class="d-flex flex-wrap gap-4 mt-1">
                                    <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="old_regime">
                                        <span class="size-of-font">Old Regime</span>
                                    </label>
                                    <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="new_regime">
                                        <span class="size-of-font">New Regime</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Order No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Order No">
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-end">
                                <button class="btn btn-primary px-3">Add</button>
                            </div>
                            
                        </div>


                        <div class="mt-2">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="position-relative" style="width:260px;">
                                        <input type="text" class="form-control" placeholder="Search by Field Name">
                                        <i class="bi bi-search position-absolute"
                                            style="right:12px; top:50%; transform:translateY(-50%); font-size:14px;"></i>
                                    </div>
                                    <button class="btn btn-primary px-3">Go</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table">
                                        <thead>
                                            <tr>
                                                <th>S. No</th>
                                                <th>Section</th>
                                                <th>Sub Section</th>
                                                <th>Limit</th>
                                                <th>Bill Required</th>
                                                <th>Regime</th>
                                                <th>Order No</th>
                                                <th style="width:100px;">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Section124</td>
                                                <td>B10101 - UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>No</td>
                                                <td>New</td>
                                                <td>66224</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Section115</td>
                                                <td>B10201L - L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>Yes</td>
                                                <td>Old</td>
                                                <td>07560</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Section120A</td>
                                                <td>B10201L - U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>No</td>
                                                <td>Old</td>
                                                <td>60341</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Section118</td>
                                                <td>B10201L - L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>No</td>
                                                <td>New</td>
                                                <td>41748</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Section121B</td>
                                                <td>B10201L - L3 Fall 20</td>
                                                <td>₹3,95,800</td>
                                                <td>No</td>
                                                <td>New</td>
                                                <td>41748</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- FOOTER + PAGINATION -->
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
                                    <option>20 Items/Page</option>
                                    <option>50 Items/Page</option>
                                </select>
                            </div>

                        </div>
                            </div>
                        
                    </div>
                </div>


                <!-- Income tax slabs -->
                <div class="card p-0 mt-4 cardborder">

                    <!-- Header -->
                    <div
                        class="cardheader">
                        Income Tax Slabs
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                        <div class="row g-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label">Financial Year <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Financial Year</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Type <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Type</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Regime <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Regime</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row g-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label">Amount From <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Amount From">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Amount To <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Amount To">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Percentage <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter percentage">
                            </div>

                            <div class="col-md-3 d-flex justify-content-end align-items-end">
                                <button class="btn btn-primary px-3">Add</button>
                            </div>
                        </div>
                       

                        

                        <div class="card p-0 mt-3 cardborder">

                            <!-- Header -->
                            <div
                                class="cardheader">
                                Subcharge Slab
                            </div>

                            <!-- Body -->
                            <div class="p-3">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="position-relative" style="width:260px;">
                                        <input type="text" class="form-control" placeholder="Search by Leave type">
                                        <i class="bi bi-search position-absolute"
                                            style="right:12px; top:50%; transform:translateY(-50%); font-size:14px;"></i>
                                    </div>
                                    <button class="btn btn-primary px-3">Go</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Amount From</th>
                                                <th>Amount To</th>
                                                <th>Percentage</th>
                                                <th style="width:100px;">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dashboard</td>
                                                <td>₹1,82,000</td>
                                                <td>97%</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Wallet</td>
                                                <td>₹4,95,000</td>
                                                <td>99%</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Settings</td>
                                                <td>₹2,50,000</td>
                                                <td>96%</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Rates</td>
                                                <td>₹2,12,000</td>
                                                <td>98%</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>History</td>
                                                <td>₹4,10,350</td>
                                                <td>95%</td>
                                                <td class="text-center">
                                                    <i class="bi bi-pencil-square text-primary me-2 icon-bold"></i>
                                                    <i class="bi bi-eye text-primary me-2 icon-bold"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- FOOTER + PAGINATION -->
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
                                    <option>20 Items/Page</option>
                                    <option>50 Items/Page</option>
                                </select>
                            </div>
                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


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
            const pageSub = document.querySelectorAll('#masterMenu .submenu-item')[19];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('masterMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
