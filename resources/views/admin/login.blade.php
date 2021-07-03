@extends('layouts.login')

@section('content')

<style>
    html, body {
    height: 100%;
    }

    body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }

    .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
    }

    .form-signin .checkbox {
    font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
    z-index: 2;
    }

    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
</style>
    
<main class="form-signin">

    @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
                
    @endif

    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Login</h1>
    
      <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" 
        id="floatingInput" placeholder="username" name="name" value="{{ old('name') }}">
    
        @error('name')
          <div class="error">
            {{ $message }}
          </div>
        @enderror
      </div>
    
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" 
        id="floatingInput" placeholder="password" name="password">
      </div>
    
        @error('password')
          <div class="error">
            {{ $message }}
          </div>
        @enderror
    
    
      <button class="w-100 btn btn-lg btn-secondary" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; KBCF Council Election 2022</p>
    </form>
    </main>

@endsection