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
            <form action="{{ route('sui.update', $sui->id) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <h1 class="h3 mb-3 fw-normal">Update SUI</h1>
            
                <div class="form-group">
                <input type="text" class="form-control @error('sui') is-invalid @enderror" 
                id="floatingInput" placeholder="SUI" name="name" value="{{ $sui->name }}">
            
                @error('sui')
                    <div style="color: red">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <input type="hidden" name="password" value="password">
            
                <button class="w-100 btn btn-secondary" type="submit">Update</button>
                <a class="w-100 btn btn-light mt-2" href="{{ route('dashboard') }}">Back</a>
            </form>
        </div>
    </div>
    



@endsection