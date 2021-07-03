@extends('layouts.app')

@section('content')
    
    <div class="container mt-4">

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>              
    @endif

        <div class="row">
            <form action="{{ route('sui') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Create SUI</h1>
            
                <div class="form-group">
                <input type="text" class="form-control @error('sui') is-invalid @enderror" 
                id="floatingInput" placeholder="SUI" name="name" value="{{ old('bane') }}">
            
                @error('sui')
                    <div style="color: red">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <input type="hidden" name="password" value="password">
            
                <button class="w-100 btn btn-secondary" type="submit">Create</button>
                <a class="w-100 btn btn-light mt-2" href="{{ route('dashboard') }}">Back</a>
            </form>
        </div>
    </div>
    



@endsection