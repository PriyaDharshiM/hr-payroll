<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Overtime Entry</title>

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
                <span class="fw-semibold mas">Overtime Entry</span>
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
                                <option>Select Branch Name</option>
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
                </div>

                <div class="row g-4 mt-3">

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
                        <label class="form-label"> Select Employee <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option> Select Employee</option>
                            </select>
                        </div>
                    </div>

                    <!--select Date-->
                    <div class="col-md-3">
                        <label class="form-label">Select Date<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <div class="input-group">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Excess Hour-->
                    <div class="col-md-3">
                        <label class="form-label">Excess Hour <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="08:17 Hrs">
                    </div>

                    <!-- Over Time-->
                    <div class="col-md-3">
                        <label class="form-label"> Over Time <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="08:17 ">
                    </div>

                </div>

            </div>

            <!-- Contract Labour Details -->
             <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5; margin-top: 20px;">

                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center px-3 py-3"
                        style="background:#F7F7F7; border-radius:12px 12px 0 0;">
                        <h6 class="m-0 fw-semibold">Contract Labour Details</h6>


                    </div>

                <!-- Body -->
                <div class="p-4">
                    <div class="row g-4">
                        <div class="card p-0 mt-4 cardborder">

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0 custom-table ">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Legal Entity</th>
                                            <th>Branch</th>
                                            <th>Category</th>
                                            <th>Employee</th>
                                            <th>Date</th>
                                            <th>Excess Hour</th>
                                            <th>Over Time</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Acme Co.</td>
                                            <td>Prime Commercial Bank Ltd.(Prime)</td>
                                            <td>Brazil</td>
                                            <td>Dog Trainer</td>
                                            <td>Ralph Edwards</td>
                                            <td>15/08/2017</td>
                                            <td>7:45</td>
                                            <td>9:44</td>
                                        </tr>

                                        <tr>
                                            <td>Big Kahuna Burger Ltd.</td>
                                            <td>Sunrise Bank Ltd. (Sunrise)</td>
                                            <td>New Mexico</td>
                                            <td>Medical Assistant</td>
                                            <td>Wade Warren</td>
                                            <td>07/05/2016</td>
                                            <td>2:08</td>
                                            <td>8:12</td>
                                        </tr>

                                        <tr>
                                            <td>Biffco Enterprises Ltd.</td>
                                            <td>Nepal Bank Ltd. (NBL)</td>
                                            <td>Wisconsin</td>
                                            <td>Marketing Coordinator</td>
                                            <td>Darrell Steward</td>
                                            <td>18/09/2016</td>
                                            <td>12:25</td>
                                            <td>3:33</td>
                                        </tr>

                                        <tr>
                                            <td>Barone LLC.</td>
                                            <td>Global IME Bank Ltd.(Global)</td>
                                            <td>Washington</td>
                                            <td>Nursing Assistant</td>
                                            <td>Annette Black</td>
                                            <td>12/06/2020</td>
                                            <td>3:33</td>
                                            <td>4:52</td>
                                        </tr>

                                        <tr>
                                            <td>Binford Ltd.</td>
                                            <td>Nepal Investment Bank Ltd.(NIBL)</td>
                                            <td>United States</td>
                                            <td>President of Sales</td>
                                            <td>Bessie Cooper</td>
                                            <td>28/10/2012</td>
                                            <td>9:44</td>
                                            <td>7:45</td>
                                        </tr>

                                        <tr>
                                            <td>Abstergo Ltd.</td>
                                            <td>Nepal Credit and commerce Bank Ltd.(NCC)</td>
                                            <td>New York</td>
                                            <td>Web Designer</td>
                                            <td>Guy Hawkins</td>
                                            <td>16/08/2013</td>
                                            <td>7:38</td>
                                            <td>7:38</td>
                                        </tr>

                                    </tbody>
                                </table>
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
            const pageSub = document.querySelectorAll('#transMenu .submenu-item')[5];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('transMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>