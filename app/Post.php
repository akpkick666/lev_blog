<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    //Categoryに対するリレーション
    //「1対多」の関係なので単数系に
    public function user(){
        return $this->belongsTo('App\User');
    }


    
    protected $fillable = [
        'date',
        'prefecture',
        'city',
        'gym',
        'number',
        'fee',
        'message',
        'user_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
