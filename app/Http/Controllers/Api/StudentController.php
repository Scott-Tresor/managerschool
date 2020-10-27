<?php

declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/***
 * Class StudentController
 * @package App\Http\Controllers\Api
 * @author scotttresor@gmail.com
 */
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     * @author scotttresor@gmail.com
     */
    public function index()
    {
        return Student::orderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $student = $request->all();
        dd($student);
        Student::create($student);
        return response()->json([
            'message' => 'Inscription reussi avec success, Veillez passer a la banque pour payer le frais  muni de votre code barre'
        ], 200);
    }


}
