<?php

namespace App\Http\Controllers\Auth;

use App\Models\Sui;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuiLoginController extends Controller
{

    // public function authenticated(Request $request, User $user)
    // {
    //     if ($user->status == 1){
    //         Auth::logout();

    //         return back()->with('error', 'You already submitted your vote using that SUI');
    //     }

    //     return redirect()->intended($this->redirectPath());
    // }

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
