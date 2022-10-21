<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemfile extends Model
{
    use HasFactory;
    protected $table = 'itemfiles';
    protected $fillable = [
        'item_id',
        'is_primary'
    ];

    public function file()
    {
        return $this->hasMany(File::class);
    }

    public function Item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }
}
