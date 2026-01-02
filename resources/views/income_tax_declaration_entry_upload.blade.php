<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Income Tax - Declaration Entry/Upload</title>

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
                <span class="semibold mas">Dashboard</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="fw-semibold mas">Income Tax - Declaration Entry/Upload</span>
            </div>

            <div class="d-flex align-items-center gap-4">

                <div class="search-box position-relative" style="width:350px;">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="What are you looking for ?">
                </div>

                <i class="bi bi-bell bell-icon" style="font-size:20px; cursor:pointer;"></i>

                <div class="dropdown">
                    <div class="profile-group" data-bs-toggle="dropdown">
                        <img src="siteassets/img/user.png" class="profile-img" alt="">
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

        @include('partials.sidebar')



        <!-- CONTENT -->
        <main class="content-area bg-white">
            <div class="container-fluid mt-3">
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

                    <!-- Branch -->
                    <div class="col-md-3">
                        <label class="form-label">Branch <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Branch </option>
                            </select>

                        </div>
                    </div>

                    <!-- Category-->
                    <div class="col-md-3">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Category</option>
                            </select>
                        </div>
                    </div>

                    <!-- Radio Buttons -->
                    <div class="col-md-3 d-flex align-items-center">
                        <label class="d-flex align-items-center gap-2 me-4">
                            <input type="radio" name="category">
                            <span class="mas">Core</span>
                        </label>

                        <label class="d-flex align-items-center gap-2">
                            <input type="radio" name="category">
                            <span class="mas">Contract Labour</span>
                        </label>
                    </div>


                    <!-- Select Employee -->
                    <div class="col-md-3">
                        <label class="form-label">Select Employee <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Employee</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary px-4">Submit</button>
                    </div>

                </div>




                <!--Employee Details
     ======================= -->
                <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div style="background:#F7F7F7; padding:15px 20px; border-radius:12px 12px 0 0;
                    font-weight:600; font-size:15px;">
                        Employee Details
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!--  Employee Code-->
                            <div class="col-md-3">
                                <label class="form-label"> Employee Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Employee Code">
                            </div>

                            <!-- Employee Name-->
                            <div class="col-md-3">
                                <label class="form-label">Employee Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Employee Name ">
                            </div>

                            <!-- PAN No -->
                            <div class="col-md-3">
                                <label class="form-label">PAN No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter PAN No">
                            </div>

                            <!-- Date of Joining -->
                            <div class="col-md-3">
                                <label class="form-label">Date of Joining<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-3">
                                <label class="form-label">DOB<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Date">
                                </div>
                            </div>

                            <!-- Employee Type -->
                            <div class="col-md-3">
                                <label class="form-label">Employee Type<span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Category of Employee -->
                            <div class="col-md-3">
                                <label class="form-label">Category of Employee<span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Category </option>
                                    </select>
                                </div>
                            </div>

                            <!--No of children-->
                            <div class="col-md-3">
                                <label class="form-label">No of children<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter No of children ">
                            </div>

                            <!-- HRA-->
                            <div class="col-md-3">
                                <label class="form-label">HRA<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter HRA">
                            </div>

                            <!-- Regime-->
                            <div class="col-md-3">
                                <label class="form-label">Regime<span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Regime </option>
                                    </select>
                                </div>
                            </div>


                            <!-- Default as New Regime-->

                            <div class="col-md-3 d-flex align-items-center">
                                <label class="d-flex align-items-center gap-2 me-4">
                                    <input type="radio" name="category">
                                    <span class="mas">Default as New Regime</span>
                                </label>
                            </div>

                            <!-- Rent From -->
                            <div class="col-md-3">
                                <label class="form-label">Rent From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Date">
                                </div>
                            </div>

                            <!-- PAN No of lender-->
                            <div class="col-md-3">
                                <label class="form-label">PAN No of lender <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter PAN No of lender">
                            </div>

                            <!-- Rent From -->
                            <div class="col-md-3">
                                <label class="form-label">Rent From<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Date">
                                </div>
                            </div>

                            <div class="col-md-6 text-end">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                        </div>
                    </div>

                </div>

                <!--Sections
      ======================= -->
                <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div style="background:#F7F7F7; padding:15px 20px; border-radius:12px 12px 0 0;
                    font-weight:600; font-size:15px;">
                        Sections
                    </div>


                    <!--Section 10
                      ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 10
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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






                    <!--Section 16
                  ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 16
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 80C
                  ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80C
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 80D
      ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80D
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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



                    <!--Section 22
                   ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 22
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 24
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 24
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 80E
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80E
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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

                    <!--Section 80EE
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80EE
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 80EEA
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80EEA
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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

                    <!--Section 80DD
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80DD
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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



                    <!--Section 80DDB
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80DDB
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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



                    <!--Section 80EEB
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80EEB
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 80A
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80A
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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


                    <!--Section 80U
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Section 80U
                                </div>

                                <!-- Right Search + Button -->
                                <div class="d-flex align-items-center gap-2">

                                    <!-- Search Input -->
                                    <div style="position: relative; width:250px;">
                                        <input type="text" class="form-control" placeholder="Search by"
                                            style="border-radius:30px; padding-right:40px;">

                                        <i class="bi bi-search"
                                            style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                        </i>
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                        Browse
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 1 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 1<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 2 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 2<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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
                        <div class="p-4">
                            <div class="row g-4">

                                <!-- Sub Section 3 -->
                                <div class="col-md-3">
                                    <label class="form-label">Sub Section 3<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <select class="form-select">
                                            <option>Select Section</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Box -->
                                <div class="col-md-4">
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

                            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <div class="d-flex align-items-center gap-2">

                                <!-- Search Input -->
                                <div style="position: relative; width:250px;">
                                    <input type="text" class="form-control" placeholder="Search by"
                                        style="border-radius:30px; padding-right:40px;">

                                    <i class="bi bi-search"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:#777;">
                                    </i>
                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary" style="border-radius:8px; padding:6px 18px;">
                                    Go
                                </button>
                            </div>
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Sub section 1</th>
                                                <th>Sub section 2</th>
                                                <th>Sub section 3</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 124</td>
                                                <td>B10101-UB10 Fall 20</td>
                                                <td>₹2,50,000</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 115</td>
                                                <td>B10201L-L9 Fall 20</td>
                                                <td>₹4,10,350</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 120A</td>
                                                <td>B10201L-U Fall 20</td>
                                                <td>₹3,78,650</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 118</td>
                                                <td>B10201L-L8 Fall 20</td>
                                                <td>₹2,67,800</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 121B</td>
                                                <td>B10201L-L3 Fall 20</td>
                                                <td>₹3,95,900</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Section 116</td>
                                                <td>B10201L-L7 Fall 20</td>
                                                <td>₹1,45,200</td>
                                                <td>
                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;">
                                                    </i>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Footer -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                            style="margin: 10px;">
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

                    <!--Regime Comparison
    ======================= -->
                    <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin: 20px;">

                        <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; ">

                            <!-- ONE-LINE HEADER BAR -->
                            <div class="d-flex justify-content-between align-items-center"
                                style="background:#F7F7F7; padding:12px 18px; border-radius:12px 12px 0 0;">

                                <!-- Left Title -->
                                <div style="font-weight:600; font-size:15px;">
                                    Regime Comparison
                                </div>
                            </div>


                        </div>


                        <!-- Body -->
                        <div class="p-4">
                            <div class="row g-4">
                                <div class="row g-2 mt-2">

                                    <!-- Search box container -->
                                    <div style="position: relative; width: 60%; max-width: 280px;">
                                        <input type="text" class="form-control"
                                            placeholder="Search by Company,Branch etc"
                                            style="border-radius: 30px; padding-right: 40px;">

                                        <i class="bi bi-search"
                                            style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); color: #777;">
                                        </i>
                                    </div>

                                    <!-- Go button -->
                                    <div style="width: auto;">
                                        <button class="btn btn-primary d-flex align-items-center gap-2"
                                            style="font-size:14px;">
                                            Go
                                        </button>
                                    </div>
                                </div>


                                <div class="card p-0 mt-4 cardborder">

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 custom-table ">
                                            <thead>
                                                <tr>
                                                    <td>S.No</td>
                                                    <th></th>
                                                    <th>Salary</th>
                                                    <th>Other income</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Gross Total</td>
                                                    <td>₹1,45,200</td>
                                                    <td>₹1,45,200</td>


                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Other Income</td>
                                                    <td>₹4,95,400</td>
                                                    <td>₹4,95,400</td>


                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Income from Housing Property</td>
                                                    <td>₹2,50,000</td>
                                                    <td>₹2,50,000</td>


                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Loss of Housing Property</td>
                                                    <td>₹2,12,300</td>
                                                    <td>₹2,12,300</td>


                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>Gross Income</td>
                                                    <td>₹4,10,350</td>
                                                    <td>₹4,10,350</td>

                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Exemption all the sections value</td>
                                                    <td>₹2,67,800</td>
                                                    <td>₹2,67,800</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>7</td>
                                                    <td>Net Taxable Income</td>
                                                    <td>₹1,45,200</td>
                                                    <td>₹1,45,200</td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>Tax on Taxable Income</td>
                                                    <td>₹4,95,400</td>
                                                    <td>₹4,95,400</td>
                                                </tr>

                                                <tr>
                                                    <td>9</td>
                                                    <td>Health + Education</td>
                                                    <td>₹2,50,000</td>
                                                    <td>₹2,50,000</td>
                                                </tr>

                                                <tr>
                                                    <td>10</td>
                                                    <td>Total Tax Payable</td>
                                                    <td>₹2,12,300</td>
                                                    <td>₹2,12,300</td>
                                                </tr>

                                                <tr>
                                                    <td>11</td>
                                                    <td>Tax Deduction at Service</td>
                                                    <td>₹4,10,350</td>
                                                    <td>₹4,10,350</td>
                                                </tr>

                                                <tr>
                                                    <td>12</td>
                                                    <td>Exemption all the sections value</td>
                                                    <td>₹2,67,800</td>
                                                    <td>₹2,67,800</td>
                                                </tr>

                                                <tr>
                                                    <td>13</td>
                                                    <td>Exemption all the sections value</td>
                                                    <td>₹2,67,800</td>
                                                    <td>₹2,67,800</td>
                                                </tr>

                                                <tr>
                                                    <td>14</td>
                                                    <td>Exemption all the sections value</td>
                                                    <td>₹2,67,800</td>
                                                    <td>₹2,67,800</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <!-- Footer -->
                            <div class="d-flex flex-wrap justify-content-between align-items-center pt-3"
                                style="margin: 10px;">
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
                <button class="btn btn-outline-primary px-4">Cancel</button>
                <button class="btn btn-primary px-4">Upload</button>
            </div>










    </div>




    </div>
















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
        document.addEventListener('DOMContentLoaded', function () {

            // ADD PAGE-BASED ACTIVE (permanent)
            const pageMain = document.querySelector('[data-bs-target="#transMenu"]');
            const pageSub = document.querySelectorAll('#transMenu .submenu-item')[9];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('transMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>