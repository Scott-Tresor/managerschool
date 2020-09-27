<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;


use App\Classe;
use App\Http\Controllers\Controller;
use App\Option;
use App\Student;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

/***
 * Class StudentController
 * @package App\Http\Controllers\Admin
 * @author scotttresor scotttresor@gmail.com
 */
class StudentController extends Controller
{
    /**
     * @var Student
     * @author scotttresor scotttresor@gmail.com
     */
    private $student;
    /**
     * @var Option
     * @author scotttresor scotttresor@gmail.com
     */
    private $option;
    /**
     * @var Classe
     * @author scotttresor scotttresor@gmail.com
     */
    private $classe;

    /***
     * StudentController constructor.
     * @param Classe $classe
     * @param Student $student
     * @param Option $option
     */
    public function __construct(
        Classe $classe,
        Student $student,
        Option $option
    )
    {
        $this->middleware('auth');
        $this->student = $student;
        $this->option = $option;
        $this->classe = $classe;
    }

    /***
     * @return Factory|View
     */
    public function index()
    {
        $student  = $this->student::all();
        $classe = $this->classe::all();
        return view('admin.student.index', compact('student', 'classe'));
    }

    /***
     * @return Factory|View
     */
    public function create()
    {
        $option = $this->option::all();
        $class = $this->classe::all();
        return  view('admin.student.create', compact('option', 'class'));
    }

    /**
     * @return RedirectResponse
     */
    public  function store()
    {
        $request = request()->validate([
            'username' =>['required'],
            'postname' =>['required'],
            'firstname' => ['required'],
            'tutairename' => ['required'],
            'phonenumber' => ['required', 'integer'],
            'age' => ['required', 'date'],
            'adresse' => ['required'],
            'nationality' => ['required'],
            'option_id' => ['required', 'integer'],
            'classe_id' => ['required', 'integer'],
        ]);
        Student::create($request);

        return redirect()->route('admin.student.index');
    }

    /***
     * @param Student $student
     * @return Factory|View
     */
    public  function  show(Student $student)
    {
        return view('admin.student.show', compact('student'));
    }

    /**
     * @param Student $student
     * @return void
     */
    public function edit(Student $student)
    {
        $option = $this->option::all();
        $class = $this->classe::all();
        return  view('admin.student.edit', compact('student', 'option', 'class'));
    }


    public function update(Student $student)
    {

        $request = request()->validate([
            'username' =>['required'],
            'postname' =>['required'],
            'firstname' => ['required'],
            'tutairename' => ['required'],
            'phonenumber' => ['required', 'integer'],
            'age' => ['required', 'date'],
            'adresse' => ['required'],
            'nationality' => ['required'],
            'option_id' => ['required', 'integer'],
            'classe_id' => ['required', 'integer'],
        ]);
        $student->update($request);

        return redirect()->route('admin.student.index');
    }

    /**
     * @param Student $student
     * @return Response
     * @throws \Exception
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.student.index');
    }


}
