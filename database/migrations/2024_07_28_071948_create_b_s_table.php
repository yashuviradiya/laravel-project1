<?php

use App\Models\Subcategory;
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
        Schema::create('b_s', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('slug');
            $table->foreignIdFor(Subcategory::class);
            $table->string('shortdesc');
            $table->string('desc');
            $table->string('image');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_s');
    }
};
