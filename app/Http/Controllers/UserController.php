<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

}
