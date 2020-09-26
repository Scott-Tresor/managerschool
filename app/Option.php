<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
