<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'name',
        'parent_id',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
