<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $table='da5_brands';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Cần có những trường bắt buộc phải thay đổi
    protected $fillable = [
        'name',
        'description',
    ];
}
