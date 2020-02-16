<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
  
    protected $fillable = [
        'mission',
        'vision',
        'title',
        'welcome'
    ];

    public function achievements() {
        return $this->hasMany(Achievement::class);
    }
}
