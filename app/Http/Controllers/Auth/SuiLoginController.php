<?php

namespace App\Http\Controllers\Auth;

use App\Models\Sui;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuiLoginController extends Controller
{
    public function index()
    {
        return view('sui.suilogin');
    }

    public function store(Request $request)
    {
      
        $this->validate($request, [
            'name' => 'required|max:4',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('name', 'password'))){
            return back()->with('status', 'Invalid SUI');
        }

        return redirect()->route('vote');

        
    }
}
