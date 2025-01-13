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
        Schema::create('alocatebudgets', function (Blueprint $table) {
            $table->id();
            $table->string('department_name');
            $table->decimal('amount_allocated', 15, 2);
            $table->enum('status', ['Approved','Rejected'])->default('Rejected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alocatebudgets');
    }
};
