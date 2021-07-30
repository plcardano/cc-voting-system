@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Thank you!</h1>
            {{-- <p class="lead"></p> --}}
            <hr class="my-4">
            <p>"Therefore, brethren, select from among you servant-leaders of good reputation, full of the Spirit and of wisdom, <br>whom we may put in charge of this task." <br>- Acts 6:3</p>
            <hr>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                  <button type="submit" class="btn btn-outline-danger btn-lg">Exit</button>
              
                </form>
        </div>
    </div>



@endsection