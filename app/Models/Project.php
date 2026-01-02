<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'category',
        'duration',
        'client',
        'consultant',
        'cost',
        'image1',
        'image2',
        'image3',
        'image4',
    ];
}
