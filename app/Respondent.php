<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'age', 'height', 'weight', 'gender', 'activity_option','activity_factor','estimated_kcal','target_kcal',
    ];
}