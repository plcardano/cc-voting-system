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
    <form action="{{ url('/') }}">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="AB12" name="name" autofocus>
        <label for="floatingInput">Username</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingInput" name="password">
        <label for="floatingInput">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; KBCF Council Election 2022</p>
    </form>
  </main>
    
  




    
@endsection