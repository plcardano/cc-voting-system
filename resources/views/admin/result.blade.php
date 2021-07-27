@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        
        <h1>Results</h1>

        <div class="mb-3 mt-3">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-dark">Back</a>
        </div>

        <table>
            <tbody class="table table-dark">
                <tr>
                    <th>Candidates</th>
                    <th>Votes</th>
                </tr>

                @foreach ($candidates as $candidate)
                <tr>
                   
                    <td>{{ $candidate->candidate }}</td>
                    <td>{{ $candidate->count }}</td>
                    
                </tr>   
                @endforeach    
            </tbody>
            
        </table>

    </div>

   



    
@endsection