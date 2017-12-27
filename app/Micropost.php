<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['cntent', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
