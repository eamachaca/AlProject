<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{

    protected $fillable=[
        'mission',
        'mission',
        'title',
        'welcome'
    ];

    public function rules()
    {
        return $this->hasMany('App\Models\Rule');
    }
}
