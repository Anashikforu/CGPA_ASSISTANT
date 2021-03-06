<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_name', 'f_subject_id', 'exam_time', 'weight','mark','feedback','exam_date','status'
    ];

    public function subject()
    {
        return $this->belongsTo(Product::class,'f_subject_id');
    }
}
