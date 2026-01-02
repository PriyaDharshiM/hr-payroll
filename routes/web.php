<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'login'])->name('login');


Route::get('Create/Category', [SiteController::class, 'createcategory'])->name('createcategory');
Route::get('Create/Holiday', [SiteController::class, 'createholiday'])->name('createholiday');
Route::get('Create/LeaveEntitlement', [SiteController::class, 'LeaveEntitlement'])->name('LeaveEntitlement');
Route::get('Create/WeeklyHoliday', [SiteController::class, 'weeklyholiday'])->name('weeklyholiday');
Route::get('Create/Shift', [SiteController::class, 'createshift'])->name('createshift');
Route::get('Create/WorkOrder', [SiteController::class, 'workorder'])->name('workorder');
Route::get('Create/Location', [SiteController::class, 'location'])->name('location');
Route::get('Create/LoanMaster', [SiteController::class, 'loanmaster'])->name('loanmaster');
Route::get('Create/LeaveType', [SiteController::class, 'leavetype'])->name('leavetype');
Route::get('Create/SkillWages', [SiteController::class, 'skillwages'])->name('skillwages');
Route::get('Create/BankDetails', [SiteController::class, 'bankdetails'])->name('bankdetails');
Route::get('Create/FieldCreation', [SiteController::class, 'fieldcreation'])->name('fieldcreation');
Route::get('Create/formula', [SiteController::class, 'formula'])->name('formula');
Route::get('Create/ContractLabour', [SiteController::class, 'contractlabour'])->name('contractlabour');
Route::get('Create/Contractor', [SiteController::class, 'contractor'])->name('contractor');
Route::get('Create/Employee', [SiteController::class, 'employee'])->name('employee');
Route::get('Create/Contractor', [SiteController::class, 'contractor'])->name('contractor');
Route::get('Create/incometaxsettings', [SiteController::class, 'incometaxsettings'])->name('incometaxsettings');

Route::get('Configure/PfPercentage', [SiteController::class, 'pfpercentagecalc'])->name('pfpercentagecalc');
Route::get('Configure/EsiPercentageCalc', [SiteController::class, 'esipercentagecalc'])->name('esipercentagecalc');
Route::get('Configure/ProfessionalSlabs', [SiteController::class, 'professionalslabs'])->name('professionalslabs');
Route::get('Configure/LwfConfiguration', [SiteController::class, 'lwfconfiguration'])->name('lwfconfiguration');
Route::get('Configure/RevisionConfiguration', [SiteController::class, 'revisionconfiguration'])->name('revisionconfiguration');
Route::get('Configure/Attendance', [SiteController::class, 'Attendance'])->name('Attendance');
Route::get('Configure/WorkHours', [SiteController::class, 'workhours'])->name('workhours');
Route::get('Configure/Notation', [SiteController::class, 'notation'])->name('notation');
Route::get('Configure/LicMatching', [SiteController::class, 'licmatching'])->name('licmatching');

Route::get('transaction/Incometax-ChallanEntry', [SiteController::class, 'incomechallanentry'])->name('incomechallanentry');
Route::get('transaction/LoanForeClose', [SiteController::class, 'loanforeclose'])->name('loanforeclose');
Route::get('transaction/LoanReverseForeClose', [SiteController::class, 'loanreverseforeclose'])->name('loanreverseforeclose');

// Process
Route::get('Process/PayrollProcess', [SiteController::class, 'payrollprocess'])->name('payrollprocess');
Route::get('Process/full&FinalSettlement', [SiteController::class, 'ffsettlement'])->name('ffsettlement');
Route::get('Process/IncomeTaxProcess', [SiteController::class, 'incometaxprocess'])->name('incometaxprocess');

// reports
Route::get('Reports/PFExtract', [SiteController::class, 'pfextract'])->name('pfextract');
Route::get('Reports/PFONLINEExtractECR', [SiteController::class, 'pfonlineextractecr'])->name('pfonlineextractecr');
Route::get('Reports/ESIExtract', [SiteController::class, 'esiextract'])->name('esiextract');
Route::get('Reports/PROFESSIONALTAXSTATEMENT', [SiteController::class, 'professionaltaxstatement'])->name('professionaltaxstatement');
Route::get('Reports/LABOURWELFAREFUNDSTATEMENT', [SiteController::class, 'labourwelfarefundstatement'])->name('labourwelfarefundstatement');
Route::get('Reports/WAGESLIP', [SiteController::class, 'wageslip'])->name('wageslip');
Route::get('Reports/WAGESLIPMAIL', [SiteController::class, 'wageslipmail'])->name('wageslipmail');
Route::get('Reports/FORM16OFEMPLOYEELIST', [SiteController::class, 'form16ofemployeelist'])->name('form16ofemployeelist');
Route::get('Reports/FORM16MAIL', [SiteController::class, 'form16mail'])->name('form16mail');
Route::get('Reports/INCOMETAXANNUALSTATEMENT', [SiteController::class, 'incometaxannualstatement'])->name('incometaxannualstatement');

Route::get('register/', [SiteController::class, 'register'])->name('register');

