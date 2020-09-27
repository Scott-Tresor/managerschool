<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/***
 * Class Option
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class Option extends Model
{
    /***
     * @return HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
