<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = [
        'code',
        'created_at',
        'updated_at',
        'deleted_at',
        'country',
        'address_1',
        'address_2',
        'state',
        'city',
        'zone',
        'zip_code',
        'lat',
        'lng',
        'type',
        'added_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'added_by', 'id');
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
