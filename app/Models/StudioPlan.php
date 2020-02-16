<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudioPlan extends Model
{

    /**
     * Get the course of study plan
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
