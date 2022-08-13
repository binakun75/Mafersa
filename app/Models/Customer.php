<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Address;

class Customer extends Model
{
    use HasFactory;

    public function address(){
        return $this->belongsTo(Address::class);
    }
}
