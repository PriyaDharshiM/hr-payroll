<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Leave Entitlement Creation</title>

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
                <span class="mas semibold">Weekly Holiday Master</span>
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
                    <div class="col-md-4">
                        <label class="form-label">Company <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Company</option>
                            </select>
                        </div>
                    </div>

                    <!-- Legal Entity -->
                    <div class="col-md-4">
                        <label class="form-label">Legal Entity <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Legal Entity</option>
                            </select>
                        </div>
                    </div>

                    <!-- Branch -->
                    <div class="col-md-4">
                        <label class="form-label">Branch <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Branch</option>
                            </select>
                        </div>
                    </div>



                </div>

                <div class="row g-4 mb-3">

                    <!-- Month -->
                    <div class="col-md-3">
                        <label class="form-label">Month <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Month">
                        </div>
                    </div>

                    <!-- Year -->
                    <div class="col-md-3">
                        <label class="form-label">Year <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Year">
                        </div>
                    </div>



                </div>


                <!-- ================== BRANCH WISE ================== -->
                <div class="card p-0 mt-4 cardborder">

                    <!-- Header -->
                    <div
                        class="cardheader">
                        Branch Wise
                    </div>

                    <div class="p-4">

                        <!-- Days Checkboxes -->
                        <div class="d-flex flex-wrap gap-4 mb-3" style="font-size:15px;">
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Sunday</label>
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Monday</label>
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Tuesday</label>
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Wednesday</label>
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Thursday</label>
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Friday</label>
                            <label class="d-flex align-items-center gap-2"><input type="checkbox"> Saturday</label>
                        </div>

                        <!-- Compensatory Off + Holiday -->
                        <div class="row g-4">

                            <div class="col-md-4">
                                <label class="form-label">Compensatory off <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Compensatory Off Days">
                            </div>

                            <div class="col-md-4 d-flex align-items-end gap-3" style="margin-top:30px;">
                                <label class="form-label">Holiday <span class="text-danger">*</span></label>
                                <label class="d-flex align-items-center gap-2">
                                    <input type="checkbox"> Half day
                                </label>
                                <label class="d-flex align-items-center gap-2">
                                    <input type="checkbox"> Full day
                                </label>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ================== EMPLOYEE WISE ================== -->
                <div class="card p-0 mt-4 cardborder">

                    <!-- Header -->
                    <div
                        class="cardheader">
                        Employee Wise
                    </div>

                    <div class="p-4">

                        <div class="col-md-4">
                            <label class="form-label">Rotational Day <span class="text-danger">*</span></label>
                            <div class="position-relative">
                                <select class="form-select">
                                    <option>Select Rotational Day</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ================== DAY WISE ================== -->
                <div class="card p-0 mt-4 cardborder">

                    <!-- Header -->
                    <div
                        class="cardheader">
                        Day Wise
                    </div>
                    <div class="container py-3">

                        <div class="row align-items-center g-3">

                            <!-- Employee Code -->
                            <div class="col-lg-3 col-md-4 col-12">
                                <label class="form-label">Employee Code <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option>Select Employee</option>
                                </select>
                            </div>

                            <!-- Days Checkboxes -->
                            <div class="col-lg-9 col-md-8 col-12">
                                <label class="form-label d-block invisible">Days</label>
                                <!-- invisible for alignment -->

                                <div class="d-flex flex-wrap align-items-center gap-4" style="font-size:15px;">
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Sunday
                                    </label>
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Monday
                                    </label>
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Tuesday
                                    </label>
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Wednesday
                                    </label>
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Thursday
                                    </label>
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Friday
                                    </label>
                                    <label class="d-flex align-items-center gap-2 mb-0">
                                        <input type="checkbox"> Saturday
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>




                <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                    <button class="btn btn-outline-primary px-4">Cancel</button>
                    <button class="btn btn-primary px-4">Submit</button>
                </div>
                <!-- BASIC DETAILS CARD -->











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
            const pageSub = document.querySelectorAll('#masterMenu .submenu-item')[6];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('masterMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
