<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

/***
 * Class UserController
 * @package App\Http\Controllers\Admin
 * @author scotttresor scotttresor@gmail.com
 */
class UserController extends Controller
{

    /**
     * @var Role
     * @author scotttresor scotttresor@gmail.com
     */
    private  $role;

    /**
     * @var User
     * @author scotttresor scotttresor@gmail.com
     */
    private $user;


    /***
     * UserController constructor.
     * @param Role $role
     * @param User $user
     * @author scotttresor scotttresor@gmail.com
     */
    public function __construct(Role $role, User $user)
    {
        $this->middleware('auth');
        $this->role = $role;
        $this->user = $user;
    }
    /**
     * @return Response
     */
    public function index()
    {
        $roles  = $this->role::all();
        $user = $this->user::all();
        return view('admin.index', compact('user', 'roles'));
    }

    /**
     * @return Response
     */
    public function create()
    {
        $roles  = $this->role::all();
        return  view('admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' =>['required'],
            'email' =>['required', 'email'],
            'fonction' => ['required'],
            'phone' => ['required'],
            'adresse' => ['required'],
            'password' => ['required'],
            'role_id' => ['required', 'integer']
        ]);
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'fonction' => request('fonction'),
            'phone' => request('phone'),
            'adresse' => request('adresse'),
            'role_id' => request('role_id'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * @param User $user
     * @param Role $roles
     * @return Response
     */
    public function show(User $user, Role $roles)
    {
        return  view('admin.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        $roles  = $this->role::all();
        return  view('admin.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $request = $request->validate([
            'name' =>['required'],
            'email' =>['required', 'email'],
            'fonction' => ['required'],
            'phone' => ['required'],
            'adresse' => ['required'],
            'role_id' => ['required', 'integer']
        ]);
        $user->update($request);
        return redirect()->route('admin.user.index');
    }

    /**
     * @param User $user
     * @return Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
