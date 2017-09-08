<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
