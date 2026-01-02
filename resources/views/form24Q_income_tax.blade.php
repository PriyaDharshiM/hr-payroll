<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Form 24Q - Income tax</title>

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
                <span class="semibold mas">Report</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="fw-semibold mas">Form 24Q - Income tax</Form></span>
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

                <!-- Top Two Fields -->
                <div class="row">

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
                        <label class="form-label">Branch Name <span class="text-danger">*</span></label>
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
                <div class="row mt-4">

            <!-- Column 1: Radio Buttons -->
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

            <!-- Column 2: Work Order -->
          <div class="col-md-3">
                        <label class="form-label">Periodicity <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Quarter</option>
                            </select>

                        </div>
                    </div>
            <!-- Column 3: Contractor -->
             <div class="col-md-3">
                        <label class="form-label">Ending <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option> Select Ending</option>
                            </select>

                        </div>
                    </div>
         
                    
                     <div class="col-md-3">
        <label class="form-label">Year <span class="text-danger">*</span></label>
        <input type="number" class="form-control" placeholder="YYYY" min="1900" max="2100">
    </div>
    </div>

  
    <div class="row mt-5"></div>
    <!-- Buttons aligned to right -->
    <div class="col-md-12 d-flex justify-content-end gap-3">
        <button class="btn btn-outline-primary px-1">
            <i class="bi bi-file-earmark-arrow-up me-2"></i> Export
        </button>

        <button class="btn btn-primary px-2">
            Generate
        </button>
    </div>

</div>
<br>

<!-- Header -->
                <div class="cardheader">
                   Form 24Q Summary List
                </div>

                <!-- Body -->
                <div class="p-4">

                    <div class="row g-4">

                        

                        
                        <!-- Search box container -->
                        <div style="position: relative; width: 60%; max-width: 280px;">
                            <input type="text" class="form-control" placeholder="Search by ECode "
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
                                        <th>Month</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Acme Co.</td>
                                        <td>Apple</td>
                                        <td>Blacktown CDS</td>
                                        <td>Hanoi Central</td> 
                                        <td>April</td>
                                        <td>2023</td>
                                       
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Brone LLc.</td>
                                        <td>Facebook</td>
                                        <td>Parramatta</td>
                                        <td>Hoi An</td>  
                                        <td>September</td>
                                        <td>2023</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Acme.Co</td>
                                        <td>The Walt Disney Company</td>
                                        <td>Surry Hills</td>
                                        <td>Danang Central</td>
                                        <td>Decembar</td>
                                        <td>2023</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Biffco. Enterprises Ltd.</td>
                                        <td>MasterCard</td>
                                        <td>Blacktown CDS</td>
                                        <td>Hanoi Central</td>
                                        <td>May</td>
                                        <td>2023</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>5 </td>
                                        <td>Abstergo Ltd.</td>
                                        <td>eBay</td>
                                        <td>Blacktown CDS</td>
                                        <td>Can Tho</td> 
                                        <td>June</td>
                                        <td>2023</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Binford Ltd.</td>
                                        <td>Nintendo</td>
                                        <td>Parramatta</td>
                                        <td>Hoi Ann</td>
                                        <td>January</td>
                                        <td>2023</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>7</td>
                                        <td>Biffco. Enterprises Ltd.</td>
                                        <td>Louis Vuitton</td>
                                        <td>North Sydney</td>
                                        <td>Hoi Ann</td>
                                        <td>June</td>
                                        <td>2023</td>
                                 
                                    </tr>
                                    
                                    <tr>
                                        <td>8</td>
                                        <td>Biffco. Enterprises Ltd.</td>
                                        <td>The Walt Disney Company</td>
                                        <td>Surry Hills</td>
                                        <td>HCM Central</td>
                                        <td>June</td>
                                        <td>2023</td>
                                     
                                    </tr>
                                    
                                    <tr>
                                        <td>9</td>
                                        <td>Big Kahuna Burger Ltd.</td>
                                        <td>Louis Vuitton</td>
                                        <td>North Sydney</td>
                                        <td>HCM Central</td>
                                        <td>November</td>
                                        <td>2023</td>
                             
                                    </tr>
                                    
                                    <tr>
                                        <td>10</td>
                                        <td>Big Kahuna Burger Ltd.</td>
                                        <td>Starbucks</td>
                                        <td>Blacktown CDS</td>
                                        <td>Honoi Central </td>
                                        <td>October</td>
                                        <td>2023</td>
                    
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
            <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                <button class="btn btn-outline-primary px-4">Save Draft</button>
                <button class="btn btn-primary px-4">Submit</button>
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
            const pageMain = document.querySelector('[data-bs-target="#reportMenu"]');
            const pageSub = document.querySelectorAll('#reportMenu .submenu-item')[12];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('reportMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>




