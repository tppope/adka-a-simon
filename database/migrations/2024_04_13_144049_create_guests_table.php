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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_lactose_free')->default(false);
            $table->boolean('is_gluten_free')->default(false);;
            $table->boolean('is_vegetarian')->default(false);;
            $table->boolean('is_vegan')->default(false);;
            $table->boolean('is_child')->default(false);;
            $table->tinyText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
