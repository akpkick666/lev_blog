<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = [
        'name',
    ];
    
    public function cities()   
    {
        return $this->hasMany('App\City');  
    }
    
}
