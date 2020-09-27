<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Student
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class Student extends Model
{

    protected $guarded = [];
    /***
     * @return BelongsTo
     */
    public  function classes()
    {
        return $this->belongsTo('App\Classe');
    }

    /**
     * @return BelongsTo
     */
    public function  options()
    {
        return $this->belongsTo('App\Option');
    }


    public function  receiveds()
    {
        return $this->belongsTo('App\Received');
    }

}
