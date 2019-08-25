<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;
use Auth;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listUser()
    {
        $user = Auth::user()->get();
        return view('permission.user', compact('user'));
    }

    public function adminUser()
    {
        $user = Auth::user()->get();
        return view('permission.admin', compact('user'));
    }

    public function passUser()
    {
        $user = Auth::user()->get();
        return view('permission.pass', compact('user'));
    }
}
