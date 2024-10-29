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
        Schema::create('internal_user', function (Blueprint $table) {
            $table->id();
            $table->string('id_user',10)->unique();
            $table->string('name',100);
            $table->string('email',100);
            $table->string('password',100);
            $table->enum('role',['admin','superadmin','supervisor']);
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->string('position',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_user');
    }
};
