@extends('layouts.app')

@section('content')
    
    <div class="container mt-4">

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>              
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="row">
            <form action="{{ route('candidates.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mb-3 fw-normal">New Candidate</h1>
            
                <div class="form-group">
                <input type="text" class="form-control @error('candidate') is-invalid @enderror" 
                id="floatingInput" placeholder="Candidate" name="candidate" value="{{ old('candidate') }}">
            
                @error('candidate')
                    <div style="color: red">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            
                <button class="w-100 btn btn-secondary" type="submit">Create</button>
                <a class="w-100 btn btn-light mt-2" href="{{ route('dashboard') }}">Back</a>
            </form>
        </div>
    </div>
    



@endsection