<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => 'required',
           'password' => 'required'
       ]);

       User::create([
           'name' => $request->name,
           'password' => Hash::make($request->password)
       ]);

       Auth::attempt($request->only('name', 'password'));

    //    auth()->attempt($request->only('name', 'password'));

       return redirect()->route('dashboard');
    }
}
