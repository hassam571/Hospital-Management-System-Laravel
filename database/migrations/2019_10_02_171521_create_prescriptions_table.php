<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            $table->unsignedBigInteger('doctor_id');
        
            // Use unsignedBigInteger() if patients.id is defined using bigIncrements()
            $table->unsignedBigInteger('patient_id');
        
            $table->unsignedBigInteger('appointment_id');
        
            $table->char('medicine_issued', 3)->default("NO");
            $table->json('bp')->nullable();
            $table->json('cholestrol')->nullable();
            $table->json('blood_sugar')->nullable();
            $table->longText('diagnosis')->nullable();
            $table->json('medicines')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
}
