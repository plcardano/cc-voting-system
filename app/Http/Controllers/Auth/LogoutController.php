<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function store()
    {
        // $user = Auth::user();
        // $user->status = 1;
        // $user->save();
        // Auth::logout();

        return redirect()->route('home');
    }
}
