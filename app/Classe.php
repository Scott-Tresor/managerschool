<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Classe
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class Classe extends Model
{
    /****
     * @return HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
