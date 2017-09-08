<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
