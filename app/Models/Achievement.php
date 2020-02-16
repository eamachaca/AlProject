<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'title',
        'area',
        'content',
        'image',
        'date',
        'portal_id'

    ];

    public function portal(){
        return $this->belongsTo(Portal::class);
    }
}
