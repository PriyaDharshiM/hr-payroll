<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function createcategory()
    {
        return view('createcategory');
    }

    public function createholiday()
    {
        return view('createholiday');
    }

    public function LeaveEntitlement()
    {
        return view('LeaveEntitlement');
    }

    public function weeklyholiday()
    {
        return view('weeklyholiday');
    }

    public function createshift()
    {
        return view('createshift');
    }

    public function workorder()
    {
        return view('workorder');
    }

    public function location()
    {
        return view('location');
    }

    public function loanmaster()
    {
        return view('loanmaster');
    }

    public function leavetype()
    {
        return view('leavetype');
    }

    public function skillwages()
    {
        return view('skillwages');
    }

    public function bankdetails()
    {
        return view('bankdetails');
    }

    public function fieldcreation()
    {
        return view('fieldcreation');
    }

    public function formula()
    {
        return view('formula');
    }

    public function contractlabour()
    {
        return view('contractlabour');
    }

    public function contractor()
    {
        return view('contractor');
    }

    public function employee()
    {
        return view('employee');
    }

    public function incometaxsettings()
    {
        return view('incometaxsettings');
    }

    public function pfpercentagecalc()
    {
        return view('pfpercentagecalc');
    }

    public function attendance()
    {
        return view('attendance');
    }

    public function esipercentagecalc()
    {
        return view('esipercentagecalc');
    }

    public function professionalslabs()
    {
        return view('professionalslabs');
    }

    public function lwfconfiguration()
    {
        return view('lwfconfiguration');
    }

    public function revisionconfiguration()
    {
        return view('revisionconfiguration');
    }

    public function workhours()
    {
        return view('workhours');
    }

    public function licmatching()
    {
        return view('licmatching');
    }

    public function notation()
    {
        return view('notation');
    }

    public function loanreverseforeclose()
    {
        return view('loanreverseforeclose');
    }

    public function loanforeclose()
    {
        return view('loanforeclose');
    }

    public function incomechallanentry()
    {
        return view('incomechallanentry');
    }

    public function payrollprocess()
    {
        return view('payrollprocess');
    }

    public function ffsettlement()
    {
        return view('ffsettlement');
    }

    public function incometaxprocess()
    {
        return view('incometaxprocess');
    }

    public function pfextract()
    {
        return view('pfextract');
    }

    public function pfonlineextractecr()
    {
        return view('pfonline_extract_ecr');
    }

    public function esiextract()
    {
        return view('esiextract');
    }

    public function professionaltaxstatement()
    {
        return view('professionaltaxstatement');
    }

    public function labourwelfarefundstatement()
    {
        return view('labourwelfarefundstatement');
    }

    public function wageslip()
    {
        return view('wageslip');
    }

    public function wageslipmail()
    {
        return view('wageslipmail');
    }

    public function form16ofemployeelist()
    {
        return view('form16ofemployeelist');
    }

    public function form16mail()
    {
        return view('form16mail');
    }

    public function incometaxannualstatement()
    {
        return view('incometaxannualstatement');
    }

    public function register()
    {
        return view('register');
    }

    public function allocate_rights()
    {
        return view('allocate_rights');
    }

    public function attendance_consolidation()
    {
        return view('attendance_consolidation');
    }

    public function attendance_upload()
    {
        return view('attendance_upload');
    }

    public function capture_monthly_input()
    {
        return view('capture_monthly_input');
    }

    public function employee_transfer()
    {
        return view('employee_transfer');
    }

    public function income_matching()
    {
        return view('income_matching');
    }

    public function income_tax_declaration_entry_upload()
    {
        return view('income_tax_declaration_entry_upload');
    }

    public function income_tax_process()
    {
        return view('income_tax_process');
    }

    public function loan_deviation()
    {
        return view('loan_deviation');
    }

    public function payroll_process()
    {
        return view('payroll_process');
    }

    public function revision_entry()
    {
        return view('revision_entry');
    }

    public function section_matching()
    {
        return view('section_matching');
    }

    public function full_final_settlement()
    {
        return view('full_final_settlement');
    }

    public function addition_of_separation_report()
    {
        return view('addition_of_separation_report');
    }

    public function arrear_statement()
    {
        return view('arrear_statement');
    }

    public function attendance_report()
    {
        return view('attendance_report');
    }

    public function deduction_summary()
    {
        return view('deduction_summary');
    }

    public function earnings_summary()
    {
        return view('earnings_summary');
    }

    public function loan_statement()
    {
        return view('loan_statement');
    }

    public function wagesummary()
    {
        return view('wagesummary');
    }

    public function return()
    {
        return view('return');
    }

    public function usercreation()
    {
        return view('usercreation');
    }

    public function form24Q_income_tax()
    {
        return view('form24Q_income_tax');
    }

    public function income_tax_statement()
    {
        return view('income_tax_statement');
    }

    public function form24QA_income_tax()
    {
        return view('form24QA_income_tax');
    }

    public function income_tax_worksheet()
    {
        return view('income_tax_worksheet');
    }

    public function worksheet_mail()
    {
        return view('worksheet_mail');
    }

    public function roles_creation()
    {
        return view('roles_creation');
    }

    public function offline_payment_entry()
    {
        return view('offline_payment_entry');
    }

    public function excel_wizard()
    {
        return view('excel_wizard');
    }

    public function over_time()
    {
        return view('overtime_entry');
    }

    public function work_order_report()
    {
        return view('work_order_report');
    }

    // company
    public function createcompany(Request $request)
    {
        $perPage = $request->get('per_page', 10);

        $query = DB::table('companies');

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('company_name', 'like', "%{$search}%")
                    ->orWhere('reference_no', 'like', "%{$search}%")
                    ->orWhere('agreement_name', 'like', "%{$search}%")
                    ->orWhere('domain_name', 'like', "%{$search}%");
            });
        }

        // Order by latest first
        $companies = $query->orderBy('id', 'desc')->paginate($perPage);

        // Keep search and per_page in pagination links
        $companies->appends($request->query());

        return view('dashboard', compact('companies'));
    }

    public function companyStore(Request $request)
    {
        // Validation rules
        $request->validate([
            // Required basic fields
            'company_name' => 'required|string|max:255',
            'company_short_name' => 'required|string|max:100',
            'reference_no' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'pincode' => 'required|string|max:20',
            'contact_person' => 'required|string|max:150',
            'mobile_number' => 'required|string|max:20',
            'email' => 'required|email|max:150|unique:companies,email',
            'agreement_type' => 'required|in:company,legal',

            // Optional fields
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'telephone_number' => 'nullable|string|max:20',
            'companyurl' => 'nullable|url|max:255',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            // Registration arrays
            'registration_type.*' => 'nullable|string|max:100',
            'registration_no.*' => 'nullable|string|max:150',
            'registration_attachment.*' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:5120',

            // Agreement fields (required only if type is 'company')
            'agreement_ref_no' => 'nullable|string|max:150',
            'agreement_name' => 'nullable|string|max:255',
            'nature_of_agreement' => 'nullable|string|max:150',
            'mode_of_document' => 'nullable|string|max:150',
            'no_of_legalentity' => 'nullable|integer',
            'agreement_date' => 'nullable|date',
            'agreement_type_dropdown' => 'nullable|string|max:150',
            'vertical' => 'nullable|string|max:150',
            'effective_from' => 'nullable|date',
            'effective_to' => 'nullable|date|after_or_equal:effective_from',
            'renewal_due_on' => 'nullable|date',

            // Scope fields
            'domain_name' => 'nullable|string|max:150',
            'type_of_organization' => 'nullable|string|max:150',
            'scope_state' => 'nullable|string|max:100',
            'act' => 'nullable|string|max:150',

            // Status
            'status' => 'required|in:Draft,Saved',
        ]);

        $companyId = null;
        $tenantDbName = null;
        $companyFolder = null;

        try {
            // Generate company ID
            $lastCompany = DB::table('companies')->orderByDesc('id')->first();
            $nextNumber = $lastCompany && preg_match('/company_(\d+)/', $lastCompany->company_id ?? '', $matches)
                ? (int) $matches[1] + 1
                : 1;
            $companyId = 'company_'.str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            // Generate tenant database name
            $companyName = trim($request->company_name);
            $tenantDbName = 'tenant_'.strtolower(preg_replace('/[^a-zA-Z0-9]+/', '_', $companyName));
            $tenantDbName = trim($tenantDbName, '_');
            $tenantDbName = preg_replace('/_+/', '_', $tenantDbName);

            // Check if database already exists
            $dbExists = DB::select('SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?', [$tenantDbName]);
            if (! empty($dbExists)) {
                return back()->with('error', 'A company with similar name already exists!')->withInput();
            }

            // Create company folder structure
            $companyFolder = public_path("assets/company/{$companyId}");
            if (! file_exists($companyFolder)) {
                mkdir($companyFolder, 0755, true);
                mkdir($companyFolder.'/registrations', 0755, true);
            }

            // Handle company logo upload
            $logoPath = null;
            if ($request->hasFile('company_logo')) {
                $logoFile = $request->file('company_logo');
                $logoName = time().'_'.preg_replace('/[^a-zA-Z0-9._-]/', '', $logoFile->getClientOriginalName());
                $logoFile->move($companyFolder, $logoName);
                $logoPath = "assets/company/{$companyId}/{$logoName}";
            }

            // Handle multiple registration attachments
            $registrationTypes = [];
            $registrationNumbers = [];
            $registrationAttachments = [];

            if ($request->has('registration_type')) {
                foreach ($request->registration_type as $index => $type) {
                    if (! empty($type)) {
                        $registrationTypes[] = $type;
                        $registrationNumbers[] = $request->registration_no[$index] ?? null;

                        // Handle attachment for this registration
                        $attachmentPath = null;
                        if ($request->hasFile("registration_attachment.{$index}")) {
                            $file = $request->file("registration_attachment.{$index}");
                            $fileName = time()."_{$index}_".preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                            $file->move($companyFolder.'/registrations', $fileName);
                            $attachmentPath = "assets/company/{$companyId}/registrations/{$fileName}";
                        }
                        $registrationAttachments[] = $attachmentPath;
                    }
                }
            }

            // Prepare data for main database (hr_payroll)
            $companyData = [
                'company_id' => $companyId,
                'type' => $request->agreement_type,
                'db_name' => $tenantDbName,
                'company_name' => $companyName,
                'company_short_name' => $request->company_short_name,
                'reference_no' => $request->reference_no,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'contact_person' => $request->contact_person,
                'mobile_number' => $request->mobile_number,
                'telephone_number' => $request->telephone_number,
                'email' => $request->email,
                'companyurl' => $request->companyurl,
                'company_logo' => $logoPath,
                'registration_type' => ! empty($registrationTypes) ? json_encode($registrationTypes) : null,
                'registration_no' => ! empty($registrationNumbers) ? json_encode($registrationNumbers) : null,
                'registration_attachment' => ! empty($registrationAttachments) ? json_encode($registrationAttachments) : null,
                'status' => $request->status,
                'added_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Add agreement and scope fields only if type is 'company'
            if ($request->agreement_type === 'company') {
                $companyData['agreement_ref_no'] = $request->agreement_ref_no;
                $companyData['agreement_name'] = $request->agreement_name;
                $companyData['nature_of_agreement'] = $request->nature_of_agreement;
                $companyData['mode_of_document'] = $request->mode_of_document;
                $companyData['no_of_legalentity'] = $request->no_of_legalentity;
                $companyData['agreement_date'] = $request->agreement_date;
                $companyData['agreement_type'] = $request->agreement_type_dropdown;
                $companyData['vertical'] = $request->vertical;
                $companyData['effective_from'] = $request->effective_from;
                $companyData['effective_to'] = $request->effective_to;
                $companyData['renewal_due_on'] = $request->renewal_due_on;
                $companyData['domain_name'] = $request->domain_name;
                $companyData['type_of_organization'] = $request->type_of_organization;
                $companyData['scope_state'] = $request->scope_state;
                $companyData['act'] = $request->act;
            }

            // Insert into main database companies table
            DB::table('companies')->insert($companyData);

            // Create tenant database
            DB::statement("CREATE DATABASE IF NOT EXISTS `{$tenantDbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

            // Verify database creation
            $dbCreated = DB::select('SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?', [$tenantDbName]);
            if (empty($dbCreated)) {
                throw new \Exception("Failed to create tenant database: {$tenantDbName}");
            }

            // Configure tenant database connection
            config(['database.connections.tenant.database' => $tenantDbName]);
            DB::purge('tenant');
            DB::connection('tenant')->reconnect();

            // Run migrations on tenant database
            Artisan::call('migrate', [
                '--database' => 'tenant',
                '--path' => 'database/migrations/tenant',
                '--force' => true,
            ]);

            // Prepare data for tenant database
            $tenantCompanyData = [
                'company_id' => $companyId,
                'type' => $request->agreement_type,
                'company_name' => $companyName,
                'company_short_name' => $request->company_short_name,
                'reference_no' => $request->reference_no,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'contact_person' => $request->contact_person,
                'mobile_number' => $request->mobile_number,
                'telephone_number' => $request->telephone_number,
                'email' => $request->email,
                'companyurl' => $request->companyurl,
                'company_logo' => $logoPath,
                'registration_type' => ! empty($registrationTypes) ? json_encode($registrationTypes) : null,
                'registration_no' => ! empty($registrationNumbers) ? json_encode($registrationNumbers) : null,
                'registration_attachment' => ! empty($registrationAttachments) ? json_encode($registrationAttachments) : null,
                'status' => $request->status,
                'added_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Add agreement and scope fields for tenant database if type is 'company'
            if ($request->agreement_type === 'company') {
                $tenantCompanyData['agreement_ref_no'] = $request->agreement_ref_no;
                $tenantCompanyData['agreement_name'] = $request->agreement_name;
                $tenantCompanyData['nature_of_agreement'] = $request->nature_of_agreement;
                $tenantCompanyData['mode_of_document'] = $request->mode_of_document;
                $tenantCompanyData['no_of_legalentity'] = $request->no_of_legalentity;
                $tenantCompanyData['agreement_date'] = $request->agreement_date;
                $tenantCompanyData['agreement_type'] = $request->agreement_type_dropdown;
                $tenantCompanyData['vertical'] = $request->vertical;
                $tenantCompanyData['effective_from'] = $request->effective_from;
                $tenantCompanyData['effective_to'] = $request->effective_to;
                $tenantCompanyData['renewal_due_on'] = $request->renewal_due_on;
                $tenantCompanyData['domain_name'] = $request->domain_name;
                $tenantCompanyData['type_of_organization'] = $request->type_of_organization;
                $tenantCompanyData['scope_state'] = $request->scope_state;
                $tenantCompanyData['act'] = $request->act;
            }

            // Insert into tenant database company table
            DB::connection('tenant')->table('company')->insert($tenantCompanyData);

            $statusMessage = $request->status === 'Draft' ? 'saved as draft' : 'created';

            return back()->with('success', "Company '{$companyName}' has been {$statusMessage} successfully!");
        } catch (\Throwable $e) {
            // Cleanup on error
            if (isset($companyId)) {
                try {
                    DB::table('companies')->where('company_id', $companyId)->delete();
                } catch (\Exception $ex) {
                    Log::error('Failed to delete company record: '.$ex->getMessage());
                }

                // Delete uploaded files
                if (isset($companyFolder) && file_exists($companyFolder)) {
                    $this->deleteDirectory($companyFolder);
                }
            }

            // Drop tenant database if created
            if (isset($tenantDbName)) {
                try {
                    $dbExists = DB::select('SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?', [$tenantDbName]);
                    if (! empty($dbExists)) {
                        DB::statement("DROP DATABASE IF EXISTS `{$tenantDbName}`");
                    }
                } catch (\Exception $ex) {
                    Log::error("Failed to drop database {$tenantDbName}: ".$ex->getMessage());
                }
            }

            Log::error('Company creation failed: '.$e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);

            return back()->with('error', 'Failed to create company: '.$e->getMessage())->withInput();
        }
    }

    public function companyEdit($companyId)
    {
        $company = DB::table('companies')
            ->where('company_id', $companyId)
            ->first();

        if (! $company) {
            return back()->with('error', 'Company not found');
        }

        // Decode registrations
        $company->registration_type = json_decode($company->registration_type ?? '[]', true);
        $company->registration_no = json_decode($company->registration_no ?? '[]', true);
        $company->registration_attachment = json_decode($company->registration_attachment ?? '[]', true);

        return view('editdashboard', compact('company'));
    }

    public function companyUpdate(Request $request, $companyId)
    {
        /* ================= VALIDATION ================= */
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_short_name' => 'required|string|max:100',
            'reference_no' => 'required|string|max:100',
            'state' => 'required|string',
            'city' => 'required|string',
            'pincode' => 'required|string|max:20',
            'contact_person' => 'required|string|max:150',
            'mobile_number' => 'required|string|max:20',
            'email' => 'required|email|max:150|unique:companies,email,'.$companyId.',company_id',
            'agreement_type' => 'required|in:company,legal',

            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            'registration_type.*' => 'nullable|string',
            'registration_no.*' => 'nullable|string',
            'registration_attachment.*' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:5120',

            'status' => 'required|in:Draft,Saved',
        ]);

        /* ================= FETCH COMPANY ================= */
        $company = DB::table('companies')->where('company_id', $companyId)->first();
        if (! $company) {
            return back()->with('error', 'Company not found');
        }

        $companyFolder = public_path("assets/company/{$companyId}");
        if (! file_exists($companyFolder)) {
            mkdir($companyFolder, 0755, true);
            mkdir($companyFolder.'/registrations', 0755, true);
        }

        /* ================= LOGO ================= */
        $logoPath = $company->company_logo;
        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move($companyFolder, $name);
            $logoPath = "assets/company/{$companyId}/{$name}";
        }

        /* ================= REGISTRATIONS ================= */
        $types = [];
        $nos = [];
        $attachments = [];

        $oldAttachments = json_decode($company->registration_attachment ?? '[]', true);

        foreach ($request->registration_type ?? [] as $i => $type) {
            if (! $type) {
                continue;
            }

            $types[] = $type;
            $nos[] = $request->registration_no[$i] ?? null;

            if ($request->hasFile("registration_attachment.$i")) {
                $file = $request->file("registration_attachment.$i");
                $name = time()."_{$i}_".$file->getClientOriginalName();
                $file->move($companyFolder.'/registrations', $name);
                $attachments[] = "assets/company/{$companyId}/registrations/{$name}";
            } else {
                $attachments[] = $oldAttachments[$i] ?? null;
            }
        }

        /* ================= MAIN DATA ARRAY (SAME AS STORE) ================= */
        $companyData = [
            'type' => $request->agreement_type,
            'company_name' => $request->company_name,
            'company_short_name' => $request->company_short_name,
            'reference_no' => $request->reference_no,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'state' => $request->state,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'contact_person' => $request->contact_person,
            'mobile_number' => $request->mobile_number,
            'telephone_number' => $request->telephone_number,
            'email' => $request->email,
            'companyurl' => $request->companyurl,
            'company_logo' => $logoPath,
            'registration_type' => json_encode($types),
            'registration_no' => json_encode($nos),
            'registration_attachment' => json_encode($attachments),
            'status' => $request->status,
            'updated_at' => now(),
        ];

        /* ================= AGREEMENT + SCOPE ================= */
        if ($request->agreement_type === 'company') {
            $companyData += [
                'agreement_ref_no' => $request->agreement_ref_no,
                'agreement_name' => $request->agreement_name,
                'nature_of_agreement' => $request->nature_of_agreement,
                'mode_of_document' => $request->mode_of_document,
                'no_of_legalentity' => $request->no_of_legalentity,
                'agreement_date' => $request->agreement_date,
                'agreement_type' => $request->agreement_type_dropdown,
                'vertical' => $request->vertical,
                'effective_from' => $request->effective_from,
                'effective_to' => $request->effective_to,
                'renewal_due_on' => $request->renewal_due_on,
                'domain_name' => $request->domain_name,
                'type_of_organization' => $request->type_of_organization,
                'scope_state' => $request->scope_state,
                'act' => $request->act,
            ];
        }

        /* ================= UPDATE MAIN DB ================= */
        DB::table('companies')
            ->where('company_id', $companyId)
            ->update($companyData);

        /* ================= ENSURE TENANT DB ================= */
        $dbExists = DB::select(
            'SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?',
            [$company->db_name]
        );

        if (empty($dbExists)) {
            DB::statement(
                "CREATE DATABASE IF NOT EXISTS `{$company->db_name}`
             CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"
            );

            config(['database.connections.tenant.database' => $company->db_name]);
            DB::purge('tenant');
            DB::connection('tenant')->reconnect();

            Artisan::call('migrate', [
                '--database' => 'tenant',
                '--path' => 'database/migrations/tenant',
                '--force' => true,
            ]);
        }

        /* ================= UPDATE TENANT DB (FULL SYNC) ================= */
        config(['database.connections.tenant.database' => $company->db_name]);
        DB::purge('tenant');
        DB::connection('tenant')->reconnect();

        DB::connection('tenant')->table('company')
            ->where('company_id', $companyId)
            ->update($companyData);

        return redirect()
            ->route('createcompany')
            ->with('success', 'Company updated successfully');
    }

    /**
     * Recursively delete directory
     */
    private function deleteDirectory($dir)
    {
        if (! file_exists($dir)) {
            return true;
        }

        if (! is_dir($dir)) {
            return unlink($dir);
        }

        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            if (! $this->deleteDirectory($dir.DIRECTORY_SEPARATOR.$item)) {
                return false;
            }
        }

        return rmdir($dir);
    }

    // legalentity
    public function createLegalEntity()
    {
        $companies = DB::table('companies')->get();

        return view('createlegalentity', compact('companies'));
    }

    public function getCompany($company_id)
    {
        $company = DB::table('companies')->where('company_id', $company_id)->first();

        return response()->json($company);
    }

    public function legalEntityStore(Request $request)
    {
        $request->validate([
            'company_id' => 'required|string|exists:companies,company_id',
            'type' => 'required|in:company,legal',
            'legalentity_name' => 'required|string|max:255',
            'legalentity_short_name' => 'required|string|max:100',
            'reference_no' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'pincode' => 'required|string|max:20',
            'contact_person' => 'required|string|max:150',
            'mobile_number' => 'required|string|max:20',
            'email' => 'required|email|max:150',
            'legalentity_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'registration_type.*' => 'nullable|string|max:100',
            'registration_no.*' => 'nullable|string|max:150',
            'registration_attachment.*' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:5120',
            'status' => 'required|in:Draft,Saved',
        ]);

        $legalEntityId = null;
        $companyFolder = null;
        $legalFolder = null;

        try {
            // Fetch company from central database
            $company = DB::table('companies')->where('company_id', $request->company_id)->first();
            if (! $company) {
                throw new \Exception('Company not found');
            }

            $tenantDbName = $company->db_name;

            // Switch to tenant database
            config(['database.connections.tenant.database' => $tenantDbName]);
            DB::purge('tenant');
            DB::connection('tenant')->reconnect();

            // Generate legalentity_id
            $lastLegal = DB::connection('tenant')->table('legal_entity')
                ->where('company_id', $request->company_id)
                ->orderByDesc('id')
                ->first();

            $nextNumber = $lastLegal && preg_match('/LEGAL_(\d+)/', $lastLegal->legalentity_id ?? '', $matches)
                ? (int) $matches[1] + 1
                : 1;
            $legalEntityId = 'LEGAL_'.str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

            // Create folders
            $companyFolder = public_path("assets/company/{$request->company_id}");
            $legalFolder = $companyFolder."/legal_entities/{$legalEntityId}";
            if (! file_exists($legalFolder)) {
                mkdir($legalFolder, 0755, true);
                mkdir($legalFolder.'/registrations', 0755, true);
            }

            // Handle logo upload
            $logoPath = null;
            if ($request->hasFile('legalentity_logo')) {
                $logoFile = $request->file('legalentity_logo');
                $logoName = time().'_'.preg_replace('/[^a-zA-Z0-9._-]/', '', $logoFile->getClientOriginalName());
                $logoFile->move($legalFolder, $logoName);
                $logoPath = "assets/company/{$request->company_id}/legal_entities/{$legalEntityId}/{$logoName}";
            }

            // Handle registration attachments
            $registrationTypes = [];
            $registrationNumbers = [];
            $registrationAttachments = [];

            if ($request->has('registration_type')) {
                foreach ($request->registration_type as $index => $type) {
                    if (! empty($type)) {
                        $registrationTypes[] = $type;
                        $registrationNumbers[] = $request->registration_no[$index] ?? null;

                        $attachmentPath = null;
                        if ($request->hasFile("registration_attachment.{$index}")) {
                            $file = $request->file("registration_attachment.{$index}");
                            $fileName = time()."_{$index}_".preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                            $file->move($legalFolder.'/registrations', $fileName);
                            $attachmentPath = "assets/company/{$request->company_id}/legal_entities/{$legalEntityId}/registrations/{$fileName}";
                        }
                        $registrationAttachments[] = $attachmentPath;
                    }
                }
            }

            // Base data from request
            $legalData = [
                'company_id' => $request->company_id,
                'type' => $request->type,
                'legalentity_id' => $legalEntityId,
                'legalentity_name' => $request->legalentity_name,
                'legalentity_short_name' => $request->legalentity_short_name,
                'reference_no' => $request->reference_no,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'contact_person' => $request->contact_person,
                'mobile_number' => $request->mobile_number,
                'telephone_number' => $request->telephone_number,
                'email' => $request->email,
                'legalentity_url' => $request->legalentity_url,
                'legalentity_logo' => $logoPath,
                'registration_type' => ! empty($registrationTypes) ? json_encode($registrationTypes) : null,
                'registration_no' => ! empty($registrationNumbers) ? json_encode($registrationNumbers) : null,
                'registration_attachment' => ! empty($registrationAttachments) ? json_encode($registrationAttachments) : null,
                'status' => $request->status,
                'added_by' => auth()->id() ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // === CRITICAL FIX: If type is 'company', copy agreement & scope from parent company ===
            if ($request->type === 'company') {
                $legalData = array_merge($legalData, [
                    'agreement_ref_no' => $company->agreement_ref_no,
                    'agreement_name' => $company->agreement_name,
                    'nature_of_agreement' => $company->nature_of_agreement,
                    'mode_of_document' => $company->mode_of_document,
                    'no_of_legalentity' => $company->no_of_legalentity,
                    'agreement_date' => $company->agreement_date,
                    'agreement_type' => $company->agreement_type,
                    'vertical' => $company->vertical,
                    'effective_from' => $company->effective_from,
                    'effective_to' => $company->effective_to,
                    'renewal_due_on' => $company->renewal_due_on,
                    'domain_name' => $company->domain_name,
                    'type_of_organization' => $company->type_of_organization,
                    'scope_state' => $company->scope_state,
                    'act' => $company->act,
                ]);
            } else {
                // For 'legal' type → use submitted values (fields are enabled)
                $legalData = array_merge($legalData, [
                    'agreement_ref_no' => $request->agreement_ref_no,
                    'agreement_name' => $request->agreement_name,
                    'nature_of_agreement' => $request->nature_of_agreement,
                    'mode_of_document' => $request->mode_of_document,
                    'no_of_legalentity' => $request->no_of_legalentity,
                    'agreement_date' => $request->agreement_date,
                    'agreement_type' => $request->agreement_type,
                    'vertical' => $request->vertical,
                    'effective_from' => $request->effective_from,
                    'effective_to' => $request->effective_to,
                    'renewal_due_on' => $request->renewal_due_on,
                    'domain_name' => $request->domain_name,
                    'type_of_organization' => $request->type_of_organization,
                    'scope_state' => $request->scope_state,
                    'act' => $request->act,
                ]);
            }

            // Insert into tenant's legal_entity table
            DB::connection('tenant')->table('legal_entity')->insert($legalData);

            $statusMessage = $request->status === 'Draft' ? 'saved as draft' : 'created';

            return back()->with('success', "Legal Entity '{$request->legalentity_name}' has been {$statusMessage} successfully!");

        } catch (\Throwable $e) {
            // Cleanup uploaded files on failure
            if (isset($legalFolder) && file_exists($legalFolder)) {
                $this->deleteDirectory($legalFolder);
            }

            Log::error('Legal entity creation failed: '.$e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'request' => $request->all(),
            ]);

            return back()->with('error', 'Failed to create legal entity: '.$e->getMessage())->withInput();
        }
    }

    public function getCompanyLegalEntities($company_id)
    {
        // Get company from central DB
        $company = DB::table('companies')->where('company_id', $company_id)->first();

        if (! $company) {
            return response()->json(['data' => []]);
        }

        // Switch tenant DB
        config(['database.connections.tenant.database' => $company->db_name]);
        DB::purge('tenant');
        DB::connection('tenant')->reconnect();

        // Fetch legal entities
        $legalEntities = DB::connection('tenant')
            ->table('legal_entity')
            ->select(
                'legalentity_id',
                'legalentity_name',
                'legalentity_short_name',
                'state',
                'city',
                'status',
                'created_at'
            )
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json(['data' => $legalEntities]);
    }

    public function editLegalEntity($company_id, $legalentity_id)
    {
        // Central DB
        $company = DB::table('companies')
            ->where('company_id', $company_id)
            ->first();
        if (! $company) {
            abort(404);
        }

        // Switch tenant DB
        config(['database.connections.tenant.database' => $company->db_name]);
        DB::purge('tenant');
        DB::connection('tenant')->reconnect();

        // Fetch legal entity
        $legalEntity = DB::connection('tenant')
            ->table('legal_entity')
            ->where('legalentity_id', $legalentity_id)
            ->first();
        if (! $legalEntity) {
            abort(404);
        }

        // Decode registrations (for display)
        $registrations = [];

        if ($legalEntity->registration_type) {
            $types = json_decode($legalEntity->registration_type, true) ?? [];
            $nos = json_decode($legalEntity->registration_no, true) ?? [];
            $files = json_decode($legalEntity->registration_attachment, true) ?? [];

            foreach ($types as $i => $type) {
                $registrations[] = [
                    'type' => $type,
                    'no' => $nos[$i] ?? '',
                    'file' => $files[$i] ?? null,
                ];
            }
        }

        $companies = DB::table('companies')->get();

        return view(
            'editlegalentity',
            compact('company', 'legalEntity', 'registrations', 'companies')
        );
    }

    public function updateLegalEntity(Request $request, $company_id, $legalentity_id)
    {
        $request->validate([
            'type' => 'required|in:company,legal',
            'legalentity_name' => 'required|string|max:255',
            'legalentity_short_name' => 'required|string|max:100',
            'reference_no' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'pincode' => 'required|string|max:20',
            'contact_person' => 'required|string|max:150',
            'mobile_number' => 'required|string|max:20',
            'email' => 'required|email|max:150',
            'legalentity_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required|in:Draft,Saved',
            'registration_type.*' => 'nullable|string|max:100',
            'registration_no.*' => 'nullable|string|max:150',
            'registration_attachment.*' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:5120',
        ]);

        try {
            // Central DB
            $company = DB::table('companies')
                ->where('company_id', $company_id)
                ->first();
            if (! $company) {
                throw new \Exception('Company not found');
            }

            // Switch tenant DB
            config(['database.connections.tenant.database' => $company->db_name]);
            DB::purge('tenant');
            DB::connection('tenant')->reconnect();

            $legalFolder = public_path(
                "assets/company/{$company_id}/legal_entities/{$legalentity_id}"
            );

            // 🔹 Existing registration files
            $existingFiles = json_decode(
                DB::connection('tenant')
                    ->table('legal_entity')
                    ->where('legalentity_id', $legalentity_id)
                    ->value('registration_attachment'),
                true
            ) ?? [];

            /* ================= LOGO ================= */
            $logoPath = $request->old_logo;
            if ($request->hasFile('legalentity_logo')) {
                $file = $request->file('legalentity_logo');
                $name = time().'_'.preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move($legalFolder, $name);

                $logoPath = "assets/company/{$company_id}/legal_entities/{$legalentity_id}/{$name}";
            }

            /* ================= REGISTRATIONS (ADD + REMOVE + EDIT) ================= */
            $regTypes = [];
            $regNos = [];
            $regFiles = [];

            if ($request->registration_type) {
                foreach ($request->registration_type as $i => $type) {

                    if (empty($type)) {
                        continue;
                    }

                    $regTypes[] = $type;
                    $regNos[] = $request->registration_no[$i] ?? '';

                    // Keep old file by default
                    $filePath = $existingFiles[$i] ?? null;

                    // Replace if new uploaded
                    if ($request->hasFile("registration_attachment.$i")) {
                        $file = $request->file("registration_attachment.$i");
                        $name = time()."_{$i}_".preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                        $file->move($legalFolder.'/registrations', $name);

                        $filePath = "assets/company/{$company_id}/legal_entities/{$legalentity_id}/registrations/{$name}";
                    }

                    $regFiles[] = $filePath;
                }
            }

            /* ================= BASE UPDATE ================= */
            $updateData = [
                'type' => $request->type,
                'legalentity_name' => $request->legalentity_name,
                'legalentity_short_name' => $request->legalentity_short_name,
                'reference_no' => $request->reference_no,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'contact_person' => $request->contact_person,
                'mobile_number' => $request->mobile_number,
                'telephone_number' => $request->telephone_number,
                'email' => $request->email,
                'legalentity_url' => $request->legalentity_url,
                'legalentity_logo' => $logoPath,
                'registration_type' => json_encode($regTypes),
                'registration_no' => json_encode($regNos),
                'registration_attachment' => json_encode($regFiles),
                'status' => $request->status,
                'updated_at' => now(),
            ];

            /* ================= AGREEMENT (SAME AS ADD) ================= */
            if ($request->type === 'company') {
                $updateData = array_merge($updateData, [
                    'agreement_ref_no' => $company->agreement_ref_no,
                    'agreement_name' => $company->agreement_name,
                    'nature_of_agreement' => $company->nature_of_agreement,
                    'mode_of_document' => $company->mode_of_document,
                    'agreement_date' => $company->agreement_date,
                ]);
            } else {
                $updateData = array_merge($updateData, [
                    'agreement_ref_no' => $request->agreement_ref_no,
                    'agreement_name' => $request->agreement_name,
                    'nature_of_agreement' => $request->nature_of_agreement,
                    'mode_of_document' => $request->mode_of_document,
                    'agreement_date' => $request->agreement_date,
                ]);
            }

            DB::connection('tenant')
                ->table('legal_entity')
                ->where('legalentity_id', $legalentity_id)
                ->update($updateData);

            return back()->with('success', 'Legal Entity updated successfully');

        } catch (\Throwable $e) {
            return back()
                ->with('error', $e->getMessage())
                ->withInput();
        }
    }

    public function checkLimit($companyId)
    {
        try {
            $central = DB::table('companies')
                ->where('company_id', $companyId)
                ->first();

            if (! $central) {
                return response()->json([
                    'allowed' => false,
                    'message' => 'Company not found.',
                ]);
            }

            $tenantDb = $central->db_name;

            // Switch to tenant
            config(['database.connections.tenant.database' => $tenantDb]);
            DB::purge('tenant');
            DB::connection('tenant')->reconnect();

            $max = (int) DB::connection('tenant')
                ->table('company')
                ->where('company_id', $companyId)
                ->value('no_of_legalentity');

            $current = DB::connection('tenant')
                ->table('legal_entity')
                ->where('company_id', $companyId)
                ->count();

            if ($current >= $max) {
                return response()->json([
                    'allowed' => false,
                    'message' => "Legal entity limit reached ({$current}/{$max}). Cannot create more.",
                ]);
            }

            $remaining = $max - $current;
            $word = $remaining == 1 ? 'entity' : 'entities';

            return response()->json([
                'allowed' => true,
                'message' => "You can create {$remaining} more legal {$word}.",
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'allowed' => false,
                'message' => 'Cannot check limit right now. Please try again.',
            ]);
        }
    }

    // branch
    //  public function createBranch()
    // {
    //     return view('createBranch');
    // }
    public function branchCompany(Request $request)
    {
        $companies = DB::table('companies')
            ->select('company_id', 'company_name')
            ->orderBy('company_name')
            ->get();

        $legalEntities = collect();

        if ($request->filled('company_id')) {
            $company = DB::table('companies')
                ->where('company_id', $request->company_id)
                ->first();

            if ($company) {
                config(['database.connections.tenant.database' => $company->db_name]);
                DB::purge('tenant');
                DB::connection('tenant')->reconnect();

                $legalEntities = DB::connection('tenant')
                    ->table('legal_entity')
                    ->where('company_id', $request->company_id)
                    ->select('legalentity_id', 'legalentity_name')
                    ->orderBy('legalentity_name')
                    ->get();
            }
        }

        return view('createBranch', compact('companies', 'legalEntities', 'request'));
    }

    // COMPANY SELECT ID BASED LEGAL ENTITY SHOW SCRIPT
    public function getLegalEntities($company_id)
    {
        $company = DB::table('companies')->where('company_id', $company_id)->first();
        if (! $company) {
            return response()->json([]);
        }

        config(['database.connections.tenant.database' => $company->db_name]);
        DB::purge('tenant');
        DB::connection('tenant')->reconnect();

        $entities = DB::connection('tenant')
            ->table('legal_entity')
            ->where('company_id', $company_id)
            ->select('legalentity_id', 'legalentity_name')
            ->get();

        return response()->json($entities);
    }

    public function storeBranchCompany(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,company_id',
            'legal_entity_id' => 'required|string',
            'branch_code' => 'required|string|max:100',
            'branch_name' => 'required|string|max:150',
            'state' => 'required|string',
            'city' => 'required|string',
            'pincode' => 'required|string|max:10',
            'mobile_number' => 'required|string|max:15|regex:/^\d{10}$/',
            'email_id' => 'nullable|email|max:150',
            'specimen_signature' => 'nullable|file|mimes:jpeg,jpg,png,webp,pdf|max:2048',

            // Arrays
            'reg_type.*' => 'nullable|string|max:50',
            'reg_no.*' => 'nullable|string|max:100',
            'attachment.*' => 'nullable|file|mimes:jpeg,jpg,png,webp,pdf|max:5120',
            'code.*' => 'nullable|string|max:50',
            'code_description.*' => 'nullable|string|max:255',
            'act_name.*' => 'nullable|string|max:100',
            'emp_name.*' => 'nullable|string|max:150',
            'emp_type.*' => 'nullable|string|max:50',
            'emp_designation.*' => 'nullable|string|max:100',
            'emp_residential_address.*' => 'nullable|string|max:500',
            'emp_contact.*' => 'nullable|string|max:15',
            'emp_email.*' => 'nullable|email|max:150',
            'emp_specimen_signature.*' => 'nullable|file|mimes:jpeg,jpg,png,webp,pdf|max:2048',
            'emp_remarks.*' => 'nullable|string|max:500',
            'status' => 'sometimes|in:Draft,Submit',
        ]);

        $branchId = null;
        $branchBaseFolder = null;

        try {
            // 1. Get Company
            $company = DB::table('companies')
                ->where('company_id', $request->company_id)
                ->first();
            if (! $company) {
                return back()->with('error', 'Company not found!');
            }

            // 2. Switch to tenant DB
            config(['database.connections.tenant.database' => $company->db_name]);
            DB::purge('tenant');
            DB::connection('tenant')->reconnect();

            // 3. Verify Legal Entity
            $legalEntity = DB::connection('tenant')->table('legal_entity')
                ->where('legalentity_id', $request->legal_entity_id)
                ->where('company_id', $request->company_id)
                ->first();
            if (! $legalEntity) {
                return back()->with('error', 'Legal Entity not found!');
            }

            // 4. Generate Branch ID
            $lastBranch = DB::connection('tenant')->table('branch')
                ->where('legal_entity_id', $request->legal_entity_id)
                ->orderByDesc('id')
                ->first();

            $nextNum = $lastBranch && preg_match('/branch_(\d+)/', $lastBranch->branch_id ?? '', $matches)
                ? (int) $matches[1] + 1
                : 1;
            $branchId = 'branch_'.str_pad($nextNum, 3, '0', STR_PAD_LEFT);

            // 5. Check Duplicate
            $duplicate = DB::connection('tenant')->table('branch')
                ->where('legal_entity_id', $request->legal_entity_id)
                ->where(function ($q) use ($request) {
                    $q->where('branch_code', $request->branch_code)
                        ->orWhere('branch_name', $request->branch_name);
                })
                ->exists();

            if ($duplicate) {
                return back()->with('error', 'Branch Code or Name already exists under this Legal Entity!')->withInput();
            }

            // 6. Create Folder Structure
            $legalEntityFolder = public_path("assets/company/{$request->company_id}/legal_entities/{$request->legal_entity_id}");
            $branchBaseFolder = "{$legalEntityFolder}/branch/{$branchId}";

            $folders = [
                'signature' => "{$branchBaseFolder}/signature",
                'registration' => "{$branchBaseFolder}/registration",
                'empowerment' => "{$branchBaseFolder}/empowerment",
            ];

            foreach ($folders as $folder) {
                if (! is_dir($folder)) {
                    mkdir($folder, 0755, true);
                }
            }

            // 7. Handle Specimen Signature
            $specimenPath = null;
            if ($request->hasFile('specimen_signature')) {
                $file = $request->file('specimen_signature');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'_branch_specimen.'.$extension;
                $file->move($folders['signature'], $filename);
                $specimenPath = "assets/company/{$request->company_id}/legal_entities/{$request->legal_entity_id}/branch/{$branchId}/signature/{$filename}";
            }

            // 8. Handle Registration Attachments
            $regAttachments = [];
            if ($request->has('reg_type')) {
                foreach ($request->reg_type as $index => $type) {
                    if (! empty($type) && $request->hasFile("attachment.{$index}")) {
                        $file = $request->file("attachment.{$index}");
                        if ($file->isValid()) {
                            $extension = $file->getClientOriginalExtension();
                            $filename = time()."_{$index}_reg.".$extension;
                            $file->move($folders['registration'], $filename);
                            $regAttachments[] = "assets/company/{$request->company_id}/legal_entities/{$request->legal_entity_id}/branch/{$branchId}/registration/{$filename}";
                        } else {
                            $regAttachments[] = null;
                        }
                    } else {
                        $regAttachments[] = null;
                    }
                }
            }

            // 9. Handle Empowerment Signatures
            $empSignatures = [];
            if ($request->hasFile('emp_specimen_signature')) {
                foreach ($request->file('emp_specimen_signature') as $index => $file) {
                    if ($file && $file->isValid()) {
                        $extension = $file->getClientOriginalExtension();
                        $filename = time()."_emp_{$index}.".$extension;
                        $file->move($folders['empowerment'], $filename);
                        $empSignatures[] = "assets/company/{$request->company_id}/legal_entities/{$request->legal_entity_id}/branch/{$branchId}/empowerment/{$filename}";
                    } else {
                        $empSignatures[] = null;
                    }
                }
            }

            // 10. Prepare Data
            $branchData = [
                'branch_id' => $branchId,
                'company_id' => $request->company_id,
                'company_name' => $company->company_name,
                'legal_entity_id' => $request->legal_entity_id,
                'legal_entity_name' => $legalEntity->legalentity_name,

                'branch_code' => $request->branch_code,
                'branch_name' => $request->branch_name,
                'branch_address_1' => $request->branch_address_1,
                'branch_address_2' => $request->branch_address_2,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'mobile_number' => $request->mobile_number,
                'telephone_number' => $request->telephone_number,
                'email_id' => $request->email_id,
                'nature_of_work' => $request->nature_of_work,
                'industry_type' => $request->industry_type,
                'date_of_creation' => $request->date_of_creation,
                'date_of_commencement' => $request->date_of_commencement,
                'esi_location' => $request->esi_location,
                'ptox_location' => $request->ptox_location,
                'ot_availability' => $request->ot_availability,
                'ot_type' => $request->ot_type,
                'ot_value' => $request->ot_value,
                'unit_closure' => $request->unit_closure,
                'unit_closure_remarks' => $request->unit_closure_remarks,
                'type' => $request->type,
                'category' => $request->category,

                // Single file
                'specimen_signature' => $specimenPath,

                // 🔥 FIXED: Store as JSON with proper null handling
                'name' => ! empty(array_filter($request->name ?? [])) ? json_encode(array_values(array_filter($request->name))) : null,
                'father_name' => ! empty(array_filter($request->father_name ?? [])) ? json_encode(array_values(array_filter($request->father_name))) : null,
                'designation' => ! empty(array_filter($request->designation ?? [])) ? json_encode(array_values(array_filter($request->designation))) : null,
                'department' => ! empty(array_filter($request->department ?? [])) ? json_encode(array_values(array_filter($request->department))) : null,
                'branch_mobile_number' => ! empty(array_filter($request->branch_mobile_number ?? [])) ? json_encode(array_values(array_filter($request->branch_mobile_number))) : null,
                'branch_email_id' => ! empty(array_filter($request->branch_email_id ?? [])) ? json_encode(array_values(array_filter($request->branch_email_id))) : null,
                'remarks' => ! empty(array_filter($request->remarks ?? [])) ? json_encode(array_values(array_filter($request->remarks))) : null,

                'reg_type' => ! empty(array_filter($request->reg_type ?? [])) ? json_encode(array_values(array_filter($request->reg_type))) : null,
                'reg_no' => ! empty(array_filter($request->reg_no ?? [])) ? json_encode(array_values(array_filter($request->reg_no))) : null,
                'attachment' => ! empty(array_filter($regAttachments)) ? json_encode(array_values(array_filter($regAttachments))) : null,

                'code' => ! empty(array_filter($request->code ?? [])) ? json_encode(array_values(array_filter($request->code))) : null,
                'code_description' => ! empty(array_filter($request->code_description ?? [])) ? json_encode(array_values(array_filter($request->code_description))) : null,

                'act_name' => ! empty(array_filter($request->act_name ?? [])) ? json_encode(array_values(array_filter($request->act_name))) : null,
                'emp_name' => ! empty(array_filter($request->emp_name ?? [])) ? json_encode(array_values(array_filter($request->emp_name))) : null,
                'emp_type' => ! empty(array_filter($request->emp_type ?? [])) ? json_encode(array_values(array_filter($request->emp_type))) : null,
                'emp_designation' => ! empty(array_filter($request->emp_designation ?? [])) ? json_encode(array_values(array_filter($request->emp_designation))) : null,
                'emp_residential_address' => ! empty(array_filter($request->emp_residential_address ?? [])) ? json_encode(array_values(array_filter($request->emp_residential_address))) : null,
                'emp_contact' => ! empty(array_filter($request->emp_contact ?? [])) ? json_encode(array_values(array_filter($request->emp_contact))) : null,
                'emp_email' => ! empty(array_filter($request->emp_email ?? [])) ? json_encode(array_values(array_filter($request->emp_email))) : null,
                'emp_specimen_signature' => ! empty(array_filter($empSignatures)) ? json_encode(array_values(array_filter($empSignatures))) : null,
                'emp_remarks' => ! empty(array_filter($request->emp_remarks ?? [])) ? json_encode(array_values(array_filter($request->emp_remarks))) : null,

                'domain_name' => ! empty(array_filter($request->domain_name ?? [])) ? json_encode(array_values(array_filter($request->domain_name))) : null,
                'sc_organization' => ! empty(array_filter($request->sc_organization ?? [])) ? json_encode(array_values(array_filter($request->sc_organization))) : null,
                'sc_state' => ! empty(array_filter($request->sc_state ?? [])) ? json_encode(array_values(array_filter($request->sc_state))) : null,
                'sc_act' => ! empty(array_filter($request->sc_act ?? [])) ? json_encode(array_values(array_filter($request->sc_act))) : null,
                'sc_division' => ! empty(array_filter($request->sc_division ?? [])) ? json_encode(array_values(array_filter($request->sc_division))) : null,

                'status' => $request->status ?? 'Draft',
                'added_by' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // 11. Insert into tenant branch table
            DB::connection('tenant')->table('branch')->insert($branchData);

            $statusMessage = $request->status === 'Draft' ? 'saved as draft' : 'created';

            return back()->with('success', "Branch '{$request->branch_name}' (ID: {$branchId}) has been {$statusMessage} successfully under Legal Entity '{$legalEntity->legalentity_name}'!");

        } catch (\Exception $e) {
            \Log::error('Branch creation failed: '.$e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'request' => $request->except(['attachment', 'emp_specimen_signature', 'specimen_signature']),
            ]);

            // Cleanup
            if (isset($branchBaseFolder) && is_dir($branchBaseFolder)) {
                $this->deleteDirectory($branchBaseFolder);
            }

            return back()->with('error', 'Failed to create branch: '.$e->getMessage())->withInput();
        }
    }
}
