<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    /**
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
