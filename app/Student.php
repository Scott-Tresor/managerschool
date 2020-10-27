<?php

declare(strict_types=1);
namespace App;

use Illuminate\Database\Eloquent\Model;

/***
 * Class Student
 * @package App
 * @author scotttresor@gmail.com
 */
class Student extends Model
{
    protected $fillable = [
        'username',
        'prenom',
        'sexe',
        'birthdays',
        'nationality',
        'phoneNumber',
        'adress',
        'ville',
        'school',
        'province',
        'codeExetat',
        'option',
        'annee',
        'pourcent',
        'Department',
        'Depart'
    ];
}
