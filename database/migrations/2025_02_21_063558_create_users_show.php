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
        Schema::create('users_show', function (Blueprint $table) {
            $table->id();
            $table->enum('typename', ['นาย', 'นางสาว']);
            $table->string('name');
            $table->integer('age');
            $table->string('schoolname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_show');
    }
};
