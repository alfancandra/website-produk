<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        try {
            $akun = $request->only('username', 'password');
            if (Auth::attempt($akun)) {
                if(Auth::user()->role == 'ADMIN'){
                    return redirect()->route('adm.dashboardadmin');
                }else{
                    return redirect('/');
                }
            } else {
                return redirect()->route('login')->with(['error' => 'Wrong username or password!']);
            }
        } catch (QueryException $e) {
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect()->route('login')->with(['error' => $e->errorInfo]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
