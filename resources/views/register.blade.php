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
        .custom-table {
            font-size: 14px;
            border: 1px solid #dee2e6;
        }
        .custom-table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            vertical-align: middle;
            font-weight: 600;
        }
        .custom-table tbody tr:hover {
            background-color: #f5f5f5;
        }
        .custom-table td {
            vertical-align: middle;
        }
        .checkbox-column {
            width: 50px;
            text-align: center;
        }
        .checkbox-header {
            text-align: center;
            font-weight: normal;
        }
        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .form-check-input {
            width: 1.1em;
            height: 1.1em;
            cursor: pointer;
        }
        .select-all-label {
            font-size: 12px;
            font-weight: 500;
            color: #495057;
            cursor: pointer;
            user-select: none;
        }
        .serial-number {
            display: none;
        }
        .currency {
            text-align: right;
            font-family: 'Courier New', monospace;
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
                <span class="fw-semibold mas">Dashboard</span>
                <span class="mx-1 text-secondary">/</span>
                <span class="mas semibold">Register</span>
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

 


                </div>

                <!-- BASIC DETAILS CARD -->
                <div class="card p-0 cardborder">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Contract Labour Details
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        
<!-- First Row - 4 columns -->
<div class="row g-3 align-items-end">
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
    
    <!-- Conductor -->
    <div class="col-md-3">
        <label class="form-label">Conductor <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Conductor</option>
        </select>
    </div>
</div>

<!-- Second Row - 4 columns with proper grid layout -->
<div class="row g-3 align-items-end mt-2">
    <!-- Radio (Core / Contract Labour) -->
    <div class="col-md-3">
        <label class="form-label d-block"></label>
        <div class="d-flex gap-3">
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="core" required>
                <span style="font-size: 12px;">Core</span>
            </label>
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="contract">
                <span style="font-size: 12px;">Contract Labour</span>
            </label>
        </div>
    </div>

    <!-- Month -->
    <div class="col-md-3">
        <label class="form-label">Month <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="month" class="form-control" id="monthPicker" placeholder="Select Month" required>
        </div>
    </div>

    <!-- Year -->
    <div class="col-md-3">
        <label class="form-label">Year <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="number" class="form-control" placeholder="Select Year" 
                   min="2000" max="2050" step="1" required>
        </div>
    </div>

    <!-- Buttons -->
    <div class="col-md-3">
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-outline-primary flex-fill">
                 Cancel
            </button>
            <button type="submit" class="btn btn-primary flex-fill">
                Generate
            </button>
        </div>
    </div>
</div> <br>


                        <!-- TABLE -->
                                               <!-- TABLE -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 custom-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Register NO</th>
                                        <th>Form No</th>
                                        <th></th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                         <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600375</td>
                                        <td> XXVIV</td>
                                        <td>Master Roll</td>
                                       
                                    </tr>

                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600693</td>
                                        <td>XXVIII</td>
                                        <td>Register of Wages</td>
                                    </tr>

                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600321</td>
                                        <td>XIII</td>
                                        <td>Register of Workmen</td>
                                       

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600093</td>
                                        <td>XXVIII</td>
                                        <td>Wage Slap</td>
                                       

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600888</td>
                                        <td>XIII</td>
                                        <td>Register of Contractors</td>
                                      

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>00802</td>
                                        <td>XXIX</td>
                                        <td>Register of Advance, Damage or Loss and Fixes</td>
                                 

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600342</td>
                                        <td>XXV</td>
                                        <td>Register of Employment</td>
                                     
                                   

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600482</td>
                                        <td> VIII</td>
                                        <td>Service of Certificate</td>
                                   


                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>ER</td>
                                        <td> 600482</td>
                                        <td>D</td>
                                        <td>Register</td>
                                      
                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>CLRA</td>
                                        <td>600321</td>
                                        <td> XXIII</td>
                                        <td>Register of Advance, Damage or Loss and Fixes </td>
                                   
                                      
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



                  <div class="row g-4 mb-3">

      <div class="row g-3">

 


                </div>

                <!-- BASIC DETAILS CARD -->
                <div class="card p-0 cardborder">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Register Generation
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        
<!-- First Row - 4 columns -->
<div class="row g-3 align-items-end">
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
    
    <!-- Conductor -->
    <div class="col-md-3">
        <label class="form-label">Conductor <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Conductor</option>
        </select>
    </div>
</div>

<!-- Second Row - 4 columns with proper grid layout -->
<div class="row g-3 align-items-end mt-2">
    <!-- Radio (Core / Contract Labour) -->
    <div class="col-md-3">
        <label class="form-label d-block"></label>
        <div class="d-flex gap-3">
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="core" required>
                <span style="font-size: 12px;">Core</span>
            </label>
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="contract">
                <span style="font-size: 12px;">Contract Labour</span>
            </label>
        </div>
    </div>

    <!-- Month -->
    <div class="col-md-3">
        <label class="form-label">Month <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="month" class="form-control" id="monthPicker" placeholder="Select Month" required>
        </div>
    </div>

    <!-- Year -->
    <div class="col-md-3">
        <label class="form-label">Year <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="number" class="form-control" placeholder="Select Year" 
                   min="2000" max="2050" step="1" required>
        </div>
    </div>

    <!-- Buttons -->
    <div class="col-md-3">
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-outline-primary flex-fill">
                 Cancel
            </button>
            <button type="submit" class="btn btn-primary flex-fill">
                Generate
            </button>
        </div>
    </div>
</div> <br>


                        <!-- TABLE -->
                                               <!-- TABLE -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 custom-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Form No</th>
                                        <th></th>
                                        
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                         <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Shop + Establishment </td>
                                        <td>39235</td>
                                        <td>Master Roll</td>
                                       
                                       
                                    </tr>

                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Shop + Establishment </td>
                                        <td>74875</td>
                                        <td>Wage Register</td>
                                        
                                    </tr>

                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Shop + Establishment </td>
                                        <td>92771</td>
                                        <td>Leave Register</td>
                                       
                                       

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Maternity </td>
                                        <td>43359</td>
                                        <td>Master Roll</td>
                                       
                                       

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Shop + Establishment </td>
                                        <td>28200</td>
                                        <td>Adv,firm + Damage Loss</td>
                                     
                                      

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Shop + Establishment </td>
                                        <td>16415</td>
                                        <td>Register of Employee With Hours Of Work</td>
                                        
                                 

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Shop + Establishment </td>
                                        <td>39235</td>
                                        <td>Wage Slip</td>
                                    
                                     
                                   

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>POW </td>
                                        <td>	74875</td>
                                        <td>Register of Wages</td>
                                     
                                   


                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>POW </td>
                                        <td> 92771</td>
                                        <td>Register of Fines</td>
                                     
                                      
                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>POW 

</td>
                                        <td>43359 </td>
                                        <td>Register Of Deducation for Damage and Loss</td>
                                      
                                   
                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>POW</td>
                                        <td>28200</td>
                                        <td>Register of Advances</td>
                                        
                                 

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>MW </td>
                                        <td>16415</td>
                                        <td>Register of Fines</td>
                                        
                                 

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>MW</td>
                                        <td>39235</td>
                                        <td>Register of Wages</td>
                                        
                                 

                                      
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

                            <!-- BASIC DETAILS CARD -->
                <div class="card p-0 cardborder">

                    <!-- Header -->
                    <div
                       class="cardheader">
                        Factory
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        
<!-- First Row - 4 columns -->
<div class="row g-3 align-items-end">
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
    
    <!-- Conductor -->
    <div class="col-md-3">
        <label class="form-label">Conductor <span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option value="">Select Conductor</option>
        </select>
    </div>
</div>

<!-- Second Row - 4 columns with proper grid layout -->
<div class="row g-3 align-items-end mt-2">
    <!-- Radio (Core / Contract Labour) -->
    <div class="col-md-3">
        <label class="form-label d-block"></label>
        <div class="d-flex gap-3">
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="core" required>
                <span style="font-size: 12px;">Core</span>
            </label>
            <label class="d-flex align-items-center gap-2">
                <input type="radio" name="category_type" value="contract">
                <span style="font-size: 12px;">Contract Labour</span>
            </label>
        </div>
    </div>

    <!-- Month -->
    <div class="col-md-3">
        <label class="form-label">Month <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="month" class="form-control" id="monthPicker" placeholder="Select Month" required>
        </div>
    </div>

    <!-- Year -->
    <div class="col-md-3">
        <label class="form-label">Year <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="number" class="form-control" placeholder="Select Year" 
                   min="2000" max="2050" step="1" required>
        </div>
    </div>

    <!-- Buttons -->
    <div class="col-md-3">
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-outline-primary flex-fill">
                 Cancel
            </button>
            <button type="submit" class="btn btn-primary flex-fill">
                Generate
            </button>
        </div>
    </div>
</div> <br>


                        <!-- TABLE -->
                                               <!-- TABLE -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 custom-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                         <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Form 7</td>
                                        <td>Time Washing Register</td>
                                        <td>Master Roll</td>
                                       
                                       
                                    </tr>

                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Form 9 </td>
                                        <td>Register of Compensatory Holidays</td>
                                        <td> Register Wages</td>
                                        
                                    </tr>

                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Form 10 </td>
                                        <td>Over Time Master Roll for Examples Workers</td>
                                        <td> Register of Workmen</td>
                                       
                                       

                                      
                                    </tr>
                                     <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Form 12</td>
                                        <td>Register of Adult Workers</td>
                                        <td>Wage Slap</td>
                                       
                                       

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Form 15 </td>
                                        <td>Register of Leave with wages</td>
                                        <td>Register of Contractor</td>
                                     
                                      

                                      
                                    </tr> 
                                    <tr>
                                             <td class="checkbox-column">
                            <div class="form-check">
                                <input class="form-check-input row-checkbox" type="checkbox" id="row7">
                            </div>
                        </td>
                                        <td>Form 25 </td>
                                        <td>Master Roll for Adult Workers</td>
                                        <td>Register of Advance, Damage or Loss and Fixes</td>
                                        
                                 

                                      
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
            const pageMain = document.querySelector('[data-bs-target="#registersMenu"]');
            const pageSub = document.querySelectorAll('#registersMenu .submenu-item')[0];

            pageMain.classList.add('active', 'page-active');
            document.getElementById('registersMenu').classList.add('show');
            pageSub.classList.add('active', 'page-active');
        });
    </script>

</body>

</html>
