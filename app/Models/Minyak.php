<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minyak extends Model
{
    protected $table = 'minyaks';
    
    protected $fillable=[
        'name',
        'slug'
    ];
}
