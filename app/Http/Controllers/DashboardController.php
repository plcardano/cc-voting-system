<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $suis = User::orderBy('created_at', 'desc')->paginate(10);
        $candidates = Candidate::all();

        return view('admin.dashboard', compact('suis', 'candidates'));
    }

    public function result(){
        $candidates = Candidate::orderBy('count', 'desc')->get();

        return view('admin.result', compact('candidates'));
    }
}
