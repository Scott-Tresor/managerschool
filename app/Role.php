<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/***
 * Class Role
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
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
