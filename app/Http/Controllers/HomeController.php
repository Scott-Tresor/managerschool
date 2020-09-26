<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Response;

/**
 * Class HomeController
 * @package App\Http\Controllers
 * @author scotttresor scotttresor@gmail.com
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Response
     */
    public function index()
    {
        $user = User::all();
        return view('home')->with('user', $user);
    }
}
