<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\Address;

class Staff extends Model
{
    use HasFactory;

    public function user(){
       /* $user = User::find($this->user_id);
        return $user;*/
        return $this->belongsTo(User::class);
    }

    public function address(){
        return $this->belongsTo(Address::class,"id","address_id");
    }
}
