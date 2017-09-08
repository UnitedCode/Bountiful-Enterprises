<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'city', 'state', 'weight', 'year_id'];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
