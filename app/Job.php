<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $casts = [
        'start' => 'date:m/y',
        'end' => 'date:m/y'
    ];

    public function duties()
    {
        return $this->belongsToMany(Duty::class, 'duties_jobs');
    }

/*    public function getDutiesByCategoryAttribute()
    {
        $return =
    }*/
}
