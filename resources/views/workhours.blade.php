<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan -  Working Hours Configuration</title>

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
                <span class="fw-semibold mas">Dashboard</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="mas semibold">Working Hours Configuration</span>
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

                    <div class="col-md-3">
                        <label class="form-label">Branch <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Branch</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 d-flex  gap-4 ">
                        <label class="d-flex align-items-center mt-4 gap-2">
                            <input type="radio" name="category_type" checked>
                            <span style="font-size: 12px">Core</span>
                        </label>

                        <label class="d-flex align-items-center mt-4 gap-2">
                            <input type="radio" name="category_type">
                            <span style="font-size: 12px">Contract Labour</span>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Contractors <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Effective Date <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Date">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Consolidation</label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Consolidation</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!-- Work hours configuration -->
                <div class="card p-0 cardborder">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Working Hours Configuration
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                        <div class="row align-items-center">

                            <!-- Input Box (198 Hrs inside) -->
                            <div class="col-md-3">
                                <input type="text" class="form-control fw-bold"
                                    value="198 Hrs"
                                    style="font-size:18px; height:48px;">
                            </div>

                            <!-- Radio Buttons -->
                            <div class="col-md-9 d-flex gap-3 align-items-center mt-3 mt-md-0">

                                <div class="form-check">
                                    <input class="" type="radio" name="attendance" id="firstCheckIn">
                                    <label class="form-check-label size-of-font" for="firstCheckIn">First Check In</label>
                                </div>

                                <div class="form-check">
                                    <input class="" type="radio" name="attendance" id="lastCheckOut">
                                    <label class="form-check-label size-of-font" for="lastCheckOut">Last Check Out</label>
                                </div>

                                <div class="form-check">
                                    <input class="" type="radio" name="attendance" id="everyValidCheckIn">
                                    <label class="form-check-label size-of-font" for="everyValidCheckIn">Every valid check in</label>
                                </div>

                                <div class="form-check">
                                    <input class="" type="radio" name="attendance" id="lastCheckOut2">
                                    <label class="form-check-label size-of-font" for="lastCheckOut2">Last Check Out</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Minimum hours for a day -->
                <div class="card p-0 cardborder mt-4">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Minimum hours for a day
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                       <div class="row align-items-center">

                            <!-- Row 1: Radio buttons -->
                            <div class="col-md-6 d-flex gap-3 align-items-center mt-3 mt-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode" id="strict" checked>
                                    <label class="form-check-label size-of-font" for="strict">Strict Mode</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode" id="lenient">
                                    <label class="form-check-label size-of-font" for="lenient">Lenient Mode</label>
                                </div>
                            </div>

                            <!-- Row 2: Checkbox row inside column -->
                            <div class="col-md-12 mt-3">
                                <div class="row text-center">

                                    <div class="col">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" id="q25" checked>
                                            <label class="form-check-label" for="q25">0.25 Days</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" id="q50" checked>
                                            <label class="form-check-label" for="q50">0.5 Days</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" id="q75" checked>
                                            <label class="form-check-label" for="q75">0.75 Days</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" id="full" checked>
                                            <label class="form-check-label" for="full">Full Days</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            </div>

                        </div>


                    </div>
                

                <!-- Minimum hours for a day -->
                <div class="card p-0 cardborder mt-4">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Deduction for Late coming and Early leaving
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                       <div class="row align-items-center">

                            <!-- Row 1: Radio buttons -->
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <label for="lateDeduction" class="form-label mb-0">
                                        Whether Deduction applicable for late coming
                                    </label>

                                    <div class="form-check form-switch m-0">
                                        <input class="form-check-input" type="checkbox" id="lateDeduction" checked>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row g-4 mb-2 mt-1">

                            <!-- Company -->
                            <div class="col-md-3">
                                <label class="form-label">Deduction From <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <select class="form-select">
                                        <option>Select Company</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Deductible Salary</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="₹30,000">
                                </div>
                            </div>


                        </div>


                    </div>
                </div>


                <!-- Minimum hours for a day -->
                <div class="card p-0 cardborder mt-4">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Mode Of Capture Attendance
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                       <div class="row align-items-center">

                            <!-- Row 1: Radio buttons -->
                            <div class="col-md-6 d-flex gap-3 align-items-center mt-3 mt-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode" id="strict" checked>
                                    <label class="form-check-label size-of-font" for="strict">Manual Entry</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode" id="lenient">
                                    <label class="form-check-label size-of-font" for="lenient">Bio-Metric Entry</label>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


                <!-- Attendance Restrictions -->
                <div class="card p-0 cardborder mt-4">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Attendance Restrictions
                    </div>

                    <!-- Body -->
                    <div class="p-3">
                        <div class="row align-items-center">
                            <!-- 1 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <input type="checkbox" id="cp" class="form-check-input" checked>
                                    <label for="cp" class="mb-0 size-of-font">Continuous present</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Enter Days" style="width: 110px;">
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <input type="checkbox" id="ca" class="form-check-input">
                                    <label for="ca" class="mb-0 size-of-font">Continuous Absence</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Enter Days" style="width: 110px;">
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <input type="checkbox" id="ret" class="form-check-input">
                                    <label for="ret" class="mb-0 size-of-font">Retirement</label>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <input type="checkbox" id="sep" class="form-check-input">
                                    <label for="sep" class="mb-0 size-of-font">Separate Employees</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2 p-2">

                    <!-- 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <input type="checkbox" id="woe" class="" checked>
                            <label for="woe" class="mb-0 size-of-font">Work order expiry</label>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Days">
                    </div>

                    <!-- 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <input type="checkbox" id="cle" class="">
                            <label for="cle" class="mb-0 size-of-font">Contractor License expiry</label>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Days">
                    </div>

                    <!-- 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <input type="checkbox" id="ice" class="">
                            <label for="ice" class="mb-0 size-of-font">Identity Card expiry</label>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Days">
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                    <button class="btn btn-outline-primary px-4">Clear All</button>
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
            const pageMain = document.querySelector('[data-bs-target="#configMenu"]');
            const pageSub = document.querySelectorAll('#configMenu .submenu-item')[6];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('configMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
