<?php

namespace App\Http\Controllers;

// use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function adminUser(Request $request)
    {
        // Auth::user()->authorizeRoles(['admin',]);

        $user = Auth::user('admin');
        // dd($user);
        return view('permission.admin', compact('user'));
    }

    // public function passUser()
    // {
    //     $user = Auth::user()->get();
    //     return view('permission.pass', compact('user'));
    // }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);


        Auth::user('admin')->update(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->password)
        ));

        return redirect()->route('adminUser')->with('message', 'Admin Succesfully updated');
    }

    public function passAdmin()
    {
        $user = Auth::user('admin');
        // dd($user);
        return view('permission.pass', compact('user'));
    }

    public function pasStore(Request $request)
    {
        $user = Auth::user('admin');
        $current_password = $request->input('current_password');
        $new_password = $request->input('password');
        if (!Hash::check($current_password, $user->password)) {
            return redirect()->route('passAdmin')->with('message', 'Password Error');
        } else {
            $user->fill([
                'password' => Hash::make($request->newPassword)
            ])->save();
        }
    }
}
