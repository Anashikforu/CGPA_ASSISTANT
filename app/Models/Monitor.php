<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'sleeping_hour', 'study_hour', 'walking_hour', 'meeting_hour','entertainment_hour','regular_date'
    ];
}
