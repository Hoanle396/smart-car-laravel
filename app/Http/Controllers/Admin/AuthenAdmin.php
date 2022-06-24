<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthenAdmin extends Controller
{
    public function index(){
        if(session()->has('admin')){
            return redirect()->route('dashboard');
        }
        else {
            return view('admin.login');
        }
    }
    public function login(Request $request)
    {
        try {
            if (Auth::attempt([
                'email' => $request->get('email'),
                'password' => $request->get('password'),
                'role' => 'admin'
            ])) {
                $data = User::where('email', $request->email)->get()->first();
                session()->put('admin', $data->email);
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Unauthorized');
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
