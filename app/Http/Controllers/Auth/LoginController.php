<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
       
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('name', 'password'))){
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
