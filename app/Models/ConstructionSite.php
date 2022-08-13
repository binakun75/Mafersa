<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Customer;
use app\Models\CreditNote;


class ConstructionSite extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function credit_note(){
        return $this->belongsTo(CreditNote::class);
    }
}
