<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Routine extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot', 'f_subject_id', 'weekday', 'lecture'
    ];

    public function subject()
    {
        return $this->belongsTo(Product::class,'f_subject_id');
    }
}
