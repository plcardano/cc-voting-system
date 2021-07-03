<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all(); 
        
        return view('vote.vote', compact('candidates'));
    }

    public function store(Request $request){

        // $votes = $request->all();

        // DB::table('candidates')->increment('count', 1)->where('candidate' => $votes);     

        // return redirect()->route('vote');

    

    }

    public function update(Request $request){

        // $input = $request->candidate1;

        // $candidates = Candidate::find($input);

        // $vote = $candidates->count + 1;

        // Candidate::update($vote);

        // $input = [$request->candidate1, $request->candidate2, $request->candidate3, $request->candidate4, $request->candidate5, $request->candidate6, $request->candidate7, $request->candidate8];

        Candidate::where('id', $request->candidate1)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate2)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate3)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate4)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate5)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate6)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate7)
        ->update(['count' => DB::raw('count+1')]);

        Candidate::where('id', $request->candidate8)
        ->update(['count' => DB::raw('count+1')]);

        // $candidates = DB::table('candidates')->where('id', '=', $input);

        return redirect()->route('done');


    }
}
