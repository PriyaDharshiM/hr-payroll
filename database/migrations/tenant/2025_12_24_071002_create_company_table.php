<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for tenant database
     */
    public function up(): void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('company_id', 50)->unique();
            $table->enum('type', ['company', 'legal'])->default('company');
            $table->string('company_name', 255);
            $table->string('company_short_name', 100);
            $table->string('reference_no', 100);
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('pincode', 20);
            $table->string('contact_person', 150);
            $table->string('mobile_number', 20);
            $table->string('telephone_number', 20)->nullable();
            $table->string('email', 150)->unique();
            $table->string('companyurl', 255)->nullable();
            $table->string('company_logo', 255)->nullable();

            // Registration fields as JSON arrays
            $table->json('registration_type')->nullable();
            $table->json('registration_no')->nullable();
            $table->json('registration_attachment')->nullable();

            // Agreement fields (visible only for company type)
            $table->string('agreement_ref_no', 150)->nullable();
            $table->string('agreement_name', 255)->nullable();
            $table->string('nature_of_agreement', 150)->nullable();
            $table->string('mode_of_document', 150)->nullable();
            $table->integer('no_of_legalentity')->nullable();
            $table->date('agreement_date')->nullable();
            $table->string('agreement_type', 150)->nullable();
            $table->string('vertical', 150)->nullable();
            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();
            $table->date('renewal_due_on')->nullable();

            // Scope fields (visible only for company type)
            $table->string('domain_name', 150)->nullable();
            $table->string('type_of_organization', 150)->nullable();
            $table->string('scope_state', 100)->nullable();
            $table->string('act', 150)->nullable();

            // Status and audit fields
            $table->enum('status', ['Draft', 'Saved'])->default('Saved');
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            $table->index('company_id');
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
