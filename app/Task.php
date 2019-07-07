<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function project() { //this is the inverse relationship from task to project model.

            return $this->belongsTo(Project::class);
    }
}
