<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Prevent duplicate creation
        if (Schema::connection('tenant')->hasTable('branch')) {
            return;
        }

        Schema::connection('tenant')->create('branch', function (Blueprint $table) {
            $table->id();
            
            // Status
            $table->enum('status', ['Draft', 'Submit'])->default('Draft');

            // Foreign Keys
            $table->string('company_id', 50);
            $table->string('company_name', 255)->nullable();
            $table->string('legal_entity_id', 50);
            $table->string('legal_entity_name', 255)->nullable();

            // Basic Details
            $table->string('branch_id', 50)->unique();
            $table->string('branch_code', 100);
            $table->string('branch_name', 150);
            $table->text('branch_address_1')->nullable();
            $table->text('branch_address_2')->nullable();
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('pincode', 10);
            $table->string('mobile_number', 15);
            $table->string('telephone_number', 20)->nullable();
            $table->string('email_id', 150)->nullable();
            $table->string('nature_of_work', 255)->nullable();
            $table->string('industry_type', 255)->nullable();

            // Date Related
            $table->date('date_of_creation')->nullable();
            $table->date('date_of_commencement')->nullable();

            // Location & Tax
            $table->string('esi_location', 100)->nullable();
            $table->string('ptox_location', 100)->nullable();

            // OT Details
            $table->string('ot_availability', 50)->nullable();
            $table->string('ot_type', 150)->nullable();
            $table->string('ot_value', 100)->nullable();

            // Unit Closure
            $table->date('unit_closure')->nullable();
            $table->text('unit_closure_remarks')->nullable();

            // Core / Contractor
            $table->string('type', 50)->nullable();
            $table->string('category', 100)->nullable();

            // 🔥 FIXED: Branch In Charge Details (JSON arrays)
            $table->json('name')->nullable()->comment('JSON array of names');
            $table->json('father_name')->nullable()->comment('JSON array');
            $table->json('designation')->nullable()->comment('JSON array');
            $table->json('department')->nullable()->comment('JSON array');
            $table->json('branch_mobile_number')->nullable()->comment('JSON array');
            $table->json('branch_email_id')->nullable()->comment('JSON array');
            $table->json('remarks')->nullable()->comment('JSON array');
            $table->string('specimen_signature', 255)->nullable();

            // 🔥 FIXED: Registration Section (JSON arrays)
            $table->json('reg_type')->nullable()->comment('JSON array');
            $table->json('reg_no')->nullable()->comment('JSON array');
            $table->json('attachment')->nullable()->comment('JSON array of file paths');

            // 🔥 FIXED: Core Details (JSON arrays)
            $table->json('code')->nullable()->comment('JSON array');
            $table->json('code_description')->nullable()->comment('JSON array');

            // 🔥 FIXED: Empowerment (JSON arrays)
            $table->json('act_name')->nullable()->comment('JSON array');
            $table->json('emp_name')->nullable()->comment('JSON array');
            $table->json('emp_type')->nullable()->comment('JSON array');
            $table->json('emp_designation')->nullable()->comment('JSON array');
            $table->json('emp_residential_address')->nullable()->comment('JSON array');
            $table->json('emp_contact')->nullable()->comment('JSON array');
            $table->json('emp_email')->nullable()->comment('JSON array');
            $table->json('emp_specimen_signature')->nullable()->comment('JSON array of file paths');
            $table->json('emp_remarks')->nullable()->comment('JSON array');

            // 🔥 FIXED: Scope (JSON arrays)
            $table->json('domain_name')->nullable()->comment('JSON array');
            $table->json('sc_organization')->nullable()->comment('JSON array');
            $table->json('sc_state')->nullable()->comment('JSON array');
            $table->json('sc_act')->nullable()->comment('JSON array');
            $table->json('sc_division')->nullable()->comment('JSON array');

            // Audit Fields
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            // Indexes
            $table->index(['company_id', 'legal_entity_id', 'branch_code']);
            $table->index('branch_id');
        });
    }

    public function down(): void
    {
        Schema::connection('tenant')->dropIfExists('branch');
    }
};