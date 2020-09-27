<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;


use App\Classe;
use App\Http\Controllers\Controller;
use App\Option;
use App\Student;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Client\Request;
use Illuminate\View\View;

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
    public function __construct(Classe $classe, Student $student, Option $option)
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
        return view('admin.student.index', compact('student'));
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

    public  function store(Request $request)
    {

    }


}
