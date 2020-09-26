<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Role;
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
     * @var Role
     * @author scotttresor scotttresor@gmail.com
     */
    private $role;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Role $role)
    {
        $this->middleware('auth');
        $this->role = $role;
    }

    /**
     * @return Response
     */
    public function index()
    {
        $user = User::all();
        $role = $this->role::all();
        return view('home', compact('user', 'role'));
    }
}
