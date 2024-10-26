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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->primary(); // Khóa chính
            $table->string('price');
            $table->string('description');
            $table->string('stock');
            $table->string('category_id'); // Đảm bảo cột này tồn tại
            // Đặt ràng buộc khóa ngoại
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Xóa ràng buộc khóa ngoại
            $table->dropColumn('category_id'); // Xóa cột category_id
        });

    }
};