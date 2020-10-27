<?php

declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Resultat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/***
 * Class ResultatController
 * @package App\Http\Controllers\Api
 * @author scotttresor@gmail.com
 */
class ResultatController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     * @author scotttresor@gmail.com
     */
    public function index()
    {
        return Resultat::orderByDesc('created_at')->get();
    }

    /**
     * Display the specified resource.
     * @param Resultat $result
     * @return Resultat
     * @author scotttresor@gmail.com
     */
    public function show(Resultat $result)
    {
        return  $result;
    }
}
