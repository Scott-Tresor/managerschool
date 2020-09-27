<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/***
 * Class Received
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class Received extends Model
{

    protected $guarded = [];

    /***
     * @return HasMany
     */
    public  function  students()
    {
        return $this->hasMany('App\Student');
    }
}
