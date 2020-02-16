<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable=[
        'title',
        'description',
        'portal_id'
    ];
    
    public function portal(){
        return $this->belongsTo(Portal::class);
    }
   
}
