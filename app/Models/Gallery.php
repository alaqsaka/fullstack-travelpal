<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id', 'image'
    ];

    protected $hidden = [

    ];

    // Membuat relasi dengan travel_packages

    public function travel_package() {
        // belongsTo second argument -> custom foreign key name
        // belongs to third argument -> parent table's custom key
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    use HasFactory;
}
