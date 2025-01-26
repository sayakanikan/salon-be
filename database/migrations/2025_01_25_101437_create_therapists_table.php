<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->foreignId("location_id")->constrained("locations");
            $table->foreignId("treatment_id")->constrained("treatments");
            $table->string("name");
            $table->bigInteger("fee");
            $table->string("image")->nullable();
            $table->float("rating");
            $table->integer("total_treatment")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapists');
    }
};
