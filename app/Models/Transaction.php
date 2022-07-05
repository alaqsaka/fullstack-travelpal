<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [

    ];

    // Relasi transaction details 
    public function details(){
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    // Relasi travel package
    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    // Relasi dengan tabel user
    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    use HasFactory;
}
