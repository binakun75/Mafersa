<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Staff;
use app\Models\Address;
use app\Models\CreditNote;

class BranchOffice extends Model
{
    use HasFactory;
    //buscar los datos por el id de las tablas addresses y staffs
    public function address(){
        return $this->belongsTo(Address::class);
    }
    public function staff(){
        return $this->belongsTo(Staff::class);
    }
    public function credit_notes(){
        return $this->hasMany(CreditNote::class);
    }

}
