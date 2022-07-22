<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sayur extends Model
{
    protected $table = 'sayurs';
    
    protected $fillable=[
        'name',
        'slug'
    ];
}
