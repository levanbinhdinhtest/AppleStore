<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; // Bảng mà model này liên kết

    // Khai báo các cột có thể được thêm/sửa đổi
    // protected $fillable = [
    //     'id', 'category_id', 'description', 'image', 'price', 'stock',
    // ];
    protected $guarded = [];
    protected $keyType = 'string'; // Đảm bảo kiểu dữ liệu của ID là string
    public $incrementing = false; // Nếu ID không tự động tăng


}