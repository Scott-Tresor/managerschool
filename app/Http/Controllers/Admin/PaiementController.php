<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Classe;
use App\Http\Controllers\Controller;
use App\Option;
use App\Received;
use App\Student;
use App\User;

/***
 * Class PaiementController
 * @package App\Http\Controllers\Admin
 * @author scotttresor scotttresor@gmail.com
 */
class PaiementController extends  Controller
{
    /**
     * @var
     * @author scotttresor scotttresor@gmail.com
     */
    private $student;
    /**
     * @var
     * @author scotttresor scotttresor@gmail.com
     */
    private $option;
    /**
     * @var
     * @author scotttresor scotttresor@gmail.com
     */
    private $classe;
    /**
     * @var
     * @author scotttresor scotttresor@gmail.com
     */
    private $user;
    /**
     * @var
     * @author scotttresor scotttresor@gmail.com
     */
    private $received;

    /***
     * PaiementController constructor.
     * @param Student $student
     * @param Option $option
     * @param Classe $classe
     * @param User $user
     * @param Received $received
     */
    public function __construct(
        Student $student, Option $option, Classe $classe, User $user, Received $received)
    {
        return $this->middleware('auth');
        $this->student = $student;
        $this->option = $option;
        $this->classe = $classe;
        $this->user = $user;
        $this->received = $received;
    }

    public function  index()
    {
        $paiement = Received::all();
        return view('admin.paiment.index', compact('paiement'));
    }


    public  function  create()
    {
        $student = Student::all();
        $class = Classe::all();
        return view('admin.paiment.create', compact('student', 'class'));
    }

    public  function store()
    {
        dd(request()->all());
    }
}
