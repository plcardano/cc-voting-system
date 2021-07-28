@extends('layouts.app')

@section('content')


    <div class="container mt-4">
        
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                
                
                
                <h2>SUI</h2>
        
                <a class="btn btn-light mb-2" href="{{ route('createsui') }}">Create SUI</a>

                    <table class="mb-4">
                        {{ $suis->links() }}
                        <tbody class="table table-dark">
                            <tr>
                                <th>SUI</th>
                                <th>Status</th>
                            </tr>
            
                            @foreach ($suis as $sui)
                            <tr>
                            
                                <td>{{ $sui->name }}</td>
                                <td>{{ $sui->status }}</td>
                                
                            </tr>   
                            @endforeach    
                        </tbody>
                        
                    </table>
                    
            </div>
            
            
            <div class="col-md-6">
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>              
                @endif

                <h2>Candidates</h2>

                <a class="btn btn-light mb-2" href="{{ route('candidates.create') }}" >New Candidate</a>
                <a class="btn btn-dark mb-2 float-right" href="{{ route('result') }}">Result</a>

                

                <table class="mb-4">
                    <tbody class="table table-dark">
                        <tr class="text-center">
                            <th>Candidates</th>
                            <th>Manage</th>
                        </tr>
        
                        @foreach ($candidates as $candidate)
                        <tr>
                        
                            <td>{{ $candidate->candidate }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="{{ route('candidates.edit', $candidate->id) }}" class="btn btn-secondary"><i class="fas fa-fw fa-edit"></i></a>
                                        
                                    </div>
                                    <div class="col-4">
                                        <form action="{{ route('candidates.destroy', $candidate->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                
                            </td>
                            
                        </tr>   
                        @endforeach    
                    </tbody>
                    
                </table>
                {{-- {{ $candidates->links() }} --}}
                
            </div>
    
        </div>

    </div>

    



    
@endsection