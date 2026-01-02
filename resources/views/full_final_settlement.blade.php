<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payaasaan - Full & Final Settlement</title>

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
                <span class="semibold mas">Process</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="fw-semibold mas">Full & Final Settlement</span>
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


                    <!-- Category -->
                    <div class="col-md-3">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Category</option>
                            </select>

                        </div>
                    </div>


                    <!-- E Code -->
                    <div class="col-md-3">
                        <label class="form-label">E Code <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <select class="form-select">
                                <option>Select Legal Entity</option>
                            </select>

                        </div>
                    </div>


                    <!-- Resignation Date -->
                    <div class="col-md-3">
                        <label class="form-label">Resignation Date <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <div class="input-group">
                                <input type="date" class="form-control">
                            </div>

                        </div>
                    </div>


                    <!-- Separtion date -->
                    <div class="col-md-3">
                        <label class="form-label">Separtion Date <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <div class="input-group">
                                <input type="date" class="form-control">
                            </div>

                        </div>
                    </div>


                    <!-- Last Working date -->
                    <div class="col-md-3">
                        <label class="form-label">Last Working date <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <div class="input-group">
                                <input type="date" class="form-control">
                            </div>

                        </div>
                    </div>


                    <!-- Settelement date -->
                    <div class="col-md-3">
                        <label class="form-label">Settelement Date <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <div class="input-group">
                                <input type="date" class="form-control">
                            </div>

                        </div>
                    </div>

                    <!-- LOP Date -->
                    <div class="col-md-3">
                        <label class="form-label">LOP Date <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Enter Date (1-31)">
                        </div>
                    </div>


                    <!-- Month days -->
                    <div class="col-md-3">
                        <label class="form-label">Month Days</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Enter">
                        </div>
                    </div>


                    <!--Notice Period -->
                    <div class="col-md-3">
                        <label class="form-label">Notice Period</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Enter">
                        </div>
                    </div>


                    <!-- Paid days -->
                    <div class="col-md-3">
                        <label class="form-label">Paid Days</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Enter">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                        <button class="btn btn-outline-primary px-4">Delete</button>
                        <button class="btn btn-primary px-4">Process</button>
                    </div>

                </div>

                <!-- BASIC DETAILS CARD -->
                 <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center px-3 py-3"
                        style="background:#F7F7F7; border-radius:12px 12px 0 0;">
                        <h6 class="m-0 fw-semibold">Full and final Settelement</h6>


                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="row g-4">
                            <!-- Search box container -->
                            <div style="position: relative; width: 60%; max-width: 280px;">
                                <input type="text" class="form-control" placeholder="Search by City/state"
                                    style="border-radius: 30px; padding-right: 40px;">

                                <i class="bi bi-search"
                                    style="position: absolute; right: 30px; top: 50%; transform: translateY(-50%); color: #777;">
                                </i>
                            </div>

                            <div style="width: auto;">
                                <button class="btn btn-primary d-flex align-items-center gap-2" style="font-size:14px;">
                                    Go
                                </button>
                            </div>

                            <div class="card p-0 mt-4 cardborder">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 custom-table ">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>S.No</th>
                                                <th>ECode</th>
                                                <th>Settelement Date</th>
                                                <th>LOP Date</th>
                                                <th>Month Days</th>
                                                <th>Notice Period</th>
                                                <th>Paid Days</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>1</td>
                                                <td>67080</td>
                                                <td>16/08/2013</td>
                                                <td>16/08/2013</td>
                                                <td>20</td>
                                                <td>5</td>
                                                <td>83</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>2</td>
                                                <td>35180</td>
                                                <td>12/06/2020</td>
                                                <td>28/10/2012</td>
                                                <td>19</td>
                                                <td>7</td>
                                                <td>30</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>3</td>
                                                <td>80953</td>
                                                <td>28/10/2012</td>
                                                <td>18/09/2016</td>
                                                <td>24</td>
                                                <td>5</td>
                                                <td>72</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>4</td>
                                                <td>13081</td>
                                                <td>18/09/2016</td>
                                                <td>07/05/2016</td>
                                                <td>18</td>
                                                <td>60</td>
                                                <td>50</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>5</td>
                                                <td>39146</td>
                                                <td>15/08/2017</td>
                                                <td>12/06/2020</td>
                                                <td>22</td>
                                                <td>9</td>
                                                <td>26</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>6</td>
                                                <td>66224</td>
                                                <td>07/05/2016</td>
                                                <td>15/08/2017</td>
                                                <td>21</td>
                                                <td>30</td>
                                                <td>23</td>
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
                <!-- ============================
               MONTHLY INPUT DETAILS
                =============================== -->
                 <div class="card p-0 mb-4" style="border-radius:12px; border:1px solid #E5E5E5;">

                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center px-3 py-3"
                        style="background:#F7F7F7; border-radius:12px 12px 0 0;">
                        <h6 class="m-0 fw-semibold"> Monthly Input Details</h6>


                    </div>

                    <!-- Body -->
                    <div class="p-4">

                        <div class="row g-4">

                            <!-- Miscellaneous Payment -->
                            <div class="col-md-3">
                                <label class="form-label">Miscellaneous Payment <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Miscellaneous Payment">
                            </div>

                            <!-- Leave Salary -->
                            <div class="col-md-3">
                                <label class="form-label">Leave Salary<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Leave Salary">
                            </div>

                            <!-- Miscellaneous Deduction -->
                            <div class="col-md-3">
                                <label class="form-label">Miscellaneous Deduction<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Miscellaneous Deduction">
                            </div>

                            <!-- Miscellaneous TDS -->
                            <div class="col-md-3">
                                <label class="form-label">Miscellaneous TDS <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Miscellaneous TDS">
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end gap-3 mt-4">

                                <button class="btn btn-primary px-4">Add</button>
                            </div>

                            <!-- Search box container -->
                            <div style="position: relative; width: 60%; max-width: 280px;">
                                <input type="text" class="form-control" placeholder="Search by Income"
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
                                            <th>Miscellaneous Payment</th>
                                            <th>Leave Salary</th>
                                            <th>Miscellaneous Deduction</th>
                                            <th>Miscellaneous TDS</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Eye Q India</td>
                                            <td>Infogenix</td>
                                            <td>Kohat Enclave Pitampura</td>
                                            <td>Employment termination payments</td>
                                            <td>₹3,95,900</td>
                                            <td>₹1,45,200</td>
                                            <td>₹4,95,400</td>
                                            <td>₹4,95,400</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Narayana Nethralaya</td>
                                            <td>Trello</td>
                                            <td>Samb,New Delhi</td>
                                            <td>Report fringe benefits amount</td>
                                            <td>₹3,95,900</td>
                                            <td>₹1,89,450</td>
                                            <td>₹3,25,700</td>
                                            <td>₹2,50,000</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>CCHRC</td>
                                            <td>Lendio</td>
                                            <td>South Extension New Delhi</td>
                                            <td>Gross Payments</td>
                                            <td>₹4,10,350</td>
                                            <td>₹3,78,650</td>
                                            <td>₹2,12,300</td>
                                            <td>₹1,89,450</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Eye Q India</td>
                                            <td>Figma</td>
                                            <td>C.A.C.Janakpuri</td>
                                            <td>Employment termination payments</td>
                                            <td>₹3,95,900</td>
                                            <td>₹2,67,800</td>
                                            <td>₹1,89,450</td>
                                            <td>₹3,78,650</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Narayana Nethralaya</td>
                                            <td>Google</td>
                                            <td>Shastri Nagar</td>
                                            <td>Lump Sum A</td>
                                            <td>₹2,67,800</td>
                                            <td>₹2,12,300</td>
                                            <td>₹3,78,650</td>
                                            <td>₹2,12,300</td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Aster Medical</td>
                                            <td>Entrata</td>
                                            <td>Shalimar Bagh</td>
                                            <td>Employment termination payments</td>
                                            <td>₹1,89,450</td>
                                            <td>₹2,12,300</td>
                                            <td>₹1,45,200</td>
                                            <td>₹1,89,450</td>
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
                <button class="btn btn-outline-primary px-4">Save Draft</button>
                <button class="btn btn-primary px-4">Submit</button>
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
            const pageMain = document.querySelector('[data-bs-target="#processMenu"]');
            const pageSub = document.querySelectorAll('#processMenu .submenu-item')[1];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('processMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>