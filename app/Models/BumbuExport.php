<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BumbuExport extends Model
{
    protected $table = 'bumbu_export';
    
    protected $fillable=[
        'name',
        'slug'
    ];
}
