<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = ['year', 'image'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function getNewest()
    {
        return $this->latest()->limit(1)->get()[0];
    }
}
