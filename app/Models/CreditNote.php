<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\ConstructionSite;
use app\Models\BranchOffice;
use app\Models\Status;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CreditNote extends Model
{
    use HasFactory;
    //de uno a uno 
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function construction_site(){
        return $this->belongsTo(ConstructionSite::class);
    }

    public function brunch_office(){
        return $this->belongsTo(BranchOffice::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }


}
