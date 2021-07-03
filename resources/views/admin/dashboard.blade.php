@extends('layouts.app')

@section('content')


    <div class="container mt-4">
        
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                
                <a class="btn btn-outline-dark mb-2" href="{{ route('createsui') }}">Create SUI</a>
                
                <h1>SUI</h1>
        
                    <table>
                        <tbody class="table table-dark">
                            <tr>
                                <th>SUI</th>
                            </tr>
            
                            @foreach ($suis as $sui)
                            <tr>
                            
                                <td>{{ $sui->name }}</td>
                                
                            </tr>   
                            @endforeach    
                        </tbody>
                        
                    </table>
            </div>
            
            <div class="col-md-6">
                <a class="btn btn-outline-dark mb-2" href="{{ route('result') }}">Result</a>
            </div>
    
        </div>
       
    </div>

    div



    
@endsection