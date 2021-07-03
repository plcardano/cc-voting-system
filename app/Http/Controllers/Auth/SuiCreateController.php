<?php

namespace App\Http\Controllers\Auth;

use App\Models\Sui;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SuiCreateController extends Controller
{
    public function index()
    {
        $suis = User::orderBy('created_at', 'desc')->get();

        return view('sui.index', compact('suis'));
    }

    public function create()
    {
        return view('sui.suicreate');   
    }

    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => 'required|max:4',
           'password' => 'required'
       ]);

       User::create([
           'name' => $request->name,
           'password' => Hash::make($request->password)
       ]);

       return redirect()->back()->with('status', 'SUI Created Succesfully');
    }
}
