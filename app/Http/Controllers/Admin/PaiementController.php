<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Classe;
use App\Http\Controllers\Controller;
use App\Option;
use App\Received;
use App\Student;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Prophecy\Prophecy\Revealer;

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

    /***
     * @return Factory|View
     */
    public function  index()
    {
        $paiement = Received::all();
        return view('admin.paiment.index', compact('paiement'));
    }


    /****
     * @return Factory|View
     */
    public  function  create()
    {
        $student = Student::all();
        $class = Classe::all();
        return view('admin.paiment.create', compact('student', 'class'));
    }

    /***
     * @return RedirectResponse
     */
    public  function store()
    {
        $request = request()->validate([
            'motifpaiement' =>['required'],
            'mount' =>['required', 'integer'],
            'period' => ['required'],
            'student_id' => ['required', 'integer'],
            'classe_id' => ['required', 'integer'],
        ]);
        Received::create($request);

        return redirect()->route('admin.paiement.index');
    }

    /***
     * @param Received $received
     * @return Factory|View
     */
    public  function  show(Received $received)
    {
        $student = Student::all();
        $class = Classe::all();
        return view('admin.paiment.show', compact('received','student', 'class'));
    }

    /**
     * @param Received $received
     * @return void
     */
    public function edit(Received $received)
    {
        $student = Student::all();
        $class = Classe::all();
        return  view('admin.paiment.edit', compact('received','class', 'student'));
    }


    public function update()
    {
        $request = request()->validate([
            'motifpaiement' =>['required'],
            'mount' =>['required', 'integer'],
            'period' => ['required'],
            'student_id' => ['required', 'integer'],
            'classe_id' => ['required', 'integer'],
        ]);
        Received::create($request);
        return redirect()->route('admin.student.index');
    }

    /**
     * @param Received $received
     * @return Response
     * @throws \Exception
     */
    public function destroy(Received $received)
    {
        $received->delete();
        return redirect()->route('admin.paiement.index');
    }
}
