<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middele_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_brith')->nullable();
            $table->string('date_of_joining')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('company_email')->nullable();
            $table->string('emergancy_phone')->nullable();
            $table->string('emergancy_contact_name')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('health_details')->nullable();
            $table->string('iqama_details')->nullable();
            $table->string('driver_license')->nullable();
            $table->string('personal_id')->nullable();
            $table->string('date_of_issue')->nullable();
            $table->string('valid_upto')->nullable();
            $table->string('place_issue')->nullable();
            $table->string('education')->nullable();
            $table->string('functional_specialization')->nullable();
            $table->string('previous_works_experience')->nullable();
            $table->string('history_in_company')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
