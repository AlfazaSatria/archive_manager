<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class File extends Model
{
    
    protected $table = 'files';
    protected $fillable = [
        'department_id', 'description', 'file_name',
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }
}
