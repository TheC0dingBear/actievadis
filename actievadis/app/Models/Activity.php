<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';
    protected $fillable = [
        'name',
        'location',
        'description',
        'datum',
        'startTime',
        'endTime',
        'cost',
        'food',
        'maxPeople',
        'imageUrl',
    ];
}
