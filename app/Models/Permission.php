<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Role;

class Permission extends Model
{
    use HasFactory;

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}

/*
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again
And you come to me on a summer breeze
Keep me warm in your love, then you softly leave
And it's me you need to show
How deep is your love
How deep is your love, how deep is your love
I really mean to learn
'Cause we're living in a world of fools
Breaking us down when they all should let us be
We belong to you and me
I believe in you
You know the door to my very soul
You're the light in my deepest, darkest hour
You're my savior when I fall
And you may not think, I care for you
When you know down inside that I really do
And it's me you need to show
How deep is your love
How deep is your love, how deep is your love
I really mean to learn
'Cause we're living in a world of fools
Breaking us down when they all should let us be
We belong to you and me
And you come to me on a summer breeze
Keep me warm in your love, then you softly leave
And it's me you need to show
How deep is your love
How deep is your love, how deep is your love
I really mean to learn
'Cause we're living in a world of fools
Breaking us down when they all should let us be
We belong to you and me
How deep is your love, how deep is your love
I really mean to learn
'Cause we're living in a world of fools
Breaking us down when they all should let us be
We belong to you and me
How deep is your love, how deep is your love
I really mean to learn
'Cause we're living in a world of fools
Breaking us down when they all should let us be
We belong to you and me*/
