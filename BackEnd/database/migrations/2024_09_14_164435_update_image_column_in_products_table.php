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
        Schema::table('products', function (Blueprint $table) {
            //
            Schema::table('products', function (Blueprint $table) {
                $table->text('image');  // Thay đổi kiểu dữ liệu cột image thành text
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('image');
            });
        });
    }
};