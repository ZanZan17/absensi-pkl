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
        Schema::table('global_settings', function (Blueprint $table) {
            $table->boolean('is_student_active')->default(1)->after('school_website');
            $table->boolean('is_supervisor_active')->default(1)->after('is_student_active');
        });
    }

    public function down(): void
    {
        Schema::table('global_settings', function (Blueprint $table) {
            $table->dropColumn(['is_student_active', 'is_supervisor_active']);
        });
    }
};
