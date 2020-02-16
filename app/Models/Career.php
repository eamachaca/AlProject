<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{

    /**
     * Get the portal that owns the career.
     */
    public function portal()
    {
        return $this->belongsTo(Portal::class);
    }
    /**
     * Get the studio plans for the career.
     */
    public function studioPlans()
    {
        return $this->hasMany(StudioPlan::class);
    }
}

