<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/63jV4JaCJbcuCq3WapTxPZt3d03zq83MlQH7Dlc5.png';

        return '/storage/' . $imagePath;
    }

    
}
