<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user=user::paginate(5);
        return view('users.index', compact('user'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

}
