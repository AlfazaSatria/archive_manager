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

    public function month()
    {
        return $this->belongsTo('App\Models\Month', 'month_id');
    }

    public function bumbu()
    {
        return $this->belongsTo('App\Models\Bumbu', 'bumbu_id');
    }

    public function minyak()
    {
        return $this->belongsTo('App\Models\Minyak', 'minyak_id');
    }

    public function bumbu_export()
    {
        return $this->belongsTo('App\Models\BumbuExport', 'bumbu_export_id');
    }

    public function bulk_export()
    {
        return $this->belongsTo('App\Models\BulkExport', 'bulk_export_id');
    }

    public function sayur()
    {
        return $this->belongsTo('App\Models\Sayur', 'sayur_id');
    }
}
