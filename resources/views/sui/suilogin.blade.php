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

  @if (session('error'))
   <div class="alert alert-danger">
        {{ session('error') }}
   </div>
  @endif

  <form action="{{ route('suilogin') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please Enter your SUI:</h1>
    
    <div class="form-floating">
      <input type="text" class="form-control mb-2" id="floatingInput" placeholder="e.g. ab12" name="name">
      <input type="hidden" name="password" value="password">
    </div>

    <button class="w-100 btn btn-lg btn-secondary" type="submit">Next ></button>
    <a href="/" class="w-100 btn btn-lg btn-secondary mt-1">< Back</a>
    <p class="mt-5 mb-3 text-muted">&copy; KBCF Council Election 2022</p>
  </form>
</main>
    
  




    
@endsection