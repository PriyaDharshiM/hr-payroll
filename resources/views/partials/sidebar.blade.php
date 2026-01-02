<div id="sidebarOverlay" class="overlay" aria-hidden="true"></div>

<nav id="sidebar" class="sidebar" aria-label="Main sidebar">

    <div style="padding:10px 7px;">
        <div class="position-relative">
            <input type="text" class="form-control" placeholder="Search by Menu" style="padding-right:40px;height:36px;">
            <i class="bi bi-search"
                style="
                position:absolute;
                right:12px;
                top:50%;
                transform:translateY(-50%);
                color:#777;
                font-size:16px;
                
           ">
            </i>
        </div>
    </div>


    <!-- MASTER -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#masterMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class=" mas">Master</span>
        </div>
        <span class="badge bg-primary rounded-pill">10</span>
    </div>

    <div class="collapse submenu" id="masterMenu">
        <a href="{{ route('createcompany') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Create Company</div></a>
        <a href="{{ route('createlegalentity') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Legal Entity Creation</div></a>
         <a href="{{ route('createBranch') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Branch Creation</div></a>
         <a href="{{ route('createcategory') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Category Creation</div></a>
         <a href="{{ route('createholiday') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Create Holidays</div></a>
         <a href="{{ route('LeaveEntitlement') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Capture Leave Entitlement</div></a>
         <a href="{{ route('weeklyholiday') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Capture Weekly Holiday</div></a>
         <a href="{{ route('createshift') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Create Shift Details</div></a>
         <a href="{{ route('workorder') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Work Order Creation</div></a>
         <a href="{{ route('location') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Create Location</div></a>
         <a href="{{ route('loanmaster') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Loan Master Creation</div></a>
         <a href="{{ route('leavetype') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Leave Type creation</div></a>
         <a href="{{ route('skillwages') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Capture Skill Wages</div></a>
         <a href="{{ route('bankdetails') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Bank Details Creation</div></a>
         <a href="{{ route('fieldcreation') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Field Creation</div></a>
         <a href="{{ route('formula') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Formula Creation</div></a>
         <a href="{{ route('contractlabour') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Contract Labour Master Entry</div></a>
         <a href="{{ route('employee') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Employee Master Entry</div></a>
         <a href="{{ route('contractor') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Contractor Master Entry</div></a>
         <a href="{{ route('incometaxsettings') }}"><div class="submenu-item"><i class="bi bi-shield-check"></i> Income Tax Financial Settings</div></a>
    </div>

    <!-- CONFIG -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#configMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class="mas">Configurations</span>
        </div>
        <span class="badge bg-primary rounded-pill"></span>
    </div>

    <div class="collapse submenu" id="configMenu">
        <a href="{{ route('pfpercentagecalc') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Capture PF Percentage & Limit
        </div>
        </a>

        <a href="{{ route('esipercentagecalc') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Capture ESI Percentage & Limit
        </div>
        </a>

        <a href="{{ route('professionalslabs') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Configure Professional Slabs
        </div>
        </a>

        <a href="{{ route('lwfconfiguration') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Capture EE&ER LWF contribution
        </div>
        </a>

        <a href="{{ route('revisionconfiguration') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Configure Revision component
        </div>
        </a>

        <a href="{{ route('Attendance') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Configure Attendance
        </div>
        </a>

        <a href="{{ route('workhours') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Configure Work Hours
        </div>
        </a>

        <a href="{{ route('notation') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            Capture Notation
        </div>
        </a>

        <a href="{{ route('licmatching') }}">
        <div class="submenu-item">
            <i class="bi bi-gear-fill"></i>
            LIC Matching
        </div>
        </a>

    </div>

    <!-- TRANSACTION -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#transMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class="mas">Transaction</span>
        </div>
        <span class="badge bg-primary rounded-pill"></span>
    </div>

    <div class="collapse submenu" id="transMenu">


        <a href="{{ route('capture_monthly_input') }}">
        <div class="submenu-item">
           <i class="bi bi-sliders2"></i>
           Capture Monthly Input - addon Earning & Deduction values
        </div>
        </a>

        <a href="{{ route('loan_deviation') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Loan Posting / Loan Deviation
        </div>
        </a>

        <a href="{{ route('revision_entry') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Revision Entry/Upload
        </div>
        </a>
        
        <a href="{{ route('employee_transfer') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Employee Transfer
        </div>
        </a>

        <a href="{{ route('attendance_upload') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Upload Attendance
        </div>
        </a>

        <a href="{{ route('overtime_entry') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Update OT Details
        </div>
        </a>

        <a href="{{ route('attendance_consolidation') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Consolidate Attendance
        </div>
        </a>

        <a href="{{ route('income_matching') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Income Tax - Income Matching
        </div>
        </a>

        <a href="{{ route('section_matching') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Income Tax - Section Matching
        </div>
        </a>

        <a href="{{ route('income_tax_declaration_entry_upload') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Income Tax - Declaration Entry/Upload
        </div>
        </a>

        <a href="{{ route('offline_payment_entry') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Income Tax - Other/Offline Payment Entry
        </div>
        </a>

        <a href="{{ route('incomechallanentry') }}">
        <div class="submenu-item">
           <i class="bi bi-sliders2"></i>
            Income Tax - Challan Entry
        </div>
        </a>

        <a href="{{ route('loanforeclose') }}">
        <div class="submenu-item">
           <i class="bi bi-sliders2"></i>
            Loan Fore Close / Pre Close
        </div>
        </a>

        <a href="{{ route('loanreverseforeclose') }}">
        <div class="submenu-item">
            <i class="bi bi-sliders2"></i>
            Loan Reverse Fore Close
        </div>
        </a>

    </div>
    <!-- PROCESS -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#processMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class=" mas">Process</span>
        </div>
        <span class="badge bg-primary rounded-pill"></span>
    </div>

    <div class="collapse submenu" id="processMenu">

        <a href="{{ route('payroll_process') }}">
        <div class="submenu-item">
            <i class="bi bi-arrows-fullscreen"></i>
            Payroll Process
        </div>
        </a>

        <a href="{{ route('full_final_settlement') }}">
        <div class="submenu-item">
            <i class="bi bi-arrows-fullscreen"></i>
            Full & Final Settlement
        </div>
        </a>

        <a href="{{ route('income_tax_process') }}">
        <div class="submenu-item">
            <i class="bi bi-arrows-fullscreen"></i>
            Income Tax Process
        </div>
        </a>

    </div>
    <!-- REPORT -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#reportMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class=" mas">Report</span>
        </div>
        <span class="badge bg-primary rounded-pill"></span>
    </div>

    <div class="collapse submenu" id="reportMenu">
        <a href="{{ route('pfextract') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            PF Extract
        </div>
        </a>

        <a href="{{ route('pfonlineextractecr') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            PF Online extract (ECR)
        </div>
        </a>
     
        <a href="{{ route('esiextract') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            ESI Extract
        </div>
        </a>
     
        <a href="{{ route('professionaltaxstatement') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Professional Tax Statement
        </div>
        </a>   
      
        <a href="{{ route('labourwelfarefundstatement') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Labour Welfare fund Statement
        </div>
        </a>   

        <a href="{{ route('wageslip') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Wage Slip
        </div>
        </a>   

        <a href="{{ route('wageslipmail') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Wage Slip - Mail
        </div>
        </a>   

        <a href="{{ route('wagesummary') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Wage Summary
        </div>
        </a>   

        <a href="{{ route('earnings_summary') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Earnings Summary
        </div>
        </a>   

        <a href="{{ route('deduction_summary') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Deduction Summary
        </div>
        </a>

       <a href="{{ route('attendance_report') }}"> 
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Attendance Report
        </div>
        </a>

        <a href="{{ route('work_order_report') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Work Order Report
        </div>
        </a>

        <a href="{{ route('form24Q_income_tax') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Form 24Q - Income Tax
        </div>
        </a>

        <a href="{{ route('form24QA_income_tax') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Form 24QA - Income Tax
        </div>
        </a>

        <a href="{{ route('income_tax_statement') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Income Tax Statement
        </div>
        </a>

        <a href="{{ route('form16ofemployeelist') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Form 16 of Single Employee
        </div>
        </a>

        <a href="{{ route('form16mail') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Form 16 - Mail
        </div>
        </a>

        <a href="{{ route('incometaxannualstatement') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Income Tax - Annual Statement
        </div>
        </a>

        <a href="{{ route('income_tax_worksheet') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Income Tax - Worksheet
        </div>
        </a>

        <a href="{{ route('worksheet_mail') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Worksheet - Mail
        </div>
        </a>
        
        <a href="{{ route('loan_statement') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Loan Statement
        </div>

        <a href="{{ route('addition_of_separation_report') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Addition & Separation Report
        </div>
        </a>

        <a href="{{ route('arrear_statement') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Arrear Statement
        </div>
        </a>

        <a href="{{ route('excel_wizard') }}">
        <div class="submenu-item">
            <i class="bi bi-file-earmark-text"></i>
            Excel Wizard
        </div>
        </a>

    </div>

    <!-- REGISTERS -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#registersMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class="mas">Registers</span>
        </div>
    </div>

    <div class="collapse submenu" id="registersMenu">

        <a href="{{ route('register') }}">  
        <div class="submenu-item">
            <i class="bi bi-person-plus"></i>
            Register
        </div>
        </a>

    </div>
    <!-- RETURNS -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#returnsMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class="mas">Returns</span>
        </div>
    </div>

    <div class="collapse submenu" id="returnsMenu">

         <a href="{{ route('return') }}">
        <div class="submenu-item">
            <i class="bi bi-calculator"></i>
            Return
        </div>
        </a>

    </div>
    <!-- USER MANAGEMENT -->
    <div class="sidebar-main-item" data-bs-toggle="collapse" data-bs-target="#userMenu" aria-expanded="false">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right arrow-icon"></i>
            <span class="mas">User Management</span>
        </div>
    </div>

    <div class="collapse submenu" id="userMenu">

        <a href="{{ route('roles_creation') }}">
        <div class="submenu-item">
            <i class="bi bi-people-fill"></i>
            Roles Creation
        </div>
        </a>


        <a href="{{ route('allocate_rights') }}">
        <div class="submenu-item">
            <i class="bi bi-people-fill"></i>
            Allocate Rights
        </div>
        </a>


        <a href="{{ route('usercreation') }}">
        <div class="submenu-item">
            <i class="bi bi-people-fill"></i>    
            Create Users
        </div>
        </a>

    </div>

</nav>
