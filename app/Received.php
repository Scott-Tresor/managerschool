<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/***
 * Class Received
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class Received extends Model
{
    /***
     * @return BelongsTo
     */
    public  function  users()
    {
        return $this->belongsTo('App\User');
    }
}
