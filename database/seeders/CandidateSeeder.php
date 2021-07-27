<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create([
            'candidate' => 'paul'
        ]);

        Candidate::create([
            'candidate' => 'milet'
        ]);

        Candidate::create([
            'candidate' => 'third'
        ]);

        Candidate::create([
            'candidate' => 'angieline'
        ]);

        Candidate::create([
            'candidate' => 'arjee'
        ]);

        Candidate::create([
            'candidate' => 'ivan'
        ]);

        Candidate::create([
            'candidate' => 'cesar'
        ]);

        Candidate::create([
            'candidate' => 'jay'
        ]);
    }
}
