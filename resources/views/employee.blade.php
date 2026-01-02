<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Employee Master Entry</title>

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
                <span class="mas semibold">Employee Master Entry</span>
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

                <main class="content-area bg-white">
            <div class="container-fluid mt-3">




                        <div class="row g-4">

                            <div class="d-flex align-items-end gap-3" style="margin-bottom: 15px;">

                                <!-- Aadhar Number -->
                                <div class="col-md-3">
                                    <label class="form-label">Aadhar Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Aadhar Number">
                                </div>

                                <div>
                                    <button class="btn btn-primary d-flex align-items-center gap-2"
                                        style="font-size:14px; margin-top: 10px;">
                                        Sync Aadhar
                                    </button>
                                </div>

                            </div>

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

                            <!-- Category -->
                            <div class="col-md-3">
                                <label class="form-label">Category<span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Category</option>
                                </select>
                            </div>

                            <!-- Employee Code -->
                            <div class="col-md-3">
                                <label class="form-label">Employee Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Employee Code ">
                            </div>

                            <!-- Employee Name -->
                            <div class="col-md-3">
                                <label class="form-label">Employee Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Employee Name ">
                            </div>

                            <!-- Upload Box -->
                            <div class="col-md-3">
                                <label class="form-label">Photo</label>

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

                            <!-- Father/Husband Name-->
                            <div class="col-md-3">
                                <label class="form-label">Father/Husband Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Father Name">
                            </div>

                            <!-- Date of Birth -->
                            <div class="col-md-3">
                                <label class="form-label"> Date of Birth <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Date of Joining -->
                            <div class="col-md-3">
                                <label class="form-label">Date of Joining <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Select Time">
                                </div>
                            </div>

                            <!-- Designation -->
                            <div class="col-md-3">
                                <label class="form-label">Designation<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Enter Designation">
                            </div>

                            <!-- State -->
                            <div class="col-md-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select State</option>
                                </select>
                            </div>

                            <!-- Location / City -->
                            <div class="col-md-3">
                                <label class="form-label">Location / City <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Location / City</option>
                                </select>
                            </div>

                            <!-- PF No -->
                            <div class="col-md-3">
                                <label class="form-label">PF No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter PF No">
                            </div>

                            <!-- UAN No -->
                            <div class="col-md-3">
                                <label class="form-label">UAN No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter UAN No">
                            </div>

                            <!-- ESI No -->
                            <div class="col-md-3">
                                <label class="form-label">ESI No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter ESI No">
                            </div>

                            <!-- ESI Dispensary -->
                            <div class="col-md-3">
                                <label class="form-label">ESI Dispensary <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select </option>
                                </select>
                            </div>

                            <!-- PTax Location -->
                            <div class="col-md-3">
                                <label class="form-label">PTax Location <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select </option>
                                </select>
                            </div>

                            <!-- No.of Children-->
                            <div class="col-md-3">
                                <label class="form-label">No.of Children<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Enter Children">
                            </div>

                            <!-- Address 1 -->
                            <div class="col-md-3">
                                <label class="form-label">Address 1<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Enter Address ">
                            </div>

                            <!-- Address 2 -->
                            <div class="col-md-3">
                                <label class="form-label">Address 2<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Enter Address ">
                            </div>

                            <!-- Nominee Name -->
                            <div class="col-md-3">
                                <label class="form-label">Nominee Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Nominee Name">
                            </div>

                            <!-- Relationship -->
                            <div class="col-md-3">
                                <label class="form-label">Relationship <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Relationship </option>
                                </select>
                            </div>

                            <!-- Mobile no -->
                            <div class="col-md-3">
                                <label class="form-label">Mobile No <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Mobile Number">
                            </div>
                        </div>

                   

                <div class="card p-0 mb-4 mt-4 cardborder" >

                    <!-- Header -->
                    <div class="cardheader">
                        <h6 class="m-0 fw-semibold">KYC Details</h6>


                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                            <!-- Aadhar Number -->
                            <div class="col-md-3" style="margin-right:20px;">
                                <label class="form-label">Aadhar Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Aadhar Number">
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

                            <!-- Driving Lincense -->
                            <div class="col-md-3" style="margin-right:20px;">
                                <label class="form-label">Driving Lincense<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Driving Lincense">
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

                            <!-- Passport Number -->
                            <div class="col-md-3" style="margin-right:20px;">
                                <label class="form-label">Passport Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Passport Number">
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

                            <!-- PAN NO -->
                            <div class="col-md-3" style="margin-right:20px;">
                                <label class="form-label">PAN No<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter PAN No">
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


                <div class="card p-0 mb-4 cardborder">
                    <!-- Header -->
                    <div class="cardheader">
                        <h6 class="m-0 fw-semibold">Applicability </h6>


                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">

                             <div class="col-md-6">
                                <div class="d-flex flex-wrap gap-4 mt-4">
                                    <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="old_regime">
                                        <span class="size-of-font">PF</span>
                                    </label>
                                    <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="new_regime">
                                        <span class="size-of-font">ESI</span>
                                    </label>
                                     <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="new_regime">
                                        <span class="size-of-font">PT</span>
                                    </label>
                                     <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="new_regime">
                                        <span class="size-of-font">LWF</span>
                                    </label>
                                     <label class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="new_regime">
                                        <span class="size-of-font">EPS</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Skill <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Skill</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Skill Wage / Montly <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Type</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Type of Category -->
                            <div class="col-md-3">
                                <label class="form-label"> Type of Category <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Category</option>
                                </select>
                            </div>

                              <div class="row align-items-center mt-4" style=" gap: 5px;">

                                <div class="col-md-2">
                                    <label class="form-label">Canteen Applicability</label>
                                </div>

                                <div class="col-md-1"
                                    style="display:flex; align-items:center; gap:6px; font-size:12px;">
                                    <input type="checkbox">
                                    <label>Yes</label>
                                </div>

                                <div class="col-md-1"
                                    style="display:flex; align-items:center; gap:6px; font-size:12px;">
                                    <input type="checkbox">
                                    <label>No</label>
                                </div>

                            </div>

                            <!-- Transport Applicability -->
                            <div class="row align-items-center" style="margin-top:10px; gap: 5px;">

                                <div class="col-md-2">
                                    <label class="form-label">Transport Applicability</label>
                                </div>

                                <div class="col-md-1"
                                    style="display:flex; align-items:center; gap:6px; font-size:12px;">
                                    <input type="checkbox">
                                    <label>Yes</label>
                                </div>

                                <div class="col-md-1"
                                    style="display:flex; align-items:center; gap:6px; font-size:12px;">
                                    <input type="checkbox">
                                    <label>No</label>
                                </div>

                            </div>

                            <div class="row g-3 align-items-center mt-3">

                            <!-- ID Card Label -->
                            <div class="col-md-1 d-flex align-items-center">
                                <label class="form-label mb-0">ID Card</label>
                            </div>

                            <!-- Yes -->
                            <div class="col-md-1 d-flex align-items-center gap-2">
                                <input type="checkbox" >
                                <label class="size-of-font">Yes</label>
                            </div>

                            <!-- No -->
                            <div class="col-md-1 d-flex align-items-center gap-2">
                                <input type="checkbox">
                                <label class="size-of-font">No</label>
                            </div>

                            <!-- Issue On -->
                            <div class="col-md-3">
                                <label class="form-label">Issue On <span class="text-danger">*</span></label>
                                <input type="date" class="form-control">
                            </div>

                            <!-- From -->
                            <div class="col-md-3">
                                <label class="form-label">From <span class="text-danger">*</span></label>
                                <input type="date" class="form-control">
                            </div>

                            <!-- To -->
                            <div class="col-md-3">
                                <label class="form-label">To <span class="text-danger">*</span></label>
                                <input type="date" class="form-control">
                            </div>

                            </div>

                            <!-- Email id -->
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <label class="form-label">Email ID <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter Email ID">
                                </div>
                            </div>

                            <div class="row" style="margin-top:20px; gap: 5px;">
                                <!-- Basic -->
                                <div class="col-md-3">
                                    <label class="form-label">Basic<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Basic">
                                </div>

                                <!-- Amount-->
                                <div class="col-md-3">
                                    <label class="form-label">Amount<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                </div>
                            </div>

                            <div class="row" style="margin-top:20px; gap: 5px;">
                                <!-- DA -->
                                <div class="col-md-3">
                                    <label class="form-label">DA<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter DA">
                                </div>


                                <!-- Amount-->
                                <div class="col-md-3">
                                    <label class="form-label">Amount<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                </div>
                            </div>

                            <div class="row" style="margin-top:20px;">
                                <!-- HRA -->
                                <div class="col-md-3">
                                    <label class="form-label">HRA<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter HRA">
                                </div>


                                <!-- Amount-->
                                <div class="col-md-3">
                                    <label class="form-label">Amount<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                </div>
                            </div>


                            <div class="row" style="margin-top:20px; ">
                                <!-- Last working day -->
                                <div class="col-md-3">
                                    <label class="form-label">Last working day<span class="text-danger">*</span></label>
                                     <input type="date" class="form-control">
                                </div>


                                <!-- Reason for leaving-->
                                <div class="col-md-6">
                                    <label class="form-label">Reason for leaving<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                </div>

                                <!-- Type of Resgination-->
                                <div class="col-md-3">
                                    <label class="form-label">Amount<span class="text-danger">*</span> </label>
                                    <select class="form-select">
                                    <option>Select Type </option>
                                </select>
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
            const pageSub = document.querySelectorAll('#masterMenu .submenu-item')[17];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('masterMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
