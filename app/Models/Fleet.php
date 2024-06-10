<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fleet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'plate_no',
        'brand',
        'year_model',
        'model',
        'body_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