Route::get('allocate_rights/', [SiteController::class, 'allocate_rights'])->name('allocate_rights');
Route::get('attendance_consolidation/', [SiteController::class, 'attendance_consolidation'])->name('attendance_consolidation');
Route::get('attendance_upload/', [SiteController::class, 'attendance_upload'])->name('attendance_upload');
Route::get('capture_monthly_input/', [SiteController::class, 'capture_monthly_input'])->name('capture_monthly_input');
Route::get('employee_transfer/', [SiteController::class, 'employee_transfer'])->name('employee_transfer');
Route::get('excel_wizard/', [SiteController::class, 'excel_wizard'])->name('excel_wizard');
Route::get('income_matching/', [SiteController::class, 'income_matching'])->name('income_matching');
Route::get('income_tax_declaration_entry_upload/', [SiteController::class, 'income_tax_declaration_entry_upload'])->name('income_tax_declaration_entry_upload');
Route::get('income_tax_process/', [SiteController::class, 'income_tax_process'])->name('income_tax_process');
Route::get('loan_deviation/', [SiteController::class, 'loan_deviation'])->name('loan_deviation');
Route::get('payroll_process/', [SiteController::class, 'payroll_process'])->name('payroll_process');
Route::get('revision_entry/', [SiteController::class, 'revision_entry'])->name('revision_entry');
Route::get('section_matching/', [SiteController::class, 'section_matching'])->name('section_matching');
Route::get('full_final_settlement/', [SiteController::class, 'full_final_settlement'])->name('full_final_settlement');
Route::get('over_time/', [SiteController::class, 'over_time'])->name('overtime_entry');
Route::get('work_order_report/', [SiteController::class, 'work_order_report'])->name('work_order_report');

Route::get('addition_of_separation_report/', [SiteController::class, 'addition_of_separation_report'])->name('addition_of_separation_report');
Route::get('arrear_statement/', [SiteController::class, 'arrear_statement'])->name('arrear_statement');
Route::get('attendance_report/', [SiteController::class, 'attendance_report'])->name('attendance_report');
Route::get('deduction_summary/', [SiteController::class, 'deduction_summary'])->name('deduction_summary');
Route::get('earnings_summary/', [SiteController::class, 'earnings_summary'])->name('earnings_summary');
Route::get('loan_statement/', [SiteController::class, 'loan_statement'])->name('loan_statement');
Route::get('wagesummary/', [SiteController::class, 'wagesummary'])->name('wagesummary');
Route::get('return/', [SiteController::class, 'return'])->name('return');
Route::get('usercreation/', [SiteController::class, 'usercreation'])->name('usercreation');
Route::get('form24Q_income_tax/', [SiteController::class, 'form24Q_income_tax'])->name('form24Q_income_tax');
Route::get('income_tax_statement/', [SiteController::class, 'income_tax_statement'])->name('income_tax_statement');
Route::get('form24QA_income_tax/', [SiteController::class, 'form24QA_income_tax'])->name('form24QA_income_tax');
Route::get('income_tax_worksheet/', [SiteController::class, 'income_tax_worksheet'])->name('income_tax_worksheet');
Route::get('worksheet_mail/', [SiteController::class, 'worksheet_mail'])->name('worksheet_mail');
Route::get('roles_creation/', [SiteController::class, 'roles_creation'])->name('roles_creation');
Route::get('offline_payment_entry/', [SiteController::class, 'offline_payment_entry'])->name('offline_payment_entry');


//Company creation
Route::get('Create/Company', [SiteController::class, 'createcompany'])->name('createcompany');
Route::post('/company/store', [SiteController::class, 'companystore'])->name('company.store');
Route::get('/company/{company}/edit', [SiteController::class, 'companyEdit'])->name('company.edit');
Route::post('/company/{company}/update', [SiteController::class, 'companyUpdate'])->name('company.update');

// Legal Entity creation
Route::get('/Create/LegalEntity', [SiteController::class, 'createLegalEntity'])->name('createlegalentity');
Route::post('/legal-entity/store', [SiteController::class, 'legalEntityStore'])->name('legalentity.store');
Route::get('/company/{company_id}/legal-entities', [SiteController::class, 'getCompanyLegalEntities']);
Route::get('/legal-entity/{company_id}/{legalentity_id}/edit', [SiteController::class, 'editLegalEntity'])->name('legalentity.edit');
Route::post('/legal-entity/{company_id}/{legalentity_id}/update', [SiteController::class, 'updateLegalEntity'])->name('legalentity.update');
Route::get('/get-company/{company_id}', [SiteController::class, 'getCompany'])->name('get.company');
Route::get('/check-legal-entity-limit/{companyId}', [SiteController::class, 'checkLimit']);

//Branch Creation 
// Route::get('Create/Branch', [SiteController::class, 'createBranch'])->name('createBranch');
Route::get('/Create/Branch', [SiteController::class, 'branchCompany'])->name('createBranch');
Route::post('/Create/Branch/store', [SiteController::class, 'storeBranchCompany'])->name('branch.company.store');
Route::get('/get-legal-entities/{company_id}', [SiteController::class, 'getLegalEntities']);