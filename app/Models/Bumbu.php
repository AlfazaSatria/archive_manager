<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bumbu extends Model
{
    protected $table = 'bumbus';

    protected $fillable=[
        'name',
        'slug'
    ];
}
