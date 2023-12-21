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
        Schema::create('companysettings', function (Blueprint $table) {
            $table->id();

            $table->string('companyfullname');
            $table->string('companyshortname');
            $table->string('phone');
            $table->string('email');
            $table->string('alternate_phone')->nullable();
            $table->string('gstno')->nullable();
            $table->string('panno')->nullable();
            $table->string('websitename')->nullable();
            $table->integer('language')->nullable();
            $table->text('address');
            $table->string('logo');
            $table->string('favicon');

            $table->decimal('balance', 11, 2);

            $table->integer('pos_theme')->nullable(); // 4 grid, 5 grid, 6 grid

            $table->integer('pos_bill_position')->nullable(); //left, right

            $table->boolean('is_gst', array(0, 1))->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companysettings');
    }
};
