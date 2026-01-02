<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Work Order Creation</title>

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
                <span class="mas semibold">Work Order Creation</span>
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

                <!-- WORK ORDER SECTION (matches the image) -->
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
                                <option>Select Branch</option>
                            </select>

                        </div>
                    </div>

                    <!-- Work Order No -->
                    <div class="col-md-3">
                        <label class="form-label">Work Order No</label>
                        <input type="text" class="form-control" placeholder="Enter Work Order No">
                    </div>

                </div>

                <!-- Row 2 -->
                <div class="row g-4 mb-3">

                    <!-- Work Order From -->
                    <div class="col-md-3">
                        <label class="form-label">Work Order From <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Date">

                        </div>
                    </div>

                    <!-- Work Order To -->
                    <div class="col-md-3">
                        <label class="form-label">Work Order To <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="Select Date">
                        </div>
                    </div>

                    <!-- Work Order Strength -->
                    <div class="col-md-3">
                        <label class="form-label">Work Order Strength</label>
                        <input type="text" class="form-control" placeholder="Enter">
                    </div>

                    <!-- Work Order Description -->
                    <div class="col-md-3">
                        <label class="form-label">Work Order Description</label>
                        <input type="text" class="form-control" placeholder="Enter">
                    </div>

                </div>

                <!-- Row 3 -->
                <div class="row g-4 mb-3 align-items-end">

                    <!-- Vendor Code -->
                    <div class="col-md-3">
                        <label class="form-label">Vendor Code</label>
                        <input type="text" class="form-control" placeholder="Enter">
                    </div>

                    <!-- Contractor List -->
                    <div class="col-md-3">
                        <label class="form-label">Contractor List <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Buttons (right aligned) -->
                    <div class="col-md-12 d-flex justify-content-end gap-3">
                        <button type="button" class="btn btn-outline-primary px-4">Save as Draft</button>
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>

                </div>







                <div class="card p-0 mt-4 cardborder">

                    <!-- Header -->
                    <div class="cardheader">
                        Field List
                    </div>

                    <div class="p-4">

                        <!-- Search -->
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="position-relative" style="width:260px;">
                                <input type="text" class="form-control" placeholder="Search by Field Name">
                                <i class="bi bi-search position-absolute"
                                    style="right:12px; top:50%; transform:translateY(-50%); font-size:14px;"></i>
                            </div>
                            <button class="btn btn-primary px-3">Go</button>
                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 custom-table">

                                <thead>
                                    <tr>
                                        <th class="sticky-col">S. No</th>
                                        <th>Company</th>
                                        <th>Legal Entity</th>
                                        <th>Branch</th>
                                        <th>Work Order No</th>
                                        <th>Work Order From</th>
                                        <th>Work Order To</th>
                                        <th>Work Order Survey</th>
                                        <th>Work Order Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="sticky-col">1</td>
                                        <td>State Bank of Patiala</td>
                                        <td>Barone LLC.</td>
                                        <td>Reno Branch</td>
                                        <td>0914640416</td>
                                        <td>24/03/2020</td>
                                        <td>25/01/2020</td>
                                        <td>Nursing Assistant</td>
                                        <td>Quam</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square text-primary me-2"
                                                style="cursor:pointer;"></i>
                                            <i class="bi bi-eye text-primary" style="cursor:pointer;"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="sticky-col">2</td>
                                        <td>ING Vysya Bank</td>
                                        <td>Big Kahuna Burger Ltd.</td>
                                        <td>Twin Falls Branch</td>
                                        <td>1883798829</td>
                                        <td>29/05/2020</td>
                                        <td>16/06/2020</td>
                                        <td>Marketing Coordinator</td>
                                        <td>Vestibulum</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square text-primary me-2"></i>
                                            <i class="bi bi-eye text-primary"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="sticky-col">3</td>
                                        <td>Federal Bank</td>
                                        <td>Acme Co.</td>
                                        <td>Las Vegas Branch</td>
                                        <td>1696086371</td>
                                        <td>31/03/2020</td>
                                        <td>31/03/2020</td>
                                        <td>Dog Trainer</td>
                                        <td>Inceptos</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square text-primary me-2"></i>
                                            <i class="bi bi-eye text-primary"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="sticky-col">4</td>
                                        <td>Indian Bank</td>
                                        <td>Biffco Enterprises Ltd.</td>
                                        <td>Salk Lake Branch</td>
                                        <td>4693691121</td>
                                        <td>26/04/2020</td>
                                        <td>24/03/2020</td>
                                        <td>President of Sales</td>
                                        <td>Parturient</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square text-primary me-2"></i>
                                            <i class="bi bi-eye text-primary"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="sticky-col">5</td>
                                        <td>Bank of Bahrain and Kuwait</td>
                                        <td>Binford Ltd.</td>
                                        <td>St. George Branch</td>
                                        <td>3910793817</td>
                                        <td>14/02/2020</td>
                                        <td>09/04/2020</td>
                                        <td>Web Designer</td>
                                        <td>Malesuada</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square text-primary me-2"></i>
                                            <i class="bi bi-eye text-primary"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="sticky-col">6</td>
                                        <td>Axis Bank</td>
                                        <td>Abstergo Ltd.</td>
                                        <td>Boise Branch</td>
                                        <td>2377471239</td>
                                        <td>12/06/2020</td>
                                        <td>30/01/2020</td>
                                        <td>Medical Assistant</td>
                                        <td>Tortor Null</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square text-primary me-2"></i>
                                            <i class="bi bi-eye text-primary"></i>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

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
            const pageSub = document.querySelectorAll('#masterMenu .submenu-item')[8];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('masterMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
