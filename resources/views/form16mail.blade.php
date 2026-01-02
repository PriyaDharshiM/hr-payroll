<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Category Creation</title>

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
                <span class="fw-semibold mas">Report</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="mas semibold">Form16-mail</span>
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

      <div class="row g-3">

    <!-- Company -->
    <div class="col-md-3">
        <label class="form-label">Company <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Company</option>
        </select>
    </div>

    <!-- Legal Entity -->
    <div class="col-md-3">
        <label class="form-label">Legal Entity <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Legal Entity</option>
        </select>
    </div>

    <!-- Branch -->
    <div class="col-md-3">
        <label class="form-label">Branch Name <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Branch</option>
        </select>
    </div>
     <div class="col-md-3">
        <label class="form-label">Category <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Category</option>
        </select>
</div>

    

</div>


<div class="row g-3 align-items-end mt-2">

    <!-- Radio -->
    <div class="col-md-4">
        <label class="form-label d-block">&nbsp;</label>
        <div class="d-flex gap-4">
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="core" required>
                <span style="font-size:12px;">Core</span>
            </label>

            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="contract">
                <span style="font-size:12px;">Contract Labour</span>
            </label>
        </div>
    </div>

    <!-- Year -->
    <div class="col-md-3">
        <label class="form-label">Year <span class="text-danger">*</span></label>
        <input type="month" class="form-control">
    </div>

    <!-- Mail Service -->
    <div class="col-md-3">
        <label class="form-label">Mail Service <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Mail Service</option>
        </select>
    </div>

    <!-- Description -->
    <div class="col-md-2">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" placeholder="Enter Description">
    </div>
</div>
<!-- ✅ Buttons UNDER Description -->
<div class="row g-3 mt-4">
    <div class="col-md-12 d-flex justify-content-end align-items-end gap-2">
        <button type="button" class="btn btn-outline-primary">
            <i class="bi bi-file-earmark-arrow-up"></i> Export
        </button>

        <button type="submit" class="btn btn-primary">
            Send Email
        </button>
    </div>
</div>







                </div>

                <!-- BASIC DETAILS CARD -->
                <div class="card p-0 cardborder">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Form 16 Of Mail List
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="position-relative" style="width:260px;">
                                    <input type="text" class="form-control" placeholder="Search by Field Name">
                                    <i class="bi bi-search position-absolute"
                                        style="right:12px; top:50%; transform:translateY(-50%); font-size:14px;"></i>
                                </div>
                                <button class="btn btn-primary px-3">Go</button>
                            </div>
                    

                        <!-- TABLE -->
                                               <!-- TABLE -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 custom-table">
                                <thead>
                                    <tr>
                                        <th>S. No</th>
                                        <th>Company</th>
                                        <th>Legal Entity</th>
                                        <th>Branch</th>
                                        <th>Category</th>
                                        <th>Year</th>
                                        <th>Mail Services</th>
    
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Acme Co.</td>
                                        <td>Apple</td>
                                        <td>Blacktown CDS</td>
                                        <td>Hanoi Central</td>
                                        <td>2023</td>
                                        <td>@parcelmail.com</td>
                                       
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Barone LLC.</td>
                                        <td>Facebook</td>
                                        <td>Parramatta</td>
                                        <td>Hoi An</td>
                                        <td>2023</td>
                                        <td>@relaymail.co</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Acme Co.</td>
                                        <td>The Walt Disney Company</td>
                                        <td>Surry Hills</td>
                                        <td>Danang Central</td>
                                        <td>2023</td>
                                        <td>@postbox.org</td>
                                      

                                      
                                    </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>Biffco Enterprises Ltd</td>
                                        <td>MasterCard</td>
                                        <td>Blacktown CDS</td>
                                        <td>Hanoi Central</td>
                                        <td>2023</td>
                                        <td>@fastmail.org</td>
                                        

                                      
                                    </tr> 
                                    <tr>
                                        <td>5</td>
                                        <td>Abstergo Ltd.</td>
                                        <td>eBay</td>
                                        <td>Blacktown CDS</td>
                                        <td>Can Tho</td>
                                        <td>2023</td>
                                        <td>@speedpost.org</td>
                                      

                                      
                                    </tr> 
                                    <tr>
                                        <td>6</td>
                                        <td>Binford Ltd.</td>
                                        <td>Nintendo</td>
                                        <td>Parramatta</td>
                                        <td>Hoi An</td>
                                        <td>2023</td>
                                        <td>@letterhub.com</td>
                                      

                                      
                                    </tr>
                                     <tr>
                                        <td>7</td>
                                        <td>Biffco Enterprises Ltd.</td>
                                        <td>Louis Vuitton</td>
                                        <td>North Sydney</td>
                                        <td>Hoi An</td>
                                        <td>2023</td>
                                        <td>@cloudmail.net</td>
                                      

                                      
                                    </tr> 
                                    <tr>
                                        <td>8</td>
                                        <td>Biffco Enterprises Ltd.</td>
                                        <td>The Walt Disney Company</td>
                                        <td>Surry Hills</td>
                                        <td>HCM Central</td>
                                        <td>2023</td>
                                        <td>@expressmail.org</td>
                                    


                                      
                                    </tr> 
                                    <tr>
                                        <td>9</td>
                                        <td>Big Kahuna Burger Ltd</td>
                                        <td>Louis Vuitton</td>
                                        <td>Surry Hills</td>
                                        <td>HCM Central</td>
                                        <td>2023</td>
                                        <td>@yourmailbox.co</td>
                                      
                                      
                                    </tr>
                                     <tr>
                                        <td>10</td>
                                        <td>Big Kahuna Burger Ltd.</td>
                                        <td>Starbucks</td>
                                        <td>Blacktown CDS</td>
                                        <td>HCM Central</td>
                                        <td>2023</td>
                                        <td>@nextpost.net</td>
                                      
                                      
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
            const pageMain = document.querySelector('[data-bs-target="#reportMenu"]');
            const pageSub = document.querySelectorAll('#reportMenu .submenu-item')[16];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('reportMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
