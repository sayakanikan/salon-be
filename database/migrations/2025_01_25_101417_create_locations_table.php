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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone")->nullable();
            $table->string("address");
            $table->integer("salon_qty")->nullable();
            $table->string("link")->nullable();
            $table->boolean("wa_status")->default(0);
            $table->string("wa_token")->nullable();
            $table->string("image")->nullable();
            $table->time("start_hour");
            $table->time("end_hour");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
