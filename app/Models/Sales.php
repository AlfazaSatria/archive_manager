<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';

    protected $fillable=[
        'month_id',
        'year',
        'bumbu_id',
        'minyak_id',
        'bumbu_export_id',
        'bulk_export_id',
        'sayur_id',
        'order',
        'sales',
        'acv'
    ];
}
