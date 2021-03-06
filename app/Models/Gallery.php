<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    public $timestamps = true;

    protected $fillable = [
        'image',
        'created_at',
        'updated_at',
    ];
}
