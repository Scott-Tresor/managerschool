<?php

declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Communicate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/***
 * Class CommunicateController
 * @package App\Http\Controllers\Api
 * @author scotttresor@gmail.com
 */
class CommunicateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     * @author scotttresor@gmail.com
     */
    public function index()
    {
        return Communicate::orderByDesc('created_at')->get();
    }


    /**
     * Display the specified resource.
     * @param Communicate $communicate
     * @return Communicate
     * @author scotttresor@gmail.com
     */
    public function show(Communicate $communicate)
    {
        return $communicate;
    }
}
