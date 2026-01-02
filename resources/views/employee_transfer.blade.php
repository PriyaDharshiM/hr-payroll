<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Employee Transfer</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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
                <span class="semibold mas">Master</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="fw-semibold mas">Employee Transfer</span>
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

                    <!-- Branch name -->
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

                    <!-- Employee Code-->
                    <div class="col-md-3">
                        <label class="form-label">Employee Code<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Employee Code</option>
                            </select>
                        </div>
                    </div>

                    <!-- Transfer Type-->
                    <div class="col-md-3">
                        <label class="form-label">Transfer Type<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Branch</option>
                            </select>
                        </div>
                    </div>

                    <!-- Contractor-->
                    <div class="col-md-3">
                        <label class="form-label">Contractor<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Contractor</option>
                            </select>
                        </div>
                    </div>

                    <!-- Department-->
                    <div class="col-md-3">
                        <label class="form-label">Department<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Department</option>
                            </select>
                        </div>
                    </div>

                    <!-- Existing Branch-->
                    <div class="col-md-3">
                        <label class="form-label">Existing Branch<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Type</option>
                            </select>
                        </div>
                    </div>

                    <!-- Revised Branch-->
                    <div class="col-md-3">
                        <label class="form-label">Revised Branch<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Type</option>
                            </select>
                        </div>
                    </div>

                    <!-- Effective Date-->
                    <div class="col-md-3">
                        <label class="form-label">Effective Date <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <div class="input-group">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================
              OFFICE ENTRY LIST
                =============================== -->
                 <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center px-3 py-3"
                        style="background:#F7F7F7; border-radius:12px 12px 0 0;">
                        <h6 class="m-0 fw-semibold">Office Entry List</h6>


                    </div>

                    <!-- Body -->
                    <div class="p-4">

                        <div class="row g-4">


                            <!-- Search box container -->
                            <div style="position: relative; width: 60%; max-width: 280px;">
                                <input type="text" class="form-control" placeholder="Search by Leave Type"
                                    style="border-radius: 30px; padding-right: 40px;">

                                <i class="bi bi-search"
                                    style="position: absolute; right: 25px; top: 50%; transform: translateY(-50%); color: #777;">
                                </i>
                            </div>

                            <!-- Go button -->
                            <div style="width: auto;">
                                <button class="btn btn-primary d-flex align-items-center gap-2" style="font-size:14px;">
                                    Go
                                </button>
                            </div>

                        </div>

                        <div class="card p-0 mt-4 cardborder">

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0 custom-table ">
                                    <thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Company</th>
                                            <th>Legal Entity</th>
                                            <th>Branch</th>
                                            <th>Category</th>
                                            <th>Employee Code</th>
                                            <th>Transfer TYpe</th>
                                            <th>Existing Branch</th>
                                            <th>Revised Branch</th>
                                            <th>Effective Date</th>
                                            <th>Existing</th>
                                            <th>Existing Category</th>
                                            <th>Existing Designation</th>
                                            <th>Revised Category</th>
                                            <th>Revised Designation</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Barone LLC</td>
                                            <td>Residence Inn Morgan Hill,CA</td>
                                            <td>Sangam Vihar</td>
                                            <td>Professional Fees</td>
                                            <td>Ralph Edwards</td>
                                            <td>INR 1,98,234</td>
                                            <td>January</td>
                                            <td>Danang Central</td>
                                            <td>Blacktown CDS</td>
                                            <td>30/01/2020</td>
                                            <td>Interior</td>
                                            <td>Director Technology</td>
                                            <td>Portrait</td>
                                            <td>CEO</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">


                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-eye" style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-upload" style="font-size:20px; color:#007bff;"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Biffco Enterprises Ltd</td>
                                            <td>Four Seasons Punta Mita, MEX</td>
                                            <td>Mayur Vihar Phase III</td>
                                            <td>Bank Service Charges</td>
                                            <td>Jacob Jones</td>
                                            <td>INR 89,72,343</td>
                                            <td>August</td>
                                            <td>Hanoi Central</td>
                                            <td>Parramatta</td>
                                            <td>29/05/2020</td>
                                            <td>Technology</td>
                                            <td>Chief Technology Officer</td>
                                            <td>Interior</td>
                                            <td>Programmer Analyst</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">

                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-eye" style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-upload" style="font-size:20px; color:#007bff;"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Acme Co</td>
                                            <td>Residence Inn Chandler, AZ</td>
                                            <td>C.A.C. Janakpuri</td>
                                            <td>Travel</td>
                                            <td>Devon Lane</td>
                                            <td>INR 1,08,932</td>
                                            <td>July</td>
                                            <td>Can Tho</td>
                                            <td>Surry Hills</td>
                                            <td>16/06/2020</td>
                                            <td>Architecture</td>
                                            <td>UX Engineer</td>
                                            <td>Architecture</td>
                                            <td>UX Engineer</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">


                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-eye" style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-upload" style="font-size:20px; color:#007bff;"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Abstergo Ltd</td>
                                            <td>Hampton Inn & Suites DTC, CO</td>
                                            <td>Tagore Garden, New Delhi</td>
                                            <td>Merchant Processing Fees</td>
                                            <td>Dianne Russell</td>
                                            <td>INR 98.876</td>
                                            <td>April</td>
                                            <td>Danang Central</td>
                                            <td>Blacktown CDS</td>
                                            <td>06/06/2020</td>
                                            <td>Minimal</td>
                                            <td>Architect</td>
                                            <td>Colorful</td>
                                            <td>QA Engineer</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">


                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-eye" style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-upload" style="font-size:20px; color:#007bff;"></i>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>5</td>
                                            <td>Big Kahuna Burger Ltd</td>
                                            <td>Hilton Squaw Peak, CA</td>
                                            <td>Sector 7. Dwarka, New Delhi</td>
                                            <td>Bad Debt Expense</td>
                                            <td>Leslie Alexander</td>
                                            <td>INR 42,342</td>
                                            <td>September</td>
                                            <td>HCM Central</td>
                                            <td>Blacktown CDS</td>
                                            <td>28/06/2020</td>
                                            <td>Texture</td>
                                            <td>Project Manager</td>
                                            <td>Technology</td>
                                            <td>Content Write</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">


                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-eye" style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-upload" style="font-size:20px; color:#007bff;"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Binford Ltd.</td>
                                            <td>Hampton Inn Jackson, TN.</td>
                                            <td>Ashok Vihar</td>
                                            <td>Insurance for Business</td>
                                            <td>Darrell Steward</td>
                                            <td>INR 43,876</td>
                                            <td>December</td>
                                            <td>Hoi An</td>
                                            <td>Surry Hills</td>
                                            <td>09/04/2020</td>
                                            <td>Plant</td>
                                            <td>Process Manage</td>
                                            <td>Food</td>
                                            <td>Trainee Engineer</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">


                                                    <i class="bi bi-pencil-square"
                                                        style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-eye" style="font-size:20px; color:#007bff;"></i>


                                                    <i class="bi bi-upload" style="font-size:20px; color:#007bff;"></i>
                                                </div>
                                            </td>
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
                                        <li class="page-item"><a class="page-link">6</a></li>
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

            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                <button class="btn btn-outline-primary px-4">Cancel</button>
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
        document.addEventListener('DOMContentLoaded', function () {

            // ADD PAGE-BASED ACTIVE (permanent)
            const pageMain = document.querySelector('[data-bs-target="#transMenu"]');
            const pageSub = document.querySelectorAll('#transMenu .submenu-item')[3];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('transMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>