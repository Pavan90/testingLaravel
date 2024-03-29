<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    // protected $guarded = [];

    public function tasks() { // this will create relationship between Project table and tasks table
        return $this->hasMany(Task::class);
    }
}
