@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Thank you!</h1>
            <p class="lead">Bible verse</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                  <button type="submit" class="btn btn-outline-danger">Exit</button>
              
                </form>
        </div>
    </div>



@endsection