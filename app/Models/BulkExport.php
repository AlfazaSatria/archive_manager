<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkExport extends Model
{
    protected $table = 'bulk_exports';
    
    protected $fillable=[
        'name',
        'slug'
    ];
}
