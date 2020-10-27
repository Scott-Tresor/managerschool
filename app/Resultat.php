<?php

declare(strict_types=1);
namespace App;

use Illuminate\Database\Eloquent\Model;

/***
 * Class Resultat
 * @package App
 * @author scotttresor@gmail.com
 */
class Resultat extends Model
{
    protected $fillable = [
        'username', 'prenom', 'department'
    ];
}
