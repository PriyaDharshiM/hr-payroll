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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('siteassets/css/style.css') }}">
    <style>
        @media(max-width:800px) {
            .content-area {
                width: 100% !important;
                margin: 0 !important;
            }
        }
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
                <span class="fw-semibold mas">Allocate Rights</span>
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
        <main class="content-area bg-white"
            style="width:80%; max-width:100%; box-sizing:border-box; transition: width 0.3s;">

            <div class="container-fluid mt-3">

                <!-- Top Two Fields -->
                <div class="row g-4 mb-3">

                    <!-- Setting Name -->
                    <div class="col-md-3">
                        <label class="form-label">Setting Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Setting Name ">
                    </div>

                    <!-- Month-->
                    <div class="col-md-3">
                        <label class="form-label">Month <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control">
                        </div>
                    </div>

                    <!-- Year-->
                    <div class="col-md-3">
                        <label class="form-label">Year <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control">
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

                    <!-- Company-->
                    <div class="col-md-3">
                        <label class="form-label">Company <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Company</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                        <button class="btn btn-outline-primary px-4">Cancel</button>
                        <button class="btn btn-primary px-4">Submit</button>
                    </div>




                </div>

                <!-- ============================
                 Master
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('masterContent')">
                        <span>Master</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                        <!-- <span class="arrow-icon" id="arrowIcon">&#9660;</span> -->
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="masterContent" style="display:none;">
                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Company</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Legal Entity Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Branch Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Category Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>


                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Holidays</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Leave Entitlement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture weekly holiday</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Shift Details</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Work Order Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Location</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Loan Master Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Leave Type creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture Skill Wages</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Income Tax FY Details</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Bank Details Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Field Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Formula Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Contract Labour Master Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Employee Master Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Contract Master Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                </div>


                <!-- ============================
             Configuration
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('earningContent')">
                        <span>Configuration</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="earningContent" style="display:none;">
                            <div class="card p-0 mt-4 cardborder">


                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture PF Percentage and limit</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture ESI Percentage and limit</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Configure Professional Slabs</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture EE&ER LWF contribution</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>


                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Configure Revision component</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Configure Attendance</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Configure working hours</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture Notation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>LIC Matching</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                </div>


                <!-- ============================
             Transcation
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('transcationContent')">
                        <span>Transcation</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="transcationContent" style="display:none;">
                            <div class="card p-0 mt-4 cardborder">


                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture Monthly Input-addon Earning & Deduction values</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Loan Posting / Loan Deviation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Revision Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Employee Transfer</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>


                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Upload Attendance</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Update OT Details</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Consolidate Attendance</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax - Income Matching</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax - Section Matching</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax - Declaration Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax - other / Offline Payment Entry</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax-Challan Entry</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Loan pre closure / Reverse Pre closure</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                </div>

                <!-- ============================
             Process
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('processContent')">
                        <span>Process</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="processContent" style="display:none;">
                            <div class="card p-0 mt-4 cardborder">


                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Payroll Process</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Full & Final Settlement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax Process</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                </div>


                <!-- ============================
               Reports
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('reportsContent')">
                        <span>Reports</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="reportsContent" style="display:none;">
                            <div class="card p-0 mt-4 cardborder">


                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>PF Extract</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>PF Online extract(ECR)</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>ESI Extract</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Professional Tax Settlement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>


                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Labour Welfare fund Statement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Wage slip</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Wage Slip-mail</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Wage Summary</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Earnings Summary</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Deduction Summary</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Attendance Report</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Work Order Report</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Form 24Q-Income Tax</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Form 24QA-Income Tax</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax Statement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Form 16 of single employee</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Form 16-Mail</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax-Annual Statement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Income Tax-Worksheet</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Worksheet-Mail</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Loan Statement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Addition & Separation Report</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Arrear Statement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Excel Wizard</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                </div>

                <!-- ============================
             Registers
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('registersContent')">
                        <span>Registers</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="registersContent" style="display:none;">



                            <!-- Dropdown Content -->
                            <div class="dropdown-content" id="returnsContent" style="display:none;">




                            </div>

                            <!-- ============================
                                             Returns
                                      =============================== -->
                            <div class="card p-0 mt-4 cardborder">

                                <!-- Header -->
                                <div class="cardheader d-flex align-items-center justify-content-between"
                                    onclick="toggleDropdown('returnsContent')">
                                    <span>Returns</span>
                                    <span class="arrow-icon" id="arrowIcon"
                                        style="display:inline-block; font-size:24px; color:#2b2a2a">
                                        <i class="bi bi-arrow-down-circle"></i>
                                    </span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Register</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>







                </div>
                <!-- ============================
                User Management
                =============================== -->
                <div class="card p-0 mt-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="cardheader d-flex align-items-center justify-content-between"
                        onclick="toggleDropdown('userContent')">
                        <span>User Management</span>
                        <span class="arrow-icon" id="arrowIcon"
                            style="display:inline-block; font-size:24px; color:#2b2a2a">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span>
                    </div>

                    <!-- Body -->
                        <!-- Dropdown Content -->
                        <div class="dropdown-content" id="userContent" style="display:none;">
                            <div class="card p-0 mt-4 cardborder">


                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <th>Menus</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Company</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Legal Entity Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Branch Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Category Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>


                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Holidays</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Leave Entitlement</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture weekly holiday</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Shift Details</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Work Order Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Location</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Loan Master Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Leave Type creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Capture Skill Wages</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Create Income Tax FY Details</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Bank Details Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Field Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Formula Creation</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Contract Labour Master Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Employee Master Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>Contract Master Entry / Upload</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="bi bi-pencil-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-eye" style="font-size:18px; color:#007bff;"></i>
                                                        <i class="bi bi-plus-square"
                                                            style="font-size:18px; color:#007bff;"></i>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                </div>



            </div>






    </div>
    </div>





    </div>
    </div>
    </div>



    </div>
    </div>
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
            const pageMain = document.querySelector('[data-bs-target="#userMenu"]');
            const pageSub = document.querySelectorAll('#userMenu .submenu-item')[1];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('userMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

    <script>
        function toggleDropdown(sectionId) {
            // Close all other sections
            document.querySelectorAll('.dropdown-content').forEach(function (content) {
                if (content.id !== sectionId) {
                    content.style.display = 'none';
                }
            });

            // Toggle only the clicked one
            let content = document.getElementById(sectionId);
            content.style.display = (content.style.display === "block") ? "none" : "block";
        }
    </script>
    <script>
        function toggleDropdown(id) {
            const content = document.getElementById(id);

            if (content.style.display === "block") {
                content.style.display = "none";
                content.style.padding = "0";
            } else {
                content.style.display = "block";
                content.style.padding = "15px";
            }
        }
    </script>
    <script>
        function toggleDropdown(contentId, arrowId) {
            const content = document.getElementById(contentId);
            const arrow = document.getElementById(arrowId);

            if (content.style.display === "none") {
                content.style.display = "block";
                arrow.innerHTML = "&#9650;"; // Up arrow
            } else {
                content.style.display = "none";
                arrow.innerHTML = "&#9660;"; // Down arrow
            }
        }

    </script>

    <script>
        function toggleDropdown(contentId, arrowId) {
            const content = document.getElementById(contentId);
            const arrow = document.getElementById(arrowId);
            const card = content.querySelector(".cardborder");

            if (content.style.display === "none") {
                content.style.display = "block";
                arrow.innerHTML = "&#9650;"; // Up arrow
                if (card) card.classList.add("active");  // APPLY HERE
            } else {
                content.style.display = "none";
                arrow.innerHTML = "&#9660;"; // Down arrow
                if (card) card.classList.remove("active"); // REMOVE HERE
            }
        }

    </script>
    <script>
        function toggleDropdown(contentId) {
            let content = document.getElementById(contentId);

            // find the arrow icon inside the clicked header
            let header = event.currentTarget;
            let icon = header.querySelector("i");

            if (content.style.display === "block") {
                content.style.display = "none";
                icon.classList.remove("bi-arrow-up-circle");
                icon.classList.add("bi-arrow-down-circle");
            } else {
                content.style.display = "block";
                icon.classList.remove("bi-arrow-down-circle");
                icon.classList.add("bi-arrow-up-circle");
            }
        }
    </script>





</body>

</html>